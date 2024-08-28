<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM Cards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

@include('navbar')

<body class="bg-gray-100 font-sans antialiased">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">SIM Cards</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($sims as $sim)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <img src="{{ asset('storage/' . $sim->image) }}" alt="{{ $sim->name }}" >
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $sim->name }}</h2>
                        <p class="text-gray-600 mb-4">{{ $sim->description }}</p>
                        <p class="text-blue-600 font-semibold">Rp {{ number_format($sim->price, 0, ',', '.') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
