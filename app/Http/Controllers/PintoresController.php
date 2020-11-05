<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PintoresController extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function index(){
        return view('leonardo');
    }

    public function index1(){
        return view('vicent');
    }

    public function index2(){
        return view('tamara');
    }

    public function index3(){
        return view('jackson');
    }
}
