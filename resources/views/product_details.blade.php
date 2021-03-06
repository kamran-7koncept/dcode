@include('include.header')

<div class="code-carousel">
    <div id="home-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home-slider" data-slide-to="0" class="active"></li>
            <li data-target="#home-slider" data-slide-to="1"></li>
            <li data-target="#home-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
             <div class="carousel-item active">
                <div class="code-home-slider code-mobile-site-slider-1" style='background: url("../storage/layout_images/bg_banner_1.png");' >
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6 order-0">
                                <div class="carousel-caption">
                                    <h1 class="display-1">
                                        X CHERRY RED 
                                    </h1>
                                    
                                    <img class="img-fluid" src="{{asset('./storage/layout_images/mobile-spec.png')}}"/>
                                    <div class="mt-5 pt-md-3"></div>
                                    
                                    <a class="btn btn-square btn-orange btn-lg border-0 ml-md-4"><strong> 
                                        Order Now</strong></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-none d-md-block">
                                <img class="img-fluid" src='{{url("/images/product1.png")}}'/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="code-home-slider  code-mobile-site-slider-1" style='background: url("../storage/layout_images/bg_banner_2.png");'>
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="carousel-caption">
                                    <h1 class="display-1">
                                        BOLD BLACK 
                                    </h1>
                                    
                                    <img class="img-fluid" src="{{asset('./storage/layout_images/mobile-spec.png')}}" src="images/mobile-spec.png"/>
                                    <div class="mt-5 pt-md-3"></div>
                                     
                                    <a class="btn btn-square btn-orange btn-lg border-0 ml-md-4"><strong> 
                                        Order Now</strong></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6  d-none d-md-block">
                                <img class="img-fluid" src='{{url("/images/product2.png")}}'  />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="code-home-slider  code-mobile-site-slider-1" style='background: url("../storage/layout_images/bg_banner_3.png");'>
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="carousel-caption" style="margin-bottom: 50px">
                                    <h1 class="display-1">
                                        X CHERRY RED 
                                    </h1>
                                    
                                    <img class="img-fluid" src="{{asset('./storage/layout_images/mobile-spec.png')}}" src="images/mobile-spec.png"/>
                                    <div class="mt-5 pt-md-3"></div>
                                    
                                    <a class="btn btn-square btn-orange btn-lg border-0 ml-md-4"><strong> 
                                        Order Now</strong></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6  d-none d-md-block">
                                <img class="img-fluid" src='{{url("/images/product3.png")}}'  />
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
           
        </div>
        <a class="carousel-control-prev" href="#home-slider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#home-slider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<section  class="pb-2 pt-3 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="heading-title-2 text-left"> {{$product->name}} </div>
            </div>
            <div class="col-12 col-md-8">
                <ul class="list-unstyled text-right font-weight-bold pt-3">
                    <li class="d-inline">Overview</li>
                    <li class="d-inline ml-3 ml-md-4">Specification</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="product-page-banner-2 py-md-2" style='background: url("../storage/layout_images/product-page-banner-2.png");'>
        <div class="container">
            <div class="row pt-3 pt-md-5">
                <div class="text-white col-12  text-center">
                    <h1 class="font-weight-bold heading-title-3">
                        OUTSTANDING ALL-ROUND CAMERA
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <h1 class="text-center heading-title-1">More Modes To Free Your Creativity</h1>
            </div>
        </div>
    </div>
</section>
 
<div class="gallery-wrap">
    @foreach($product_creativities as $product_creativitie)
    <div class="item item-1" style='background-image: url({{url("/images/$product_creativitie->creativity_img")}});'></div>
    @endforeach
 
</div>
<!-- 
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 mb-5">
                <h1 class="text-center heading-title-1">Colors Available</h1>
            </div>
            
        @foreach($color_images as $color_image)
            @if(count($color_images) == 2)
          <div class="col-sm-6">
            
            <img src='{{url("/images/$color_image->color_img")}}' class="card-img-top mx-auto" alt="{{ $color_image->color_img }}"/>
             
          </div>
          @endif
          @if(count($color_images) == 3)
          <div class="col-sm-4">
            
            <img src='{{url("/images/$color_image->color_img")}}' class="card-img-top mx-auto" alt="{{ $color_image->color_img }}"/>
                                
          </div>
          @endif
          @endforeach
         

          @foreach($colors as $color)
          @if(count($colors) == 2 && $color->color_name != "")
           
                    <p class="mobile-color-option text-md-right"></p>
                    <h2 class=" ">{{$color->color_name}}</h2>
            
          @elseif(count($colors) == 3 && $color->color_name != "")
           
                    <p class="mobile-color-option text-md-right"></p>
                    <h2 class=" ">{{$color->color_name}}</h2>
             
          @elseif(count($colors) == 4 && $color->color_name != "")
           
                    <p class="mobile-color-option text-md-right"></p>
                    <h2 class=" ">{{$color->color_name}}</h2>
             
          @else
           
                    <p class="mobile-color-option text-md-right"></p><br>
                    <h2 class=" ">{{$color_image->color_name}}</h2>
             
          @endif

          @endforeach
        </div>
    </div>
</section>
 -->

<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 mb-5">
                <h1 class="text-center heading-title-1">Colors Available</h1>
            </div>
        </div>
    </div>
    <div class="code-carousel radio-button-slider">
        <div id="radio-button-slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" style="bottom: 0px;">
                <!-- <li data-target="#radio-button-slider" data-slide-to="0" class="active">1</li> -->
                <?php 
                    $counter=0;
                ?>
                @foreach($colors_info as $color)
                <li class="<?php if($counter == 0){ echo 'active';}?>" data-target="#radio-button-slider" data-slide-to="{{$counter++}}">{{$counter}}</li>
                @endforeach
            </ol>
            <ul class="text-under-indicators" style="list-style: none;">
                @foreach($colors_info as $color)
                 
                <li style="display:inline;margin-left:40px;font-size:14px;font-weight:600">{{$color->color_name}}</li>
                @endforeach
            </ul>
            <div class="carousel-inner">
                <?php 
                    $count= 0 ;
                ?>
                @foreach($colors_info as $color)
                <div class="carousel-item <?php if($count++ == 0){ echo 'active';}?>">
                    <div class="code-home-slider  code-mobile-site-radio-btn-slider-3" style="background: url('/images/{{$color->color_img}}');background-repeat:no-repeat; margin-left: 40%">
                        <div class="container position-relative">
                        </div>
                    </div>
                </div>
                @endforeach

               <!--  <div class="carousel-item">
                    <div class="code-home-slider code-mobile-site-radio-btn-slider-3">
                        <div class="container position-relative">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>


<section>
    <div class="product-page-banner-4 py-md-2" style='background: url("../storage/layout_images/product-page-banner-4.png");'>
        <div class="container">
            <div class="row pt-5">
                <div class="text-white col-12  text-center">
                    <h2 class="font-weight-bold  ">
                        Sleek Stylish Design
                    </h2>
                    <p class="banner-description py-4 mb-4  ">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <img src='{{url("/images/$product->sleek_img")}}'  class="img-fluid pb-3"/>

                </div>
            </div>
        </div>
    </div>
</section>
 
@include('include.footer') 


