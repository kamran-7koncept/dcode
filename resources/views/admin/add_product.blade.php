 @include('admin.layout.sidebar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.layout.navbar')
            
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container" style="width: 70%">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="text-center">Add new Product</h1>
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
                        <form id="product_info_first" method="POST" enctype="multipart/form-data" style="display: block" >
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <label for="Mobile Name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="mobile name here" required="">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Price">Price</label>
                                    <input type="number" min="0" class="form-control" name="price" placeholder="mobile Price here" required="">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Price">Shipping Price</label>
                                    <input type="number" min="0" class="form-control" name="shipping" placeholder="mobile Shipping Price here" required="">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Details">Details </label>
                                    <textarea class="form-control" name="details" required="" rows="5" placeholder="Mobile Description Here"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Description">Description </label>
                                    <textarea class="form-control" name="description" required="" rows="5" placeholder="Mobile Description Here"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Image">Mobile Image </label><br>
                                    <input type="file" min="0"  name="image" placeholder="mobile Description here" required="">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Overview">Overview Image </label><br>
                                    <input type="file" min="0"  name="overview_img" placeholder="mobile Description here" required="">
                                </div>
                                <div class="form-group">
                                    <label for="Mobile Sleek">Sleek Image </label><br>
                                    <input type="file" min="0"  name="sleek_img" placeholder="mobile Description here" required="">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info w-25" type="submit" >Next</button>
                                </div>
                            </form>

                           <form id="product_info_second" style="display: none" method="POST" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" class="product_id_sec" name="product_id" id="product_id_sec" value="" />
                                <div class="form-group">
                                    <label for="Mobile Sleek">Cretivity Image </label><br>
                                    <input type="file"  name="creativity_imgs[]" placeholder="mobile Creativity images here" required="" multiple>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info w-25" type="submit">Next</button>
                                </div>
                            </form>

                           <form id="product_info_third" style="display: none" method="POST" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" class="product_id_thrd" name="product_id" id="product_id_thrd" value="" />
                                 <label for="Mobile Sleek">Colors </label><br>
                                
                                    <div class="form-group" >
                                   
                                    <input type="text" class="form-control"  name="color_name[]" placeholder="Mobile Color" required="" multiple>
                                    </div>
                                <div class="form-group" id="new_fields">

                                </div>
                                 
                                <div class="form-group">
                                    <label for="Mobile Sleek">Colors </label><br>
                                    <input type="file"  name="color_imgs[]" placeholder="mobile Creativity images here" required="" multiple>
                                </div>

                                <div class="col-md-4 mt-5">
                                
                                </div>
                           <!--  <div class="form-group" id="dropdown_option">
                                
                              </div> -->
                            <div class="form-group">
                                    <button class="btn btn-info w-25" type="submit">Next</button>
                                    <button type="button" onclick="add_field()" class="btn btn-info w-25 float-right"> Add Color</button>
                            </div>
                            </form>


                        </div>
                    
                            <div style="display: none;" id="loadimg">
                            <center><br><br><br><img src="{{asset('./storage/images/loading.gif') }}" style="position: unset;" ><br>
                            <strong>Loading data please wait ...</strong></center>
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