    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from html.web-bean.net/reju/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Dec 2018 09:08:22 GMT -->
    <head>

        <!-- meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site title -->
        <title>Nguyễn Quốc Trung| Trang chủ</title>
    
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.html">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900" rel="stylesheet">

        <!-- Bootstrap css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!--Font Awesome css -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">

        <!-- Normalizer css -->
        <link href="assets/css/normalize.css" rel="stylesheet">

        <!-- Owl Carousel css -->
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/css/owl.theme.min.css" rel="stylesheet">

        <!-- Magnific popup css -->
        <link href="assets/css/magnific-popup.css" rel="stylesheet">

        <!-- Site css -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- Responsive css -->
        <link href="assets/css/responsive.css" rel="stylesheet">
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Preloader starts-->
        <div id="preloader"></div>
        <!-- Preloader ends -->





        <!-- Navigation area starts -->
        <div class="menu-area navbar-fixed-top">
            <div class="container">
                <div class="row">

                    <!-- Navigation starts -->
                    <div class="col-md-12">
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index-2.html">nguyenquoctrung.vn</a>
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse">
                                    <nav>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a class="smooth_scroll" href="#home">Trang chủ</a></li>
                                            <li><a class="smooth_scroll" href="#about">Thông tin</a></li>
                                            <li><a class="smooth_scroll" href="#service">Bài viết</a></li>
                                            <li><a class="smooth_scroll" href="#work">Hình ảnh</a></li>
                                            <li><a class="smooth_scroll" href="#testimonial">Video</a></li>
                                            <li><a class="smooth_scroll" href="#contact">Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation ends -->

                </div>
            </div>
        </div>
        <!-- Navigation area ends -->


        <!-- Header area starts -->
        <header id="home" class="header-area">
            <div class="table">
                <div class="table-cell">
                        <!-- Caption starts -->
                        <div class="col-md-8 col-md-offset-2 caption">
                            <h4>Xin chào, tôi là Quốc Trung</h4>
                            <h2>Trang thông tin chính thức và duy nhất của Quốc Trung</h2>
                            <a class="btn dark smooth_scroll" href="#service">Bài viết</a>
                            <a class="btn smooth_scroll" href="#contact">Liên hệ</a>
                        </div>
                        <!-- Caption ends -->

                </div><!-- .table-cell -->
            </div><!-- .table -->
        </header>
        <!-- Header area ends -->


        <!-- About area starts -->
        <section id="about" class="about-area section">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2>Thông tin</h2>
                            <p>Chi tiết nhanh về bản thân</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- About Image -->
                    <div class="col-md-5">
                        <div class="me-image">
                            <img src="assets/img/about/about.png" alt="" class="img-responsive">
                        </div>
                    </div>

                    <!-- About Text -->
                    <div class="col-md-7">
                        <div class="about-text">
                            <h4>{{$user[0]->fullname}}</h4>       
                            <p>{{$user[0]->description}}</p>


                            <ul class="contact-info">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>{{$user[0]->address}}</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <p>(+84) {{$user[0]->phone}}</p>
                                </li>
                                <li>
                                    <i class="fa fa-send"></i>
                                    <p>{{$user[0]->email}}</p>
                                </li>
                                <li>
                                    <i class="fa fa-globe"></i>
                                    <p>www.nguyenquoctrung.vn</p>
                                </li>
                            </ul>

                            <a class="btn smooth_scroll" href="#contact">Liên hệ với tôi ngay   </a>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- About area ends -->


        <!-- Skills area starts -->
        <div id="skill" class="skills-area img-bg section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2>MY Skills</h2>                        
                            <p>Skills I have about my work.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-6">

                        <!-- Skills starts -->
                        <div class="skills">
                            <h4 class="progress-title">Designing</h4>
                            <div class="skills-item">
                                <div class="skills-item-progress" data-progress="80" style="width: 80%; visibility: visible;"></div>
                                <span class="counter"><span class="count">80</span>%</span>
                            </div>

                            <h4 class="progress-title">Marketing</h4>
                            <div class="skills-item">
                                <div class="skills-item-progress" data-progress="85" style="width: 85%; visibility: visible;"></div>
                                <span class="counter"><span class="count">85</span>%</span>
                            </div>
                            <h4 class="progress-title">Development</h4>
                            <div class="skills-item">
                                <div class="skills-item-progress" data-progress="90" style="width: 90%; visibility: visible;"></div>
                                <span class="counter"><span class="count">90</span>%</span>
                            </div>
                        </div>
                        <!-- / Skills ends -->

                </div>
                    
                    <div class="col-md-6">

                        <!-- Skills starts -->
                        <div class="skills">
                            <h4 class="progress-title">Wordpress</h4>
                            <div class="skills-item">
                                <div class="skills-item-progress" data-progress="85" style="width: 85%; visibility: visible;"></div>
                                <span class="counter"><span class="count">80</span>%</span>
                            </div>

                            <h4 class="progress-title">Photoshop</h4>
                            <div class="skills-item">
                                <div class="skills-item-progress" data-progress="80" style="width: 80%; visibility: visible;"></div>
                                <span class="counter"><span class="count">85</span>%</span>
                            </div>
                            <h4 class="progress-title">Supports</h4>
                            <div class="skills-item">
                                <div class="skills-item-progress" data-progress="90" style="width: 90%; visibility: visible;"></div>
                                <span class="counter"><span class="count">90</span>%</span>
                            </div>
                        </div>
                        <!-- / Skills ends -->

                </div>

                </div>

            </div>
        </div>
        <!-- Skills area ends -->


        <!-- Service area starts -->
        <section id="service" class="service-area section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2>BÀI VIẾT</h2>                        
                            <p>What I'll provide specially for you.</p>
                        </div>
                    </div>
                </div>      
                    <div class="owl-carousel owl-theme">                                                  
                    @foreach($tintuc as $news)
                        @if($news->status==1)
                        <div class="item">               
                            <div class="card" style="width: 350px;">
                                <img class="card-img-top" style="height:350px;" src="upload/tintuc/{{$news->hinhanh}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$news->tieude}}</h5>
                                    <p class="card-text">{{$news->tomtat}}</p>
                                    <a href="{{route('tintucHome', $news->id)}}" class="btn btn-primary">Xem thêm</a>
                                </div>
                            </div>           
                        </div>
                       @endif
                    @endforeach

                    </div>                        
                </div>
            </div>
        </section>
        <!-- Service area ends -->

        <!-- Testimonial area starts -->

        <section id="testimonial" class="testimonial-area img-bg section">
        <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2>VIDEO</h2>
                            <p>Coderspoint has everything you need to get your new website up and running in no time all of the templates and themes.</p>
                        </div>
                    </div>
                </div>
            <!-- <div class="owl-carousel"> -->
        <div class="row work-items">
            <!-- work item -->
            <div class="container">
                <div class="owl-carousel owl-theme">
            
                    <div class="item" style="width: 350px;">   
                                    
                        <iframe src="https://youtube.com/embed/Lt-U_t2pUHI" width="100%" height="400px"></iframe>
                            
                    </div>
                    <div class="item" style="width: 350px;">
                        <iframe src="https://youtube.com/embed/Lt-U_t2pUHI" width="100%" height="400px"></iframe>
                    </div>
                    <div class="item" style="width: 350px;">
                        <iframe src="https://youtube.com/embed/Lt-U_t2pUHI" width="100%" height="400px"></iframe>
                    </div>
                    <div class="item" style="width: 350px;">
                        <iframe src="https://youtube.com/embed/Lt-U_t2pUHI" width="100%" height="400px"></iframe>
                    </div>  
                </div>
            </div>
            <!-- <div class="col-sm-12">
      <h1 class="text-center display-4 mt-5">
        Solodev Web Design & Content Management Software
      </h1>
      <p class="text-center mt-5">
        <a href="#headerPopup" id="headerVideoLink" target="_blank" class="btn btn-outline-danger popup-modal">See Why Solodev WXP</a>
      </p>
      <div id="headerPopup" class="mfp-hide embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/qN3OueBm9F4?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div> -->
        </div>

                    
            <!-- </div> -->

            </div>
        </section>
        <!-- Testimonial area ends -->


        <!-- Work area starts -->
        <section id="work" class="works section">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2>HÌNH ẢNH</h2>
                            <p>Coderspoint has everything you need to get your new website up and running in no time all of the templates and themes.</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Works filter -->
                    <ul class="work filters">
                        <li class="filter" data-filter="all">All</li>
                        <li class="filter" data-filter=".web">Web</li>
                        <li class="filter" data-filter=".app">App</li>
                        <li class="filter" data-filter=".graphic">Graphic</li>
                    </ul>
                    <!-- / Works filter -->
                </div>

                <div class="portfolio">
                    <div class="row work-items">
                        <!-- work item -->
                        @foreach($image as $img)
                        @if($img->status==1)
                        <div class="col-md-3 col-sm-6 mix graphic">
                        <div class="item">
                                <a href="upload/hinhanh/{{$img->hinh}}" class="work-popup">
                                    <img style="height:350px;"src="upload/hinhanh/{{$img->hinh}}" alt="">
                                    <div class="overlay">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <!-- work item -->
                        

                        <!-- work item -->
                        

                        <!-- work item -->
                       

                        <!-- work item -->
                        

                        <!-- work item -->
                        

                        <!-- work item -->
                        
                                <!-- work item -->
                        
                        
                        
                    </div>
                </div>

            </div>
        </section>
        <!-- Work area ends -->





        <!-- Contact area starts -->
        <section id="contact" class="contact-area section">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2>LIÊN HỆ TÔI</h2>
                            <p>Coderspoint has everything you need to get your new website up and running in no time all of the templates and themes.</p>
                        </div>
                    </div>
                </div>

                <div class="row contact-infos hidden">
                    <div class="col-sm-4 col-xs-12">
                        <div class="contact-info">
                            <i class="fa fa-send"></i>
                            <p>
                                <a href="mailto:info@mydomain.com" title="Click to mail">info@mydomain.com</a>
                                <br>
                                <a href="mailto:admin@mydomain.com" title="Click to mail">admin@mydomain.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="contact-info">
                            <i class="fa fa-map-marker"></i>
                            <p>502, Sachber,<br>
                            Berlin, Germany</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="contact-info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>
                                <a href="tel:0000" title="Click to Call">+12 - 913 2122</a>
                                <br>
                                <a href="tel:0000" title="Click to Call">+12 - 0131 563</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <!-- Contact form starts -->
                        <div class="contact-form">

                            <!-- Submition status -->
                            <div id="form-messages"></div>

                            <form id="ajax-contact" action="http://html.web-bean.net/reju/assets/mailer.php" method="post">
                                <div class="row">
                                    
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group in_name">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="NAME" required="required">
                                        </div>
                                        <div class="form-group in_email">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="EMAIL" required="required">
                                        </div>
                                        <div class="form-group in_message"> 
                                            <textarea rows="5" name="message" class="form-control" id="message" placeholder="MESSAGE" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="actions">
                                            <input type="submit" value="Send Now" name="submit" id="submitButton" class="btn" title="Submit Your Message!">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact form ends-->
                    </div>
                </div>

            </div>
        </section>
        <!-- Contact area ends -->


        <!-- Footer area starts -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p>&copy; 2016 Copyright CODERSPOINT</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>                
                </div>
            </div>
        </footer>
        <!-- Footer area ends -->


        <!-- Latest jQuery -->
        <script src="assets/js/jquery.min.js"></script>

        <!-- Bootstrap js-->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Owl Carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>

        <!-- Mixitup js -->
        <script src="assets/js/jquery.mixitup.js"></script>

        <!-- Magnific popup js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>

        <!-- Main js-->
        <script src="assets/js/main_script.js"></script>

        <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                items :3,
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
            0:{
            items:1,
            nav:true
            },
            400:{
            items:2,
            nav:false
            },
            800:{
            items:3,
            nav:true,
            loop:false
            }
            }
        });

    });
        </script>

    </body>


    <!-- Mirrored from html.web-bean.net/reju/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Dec 2018 09:09:38 GMT -->
    </html>