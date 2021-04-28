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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <strong class="h3 mb-2 text-gray-800">Mobiles</strong> 
                    <a  href="/mobile/create" class="btn btn-info float-right w-25" name="create" value="Create">Create</a>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 " style="margin-top: 20px"> 
                        <div class="card-body">
                            <div class="table-responsive">
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
                                <table class="table table-striped table-bordered dt-responsive nowrap" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Shipping Cost</th>
                                            <th>Description</th> 
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     
                                    <tbody>
                                        <?php $count =1;?>
                                        @foreach($products as $product)
                                        <tr>
                                            
                                            <td>{{$count++}}</td>
                                            <td><a href="#"><img src='{{url("/images/$product->image_path")}}' class="card-img-top mx-auto" height="100" width="100" alt="{{ $product->image_path }}"></a></td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->shipping_cost}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>
                                                <form method="POST" action='{{url("/admin/product/$product->id")}}'>
                                                    @method('PUT')
                                                    @csrf
                                                    <button class="btn btn-info">edit</button>

                                                <button type="submit" class="btn btn-info">Delete</button>
                                                </form>
                                                

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
 @include('admin.layout.footer')    