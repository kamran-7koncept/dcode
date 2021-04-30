<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'E-COMMERCE STORE' }}</title>
    <link rel="stylesheet" href={{ url('css/app.css') }}>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
   <a class="navbar-brand" href="{{ url('/') }}">
           <img src="{{asset('./storage/img/logo.png')}}" class="img img-responsive">
        </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
         
        <div class="navbar-nav ml-auto">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item float-left">
                    <a class="nav-link font-10 text-dark" href="/">Home</a>
                </li>  
                 
                <li class="nav-item">
                    <a class="nav-link font-10 text-dark" href="#'">About</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link font-10 text-dark" href="#">Contact us</a>
                </li> 
                <li class="nav-item">
                  <form method="POST" action='{{url("/order/")}}'>
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button class="btn btn-success" href="#">Order Now</button>
                  </form>
                </li>
    </div>
</nav>
    <main class="py-4">
     

<div id="demo" class="carousel slide margin-t-35 " data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('./storage/images/sliders/slider-1.jpg')}}" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('./storage/images/sliders/slider-2.jpg')}}" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('./storage/images/sliders/slider-3.jpg')}}" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 </main>
    <div class="container" style="margin-top: 50px;">
       
        <div class="row">
          <div class="col-sm-6">
            <h3>{{$product->name}}</h3>
             
          </div>
           <div class="col-sm-6">
            
            <a href="#" class="float-right" name="specification" id="specifications">Specification</a>

          </div>
          <div class="col-sm-12">
            <img src='{{url("/images/$product->overview_img")}}' class="card-img-top mx-auto" alt="{{ $product->overview_img }}">
          </div>

            <?php 
          if (count($product_creativities) > 0 ) { 
            ?>
            <div class="col-sm-12">
            <h3 class="text-center">More Modes To Free Your Creaivity</h3>
          </div>
            @foreach($product_creativities as $product_creativitie)
          <div class="col-sm-6">
            
            <img src='{{url("/images/$product_creativitie->creativity_img")}}' class="card-img-top mx-auto" alt="{{ $product_creativitie->creativity_img }}"
                                >
          </div>
          @endforeach
        <?php
              }
          ?>
          <div class="col-sm-12">
            <h3 class="text-center">Colors Available</h3>
          </div>
            @foreach($color_images as $color_image)
          <div class="col-sm-4">
            
            <img src='{{url("/images/$product_creativitie->creativity_img")}}' class="card-img-top mx-auto" alt="{{ $product_creativitie->creativity_img }}"/>
                                
          </div>
          @endforeach
         

          @foreach($colors as $color)
          @if(count($colors) == 2)
          <div class="col-sm-6">
            
            <p class="text-center">{{$color->color_name}}</p>
                                
          </div>
          @elseif(count($colors) == 3)
          <div class="col-sm-4">
            
            <p class="text-center">{{$color->color_name}}</p>
                                
          </div>
          @elseif(count($colors) == 4)
          <div class="col-sm-3">
            
            <p class="text-center">{{$color->color_name}}</p>
                                
          </div>
          @else
          <div class="col-sm-12">
            
            <p class="text-center">{{$color->color_name}}</p>
                                
          </div>
          @endif

          @endforeach
           
          </div>

         <div class="col-sm-12" >
            <h3 class="text-center">Sleek Stylish Design</h3>

            <img src='{{url("/images/$product->sleek_img")}}' class="card-img-top mx-auto" alt="{{ $product->sleek_img }}">
            
        </div>


        </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>