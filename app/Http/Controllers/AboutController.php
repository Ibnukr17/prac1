<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        echo 'Ibnu Khalis Rabbani <br>';
        echo '2041720159';
    }

    public function index(){
        return view('page.about');
    }
}
