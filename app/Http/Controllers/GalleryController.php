<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gallery;
use Input;

class GalleryController extends Controller
{
    public function index(){
    	$gallery_list=Gallery::get();
    	return view('gallery.table',compact('gallery_list'));
    }
    public function create(){ 
    	return view('gallery.form');
    }
     public function store(Request $request)
    {  
             $image_name=$this->upload_image();
        $gallery= new Gallery;
        $gallery->title=$request->title;
        $gallery->image=$image_name; 
       $result= $gallery->save();
       if ($result) {
            echo "result save sucessfully";
           return redirect('/gallery');
       }
        else{ echo "error in result";}
      

    }

    public function upload_image(){
    	$file=Input::file('image');
    	$name=$file->getClientOriginalName();
    	$file->move(public_path().'/uploads',$name);
    	return $name;
    }
    //  public function upload(Request $request)
    // {
    // 	$this->validate($request, [
    // 		'title' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);


    //     $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
    //     $request->image->move(public_path('images'), $input['image']);


    //     $input['title'] = $request->title;
    //     Gallery::create($input);


    // 	return back()
    // 		->with('success','Image Uploaded successfully.');
    // // }
}
