<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gallery;
use App\GalleryFront;

class GalleryFrontController extends Controller
{
    public function index(){
    	$gallery_list=Gallery::all();
    	
    	return view('gallery.galleryfront',compact('gallery_list'));
    }
}
