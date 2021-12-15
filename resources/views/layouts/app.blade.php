<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Slurp') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <!-- la riga 22 non va eliminata-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">

   <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   
<style>
            html, body {
                background-color: #F4F4F4;
                color: #767e82;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                font-family: Arial;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: top;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top {
                position: relative;
                width: 30px;
                height: 40px;
                top:5px;
                  
            }

            .content {
                text-align: center;
            }


            .title {
                font-size: 84px;
                color:purple;
                font-family: Georgia;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
          
              
              /* When the input field gets focus, change its width to 100% */
         


              div.background {
                margin: 2%;
                background-color: #cdc06d;
              }
              
              div.transbox p {
                margin: 1%;
                font-weight: bold;
                color: #6f9c1b;
                background-color: #cdc06d;
                text-align: center; 
              }



              footer {
                  color: black;
                  font-size: small;
                bottom : 50px;  
                height : 10px;  
                margin-top : 20px;  
                text-align: center;  
                vertical-align: middle; 
                width: 98%;
             
              }


        </style>




</head>







<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
    
<div class="flex-center position-ref ">
       

                    <!-- Right Side Of Navbar -->
                   <div class="w3-container">


                        <!-- Authentication Links -->
                        @guest
                            <div class="top w3-table w3-white w3-bordered w3-card-4 w3-dark-silver">
                     

                                <a class=" w3-bar-item w3-button" href="{{ route('login') }}">{{ __('Login') }}</a>
            
                            @if (Route::has('register'))
                                
                                    <a class="w3-bar-item w3-button" href="{{ route('register') }}">{{ __('Sign up') }}</a>


                                    <!-- <input type="text"class="w3-bar-item w3-button" name="search" placeholder="Search.."> -->
            
                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
            </div>
                        @endguest
            </div>
                </div>
                </div>
            
        </nav>
            <!-- Tendina -->


            <div class="links">
    <div class="w3-sidebar w3-bar-block w3-collapse  w3-card w3-animate-left" style="width:200px;left:0;" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
    <a href="http://127.0.0.1:8000" class="w3-bar-item w3-button">Home</a>
    @if (Auth::check() && Auth::user()->role == "no")
    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Reservation</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="http://127.0.0.1:8000/reservation/create">New</a>
                        <a class="dropdown-item" href="http://127.0.0.1:8000/reservation">Mine</a>
                    </div>
                </li>
    @endif

    @if (Auth::check() && Auth::user()->role == "yes") 
    <a href="http://127.0.0.1:8000/reservationowner" class="w3-bar-item w3-button">Reservations</a> 
    @endif
    
    @if (Auth::check() && Auth::user()->role == "yes") 
    <a href="http://127.0.0.1:8000/event" class="w3-bar-item w3-button">Manage Events</a>
    @endif

    <!-- <a href="#" class="w3-bar-item w3-button">Owner</a>  -->
    <a href="http://127.0.0.1:8000/menus" class="w3-bar-item w3-button">Menu</a>
    <a href="http://127.0.0.1:8000/review" class="w3-bar-item w3-button">Review</a> <!--- qua inseriamo anche il "blog" --->

    @if (Auth::check() && Auth::user()->role == "no")
    <a href="http://127.0.0.1:8000/users" class="w3-bar-item w3-button">My Profile</a>
    @endif
    
    @if (Auth::check() && Auth::user()->role == "yes") 
    <a href="http://127.0.0.1:8000/users" class="w3-bar-item w3-button">Accounts</a>
    @endif
    
    <a href="http://127.0.0.1:8000/aboutus" class="w3-bar-item w3-button">About Us</a>
    
    </div>
    </div>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
