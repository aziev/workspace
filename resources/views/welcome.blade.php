<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <div class="container">
        <h1 class="">Сентябрь</h1>
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <table>
                    <tr>
                        <td>
                            <img src="{{ asset('img/ibragim_aziev.jpg') }}" alt="">
                            <div class="status status-payed">А. Ибрагим</div>
                        </td>
                        <td>
                            <img src="{{ asset('img/ahmed_timurziev.jpg') }}" alt="">
                            <div class="status status-waiting">Т. Ахмед</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/ahmed_chergizov.jpg') }}" alt="">
                            <div class="status status-waiting">Ч. Ахмед</div>
                        </td>
                        <td>
                            <img src="{{ asset('img/placeholder.jpg') }}" alt="">
                            <div class="status status-waiting">Яхья</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/khavazh_archakov.jpg') }}" alt="">
                            <div class="status status-waiting">А. Хаваж</div>
                        </td>
                        <td>Свободно</td>
                    </tr>
                </table>
            </div>
            <div class="col-6 text-center">
                <table>
                    <tr>
                        <td>Свободно</td>
                        <td>
                            <img src="{{ asset('img/berd_aziev.jpg') }}" alt="">
                            <div class="status status-payed">А. Берд</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Свободно</td>
                        <td>
                            <img src="{{ asset('img/mikail_aziev.jpg') }}" alt="">
                            <div class="status status-waiting">А. Микаил</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Свободно</td>
                        <td>
                            <img src="{{ asset('img/placeholder.jpg') }}" alt="">
                            <div class="status status-waiting">Д. Абдулла</div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>