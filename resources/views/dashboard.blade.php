<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>


  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
  <script src="js/jquery-1.6.3.min.js"></script>
  <!-- <script src="js/cufon-yui.js"></script>
  <script src="js/cufon-replace.js"></script> -->
  <script src="js/NewsGoth_BT_400.font.js"></script>
  <script src="js/FF-cash.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/tms-0.3.js"></script>
  <script src="js/tms_presets.js"></script>
  <script src="js/easyTooltip.js"></script>
  <!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body class="antialiased">


          </div>

          <nav>
            <ul class="menu">
              
              @if (Route::has('login'))
              @auth
              <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>


              </li>
              <li class="last">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
              @else
              <li><a href="{{ route('login') }}">login</a></li>
              @if (Route::has('register'))
              <li class="last"><a href="{{ route('register') }}">register</a></li>
              @endif
              @endauth
            </ul>
            @endif
          </nav>
        </div>
        
</body>

</html>