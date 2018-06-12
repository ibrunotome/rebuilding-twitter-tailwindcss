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
</head>
<body class="bg-grey-light font-sans">
<div>
    <div class="bg-white">
        <div class="container mx-auto flex flex-col lg:flex-row items-center py-4">
            <nav class="w-full lg:w-2/5">
                <a href="#"
                   class="top-nav-item"><i class="fas fa-home fa-lg"></i> Home</a>
                <a href="#"
                   class="top-nav-item"><i class="fas fa-bolt fa-lg"></i> Moments</a>
                <a href="#"
                   class="top-nav-item"><i class="fas fa-bell fa-lg"></i> Notifications</a>
                <a href="#"
                   class="top-nav-item"><i class="fas fa-envelope fa-lg"></i> Messages</a>
            </nav>
            <div class="w-full lg:w-1/5 text-center my-4 lg:my-0">
                <a href="#"><i class="fa fa-twitter fa-lg text-blue"></i></a></div>
            <div class="w-2/5 flex justify-end">
                <div class="w-full lg:w-2/5 flex lg:justify-end">
                    <div class="mr-4 relative">
                        <input type="text"
                               class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full"
                               placeholder="Search Twitter">
                        <span class="flex items-center absolute pin-r pin-y mr-3"><i class="fa fa-search text-grey"></i></span>
                    </div>
                </div>
                <div class="mr-4"><a href="#"><img src="{{ asset('img/twitter/avatar.jpg') }}"
                                                   alt="avatar"
                                                   class="h-8 w-8 rounded-full"></a></div>
                <div>
                    <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="hero h-64 bg-cover h-112"></div>

    <div class="bg-white shadow">
        <div class="container mx-auto flex flex-col lg:flex-row items-center lg:relative">
            <div class="w-full lg:w-1/4">
                <img src="{{ asset('/img/twitter/tailwind_logo.jpg') }}"
                     alt="logo"
                     class="rounded-full h-48 w-48 lg:absolute lg:pin-l lg:pin-t lg:-mt-24">
            </div>
            <div class="w-full lg:w-1/2">
                <ul class="list-reset flex">
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent border-teal">
                        <a href="#"
                           class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Tweets</div>
                            <div class="text-lg tracking-tight font-bold text-teal">60</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent hover:border-teal">
                        <a href="#"
                           class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Following</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">4</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent hover:border-teal">
                        <a href="#"
                           class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Followers</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">3,810</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent hover:border-teal">
                        <a href="#"
                           class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">9</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent hover:border-teal">
                        <a href="#"
                           class="text-grey-darker hover:no-underline">
                            <div class="text-sm font-bold tracking-tight mb-1">Moments</div>
                            <div class="text-lg tracking-tight font-bold hover:text-teal">1</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full lg:w-1/4 flex my-4 lg:my-0 lg:justify-end items-center">
                <div class="mr-6">
                    <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Following
                    </button>
                </div>
                <div>
                    <a href="#"
                       class="text-grey-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
                </div>
            </div>
        </div> <!-- end container -->

    </div>

    <div class="container mx-auto flex flex-col lg:flex-row mt-3 text-sm leading-normal">
        <div class="w-full lg:w-1/4 pl-4 lg:pl-0 pr-6 mt-8 mb-4">
            <h1><a href="#"
                   class="text-black">Tailwind CSS</a></h1>
            <div class="mb-4"><a href="#"
                                 class="text-grey-darker">@tailwindcss</a></div>

            <div class="mb-4">
                A utility-first CSS framework for rapid UI development. By <a href="#">@adamwathan</a>, <a href="#">@reinink</a>,
                <a href="#">@davidhemphill</a>, and <a href="#">@steveschoger</a>.
            </div>

            <div class="mb-2"><i class="fa fa-link fa-lg text-grey-darker mr-1"></i><a href="#">tailwindcss.com</a>
            </div>
            <div class="mb-4"><i class="fa fa-calendar fa-lg text-grey-darker mr-1"></i><a href="#">Joined August
                    2017</a></div>

            <div class="mb-4">
                <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full w-full h-10">
                    Tweet to Tailwind CSS
                </button>
            </div>

            <div class="mb-4"><i class="fa fa-user fa-lg text-grey-dark mr-1"></i><a href="#">27 Followers you know</a>
            </div>

            <div class="mb-4">
                <a href="#"><img src="{{ asset('/img/twitter/follower01.jpg') }}"
                                 alt="avatar"
                                 class="rounded-full h-12 w-12"></a>
                <a href="#"><img src="{{ asset('/img/twitter/follower02.jpg') }}"
                                 alt="avatar"
                                 class="rounded-full h-12 w-12"></a>
                <a href="#"><img src="{{ asset('/img/twitter/follower03.jpg') }}"
                                 alt="avatar"
                                 class="rounded-full h-12 w-12"></a>
                <a href="#"><img src="{{ asset('/img/twitter/follower04.jpg') }}"
                                 alt="avatar"
                                 class="rounded-full h-12 w-12"></a>
                <a href="#"><img src="{{ asset('/img/twitter/follower05.jpg') }}"
                                 alt="avatar"
                                 class="rounded-full h-12 w-12"></a>
                <a href="#"><img src="{{ asset('/img/twitter/follower06.jpg') }}"
                                 alt="avatar"
                                 class="rounded-full h-12 w-12"></a>
                <a href="#"><img src="{{ asset('/img/twitter/follower07.jpg') }}"
                                 alt="avatar"
                                 class="rounded-full h-12 w-12"></a>
                <a href="#"><img src="{{ asset('/img/twitter/follower08.jpg') }}"
                                 alt="avatar"
                                 class="rounded-full h-12 w-12"></a>
                <a href="#"><img src="{{ asset('/img/twitter/follower09.jpg') }}"
                                 alt="avatar"
                                 class="rounded-full h-12 w-12"></a>
                <a href="#"><img src="{{ asset('/img/twitter/follower10.jpg') }}"
                                 alt="avatar"
                                 class="rounded-full h-12 w-12"></a>
            </div>

            <div class="mb-4"><i class="fa fa-picture-o fa-lg text-grey-dark mr-1"></i><a href="#">Photos and videos</a>
            </div>

            <div class="mb-4">
                <a href="#"><img src="{{ asset('/img/twitter/photo1.jpg') }}"
                                 alt="photo"
                                 class="h-20 w-20 mr-1 mb-1"></a>
                <a href="#"><img src="{{ asset('/img/twitter/photo2.jpg') }}"
                                 alt="photo"
                                 class="h-20 w-20 mr-1 mb-1"></a>
                <a href="#"><img src="{{ asset('/img/twitter/photo3.jpg') }}"
                                 alt="photo"
                                 class="h-20 w-20 mr-1 mb-1"></a>
                <a href="#"><img src="{{ asset('/img/twitter/photo4.jpg') }}"
                                 alt="photo"
                                 class="h-20 w-20 mr-1 mb-1"></a>
                <a href="#"><img src="{{ asset('/img/twitter/photo5.jpg') }}"
                                 alt="photo"
                                 class="h-20 w-20 mr-1 mb-1"></a>
            </div>
        </div>

        <div class="w-full lg:w-1/2 bg-white mb-4">

            <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
                <a href="#"
                   class="text-black mr-6">Tweets</a>
                <a href="#"
                   class="mr-6">Tweets &amp; Replies</a>
                <a href="#">Media</a>
            </div>

            <div class="flex border-b border-solid border-grey-light">
                <div class="w-1/8 text-right pl-3 pt-3">
                    <div><i class="fa fa-thumb-tack text-teal mr-2"></i></div>
                    <div><a href="#"><img src="{{ asset('/img/twitter/avatar_tailwind.jpg') }}"
                                          alt="avatar"
                                          class="rounded-full h-12 w-12 mr-2"></a></div>
                </div>
                <div class="w-7/8 p-3 pl-0">
                    <div class="text-xs text-grey-dark">Pinned Tweet</div>
                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold"><a href="#"
                                                       class="text-black">Tailwind CSS</a></span>
                            <span class="text-grey-dark">@tailwindcss</span>
                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark">15 Dec 2017</span>
                        </div>
                        <div>
                            <a href="#"
                               class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>

                    <div>
                        <div class="mb-4">
                            <p class="mb-6">🎉 Tailwind CSS v0.4.0 is out!</p>
                            <p class="mb-6">Makes `apply` more useful when using !important utilities, and includes an
                                improved default color palette:</p>
                            <p class="mb-4"><a href="#">github.com/tailwindcss/ta...</a></p>
                            <p><a href="#"><img src="{{ asset('/img/twitter/tweet1.jpg') }}"
                                                alt="tweet image"
                                                class="border border-solid border-grey-light rounded-sm"></a></p>
                        </div>
                    </div>

                    <div class="pb-2">
                        <span class="mr-8"><a href="#"
                                              class="text-grey-dark hover:no-underline hover:text-blue-light"><i class="fa fa-comment fa-lg mr-2"></i> 9</a></span>
                        <span class="mr-8"><a href="#"
                                              class="text-grey-dark hover:no-underline hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 29</a></span>
                        <span class="mr-8"><a href="#"
                                              class="text-grey-dark hover:no-underline hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 135</a></span>
                        <span class="mr-8"><a href="#"
                                              class="text-grey-dark hover:no-underline hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                    </div>
                </div>
            </div>

            <div class="flex border-b border-solid border-grey-light">

                <div class="w-1/8 text-right pl-3 pt-3">
                    <div><i class="fa fa-retweet text-grey-dark mr-2"></i></div>
                    <div><a href="#"><img src="{{ asset('/img/twitter/avatar_adam.jpg') }}"
                                          alt="avatar"
                                          class="rounded-full h-12 w-12 mr-2"></a></div>
                </div>

                <div class="w-7/8 p-3 pl-0">
                    <div class="text-xs text-grey-dark">Tailwind CSS Retweeted</div>
                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold"><a href="#"
                                                       class="text-black">Adam Wathan</a></span>
                            <span class="text-grey-dark">@adamwathan</span>
                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark">7 Dec 2017</span>
                        </div>
                        <div>
                            <a href="#"
                               class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4">
                            <p class="mb-6">💥 Check out this Slack clone built with <a href="#">@tailwindcss</a> using
                                no custom CSS and just the default configuration:</p>
                            <p class="mb-4"><a href="#">https://codepen.io/adamwathan/pen/JOQWVa...</a></p>
                            <p class="mb-6">(based on some work <a href="#">@Killgt</a> started for <a href="#">tailwindcomponents.com</a>
                                !)</p>
                            <p><a href="#"><img src="{{ asset('/img/twitter/tweet2.jpg') }}"
                                                alt="tweet image"
                                                class="border border-solid border-grey-light rounded-sm"></a></p>
                        </div>
                        <div class="pb-2">
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-blue-light"><i class="fa fa-comment fa-lg mr-2"></i> 19</a></span>
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 56</a></span>
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 247</a></span>
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                        </div>

                        <div><a href="#">Show this thread</a></div>
                    </div>
                </div>
            </div>

            <div class="flex border-b border-solid border-grey-light">

                <div class="w-1/8 text-right pl-3 pt-3">
                    <div><a href="#"><img src="{{ asset('/img/twitter/avatar_tailwind.jpg') }}"
                                          alt="avatar"
                                          class="rounded-full h-12 w-12 mr-2"></a></div>
                </div>

                <div class="w-7/8 p-3 pl-0">
                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold"><a href="#"
                                                       class="text-black">Tailwind CSS</a></span>
                            <span class="text-grey-dark">@tailwindcss</span>
                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark">1 Dec 2017</span>
                        </div>
                        <div>
                            <a href="#"
                               class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4">
                            <p class="mb-6">🎉 Tailwind CSS v0.3.0 is here!</p>
                            <p class="mb-4">Enable/disable modules, focus and group-hover variants, new utilities, and
                                more.</p>
                            <p class="mb-4">Learn more in our upgrade guide:</p>
                            <p class="mb-6"><a href="#">github.com/tailwind/ta...</a></p>
                            <p><a href="#"><img src="{{ asset('/img/twitter/tweet3.jpg') }}"
                                                alt="tweet image"
                                                class="border border-solid border-grey-light rounded-sm"></a></p>
                        </div>
                        <div class="pb-2">
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-blue-light"><i class="fa fa-comment fa-lg mr-2"></i> 6</a></span>
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 74</a></span>
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 206</a></span>
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex border-b border-solid border-grey-light">

                <div class="w-1/8 text-right pl-3 pt-3">
                    <div><i class="fa fa-retweet text-grey-dark mr-2"></i></div>
                    <div><a href="#"><img src="{{ asset('/img/twitter/avatar_egghead.jpg') }}"
                                          alt="avatar"
                                          class="rounded-full h-12 w-12 mr-2"></a></div>
                </div>

                <div class="w-7/8 p-3 pl-0">
                    <div class="text-xs text-grey-dark">Tailwind CSS Retweeted</div>
                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold"><a href="#"
                                                       class="text-black">egghead.io</a></span>
                            <span class="text-grey-dark">@eggheadio</span>
                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark">29 Nov 2017</span>
                        </div>
                        <div>
                            <a href="#"
                               class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4">
                            <p class="mb-6">Create a Responsive Card Component by Composing Tailwind's Utility Classes -
                                <a href="#">#html</a> lesson by <a href="#">@simonswiss</a></p>
                            <div class="flex border border-solid border-grey-light rounded">
                                <div class="w-1/4">
                                    <img src="{{ asset('/img/twitter/tweet4.jpg') }}"
                                         alt="image">
                                </div>
                                <div class="w-3/4 p-3">
                                    <div class="font-bold mb-1">egghead Lesson: Abstract utility classes to ...</div>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus
                                        voluptate tempore itaque culpa hic qui nostrum, minus harum cupiditate a
                                        voluptatibus.
                                    <div class="text-grey-dark">egghead.io</div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-2">
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-blue-light"><i class="fa fa-comment fa-lg mr-2"></i> 2</a></span>
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 8</a></span>
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 24</a></span>
                            <span class="mr-8"><a href="#"
                                                  class="text-grey-dark hover:no-underline hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-1/4">

        </div>
    </div>
</div>
</body>
</html>
