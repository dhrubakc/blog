<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Result;
use App\ResultFront;

class ResultFrontController extends Controller
{
     public function index(){
    	$result_list=result::all();
    	return view('result.resultfront',compact('result_list'));
    }
}
