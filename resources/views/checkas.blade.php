
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
								<a href="http://127.0.0.1:8000/">الرئيسية</a>
							</li>
                            <li><a href="{{ route('post.about') }}">من نحن</a></li>
							
							<li><a href="{{ route('post.contact') }}">تواصل معنا</a></li>

							<li><a class="active" href="">اكفل يتيم</a></li>
							<li class="last"><a href="{{ url('/') }}">logout</a></li>
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
		
<div class="container">
                    <div class="row">
                    
                        <div class="col">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">نوع المساعدة </th>
                                        <th scope="col"> الوصف</th>
                                        <th scope="col">المبلغ المطلوب</th>
                                        <th scope="col">اسم الرنامج</th>
                                        <th scope="col">العنوان</th>
                                        
                                        <th scope="col">رقم الهاتف</th>
                                        <th scope="col">الصلاحية</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                        <th scope="row"></th>
                                        <td> غذائية</td>
                                        <td>للفقراء</td>
                                        <td>200000</td>
                                        <td>سلة غذائية</td>
                                        <td>دمشق</td>
                                        <td>0975432125</td>
                                        <td>
                                            
            <a class="btn btn-success" href="{{url('/accept')}}"> قبول    </a>
            <a class="btn btn-success" href="{{url('/')}}"> حذف    </a>
                                         
                      
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row"></th>
                                        <td> غذائية</td>
                                        <td>للفقراء</td>
                                        <td>200000</td>
                                        <td>سلة غذائية</td>
                                        <td>دمشق</td>
                                        <td>0975432125</td>
                                        <td>
                                            
            <a class="btn btn-success" href="{{url('/accept')}}"> قبول    </a>
            <a class="btn btn-success" href="{{url('/')}}"> حذف    </a>
                                         
                      
                                        </td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>


                        </div>
        
                        <div class="col">
                            <div class="alert alert-danger" role="alert">
                            
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