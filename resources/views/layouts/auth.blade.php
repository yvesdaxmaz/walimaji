<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
</head>

<body class="form-background">

<main>
    @yield("content")
</main>

@include("includes.default-footer")
</body>
</html>
