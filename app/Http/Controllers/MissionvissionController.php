<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Missionvission;

class MissionvissionController extends Controller
{
     public function index()
    {
        $missionvission_list=missionvission::all();
        return view('missionvission.table',compact('missionvission_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('missionvission.form');

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


        
        $missionvission= new missionvission;
        $missionvission->title=$request->title;
        $missionvission->description=$request->description;
       $result= $missionvission->save();
       if ($result) {
            echo "result save sucessfully";
           return redirect('/missionvission');
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


        $missionvission=missionvission::findorfail($id);
        return view('missionvission.edit_form',compact('missionvission'));

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
         $missionvission=Missionvission::findorfail($id);
         $missionvission->title=$request->title;
         $missionvission->description=$request->description;
       $result= $missionvission->update();
        if ($result) {
            echo "result update sucessfully";
           return redirect('/missionvission');
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
        $missionvission=Missionvission::findorfail($id);
        $missionvission->delete();
        return redirect('/missionvission');
    }
}
