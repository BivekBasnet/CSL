@extends('layouts.app')

@section('title', 'Career Opportunities - Join Our Team')

@section('content')
<div class="bg-gray-50">
    <div class="container mx-auto py-12 px-4">
        <div class="max-w-4xl mx-auto">          
            <h1 class="text-4xl font-bold text-center text-blue-600 mb-10">
                We're Hiring!
            </h1>
            
            <!-- Job Cards in Row Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                <!-- Operations Manager Auckland Card -->
                <div class="bg-white p-8 rounded-lg shadow-lg border-t-4 border-blue-500 hover:shadow-xl transition-shadow h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <span class="text-2xl">🏢</span>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-blue-700">
                                Operations Manager
                            </h2>
                            <p class="text-blue-600 font-medium">📍 Auckland</p>
                        </div>
                    </div>
                    <div class="h-1 w-20 bg-blue-500 mb-4"></div>
                    <div class="flex-grow">
                        <p class="text-gray-700 mb-4 leading-relaxed text-sm">
                            We are currently seeking a dynamic and results-driven Operations
                            Manager to join our leadership team in Auckland. This key role
                            involves overseeing day-to-day site operations, managing cleaning
                            teams, and ensuring consistent service standards across all client
                            locations.
                        </p>
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-800 mb-2">Key Requirements:</h4>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Leadership experience in operations</li>
                                <li>• Team management skills</li>
                                <li>• Customer service focus</li>
                            </ul>
                        </div>
                    </div>
                    <a href="#apply" onclick="scrollToApply(event)" class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-md transition-colors mt-4">
                        <span class="mr-2">👉</span> Apply Now
                    </a>
                </div>

                <!-- Operations Manager Christchurch Card -->
                <div class="bg-white p-8 rounded-lg shadow-lg border-t-4 border-blue-500 hover:shadow-xl transition-shadow h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <span class="text-2xl">🏢</span>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-blue-700">
                                Operations Manager
                            </h2>
                            <p class="text-blue-600 font-medium">📍 Christchurch</p>
                        </div>
                    </div>
                    <div class="h-1 w-20 bg-blue-500 mb-4"></div>
                    <div class="flex-grow">
                        <p class="text-gray-700 mb-4 leading-relaxed text-sm">
                            We are currently seeking a dynamic and results-driven Operations
                            Manager to join our leadership team in Christchurch. This key role
                            involves overseeing day-to-day site operations, managing cleaning
                            teams, and ensuring consistent service standards across all client
                            locations.
                        </p>
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-800 mb-2">Key Requirements:</h4>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Leadership experience in operations</li>
                                <li>• Team management skills</li>
                                <li>• Customer service focus</li>
                            </ul>
                        </div>
                    </div>
                    <a href="#apply" onclick="scrollToApply(event)" class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-md transition-colors mt-4">
                        <span class="mr-2">👉</span> Apply Now
                    </a>
                </div>
            </div>

            <!-- Job Application Form -->
            <div class="mt-12 bg-white p-8 rounded-lg shadow-lg border-t-4 border-green-500" id="apply">
                <h2 class="text-2xl font-semibold text-green-700 mb-6">
                    Apply for a Position
                </h2>
                <div class="h-1 w-20 bg-green-500 mb-6"></div>
                
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                        <ul class="list-disc ml-5">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">
                                First Name *
                            </label>
                            <input type="text" id="firstName" name="first_name" required value="{{ old('first_name') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('first_name') border-red-500 @enderror">
                            @error('first_name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">
                                Last Name *
                            </label>
                            <input type="text" id="lastName" name="last_name" required value="{{ old('last_name') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('last_name') border-red-500 @enderror">
                            @error('last_name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address *
                            </label>
                            <input type="email" id="email" name="email" required value="{{ old('email') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                Phone Number *
                            </label>
                            <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('phone') border-red-500 @enderror">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="position" class="block text-sm font-medium text-gray-700 mb-2">
                            Position Applying For *
                        </label>
                        <select id="position" name="position" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('position') border-red-500 @enderror">
                            <option value="">Select a position</option>
                            <option value="operations-manager-auckland" {{ old('position') == 'operations-manager-auckland' ? 'selected' : '' }}>Operations Manager (Auckland)</option>
                            <option value="operations-manager-christchurch" {{ old('position') == 'operations-manager-christchurch' ? 'selected' : '' }}>Operations Manager (Christchurch)</option>
                            <option value="cleaner" {{ old('position') == 'cleaner' ? 'selected' : '' }}>Cleaner</option>
                            <option value="supervisor" {{ old('position') == 'supervisor' ? 'selected' : '' }}>Supervisor</option>
                            <option value="other" {{ old('position') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('position')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="experience" class="block text-sm font-medium text-gray-700 mb-2">
                            Years of Relevant Experience
                        </label>
                        <select id="experience" name="experience" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                            <option value="">Select experience level</option>
                            <option value="0-1" {{ old('experience') == '0-1' ? 'selected' : '' }}>0-1 years</option>
                            <option value="2-3" {{ old('experience') == '2-3' ? 'selected' : '' }}>2-3 years</option>
                            <option value="4-5" {{ old('experience') == '4-5' ? 'selected' : '' }}>4-5 years</option>
                            <option value="6-10" {{ old('experience') == '6-10' ? 'selected' : '' }}>6-10 years</option>
                            <option value="10+" {{ old('experience') == '10+' ? 'selected' : '' }}>10+ years</option>
                        </select>
                    </div>

                    <div>
                        <label for="availability" class="block text-sm font-medium text-gray-700 mb-2">
                            Availability
                        </label>
                        <select id="availability" name="availability" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                            <option value="">Select availability</option>
                            <option value="immediate" {{ old('availability') == 'immediate' ? 'selected' : '' }}>Immediate</option>
                            <option value="2-weeks" {{ old('availability') == '2-weeks' ? 'selected' : '' }}>2 weeks notice</option>
                            <option value="1-month" {{ old('availability') == '1-month' ? 'selected' : '' }}>1 month notice</option>
                            <option value="negotiable" {{ old('availability') == 'negotiable' ? 'selected' : '' }}>Negotiable</option>
                        </select>
                    </div>

                    <div>
                        <label for="resume" class="block text-sm font-medium text-gray-700 mb-2">
                            Resume/CV
                        </label>
                        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 @error('resume') border-red-500 @enderror">
                        <p class="text-sm text-gray-500 mt-1">
                            Accepted formats: PDF, DOC, DOCX (Max 5MB)
                        </p>
                        @error('resume')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="coverLetter" class="block text-sm font-medium text-gray-700 mb-2">
                            Cover Letter / Why do you want to work with us?
                        </label>
                        <textarea id="coverLetter" name="cover_letter" rows="5" placeholder="Tell us about yourself and why you're interested in this position..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">{{ old('cover_letter') }}</textarea>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-8 rounded-md transition-colors flex items-center">
                            <span class="mr-2">📄</span>
                            Submit Application
                        </button>
                    </div>                </form>
            </div>
        </div>
    </div>
</div>

<script>
function scrollToApply(event) {
    event.preventDefault();
    document.querySelector('#apply').scrollIntoView({ 
        behavior: 'smooth', 
        block: 'start' 
    });
}
</script>
@endsection
