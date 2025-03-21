<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký - QTT STORE</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Đăng Ký</h2>

        @if(session('error'))
            <div class="bg-red-100 text-red-600 p-2 mb-4 rounded">{{ session('error') }}</div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Tên đầy đủ</label>
                <input type="text" name="name" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Mật khẩu</label>
                <input type="password" name="password" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Xác nhận mật khẩu</label>
                <input type="password" name="password_confirmation" class="w-full border p-2 rounded" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Đăng Ký</button>
        </form>
        
        <p class="mt-4 text-center text-sm">Bạn đã có tài khoản? <a href="{{ route('showlogin') }}" class="text-blue-600">Đăng nhập</a></p>
    </div>
</body>
</html>
