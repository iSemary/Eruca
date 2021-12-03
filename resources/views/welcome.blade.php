<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{env('APP_NAME')}}</title>
</head>

<body>
    <div id="app" class="container">
        <app></app>
    </div>
    <script src="{{mix('/js/main.min.js')}}"></script>
</body>

</html>