<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SSR</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


    <!-- Styles -->
    {{--    <link href="/css/app.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        * {box-sizing: content-box;}
    </style>
</head>
<body>

<div id="app">
    <app></app>
</div>

{{--<script src="/js/app.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
