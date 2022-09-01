<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Noweb Control</title>
    @vite(['resources/scss/control/app.scss', 'resources/js/control/app.js'])
</head>
<body>
    <x-control.components.navbar />
    {{ $slot }}
</body>
</html>
