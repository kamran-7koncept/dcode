@include('include.header')

<div class="code-carousel">
    <div id="home-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home-slider" data-slide-to="0" class="active"></li>
            <li data-target="#home-slider" data-slide-to="1"></li>
            <li data-target="#home-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <!-- <div class="carousel-item active">
                <div class="code-home-slider  code-mobile-site-slider-1" >
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6 order-0">
                                <div class="carousel-caption">
                                    <h1 class="display-1">
                                        X Cherry Red
                                    </h1>
                                    <p class="desc">Lorem lpsum is simple dummy text of the printing and typesetting
                                        industry.</p>
                                    <img class="img-fluid" src="{{asset('./storage/layout_images/mobile-spec.png')}}"/>
                                    <div class="mt-5 pt-md-3"></div>
                                    <span class="price">
                                        Rs. 40,987
                                    </span>
                                    <a class="btn btn-square btn-orange btn-lg border-0 ml-md-4"><strong>Learn
                                        More</strong></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-none d-md-block">
                                <img class="img-fluid" src="{{asset('./storage/layout_images/mobile-slider-large.png')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             -->
              <?php 
                $count = 1;
                 
             
             foreach($products as $pro){  

               ?>      

            <div class="carousel-item <?php if($count == 1){ echo 'active';}else{ echo ''; } ?>">
                <div class="code-home-slider  code-mobile-site-slider-1" style='background: url("../storage/layout_images/banner1.png");'>
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="carousel-caption">
                                    <h1 class="display-1">
                                        {{$pro->name}}
                                    </h1>
                                    <p class="desc">{{$pro->description}}</p>
                                   
                                    <div class="mt-5 pt-md-3"></div>
                                    <span class="price">
                                        Rs. {{$pro->price}}
                                    </span>
                                    <a class="btn btn-square btn-orange btn-lg border-0 ml-md-4" href='{{url("/product/$pro->slug")}}' 
                                    ><strong>Learn
                                        More</strong></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6  d-none d-md-block">
                               <!--  <img class="img-fluid"  src="{{asset('./storage/layout_images/mobile-slider-large.png')}}"/> -->
                                <img class="img-fluid mt-5 ml-5" src='{{url("/images/$pro->image_path")}}' />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                $count++; 
            }
            ?>
            
        </div>
        <a class="carousel-control-prev" href="#home-slider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#home-slider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <p class="heading-title-2">Dcode Smartphones with Android
                    <span class="float-right"> <img src="{{asset('./storage/layout_images/filter.png')}}"   class="img-fluid filter-icon"/></span></p>
            <hr class="border-bottom">
            </div>
        </div>
        <div class="row pb-3 d-none filter-block">
            <div class="col-12 col-md-6  bg-grey px-4 py-4 m-md-auto">
                <form>
                    <div class="text-center">
                        <h3>Products</h3><hr>
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <input type="text" class="form-control" id="color" placeholder="Color">
                    </div>
                    <div class="form-group">
                        <label>Size</label>
                        <input type="text" class="form-control" id="size" placeholder="Size">
                    </div>
                    <div class="text-center">
                        <button type="submit" class=" btn btn-orange  btn-padding-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-5 code-mobile-products">
            @foreach($all_products as $pro)
                <div class="col-12 col-md-4">
                    <a  href='{{url("/product/$pro->slug")}}'>
                        <img class="img-fluid"src='{{url("/images/$pro->image_path")}}'/>
                    </a>
                    <h3 class="mt-2"><strong>{{ $pro->name }}</strong></h3>
                    <h4 class="text-orange"><strong>${{ $pro->price }}</strong></h4>
                </div>
            @endforeach
        </div>
         
    </div>
</section>
<section>

    <div class="product-page-banner-1 py-md-2" style='background: url("../storage/layout_images/product-page-banner-1.png");'>
        <div class="container">
            <div class="row pt-5">
                <div class="text-white col-12 col-md-8 text-center pt-md-5">
                    <h1 class="text-voilet font-weight-bold pt-md-4">
                        Yele Blue
                    </h1>
                    <p class="banner-description pt-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <button class="mt-4 text-white btn btn-lg btn-outline-white btn-padding-lg btn-square-outline">
                        <strong>Buy Now</strong></button>
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
