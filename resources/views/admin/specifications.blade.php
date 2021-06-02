@include('admin.layout.header')

 <!-- header ends -->
  <main class="main-content mt-1 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Add Product</li>
          </ol>
         
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> -->
          </div>
          <ul class="navbar-nav  justify-content-end">
            <!-- <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li> -->
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <!-- <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li> -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
          <!--    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                 
                 
                 <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    logout
                  </a>
                </li> 
              </ul>-->
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
       
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <strong style="margin-left: 35%;">New Specifications</strong>
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
            <div class="card-body px-0 pt-0 pb-2" style="width: 70%;margin-left: 14%;">
               <div class="col-sm-12 mt-4">
                   
                     
<form id="regForm" method="post" action='{{url("admin/specifications/")}}'>
 
  <!-- One "tab" for each step in the form: -->
  <input type="hidden" name="product_id" value="{{$product->id}}">
  @csrf
  <div class="tab">
  <div class="sidebar-heading">
    <strong style="color: #4e73df">Display</strong>
  </div> 
  <label for="Mobile Display Type">Display Type</label>
    <input type="text" class="form-control" name="display_type" placeholder="AMOLED, 1B colors, 120Hz" required="" title="AMOLED, 1B colors, 120Hz">

    <label for="Mobile Dimentions">Dimentions</label>
        <input type="text" class="form-control" name="dimentions" placeholder="164.3 x 74.6 x 8.4 mm" required="" title="164.3 x 74.6 x 8.4 mm">
    <label for="Mobile Display Type">Size</label>
    <input type="text" class="form-control" name="phone_size" placeholder="Mobile Size like 400grams" required="" title="Mobile Size like 400grams!">
    
    <label for="Mobile Weight">Phone Weight</label>
        <input type="text" class="form-control" name="weight" placeholder="Mobile Weight with Units" required="" title="Mobile Weight with Units">
    <label for="Mobile Display Type">Screen Resolution</label>
    <input type="text" class="form-control" name="resolution" placeholder="Mobile Screen Resolution like 720 x 1640 pixels" required="" title="like 720 x 1640 pixels!">

      <!-- new fields -->
     <label for="Mobile Display Type">TP Technology</label>
    <input type="text" class="form-control" name="tp_technology" placeholder="Mobile Screen Resolution like 720 x 1640 pixels" required="" title="like 720 x 1640 pixels!">
    <label for="Mobile Display Type">Display Ratio</label>
    <input type="text" class="form-control" name="display_ratio" placeholder="Mobile Screen Resolution like 720 x 1640 pixels" required="" title="like 720 x 1640 pixels!">
    <label for="Mobile Display Type">PPI</label>
    <input type="text" class="form-control" name="ppi" placeholder="Mobile Screen Resolution like 720 x 1640 pixels" required="" title="like 720 x 1640 pixels!">
    <label for="Mobile Display Type">TP Multitouch</label>
    <input type="text" class="form-control" name="tp_multitouch" placeholder="Mobile Screen Resolution like 720 x 1640 pixels" required="" title="like 720 x 1640 pixels!">
      <!-- new fields -->

      <div class="sidebar-heading">
          <strong style="color: #4e73df">Memory</strong>
      </div> 
      <label for="Mobile Display Type">RAM</label>
      <input type="text" class="form-control" name="ram" placeholder="Mobile RAM like 2GB/4GB" required="" title="like 2GB/4GB!">
      <label for="Mobile Display Type">Internal Memory</label>
    <input type="text" class="form-control" name="internal_memory" placeholder="Mobile Internal Storage like 8GB/16GB/64GB" required="" title="like 8GB/16GB/64GB!">
    <label for="Mobile Display Type">External Memory</label>
    <input type="text" class="form-control" name="external_memory" placeholder="Mobile Internal Storage like 8GB/16GB/64GB" required="" title="like 8GB/16GB/64GB!">
  <!-- new fields -->

    <label for="Mobile Display Type">ROM</label>
    <input type="text" class="form-control" name="rom" placeholder="Mobile Internal Storage like 8GB/16GB/64GB" required="" title="like 8GB/16GB/64GB!">

  <!-- new fields -->

 <label for="Mobile Weight">Network</label>
        <input type="text" class="form-control" name="network" placeholder="GSM / CDMA / HSPA / EVDO" required="" title="GSM / CDMA / HSPA / EVDO">

  </div>

  <div class="tab">
    <div class="sidebar-heading">
      <strong style="color: #4e73df">Build Material</strong>
    </div>


  <!-- new fields -->

    <label for="Mobile Display Type">Frame</label>
    <input type="text" class="form-control" name="frame" placeholder="Mobile Technology" required="" title="GSM / CDMA / HSPA / EVDO">
    <label for="Mobile Display Type">Back Cover</label>
    <input type="text" class="form-control" name="back_cover" placeholder="Mobile Technology" required="" title="GSM / CDMA / HSPA / EVDO">
    <label for="Mobile Display Type">Sensors</label>
    <input type="text" class="form-control" name="sensors" placeholder="Mobile Technology" required="" title="GSM / CDMA / HSPA / EVDO">
    <div class="sidebar-heading">
      <strong style="color: #4e73df">Security</strong>
    </div>
    <label for="Mobile Display Type">Finger Print</label>
    <input type="text" class="form-control" name="finger_print" placeholder="Mobile Technology" required="" title="GSM / CDMA / HSPA / EVDO">
    <label for="Mobile Display Type">Face Unlock</label>
    <input type="text" class="form-control" name="face_unlock" placeholder="Mobile Technology" required="" title="GSM / CDMA / HSPA / EVDO">
  <!-- new fields -->


  <div class="sidebar-heading">
      <strong style="color: #4e73df">Battery</strong>
    </div>
  <label for="Mobile Display Type">Battery Capacity (mAh)</label>
    <input type="text" class="form-control" name="battery_type" placeholder="Processor/CPU" required="" title="like Processor/CPU!">

    <label for="Mobile Display Type">Stand By</label>
    <input type="text" class="form-control" name="standby_time" placeholder="Processor/GPU" required="" title="like Processor/GPU!">

    <label for="Mobile Display Type">Talk time</label>
    <input type="text" class="form-control" name="talk_time" placeholder="Processor/GPU" required="" title="like Processor/GPU!">
    <!-- new fields -->

    <label for="Mobile Display Type">Battery Charging Rated Voltage</label>
    <input type="text" class="form-control" name="charging_voltage" placeholder="Processor/GPU" required="" title="like Processor/GPU!">
    <label for="Mobile Display Type">Video Streaming/Music</label>
    <input type="text" class="form-control" name="video_streaming" placeholder="Processor/GPU" required="" title="like Processor/GPU!">

<!-- new fields -->
    <div class="sidebar-heading">
      <strong style="color: #4e73df">Charger</strong>
    </div>
    <!-- new fields -->
    <label for="Mobile Display Type">fast charge</label>
    <input type="text" class="form-control" name="fast_charge" placeholder="Processor/GPU" required="" title="like Processor/GPU!">
    <label for="Mobile Display Type">AC Input (V)</label>
    <input type="text" class="form-control" name="ac_input" placeholder="Processor/GPU" required="" title="like Processor/GPU!">
    <label for="Mobile Display Type">Output Voltage (V)</label>
    <input type="text" class="form-control" name="output_voltage" placeholder="Processor/GPU" required="" title="like Processor/GPU!">
    <label for="Mobile Display Type">Output Current (A)</label>
    <input type="text" class="form-control" name="output_current" placeholder="Processor/GPU" required="" title="like Processor/GPU!">
    <label for="Mobile Display Type">Charging time</label>
    <input type="text" class="form-control" name="charging_time" placeholder="Processor/GPU" required="" title="like Processor/GPU!">
     

    <!-- new fields -->
  
    <label for="Mobile Display Type">Technology</label>
    <input type="text" class="form-control" name="technology" placeholder="Mobile Technology" required="" title="GSM / CDMA / HSPA / EVDO">

   <!--  <label for="Mobile Display Type">Sim Support</label>
    <input type="text" class="form-control" name="sim1_support" placeholder="Mobile Sim Support like 1B Color, 120HZ" required="" title="like 1B Color, 120HZ!">

     -->

    <label for="Mobile Display Type">Protection</label>
    <input type="text" class="form-control" name="protection" placeholder="Mobile Protection" required=""  >

  </div>

  <div class="tab">
    <div class="sidebar-heading">
      <strong style="color: #4e73df">Processor</strong>
    </div>
  <label for="Mobile Display Type">CPU</label>
    <input type="text" class="form-control" name="cpu" placeholder="Processor/CPU" required="" title="like Processor/CPU!">
     <label for="Mobile Display Type">Operating System(OS)</label>
    <input type="text" class="form-control" name="os" placeholder="Processor/OS" required="" title="like Processor/CPU!">
    <label for="Mobile Display Type">GPU</label>
    <input type="text" class="form-control" name="gpu" placeholder="Processor/GPU" required="" title="like Processor/GPU!">

    <label for="Mobile Display Type">Chipset</label>
    <input type="text" class="form-control" name="chipset" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
   
    <div class="sidebar-heading">
      <strong style="color: #4e73df">SIM</strong>
    </div>
      <label for="Mobile Display Type">SIM 1 Support</label>
    <input type="text" class="form-control" name="sim1_support" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">SIM 2 Support</label>
    <input type="text" class="form-control" name="sim2_support" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
     
     
    <div class="sidebar-heading">
      <strong style="color: #4e73df">Wireless</strong>
    </div>
    <label for="Mobile Display Type">Bluetooth</label>
    <input type="text" class="form-control" name="bluetooth" placeholder="Processor/GPU" required="" title="like Processor/GPU!">

     <!-- new fields -->
    
     
    <label for="Mobile Display Type">WiFi (2.4 GHz)</label>
    <input type="text" class="form-control" name="wifi_2-4" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">WiFi (5 GHz)</label>
    <input type="text" class="form-control" name="wifi_5" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">WiFi Security</label>
    <input type="text" class="form-control" name="wifi_security" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">WiFi Hotspot</label>
    <input type="text" class="form-control" name="wifi_hotspot" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">Screen Cast</label>
    <input type="text" class="form-control" name="screen_cast" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <!-- new fields -->
 
  </div>

  <div class="tab">
    <div class="sidebar-heading">
    <strong style="color: #4e73df">Connectivity</strong>
  </div>
  <!-- new fields -->
  <label for="Mobile Display Type">Feature</label>
    <input type="text" class="form-control" name="features" placeholder="Processor/CPU" required="" title="like Processor/CPU!">
    <!-- new fields -->
  <label for="Mobile Display Type">WLAN</label>
    <input type="text" class="form-control" name="wlan" placeholder="Processor/CPU" required="" title="like Processor/CPU!">

    

    <label for="Mobile Display Type">GPS</label>
    <input type="text" class="form-control" name="gps" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">Radio</label>
    <input type="text" class="form-control" name="radio" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">USB/HDMI/MHL</label>
    <input type="text" class="form-control" name="usb" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">Data</label>
    <input type="text" class="form-control" name="data" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">NFC</label>
    <input type="text" class="form-control" name="nfc" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">

  <!-- new fields -->

    <div class="sidebar-heading">
    <strong style="color: #4e73df">Audio</strong>
  </div>
    
  <label for="Mobile Display Type">Audio Jack</label>
    <input type="text" class="form-control" name="audio_jack" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">Mic qty</label>
    <input type="text" class="form-control" name="mic_qty" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">


  <!-- new fields -->

  </div>
  <div class="tab">
    <div class="sidebar-heading">
    <strong style="color: #4e73df">Camera</strong>
  </div>
  <label for="Mobile Display Type">Front Camera(pixels)</label>
    <input type="text" class="form-control" name="front_camera" placeholder="Processor/CPU" required="" title="like Processor/CPU!">
 <!-- new fields -->

<label for="Mobile Display Type">Auto Focus(PDAF)</label>
    <input type="text" class="form-control" name="front_autofocus" placeholder="Processor/CPU" required="" title="like Processor/CPU!">
    <label for="Mobile Display Type">Sensor Size(1/X inch)</label>
    <input type="text" class="form-control" name="sensor_size" placeholder="Processor/CPU" required="" title="like Processor/CPU!">
    <label for="Mobile Display Type">Aperture</label>
    <input type="text" class="form-control" name="aperture" placeholder="Processor/CPU" required="" title="like Processor/CPU!">
     <label for="Mobile Display Type">Video Recorder</label>
    <input type="text" class="form-control" name="front_record" placeholder="Processor/CPU" required="" title="like Processor/CPU!">



  <!-- new fields -->


    <label for="Mobile Display Type">Rear Camera(pixels)</label>
    <input type="text" class="form-control" name="back_camera" placeholder="Processor/GPU" required="" title="like Processor/GPU!">
 <!-- new fields -->
 <label for="Mobile Display Type">flashlight qty</label>
    <input type="text" class="form-control" name="rear_flash" placeholder="Processor/GPU" required="" title="like Processor/GPU!">
    <label for="Mobile Display Type">Video Recorder</label>
    <input type="text" class="form-control" name="rear_video" placeholder="Processor/GPU" required="" title="like Processor/GPU!">


  <!-- new fields -->
    
 
  <!--   <label for="Mobile Display Type">RAM</label>
    <input type="text" class="form-control" name="ram" placeholder="Mobile RAM like 2GB/4GB" required="" title="like 2GB/4GB!"> -->
    

  </div>
 
  <div style="overflow:auto;" class="mt-3">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->

  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

                        </div>
                    
                             
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-left">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="http://blog.creative-tim.com" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/soft-ui-dashboard.min.js?v=1.0.1')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
      <script src="{{asset('/js/functions.js')}}"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</body>

</html>