<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    public function ShowLogin(){
        return \view("frontend.login");
    }
    
    public function showRegister()
    {
        return \view('frontend.register');
    }

    // Xử lý đăng ký
    public function register(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users_account,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Tạo user mới
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'role' => 'user', 
        ]);

        // Lưu session
        session([
            'id'    => $user->id,
            'name'  => $user->name,
            'email' => $user->email,
            'role'  => $user->role,
        ]);
        

        // Chuyển hướng đến trang Dashboard
        return redirect()->route('showlogin')->with('success', 'Đăng ký thành công!');
    }

    public function login(Request $request){
        $request->validate([
            'email' =>'required|email',
            'password' => ['required',
                Password::min(8)
                ->letters()
                ->mixedCase()
                ->symbols()
                ->numbers()
            ],
        
        ]);
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return back()->with('error', 'Email hoặc mật khẩu không đúng!');
        }
        
        $remember = $request->has('remember'); 
        Auth::login($user, $remember);
        session([
            'id'    => $user->id,
            'name'  => $user->name,
            'email' => $user->email,
            'role'  => $user->role,
        ]);
        
        if(session('role') === 'admin'){
            return redirect()->route('dashboard')->with('success', 'Bạn đã đăng nhập thành công!');
        }else {
            return redirect()->route('homepage')->with('success', 'Đăng nhập thành công!');
        }   
    }

    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken();
        return redirect()->route('homepage')->with('success', 'Bạn đã đăng xuất thành công!');
    }

}
