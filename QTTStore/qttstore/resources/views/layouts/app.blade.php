<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QTT STORE</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Kiểm tra trạng thái đăng nhập từ Session Laravel
        let username = "{{ session('username') }}";
        if (username) {
            localStorage.setItem("username", username);
        }

        // Cập nhật giao diện
        let accountText = document.querySelector("#accountBtn span");
        if (localStorage.getItem("username")) {
            accountText.innerText = localStorage.getItem("username");
        }
    });

    function logout() {
        localStorage.removeItem("username"); // Xóa dữ liệu khi đăng xuất
        window.location.href = "{{ route('logout') }}";
    }
</script>

<body class="bg-gray-100">
    @include('frontend.navbar')

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>

    @include('frontend.footer')
</body>
</html>
