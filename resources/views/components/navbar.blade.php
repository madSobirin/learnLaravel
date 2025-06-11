<nav class="bg-white shadow-md fixed top-0 left-0 w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('img/bola.jpg') }}" alt="Logo" class="h-8 w-8 rounded-full">

                <span class="text-teal-600 text-xl font-bold">Learn Tailwind</span>
            </div>

            <!-- Menu Items -->
            <div class="hidden md:flex space-x-8">
                <a href="/app" class="text-gray-700 hover:text-teal-600 transition duration-300 font-medium">Home</a>
                <a href="/artikel"
                    class="text-gray-700 hover:text-teal-600 transition duration-300 font-medium">Artikel</a>
                <a href="#"
                    class="text-gray-700 hover:text-teal-600 transition duration-300 font-medium">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button"
                    class="text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500 cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
        <a href="#" class="block relative py-2 text-gray-800 font-medium group">
            Home
            <span
                class="absolute bottom-0 left-1/2 h-[2px] w-0 bg-teal-500 transition-all duration-300 group-hover:left-0 group-hover:w-full transform -translate-x-1/2 group-hover:translate-x-0"></span>
        </a>
        <a href="#" class="block relative py-2 text-gray-800 font-medium group">
            Artikel
            <span
                class="absolute bottom-0 left-1/2 h-[2px] w-0 bg-teal-500 transition-all duration-300 group-hover:left-0 group-hover:w-full transform -translate-x-1/2 group-hover:translate-x-0"></span>
        </a>
        <a href="#" class="block relative py-2 text-gray-800 font-medium group">
            Contact
            <span
                class="absolute bottom-0 left-1/2 h-[2px] w-0 bg-teal-500 transition-all duration-300 group-hover:left-0 group-hover:w-full transform -translate-x-1/2 group-hover:translate-x-0"></span>
        </a>



    </div>

    <script>
        const menuBtn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</nav>
