<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class BlogController extends Controller
{
    public function index(){

        return view('blog.index');
//        return view('blog/index');
    }


    public function honza($id){


        return 'showing article ' . $id;


    }
}
