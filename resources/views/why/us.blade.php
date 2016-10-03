<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 10-03-16
 * Time: 11:37 AM
 */
?>

@extends('layouts.app')
@section('title') Why Us @endsection
@section('slider')
    <div class="splash vegas-slide" style="width: 100%;height: 75%;"></div>
@endsection
@section('content')
    <div class="container-fluid border-b welcome-home">
        <h1 class="center">Why Us</h1>
        <br>
    </div>

    <div class="container">
        <div class="row col-md-offset-3 col-lg-7 col-md-7">
            <ul class="nav nav-tabs center">
                <li class="active"><a data-toggle="tab" href="#menu">About Our Company!</a></li>
                <li><a data-toggle="tab" href="#menu1">About Our Staff!</a></li>
                <li><a data-toggle="tab" href="#menu2">About Our Tour!</a></li>
                <li><a data-toggle="tab" href="#menu3">To Conclude!</a></li>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div id="menu" class="tab-pane fade in active">
            <h3 class="center nica-orange">About Our Company!</h3>
            <p class="center nica-whyus">
                We are a 100% Nicaraguan tour operator which specializes
                in selling holiday Packages to international and national
                tourists in Nicaragua. Located in the heart of the colonial
                city of Leon-Nicaragua in <strong>Nicaraguan Paradise Tours</strong>
                 we strongly believe to meeting your expectations when discovering our
                 wonderful country.
            </p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3 class="center nica-orange">About Our Staff!</h3>
            <p class="center nica-whyus">
                Our Company is managed and operated by bilingual local experts
                who have worked and lived in different regions of Nicaragua their
                whole life. The majority of our staff has worked as <strong>Tour
                Leaders and Local freelance guides</strong> who have given
                prestige to most of the tour companies in the country which they
                fully enjoy doing.
            </p>
            <br>
            <p class="center nica-whyus">
                After working for many years in the tourism field we can proudly
                say that our staff has the knowledge, experience, respect, devotion
                and prestige needed in the field. <strong>What does this mean to you?</strong>
            </p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3 class="center nica-orange">About Our Tours!</h3>
            <p class="center nica-whyus ">
                All of the trips are designed and planned by ourselves and we know
                what our clients really need and deserve. As we've been working with
                other tour operators we can easily tell when a tour was good or average
                which is an advantage for our future clients.
            </p>
            <br>
            <p class="center nica-whyus ">
                On the other hand, we offer you all the possible options of making
                tourism in Nicaragua as our country count upon with a natural,
                cultural and historical unique heritage in the world.
            </p>
            <br>
            <p class="center nica-whyus ">
                Everyone has different priorities, time and budget and for this reason
                we have divided our trips in Half-day and One day tours among with <strong>Holidays Packages</strong>
                where you can find a wide range of options such as: Ecotourism,
                classic tours, hiking, culture, history and beaches and of course our clients
                are always free to customize their own tours the way they find it the best.
            </p>
        </div>
        <div id="menu3" class="tab-pane fade">
            <h3 class="center nica-orange">To Conclude!</h3>
            <p class="center nica-whyus">
                In Nicaraguan Paradise Tours we firmly believe in being the local experts
                and present our clients the best options during their vacations in our
                wonderful land of Lakes and Volcanoes.
                Join us and learn with the Best!
            </p>
        </div>
    </div>
@endsection
