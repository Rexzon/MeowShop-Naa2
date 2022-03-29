
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MEOWSHOP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap
" rel="stylesheet">

        <!-- Styles -->
        
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            .slider{
                position:absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background:lightblue;
                z-index: -1;
                background:linear-gradient(to left, #005AA7,#FFFDE4);
            }
            nav{
                display:grid;
                grid-template-columns:10% 1fr 1fr 10%;
                min-height: 10vh;
                color:lightblue;
                align-items: center;
            }
            #logo{
                grid-column: 2/3;
                font-size: 24px;
                color:black;
            }
            a{
                text-decoration: none;
                font-size:16PX;
                color:lightblue;
            }
            .hemberger{
                justify-self: end;
                
            }
            section{
                display: flex;
                height: 80vh;
                justify-content: center;
                align-items: center;

            }
            .pic-center{
                height:60%;
                width: 100%;
                position: relative;
            }
            .pic-center img{
                width: 100%;
                height:100%;
                object-fit: cover;
            }
            .headline{
                position: absolute;
                top: 60%;
                left:5%;
                font-size: 70px;
                transform: translate(-20, -70);
                color:white;
                z-index: 3;
            }
            .pic-center::after{
                content: "";
                background: black;
                width: 100%;
                height:100%;
                position: absolute;
                left: 0;
                top: 0;
                opacity:0.3;

            }

        </style>
    </head>
    <body>
        <header>
            <nav>
                <!-- <h3 id="logo">MEOWSHOP</h3> -->
                <a href="{{ url('/dashboard') }}" id="logo">MEOWSHOP</a>
                <div class="hemberger">
                    @if (Route::has('login'))

                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">

                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <div class="contain-log">
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                </div>
                                <div class="contain-regis">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                </div>
        
                            @endauth
                        </div>
                    @endif
                </div>
                
            </nav>
            <section>
                <div class="pic-center" >
                    <img src="https://images.wallpaperscraft.com/image/single/cat_art_window_140051_3840x2160.jpg
" alt="">
                    <h1 class="headline" >Cat is Everything</h1>
                </div>
            </section> 
        </header>
        <div class="slider">

        </div>
        
        
        

        
    </body>
</html>