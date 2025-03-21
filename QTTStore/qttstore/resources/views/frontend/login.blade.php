<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập - QTT Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Đăng Nhập</h2>

        @if(session('error'))
            <div class="bg-red-100 text-red-600 p-2 mb-4 rounded text-sm">
                {{ session('error') }}
            </div>
        @endif
        @if(session('success'))
            <div class="bg-green-100 text-black p-2 mb-4 rounded text-sm">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ old('email') }}" required>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mật khẩu:</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Ghi nhớ đăng nhập -->
            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <span class="ml-2 text-sm text-gray-600">Ghi nhớ đăng nhập</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:underline">Quên mật khẩu?</a>
            </div>

            <!-- Nút đăng nhập -->
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">Đăng Nhập</button>

            <!-- Link đăng ký -->
            <p class="text-sm text-center mt-4 text-gray-600">Chưa có tài khoản? 
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Đăng ký ngay</a>
            </p>
        </form>
    </div>
</body>

</html>
