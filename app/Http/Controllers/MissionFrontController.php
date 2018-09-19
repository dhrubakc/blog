<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MissionFront;
use App\Missionvission;

class MissionFrontController extends Controller
{
    public function index(){
    	$missionvission_list=Missionvission::all();
    	return view('missionvission.missionfront',compact('missionvission_list'));
    }
}
