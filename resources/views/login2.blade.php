
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
            <!--Logo Blue-->  
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
    
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
<div class="container-fluid pt-5 pb-3">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                        <div class="card-header text-center">
                            <h1 class="H1-color" style="color=#ffffff"> متطوع </h1>
                        </div>  
                <form method="POST" class="w-100" action="{{ route('login') }}">
            @csrf
            
            <div class="container-fluid pt-5">
                    
                        <div class="form-group">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email"  class="form-control mr-4 w-100" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                        <div class="form-group">    
                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="form-control mr-4 w-100" type="password" name="password" required autocomplete="current-password" />
                            </div>
                        </div>
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
            </div>
                    <div > <a class=""  href="http://127.0.0.1:8000/register"   > متطوع جديد؟</a></div>
                    <div> <a  href="http://127.0.0.1:8000/register"   > خدمات غير المتطوعين</a></div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('نسيت كلمة المرور؟') }}
                            </a>
                        @endif
                    </div>
                    <div class="flex items-center justify-end mt-4 text-center">
                    
            <a class="btn btn-success" href="{{url('/voludo')}}" >  تسجيل الدخول </a>
            
                    </div>
            </div>
                </form>
</div>
    </div> 
        </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>


