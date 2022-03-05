
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
	<!--<style>
						.jumbotron
						{
					background-color: #ff5722;
							}
							.jumbotron h1, .jumbotron .h1 {
					color: aliceblue;
				}
				.form-control {
					display: block;
					width: 100%;
				}
				.card {
					position: relative;
					display: -ms-flexbox;
					display: flex;
					flex-direction: column;
					align-content: stretch;
					justify-content: space-around;
					align-items: center;
				}
				.col-md-6 {
					width: 50%;
					display: contents;
				}
	</style>-->
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
				.container-fluid {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 10px;
}
.col-md-6 {
    width: 50%;
    width: -webkit-fill-available;
}
.btn-secondary {
   color: #ffffff;
}
.btn-secondary {
   color: #ffffff;
				}
				.btn {
					background-color: #ff5722 ;
					border:0px
				}

	</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
			<div class="col">
				<div class="jumbotron">
					<div class="col align-self-center">
					<div class="flex items-center justify-end mt-4 text-center">

						<h1 class="display-4" style="color:#ff5722">اضافة متطوع</h1>

						<a class="btn btn-success" href="{{url('/admin')}}" > كل المتطوعين</a>
						</div>
</div>
				</div>
			</div>
		</div>
	
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
											<h1 class="H1-color" style="color=#ffffff">  قم باضافة متطوع جديد </h1>
										</div>
      <form action="{{route('post.storeadmin')}}" method="POST" enctype="multipart/form-data" class="w-100">
        @csrf
           
		<div class="container-fluid pt-5">    


					<div class="form-group">
						<label for="exampleFormControlInput1">الاسم الكامل </label>
						<input type="text" name="full_name" class="form-control mr-4 w-100"   >
					</div>
				
					<div class="form-group">
						<label for="exampleFormControlTextarea1">الايميل  </label>
						<input type="email"  name="email"   rows="3" class="form-control mr-4 w-100">
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">كلمة السر  </label>
						<input type="password"  name="password" class="form-control mr-4 w-100"   >
					</div>
              <div class="form-group">
              <label for="exampleFormControlInput1">الصلاحية  </label>
			
				<select name="type" id="cars">
					<option value= "supervisor">supervisor</option>
					<option value=" volunteer">volunteer </option>
																			
				</select>
        </div>

            <div class="flex items-center justify-end mt-4 text-center">

			<a href=""> <button class="btn btn-secondary" type="submit" style="margin:15px  ">save</button></a>
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

  </body>
</html>
