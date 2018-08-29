<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Workspace</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            padding: 50px 0;
        }
        table {
            display: inline-block;
            margin: 0 100px;
        }
        td {
            width: 120px;
            height: 180px;
            background: #4e2310;
            color: #f0f0f0;
            text-align: center;
            border: 3px solid #fff;
            position: relative;
        }
        img {
            border-radius: 100px;
            width: 100px;
            height: 100px;
            border: 3px solid rgba(255, 255, 255, 0.8);
            position: relative;
            top: -12px;
        }
        .status {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 24px;
            font-size: 12px;
            font-weight: 700;
            line-height: 24px;
        }
        .status-payed {
            background: green;
        }
        .status-waiting {
            background: #bf7c00;
        }
    </style>
</head>
<body>
    <div class="container" id="app">
        <h1 class="">Сентябрь</h1>
        <office></office>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>