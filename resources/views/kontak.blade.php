<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Mobile | Kontak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    @include('navbar')
    <section class="bg-gray-100 py-12 flex items-center justify-center min-h-screen">
    <div class="w-[800px] px-5 bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Hubungi Kami</h2>
        <form id="contactForm" class="px-5 mx-auto">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-4">
                <label for="contact" class="block text-gray-700 font-medium mb-2">Nomor HP / Email</label>
                <input type="text" id="contact" name="contact" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Masukkan nomor HP atau email Anda" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                <textarea id="message" name="message" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 h-32" placeholder="Tulis pesan Anda" required></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 rounded-lg transition duration-300">Kirim Pesan</button>
        </form>
    </div>
</section>

@include('footer')

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form dari pengiriman default

        // Ambil nilai dari form
        const name = document.getElementById('name').value;
        const contact = document.getElementById('contact').value;
        const message = document.getElementById('message').value;

        // Format pesan
        const whatsappMessage = `Halo, Nama saya ${name}. Kontak saya: ${contact}. Pesan: ${message}`;

        // Nomor tujuan WhatsApp (sesuaikan dengan nomor tujuan)
        const phoneNumber = '62XXXXXXXXXX'; // Ganti dengan nomor HP tujuan (62 untuk kode negara Indonesia)

        // Buat URL WhatsApp Web
        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(whatsappMessage)}`;

        // Arahkan pengguna ke WhatsApp Web
        window.open(whatsappUrl, '_blank');
    });
</script>


</body>
</html>