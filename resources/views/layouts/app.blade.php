<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cleanway Service Limited - Professional Cleaning Services')</title>
    <meta name="description" content="@yield('description', 'Professional cleaning services available 24/7. Contact us for residential and commercial cleaning solutions.')">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      @stack('styles')
</head>
<body class="min-h-screen bg-white">
    @include('components.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

    <script>
    lucide.createIcons();
    </script>

</body>
</html>
