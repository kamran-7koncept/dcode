<!-- navbar -->
<nav class="navbar navbar-expand-md  bg-white navbar-light  fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img width="193" src="{{asset('./storage/layout_images/code_logo.png')}}"></a>
        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between ml-auto code-mobile-site-nav" id="nav">
            <ul class="navbar-nav  ml-auto font-17">
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">About Dcode</a>
                </li>
                <li class="nav-item dropdown" data-toggle="dropdown">
                    <a class="nav-link px-3 dropdown-toggle" href="#">Smartphones <i class="fa fa-angle-down"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Iphone</a>
                        <a class="dropdown-item" href="#">Samsung</a>
                        <a class="dropdown-item" href="#">Infinix</a>
                    </div>
                </li>
                <li class="nav-item dropdown" data-toggle="dropdown">
                    <a class="nav-link  px-3 dropdown-toggle" href="#">Accessories <i class="fa fa-angle-down"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Accessory 1</a>
                        <a class="dropdown-item" href="#">Accessory 2</a>
                        <a class="dropdown-item" href="#">Accessory 3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link   px-3" href="#">Store Locator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  px-3" href="#">World of Dcode</a>
                </li>
            </ul>
            <!-- Search bar -->
            <form class="form-inline ml-3">
                <div class="search-button">
                    <i class="fa fa-search text-purple"> </i>
                </div>
                <div class="search-box">
                    <input type="text" name="Search" class="pl-2" placeholder="Search ..."/>
                    <input type="button" value="Search"/>
                </div>
            </form>
            <button class="btn btn-success order-button btn-yellow btn-padding-sm
             btn-square font-19 ml-3 mt-2 mt-md-0"
                    type="button">Order
                Now
            </button>
        </div>
    </div>
</nav>