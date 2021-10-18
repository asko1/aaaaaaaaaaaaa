<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('index', compact('posts'));

    }

    public function posts($id) {
        echo $id;
    }
}
