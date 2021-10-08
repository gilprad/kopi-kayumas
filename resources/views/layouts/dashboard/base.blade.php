<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') - Dashboard</title>

    @include('layouts.dashboard.style')

    @stack('style')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('layouts.dashboard.navbar')
            
            @include('layouts.dashboard.sidebar')

            @yield('content')
            
            @include('layouts.dashboard.footer')
        </div>
    </div>

    @include('layouts.dashboard.script')

    @stack('script')
</body>

</html>
