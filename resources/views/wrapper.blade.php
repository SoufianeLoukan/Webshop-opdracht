<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROC Flevoland Webshop</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="main">
    @include('nav')
    <div class="wrapper">
        @yield('body')
    </div>
    @include('footer')
</body>
</html>
