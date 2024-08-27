<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konter Famili</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('navbar')

    <!-- SimCard Card Section -->
    <section class=" bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-semibold text-gray-900 mb-8">Produk Konter Famili</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mx-auto lg:grid-cols-4 gap-8">
                <!-- Sim Card Card -->
                <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <a href="/sims">
                        <div class="relative">
                            <img src="{{ asset('storage/byu.jpg') }}" alt="Sim Card Image" class="h-48 w-full object-cover object-center rounded-t-lg">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 rounded-t-lg"></div>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-xl font-medium text-gray-900">Sim Card</h4>
                            <p class="text-gray-500 mt-2">Temukan berbagai jenis Sim Card dengan penawaran menarik. Pilih yang sesuai dengan kebutuhan Anda.</p>
                        </div>
                    </a>
                </div>
                
                <!-- Androids Card -->
                <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <a href="/androids">
                        <div class="relative">
                            <img src="{{ asset('storage/f4.jpg') }}" alt="Androids Image" class="h-48 w-full object-cover object-center rounded-t-lg">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 rounded-t-lg"></div>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-xl font-medium text-gray-900">Androids</h4>
                            <p class="text-gray-500 mt-2">Temukan berbagai jenis Android dengan penawaran menarik. Pilih yang sesuai dengan kebutuhan Anda.</p>
                        </div>
                    </a>
                </div>
                <!-- Androids Card End -->
                
                <!-- Tambahkan lebih banyak card di sini jika diperlukan -->
                 <!-- iPhone Card -->
                 <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <a href="/iphones">
                        <div class="relative">
                            <img src="{{ asset('storage/01J66QRPBAB542NY6H3NCY3KPR.jpg') }}" alt="Androids Image" class="h-48 w-full object-cover object-center rounded-t-lg">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 rounded-t-lg"></div>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-xl font-medium text-gray-900">iPhone</h4>
                            <p class="text-gray-500 mt-2">Temukan berbagai jenis iPhone dengan penawaran menarik. Pilih yang sesuai dengan kebutuhan Anda.</p>
                        </div>
                    </a>
                </div>
                 <!-- iPhone Card -->

                 <!-- accessories card -->
                 <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <a href="/aksesoris">
                        <div class="relative">
                            <img src="{{ asset('storage/caseip14.jpg') }}" alt="Androids Image" class="h-48 w-full object-cover object-center rounded-t-lg">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 rounded-t-lg"></div>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-xl font-medium text-gray-900">Aksesoris</h4>
                            <p class="text-gray-500 mt-2">Temukan berbagai jenis aksesoris dengan penawaran menarik. Pilih yang sesuai dengan kebutuhan Anda.</p>
                        </div>
                    </a>
                </div>
                 <!-- accessories card -->
            </div>
        </div>
    </section>
        <!-- Footer -->
        <footer class="bg-gray-800 py-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-300">
            <p>&copy; 2024 Konter Famili. Semua Hak Cipta Dilindungi.</p>
        </div>
    </footer>

</body>
</html>
