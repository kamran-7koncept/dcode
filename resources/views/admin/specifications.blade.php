 @include('admin.layout.sidebar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.layout.navbar')
            
                <!-- End of Topbar --><!-- 
https://www.telemart.pk/infinix-note-8-6gb-128gb-dual-sim-price-in-pakistan.html -->
                <!-- Begin Page Content -->
                <div class="container" style="width: 70%">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="text-center">Product Specifications</h2>
                        </div>
                        <div class="col-sm-12 mt-4">
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
                        <form id="product_info" method="POST" action='{{url("admin/specifications/")}}' style="display: none" > 
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                  <input type="hidden" name="product_id" value="{{$product->id}}">
                                  <div class="sidebar-heading">
                                    <strong style="color: #4e73df">General</strong>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Connectivity">Connectivity</label>
                                    <input type="text" class="form-control" name="connectivity" placeholder="Mobile Connectivity Like 4G/LTE/3G" required=""  title="like 4G/LTE/3G/WiFi!">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile OS">Operating System</label>
                                    <input type="text" class="form-control" name="os" placeholder="Mobile Operating System Like Android 10/9/8" required="">
                                </div>
                                 <div class="form-group">
                                    <label for="Mobile Dimentions">SIM Support</label>
                                    <input type="text" class="form-control" name="sim_support" placeholder="Mobile Sim Support Like Single/Dual(Mini,Nano,dual stand-by" required="" title="Single/Dual(Mini,Nano,dual stand-by)!">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Display Type">Performance</label>
                                    <input type="text" class="form-control" name="performance" placeholder="Processor/GPU" required="" title="like Processor/GPU!">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Display Type">Battery Type</label>
                                    <input type="text" class="form-control" name="battery" placeholder="like Li-Po 5200 mAh, non-removable" required="" title="like Li-Po 5200 mAh, non-removable!">
                                </div>
                                <div class="sidebar-heading">
                                    <strong style="color: #4e73df">Display</strong>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Display Type">Display</label>
                                    <input type="text" class="form-control" name="display_type" placeholder="Mobile Display like 1B Color, 120HZ" required="" title="like 1B Color, 120HZ!">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Display Type">Screen Resolution</label>
                                    <input type="text" class="form-control" name="resolution" placeholder="Mobile Screen Resolution like 720 x 1640 pixels" required="" title="like 720 x 1640 pixels!">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Weight">Phone Weight</label>
                                    <input type="text" class="form-control" name="weight" placeholder="Mobile Weight with Units" required="" title="Mobile Weight with Units">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Dimentions">Dimentions</label>
                                    <input type="text" class="form-control" name="dimentions" placeholder="Mobile Dimentions  like 162.5*72.2*8.3mn" required="" title="like 162.5*72.2*8.3mn!">
                                </div>
                                <div class="sidebar-heading">
                                    <strong style="color: #4e73df" >Storage</strong>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Display Type">Internal Memory</label>
                                    <input type="text" class="form-control" name="internal_storage" placeholder="Mobile Internal Storage like 8GB/16GB/64GB" required="" title="like 8GB/16GB/64GB!">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Display Type">RAM</label>
                                    <input type="text" class="form-control" name="ram" placeholder="Mobile RAM like 2GB/4GB" required="" title="like 2GB/4GB!">
                                </div>
                                
                                <div class="sidebar-heading">
                                    <strong style="color: #4e73df">Camera</strong>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Display Type">Front Camera</label>
                                    <input type="text" class="form-control" name="front_cam" placeholder="Front Camera like 16 MP + 2 MP" required="" title="like 16 MP + 2 MP!">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Display Type">Back Camera</label>
                                    <input type="text" class="form-control" name="back_cam" placeholder="Back Camera like 64 MP + 2 MP + 2 MP + 2 MP" required="" title="like 64 MP + 2 MP + 2 MP + 2 MP!">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Details">Details </label>
                                    <textarea class="form-control" name="details" required="" rows="5" placeholder="Mobile Description Here"></textarea>
                                </div> 
                                <div class="form-group">
                                    <button class="btn btn-info w-25" type="submit" >Save</button>
                                </div>
                            </form>

<form id="regForm" method="post" action='{{url("admin/specifications/")}}'>
  <h2>Product Specifications</h2>
  <!-- One "tab" for each step in the form: -->
  @csrf
  <div class="tab">
  <div class="sidebar-heading">
    <strong style="color: #4e73df">Body</strong>
  </div> 
    <label for="Mobile Dimentions">Dimentions</label>
        <input type="text" class="form-control" name="dimentions" placeholder="Mobile Dimentions  like 162.5*72.2*8.3mn" required="" title="like 162.5*72.2*8.3mn!">

    <label for="Mobile Weight">Phone Weight</label>
        <input type="text" class="form-control" name="weight" placeholder="Mobile Weight with Units" required="" title="Mobile Weight with Units">
    <label for="Mobile Weight">Phone Size</label>
        <input type="text" class="form-control" name="phone_size" placeholder="Mobile Size with Units" required="" title="Mobile Size with Units">
 <label for="Mobile Weight">Network</label>
        <input type="text" class="form-control" name="network" placeholder="Mobile Size with Units" required="" title="Mobile Size with Units">

  </div>

  <div class="tab">
    <div class="sidebar-heading">
    <strong style="color: #4e73df">Display</strong>
  </div>

   <label for="Mobile Display Type">Screen Resolution</label>
    <input type="text" class="form-control" name="resolution" placeholder="Mobile Screen Resolution like 720 x 1640 pixels" required="" title="like 720 x 1640 pixels!">

    <label for="Mobile Display Type">Size</label>
    <input type="text" class="form-control" name="mobile_size" placeholder="Mobile Size like 400grams" required="" title="Mobile Size like 400grams!">
    
    <label for="Mobile Display Type">Display Type</label>
    <input type="text" class="form-control" name="display_type" placeholder="Mobile Display like 1B Color, 120HZ" required="" title="like 1B Color, 120HZ!">

    <label for="Mobile Display Type">Protection</label>
    <input type="text" class="form-control" name="protection" placeholder="Mobile Protection" required=""  >

  </div>

  <div class="tab">
    <div class="sidebar-heading">
    <strong style="color: #4e73df">Processor</strong>
  </div>
  <label for="Mobile Display Type">CPU</label>
    <input type="text" class="form-control" name="cpu" placeholder="Processor/CPU" required="" title="like Processor/CPU!">

    <label for="Mobile Display Type">GPU</label>
    <input type="text" class="form-control" name="gpu" placeholder="Processor/GPU" required="" title="like Processor/GPU!">

    <label for="Mobile Display Type">Chipset</label>
    <input type="text" class="form-control" name="chipset" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <!--  -->
  </div>

  <div class="tab">
    <div class="sidebar-heading">
    <strong style="color: #4e73df">Connectivity</strong>
  </div>
  <label for="Mobile Display Type">WLAN</label>
    <input type="text" class="form-control" name="wlan" placeholder="Processor/CPU" required="" title="like Processor/CPU!">

    <label for="Mobile Display Type">Blutooth</label>
    <input type="text" class="form-control" name="blutooth" placeholder="Processor/GPU" required="" title="like Processor/GPU!">

    <label for="Mobile Display Type">GPS</label>
    <input type="text" class="form-control" name="gps" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">Radio</label>
    <input type="text" class="form-control" name="radio" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">USB</label>
    <input type="text" class="form-control" name="usb" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">Data</label>
    <input type="text" class="form-control" name="data" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    <label for="Mobile Display Type">NFC</label>
    <input type="text" class="form-control" name="nfc" placeholder="Processor/Chipset" required="" title="like Processor/Chipset!">
    
  </div>
  <div class="tab">
    <div class="sidebar-heading">
    <strong style="color: #4e73df">Camera</strong>
  </div>
  <label for="Mobile Display Type">Front</label>
    <input type="text" class="form-control" name="front_camera" placeholder="Processor/CPU" required="" title="like Processor/CPU!">

    <label for="Mobile Display Type">Back</label>
    <input type="text" class="form-control" name="back_camera" placeholder="Processor/GPU" required="" title="like Processor/GPU!">

    <label for="Mobile Display Type">Internal Memory</label>
    <input type="text" class="form-control" name="internal_storage" placeholder="Mobile Internal Storage like 8GB/16GB/64GB" required="" title="like 8GB/16GB/64GB!">
    <label for="Mobile Display Type">External Memory</label>
    <input type="text" class="form-control" name="external_storage" placeholder="Mobile Internal Storage like 8GB/16GB/64GB" required="" title="like 8GB/16GB/64GB!">
 
    <label for="Mobile Display Type">RAM</label>
    <input type="text" class="form-control" name="ram" placeholder="Mobile RAM like 2GB/4GB" required="" title="like 2GB/4GB!">
    <div class="sidebar-heading">
    <strong style="color: #4e73df">Battery</strong>
  </div>
  <label for="Mobile Display Type">Type</label>
    <input type="text" class="form-control" name="battery_type" placeholder="Processor/CPU" required="" title="like Processor/CPU!">

    <label for="Mobile Display Type">Stand By</label>
    <input type="text" class="form-control" name="standby" placeholder="Processor/GPU" required="" title="like Processor/GPU!">

    <label for="Mobile Display Type">Talk time</label>
    <input type="text" class="form-control" name="talk_time" placeholder="Processor/GPU" required="" title="like Processor/GPU!">

  </div>
 
  <div style="overflow:auto;">
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
               
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
 @include('admin.layout.footer')    