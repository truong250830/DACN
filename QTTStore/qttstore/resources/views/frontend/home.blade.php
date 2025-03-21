@extends('layouts.app')

@section('content')
<div class="grid grid-cols-4 gap-4">
    <!-- Menu danh mục -->
    @if(session('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)"
        x-show="show" x-transition.duration.500ms
        class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg flex items-center space-x-3"
        :class="{ 'bg-red-500': '{{ session('error') }}' }">
        <span>
            {{ session('success')}}
        </span>
        <button @click="show = false" class="ml-2 text-white">
            ✖
        </button>
    </div>
    @endif
    <div class="col-span-1 bg-white p-4 shadow-md">
        <h2 class="text-lg font-bold mb-2">Danh mục sản phẩm</h2>
        <ul class="space-y-2">
            <li><a href="#" class="text-blue-600 hover:underline">Điện thoại</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">Laptop</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">Phụ kiện</a></li>
        </ul>
    </div>

    <!-- Ảnh slide -->
    <div class="col-span-3">
        <div class="bg-gray-300 h-60 flex items-center justify-center text-xl">
            Ảnh Slide Banner
        </div>
    </div>
</div>

<!-- Danh sách sản phẩm -->
<div class="mt-8">
    <h2 class="text-xl font-bold mb-4">Sản phẩm nổi bật</h2>
    <div class="grid grid-cols-4 gap-4">
        <div class="bg-white p-4 shadow-md">
            <img src="https://via.placeholder.com/150" alt="Sản phẩm">
            <h3 class="text-lg mt-2">Sản phẩm A</h3>
            <p class="text-red-600 font-bold">1.000.000đ</p>
        </div>

        <div class="bg-white p-4 shadow-md">
            <img src="https://via.placeholder.com/150" alt="Sản phẩm">
            <h3 class="text-lg mt-2">Sản phẩm B</h3>
            <p class="text-red-600 font-bold">2.000.000đ</p>
        </div>

        <div class="bg-white p-4 shadow-md">
            <img src="https://via.placeholder.com/150" alt="Sản phẩm">
            <h3 class="text-lg mt-2">Sản phẩm C</h3>
            <p class="text-red-600 font-bold">3.000.000đ</p>
        </div>

        <div class="bg-white p-4 shadow-md">
            <img src="https://via.placeholder.com/150" alt="Sản phẩm">
            <h3 class="text-lg mt-2">Sản phẩm D</h3>
            <p class="text-red-600 font-bold">4.000.000đ</p>
        </div>
    </div>
</div>
@endsection