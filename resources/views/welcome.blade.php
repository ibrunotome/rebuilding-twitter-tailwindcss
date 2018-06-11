<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600"
          rel="stylesheet"
          type="text/css">
    <link href="{{ asset('css/main.css') }}"
          rel="stylesheet"
          type="text/css">
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body class="bg-grey-light font-sans">
<div class="bg-white">
    <div class="bg-white">
        <div class="container mx-auto flex items-center py-4">
            <nav class="w-2/5">
                <a href="#"
                   class="top-nav-item"><i class="fas fa-home fa-lg"></i> Home</a>
                <a href="#"
                   class="top-nav-item"><i class="fas fa-bolt fa-lg"></i> Moments</a>
                <a href="#"
                   class="top-nav-item"><i class="fas fa-bell fa-lg"></i> Notifications</a>
                <a href="#"
                   class="top-nav-item"><i class="fas fa-envelope fa-lg"></i> Messages</a>
            </nav>
            <div class="w-1/5 text-center"><a href="#"><i class="fab fa-twitter fa-lg text-blue"></i></a></div>
            <nav class="w-2/5 flex justify-end">
                <div class="mr-4 relative">
                    <input type="text"
                           class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full"
                           placeholder="Search Twitter">
                    <span class="flex items-center absolute pin-r pin-y mr-3"><i class="fas fa-search text-grey"></i></span>
                </div>
                <div class="mr-4"><a href="#"><img src="{{ asset('img/twitter/avatar.jpg') }}"
                                                   alt="avatar"
                                                   class="h-8 w-8 rounded-full"> </a></div>
                <div>
                    <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet
                    </button>
                </div>
            </nav>
        </div>
    </div>
</div>
</body>
</html>
