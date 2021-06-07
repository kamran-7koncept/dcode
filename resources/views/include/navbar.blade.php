<?php
 
 $path= Request::path();

?>
<!-- <nav class="navbar navbar-expand-md  bg-white navbar-light  fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img width="193" src="{{asset('./storage/layout_images/code_logo.png')}}"></a>
        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between ml-auto code-mobile-site-nav" id="nav">
            <ul class="navbar-nav  ml-auto font-17">
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">About Dcode</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link px-3" href="/compare-specifications">Compare</a>
                </li>
                 
                <li class="nav-item">
                    <a class="nav-link   px-3" href="/dealers">Store Locator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  px-3" href="/products">World of Dcode</a>
                </li>
            </ul>
            
            @if($path == "dealers" || $path == "compare-specifications" || $path == "/" || $path == "order" || $path == "about-us" || $path == "terms-conditions" || $path == "policies")

                @else
                <form method="POST" action='{{url("/order/")}}'>
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button class="btn btn-success order-button btn-yellow btn-padding-sm
             btn-square font-19 ml-3 mt-2 mt-md-0"
                    type="submit">Order
                Now
            </button>
            </form>
            @endif
        </div>
    </div>
</nav>
 -->

<!-- navbar -->
<nav class="navbar navbar-expand-md  bg-white navbar-light  fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img width="193" src="{{asset('./storage/layout_images/code_logo.png')}}"></a>
        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between ml-auto code-mobile-site-nav" id="nav">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">About Dcode</a>
                </li>
                <li class="nav-item dropdown  nav-submenu-dropdown" data-toggle="dropdown">
                    <a class="nav-link px-3 dropdown-toggle" href="#">Smartphones <i class="fa fa-angle-down"></i></a>
                    <div class="dropdown-menu">
                        <div class="container p-4  nav-submenu">
                            <div class="row bg-white">
                                <div class="col-md-3" id="wrap">
                                    <div class="submenu-tabs" id="main-menu">
                                        <?php $counter=0; ?>
                                        @foreach($allproducts as $allproduct)

                                        <div class="secondary-menu first-link parent" rel="first-widget" data-index="{{$counter++}}" onmouseover="colors({{$allproduct->id}}) ">
                                            <label>{{$allproduct->name}}</label> <i style="display:none" class="fa fa-angle-right"></i>
                                        </div>
                                        @endforeach
                                        

                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div id="first-widget" class="widget-container row ">
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img   src='{{url("/images/realme.png")}}' alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                         
                                        
                                         
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div id="second-widget" style="display:none" class="widget-container row">
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="third-widget" style="display:none" class="widget-container row">
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="fourth-widget" style="display:none" class="widget-container row">
                                        <div class="col-12 col-md-4">
                                            <a class="nav-submenu-link" href="#" target="_blank" title="realme C21">
                                                <div class="nav-submenu-img">
                                                    <label></label>
                                                    <img src="images/realme.png" alt="" class="">
                                                </div>
                                                <div class="nav-submenu-info">
                                                    <p class="nav-submenu-type"></p>
                                                    <p class="nav-submenu-title">realme C21</p>
                                                    <p class="nav-submenu-price">
                                                        Rs. 24,999
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link   px-3" href="/compare-specifications">Compare</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link   px-3" href="/dealers">Store Locator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  px-3" href="/products">World of Dcode</a>
                </li>
            </ul>
            <!-- Search bar -->
            
            <!-- <button class="btn btn-success order-button btn-yellow btn-padding-sm
             btn-square  ml-3 mt-2 mt-md-0"
                    type="button">Order
                Now
            </button> -->
            @if($path == "dealers" || $path == "compare-specifications" || $path == "/" || $path == "order" || $path == "about-us" || $path == "terms-conditions" || $path == "policies")

                @else
                <form method="POST" action='{{url("/order/")}}'>
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button class="btn btn-success order-button btn-yellow btn-padding-sm
             btn-square font-19 ml-3 mt-2 mt-md-0"
                    type="submit">Order
                Now
            </button>
            </form>
            @endif
        </div>
    </div>
</nav>