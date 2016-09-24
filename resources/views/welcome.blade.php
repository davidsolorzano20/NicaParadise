<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Nicaraguan Paradise Tours</title>

    {!! Html::style('assets/css/css.css') !!}
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/vegas.min.css"') !!}
    {!! Html::style('assets/css/reImageGrid.css') !!}
    {!! Html::style('assets/css/magnific-popup.css') !!}
    {!! Html::style('assets/css/owl.carousel.css') !!}
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/style.css') !!}
    {!! Html::style('assets/images/favicon.ico') !!}
    {!! Html::script('assets/js/html5shiv.min.js') !!}
    {!! Html::script('assets/js/respond.min.js') !!}
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
                    <div class="block-center col-md-8 text-center">
                        <a class="site-logo smooth-loading-link" href="{!! url('/') !!}">
                            <img src="assets/images/log.png" alt="assets" style="width: 190px;height: 190px">
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

{!! Html::script('assets/js/jquery.min.js') !!}
{!! Html::script('assets/js/modernizr.custom.26633.js') !!}
{!! Html::script('assets/js/jquery.fitvids.js') !!}
{!! Html::script('assets/js/vegas.min.js') !!}
{!! Html::script('assets/js/EasePack.min.js') !!}
{!! Html::script('assets/js/TweenLite.min.js') !!}
{!! Html::script('assets/js/jquery.gridrotator.js') !!}
{!! Html::script('assets/js/jquery.magnific-popup.min.js') !!}
{!! Html::script('assets/js/owl.carousel.min.js') !!}
{!! Html::script('assets/js/bootstrap.min.js') !!}
{!! Html::script('assets/js/animatedBackground.js') !!}
{!! Html::script('assets/js/init.js') !!}

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
