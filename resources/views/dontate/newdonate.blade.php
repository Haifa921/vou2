<!DOCTYPE html>
<html lang="en">
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
<body>

  <div class="extra">
    <div class="main">
      <div class='content-holder'>

        <!--==============================header=================================-->
        <header>


          <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <div class="container-fluid">

             <!--  <ul class="menu">-->
              <!--  <li>-->
                  <a class="navbar-brand" href="{{ url('/home') }}">home</a>
               <!-- </li>-->
             
                @if (Route::has('login'))
                @auth
              <!--  <li> -->
                  <a href="#" role="button">
                    {{ Auth::user()->name }}
                   </a>
               <!-- </li>-->
              <!--  <li class="last">-->

                  <div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
               <!-- </li>-->
                @else
                <li><a href="{{ route('login') }}">login</a></li>
                @if (Route::has('register'))
                <li class="last"><a href="{{ route('register') }}">register</a></li>
                @endif
                @endauth
              </ul>
              @endif
              </div>

          </nav>
          </div>
        </header>
        <div class="row">
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $item)
                <li>
                    {{$item}}
                </li>
            @endforeach
        </ul>
        @endif


        <div class="col">
	<div class="container-fluid pt-5 pb-3">
   		<div class="row justify-content-center mt-5">
      		  <div class="col-md-6">
        		    <div class="card">
							<div class="card-header text-center">
								<h1 class="H1-color" style="color=#ffffff"> اضافة معلومات  </h1>
							</div>
      <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid pt-5">


        <div class="form-group">
              <label for="exampleFormControlInput1">name  </label>
              <input type="text" name="name"  class="form-control mr-4 w-100"    >
            </div>
           
            <div class="form-group">
              <label for="exampleFormControlTextarea1">content  </label>
              <textarea class="form-control  mr-4 w-100"  name="content"   rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">phone  </label>
                <input type="text"  name="phone" class="form-control  mr-4 w-100"   >
              </div>
              

        <div class="form-group">
              <label for="exampleFormControlInput1">address  </label>
              <input type="text" name="address" class="form-control mr-4 w-100"   >
            </div>

            <div class="flex items-center justify-end mt-4 text-center">

                <button class="btn btn-secondary" type="submit" style="margin: 15px;">save</button>
            </div>
            </div>

          </form>
          </div>
				</div>
			</div>
		</div>
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

