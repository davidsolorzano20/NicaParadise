<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Luis Solorzano - Ing.Telematica">
    <meta name="description" content="Nicaraguan, Paradise, Tours">
    <meta name="keywords" content="nicaraguan, paradise, ours">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/images/log.png">
    <link rel="icon" href="assets/images/log.png">

    <title>Welcome to Nicaraguan Paradise Tours</title>

    {!! Html::style('/css/style.css') !!}

    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
</head>

<body class="home">
<!--|Preloader|-->
<div id="preloader" class="preloader">
    <div class="preloader-inner">
        <div>
            <div></div>
        </div>
        <span class="fp-meta">Loading...</span>
    </div>
</div>
<!--|End Preloader|-->

<!--|Wrapper|-->
<div class="wrapper vegas-slide">
    <div class="wrapper-inner">
        <div class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="block-center col-md-12 text-center">
                        <a class="site-logo smooth-loading-link" href="{!! url('/') !!}">
                            <img src="assets/images/log.png" alt="Focus" style="width: 190px;height: 190px">
                        </a>

                        <h3 class="intro-title" style="margin-top: -50px;font-family: Lato">NICARAGUAN PARADISE TOURS</h3>
                        <p class="sub-title" style="margin-top: -25px;">Meeting your expectations...</p>

                        <div class="btn-group smooth-loading">
                            <a class="btn btn-success" href="#id"><i class="fa fa-th-large"></i> Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--|Footer|-->
        <footer class="footer clearfix">
            <div class="slide-controller">
                <a id="prev" href="#"><span class="screen-reader-text">Previous</span><i class="fa fa-backward"></i></a>
                <a id="toggle" href="#"><span class="screen-reader-text">Play</span><i class="fa fa-play"></i> <i class="fa fa-pause"></i></a>
                <a id="next" href="#"><span class="screen-reader-text">Next</span><i class="fa fa-forward"></i></a>
            </div>
        </footer> <!--|End Footer|-->
    </div>
</div> <!--|End Wrapper|-->

<!--||Javascript||-->
<!--|Jquery|-->
<script src="assets/js/jquery.min.js"></script>
<!--|Mordernizer Custom Js|-->
<script type="text/javascript" src="assets/js/modernizr.custom.26633.js"></script>
<!--|Google Map Api|-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<!--|Fitvids|-->
<script src="assets/js/jquery.fitvids.js"></script>
<!--|Vegas|-->
<script src="assets/js/vegas.min.js"></script>
<!--|EasePack|-->
<script src="assets/js/EasePack.min.js"></script>
<!--|TweenLite|-->
<script src="assets/js/TweenLite.min.js"></script>
<!--|Gird Rotator|-->
<script src="assets/js/jquery.gridrotator.js"></script>
<!--|Magnific Popup|-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--|Owl Carousel|-->
<script src="assets/js/owl.carousel.min.js"></script>
<!--|Bootstrap|-->
<script src="assets/js/bootstrap.min.js"></script>
<!--|Animated Background|-->
<script src="assets/js/animatedBackground.js"></script>
<!--|Site Custom Js|-->
<script src="assets/js/init.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64368864-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
