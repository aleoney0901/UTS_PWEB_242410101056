<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mofusand Shop')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<style>
    body {
        background-color: #ffffff;
        font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
        background-color: #f9ede8 !important;
        border-bottom: 1px solid #bfac9a;
    }
    .navbar-brand {
        font-weight: bold;
        color: #5a3e36 !important;
        letter-spacing: 1px;
    }
    .nav-link {
        color: #5a3e36 !important;
        font-weight: 500;
    }
    .nav-link:hover {
        color: #cc0000 !important;
    }
    footer {
        background-color: #c8c4a8;
        color: #4a4a35;
        border-top: 1px solid #b0ac90;
    }
    .btn-primary {
        background-color: #cc0000;
        border-color: #cc0000;
    }
    .btn-primary:hover {
        background-color: #aa0000;
        border-color: #aa0000;
    }
</style>
    @yield('styles')
</head>
<body>

    <x-navbar />

    <div class="container my-4">
        @yield('content')
    </div>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
