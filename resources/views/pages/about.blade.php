@extends('layouts.app')

@section('title', 'About Us | Cleanway Service Limited')
@section('description', 'Learn about Cleanway Service Limited - New Zealand\'s premier cleaning service provider with over 15 years of experience.')

@section('content')
    @include('components.about')

    <!-- Company Story Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                        Our Story &
                        <span class="text-blue-600 block">Mission</span>
                    </h2>
                    <div class="space-y-6 text-lg text-gray-600 leading-relaxed">
                        <p>
                            Founded in 2009, Cleanway Service Limited began with a simple mission: to provide exceptional cleaning services that exceed our clients' expectations. What started as a small local business has grown into New Zealand's trusted cleaning partner.
                        </p>
                        <p>
                            Our founder, Bipan Bhandari, recognized the need for reliable, professional cleaning services that prioritized both quality and environmental responsibility. This vision has guided our company's growth and continues to drive our commitment to excellence.
                        </p>
                        <p>
                            Today, we serve residential and commercial clients across Auckland, Hamilton, Palmerston North, and Christchurch, maintaining the same personal touch and attention to detail that built our reputation.
                        </p>
                    </div>
                </div>

                <div class="bg-blue-600 text-white rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-6">Our Values</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i data-lucide="heart" class="w-6 h-6 mt-1"></i>
                            <div>
                                <h4 class="font-semibold mb-1">Customer First</h4>
                                <p class="text-blue-100">Your satisfaction is our top priority in everything we do.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i data-lucide="award" class="w-6 h-6 mt-1"></i>
                            <div>
                                <h4 class="font-semibold mb-1">Excellence</h4>
                                <p class="text-blue-100">We strive for perfection in every cleaning task.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i data-lucide="shield" class="w-6 h-6 mt-1"></i>
                            <div>
                                <h4 class="font-semibold mb-1">Integrity</h4>
                                <p class="text-blue-100">Honest, reliable service you can trust.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i data-lucide="leaf" class="w-6 h-6 mt-1"></i>
                            <div>
                                <h4 class="font-semibold mb-1">Sustainability</h4>
                                <p class="text-blue-100">Eco-friendly practices that protect our environment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.team')
@endsection
