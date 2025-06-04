<section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                Our Professional
                <span class="text-blue-600 block">Cleaning Services</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We offer comprehensive cleaning solutions tailored to meet your specific needs. 
                From residential homes to commercial spaces, we deliver excellence in every clean.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Regular House Cleaning -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100">
                <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <i data-lucide="home" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Regular House Cleaning</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive cleaning of all living spaces, including dusting, vacuuming, mopping, and bathroom cleaning.</p>
                <ul class="space-y-2">
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Dusting & Vacuuming
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Bathroom Cleaning
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Kitchen Cleaning
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Floor Mopping
                    </li>
                </ul>
                <a href="{{ route('contact', ['gotoquote' => 1, 'service' => 'Regular House Cleaning']) }}" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-full hover:bg-blue-700 transition-colors font-medium block text-center">
                    Get Quote
                </a>
            </div>

            <!-- Deep Cleaning -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100">
                <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <i data-lucide="sparkles" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Deep Cleaning</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">Thorough cleaning of hard-to-reach areas, including baseboards, window tracks, and inside cabinets.</p>
                <ul class="space-y-2">
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Baseboards & Window Tracks
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Inside Cabinets
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Light Fixtures
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Detailed Sanitization
                    </li>
                </ul>
                <a href="{{ route('contact', ['gotoquote' => 1, 'service' => 'Deep Cleaning']) }}" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-full hover:bg-blue-700 transition-colors font-medium block text-center">
                    Get Quote
                </a>
            </div>

            <!-- Move In/Out Cleaning -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100">
                <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <i data-lucide="building-2" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Move In/Out Cleaning</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">Complete property cleaning to ensure a spotless space for new occupants or to meet lease requirements.</p>
                <ul class="space-y-2">
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Complete Property Clean
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Lease Requirement Standards
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        All Room Deep Clean
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Move-Ready Condition
                    </li>
                </ul>
                <a href="{{ route('contact', ['gotoquote' => 1, 'service' => 'Move In/Out Cleaning']) }}" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-full hover:bg-blue-700 transition-colors font-medium block text-center">
                    Get Quote
                </a>
            </div>

            <!-- Window Cleaning -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100">
                <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <i data-lucide="shield-check" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Window Cleaning</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">Professional window cleaning service for crystal-clear views and improved natural lighting.</p>
                <ul class="space-y-2">
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Interior & Exterior Windows
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Crystal-Clear Views
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Improved Natural Lighting
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Professional Equipment
                    </li>
                </ul>
                <a href="{{ route('contact', ['gotoquote' => 1, 'service' => 'Window Cleaning']) }}" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-full hover:bg-blue-700 transition-colors font-medium block text-center">
                    Get Quote
                </a>
            </div>

            <!-- Carpet Cleaning -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100">
                <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <i data-lucide="leaf" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Carpet Cleaning</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">Deep cleaning of carpets and rugs to remove stains, dirt, and allergens.</p>
                <ul class="space-y-2">
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Stain Removal
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Dirt Extraction
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Allergen Elimination
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Rug Cleaning
                    </li>
                </ul>
                <a href="{{ route('contact', ['gotoquote' => 1, 'service' => 'Carpet Cleaning']) }}" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-full hover:bg-blue-700 transition-colors font-medium block text-center">
                    Get Quote
                </a>
            </div>

            <!-- Commercial & Office Cleaning -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100">
                <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <i data-lucide="clock" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Commercial & Office Cleaning</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">Customized cleaning solutions to maintain a clean and productive work environment.</p>
                <ul class="space-y-2">
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Office Daily Cleaning
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        School Cleaning
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Car Showroom Cleaning
                    </li>
                    <li class="flex items-center text-sm text-gray-700">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        Supermarket Cleaning
                    </li>
                </ul>
                <a href="{{ route('contact', ['gotoquote' => 1, 'service' => 'Commercial & Office Cleaning']) }}" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-full hover:bg-blue-700 transition-colors font-medium block text-center">
                    Get Quote
                </a>
            </div>
        </div>
    </div>
</section>
