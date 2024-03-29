<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Laravel Project</title>
{{-- vite inserisce qua app.js --}}
    @vite('resources/js/app.js')

</head>
<body class="bg-dark">
    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')
    @yield('script-content')
</body>
</html>