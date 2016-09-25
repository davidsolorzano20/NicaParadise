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
<body id="home" style="background-image: url(assets/background/background)">

<div id="loading-homepage">
    <img src=""/>
</div>

<div class="navbar navbar-default navbar-fixed-top">
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

<div class="container">

</div>


<div class="container">
  {{--  <footer>
        <div class="row">
            <div class="col-lg-12">

                <ul class="list-unstyled">
                    <li class="pull-right"><a href="#top">Back to top</a></li>
                    <li><a href="http://news.bootswatch.com" onclick="pageTracker._link(this.href); return false;">Blog</a></li>
                    <li><a href="http://feeds.feedburner.com/bootswatch">RSS</a></li>
                    <li><a href="https://twitter.com/bootswatch">Twitter</a></li>
                    <li><a href="https://github.com/thomaspark/bootswatch/">GitHub</a></li>
                    <li><a href="./help/#api">API</a></li>
                    <li><a href="./help/#support">Support</a></li>
                </ul>
                <p>Made by <a href="http://thomaspark.co" rel="nofollow">Thomas Park</a>. Contact him at <a href="mailto:thomas@bootswatch.com">thomas@bootswatch.com</a>.</p>
                <p>Code released under the <a href="https://github.com/thomaspark/bootswatch/blob/gh-pages/LICENSE">MIT License</a>.</p>
                <p>Based on <a href="http://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>

            </div>
        </div>

    </footer>
--}}

</div>

{!! Html::script('/js/jquery.js') !!}
{!! Html::script('/js/bootstrap.js') !!}
{!! Html::script('/js/script.js') !!}
{!! Html::script('/js/vegas.min.js') !!}
{!! Html::script('/js/slider.js') !!}

</body>
</html>