<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MENSAJE') }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 20px;
            text-align: center;

            border-radius: 20px;
        }

        header {
            color: #fff;
            padding: 10px;
            /* redondear bordes */
            border-radius: 10px;
            /* degradado en todo el fondo */
            background-image: linear-gradient(to right, #42389d, #7c71de);
        }

        main {
            margin-top: 20px;
        }


    </style>
</head>

<body>

    <header>
        <h1>{{ config('app.name', 'MENSAJE') }}</h1>
    </header>

    <main>
        <p>Tienes un mensaje de <strong>{{ $name }}</strong> ({{ $email }}):</p>
        <p>{{ $messages }}</p>
    </main>



</body>

</html>
