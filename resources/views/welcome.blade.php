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
            <div class="carousel-item">
                <div class="code-home-slider  code-mobile-site-slider-1">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="carousel-caption">
                                    <h1 class="display-1">
                                        X Cherry Red
                                    </h1>
                                    <p class="desc">Lorem lpsum is simple dummy text of the printing and typesetting
                                        industry.</p>
                                    <img class="img-fluid" src="{{asset('./storage/layout_images/mobile-spec.png')}}" src="images/mobile-spec.png"/>
                                    <div class="mt-5 pt-md-3"></div>
                                    <span class="price">
                                        Rs. 40,987
                                    </span>
                                    <a class="btn btn-square btn-orange btn-lg border-0 ml-md-4"><strong>Learn
                                        More</strong></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6  d-none d-md-block">
                                <img class="img-fluid" src="{{asset('./storage/layout_images/mobile-slider-large.png')}}"  />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="code-home-slider  code-mobile-site-slider-1">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="carousel-caption">
                                    <h1 class="display-1">
                                        X Cherry Red
                                    </h1>
                                    <p class="desc">Lorem lpsum is simple dummy text of the printing and typesetting
                                        industry.</p>
                                    <img class="img-fluid" src="{{asset('./storage/layout_images/mobile-spec.png')}}" />
                                    <div class="mt-5 pt-md-3"></div>
                                    <span class="price">
                                        Rs. 40,987
                                    </span>
                                    <a class="btn btn-square btn-orange btn-lg border-0 ml-md-4"><strong>Learn
                                        More</strong></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6  d-none d-md-block">
                                <img class="img-fluid"  src="{{asset('./storage/layout_images/mobile-slider-large.png')}}"/>
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
                                @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>
                                    @endif
                                    @if(session()->has('error'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ session()->get('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                     @endif
<section class="py-5 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <h1 class="text-center heading-title-1">Dcode Smartphones with Android</h1>
            </div>
        </div>
        <div class="row pt-5 code-mobile-products">
             @if(count($products) > 0)
                @foreach($products as $pro)
                    @if($pro->status == 1)
            <div class="col-12 col-md-4">
                <a  href='{{url("/product/$pro->id")}}'>
                    <img class="img-fluid"  src="{{asset('./storage/layout_images/mobile-picture-1.png')}}"/>
                </a>
                    
                    <h3 class="mt-2"><strong>{{ $pro->name }}</strong></h3>
                    <h4 class="text-orange"><strong>${{ $pro->price }}</strong></h4>
            </div>
             
                    @endif
                @endforeach
                <div class="col-12 col-md-12">
                <div class="text-center">
                    <button class="btn btn-outline-secondary btn-lg btn-padding-sm btn-square-outline"> All product
                    </button>
                </div>
            </div>
            @else
            <div class="col-12  ">
                   
                    
                    <h4 class="text-orange text-center"><strong>No Product Found Yet</strong></h4>
            </div>
             @endif
            
        </div>
    </div>
</section>
<section>
    <div class="home-page-banner-1">
        <div class="container">
            <div class="row pt-5">
                <div class="text-white col-12 col-md-7 pt-md-5">
                    <h1 class="font-weight-bold">
                        <span class="text-orange">X</span> Piano Black
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
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 m-auto text-center">
                <h1 class="heading-title-1"><strong><span class="text-orange">X</span> Cherry Red</strong></h1>
                <br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s</p>
                <img class="img-fluid" src="{{asset('./storage/layout_images/mobile-banner-picture-1.png')}}" />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-10 m-auto text-center">
                <h1 class="heading-title-1 text-purple">2021 New <span class="text-dark">Product</span> Launch
                </h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="">
        <div class="row">
            <div class="col-12 col-md-6 pl-0">
                <div class="home-page-banner-2 text-white">
                    <div class="py-5 px-5 home-page-banner-block-1">
                        <h1 class="font-weight-bold">
                            <span class="text-orange">X</span> Piano Black
                        </h1>
                        <p class="banner-description pt-2">Lorem Ipsum is simply dummy text of the printing.</p>
                        <button class="float-right mr-5 text-white btn btn-sm btn-outline-white btn-padding-lg btn-square-outline">
                            <strong>Buy Now</strong></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 pl-0">
                <div class="home-page-banner-3 text-dark">
                    <div class="py-5 px-5 float-right  home-page-banner-block-2">
                        <h1 class="font-weight-bold">
                            Bold <span class="text-voilet">Teal</span> v.2
                        </h1>
                        <button class="float-right  mt-2 mr-1 text-voilet btn btn-sm btn-outline-voilet btn-padding-lg btn-square-outline">
                            <strong>Buy Now</strong></button>
                    </div>
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
                        src="{{asset('./storage/layout_images/video-thumnail-1.png')}}"  alt="Video 1" width="100%"
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
