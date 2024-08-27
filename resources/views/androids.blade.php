<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konter Famili</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    @include('navbar')
    <!-- android featured section -->
    <section class="mt-12 bg-gray-100 py-12">
        <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-semibold text-gray-900 mb-8">Produk Android Unggulan</h3>
            <div class="flex mx-auto justify-center items-center gap-10 flex-wrap gap-8">
                <!-- Android Phone Card -->
                @foreach ($androids as $android)
                <div class="bg-white p-6 rounded-lg shadow-lg w-full sm:w-1/2 lg:w-1/3 xl:w-1/4">
                    <img class="h-44 w-48" src="{{ asset('storage/' . $android->image) }}" alt="{{ $android->name }}"
                        class="h-54 w-full object-cover object-center mb-6">
                    <h4 class="text-xl font-medium text-gray-900">{{ $android->name }}</h4>
                    <p class="text-blue-600 font-semibold mt-4">Rp {{ number_format($android->price, 0, ',', '.') }}</p>
                    <button onclick="viewModal({{ $android->id }})" class="mt-4 bottom-0 flex justify-end bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">
                        Detail
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- android featured section -->

    <!-- modal box -->
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
                <button id="closeModal"
                    class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700">Tutup</button>
            </div>
        </div>
    </div>

    <!-- modal box -->

    <!-- JavaScript -->
    <script>
        function viewModal(androidId) {
            // Data dari PHP di-pass ke JS (bisa juga menggunakan AJAX)
            const androids = @json($androids);

            // Temukan data phone berdasarkan ID
            const android = androids.find(p => p.id === androidId);

            // Update isi modal dengan data phone
            document.getElementById('modalPhonePrice').textContent = `Rp ${new Intl.NumberFormat('id-ID').format(android.price)}`;
            document.getElementById('modalPhoneName').textContent = android.name;
            document.getElementById('modalPhoneSpecification').textContent = android.specification;
            
            document.getElementById('modalPhoneImage').src = `{{ asset('storage') }}/${android.image}`;
            document.getElementById('modalPhoneImage').alt = android.name;

            // Tampilkan modal
            document.getElementById('phoneModal').classList.remove('hidden');
        }

        // Close modal
        document.getElementById('closeModal').addEventListener('click', function () {
            document.getElementById('phoneModal').classList.add('hidden');
        });
        </script>
</body>

</html>
