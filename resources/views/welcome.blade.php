<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Solvo Workspace</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @verbatim
        <div id="app">
            <div class="header">
                <div class="container" >
                    <div class="row justify-content-end">
                        <span v-if="user" class="mr-2">Привет, {{ user.name }}</span>
                        <a href="" v-if="user" @click.prevent="logout">Выйти</a>
                        <router-link v-else to="login">Войти</router-link>
                    </div>
                </div>
            </div>
            <router-view @logged-in="saveUserInfo"></router-view>
        </div>
    @endverbatim
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>