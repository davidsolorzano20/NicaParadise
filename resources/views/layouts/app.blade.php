<!DOCTYPE html>
<html class="frontend">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Luis Solorzano - Ing.Telematica">
    <meta name="description" content="Nicaraguan Paradise Tours">
    <meta name="keywords" content="nicaraguan, paradise, Tours">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="http://nicaraguanparadisetour.com/assets/images/log.png">
    <link rel="icon" href="http://nicaraguanparadisetour.com/assets/images/log.png">

    <title>@yield('title')</title>

    {!! Html::style('/css/style.css') !!}
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
    <script src="https://use.fontawesome.com/216d67c8bd.js"></script>

</head>
<body id="home">

<div id="loading-homepage">
    <img src=""/>
</div>

<div class="navbar navbar-default navbar-fixed-top border-bottom">
    <div class="container">
        <div class="navbar-header">
            <a href="{!! url('/home') !!}" class="navbar-brand"><img src="http://nicaraguanparadisetour.com/assets/images/npt.png"></a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="{!! url('/home') !!}">
                        <i class="fa fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{!! url('/whyus') !!}">
                        <i class="fa fa-info-circle icons text-teal"></i>
                        Why Us
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-sun-o icons text-warnin"></i>
                        Tours
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu nica-dropdow-menu ">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Half Day Tours</a>
                            <ul class="dropdown-menu nica-dropdow-menu">
                                <li><a href="{!! url('/tours/ash-boarding-in-cerro-negro') !!}">Ash Boarding in Cerro Cegro</a></li>
                                <li><a href="#">Volcano Telica</a></li>
                                <li><a href="">Juan Venado Nature Reserve</a></li>
                                <li><a href="#">City Tour Leon</a></li>
                                <li><a href="#">Leon Viejo Ruins and Asososca</a></li>
                                <li><a href="#">Asososca Horseback Riding</a></li>
                                <li><a href="#">San Jacinto Boiling Mud</a></li>
                                <li><a href="#">El Hoyo Volcano</a></li>
                                <li><a href="#">Run Factory Tour</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">One Day Tours</a>
                            <ul class="dropdown-menu nica-dropdow-menu">
                                <li><a href="#">Cerro Negro + Asosca Lagoon + León Viejo</a></li>
                                <li><a href="#">El Hoyo Volcano + Volcano Boarding</a></li>
                                <li><a href="#">San Cristobal Volcano</a></li>
                                <li><a href="#">Momotombo Volcano</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-shopping-bag icons text-succes"></i>
                        Packages
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu nica-dropdow-menu ">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Classic Tours
                            </a>
                            <ul class="dropdown-menu nica-dropdow-menu">
                                <li><a href="#">Tours 11 days y 10 nights</a></li>
                                <li><a href="#">Tours 5 days y 4 nights</a></li>
                                <li><a href="#">Tours 5 days y 4 nights</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Adventure Tours
                            </a>
                            <ul class="dropdown-menu nica-dropdow-menu">
                                <li><a href="#">Tours 7 days y 6 nights</a></li>
                                <li><a href="#">Tours 8 days y 7 nights</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#"> Eco-Tourism</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-shopping-basket icons text-dange"></i>
                        Camping
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-photo icons text-inf"></i>
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-clone icons text-accent"></i>
                        Custom Letter's
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

@yield('slider')
@yield('content')
<!-- START Template Footer -->
<div class="container-fluid border-t" style="background-image: url(/assets/background/1.png)">
    <!-- row -->
    <div class="row">
        <!-- About -->
        <div class="col-md-4">
            <h4 class="text-muted">Why Us</h4>
            <p class="text-muted">
                We are a 100% Nicaraguan tour operator which
                specializes in selling holiday Packages to
                international and national tourists in Nicaragua.
                Located in the heart of the colonial city of Leon-Nicaragua
                in Nicaraguan Paradise Tours we strongly believe to meeting
                your expectations when discovering our wonderful country
            </p>

            <a href="{!! url('/whyus') !!}" class="text-success">Learn More</a>
        </div>
        <div class="visible-sm visible-xs" style="margin-bottom:25px;"></div>
        <!--/ About -->

        <!-- Address + Social -->
        <div class="col-md-4 text-muted">
            <h4 class="text-muted">Contact Us</h4>
            <address>
                <strong><a href="javascript:void(0)">Nicaraguan Paradise Tours.</a></strong><br>
                <strong>Le&oacute;n - Nicaragua </strong><br>
                <i class="fa fa-envelope-o"></i> info@nicaraguanparadisetour.com<br>
                <i class="fa fa-phone"></i>
                For English Speaking Call (505) 5795-4936
            </address>
            <h4 class="font-alt mt0">Social Networks</h4>
            <br><br>
            <a href="https://www.facebook.com/Nicaraguan-Paradise-Tour-1036596596391808/?fref=ts" target="_blank"
               class="text-muted mr15" data-toggle="tooltip" title="Facebook">
                <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/NicaParadise" target="_blank" class="nica-left text-muted mr15" data-toggle="tooltip"
               title="Twitter">
                <i class="fa fa-twitter fa-2x"></i>
            </a>
            <a href="javascript:void(0);" class="text-muted mr15 nica-left" data-toggle="tooltip" title="WhatsApp">
                <i class="fa fa-whatsapp fa-2x"></i>
            </a>
            <a href="https://plus.google.com/104594360112416555502" target="_blank" class=" nica-left text-muted mr15"
               data-toggle="tooltip" title="Google+">
                <i class="fa fa-google-plus fa-2x"></i>
            </a>
            <a href="https://www.instagram.com/nicaparadise_tour/" target="_blank" class="nica-left text-muted mr15"
               data-toggle="tooltip" title="Instagram">
                <i class="fa fa-instagram fa-2x"></i>
            </a>
        </div>
        <div class="visible-sm visible-xs" style="margin-bottom:25px;"></div>
        <!--/ Address + Social -->
        <div class="col-md-4">
           <img src="http://nicaraguanparadisetour.com/assets/images/log.png" style="height: 250px;margin-top: 10px"/>
        </div>
    </div>
    <!--/ Newsletter -->
</div>
<!--/ row -->

<!-- bottom footer -->
<div class="container-fluid" style="background-image: url(/assets/background/1.png)">
    <br>
    <br>
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <!-- copyright -->
                <p class="nm text-muted">&copy; Copyright 2016 by
                    <a href="javascript:void(0);" class="text-white">
                        Nicaraguan Paradise Tours
                    </a>.
                    All Rights Reserved.
                </p>
                <!--/ copyright -->
            </div>
            <div class="col-sm-6 text-right hidden-xs">
                <a href="javascript:void(0);" class="text-muted">Developer and Designer</a>
                <span class="text-muted">&#8226;</span>
                <a href="https://www.facebook.com/luis.solorzanop.9" target="_blank" class="text-white">Luis David
                    Solorzano Paredes</a>
            </div>
        </div>
    </div>
    <!--/ container -->
</div>
<!--/ bottom footer -->
</div>
<!--/ END Template Footer -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header background-nica">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white">&times;</span>
                </button>
                <h1 class="modal-title" id="myModalLabel">
                    Welcome to Nicaragua!
                </h1>
            </div>
            <div class="modal-body">
                <h4> We are proud to introduce you Nicaraguan Paradise Tours,
                    a leading tour operator in Nicaragua, recognized in the
                    whole country as one of the best local tour operators which
                    provides tourism and business travel locally. Owned and
                    operated by 100% Nicaraguans professionals in the field,
                    in Nicaraguan Paradise Tours we specialize in selling holiday
                    packages to national and international tourist, as well as One
                    day tours and Half day tours in every region of the country.
                    Our company offers full service accommodations, transfers,
                    tours, and renting as well as organizing conferences.
                    Nicaraguan Paradise Tours is known for delivering professionalism,
                    quality and personalized attention to our clients 24 hours. We have
                    a wide selection of products and destinations, allowing us to provide
                    a first class service to our customers.</h4>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header background-nica">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white">&times;</span>
                </button>
                <h1 class="modal-title" id="myModalLabel">
                    We Had The Most Amazing Trip!
                </h1>
            </div>
            <div class="modal-body">
                <h4>
                    We just returned from Nicaragua and wanted to tell you that,
                    both tours we went on were amazing! Ash boarding in Cerro Negro
                    was an unforgettable experience, lot of FUN! and the visit to
                    Juan Venado Island was lovely as we were surrounded by nature
                    the whole time, our guide Danny was knowledgeable and passionate
                    to what he was doing, we really enjoyed Nicaragua and we’ll definitely
                    have to go back! Best regards, -Jenna Manders and Matthew Perez New York city, USA.</h4>
            </div>
        </div>
    </div>
</div>

{!! Html::script('/js/jquery.js') !!}
{!! Html::script('/js/bootstrap.js') !!}
{!! Html::script('/js/script.js') !!}
{!! Html::script('/js/vegas.min.js') !!}
{!! Html::script('/js/slider.js') !!}

</body>
</html>