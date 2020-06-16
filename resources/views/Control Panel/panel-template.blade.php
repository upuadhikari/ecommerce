<?php
session_start();
Session::put('this_will_be_unique_session_key_later_on','thisisrandomsessionvalue');
//Session::get('email');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <script src="{{ asset('js/main.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Css Styles -->
      <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <link rel="stylesheet" href="/css/styles.css" type="text/css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
</head>

<body>
    <!-- Page Preloder -->
      
    <div class="inner-header" id="control-panel">
        <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <div class="logo">
                    <a href="/cpanel">
                        <span id="e">Tech</span><span style="font-size:20px; opacity:0.7">Shop</span>
                    </a>
                </div>
            </div>
                <div class="content col-lg-2 col-md-2">                                    
                    
                    <li id="dropdown" style="list-style:none;margin-left:60px;">          
                        <a id="navbarDropdown" style="text-transform:capitalize;" class="nav-link dropdown-toggle text-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>   
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: ;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
        </div>
    </div>
    </div>
    <!-- Header End -->

    <main class="content" id="content">
        <div id="container" style="width:70%; margin: 0 auto;">
            @yield('panel-content')
        </div> 
    </main>

    >
    <!-- Js Plugins -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
	AOS.init();
    </script>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
  

    
</body>

</html>