<header class="bg-white shadow-lg sticky top-0 z-50">
    <!-- Top contact bar -->
    <div class="bg-blue-700 text-white py-2">
        <div class="container mx-auto px-4 flex justify-between items-center text-sm">
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-1">
                    <i data-lucide="phone" class="w-4 h-4"></i>
                    <a href="tel:0800 253 929" class="text-xs sm:text-sm">0800 253 929</a>
                </div>
                <div class="flex items-center space-x-1">
                    <i data-lucide="mail" class="w-4 h-4"></i>
                    <span class="text-xs sm:text-sm">cleanwayserviceslimited@gmail.com</span>
                </div>
            </div>
            <div class="hidden md:block">
                <span>Available 24/7 for Emergency Cleaning</span>
            </div>
        </div>
    </div>

    <!-- Main navigation -->
    <nav class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                    C
                </div>
                <span class="text-2xl font-bold text-blue-800">Cleanway Service Limited</span>
            </a>

            <!-- Desktop menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">
                    Home
                </a>
                <a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium {{ request()->routeIs('services') ? 'text-blue-600' : '' }}">
                    Services
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">
                    About
                </a>
                <a href="{{ route('team') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium {{ request()->routeIs('team') ? 'text-blue-600' : '' }}">
                    Team
                </a>
                <a href="{{ route('career') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium {{ request()->routeIs('career') ? 'text-blue-600' : '' }}">
                    Career
                </a>
                <a href="{{ route('testimonials') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium {{ request()->routeIs('testimonials') ? 'text-blue-600' : '' }}">
                    Testimonials
                </a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium {{ request()->routeIs('contact') ? 'text-blue-600' : '' }}">
                    Contact
                </a>
                <a href="{{ route('contact', ['gotoquote' => 1]) }}" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors font-medium">
                    Get Quote
                </a>
            </div>

            <!-- Mobile menu button -->
            <button class="md:hidden" id="mobile-menu-toggle">
                <i data-lucide="menu" class="w-6 h-6" id="menu-icon"></i>
                <i data-lucide="x" class="w-6 h-6 hidden" id="close-icon"></i>
            </button>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden mt-4 py-4 border-t hidden" id="mobile-menu">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium text-left {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">
                    Home
                </a>
                <a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium text-left {{ request()->routeIs('services') ? 'text-blue-600' : '' }}">
                    Services
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium text-left {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">
                    About
                </a>
                <a href="{{ route('team') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium text-left {{ request()->routeIs('team') ? 'text-blue-600' : '' }}">
                    Team
                </a>
                <a href="{{ route('career') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium text-left {{ request()->routeIs('career') ? 'text-blue-600' : '' }}">
                    Career
                </a>
                <a href="{{ route('testimonials') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium text-left {{ request()->routeIs('testimonials') ? 'text-blue-600' : '' }}">
                    Testimonials
                </a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 transition-colors font-medium text-left {{ request()->routeIs('contact') ? 'text-blue-600' : '' }}">
                    Contact
                </a>
                <a href="{{ route('contact', ['gotoquote' => 1]) }}" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors font-medium w-fit">
                    Get Quote
                </a>
            </div>
        </div>
    </nav>
</header>
