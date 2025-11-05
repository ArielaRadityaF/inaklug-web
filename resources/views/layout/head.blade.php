<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/inaklug.png') }}">
    <title>Inaklug</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{ asset('resources/css/head-foot.css') }}">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">


</head>

<body>
    {{-- Navbar --}}
    @include('layout.navbar')

    {{-- Konten halaman --}}
    @yield('content')

      {{-- Footer --}}
    @include('layout.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {!! NoCaptcha::renderJs() !!}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
