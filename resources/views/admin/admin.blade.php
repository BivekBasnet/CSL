<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { min-height: 100vh; background: #f8f9fa; }
        .sidebar { min-width: 250px; max-width: 250px; background: #343a40; color: #fff; height: 100vh; }
        .sidebar .nav-link, .sidebar .dropdown-toggle { color: #fff; }
        .sidebar .nav-link.active, .sidebar .nav-link:hover, .sidebar .dropdown-toggle:hover { background: #495057; color: #fff; }
        .sidebar .dropdown-menu { background: #343a40; }
        .sidebar .dropdown-item { color: #fff; }
        .sidebar .dropdown-item:hover { background: #495057; color: #fff; }
    </style>
</head>
<body>
<div class="d-flex">
    <nav class="sidebar d-flex flex-column p-3">
        <h2 class="mb-4">Admin</h2>
        <ul class="nav nav-pills flex-column mb-auto">
            <!-- Sidebar links here (copy from your sidebar.blade.php) -->
            @include('admin.sidebar')
        </ul>
    </nav>
    <main class="flex-grow-1 p-4">
        @yield('content')
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
