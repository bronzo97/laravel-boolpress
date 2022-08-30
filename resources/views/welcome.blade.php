<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

<link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
</head>

<body>
<div id="app">
    {{-- Il contenuto verrà interamente sostituito da Vue.js --}}
</div>

<script src="{{ asset('js/frontend.js') }}"></script>
</body>

</html>
