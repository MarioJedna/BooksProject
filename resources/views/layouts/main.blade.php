<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Books</title>
    {{-- <link rel="stylesheet" href="/style.css"> --}}
    @vite('resources/css/app.scss')
</head>

<body>
    @include('common.navigation', ['current_menu_item' => $current_menu_item ?? null])

    @include('common.alerts')


    @yield('content')


    {{-- <script src=""></script> --}}
    @vite('resources/js/app.js')
</body>

</html>
