<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('titulo') </title>

    @vite(['resources/js/app.js'])

</head>

<body>


    <x-offcanvas></x-offcanvas>
    @component('partials.navbar')  
    @endcomponent


    @yield('contenido')



</body>

</html>