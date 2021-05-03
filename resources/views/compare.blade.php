@extends('layouts.app')

@section('content')
 
    <div class="container-fluid">
      
        <div class="row">
             <div class="col-sm-3 bg-dark scrollable " >
                     @foreach($products as $product)
                      <a class="btn btn-info mt-1 ml-5 mobiles-list" onclick="mobile({{$product->id}})">{{$product->name}}</a><br> 
                     @endforeach
              </div>
              <div class="col-sm-9">
                <img src="{{asset('./storage/images/sliders/slider-1.jpg')}}" class="img img-responsive" style="width: 100%">
              </div>
                  
        </div>
    </div>
    <div class="container mt-5">
      <div class="row">
          <div class="col-sm-6" >
            <p>Please Enter Model name</p>
            <input type="text" name="mobile_name" class=" ">
             <button type="button" class="btn btn-sm btn-success">Search</button>
             
             <div id="mobile_left_detail">
            
      
          </div>
          </div>
          <div class="col-sm-6">
            <p>Please Enter Model name</p>
             <input type="text" name="mobile_name"id="right_search"  class=" ">
             <button type="button" onclick="compare_mobile()"  class="btn btn-sm btn-success">Search</button>
             <div id="mobile_right_detail">
            
          </div>
          </div>
      </div>
      
    </div>
    
@endsection