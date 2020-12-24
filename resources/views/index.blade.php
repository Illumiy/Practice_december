<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
   {{-- Подключение css --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css.map') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.css.map') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    <div id="app">
        {{-- Подключение хедера --}}
    <v-header></v-header>
    {{-- Подключение банера --}}
    <banner></banner>
    {{-- Подключение Блогов --}}
    <blogs></blogs>
    </div>
    {{-- Подключение Vue.js --}}
    <script src="./js/app.js"></script>
</body>
</html>