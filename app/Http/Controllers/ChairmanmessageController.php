<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\frontend;
use App\Chairmanmessage;

class ChairmanMessageController extends Controller
{
    
    public function index()
    {
        $chairmanmessage_list=Chairmanmessage::all();
        return view('chairmanmessage.table',compact('chairmanmessage_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chairmanmessage.form');

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


        
        $chairmanmessage= new chairmanmessage;
        $chairmanmessage->title=$request->title;
        $chairmanmessage->description=$request->description;
       $result= $chairmanmessage->save();
       if ($result) {
            echo "result save sucessfully";
           return redirect('/chairmanmessage');
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


        $chairmanmessage=chairmanmessage::findorfail($id);
        return view('chairmanmessage.edit_form',compact('chairmanmessage'));

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
         $chairmanmessage=chairmanmessage::findorfail($id);
         $chairmanmessage->title=$request->title;
         $chairmanmessage->description=$request->description;
       $result= $chairmanmessage->update();
        if ($result) {
            echo "result update sucessfully";
           return redirect('/chairmanmessage');
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
        $chairmanmessage=chairmanmessage::findorfail($id);
        $chairmanmessage->delete();
        return redirect('/chairmanmessage');
    }
}
