@include('admin.layout.header')

 <!-- header ends -->
  <main class="main-content mt-1 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Design slider</li>
          </ol>
         
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
             
          </div>
          <ul class="navbar-nav  justify-content-end">
             
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
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
              <strong  >Update Sliders</strong>
            </div>
             @if(session()->has('success'))
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                    
                 </div>
              @endif
                 @if(session()->has('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                     {{ session()->get('error') }}
                     
                  </div>
                @endif
                 <?php 
                $count = 1;
                 
             
             foreach($slider as $pro){  

               ?>      

            <div class="carousel-item <?php if($count == 1){ echo 'active';}else{ echo ''; } ?>">
                <div class="code-home-slider  code-mobile-site-slider-1" style='background (url(/images/{{$pro->product_img}}))'>

                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="carousel-caption">
                                    <h1 class="display-1">
                                        {{$pro->product_name}}
                                    </h1>
                                    
                                    
                                    <img class="img-fluid" src='{{"../storage/layout_images/mobile-spec.png"}}'/>

                                    <div class="mt-5 pt-md-3"></div>
                                     <!-- 
                                    <a class="btn btn-square btn-orange btn-lg border-0 ml-md-4" href='{{url("/product/$pro->product_slug")}}' 
                                    ><strong>Order Now</strong></a> -->
                                </div>
                            </div>
                            <div class="col-12 col-md-6  d-none d-md-block">
                               <!--  <img class="img-fluid"  src="{{asset('./storage/layout_images/mobile-slider-large.png')}}"/> -->
                                <img class="img-fluid ml-5" src='{{url("/images/$pro->product_img")}}' />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                $count++; 
            }
            ?>
                       
            <div class="card-body px-0 pt-0 pb-2" style="width: 70%;margin-left: 14%;">
              <div class="table-responsive p-0">

                <form id="product_dealer" action="{{url('/admin/sliders-update-info')}}"  method="POST" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                 
                                 <div class="form-group" >
                                   <label for="City">Name </label><br>
                                    <input type="text" class="form-control"  name="product_name" placeholder="Product Name" required="" >
                                  </div>
                                  <div class="form-group" >
                                   <label for="City">Description </label><br>
                                    <input type="text" class="form-control"  name="description" placeholder="Description *" required="" >
                                  </div>
                                  <div class="form-group" >
                                   <label for="Contact">Background </label><br>
                                    <input type="file" class="form-control"  name="background" placeholder="Background *" required="" >
                                  </div>
                                  <div class="form-group" >
                                   <label for="Contact">Product Image </label><br>
                                    <input type="file" class="form-control"  name="product_image" placeholder="Product Image *" required="" >
                                  </div>
                                  
                                <div class="col-md-4 mt-5">
                                
                                </div>
                            
                            <div class="form-group">
                                    <button class="btn btn-info w-25" type="submit">Update</button>
                                    
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
      </div>
      <!-- <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-left">
                ?? <script>
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
      </footer> -->
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
    
    <script type="text/javascript">

    $("#product_info_first").submit(function(e) {   
         
         document.getElementById("loadimg").style.display="block";

         document.getElementById("product_info_first").style.display="none";

        e.preventDefault();                                      
        $.ajax({
          url: "{{url('admin/product/create/')}}",
          type: "POST",
        data:new FormData(this), 
        contentType: false,
        cache: false,
        processData: false,
          success: function(strMessage,status) {
        /* console.log(typeof(strMessage));
         console.log(strMessage.product_id);
*/
          document.getElementById("product_id_sec").value = strMessage.product_id;
          swal("Upload!", "Product info uploaded Successfully!", "success");
         document.getElementById("loadimg").style.display="none"; 
         document.getElementById("product_info_second").style.display="block";
                                           
          },
            error: function (jqXHR, textStatus, errorThrown,strMessage) {
              swal("Upload Failed!", "Product info was not uploaded !", "failure");
         console.log(strMessage);

                     console.log(jqXHR);
                     console.log(textStatus);
                     console.log(errorThrown);    
                }
      });
    });

        $("#product_info_second").submit(function(e) {   
        let prd_id = document.getElementById("product_id_sec").value;
        document.getElementById("product_id_thrd").value= prd_id
         
         document.getElementById("loadimg").style.display="block";

         document.getElementById("product_info_second").style.display="none";

        e.preventDefault();                                      
        $.ajax({
          url: "{{url('admin/product/creativity/')}}",
          type: "POST",
        data:new FormData(this), 
        contentType: false,
        cache: false,
        processData: false,
          success: function(strMessage,status) {
          /*
         console.log(strMessage);
         console.log(status);
         */
         swal("Upload!", "Creativity Info uploaded Successfully!", "success");
         document.getElementById("loadimg").style.display="none";   
         document.getElementById("product_info_third").style.display="block";
                                             
          },
            error: function (jqXHR, textStatus, errorThrown,strMessage) {
              swal("Upload Failed!", "Creativity Images are not uploaded!", "failure");
         console.log(strMessage);

                     console.log(jqXHR);
                     console.log(textStatus);
                     console.log(errorThrown);    
                }
      });
    });

      $("#product_info_third").submit(function(e) {   
 
         document.getElementById("loadimg").style.display="block";

         document.getElementById("product_info_third").style.display="none";

        e.preventDefault();                                      
        $.ajax({
          url: "{{url('admin/product/colors/')}}",
          type: "POST",
        data:new FormData(this), 
        contentType: false,
        cache: false,
        processData: false,
          success: function(strMessage,status) {
          
         console.log(strMessage);
         console.log(status);
        swal("Upload!", "Product Added Successfully!", "success");
         
         document.getElementById("loadimg").style.display="none";   
           location.reload();                                 
          },
            error: function (jqXHR, textStatus, errorThrown,strMessage) {
        swal("Upload Failed!", "Colors are not uploaded Successfully!", "failure");
                 
         console.log(strMessage);

                     console.log(jqXHR);
                     console.log(textStatus);
                     console.log(errorThrown);    
                }
      });
    });

       function bind_options(){
           
             
              var _binddata = "<label for='Mobile Color'>Colors </label><br><input type='text' name='color_name[]' placeholder='Mobile Color' class='form-control' required />";
            //  console.log(_binddata); 
              document.getElementById("new_fields").innerHTML +=_binddata
            
           // $('#dropdown_option').html(_binddata);
            }

            function add_field(){

                var x = document.getElementById("new_fields");
                // create an input field to insert
                var new_field1 = document.createElement("label");
                var new_field = document.createElement("input");
                // set input field data type to text
                new_field.setAttribute("type", "text");
                // set input field name 
                new_field.setAttribute("name", "color_name[]");
                new_field.setAttribute("class", "form-control mt-2");  

                // select last position to insert element before it
                var pos = x.childElementCount;

                // insert element
                x.insertBefore(new_field, x.childNodes[pos]);
            }



            // count images
            $(".creativity_form").click(function(){
                var $fileUpload = $("input[type='file']");
                if (parseInt($fileUpload.get(0).files.length)>2){
                 alert("You can only upload a maximum of 2 files");
                }
            }); 

        $( "#mobile_name" ).keyup(function(event) { 

        let name  = this.value;
        
        $.ajax( {
                url: "{{url('/admin/verify-product')}}",
                type: "POST",
                data: {name:name},
                 headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
                dataType: "text",
                success: function(strMessage,status) {
               
                if (strMessage > 0 ) { 

                  document.getElementById("add_product").disabled = true; 
                   document.getElementById("duplicate_product").style.color="red";

                  $("#duplicate_product").text("You can not Enter Same Product Name Twice")


                }else{


                  $("#duplicate_product").text("");

                  document.getElementById("add_product").disabled = false;


                }
                                                                    
                },
                  error: function (jqXHR, textStatus, errorThrown) {
                  document.getElementById("add_product").disabled = true;
                
                        
                           console.log(jqXHR);
                           console.log(textStatus);
                           console.log(errorThrown);    
                      }
            });
});   

    </script>
</body>

</html>