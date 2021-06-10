<footer class="code-mobile-site-footer pt-5 pt-3 bg-grey">
    <div class="container">
        <div class="row">
            <button  id="btn-scroll-top"  class="btn btn-square btn-orange btn-scroll-top btn-padding-lg font-15 "
                    type="button">
                BACK TO TOP
            </button>
            <div class="col-12 col-md-2  text-center text-md-left">
                <img alt="Facebook" src="{{asset('./storage/layout_images/footer-down-arrow.png')}}"  >
            </div>
            <div class="col-12 col-md-10">
                <div class="row text-center text-md-left">
                    <div class="col-12 mb-5 pb-4">
                        <p class="footer-title font-weight-lighter">Looking forward to hearing from you.
                            <input class="footer-button font-18 ml-md-4" type="text" placeholder="Enter Email Address"/>
                            <i class="fa fa-angle-right"></i>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <a href="#">About Dcode</a>
                            </li>
                            <li>
                                <a href="#">Smartphones</a>
                            </li>
                            <li>
                                <a href="#">Accessories</a>
                            </li>
                            <li>
                                <a href="/dealers">Store Locator</a>
                            </li>
                            <li>
                                <a href="#">Workd if Dcode</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <a href="#">Recommend</a>
                            </li>
                            @foreach($products as $pro)
                                @if($pro->status == 1)
                                <li>
                                    <a href="/product/{{$pro->slug}}">{{$pro->name}}</a>
                                </li>
                                @endif
                             @endforeach
                             

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <a href="#">Support</a>
                            </li>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3 class="font-weight-light">0800-0-8866</h3>
                        <p class="font-14">
                            <span>11:00 - 19:00, MON - SAT</span>
                        </p>
                        <div class="clearfix social-icons">
                            <a href="https://www.facebook.com" target="_blank" rel="noopener">
                                <img alt="Facebook" src="{{asset('./storage/layout_images/facebook.png')}}" >
                            </a>
                            <a href="https://twitter.com" target="_blank" rel="noopener">
                                <img alt="Twitter" src="{{asset('./storage/layout_images/youtube.png')}}"  >
                            </a>
                            <a href="https://www.youtube.com" target="_blank" rel="noopener">
                                <img alt="Twitter" src="{{asset('./storage/layout_images/instagram.png')}}"  >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<!-- Model to view videos -->
<!-- Modal -->
<div class="modal fade oss-demo-modals" id="showVideoModal" tabindex="-1" role="dialog"
     aria-labelledby="showVideoModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <span>Model Video</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width:100%;">
                <div id="video_section">
                        <iframe class="video-frame" src="https://www.youtube.com/embed/t7jbT1YhyQU?feature=oembed&autoplay=1&mute=1" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".mobiles-list").first().click();    
 
    $('#main-menu .secondary-menu').mouseover(function () {
        var $this = $(this);
        var id = $this.attr('rel');
        var $currentWidget = $('#' + id);
        $currentWidget.show().siblings('.widget-container').hide();
    });
    $('#wrap').mouseleave(function () {
        $('.widget-container').hide();
        $('#first-widget').show();
    });




        function show_info(id) {
             
            $(".widget-container").css("display", "none");
     
            $("#a"+id).css("display", "flex");

             
        }
        function show(){
            $(".widget-container").css("display", "flex");

        }

    
     
</script>
</body>
</html>
