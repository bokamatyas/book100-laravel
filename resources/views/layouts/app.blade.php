<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel sablon</title>

    @include('layouts.styles')

</head>
<body>
    @include('layouts.header')
    @include('layouts.nav')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    @include('layouts.scipts')
</body>
</html>
