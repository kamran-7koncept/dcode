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

    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                 
                <div class="row">
                  <div class="col-sm-12">
                    <form method="POST" action='{{url("/order-now/")}}' style="margin-left:25%;width: 50%">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                     <div class="form-group">
                       <label>Customer Name</label>
                       <input type="text" name="customer_name" class="form-control">
                     </div>
                     <div class="form-group">
                       <label>Customer Email</label>
                       <input type="email" name="customer_email" class="form-control">
                     </div>
                     <div class="form-group">
                       <label>Customer Address</label>
                       <input type="text" name="customer_address" class="form-control">
                     </div>
                     <div class="form-group">
                       <label> Contact Number</label>
                       <input type="tel" name="customer_contact" class="form-control">
                     </div>
                     <div class="form-group">
                       <label> City</label>
                       <input type="text" name="customer_city" class="form-control">
                     </div>
                     <div class="form-group">
                       <button type="submit" class="btn btn-info">Order Now</button>
                     </div>
                   </form>
                  </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection