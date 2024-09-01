<nav class="bg-white shadow-lg sticky top-0 z-10 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <h1 class="text-xl font-bold text-gray-900">
                    <a href="/" class="hover:text-sky-400 transition-all duration-300">Family Mobile</a>
                </h1>
            </div>
            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden sm:flex sm:space-x-8">
                <a href="/" class="text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">Home</a>
                <a href="/products" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm font-medium">Produk</a>
                <a href="/kontak" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm font-medium">Kontak</a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="sm:hidden hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="/" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-900">Home</a>
            <a href="/products" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-700">Produk</a>
            <a href="/kontak" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-700">Kontak</a>
        </div>
    </div>
</nav>

<script>
    // JavaScript to toggle mobile menu
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
