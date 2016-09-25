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

    <title>@yield('title')</title>

    {!! Html::style('/css/style.css') !!}

    <script src="https://use.fontawesome.com/216d67c8bd.js"></script>

</head>
<body id="home">

<div id="loading-homepage">
    <img src=""/>
</div>

<div class="navbar navbar-default navbar-fixed-top border-bottom">
    <div class="container">
        <div class="navbar-header">
            <a href="{!! url('/home') !!}" class="navbar-brand"><img src="assets/images/npt.png"></a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#">
                        <i class="fa fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-info-circle icons text-teal"></i>
                        Why Us
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-sun-o icons text-warnin"></i>
                        Tour
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-shopping-bag icons text-succes"></i>
                        Packages
                    </a>
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
                        Photo Gallery
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


<div class="splash vegas-slide" style="width: 100%;height: 75%;">
    <footer class="footer clearfix">
        <div class="slide-controller">
            {{-- <a id="prev" href="#">
                 <i class="fa fa-angle-left" style="color:white;font-size: 95px;margin-top: 160px;margin-left: 45px"></i>
             </a>
             <a id="next" href="#">
                 <i class="fa fa-angle-right" style="color:white;font-size: 95px;float: right;margin-top: 160px;margin-right: 45px"></i>
             </a>--}}
        </div>
    </footer>
</div>

<div class="container-fluid  welcome-home">
    <h1 class="center">Welcome to Nicaraguan Paradise Tours</h1>
    <br>
</div>

<div class="container-fluid">
    <div class="col-lg-6">
        <div class="row">
            <h2 class="color-nica col-md-offset-1 col-lg-offset-1 border-text-nica-1">
                We Had The Most Amazing Trip!
            </h2>
            <div class="col-md-12 center justify">
                <h4 class="text-nica-1">
                    We just returned from Nicaragua and wanted to tell you that,
                    both tours we went on were amazing! Ash boarding in Cerro Negro
                    was an unforgettable experience, lot of FUN! and the visit to
                    Juan Venado Island was lovely as we were surrounded by nature
                    the whole time.
                </h4>
                <br>
                <button class="btn btn-primary btn-sm col-md-offset-5" data-toggle="modal" data-target="#myModal2">Read
                    More...
                </button>
                <br><br>
                <br><br>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row">
            <h2 class="color-nica col-md-offset-1 col-lg-offset-1 border-text-nica-2">
                Welcome to Nicaragua!
            </h2>
            <div class="col-md-12 center justify">
                <h4 class="text-nica-1">
                    We are proud to introduce you Nicaraguan Paradise Tours,
                    a leading tour operator in Nicaragua, recognized in the whole
                    country as one of the best local tour operators which provides
                    tourism and business travel locally. Owned and operated by 100%
                    Nicaraguans professionals in the field.<br><br>
                    <button type="button" class="btn btn-primary btn-sm col-md-offset-5" data-toggle="modal"
                            data-target="#myModal">
                        Read More...
                    </button>
                    <br><br>
                    <br><br>
                </h4>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid welcome-to-nica" style="background-image: url(/assets/images/nica/4.jpg)">

</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4"></div>
    </div>

    <div class="row">
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4"></div>
    </div>
</div>

{{--


<div class="container">
    <footer>
        <div class="row">
            <div class="col-lg-12">

                <ul class="list-unstyled">
                    <li class="pull-right"><a href="#top">Back to top</a></li>
                    <li><a href="http://news.bootswatch.com"
                           onclick="pageTracker._link(this.href); return false;">Blog</a></li>
                    <li><a href="http://feeds.feedburner.com/bootswatch">RSS</a></li>
                    <li><a href="https://twitter.com/bootswatch">Twitter</a></li>
                    <li><a href="https://github.com/thomaspark/bootswatch/">GitHub</a></li>
                    <li><a href="./help/#api">API</a></li>
                    <li><a href="./help/#support">Support</a></li>
                </ul>
                <p>Made by <a href="http://thomaspark.co" rel="nofollow">Thomas Park</a>. Contact him at <a
                            href="mailto:thomas@bootswatch.com">thomas@bootswatch.com</a>.</p>
                <p>Code released under the <a href="https://github.com/thomaspark/bootswatch/blob/gh-pages/LICENSE">MIT
                        License</a>.</p>
                <p>Based on <a href="http://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a
                            href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts
                    from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>

            </div>
        </div>

    </footer>


</div>--}}


// Mdales

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