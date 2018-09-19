<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Introduction;

class IntroductionController extends Controller
{
     public function index()
    {
        $introduction_list=Introduction::all();
        return view('introduction.table',compact('introduction_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('introduction.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
        ]);


        
        $introduction= new Introduction;
        $introduction->title=$request->title;
        $introduction->description=$request->description;
       $result= $introduction->save();
       if ($result) {
            echo "result save sucessfully";
           return redirect('/introduction');
       }
       // else{ echo "error in result";}
       //  // echo 'im here';die();
       //  // var_dump(Input::all()); die();

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


        $introduction=introduction::findorfail($id);
        return view('introduction.edit_form',compact('introduction'));

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
         $introduction=Introduction::findorfail($id);
         $introduction->title=$request->title;
         $introduction->description=$request->description;
       $result= $introduction->update();
        if ($result) {
            echo "result update sucessfully";
           return redirect('/introduction');
       }
        //echo'im in update'; die();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $introduction=Introduction::findorfail($id);
        $introduction->delete();
        return redirect('/introduction');
    }
}
