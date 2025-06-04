@extends('layouts.app')

@section('title', 'Our Team | Cleanway Service Limited')
@section('description', 'Meet our experienced team of cleaning professionals dedicated to delivering exceptional results.')

@section('content')
    @include('components.team')
    
    <!-- Join Our Team Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Join Our
                    <span class="text-blue-600 block">Growing Team</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We're always looking for dedicated professionals to join our team. If you're passionate about delivering excellent service and want to be part of a growing company, we'd love to hear from you.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">Why Work With Us?</h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-600 p-3 rounded-full">
                                <i data-lucide="trending-up" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Career Growth</h4>
                                <p class="text-gray-600">Opportunities for advancement and professional development</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-600 p-3 rounded-full">
                                <i data-lucide="users" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Supportive Environment</h4>
                                <p class="text-gray-600">Work with a friendly, professional team that values collaboration</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-600 p-3 rounded-full">
                                <i data-lucide="clock" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Flexible Schedule</h4>
                                <p class="text-gray-600">Work-life balance with flexible scheduling options</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-600 p-3 rounded-full">
                                <i data-lucide="award" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Training & Certification</h4>
                                <p class="text-gray-600">Comprehensive training and professional certifications</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-teal-100 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Current Opportunities</h3>
                    <div class="space-y-4">
                        <div class="bg-white rounded-lg p-4 shadow-md">
                            <h4 class="font-bold text-blue-600 mb-2">Cleaning Specialists</h4>
                            <p class="text-sm text-gray-600 mb-3">Full-time and part-time positions available across all service areas</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-xs">Auckland</span>
                                <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-xs">Hamilton</span>
                                <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-xs">Christchurch</span>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg p-4 shadow-md">
                            <h4 class="font-bold text-blue-600 mb-2">Team Supervisors</h4>
                            <p class="text-sm text-gray-600 mb-3">Leadership roles for experienced cleaning professionals</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Leadership</span>
                                <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Experience Required</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('career') }}" class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition-colors font-medium inline-block">
                            View All Positions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
