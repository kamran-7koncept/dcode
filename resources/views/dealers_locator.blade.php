@include('include.header')
 

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="code-mobile-site-locator-block">
                    <h1 class="heading-title-4">Store locator</h1>
                    <h1 class="heading-title-4">Find a store near you</h1>
                </div>
                <hr class="heading-divider">
            </div>

           <!--  <div class="col-12 col-md-4">
                <div class="code-mobile-site-locator-sub-block">
                    <h1 class="heading-title-6">Karachi</h1>

                    <p class="heading-title-7"><span class="first-title">Raja Bazar</span> Singapore Plaza<br>
                        <span class="first-title">Defence Main Market</span> Dubia Plaza<br>
                        <span class="first-title">Raja Bazar</span> Singapore Plaza<br>
                        <span class="first-title">Defence Main Market</span> Dubia Plaza
                    </p>
                </div>
            </div> -->

            <div class="col-12 col-md-4">
                <div class="code-mobile-site-locator-sub-block">

                    <h1 class="heading-title-6">Rawalpindi</h1>
                    @if(count($dealers) > 0 )
                        @foreach($dealers as $dealer)
                            @if($dealer->city == "Rawalpindi")
                                <p class="heading-title-7"><span class="first-title">{{$dealer->address}}</span>   
                                <br>{{$dealer->contact}}
                                </p>
                            @endif   
                        @endforeach
                    @else
                                <p class="heading-title-7">No Deals Available</p>
                    @endif

                </div>
            </div>


            <div class="col-12 col-md-4">
                <div class="code-mobile-site-locator-sub-block">
                     <h1 class="heading-title-6">Lahore</h1> 
                    @if(count($dealers) > 0 )
                        @foreach($dealers as $dealer)
                            @if($dealer->city == "Lahore")
                                <p class="heading-title-7"><span class="first-title">{{$dealer->address}}</span>  
                                 <br>{{$dealer->contact}} 
                                </p>
                            @endif   
                        @endforeach
                    @else
                                <p class="heading-title-7">No Deals Available</p>
                    @endif
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="code-mobile-site-locator-sub-block">
                     <h1 class="heading-title-6">Karachi</h1> 
                    @if(count($dealers) > 0 )
                        @foreach($dealers as $dealer)
                            @if($dealer->city == "Karachi")
                                <p class="heading-title-7"><span class="first-title">{{$dealer->address}}</span>  
                                 <br>{{$dealer->contact}} 
                                </p>
                            @endif   
                        @endforeach
                    @else
                                <p class="heading-title-7">No Deals Available</p>
                    @endif
                </div>
            </div>
             
            <div class="col-12 col-md-4">
                <div class="code-mobile-site-locator-sub-block">
                     <h1 class="heading-title-6">Peshawar</h1> 
                    @if(count($dealers) > 0 )
                        @foreach($dealers as $dealer)
                            @if($dealer->city == "Peshawar")
                                <p class="heading-title-7"><span class="first-title">{{$dealer->address}}</span> 
                                 <br>{{$dealer->contact}}  
                                </p>
                            @endif   
                        @endforeach
                    @else
                                <p class="heading-title-7">No Deals Available</p>
                    @endif
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="code-mobile-site-locator-sub-block">
                     <h1 class="heading-title-6">Quetta</h1> 
                    @if(count($dealers) > 0 )
                        @foreach($dealers as $dealer)
                            @if($dealer->city == "Quetta")
                                <p class="heading-title-7"><span class="first-title">{{$dealer->address}}</span> 
                                 <br>{{$dealer->contact}}  
                                </p>
                            @endif   
                        @endforeach
                    @else
                                <p class="heading-title-7">No Deals Available</p>
                    @endif
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="code-mobile-site-locator-sub-block">
                     <h1 class="heading-title-6">Faisalabad</h1> 
                    @if(count($dealers) > 0 )
                        @foreach($dealers as $dealer)
                            @if($dealer->city == "Faisalabad")
                                <p class="heading-title-7"><span class="first-title">{{$dealer->address}}</span>   
                                     <br>{{$dealer->contact}}
                                </p>
                            @endif   
                        @endforeach
                    @else
                                <p class="heading-title-7">No Deals Available</p>
                    @endif
                </div>
            </div>
             
        </div>
    </div>
    </div>
</section>
 
@include('include.footer')
 

