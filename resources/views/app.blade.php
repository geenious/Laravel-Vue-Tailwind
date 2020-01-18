<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vue Test App</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <main-nav></main-nav>
            <router-view class="container"></router-view>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
