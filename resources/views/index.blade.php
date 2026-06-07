<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Importing the navbar to the site --}}
    @include('components.navbar')

    {{-- Adding the content dynamically --}}
    @yield('section-container')

    {{-- Importing the footer file  --}}
    @include('components.footer')
</body>
</html>