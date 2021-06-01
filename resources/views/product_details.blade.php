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
                <div class="code-home-slider  code-mobile-site-slider-3" style='background: url("../storage/layout_images/banner3.png");'>
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6 order-0">
                                <div class="carousel-caption text-center">
                                    <h1 class="display-1">
                                        X Cherry Red
                                    </h1>
                                    <p class="desc">Lorem lpsum is simple dummy text of the printing and typesetting
                                        industry.</p>
                                    <div class="mt-3 pt-md-1"></div>
                                    <p class="price">
                                        Rs. 40,987
                                    </p>
                                    <a class="btn btn-square btn-orange btn-lg border-0"><strong>Learn
                                        More</strong></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-none d-md-block mt-5">
                                <img class="img-fluid"   src='{{url("/images/$product->image_path")}}'/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="code-home-slider code-mobile-site-slider-3" style='background: url("../storage/layout_images/banner3.png");'>
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="carousel-caption  text-center">
                                    <h1 class="display-1">
                                        X Cherry Red
                                    </h1>
                                    <p class="desc">Lorem lpsum is simple dummy text of the printing and typesetting
                                        industry.</p>
                                    <div class="mt-3 pt-md-1"></div>
                                    <p class="price">
                                        Rs. 40,987
                                    </p>
                                    <a class="btn btn-square btn-orange btn-lg border-0"><strong>Learn
                                        More</strong></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6  d-none d-md-block mt-5">
                               <img class="img-fluid "   src='{{url("/images/$product->image_path")}}'/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="code-home-slider  code-mobile-site-slider-3" style='background: url("../storage/layout_images/banner3.png");'>
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="carousel-caption  text-center">
                                    <h1 class="display-1">
                                        X Cherry Red
                                    </h1>
                                    <p class="desc">Lorem lpsum is simple dummy text of the printing and typesetting
                                        industry.</p>
                                    <div class="mt-3 pt-md-1"></div>
                                    <p class="price">
                                        Rs. 40,987
                                    </p>
                                    <a class="btn btn-square btn-orange btn-lg border-0"><strong>Learn
                                        More</strong></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6  d-none d-md-block mt-5">
                               <img class="img-fluid"   src='{{url("/images/$product->image_path")}}'/>
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
<div class="product-page-banner-3" style='background: url("../storage/layout_images/product-page-banner-3.png");'>
</div>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 mb-5">
                <h1 class="text-center heading-title-1">Colors Available</h1>
            </div>
           <!--  <div class="col-12 col-md-7 text-md-right">
                <img src="images/mobile-image-1.png" class="img-fluid mt-md-4"/>
                <div class="pl-md-5 ml-md-5">
                    <p class="mobile-color-option text-md-right"></p><br>
                    <h2 class="text-center">X Piano Black</h2>
                </div>
            </div> -->

            <!-- <div class="col-12 col-md-3 ml-md-3 mt-4 mt-md-0 text-center text-md-left">
                <img src="images/mobile-image-2.png" class="img-fluid mt-md-2"/>
                <div>
                    <p class="mobile-color-option mobile-color-option-1"></p><br>
                    <h2 class="mr-md-5 mobile-color-option-title-2">X Piano Black</h2>
                </div>
            </div> -->
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
<section class="my-5">
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-10 m-auto text-center">
                <h1 class="heading-title-1"><strong>Videos</strong></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <a href="#" data-toggle="modal" data-target="#showVideoModal"
                   data-video="NLUtcA2bCJo" data-title="Mobile Video" data-description=""
                   class="video-aside-buttons"><img
                        src="{{asset('./storage/layout_images/video-thumnail-1.png')}}" alt="Video 1" width="100%"
                        class="img-fluid"></a>
            </div>
            <div class="col-12 col-md-4 mt-5 mt-md-0">
                <a href="#" data-toggle="modal" data-target="#showVideoModal"
                   data-video="NLUtcA2bCJo" data-title="Mobile Video" data-description=""
                   class="video-aside-buttons"><img
                         src="{{asset('./storage/layout_images/video-thumnail-2.png')}}" alt="Video 2" width="100%"
                        class="img-fluid"></a>
            </div>
            <div class="col-12 col-md-4  mt-5 mt-md-0">
                <a href="#" data-toggle="modal" data-target="#showVideoModal"
                   data-video="NLUtcA2bCJo" data-title="Mobile Video" data-description=""
                   class="video-aside-buttons"><img
                         src="{{asset('./storage/layout_images/video-thumnail-3.png')}}" alt="Video 3" width="100%"
                        class="img-fluid"></a>
            </div>

        </div>
    </div>
</section>
@include('include.footer') 


