<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Creative Tech Park') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

<div class="flex flex-1">

    <aside class="w-64 bg-white shadow-md p-4 flex flex-col">

        <div class="mb-6">
            <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-blue-600 hover:text-blue-800 transition block">
                Creative Tech Park
            </a>
        </div>


        <nav class="space-y-4 flex-1">
            <div>
                <p class="text-gray-700 font-semibold">Products</p>
                <ul class="pl-4 mt-2 space-y-2">
                    <li>
                        <a href="{{ route('products.create') }}" class="block text-gray-600 hover:text-blue-600">Add Product</a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}" class="block text-gray-600 hover:text-blue-600">Show Products</a>
                    </li>
                </ul>
            </div>

            <div>
                <p class="text-gray-700 font-semibold">Categories</p>
                <ul class="pl-4 mt-2 space-y-2">
                    <li>
                        <a href="{{ route('categories.create') }}" class="block text-gray-600 hover:text-blue-600">Add Category</a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}" class="block text-gray-600 hover:text-blue-600">Show Categories</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>

    <main class="flex-1 p-6">
        @yield('content')
    </main>
</div>

</body>
</html>
