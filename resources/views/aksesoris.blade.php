<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Mobile | Aksesoris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    @include('navbar')

    <section class="main">
        <div class="container mx-auto px-8 py-8">
            <h1 class="text-3xl font-bold text-gray-900">Aksesoris</h1>
        </div>
        <div class="w-full flex justify-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-3 mt-6 w-[1200px] sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ($aksesoris as $akse)

                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $akse->image) }}" alt="{{ $akse->name }}"
                            class="w-full h-60 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $akse->name }}</h2>
                            <p class="text-gray-600 mb-4">{{ $akse->description }}</p>
                            <p class="text-gray-600 mb-4">Rp. {{ $akse->price }}</p>
                           
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    @include('footer')
</body>

</html>