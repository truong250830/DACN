<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<nav class="bg-gray-600 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="" class="text-2xl font-bold">QTT STORE</a>

        <!-- Thanh tìm kiếm -->
        <div class="relative w-1/3">
            <input type="text" placeholder="Tìm kiếm sản phẩm..." class="w-full px-4 py-2 rounded text-black focus:outline-none">
            <button class="absolute right-2 top-1/2 transform -translate-y-1/2">
                🔍
            </button>
        </div>

        <!-- Menu phải -->
        <div class="flex items-center space-x-6">
            <a href="#" class="hover:underline flex items-center">
                🛒 Giỏ hàng
            </a>

            <!-- Dropdown tài khoản -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="hover:underline flex items-center">
                    👤 Tài khoản
                </button>
                <div x-show="open" @click.away="open = false"
                    class="absolute right-0 mt-2 w-48 bg-white text-black rounded shadow-lg">
                    @if(Auth::check())
                    <p class="px-4 py-2 font-bold">Xin chào, {{ Auth::user()->name }}</p>
                    <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-200">Đăng xuất</a>
                    @else
                    <a href="{{ route('showlogin') }}" class="block px-4 py-2 hover:bg-gray-200">Đăng nhập</a>
                    <a href="{{ route('register') }}" class="block px-4 py-2 hover:bg-gray-200">Đăng ký</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</nav>