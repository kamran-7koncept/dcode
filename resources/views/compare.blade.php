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
          <div class="col-sm-6">
            <p>Please Enter Model name</p>
            <input type="text" name="mobile_name" class=" ">
             <button type="button" class="btn btn-sm btn-success">Search</button>
             <img src='{{url("/images/-1619438297.png")}}' class="card-img-top mx-auto mt-4">
              
            <table class="table table-bordered mt-5">
              <tbody>
                <tr>
                  <td>Connectivity</td>
                   <td>4G/LTE</td>
                </tr>
                <tr>
                  <td>Display</td>
                   <td>187*453 mn</td>
                </tr>
                <tr>
                  <td>Sensor</td>
                   <td>Accelerometer, proximity</td>
                </tr>
                <tr>
                  <td>COMMS</td>
                   <td>Wi-Fi 802.11 b/g/n, hotspot</td>
                </tr>
                <tr>
                  <td>Internal Storage</td>
                   <td>64GB</td>
                </tr>
                <tr>
                  <td>External Storage</td>
                   <td>64GB</td>
                </tr>
                <tr>
                  <td> RAM</td>
                   <td>6GB</td>
                </tr>
                <tr>
                  <td>Resolution</td>
                   <td>720 * 720 pixel</td>
                </tr>
              </tbody>
 
            </table>
          </div>
          <div class="col-sm-6">
            <p>Please Enter Model name</p>
             <input type="text" name="mobile_name" class=" ">
             <button type="button" class="btn btn-sm btn-success">Search</button>
             <img src='{{url("/images/-1619438297.png")}}' class="card-img-top mx-auto mt-4">

            <table class="table table-bordered mt-5">
              <tbody>
                <tr>
                  <td>Connectivity</td>
                   <td>4G/LTE</td>
                </tr>
                <tr>
                  <td>Display</td>
                   <td>187*453 mn</td>
                </tr>
                <tr>
                  <td>Internal Storage</td>
                   <td>64GB</td>
                </tr>
                <tr>
                  <td>External Storage</td>
                   <td>64GB</td>
                </tr>
                <tr>
                  <td> RAM</td>
                   <td>6GB</td>
                </tr>
                <tr>
                  <td>Resolution</td>
                   <td>720 * 720 pixel</td>
                </tr>
              </tbody>
 
            </table>
          </div>
      </div>
      
    </div>
    
@endsection