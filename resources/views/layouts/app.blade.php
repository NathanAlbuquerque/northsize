<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NORTHSIZE</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/vendor/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Font Awersome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @Vite(['resources/css/app.css'])
</head>
<body>

    <x-header-help></x-header-help>
    <x-the-header></x-the-header>
    {{ $slot }}
    <x-the-footer></x-the-footer>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendor/bootstrap-5.3.0-dist/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/bootstrap-5.3.0-dist/js/bootstrap.esm.min.js') }}"></script> --}}
</body>
</html>
