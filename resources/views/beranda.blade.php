<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap5/css/bootstrap.min.css')}}">
</head>
<body>
    @yield('header')

    @yield('content')
    
    @yield('footer')

    <script src="{{url('assets/bootstrap5/js/bootstrap.min.js')}}"></script>
</body>
</html>