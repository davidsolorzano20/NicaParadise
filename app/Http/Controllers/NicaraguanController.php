<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NicaraguanController extends Controller {
    public function Index() {
      return view('welcome');
    }

    public function Home() {
      return view('home.home');
    }
}
