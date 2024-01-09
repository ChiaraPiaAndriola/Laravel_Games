<!DOCTYPE html >
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-w">

    <x-navbar/>



    {{$slot}}



    <x-footer/>
</body>
</html>

{{-- class="@if(Route::currentRouteName()=='index.games'|| Route::currentRouteName()=='show.games' img-gamedetail @endif" --}}
