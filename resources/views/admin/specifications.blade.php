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
                        <form id="product_info" method="POST" action='{{url("admin/specifications/")}}' > 
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