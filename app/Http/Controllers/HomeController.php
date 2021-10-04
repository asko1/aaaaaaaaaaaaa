<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $array= ['apple', '<h1>orange</h1>', 'pear'];
        return view('index', compact('array'));

    }

    public function posts($id) {
        echo $id;
    }
}
