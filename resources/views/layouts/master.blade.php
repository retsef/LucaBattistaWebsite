<html>
<head>
    @section('head')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Luca Battista</title>
        @include('layouts.assets')
    @show
</head>
<body>
    @include('layouts.header')

    @yield('content')

    @section('footer')
        @include('layouts.footer')
    @show
</body>
</html>