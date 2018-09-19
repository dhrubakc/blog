<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BoardmemberFront;
use App\Boardmember;

class BoardmemberFrontController extends Controller
{
    public function index(){
    	$boardmember_list=Boardmember::all();
    	return view('boardmember.boardmemberfront',compact('boardmember_list'));
    }
}
