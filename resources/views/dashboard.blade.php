@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Dashboard</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <a href="{{ route('products.index') }}" class="block p-6 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold">Products</h3>
                        <p class="mt-1 text-blue-100">Manage all products in your inventory.</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4l3 10 4-18 3 10h4" />
                    </svg>
                </div>
            </a>


            <a href="{{ route('categories.index') }}" class="block p-6 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold">Categories</h3>
                        <p class="mt-1 text-green-100">View and manage product categories.</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
            </a>
        </div>

        <div class="mt-8 bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold text-gray-800">Tailwind v4 is working 🎉</h3>
        </div>
    </div>
@endsection
