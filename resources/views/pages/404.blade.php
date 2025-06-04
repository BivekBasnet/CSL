@extends('layouts.app')

@section('title', '404 - Page Not Found')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-4">404</h1>
        <p class="text-xl text-gray-600 mb-4">Oops! Page not found</p>
        <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700 underline">
            Return to Home
        </a>
    </div>
</div>
@endsection
