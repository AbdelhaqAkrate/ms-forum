<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>OcpMs</title>
</head>
<body>
    @yield('content')
    @vite('resources/js/post.js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.1.1/dist/cdn.min.js"></script>
</body>
</html>
