<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Tech</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/jquery-ui.min.js"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="/css/styles.css" type="text/css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                
                <div class="ht-right">
                    <div id="col1">
                      <i class="fas fa-phone-volume"></i> +977-9860462244
                   </div>   
                    <div class="top-social"  id="col2">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                     <div id="col3">
                       <!-- <span><i class="fas fa-user"></i> <b>Login</b></span> -->
                           <div class="content">
                               @guest
                                        
                                           <a href="{{ route('login') }}"><i class="fas fa-user"></i> <b>Login</b></a>
                                      
                                @if (Route::has('register'))
                                   
                                            <a href="{{ route('register') }}"><span><i class="fas fa-sign-in-alt"></i> <b>Register</b></span></a>
                                        
                                @endif
                            @else
                                <li class="dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: ;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                           </div>
                    </div>
                </div>
               
            </div>
        </div>
        
            <div class="inner-header">
                <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <div class="logo">
                            <a href="/">
                                <span id="e">Tech</span><span style="font-size:20px; opacity:0.7">Shop</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="advanced-search">
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" id="col3">  
                             <div class="cart">
                                 <img src="{{ asset('img/cart.png') }}" id="cart"/>
                             </div>                                             
                            <ul class="shopnow">
                        <!-- Authentication Links -->
                                <li><a><button id="btn"><i class="fas fa-shopping-cart"></i> <span>SHOP NOW</span></button></a></li>
                           </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <main class="content" id="content">
            @yield('content')
    </main>

        <!---Contents--->   

    <!---end of contents-->

    <!-- Js Plugins -->

      <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> 
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>

</html>