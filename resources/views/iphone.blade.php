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
                        <button onclick="showiPhoneDetails({{ $iphone->id }})"
                            class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">Detail</button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
     <!-- product Apple section -->

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

       <!-- JavaScript -->
    <script>
        function showiPhoneDetails(iphoneId) {
            // Data dari PHP di-pass ke JS (bisa juga menggunakan AJAX)
            const iphones = @json($iphones);

            // Temukan data phone berdasarkan ID
            const iphone = iphones.find(p => p.id === iphoneId);

            // Update isi modal dengan data phone
            document.getElementById('modalPhonePrice').textContent = `Rp ${new Intl.NumberFormat('id-ID').format(iphone.price)}`;
            document.getElementById('modalPhoneName').textContent = iphone.name;
            document.getElementById('modalPhoneSpecification').textContent = iphone.specification;
            document.getElementById('modalPhoneDescription').textContent = iphone.description;
            document.getElementById('modalPhoneImage').src = `{{ asset('storage') }}/${iphone.image}`;
            document.getElementById('modalPhoneImage').alt = iphone.name;

            // Tampilkan modal
            document.getElementById('phoneModal').classList.remove('hidden');
        }

        // Close modal
        document.getElementById('closeModal').addEventListener('click', function () {
            document.getElementById('phoneModal').classList.add('hidden');
        });
</script>
    @include('footer')
</body>
</html>