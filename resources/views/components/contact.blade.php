<section id="contact" class="py-20 bg-gradient-to-br from-blue-50 to-teal-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                Get Your Free
                <span class="text-blue-600 block">Quote Today</span>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to experience the best cleaning service in New Zealand? Contact us for a free,
                no-obligation quote tailored to your specific needs.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Contact Information -->
            <div class="lg:col-span-1 space-y-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-6">Get In Touch</h3>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-600 p-3 rounded-full">
                                <i data-lucide="phone" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Phone</h4>
                                <a href="tel:0800 253 929" class="text-gray-600">0800 253 929</a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-600 p-3 rounded-full">
                                <i data-lucide="mail" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <a href="mailto:cleanwayserviceslimited@gmail.com" class="text-gray-600 max-w-[210px] break-words" style="overflow-wrap: anywhere;">cleanwayserviceslimited@gmail.com</a><br>
                                <a href="mailto:quotes@cleanway.com.nz" class="text-gray-600">quotes@cleanway.com.nz</a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-600 p-3 rounded-full">
                                <i data-lucide="map-pin" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Address</h4>
                                <p class="text-gray-600">14B Berwyn Avenue, Takanini, Auckland</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-600 p-3 rounded-full">
                                <i data-lucide="map-pin" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Service Areas</h4>
                                <p class="text-gray-600">Auckland, Hamilton, Palmerston North & Christchurch</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-600 p-3 rounded-full">
                                <i data-lucide="clock" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Hours</h4>
                                <p class="text-gray-600">Mon-Fri: 7:00 AM - 7:00 PM</p>
                                <p class="text-gray-600">Weekend: 8:00 AM - 5:00 PM</p>
                                <p class="text-gray-600">Emergency: 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-600 text-white rounded-2xl p-8">
                    <h3 class="text-xl md:text-2xl font-bold mb-4">Why Choose Us?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center space-x-3">
                            <i data-lucide="check-circle" class="w-5 h-5"></i>
                            <span>Free, no-obligation quotes</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i data-lucide="check-circle" class="w-5 h-5"></i>
                            <span>Fully insured & bonded</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i data-lucide="check-circle" class="w-5 h-5"></i>
                            <span>Eco-friendly products</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i data-lucide="check-circle" class="w-5 h-5"></i>
                            <span>100% satisfaction guarantee</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8">Request Your Free Quote</h3>

                    @if(session('success'))
                        <div class="text-center py-12">
                            <i data-lucide="check-circle" class="w-16 h-16 text-blue-600 mx-auto mb-4"></i>
                            <h4 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Thank You!</h4>
                            <p class="text-gray-600">We'll get back to you within 24 hours with your personalized quote.</p>
                        </div>
                    @else
                        <form action="{{ route('contact') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                        Full Name *
                                    </label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('name') border-red-500 @enderror"
                                        placeholder="Enter your full name"
                                    >
                                    @error('name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                        Email Address *
                                    </label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('email') border-red-500 @enderror"
                                        placeholder="Enter your email"
                                    >
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                        Phone Number
                                    </label>
                                    <input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('phone') border-red-500 @enderror"
                                        placeholder="Enter your phone number"
                                    >
                                    @error('phone')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="service" class="block text-sm font-medium text-gray-700 mb-2">
                                        Service Needed *
                                    </label>
                                    <select
                                        id="service"
                                        name="service"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('service') border-red-500 @enderror"
                                    >
                                        <option value="">Select a service</option>
                                        <option value="Regular House Cleaning" {{ old('service') == 'Regular House Cleaning' ? 'selected' : '' }}>Regular House Cleaning</option>
                                        <option value="Deep Cleaning" {{ old('service') == 'Deep Cleaning' ? 'selected' : '' }}>Deep Cleaning</option>
                                        <option value="Move In/Out Cleaning" {{ old('service') == 'Move In/Out Cleaning' ? 'selected' : '' }}>Move In/Out Cleaning</option>
                                        <option value="Window Cleaning" {{ old('service') == 'Window Cleaning' ? 'selected' : '' }}>Window Cleaning</option>
                                        <option value="Carpet Cleaning" {{ old('service') == 'Carpet Cleaning' ? 'selected' : '' }}>Carpet Cleaning</option>
                                        <option value="Commercial & Office Cleaning" {{ old('service') == 'Commercial & Office Cleaning' ? 'selected' : '' }}>Commercial & Office Cleaning</option>
                                        <option value="School Cleaning" {{ old('service') == 'School Cleaning' ? 'selected' : '' }}>School Cleaning</option>
                                        <option value="Car Showroom Cleaning" {{ old('service') == 'Car Showroom Cleaning' ? 'selected' : '' }}>Car Showroom Cleaning</option>
                                        <option value="Supermarket Cleaning" {{ old('service') == 'Supermarket Cleaning' ? 'selected' : '' }}>Supermarket Cleaning</option>
                                        <option value="Retail & Store Cleaning" {{ old('service') == 'Retail & Store Cleaning' ? 'selected' : '' }}>Retail & Store Cleaning</option>
                                        <option value="Industrial & Factory Cleaning" {{ old('service') == 'Industrial & Factory Cleaning' ? 'selected' : '' }}>Industrial & Factory Cleaning</option>
                                        <option value="Other" {{ old('service') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('service')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                    Additional Details
                                </label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="4"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors @error('message') border-red-500 @enderror"
                                    placeholder="Tell us about your cleaning needs, property size, frequency, etc."
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-blue-600 text-white py-4 px-8 rounded-lg font-semibold hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2 text-base md:text-lg"
                            >
                                <i data-lucide="send" class="w-5 h-5"></i>
                                <span>Get My Free Quote</span>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
