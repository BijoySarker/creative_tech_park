@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Product</h2>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg shadow">
                <ul class="list-disc pl-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Product Name -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Product Name</label>
                <input type="text" name="product_name" value="{{ old('product_name', $product->product_name) }}"
                       class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-200" required>
            </div>

            <!-- Price -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Price</label>
                <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}"
                       class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-200" required>
            </div>

            <!-- Categories -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Categories</label>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-2 max-h-64 overflow-y-auto border p-3 rounded-lg bg-gray-50">
                    @foreach($categories as $category)
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                   class="form-checkbox h-5 w-5 text-blue-600"
                                   @if($product->categories->contains($category->id)) checked @endif>
                            <span class="ml-2 text-gray-700">{{ $category->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            <!-- Brand -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Brand</label>
                <input type="text" name="brand" value="{{ old('brand', $product->brand) }}"
                       class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-200" required>
            </div>

            <!-- Product Warranty -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Product Warranty</label>
                <input type="text" name="product_warranty" value="{{ old('product_warranty', $product->product_warranty) }}"
                       class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-200">
            </div>

            <!-- Buttons -->
            <div class="flex items-center">
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg shadow hover:bg-green-700 transition">
                    Update Product
                </button>
                <a href="{{ route('products.index') }}" class="ml-4 bg-gray-300 px-6 py-2 rounded-lg hover:bg-gray-400 transition">Cancel</a>
            </div>
        </form>
    </div>
@endsection
