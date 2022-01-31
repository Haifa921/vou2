<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>


  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
  <script src="js/jquery-1.6.3.min.js"></script>
  <!-- <script src="js/cufon-yui.js"></script>
  <script src="js/cufon-replace.js"></script> -->
  <script src="js/NewsGoth_BT_400.font.js"></script>
  <script src="js/FF-cash.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/tms-0.3.js"></script>
  <script src="js/tms_presets.js"></script>
  <script src="js/easyTooltip.js"></script>
  <!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body class="antialiased">


          </div>

          <nav>
            <ul class="menu">
              
              @if (Route::has('login'))
              @auth
              <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>


              </li>
              <li class="last">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                          <h1 class="H1-color" style="color=#ffffff"> متطوع  </h1>
          </div>
<form action="{{route('post.store3')}}" class="w-100" method="POST" enctype="multipart/form-data">
@csrf
 

<div class="container-fluid pt-5">
<div class="form-group">
<label for="exampleFormControlInput1"  >قيمة كل عملية </label>
      <select name="type" id="cars" class="form-select" aria-label="Disabled select example" >
    <option value=" توزيع بطانيات ">  توزيع بطانيات</option>
    <option value=" توزيع طرود صحية "> توزيع طرود صحية</option>
    <option value=" مساعدة طبية"> مساعدة طبية </option>
    <option value="دعم ">  دعم نفسي</option>
    
    </select>
</div>

    <div class="form-group">
      <label for="exampleFormControlInput1">الاسم   </label>
      <input type="text" name="name"  class="form-control mr-4 w-100"   >
    </div>

    <div class="form-group">
    <label for="exampleFormControlInput1">رقم الموبايل  </label>
    <input type="text" name="phone"  class="form-control mr-4 w-100"   >
    </div>
    
    <div class="flex items-center justify-end mt-4 text-center">

    <a href="">  <button class="btn btn-secondary" type="submit" style="margin: 15px;"> تطوع</button></a>
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

