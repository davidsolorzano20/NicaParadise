<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NicaraguanController extends Controller {
    public function Index() {
      return view('welcome.welcome');
    }

    public function Home() {
      return view('home.home');
    }
    public function WhyUs() {
      return view('why.us');
    }
    public function CerroNegro() {
      return view('why.us');
    }
}
