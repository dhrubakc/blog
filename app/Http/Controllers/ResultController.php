<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\result;
use Input;

class ResultController extends Controller
{
   public function index(){
    	$result_list=Result::get();
    	return view('result.table',compact('result_list'));
    }
    public function create(){ 
    	return view('result.form');
    }
     public function store(Request $request)
    {  
             $image_name=$this->upload_image();
        $result= new result;
        $result->title=$request->title;
        $result->image=$image_name; 
       $result= $result->save();
       if ($result) {
            echo "result save sucessfully";
           return redirect('/result');
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
    //     result::create($input);


    // 	return back()
    // 		->with('success','Image Uploaded successfully.');
    // // }
}

