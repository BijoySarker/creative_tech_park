@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Add Category</h2>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg shadow">
                <ul class="list-disc pl-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-200" required>
            </div>



            <div class="mb-4">
                <label class="block text-gray-700">Status</label>
                <select name="status" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>


            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg shadow hover:bg-green-700 transition">
                Add Category
            </button>
            <a href="{{ route('categories.index') }}" class="ml-2 bg-gray-300 px-4 py-2 rounded-lg hover:bg-gray-400 transition">Cancel</a>
        </form>
    </div>
@endsection
