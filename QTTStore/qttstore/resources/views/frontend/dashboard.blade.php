<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | QTT STORE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>

<body class="bg-gray-900 text-white">
    
    <header class="bg-gray-800 p-4 flex justify-between items-center shadow-md">
        <h1 class="text-xl font-bold">QTT STORE</h1>
        <div class="flex items-center space-x-4">
            <button class="relative p-2 rounded-full bg-gray-700 hover:bg-gray-600">
                🔔
                <span class="absolute top-0 right-0 bg-red-500 text-xs text-white px-1 rounded-full">3</span>
            </button>
            <div class="relative">

                <button id="userMenuButton" class="p-2 bg-gray-700 rounded-full hover:bg-gray-600">{{session('role')}}</button>
                <div id="userMenu" class="hidden absolute right-0 mt-2 w-48 bg-gray-700 text-white rounded shadow-lg">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-600">Thông tin tài khoản</a>
                    <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-600">Đăng xuất</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Thông báo động -->
    @if(session('success') || session('error'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" 
         x-show="show" x-transition.duration.500ms
         class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg flex items-center space-x-3"
         :class="{ 'bg-red-500': '{{ session('error') }}' }">
        <span>
            {{ session('success') ?? session('error') }}
        </span>
        <button @click="show = false" class="ml-2 text-white">
            ✖
        </button>
    </div>
    @endif
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 h-screen p-5">
            <nav class="mt-5">
                <ul>
                    <li class="py-2"><a href="#" class="hover:text-gray-400">Dashboard</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400">Quản lý sản phẩm</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400">Quản lý danh mục</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400">Quản lý đơn hàng</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400">Quản lý người dùng</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h2 class="text-2xl font-semibold mb-4">Dashboard</h2>
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-gray-800 p-5 rounded shadow">
                    <h3 class="text-lg font-bold">Tổng đơn hàng</h3>
                    <p class="text-2xl">120</p>
                </div>
                <div class="bg-gray-800 p-5 rounded shadow">
                    <h3 class="text-lg font-bold">Doanh thu tháng</h3>
                    <p class="text-2xl">50,000,000đ</p>
                </div>
                <div class="bg-gray-800 p-5 rounded shadow">
                    <h3 class="text-lg font-bold">Tổng số sản phẩm</h3>
                    <p class="text-2xl">350</p>
                </div>
            </div>
            <div class="mt-6 bg-gray-800 p-5 rounded shadow">
                <h3 class="text-lg font-bold">Đơn hàng mới</h3>
                <table class="w-full mt-3">
                    <thead>
                        <tr class="bg-gray-700">
                            <th class="p-2">Mã đơn</th>
                            <th class="p-2">Khách hàng</th>
                            <th class="p-2">Tổng tiền</th>
                            <th class="p-2">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-600">
                            <td class="p-2">#001</td>
                            <td class="p-2">Nguyễn Văn A</td>
                            <td class="p-2">1,200,000đ</td>
                            <td class="p-2 text-green-400">Đã xác nhận</td>
                        </tr>
                        <tr class="border-b border-gray-600">
                            <td class="p-2">#002</td>
                            <td class="p-2">Trần Thị B</td>
                            <td class="p-2">2,500,000đ</td>
                            <td class="p-2 text-red-400">Chờ xử lý</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>
        document.getElementById('userMenuButton').addEventListener('click', function() {
            document.getElementById('userMenu').classList.toggle('hidden');
        });
    </script>
</body>

</html>