<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Geographicallocation;

class GeographicallocationController extends Controller
{
     public function index()
    {
        $geographicallocation_list=Geographicallocation::all();
        return view('geographicallocation.table',compact('geographicallocation_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('geographicallocation.form');

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


        
        $geographicallocation= new geographicallocation;
        $geographicallocation->title=$request->title;
        $geographicallocation->description=$request->description;
       $result= $geographicallocation->save();
       if ($result) {
            echo "result save sucessfully";
           return redirect('/geographicallocation');
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


        $geographicallocation=geographicallocation::findorfail($id);
        return view('geographicallocation.edit_form',compact('geographicallocation'));

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
         $geographicallocation=geographicallocation::findorfail($id);
         $geographicallocation->title=$request->title;
         $geographicallocation->description=$request->description;
       $result= $geographicallocation->update();
        if ($result) {
            echo "result update sucessfully";
           return redirect('/geographicallocation');
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
        $geographicallocation=geographicallocation::findorfail($id);
        $geographicallocation->delete();
        return redirect('/geographicallocation');
    }
}
