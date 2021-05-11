@extends('layouts.app')

@section('content')
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
            @if(count($color_images) == 2)
          <div class="col-sm-6">
            
            <img src='{{url("/images/$product_creativitie->creativity_img")}}' class="card-img-top mx-auto" alt="{{ $product_creativitie->creativity_img }}"/>
                                
          </div>
          @endif
          @if(count($color_images) == 3)
          <div class="col-sm-4">
            
            <img src='{{url("/images/$product_creativitie->creativity_img")}}' class="card-img-top mx-auto" alt="{{ $product_creativitie->creativity_img }}"/>
                                
          </div>
          @endif
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
        @foreach($videos as $video)

        <div class="col-sm-4">
        {!! $video->video_link !!}
        <p class="text-center">{{$video->video_name}}</p>
          
        </div>
        @endforeach

        </div>
        
 
@endsection