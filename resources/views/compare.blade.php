@include('include.header')
 
<section>
    <div class="compare-page-banner-4" style='background: url("../storage/layout_images/banner4.png");'>
      <div class="container-fluid">
          <div class="row">
              <div class="col-12 col-md-4 pl-md-0">
                  <div class="right-menu">
                      <div class="bg-orange right-menu-block" style="">
                          <span class="menu-top-title">Phone Find </span>
                          <img src="{{asset('./storage/layout_images/phone-icon.png')}}"   class="img-fluid"/>
                      </div>
                      <ul class="bg-black menu-list">
                        @foreach($products as $product)
                            @if($product->status == 1)

                            <li class="active">
                              <a href="#" class="mobiles-list" onclick="mobile({{$product->id}})">{{$product->name}}</a>
                          </li>
                       
                            @endif
                        @endforeach
                          
                      </ul>
                  </div>
              </div>
              <div class="col-12 col-md-8 text-center pt-5 mt-md-2">
                  <img src="{{asset('./storage/layout_images/mobile-slider-large-3.png')}}"  class="img-fluid"/>
                  <h1 class="text-orange pt-3 font-weight-bold">COMPARE SPEC</h1>
              </div>
          </div>
      </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-6 "  >
             
                <div id="mobile_left_detail" class="mt-5">
            
      
                </div>
          </div>
          <div class="col-sm-6">
            
                <div id="mobile_right_detail">
                     <h3 class="compare-main-title mt-5">Please enter model name or part of it</h3>
                    <div class="mt-4"><span class="compare-title">Compare with </span>
                        <input class="compare-search-field" type="text" name="mobile_name" id="right_search" />
                        <span><button class="compare-search-button" onclick="compare_mobile()">Search</button></span>
                    </div>
                    <p class="text-danger" id="right_compare"></p>
                    <div class="mt-5 pt-md-2 text-center" id="right_image">
                        <img src="{{asset('./storage/layout_images/compare-default-mobile.png')}}"    class="img-fluid"/><br>
                    </div>
                    
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
            @foreach($product_videos as $product_video)

            <div class="col-12 col-md-4">
                <a href="#" data-toggle="modal" data-target="#showVideoModal"
                   data-video="NLUtcA2bCJo" data-title="Mobile Video" data-description=""
                   class="video-aside-buttons"><!-- <img
                        src="{{asset('./storage/layout_images/video-thumnail-1.png')}}"  alt="Video 1" width="100%"
                        class="img-fluid"> -->
                            
                             
                        {!!$product_video->video_link!!}</iframe>
                
                        </a>
            </div>
            @endforeach
             

        </div>
    </div>
</section>
@include('include.footer')
