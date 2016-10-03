<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 09-24-16
 * Time: 05:26 PM
 */ ?>
@extends('layouts.app')
@section('slider')
    <div class="splash vegas-slide" style="width: 100%;height: 75%;"></div>
@endsection
@section('title') Home @endsection
@section('content')
    <div class="container-fluid  welcome-home">
        <h1 class="center">Welcome to Nicaraguan Paradise Tours</h1>
        <br>
    </div>

    <div class="container-fluid nica-container-fluid">
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
                    <button class="btn btn-primary btn-sm col-md-offset-5" data-toggle="modal" data-target="#myModal2">
                        Read
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

    <div class="container-fluid welcome-to-nica" id="lluvia" style="background-image: url(/assets/images/nica/4.jpg)">
        <h1 class="discover-nica">Discover the beauty of Nicaragua</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="center">
                    <img src="/img-homepage/1.jpg" class="img-circle img-homepage"/>
                </div>
                <div class="center title-img-homepage">City Tour Le&oacute;n</div>
                <div class="center justify body-img-homepage">
                    If you are always eager to known the History, Culture and Traditions
                    of the town you're visiting, Welcome to Leon City.
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="center">
                    <img src="/img-homepage/2.jpg" class="img-circle img-homepage"/>
                </div>
                <div class="center title-img-homepage">Ruins of Le&oacute;n Viejo</div>
                <div class="center justify body-img-homepage">
                    Join us learn with us about one. Of the few UNESCO sites in Nicaragua “ León Viejo ”
                    (old León).
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="center">
                    <img src="/img-homepage/3.jpg" class="img-circle img-homepage"/>
                </div>
                <div class="center title-img-homepage">Juan Venado Nature Reserve</div>
                <div class="center justify body-img-homepage">
                    If you consider yourself a nature lover this is the ideal tour for you.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="center">
                    <img src="/img-homepage/6.jpg" class="img-circle img-homepage"/>
                </div>
                <div class="center title-img-homepage">Volcan T&eacute;lica!</div>
                <div class="center justify body-img-homepage">
                    Telica Volcano will guaranteed yoy one of the most amazing views
                    from the top, not only for the impressive crater of 700 mts diameters.
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="center">
                    <img src="/img-homepage/4.jpg" class="img-circle img-homepage"/>
                </div>
                <div class="center title-img-homepage">El Hoyo Volcano!</div>
                <div class="center justify body-img-homepage">
                    If looking for not such an easy like with a really worthy view
                    of Nicaragua? Welcome to Hoyo Volcano.
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="center">
                    <img src="/img-homepage/5.jpg" class="img-circle img-homepage"/>
                </div>
                <div class="center title-img-homepage">San Jacinto Boiling mud!</div>
                <div class="center justify body-img-homepage">
                    Experience a unique phenomenan in Nicaragua related to the
                    volcanic activities. Welcome to San Jacinto..
                </div>
            </div>
        </div>
        <br><br>
    </div>

    <div class="container-fluid welcome-to-nica" id="lluvia" style="background-image: url(/assets/images/nica/1.jpg)">
        <h1 class="adventure-nica">Maximum Adventure</h1>
    </div>

    <div class="container-fluid  welcome-home2" style="background: url(assets/background/background.png)">
        <h1 class="center">Selfies</h1>
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <img src="/selfies/1.jpg" class="img-thumbnail"/>
            </div>
            <div class="col-md-3 col-lg-3">
                <img src="/selfies/2.jpg" class="img-thumbnail"/>
            </div>
            <div class="col-md-3 col-lg-3">
                <img src="/selfies/3.jpg" class="img-thumbnail"/>
            </div>
            <div class="col-md-3 col-lg-3">
                <img src="/selfies/4.jpg" class="img-thumbnail"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <img src="/selfies/5.jpg" class="img-thumbnail"/>
            </div>
            <div class="col-md-3 col-lg-3">
                <img src="/selfies/6.jpg" class="img-thumbnail"/>
            </div>
            <div class="col-md-3 col-lg-3">
                <img src="/selfies/7.jpg" class="img-thumbnail"/>
            </div>
            <div class="col-md-3 col-lg-3">
                <img src="/selfies/8.jpg" class="img-thumbnail"/>
            </div>
        </div>

        <br>
        <br>
        <br>
    </div>
@endsection
