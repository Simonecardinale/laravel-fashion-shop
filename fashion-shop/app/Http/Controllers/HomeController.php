<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        $data = ['saluto'=>'Ciao a Tutti'];
        return view('home', $data);
    }
    public function dress() {
        $data_vestiti = Dress::all();
        dd($data_vestiti);
        $data = ['shop_vestiti' => $data_vestiti];
        return view('vestiti', $data);
    }
}
