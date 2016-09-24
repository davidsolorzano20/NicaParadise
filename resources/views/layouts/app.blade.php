<!DOCTYPE html>
<html class="frontend">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Luis Solorzano - Ing.Telematica">
    <meta name="description" content="Nicaraguan, Paradise, Tours">
    <meta name="keywords" content="nicaraguan, paradise, ours">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/images/log.png">
    <link rel="icon" href="assets/images/log.png">

    {!! Html::style('/css/style.css') !!}

    <link rel="stylesheet" href="app/Sites/theme_nicaraguan/stylesheet/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="app/Sites/theme_nicaraguan/plugins/modernizr/js/modernizr.js"></script>
</head>

<body style="font-family: 'Lato Light';">
<header id="header" class="navbar">
    <div class="container">
        <div class="navbar-header navbar-header-transparent">
            <a class="navbar-brand" href="javascript:void(0);">
                <span class="logo-figure" id="logo2" style="margin-left:-4px;"></span>
                <span class="logo-text" id="logo"></span>
            </a>
        </div>

        <div class="navbar-toolbar clearfix" id="searchs">
            <ul class="nav navbar-nav">
                <li class="navbar-main navbar-toggle">
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#navbar-collapse">
             <span class="meta">
               <span class="icon">
								 <i class="ico-paragraph-justify3 text-warning" ></i>
							 </span>
             </span>
                    </a>
                </li>
            </ul>

            <div class='container' id="logo_type">
                <div class='visible' >
                    <p style="margin-top: 10px;" class="text-primary">
                        <span class="text-warning">[ </span>	Welcome To
                    </p>
                    <ul>
                        <li class="text-success">Nicaraguan<span class="text-warning"> ]</span></li>
                        <li class="text-success">Paradise<span class="text-warning"> ]</span></li>
                        <li class="text-success">Tours <span class="text-warning"> ]</span></li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse navbar-collapse-alt" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle dropdown-hover"
                           data-toggle="dropdown">
                  <span class="meta type_letter-light">
										<i class="fa fa-home icons text-primary"></i>
										Home
                  </span>
                        </a>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle dropdown-hover"
                           data-toggle="dropdown">
               <span class="meta type_letter-light">
								 <i class="fa fa-info-circle icons text-teal"></i>
								 Why Us
							 </span>
                        </a>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle dropdown-hover"
                           data-toggle="dropdown">
                  <span class="meta type_letter-light">
										<i class="fa fa-sun-o icons text-warning"></i>
										Tours
										   <span class="caret text-warning"></span>
                  </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-alt">
                            <li>
                                <a href="blog-large.html">Half Day Tours
                                    <i class="fa fa-angle-right text-primary" style="float:right;margin-top:1%;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="blog-medium.html">One Day Tours
                                    <i class="fa fa-angle-right text-primary" style="float:right;margin-top:1%;"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle dropdown-hover"
                           data-toggle="dropdown">
                  <span class="meta type_letter-light">
										<i class="fa fa-shopping-bag icons text-success"></i>
										Packages
                    <span class="caret text-success"></span>
                  </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-alt">
                            <li><a href="shop.html">Default</a></li>
                            <li><a href="shop-item-detail.html">Item detail</a></li>
                            <li><a href="shop-left-sidebar.html">Left sidebar</a></li>
                            <li><a href="shop-right-sidebar.html">Right sidebar</a></li>
                            <li><a href="shop-shopping-cart.html">Shopping cart</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle dropdown-hover"
                           data-toggle="dropdown">
                 <span class="meta type_letter-light">
									 <i class="fa fa-shopping-basket icons text-danger"></i>
									 Camping
								 </span>
                        </a>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
							<span class="meta type_letter-light">
								<i class="fa fa-photo icons text-info"></i>
								Photo Gallery
							</span>
                        </a>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
							<span class="meta type_letter-light">
								<i class="fa fa-clone icons text-accent"></i>
								Customer's Letters
							</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>


<section id="main" role="main">
    <!-- HOME SLIDER -->
    <div class="vegas-slide" style="width: 100%;height: 470px;">
        <!--|Footer|-->
        <footer class="footer clearfix">
            <div class="slide-controller">
                <a id="prev" href="#">
                    <i class="fa fa-angle-left" style="color:white;font-size: 95px;margin-top: 160px;margin-left: 45px"></i>
                </a>
                <a id="next" href="#">
                    <i class="fa fa-angle-right" style="color:white;font-size: 95px;float: right;margin-top: 160px;margin-right: 45px"></i>
                </a>
            </div>
        </footer>
    </div>

    <!-- START Features Section -->
    <section class="section bgcolor-white">
        <div class="container">
            {% block section %}
            {% endblock %}
            <br>
            <hr id="section-header"/>
            <br>

            <!-- START row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="table-layout animation" data-toggle="waypoints"
                         data-showanim="fadeInRight" data-trigger-once="true">
                        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 valign-top">
                            <img src="app/Sites/theme_nicaraguan/image/home_image/leon-background.jpg"
                                 class="img-circle" style="width: 90px;height:90px;" alt="">
                        </div>
                        <div class="col-xs-19 pl15">
                            <h4 class="font-alt">City Tour Le&oacute;n</h4>
                            <p class="nm">
                                If you are always eager to known the History,
                                Culture and Traditions of the town you're visiting,
                                Welcome to Leon City.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-layout animation" data-toggle="waypoints"
                         data-showanim="fadeInRight" data-trigger-once="true">
                        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 valign-top">
                            <img src="app/Sites/theme_nicaraguan/image/home_image/2.jpg"
                                 class="img-circle" style="width: 90px;height:90px;" alt="">
                        </div>
                        <div class="col-xs-10 pl15">
                            <h4 class="font-alt">Ruins of Le&oacute;n Viejo</h4>
                            <p class="nm">Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-layout animation" data-toggle="waypoints"
                         data-showanim="fadeInRight" data-trigger-once="true">
                        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 valign-top"><img
                                    src="app/Sites/theme_nicaraguan/image/home_image/1.jpg"
                                    class="img-circle" style="width: 90px;height:90px;" alt=""></div>
                        <div class="col-xs-10 pl15">
                            <h4 class="font-alt">Juan Venado Nature Reserve</h4>
                            <p class="nm">Excepteur sint occaecat cupidatat non proident, sunt
                                in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ END row -->

            <!-- START row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="table-layout animation mb0" data-toggle="waypoints"
                         data-showanim="fadeInLeft" data-trigger-once="true">
                        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 valign-top">
                            <img src="app/Sites/theme_nicaraguan/image/home_image/3.jpeg"
                                 class="img-circle" style="width: 90px;height:90px;" alt="">
                        </div>
                        <div class="col-xs-19 pl15">
                            <h4 class="font-alt">Volcan T&eacute;lica!</h4>
                            <p class="nm">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod
                                tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="mb15 visible-xs visible-sm"></div>
                <div class="col-md-4">
                    <div class="table-layout animation mb0" data-toggle="waypoints"
                         data-showanim="fadeInLeft" data-trigger-once="true">
                        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 valign-top">
                            <img src="app/Sites/theme_nicaraguan/image/home_image/5.jpg"
                                 class="img-circle" style="width: 90px;height:90px;" alt="">
                        </div>
                        <div class="col-xs-10 pl15">
                            <h4 class="font-alt">Ash Boarding in Cerro Negro!</h4>
                            <p class="nm">Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="mb15 visible-xs visible-sm"></div>
                <div class="col-md-4">
                    <div class="table-layout animation mb0" data-toggle="waypoints"
                         data-showanim="fadeInLeft" data-trigger-once="true">
                        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 valign-top">
                            <img src="app/Sites/theme_nicaraguan/image/home_image/3.jpg"
                                 class="img-circle" style="width: 90px;height:90px;" alt="">
                        </div>
                        <div class="col-xs-10 pl15">
                            <h4 class="font-alt">Asososca Horseback Riding!</h4>
                            <p class="nm">Excepteur sint occaecat cupidatat non proident, sunt
                                in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/ END row -->
            <!-- START row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="table-layout animation" data-toggle="waypoints"
                         data-showanim="fadeInRight" data-trigger-once="true">
                        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 valign-top">
                            <img src="app/Sites/theme_nicaraguan/image/home_image/4.jpg"
                                 class="img-circle" style="width: 90px;height:90px;" alt="">
                        </div>
                        <div class="col-xs-19 pl15">
                            <h4 class="font-alt">San Jacinto Boiling mud!</h4>
                            <p class="nm">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod
                                tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-layout animation" data-toggle="waypoints"
                         data-showanim="fadeInRight" data-trigger-once="true">
                        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 valign-top">
                            <img src="app/Sites/theme_nicaraguan/image/home_image/6.jpg"
                                 class="img-circle" style="width: 90px;height:90px;" alt="">
                        </div>
                        <div class="col-xs-10 pl15">
                            <h4 class="font-alt">El Hoyo Volcano!</h4>
                            <p class="nm">Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-layout animation" data-toggle="waypoints"
                         data-showanim="fadeInRight" data-trigger-once="true">
                        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 valign-top"><img
                                    src="app/Sites/theme_nicaraguan/image/home_image/7.jpg"
                                    class="img-circle" style="width: 90px;height:90px;" alt=""></div>
                        <div class="col-xs-10 pl15">
                            <h4 class="font-alt">Rum Factory Tours</h4>
                            <p class="nm">Excepteur sint occaecat cupidatat non proident, sunt
                                in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ END row -->

        </div>
    </section>
    <!--/ END Features Section -->

    <!-- START Recent Blog Section -->
    <section class="section">
        <div class="container">
            <!-- START Section Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h1 class="section-title font-alt mb25">Blog Post</h1>
                    </div>
                </div>
            </div>
            <!--/ END Section Header -->

            <!-- START row -->
            <div class="row">
                <!-- Blog post #1 -->
                <div class="col-sm-4 post">
                    <article class="panel no-border overflow-hidden mb0">
                        <!-- Thumbnail -->
                        <header class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-success"><i
                                                    class="ico-new-tab"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil"
                                     src="app/Sites/theme_nicaraguan/image/background/blog/placeholder.jpg"
                                     data-src="app/Sites/theme_nicaraguan/image/background/blog/blog1.jpg"
                                     alt="Photo" height="200px">
                            </div>
                            <!--/ media -->
                        </header>
                        <!--/ Thumbnail -->
                        <!-- Content -->
                        <section class="pa20">
                            <!-- heading -->
                            <h4 class="mt0 ellipsis">Lorem ipsum dolor sit amet</h4>
                            <!--/ heading -->
                            <!-- meta -->
                            <p class="meta nm">
                                <a href="javascript:void(0);">June, 2014</a><!-- date -->
                                <span class="text-muted mr5 ml5">&#8226;</span>
                                <span class="text-muted">By </span><a
                                        href="javascript:void(0);">Mark Adams</a><!-- author -->
                            </p>
                            <!--/ meta -->
                        </section>
                        <!--/ Content -->
                    </article>
                    <div class="mb15 visible-xs"></div>
                </div>
                <!--/ Blog post #1 -->

                <!-- Blog post #2 -->
                <div class="col-sm-4 post">
                    <article class="panel no-border overflow-hidden mb0">
                        <!-- Thumbnail -->
                        <header class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-success"><i
                                                    class="ico-new-tab"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil"
                                     src="app/Sites/theme_nicaraguan/image/background/blog/placeholder.jpg"
                                     data-src="app/Sites/theme_nicaraguan/image/background/blog/blog2.jpg"
                                     alt="Photo" height="200px">
                            </div>
                            <!--/ media -->
                        </header>
                        <!--/ Thumbnail -->
                        <!-- Content -->
                        <section class="pa20">
                            <!-- heading -->
                            <h4 class="mt0 ellipsis">Duis aute irure dolor in reprehenderit in
                                voluptate.</h4>
                            <!--/ heading -->
                            <!-- meta -->
                            <p class="meta nm">
                                <a href="javascript:void(0);">June, 2014</a><!-- date -->
                                <span class="text-muted mr5 ml5">&#8226;</span>
                                <span class="text-muted">By </span><a
                                        href="javascript:void(0);">Jenna Howard</a><!-- author -->
                            </p>
                            <!--/ meta -->
                        </section>
                        <!--/ Content -->
                    </article>
                    <div class="mb15 visible-xs"></div>
                </div>
                <!--/ Blog post #2 -->

                <!-- Blog post #3 -->
                <div class="col-sm-4 post">
                    <article class="panel no-border overflow-hidden mb0">
                        <!-- Thumbnail -->
                        <header class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-success"><i
                                                    class="ico-new-tab"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil"
                                     src="app/Sites/theme_nicaraguan/image/background/blog/placeholder.jpg"
                                     data-src="app/Sites/theme_nicaraguan/image/background/blog/blog3.jpg"
                                     alt="Photo" height="200px">
                            </div>
                            <!--/ media -->
                        </header>
                        <!--/ Thumbnail -->
                        <!-- Content -->
                        <section class="pa20">
                            <!-- heading -->
                            <h4 class="mt0 ellipsis">Vivamus nibh dolor, nonummy ac, feugiat
                                non, lobortis quis, pede.</h4>
                            <!--/ heading -->
                            <!-- meta -->
                            <p class="meta nm">
                                <a href="javascript:void(0);">Apr, 2014</a><!-- date -->
                                <span class="text-muted mr5 ml5">&#8226;</span>
                                <span class="text-muted">By </span><a
                                        href="javascript:void(0);">Glenna Espi</a><!-- author -->
                            </p>
                            <!--/ meta -->
                        </section>
                        <!--/ Content -->
                    </article>
                </div>
                <!--/ Blog post #3 -->
            </div>
            <!--/ END row -->
        </div>
    </section>
    <!--/ END Recent Blog Section -->

    <!-- START Lovely Client -->
    <section class="section bgcolor-white">
        <div class="container">
            <!-- START Section Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h1 class="section-title type_letter-light text-success">Recent Photos added</h1>
                    </div>
                </div>
            </div>
            <!--/ END Section Header -->

            <!-- carousel -->
            <div class="owl-carousel" id="lovely-client">
                <!-- client #1 -->
                <div class="item text-center">
                    <a href="javascript:void(0);">
                        <img src="app/Sites/theme_nicaraguan/image/recent_photo/1.jpg" class="image_recent img-thumbnail">
                    </a>
                </div>
                <!--/ client #1 -->
                <!-- client #2 -->
                <div class="item text-center">
                    <a href="javascript:void(0);"><img
                                src="app/Sites/theme_nicaraguan/image/recent_photo/2.jpg" class="image_recent img-thumbnail"></a>
                </div>
                <!--/ client #2 -->
                <!-- client #3 -->
                <div class="item text-center">
                    <a href="javascript:void(0);"><img
                                src="app/Sites/theme_nicaraguan/image/recent_photo/4.jpg" class="image_recent img-thumbnail"></a>
                </div>
                <!--/ client #3 -->
                <!-- client #4 -->
                <div class="item text-center">
                    <a href="javascript:void(0);"><img
                                src="app/Sites/theme_nicaraguan/image/recent_photo/jpg" class="image_recent img-thumbnail"></a>
                </div>
                <!--/ client #4 -->
                <!-- client #5 -->
                <div class="item text-center">
                    <a href="javascript:void(0);"><img
                                src="app/Sites/theme_nicaraguan/image/recent_photo/5.jpg" class="image_recent img-thumbnail"></a>
                </div>
                <!--/ client #5 -->
                <!-- client #6 -->
                <div class="item text-center">
                    <a href="javascript:void(0);"><img
                                src="app/Sites/theme_nicaraguan/image/recent_photo/6.jpg" class="img-thumbnail image_recent"></a>
                </div>
                <!--/ client #6 -->
                <!-- client #7 -->
                <div class="item text-center">
                    <a href="javascript:void(0);"><img
                                src="app/Sites/theme_nicaraguan/image/recent_photo/7.jpg" class="img-thumbnail image_recent"></a>
                </div>
                <!--/ client #7 -->
            </div>
            <!--/ carousel -->
        </div>
    </section>
    <!--/ END Lovely Client -->

    <!-- START To Top Scroller -->
    <a href="#" class="totop animation" data-toggle="waypoints totop"
       data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i
                class="ico-angle-up"></i></a>
    <!--/ END To Top Scroller -->
</section>
<!--/ END Template Main -->

<!-- START Template Footer -->
<footer role="contentinfo" class="bgcolor-dark pt25">
    <!-- container -->
    <div class="container mb25">
        <!-- row -->
        <div class="row">
            <!-- About -->
            <div class="col-md-4">
                <h4 class="font-alt mt0">Why Us</h4>
                <p>
                    We are a 100% Nicaraguan tour operator which
                    specializes in selling holiday Packages to
                    international and national tourists in Nicaragua.
                    Located in the heart of the colonial city of Leon-Nicaragua
                    in Nicaraguan Paradise Tours we strongly believe to meeting
                    your expectations when discovering our wonderful country
                </p>

                <a href="javascript:void(0);" class="text-success">Learn More</a>
            </div>
            <div class="visible-sm visible-xs" style="margin-bottom:25px;"></div>
            <!--/ About -->

            <!-- Address + Social -->
            <div class="col-md-4"
                 style="background: url(app/Sites/theme_nicaraguan/image/others/map-vector.png) no-repeat center center;background-size: 100%;">
                <h4 class="font-alt mt0">Contact Us</h4>
                <address>
                    <strong>Nicaraguan Paradise Tours.</strong><br>
                    <strong>Le&oacute;n - Nicaragua	</strong><br>
                    <i class="fa fa-envelope-o"></i>  info@nicaraguanparadisetour.com<br>
                    <i class="fa fa-phone"></i>
                    For English Speaking Call (505) 5795-4936
                </address>
                <h4 class="font-alt mt0">Social Networks</h4>
                <a href="https://www.facebook.com/Nicaraguan-Paradise-Tour-1036596596391808/?fref=ts" target="_blank" class="text-muted mr15" data-toggle="tooltip" title="Facebook">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/NicaParadise" target="_blank" class="text-muted mr15" data-toggle="tooltip" title="Twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="WhatsApp">
                    <i class="fa fa-whatsapp"></i>
                </a>
                <a href="https://plus.google.com/104594360112416555502" target="_blank" class="text-muted mr15" data-toggle="tooltip" title="Google+">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a href="https://www.instagram.com/nicaparadise_tour/" target="_blank" class="text-muted mr15" data-toggle="tooltip" title="Instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
            <div class="visible-sm visible-xs" style="margin-bottom:25px;"></div>
            <!--/ Address + Social -->

            <!-- Newsletter -->
            <{#div class="col-md-4">
            <h4 class="font-alt mt0">NEWS LETTER</h4>
            <form role="form">
                <div class="form-group">
                    <p class="form-control-static">Subscribe to our newsletter and stay
                        up to date with the latest news and deals!</p>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="newsletter_email"
                           placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Subscribe
                    Now
                </button>
            </form>#}
        </div>
        <!--/ Newsletter -->
    </div>
    <!--/ row -->
    </div>
    <!--/ container -->

    <!-- bottom footer -->
    <div class="footer-bottom pt15 pb15 bgcolor-dark bgcolor-dark-darken10">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <!-- copyright -->
                    <p class="nm text-muted">&copy; Copyright 2016 by <a
                                href="javascript:void(0);" class="text-white">Nicaraguan Paradise Tours</a>. All
                        Rights Reserved.</p>
                    <!--/ copyright -->
                </div>
                <div class="col-sm-6 text-right hidden-xs">
                    <a href="javascript:void(0);" class="text-white">Developer and Designer</a>
                    <span class="ml5 mr5">&#8226;</span>
                    <a href="https://www.facebook.com/luis.solorzanop.9" target="_blank" class="text-white">Luis David Solorzano Paredes</a>
                </div>
            </div>
        </div>
        <!--/ container -->
    </div>
    <!--/ bottom footer -->
</footer>
<!--/ END Template Footer -->

<!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
<!-- Application and vendor script : mandatory -->
<script type="text/javascript" src="app/Sites/theme_nicaraguan/javascript/vendor.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/javascript/core.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/javascript/frontend/app.js"></script>
<!--/ Application and vendor script : mandatory -->

<!-- Plugins and page level script : optional -->
<script type="text/javascript" src="app/Sites/theme_nicaraguan/plugins/smoothscroll/js/smoothscroll.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/plugins/owl/js/owl.carousel.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/plugins/layerslider/js/greensock.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/plugins/layerslider/js/layerslider.transitions.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/javascript/frontend/home/home-v1.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/javascript/js/breakpoints.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/javascript/js/vegas.min.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/javascript/js/init.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/javascript/js/nicaraguan.js"></script>
<script type="text/javascript" src="app/Sites/theme_nicaraguan/javascript/js/parallaxmin.js"></script>
<!--/ Plugins and page level script : optional -->
<!--/ END JAVASCRIPT SECTION -->

</body>
<!--/ END Body -->
</html>