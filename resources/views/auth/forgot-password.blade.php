
 <link rel="stylesheet" type="text/css" href="{{ ('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="favicon.ico">

	 <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
       
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="/css/superfish.css">
	<link rel="stylesheet" href="/css/style.css">
   
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
           <!--<x-jet-authentication-card-logo />-->
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
							<li><a class="active" href="{{ route('post.create') }}">اكفل يتيم</a></li>
                       
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
   </x-slot>
   <div class="position-relative">
        <div class="mb-4 text-sm text-gray-600">
        <div class="visible">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

        </div>
        </div>


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />
        <div class="container-fluid pt-5 pb-3">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                        <div class="card-header text-center">
                            <h1 class="H1-color" style="color=#ffffff"> إعادة تعيين كلمة المرور
 </h1>
                        </div>  

        <form method="POST"  class="w-100" action="{{ route('password.email') }}">
            @csrf
            <div class="container-fluid pt-5">

			<div class="form-group">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control mr-4 w-100" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4 text-center">
                
                <x-jet-button class="btn btn-secondary ">
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
            <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color:#253435">
                    {{ __(' قم بادخال عنوان بريدك الالكتروني لاعادة تعيين كلمة سر جديدة ') }}
                </a>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
