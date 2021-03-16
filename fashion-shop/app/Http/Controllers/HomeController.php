<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = ['saluto'=>'Ciao a Tutti'];
        return view('home', $data);
    }
}
