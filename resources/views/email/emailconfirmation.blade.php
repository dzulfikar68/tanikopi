<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Email Confirmation</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family:  sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            padding: 10px;
        }
    </style>
</head>
<body>
<h4>
    Halo {{ $username }},
</h4>
<p>

    Berikut ini link untuk konfirmasi user baru

</p>

<p>
    link : <b><a href="{{ $link }}" target="_blank">{{$link}}</a></b>
</p>

</body>
</html>
