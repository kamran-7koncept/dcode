<?php
 
 $path= Request::path();
?>
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
                <li class="nav-item float-left ml-2">
                    <a class="nav-link font-10 text-dark" href="/compare-specifications">Compare</a>
                </li>
                <li class="nav-item float-left ml-2">
                    <a class="nav-link font-10 text-dark" href="/about-us">About</a>
                </li>
                <li class="nav-item float-left ml-2">
                    <a class="nav-link font-10 text-dark" href="/terms-conditions">Terms & Condidtions</a>
                </li>
                <li class="nav-item float-left ml-2">
                    <a class="nav-link font-10 text-dark" href="/policies">Policies</a>
                </li>
                @if($path == "compare-specifications" || $path == "/" || $path == "order" || $path == "about-us" || $path == "terms-conditions" || $path == "policies")

                @else

                  <li class="nav-item">
                  <form method="POST" action='{{url("/order/")}}'>
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button class="btn btn-success" href="#">Order Now</button>
                  </form>
                </li>
                @endif
                
             <!--   <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> -->
    </div>
</nav>