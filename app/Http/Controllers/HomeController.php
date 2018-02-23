<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $name = 'Slavo';

        $mySpecialValue = 42;

        return view('home', ['n1' => $name, 'n2' => 'kozar']);

//        return view('home')->with('n1', $name)->with('n2', 'kozar');
//
//        return view('home', compact(['name','mySpecialValue']));

        /*
         *
         * compact(['name','mySpecialValue'])
         *
         * ['name' => $name, 'mySpecialValue' => $mySpecialValue]
         *
         */




    }
}
