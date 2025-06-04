@extends('layouts.app')

@section('title', 'Contact Us | Cleanway Service Limited')
@section('description', 'Get in touch with Cleanway Service Limited for a free quote. Available 24/7 for emergency cleaning services.')

@section('content')
    @include('components.contact')
    
    <!-- Map Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Find Us
                    <span class="text-blue-600 block">& Service Areas</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We're located in Auckland and provide services across multiple cities in New Zealand.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Map Placeholder -->
                <div class="bg-gray-200 rounded-2xl h-96 flex items-center justify-center">
                    <div class="text-center">
                        <i data-lucide="map-pin" class="w-16 h-16 text-gray-400 mx-auto mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-600 mb-2">Interactive Map</h3>
                        <p class="text-gray-500">14B Berwyn Avenue, Takanini, Auckland</p>
                    </div>
                </div>

                <!-- Service Areas -->
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-8">Our Service Areas</h3>
                    <div class="grid grid-cols-1 gap-6">
                        <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 border-l-4 border-blue-600">
                            <h4 class="text-xl font-bold text-blue-900 mb-3">Auckland Region</h4>
                            <p class="text-blue-800 mb-3">Our primary service area with full-service coverage</p>
                            <ul class="text-blue-700 space-y-1">
                                <li>• Central Auckland</li>
                                <li>• North Shore</li>
                                <li>• West Auckland</li>
                                <li>• South Auckland</li>
                                <li>• East Auckland</li>
                            </ul>
                        </div>

                        <div class="bg-gradient-to-r from-teal-50 to-teal-100 rounded-xl p-6 border-l-4 border-teal-600">
                            <h4 class="text-xl font-bold text-teal-900 mb-3">Hamilton</h4>
                            <p class="text-teal-800">Comprehensive residential and commercial cleaning services</p>
                        </div>

                        <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 border-l-4 border-green-600">
                            <h4 class="text-xl font-bold text-green-900 mb-3">Palmerston North</h4>
                            <p class="text-green-800">Professional cleaning solutions for homes and businesses</p>
                        </div>

                        <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-6 border-l-4 border-purple-600">
                            <h4 class="text-xl font-bold text-purple-900 mb-3">Christchurch</h4>
                            <p class="text-purple-800">Quality cleaning services in the South Island</p>
                        </div>
                    </div>

                    <div class="mt-8 bg-yellow-50 border border-yellow-200 rounded-xl p-6">
                        <div class="flex items-start space-x-3">
                            <i data-lucide="info" class="w-6 h-6 text-yellow-600 mt-1"></i>
                            <div>
                                <h4 class="font-bold text-yellow-800 mb-2">Emergency Services</h4>
                                <p class="text-yellow-700">24/7 emergency cleaning services available in all areas. Call us anytime for urgent cleaning needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
