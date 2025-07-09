
        <header class="header-with-topbar"> 
            <!-- <div class="header-top-bar top-bar-light bg-gradient-corduroy-green-dark-goldenrod disable-fixed">
                <div class="container-fluid">
                    <div class="row h-42px align-items-center justify-content-center">
                        <div class="col-auto text-center">
                            <span class="bg-black-transparent-light ps-15px pe-15px d-inline-block align-middle fs-10 text-uppercase text-white border-radius-4px fw-700 me-15px lh-26">Success stories</span>
                            <div class=" d-inline-block align-middle fs-12 text-white text-uppercase fw-500">Fight for right cause for save the world. <a href="blog.html" class="text-decoration-line-bottom text-white">Read stories</a></div>
                        </div> 
                    </div>
                </div>
            </div> -->
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light border-bottom border-color-transparent-dark-very-light  disable-fixed background-position-left-top" style="background-image: url('{{asset('frontend')}}/images/demo-charity-home-bg-01.jpg')">
                <div class="container-fluid justify-content-lg-start">
                    <div class="col-auto">
                        <a class="navbar-brand" href="home.html">
                            <img src="picture/trainlikek9-logo.png" data-at2x="picture/trainlikek9-logo.png" alt="" class="default-logo">
                            <img src="picture/trainlikek9-logo.png" data-at2x="picture/trainlikek9-logo.png" alt="" class="alt-logo">
                            <img src="picture/trainlikek9-logo.png" data-at2x="picture/trainlikek9-logo.png" alt="" class="mobile-logo"> 
                        </a>
                    </div>
                    <div class="col-auto menu-order left-nav">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav"> 
                            <ul class="navbar-nav"> 
                                <li class="nav-item"><a href="home.html" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
                                <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>

                                <!-- <li class="nav-item"><a href="demo-charity-causes.html" class="nav-link">Causes</a></li> -->
                                <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link">Gallery</a></li>
                                <li class="nav-item"><a href="{{route('video')}}" class="nav-link">Video</a></li>

                                <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto ms-auto d-none d-xl-flex">
                        <div class="header-icon">
                            <div class="d-none d-xxl-inline-block me-25px"><a href="tel:{{getWebsiteData()['primary_phone']}}" class="widget-text text-dark-gray fs-16 fw-600"><i class="feather icon-feather-phone-outgoing me-10px"></i>{{getWebsiteData()['primary_phone']}}</a></div>
                            <div class="header-button"><a href="contact.html" class="btn btn-very-small btn-dark-gray btn-box-shadow btn-round-edge">Let's talk</a></div>
                        </div> 
                    </div>
                </div>
            </nav>
            <!-- start push popup --> 
        </header>