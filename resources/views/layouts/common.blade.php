<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>学習サービス</title>
        <!-- cssをインポート -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @include('layouts.header')
        @yield('content')
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>