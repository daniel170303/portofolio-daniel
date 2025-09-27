<nav class="fixed top-0 left-0 w-full bg-white/80 dark:bg-black/80 backdrop-blur-lg border-b border-gray-200 dark:border-neonCyan/20 z-50">
    <div class="container mx-auto flex justify-between items-center p-4">
        <div class="animate-glow">
            <a href="{{ route('home') }}" class="hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('storage/profile.jpg') }}" alt="Daniel Pascalis" class="w-10 h-10 rounded-full object-cover border-2 border-neonCyan shadow-md">
            </a>
        </div>
        <div class="hidden md:flex space-x-6">
            <a href="{{ route('about') }}" class="text-gray-900 dark:text-white hover:text-neonCyan transition-colors duration-300 border-b-2 border-transparent hover:border-neonCyan pb-1">Tentang</a>
            <a href="{{ route('projects') }}" class="text-gray-900 dark:text-white hover:text-neonCyan transition-colors duration-300 border-b-2 border-transparent hover:border-neonCyan pb-1">Proyek</a>
            <a href="{{ route('contact') }}" class="text-gray-900 dark:text-white hover:text-neonCyan transition-colors duration-300 border-b-2 border-transparent hover:border-neonCyan pb-1">Kontak</a>
        </div>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-900 dark:text-white focus:outline-none hover:text-neonCyan transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <div class="flex items-center">
            <label for="dark-mode-toggle" class="cursor-pointer">
                <input type="checkbox" id="dark-mode-toggle" class="hidden" />
                <span id="dark-mode-icon" class="text-gray-900 dark:text-white text-xl">🌙</span>
            </label>
        </div>
    </div>
    <div id="mobile-menu" class="md:hidden hidden bg-white/90 dark:bg-black/90 backdrop-blur-lg border-t border-gray-200 dark:border-neonCyan/20 transform transition-transform duration-300 ease-in-out">
        <a href="{{ route('about') }}" class="block text-gray-900 dark:text-white hover:text-neonCyan transition-colors duration-300 py-3 px-4 border-b border-gray-200 dark:border-neonCyan/10">Tentang</a>
        <a href="{{ route('projects') }}" class="block text-gray-900 dark:text-white hover:text-neonCyan transition-colors duration-300 py-3 px-4 border-b border-gray-200 dark:border-neonCyan/10">Proyek</a>
        <a href="{{ route('contact') }}" class="block text-gray-900 dark:text-white hover:text-neonCyan transition-colors duration-300 py-3 px-4">Kontak</a>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').onclick = function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    };
</script>
