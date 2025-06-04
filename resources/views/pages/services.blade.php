@extends('layouts.app')

@section('title', 'Our Cleaning Services | Cleanway Service Limited')
@section('description', 'Comprehensive cleaning services including residential, commercial, carpet cleaning, window cleaning, and specialized industrial cleaning.')

@section('content')
    @include('components.services')

    <!-- Additional Services Details Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 to-teal-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Why Choose Our
                    <span class="text-blue-600 block">Cleaning Services?</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We're committed to delivering exceptional cleaning results with eco-friendly products and professional expertise.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">Service Areas</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white rounded-lg p-4 shadow-md">
                            <h4 class="font-bold text-blue-600 mb-2">Auckland</h4>
                            <p class="text-sm text-gray-600">Complete residential & commercial cleaning</p>
                        </div>
                        <div class="bg-white rounded-lg p-4 shadow-md">
                            <h4 class="font-bold text-blue-600 mb-2">Hamilton</h4>
                            <p class="text-sm text-gray-600">Professional cleaning services</p>
                        </div>
                        <div class="bg-white rounded-lg p-4 shadow-md">
                            <h4 class="font-bold text-blue-600 mb-2">Palmerston North</h4>
                            <p class="text-sm text-gray-600">Reliable cleaning solutions</p>
                        </div>
                        <div class="bg-white rounded-lg p-4 shadow-md">
                            <h4 class="font-bold text-blue-600 mb-2">Christchurch</h4>
                            <p class="text-sm text-gray-600">Quality cleaning services</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Promise</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <i data-lucide="check-circle" class="w-6 h-6 text-blue-600 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">100% Satisfaction Guarantee</h4>
                                <p class="text-gray-600 text-sm">If you're not completely satisfied, we'll make it right</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i data-lucide="shield-check" class="w-6 h-6 text-blue-600 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">Fully Insured & Bonded</h4>
                                <p class="text-gray-600 text-sm">Complete protection for your property and peace of mind</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i data-lucide="leaf" class="w-6 h-6 text-blue-600 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">Eco-Friendly Products</h4>
                                <p class="text-gray-600 text-sm">Safe for your family, pets, and the environment</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i data-lucide="clock" class="w-6 h-6 text-blue-600 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">Flexible Scheduling</h4>
                                <p class="text-gray-600 text-sm">Services available when it's convenient for you</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
@endsection
