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

    <div class="container-fluid" style="margin-top: 80px;">
       <!--  <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav> -->
                              @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">??</span>
                                </button>
                                </div>
                                    @endif
                                    @if(session()->has('error'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ session()->get('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">??</span>
                                        </button>
                                    </div>
                                     @endif
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">Dcode Smartphones with Android</h2>
                    </div>

                </div>
                 <br>
                <div class="row">
                  @if(count($products) > 0)
                    @foreach($products as $pro)
                    @if($pro->status == 1)
                        <div class="col-lg-4">
                            <div class="card" style="margin-bottom: 20px; height: auto;"> 
                               <a class="btn btn-secondary btn-sm"   title="Product Details"  href='{{url("/product/$pro->id")}}'> <img src='{{url("/images/$pro->image_path")}}' class="card-img-top mx-auto" alt="{{ $pro->image_path }}"
                                >
                              </a>
                                <div class="card-body">
                                    <h6 class="card-title">{{ $pro->name }}</h6>
                                    <p>${{ $pro->price }}</p>
                                    <?php 
                                      $id_enc=  \Crypt::encrypt($pro->id);
                                    ?>
                                        <!-- <input type="hidden" value="{{ $pro->id }}" id="id" name="id">

                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity"> -->
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">

                                                <a class="btn btn-secondary btn-sm"   title="Product Details"  href='{{url("/product/$pro->id")}}'>
                                                      View Details
                                                </a>
                                                
                                            </div>
                                        </div>
                                     
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    @else
                    <div class="col-lg-12">
                        <p class="text-center">No Product Found Yet</p>
                    </div>
                    @endif
                </div>

            </div> 
           <!--  <a href="/products" class="btn btn-info bg-dark align-center">Show All</a> -->
        </div>
    </div>
    
@endsection
