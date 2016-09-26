
@extends('layouts.home')
@section('title')
    Welcome to Nicaraguan Paradise Tours
@endsection

@section('content')
<!--|Preloader|-->
<div id="preloader" class="preloader">
    <div class="preloader-inner">
        <div>
            <img src="assets/images/log.png" style="width: 90px;height: 90px"/>
        </div>
        <span class="fp-meta">Loading Nicaraguan...</span>
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

                        <h3 style="margin-top: -50px;font-size: 6em;text-shadow: 3px 3px 3px #001a5a;
                        font-family: 'Alex Brush', cursive;">
                            Nicaraguan Paradise Tours
                        </h3>
                        <p class="sub-title" style="margin-top: -29px;font-size: 2em;text-shadow: 3px 3px 3px #001a5a;
                        font-family: 'Alex Brush', cursive;">
                            Meeting your expectations...
                        </p>

                        <div class="btn-group smooth-loading">
                            <a class="btn btn-success" href="{!! url('/home') !!}">
                                <i class="fa fa-th-large"></i>
                                Explore More
                            </a>
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
@endsection