
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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

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
      <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
           
        <div class="form-group">
              <label for="exampleFormControlInput1">الاسم بالعربي  </label>
              <input type="text" name="arabic" class="form-control"   >
            </div>

        <div class="form-group">
              <label for="exampleFormControlInput1">الاسم بالانكليزي  </label>
              <input type="text" name="english" class="form-control"   >
            </div>
           
            <div class="form-group">
              <label for="exampleFormControlInput1">رقم الموبايل  </label>
              <input type="text" name="phone" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">الايميل  </label>
              <input type="email" name="email" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">نوع الكفالة   </label>

			  <select name="orphan_type" id="cars">
    <option value="كفالة يتيم">كفالة يتيم</option>
    <option value="طالب علم">طالب علم</option>
    <option value="كفالة اسرة">كفالة اسرة</option>
    <option value="ذوي احتياجات">ذوي احتياجات</option>
  </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">كمية التبرع  </label>
              <input type="text" name="amount" class="form-control"   >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">الفرع  </label>
              <input type="text" name="branch" class="form-control"   >
            </div>
			<label for="exampleFormControlInput1">رقم البطاقة  </label>
              <input type="text" name="id_num" class="form-control"   >
            </div>
			

            <div class="form-group">

            <a href="http://127.0.0.1:8000/posts">  <button class="btn btn-danger" type="submit">اكفل يتيم</button></a>
            
            </div>

          </form>
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

