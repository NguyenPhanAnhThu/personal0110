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
    
      
        <!-- Navigation area starts -->
        <div class="menu-area navbar-fixed-top">
            <div class="container">
                <div class="row">

                    <!-- Navigation starts -->
                    <div class="col-md-12">
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="{{route('trang-chu')}}">nguyenquoctrung.vn</a>
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse">
                                    <nav>
                                        <!-- <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a class="smooth_scroll" href="{{route('trang-chu')}}">Trang chủ</a></li>
                                            <li><a class="smooth_scroll" href="#about">Thông tin</a></li>
                                            <li><a class="smooth_scroll" href="#service">Bài viết</a></li>
                                            <li><a class="smooth_scroll" href="#work">Hình ảnh</a></li>
                                            <li><a class="smooth_scroll" href="#testimonial">Video</a></li>
                                            <li><a class="smooth_scroll" href="#contact">Liên hệ</a></li>
                                        </ul> -->
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
                            
                        </div>
                        <!-- Caption ends -->

                </div><!-- .table-cell -->
            </div><!-- .table -->
        </header>
        <!-- Header area ends -->
        
        <section class="section">
            <div class="container">
            <h1>{{$tintuc->tieude}}</h1>
            <h4>{{$tintuc->tomtat}}</h4>
            <img class="card-img-top"  style="width: 350px;" src="upload/tintuc/{{$tintuc->hinhanh}}" alt="Card image cap">
            <br><br>
            <p>{{$tintuc->noidung}}</p>
            </div>
        </section>  


            

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
        </body>
        </html>