<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Greeting</title>       
    </head>
    <body>
        <h1> Hello, {{$name}} </h1>
        <h1> You are {{ $occupation}} </h1>
    </body>
</html>