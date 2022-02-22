<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo 'Hi, Welcom To Laravel';
    }

    public function about(){
        echo 'Ibnu Khalis Rabbani <br>';
        echo '2041720159';
    }

    public function articles($id){
        echo 'This is Article Pages with ID: ' .$id;
    }
}
