<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Mobile & Accessories</title>
    @vite('resources/css/app.css')
    <style>
        .slide {
            display: none;
        }

        .active {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    @include('navbar')

    <!-- Hero Section -->
    <header class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Temukan Smartphone Impianmu di <span class="text-sky-500">Family Mobile</span></h2>
            <p class="mt-4 text-lg text-gray-500">Di Family Mobile kami menawarkan berbagai model iPhone dan Android terbaru dengan harga terbaik dan yang pastinya terjangkau <br>
                Tunggu apalagi yukk kunjungi konter kami untuk sekarang mendapatkan penawaran khusus!</p>
        </div>
    </header>

    <!-- Image Slider -->
    <!-- Image Slider -->
    <section class="md:mt-12 bg-white md:w-[1200px] rounded-2xl flex justify-center items-center mx-auto py-12">
        <div class="relative w-[800px] h-[350px] rounded-lg mx-auto px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden relative">
                <!-- Slider Images -->
                <div class="slide active">
                    <img src="{{ asset('storage/' . $phones[0]->image) }}" alt="Slider Image 1"
                        class="w-full object-contain h-96 rounded-xl">
                </div>
                <div class="slide">
                    <img src="{{ asset('storage/' . $phones[1]->image) }}" alt="Slider Image 2"
                        class="w-full object-contain h-96">
                </div>
                <div class="slide">
                    <img src="{{ asset('storage/' . $phones[2]->image) }}" alt="Slider Image 3"
                        class="w-full object-contain h-96">
                </div>
                <!-- Add more slides as needed -->
            </div>
        </div>
    </section>
    <!-- Featured iPhone Products Section -->
    <section class="mt-12 bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-semibold text-gray-900 mb-8">Produk iPhone Unggulan</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Phone Card -->
                @foreach($phones as $phone)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('storage/' . $phone->image) }}" alt="{{ $phone->name }}" class="h-54 w-full object-cover object-center mb-6">
                    <h4 class="text-xl font-medium text-gray-900">{{ $phone->name }}</h4>
                    <p class="text-gray-500">{{ $phone->specification }}</p>
                    <p class="text-blue-600 font-semibold mt-4">Rp {{ number_format($phone->price, 0, ',', '.') }}</p>
                    <button onclick="showPhoneDetails({{ $phone->id }})" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">Detail</button>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Discount Section -->
    <section class="mt-10">
        <div class="max-w-7xl mx-auto w-full lg:w-[1000px] gap-9 flex flex-col md:flex-row justify-center items-center rounded-3xl bg-white px-4 sm:px-6 lg:px-8">
            <div>
                <h1 class="text-2xl font-bold">Nikmati Potongan harga diskon</h1>
                <p class="text-4xl font-semibold text-sky-600">hingga 20%</p>
                <iframe class="mt-5" src="https://lottie.host/embed/b7fb5eab-07bc-4ad8-b593-e3c8a58f47a3/380ey6Leu4.json"></iframe>
            </div>
            <div class="w-[200px] sm:w-[300px] mt-8 md:mt-0">
                <img src="{{ asset('storage/' . $phones[0]->image) }}" alt="">
            </div>
        </div>
    </section>

    <!-- About section -->
    <section class="mt-10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-center items-center rounded-3xl bg-white px-4 sm:px-6 lg:px-8">
            <div class="mx-auto rounded-lg">
                <h1 class="text-center font-bold text-3xl py-3">Belanja asik dan hemat di <span class="text-sky-500"> Family Mobile </span></h1>
                <div class="mt-5 flex flex-col md:flex-row justify-between items-center gap-8">
                    <p class="font-bold text-md text-center">Nimati berbagai penawaran menarik dari setiap produk kami</p>
                    <iframe src="https://lottie.host/embed/647ddd09-b12c-451d-a66b-a9e2f9d66c48/vsPXb56IdU.json"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Lets Buy -->
    <section class="mt-10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-9 justify-center items-center rounded-3xl bg-white px-4 sm:px-6 lg:px-8">
            <div>
                <h1 class="text-center font-bold text-2xl py-3">Tunggu apalagi ayo beli smartphone dan iPhone impianmu di <span class="text-sky-500">Family Mobile</span> 🚀</h1>
                <div class="mt-2 mb-4 flex justify-center md:ml-56 items-center gap-8">
                    <a href="/products" class="p-3 bg-sky-400 hover:bg-sky-800 transform transition duration-300 rounded-lg">
                        <span class="text-white font-semibold">Beli sekarang</span>
                    </a>
                </div>
            </div>
            <div>
                <iframe src="https://lottie.host/embed/712188ad-a0d8-4e9c-aad2-863d131e818b/op6LvwqDKL.json"></iframe>
            </div>
        </div>
    </section>

    <!-- Modal Background -->
    <div id="phoneModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-75">
        <div class="bg-white rounded-lg shadow-lg max-w-md w-full">
            <!-- Modal Content -->
            <div class="p-6 overflow-y-auto h-96 w-96">
                <h3 id="modalPhoneName" class="text-xl font-semibold text-gray-900 mb-4"></h3>
                <img id="modalPhoneImage" src="" alt="" class="h-64 w-64 object-cover object-center mb-6">
                <p id="modalPhonePrice" class="text-blue-600 font-semibold text-lg"></p>
                <p id="modalPhoneSpecification" class="text-gray-700 mb-4"></p>
                <p id="modalPhoneOS" class="text-gray-500 mb-4"></p>
                <p id="modalPhoneDescription" class="text-gray-500"></p>
            </div>
            <!-- Close Button -->
            <div class="p-4 border-t border-gray-200 text-right">
                <button id="closeModal" class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700">Tutup</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-300">
            <p>&copy; 2024 Konter Famili. Semua Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        function showPhoneDetails(phoneId) {
            const phones = @json($phones);

            const phone = phones.find(p => p.id === phoneId);

            document.getElementById('modalPhonePrice').textContent = `Rp ${new Intl.NumberFormat('id-ID').format(phone.price)}`;
            document.getElementById('modalPhoneName').textContent = phone.name;
            document.getElementById('modalPhoneSpecification').textContent = phone.specification;
            document.getElementById('modalPhoneOS').textContent = phone.OS;
            document.getElementById('modalPhoneDescription').textContent = phone.description;
            document.getElementById('modalPhoneImage').src = `{{ asset('storage/') }}/${phone.image}`;

            document.getElementById('phoneModal').classList.remove('hidden');
        }

        document.getElementById('closeModal').addEventListener('click', () => {
            document.getElementById('phoneModal').classList.add('hidden');
        });

        let slideIndex = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlides() {
            slides.forEach((slide, index) => {
                slide.style.display = 'none';
                if (index === slideIndex) {
                    slide.style.display = 'block';
                }
            });
            slideIndex = (slideIndex + 1) % slides.length;
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }

        showSlides();
    </script>
</body>

</html>
