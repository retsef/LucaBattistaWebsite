<html>
<head>
    @section('head')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Admin</title>
        @include('layouts.admin.assets')
    @show
</head>
<body>
    @yield('content')

    @section('footer')
        @include('layouts.admin.footer')
    @show
</body>
</html>