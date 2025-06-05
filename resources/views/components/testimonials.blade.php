<section id="testimonials" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                What Our Clients
                <span class="text-blue-600 block">Say About Us</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Don't just take our word for it. Here's what our satisfied customers across New Zealand
                have to say about our cleaning services.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial loop -->
            @foreach ($testimonial as $testimonial)
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100 relative">
                    <i data-lucide="quote" class="w-8 h-8 text-blue-600 mb-4"></i>

                    <div class="flex items-center mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                        <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                        <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                        <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                        <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                    </div>

                    <p class="text-gray-700 leading-relaxed mb-6 italic">
                        "{{ $testimonial->description }}"
                    </p>

                    <div class="border-t border-blue-100 pt-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-gray-900">{{ $testimonial->description }}</h4>
                                <p class="text-sm text-gray-600">{{ $testimonial->name }}</p>
                            </div>
                            <div class="text-right">
                                <div class="bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                    {{ $testimonial->service }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>  
    </div>
</section>
