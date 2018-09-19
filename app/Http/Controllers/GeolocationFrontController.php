<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\GeolocationFront;
use App\Geographicallocation;

class GeolocationFrontController extends Controller
{
     public function index(){
    	$geographicallocation_list=Geographicallocation::all();
    	return view('geographicallocation.geolocationfront',compact('geographicallocation_list'));
    }
}
