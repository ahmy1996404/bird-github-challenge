<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <title>Bird code challenge</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

    <div id="app">
        <router-view></router-view>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
