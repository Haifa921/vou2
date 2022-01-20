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
          <!--  <x-jet-authentication-card-logo />-->
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

        <x-jet-validation-errors class="mb-4" />
        <div class="container-fluid pt-5 pb-3">
        <div class="row justify-content-center mt-5">
        <div class="col-md-6">
<div class="card">
                        <div class="card-header text-center">
                            <h1 class="H1-color" style="color=#ffffff"> متطوع جديد </h1>
                        </div>  
    <form class="w-100" method="POST" action="{{ route('register') }}">
            @csrf
        <div class="container-fluid pt-5">

                <div class="form-group">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name"  class="form-control mr-4 w-100" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="form-group">         
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email"  class="form-control mr-4 w-100" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="form-group">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password"  class="form-control mr-4 w-100" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="form-group">      
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation"  class="form-control mr-4 w-100" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
       
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="block mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>
                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('هل انت متطوع؟') }}
                </a>
                <div class="flex items-center justify-end mt-4 text-center">
                <x-jet-button class="btn btn-secondary ">
                    {{ __('Register') }}
                </x-jet-button>
                </div>

            </div>
        </div>
    </form>
</div>
</div> 
</div>
</div>
    </x-jet-authentication-card>
</x-guest-layout>
