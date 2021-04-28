            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
      <script src="{{asset('/js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/js/js/bootstrap.bundle.min.js')}}"></script>
 
    <!-- Core plugin JavaScript-->
     <script src="{{asset('/js/jquery-easing/jquery.easing.min.js')}}"></script>
 
    <!-- Custom scripts for all pages-->
    <script src="{{asset('/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('/js/chart.js/Chart.min.js')}}"></script>  

    <!-- Page level custom scripts -->
    <script src="{{ asset('/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('/js/demo/chart-pie-demo.js')}}"></script>
   <!-- Page level plugins -->
    <script src="{{ asset('/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('/js/demo/datatables-demo.js')}}"></script>

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

         document.getElementById("loadimg").style.display="none"; 
         document.getElementById("product_info_second").style.display="block";
                                           
          },
            error: function (jqXHR, textStatus, errorThrown,strMessage) {
                  
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
         document.getElementById("loadimg").style.display="none";   
         document.getElementById("product_info_third").style.display="block";
                                             
          },
            error: function (jqXHR, textStatus, errorThrown,strMessage) {
                 
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
      //     location.reload();                                 
          },
            error: function (jqXHR, textStatus, errorThrown,strMessage) {
                 
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
    </script>
</body>

</html>