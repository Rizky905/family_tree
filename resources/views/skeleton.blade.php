<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ env('APP_NAME') }} | {{ ucwords(str_replace(['_'], ' ', request()->segment(1))) }}</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('theme/css')
</head>
<body>
    @auth()
        @include('layouts.navbars.sidebar')
        <body class="g-sidenav-show bg-gray-100">
            @include('layouts.navbars.nav')
        </body>        
        @section('content')
        @show
    @endauth

    @include('theme/js')
    @yield('customjs')
</body>
</html>