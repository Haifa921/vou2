<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
       
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="/css/superfish.css">

	<link rel="stylesheet" href="/css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		 .card 	{
			 flex-direction:column; 
			 width: 424px;
				}
	</style>
</head>

<body class="antialiased">
<header>
    <div>

                        <nav>
                            <ul class="menu">
                                <li><a class="active" href="{{ url('/home') }}">home</a></li>
                                <li><a href="{{ url('/posts') }}">addservice</a></li>
                                <li><a href="{{ url('/staff') }}">Staff</a></li>

                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                @if (Route::has('login'))
                                @auth
                                <li><a href="#" role="button">
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                                <li class="last">

                                    <div>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
                </header>

                
                <div class="container">
                    <div class="row">
                        @if ($posts->count() > 0 )
                        <div class="col">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
                                        <th scope="col"> address</th>
                                        <th scope="col">User</th>
                                        <th scope="col">contentr</th>
                                        <th scope="col">Phone</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($posts as $item)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->address }}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->content}}</td>
                                        <td>{{$item->phone}}</td>
                                     
                                        <td>
                                            <a class="text-success" href=""> <i class="fas  fa-2x fa-eye"></i> </a>
                                            @if ($item->user_id == Auth::id() || Auth::user()->is_admin)
                                            &nbsp;&nbsp;
                                            <a href=""> <i class="fas fa-2x fa-edit"></i> </a>&nbsp;&nbsp;
                                            <a class="text-danger" href="{{route('post.destroy',['id'=> $item->id])}}"> <i class="fas  fa-2x fa-trash-alt"></i> </a>
                                            @endif

                                            @if( Auth::user()->is_admin)
                                            <a href="{{route('post.approve', $item->id)}}" "><i class=" fas fa-2x fa-check" style="color:green;"></i></a>

                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>


                        </div>
                        @else
                        <div class="col">
                            <div class="alert alert-danger" role="alert">
                                Not posts
                            </div>
                        </div>

                        @endif


                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/sticky.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>

