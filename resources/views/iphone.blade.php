<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone | Family Mobile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>

    @include('navbar')
   
     <!-- product Apple section -->
     <section class="mt-12 bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-semibold text-gray-900 mb-8">Produk iPhone Unggulan</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Phone Card -->
                @foreach($iphones as $iphone)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('storage/' . $iphone->image) }}" alt="{{ $iphone->name }}"
                            class="h-54 w-full object-cover object-center mb-6">
                        <h4 class="text-xl font-medium text-gray-900">{{ $iphone->name }}</h4>
                        <p class="text-gray-500">{{ $iphone->specification }}</p>
                        <p class="text-blue-600 font-semibold mt-4">Rp {{ number_format($iphone->price, 0, ',', '.') }}</p>
                        <button 
                            class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">Detail</button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
     <!-- product Apple section -->
    
</body>
</html>