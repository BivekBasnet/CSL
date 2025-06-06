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
            @foreach ($services as $services )
                <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100">
                    <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i data-lucide="home" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $services->name }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">{{ $services->description }}</p>
                    @foreach ($services->subservices as $sub)
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-gray-700">
                            <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                            {{ $sub->name }}
                        </li>
                    </ul>
                    @endforeach
                    <a href="{{ route('contact', ['gotoquote' => 1, 'service' => 'Regular House Cleaning']) }}" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-full hover:bg-blue-700 transition-colors font-medium block text-center">
                        Get Quote
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
