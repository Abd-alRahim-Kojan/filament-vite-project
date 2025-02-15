<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/js/app.js')
</head>

<body class="filament-body">
    {{ $slot }}
</body>

</html>
