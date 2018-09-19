<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\IntroFront;
use App\Introduction;


class IntroFrontController extends Controller
{
    public function index(){
    	$introduction_list=Introduction::all();
    	
    	return view('introduction.introfront',compact('introduction_list'));
    }
}
