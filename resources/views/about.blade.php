
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity </title>
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
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
 
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
					<h1 id="fh5co-logo"><a href="index.html">الامان الخيري</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li >
								<a href="http://127.0.0.1:8000/">الرئيسية</a>
							</li>
                            <li class="active"><a href="{{ route('post.about') }}">من نحن</a></li>
							
							<li><a href="{{ route('post.contact') }}">تواصل معنا</a></li>

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
		
		

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(../images/Untitled_2.jpg);">
				<div class="desc animate-box">
				<h2><strong>تبرع</strong> <strong>للأطفال الفقراء</strong></h2>
					<span><a class="btn btn-primary btn-lg" href="{{ route('post.donate') }}">تبرع الأن</a></span>
				</div>
			</div>

		</div>
		
		<div id="fh5co-feature-product" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3> "العطاء"</h3>
						<p>· "المعطي" اسم من أسماء الله الحسنى، والمعطي سبحانه هو الذي أعطى كل شيء خلقه وتولى أمره ورزقه في الدنيا والآخرة، وقد قال الله تعالى عن موسى عليه السلام وهو يصف عطاء الربوبية: {قَالَ رَبُّنَا الَّذِي أَعْطَى كُلَّ شَيْءٍ خَلْقَهُ ثُمَّ هَدَى}.</p>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-12 text-center animate-box">
						<p><img src="../images/cover_bg_4.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="../images/cover_bg_5.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="../images/cover_bg_6.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3> العمل التطوعي</h3>
							<p>التطوع صفة من أسمى صفات الإنسانية، لذلك من تطوَّع خيرًا فهو خير له في الدنيا والآخرة..</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>كفالة مريض</h3>
							<p> مَنْ نَفَّسَ عَنْ مُؤْمِنٍ كُرْبَةً مِنْ كُرَبِ الدُّنْيَا نَفَّسَ اللَّهُ عَنْهُ كُرْبَةً مِنْ كُرَبِ يَوْمِ الْقِيَامَةِ ، وَمَنْ يَسَّرَ عَلَى مُعْسِرٍ يَسَّرَ اللَّهُ عَلَيْهِ فِي الدُّنْيَا وَالْآخِرَةِ ، وَمَنْ سَتَرَ مُسْلِمًا سَتَرَهُ اللَّهُ فِي الدُّنْيَا وَالْآخِرَةِ ، وَاللَّهُ فِي عَوْنِ الْعَبْدِ مَا كَانَ الْعَبْدُ فِي عَوْنِ أَخِيهِ  ،</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3> الصدقة</h3>
							<p>"ۚقال رسول الله صلى الله عليه وسلم : لا يَتَصَدَّق أحَدٌ بتَمْرَةٍ مِن كَسْبٍ طَيِّبٍ، إلَّا أخَذَها اللَّهُ بيَمِينِهِ، فيُرَبِّيها كما يُرَبِّي أحَدُكُمْ فَلُوَّهُ، أوْ قَلُوصَهُ، حتَّى تَكُونَ مِثْلَ الجَبَلِ، أوْ أعْظَمَ."</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div id="fh5co-portfolio">
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
						<h3>ما يميزنا</h3>
						<p> السعي لبناء مجتمع صحي آمن وتحقيق السلام الاجتماعي بين افراد المجتمع محليا ، وشعوب العالم دوليا.</p>
					</div>
				</div>

				
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-portfolio-list">

							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/cover_bg_11.jpg); ">
								<a href="#" class="color-3">
									<div class="case-studies-summary">
										
									</div>
								</a>
							</li>
						
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/cover_bg_12.jpg); ">
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/cover_bg_13.jpg); "> 
								<a href="#" class="color-5">
									<div class="case-studies-summary">
										
									</div>
								</a>
							</li>
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../images/cover_bg_14.jpg); ">
								<a href="#" class="color-6">
									<div class="case-studies-summary">
										
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="#" class="btn btn-primary btn-lg">تبرع الان</a>
					</div>
				</div>

				
			</div>
		</div>
		

		
	
		<!-- fh5co-content-section -->

		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Charity</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


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

