<section id="home" class="bg-gradient-to-br from-blue-50 to-teal-100 py-20">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                    <h1 class="text-2xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        Professional
                        <span class="text-blue-600 block">Cleaning Services</span>
                        You Can Trust
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed text-justify">
                        Welcome to Cleanway Service Limited - your trusted cleaning partner in Auckland, Hamilton, Palmerston North & Christchurch. 
                        We are dedicated to providing top-tier residential and commercial cleaning services with an 
                        experienced team that ensures every space is left spotless, hygienic, and welcoming.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact', ['gotoquote' => 1]) }}" class="bg-blue-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-blue-700 transition-all duration-300 hover:scale-105 shadow-lg text-center">
                        Get Free Quote
                    </a>
                    <a href="{{ route('services') }}" class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-blue-600 hover:text-white transition-all duration-300 text-center">
                        View Services
                    </a>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 pt-8">
                    <div class="text-center">
                        <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3 shadow-md">
                            <i data-lucide="star" class="w-8 h-8 text-blue-600"></i>
                        </div>
                        <div class="text-2xl font-bold text-gray-900">5-Star</div>
                        <div class="text-sm text-gray-600">Rating</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3 shadow-md">
                            <i data-lucide="award" class="w-8 h-8 text-blue-600"></i>
                        </div>
                        <div class="text-2xl font-bold text-gray-900">Certified</div>
                        <div class="text-sm text-gray-600">Professionals</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3 shadow-md">
                            <i data-lucide="users" class="w-8 h-8 text-blue-600"></i>
                        </div>
                        <div class="text-2xl font-bold text-gray-900">500+</div>
                        <div class="text-sm text-gray-600">Satisfied Customers</div>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3 shadow-md">
                            <i data-lucide="clock" class="w-8 h-8 text-blue-600"></i>
                        </div>
                        <div class="text-2xl font-bold text-gray-900">24/7</div>
                        <div class="text-sm text-gray-600">Available</div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1&showinfo=0&controls=0&autohide=1&modestbranding=1@rel=0"
                        title="Professional cleaning service video"
                        class="w-full h-96"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent pointer-events-none"></div>
                </div>
                <div class="absolute -top-6 -right-6 bg-blue-600 text-white p-6 rounded-full shadow-xl">
                    <div class="text-center">
                        <div class="text-2xl font-bold">100%</div>
                        <div class="text-sm">Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
