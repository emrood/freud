<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
//        return view('frontend.index');
        return redirect()->to('login');
    }

    public function getSample(){
        return view('frontend.sample');
    }
}
