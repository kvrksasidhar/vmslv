<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VMS @yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            margin-bottom: 80px; /* Margin bottom by footer height */
        }
        .footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
            padding-top: 1%;
        }
    </style>
</head>
<body>
    @include('layouts.master_nav')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>
