<footer class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-16">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
            <!-- Company Info -->
            <div class="space-y-6">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                        C
                    </div>
                    <span class="text-2xl font-bold">Cleanway Service</span>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    New Zealand's premier cleaning service provider. We deliver exceptional results with eco-friendly
                    solutions, ensuring your space is spotless and healthy.
                </p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/profile.php?id=100090206349338" target="_blank" class="bg-blue-600 p-2 rounded-full hover:bg-blue-700 transition-colors">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-bold mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Home</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Services</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-blue-400 transition-colors">About</a></li>
                    <li><a href="{{ route('team') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Team</a></li>
                    <li><a href="{{ route('career') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Career</a></li>
                    <li><a href="{{ route('testimonials') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Testimonials</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Contact</a></li>
                    <li><a href="{{ route('contact', ['gotoquote' => 1]) }}" class="text-blue-400 hover:text-blue-300 transition-colors font-medium">Get Quote</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-xl font-bold mb-6">Our Services</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Residential Cleaning</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Commercial Cleaning</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Move In/Out Cleaning</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Window Cleaning</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Carpet Cleaning</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Office Cleaning</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-blue-400 transition-colors">School Cleaning</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Industrial Cleaning</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-xl font-bold mb-6">Contact Info</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i data-lucide="phone" class="w-5 h-5 text-blue-400 mt-1"></i>
                        <div>
                            <a class="text-gray-300" href="tel:0800 253 929">0800 253 929</a>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i data-lucide="mail" class="w-5 h-5 text-blue-400 mt-1"></i>
                        <div>
                            <a href="mailto:cleanwayserviceslimited@gmail.com" class="text-gray-300">cleanwayserviceslimited@gmail.com</a><br>
                            <a href="mailto:quote@cleanway.com.nz" class="text-gray-300">quote@cleanway.com.nz</a>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-blue-400 mt-1"></i>
                        <div>
                            <p class="text-gray-300">14B Berwyn Avenue, Takanini, Auckland,</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-blue-400 mt-1"></i>
                        <div>
                            <p class="text-gray-300 font-medium">Areas of Service:</p>
                            <p class="text-gray-300">Auckland, Hamilton, Palmerston North & Christchurch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-gray-400">
                    © 2024 Cleanway Service Limited. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
