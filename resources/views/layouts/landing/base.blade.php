<!DOCTYPE html>
<html lang="id">

<head>
    <title>@yield('title') - Kopi Kayumas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts.landing.style')

    @stack('style')
</head>

<body>
    @include('layouts.landing.navbar')

    @yield('content')

    @include('layouts.landing.footer')

    @include('layouts.landing.loader')

    @include('layouts.landing.script')

    @stack('script')
</body>

</html>
