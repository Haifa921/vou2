
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
			 margin:auto;
			 border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem
				}
				.form-control 
				{
    		display: block;
    		 width: 100%; 
				}
				.H1-color 
				{
    margin: unset;
				}
	</style>
	</head>
	<body>
	<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">Charity</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="index.html">الرئيسية</a>
							</li>
                            <li><a href="">من نحن</a></li>
							
							<li><a href="">تواصل معنا</a></li>
							<li><a class="active" href="{{ route('post.create1') }}">اكفل يتيم</a></li>
                       
        @if (Route::has('login'))
                <li>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                       <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">تطوع الان</a></li>
                      
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"></a>
                        @endif
                    @endauth
							
						</ul>
					</nav>
                  
            @endif
				</div>
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
			<div class="col" >
				
				<div class="container-fluid pt-5 pb-3">
					
					<div class="row justify-content-center mt-5" >
						
							<div class="col-md-6">
								<div class="card">
										<div class="card-header text-center">
											<h1 class="H1-color" style="color=#ffffff"> تكفل الان </h1>
										</div>
											<form action="{{route('post.store')}}" class="w-100" method="POST" enctype="multipart/form-data">
													@csrf
												<div class="container-fluid pt-5">    
																	<div class="form-group">
																		<label for="exampleFormControlInput1">الاسم بالعربي  </label>
																		<input type="text" name="arabic" class="form-control mr-4 w-100">
																	</div>
																	<div class="form-group">
																		<label for="exampleFormControlInput1">الاسم بالانكليزي  </label>
																		<input type="text" name="english" class="form-control mr-4 w-100"   >
																	</div>
																	<div class="form-group">
																			<label for="exampleFormControlInput1">رقم الموبايل  </label>
																			<input type="text" name="phone" class="form-control  mr-4 w-100"   >
																	</div>
																	<div class="form-group">
																		<label for="exampleFormControlInput1">الايميل  </label>
																		<input type="email" name="email" class="form-control mr-4 w-100"   >
																	</div>
																	<div class="form-group">
																						<label for="exampleFormControlInput1">نوع الكفالة  </label>
																			<select name="orphan_type" id="cars">
																				<option value="كفالة يتيم">كفالة يتيم</option>
																				<option value="طالب علم">طالب علم</option>
																				<option value="كفالة اسرة">كفالة اسرة</option>
																				<option value="ذوي احتياجات">ذوي احتياجات</option>
																			</select>
																	</div>
															<div class="form-group">
																		<label for="exampleFormControlInput1">كمية التبرع  </label>
																		<input type="text" name="amount" class="form-control mr-4 w-100"   >
															</div>
															<div class="form-group">
																		<label for="exampleFormControlInput1">الفرع  </label>
																		<input type="text" name="branch" class="form-control mr-4 w-100"   >
															</div>
															<div class="form-group">

																		<label for="exampleFormControlInput1">رقم البطاقة  </label>
																		<input type="text" name="id_num" class="form-control mr-4 w-100"   >
															</div>
																

															<div class="flex items-center justify-end mt-4 text-center">

																	<a href="">  <button class="btn btn-danger" type="submit">اكفل يتيم</button></a>
																
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

