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
            <div class="w-2/5 flex justify-end">
                <div class="mr-4 relative">
                    <input type="text"
                           class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full"
                           placeholder="Search Twitter">
                    <div class="flex items-center absolute pin-r pin-y mr-3"><i class="fas fa-search text-grey"></i>
                    </div>
                </div>
                <div class="mr-4"><a href="#"><img src="{{ asset('img/twitter/avatar.jpg') }}"
                                                   alt="avatar"
                                                   class="h-8 w-8 rounded-full"> </a></div>
                <div>
                    <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="hero h-64 h-112"></div>
    <div class="bg-white shadow">
        <div class="container mx-auto flex items-center relative">
            <div class="w-1/4">
                <img src="{{ asset('img/twitter/tailwind_logo.jpg') }}"
                     alt="logo"
                     class="rounded-full h-48 w-48 absolute pin-l pin-t -mt-24">
            </div>
            <div class="w-1/2">
                <ul class="list-reset flex">
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-teal">
                        <a href="#"
                           class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Tweets</div>
                            <div class="text-lg tracking-tight font-bold text-teal">60</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                        <a href="#"
                           class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Following</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">4</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                        <a href="#"
                           class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Followers</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">3,810</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                        <a href="#"
                           class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">9</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                        <a href="#"
                           class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Moments</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">1</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-1/4 flex justify-end items-center">
                <div class="mr-6">
                    <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Following
                    </button>
                </div>
                <div>
                    <a href="#"
                       class="text-grey-dark"><i class="fas fa-ellipsis-v fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
