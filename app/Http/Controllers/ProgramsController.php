<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Programs;

class ProgramsController extends Controller
{
   public function index()
    {
        $programs_list=Programs::all();
        return view('programs.table',compact('programs_list'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$category_list=Category::lists('title','id');
        return view('programs.form',compact('category_list'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
              
        $programs= new Programs;
        $programs->title=$request->title;
        $programs->description=$request->description;
        $programs->category_id=$request->category_id;
       $result= $programs->save();
       if ($result) {
            echo "result save sucessfully";
           return redirect('/programs');
       }
       else{ echo "error in result";}
        // echo 'im here';die();
        // var_dump(Input::all()); die();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{   

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
     {
         $programs=programs::findorfail($id);
         $programs->title=$request->title;
         $programs->description=$request->description;
       $result= $programs->update();
        if ($result) {
            echo "result update sucessfully";
           return redirect('/programs');
       }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
         $programs=Programs::findorfail($id);
        $programs->delete();
        return redirect('/programs');
    }
}
