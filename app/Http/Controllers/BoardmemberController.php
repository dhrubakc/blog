<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Boardmember;


class BoardmemberController extends Controller
{
      public function index()
    {
        $boardmember_list=Boardmember::all();
        return view('boardmember.table',compact('boardmember_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boardmember.form');

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


        
        $boardmember= new boardmember;
        $boardmember->title=$request->title;
        $boardmember->description=$request->description;
       $result= $boardmember->save();
       if ($result) {
            echo "result save sucessfully";
           return redirect('/boardmember');
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


        $boardmember=Boardmember::findorfail($id);
        return view('boardmember.edit_form',compact('boardmember'));

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
         $boardmember=boardmember::findorfail($id);
         $boardmember->title=$request->title;
         $boardmember->description=$request->description;
       $result= $boardmember->update();
        if ($result) {
            echo "result update sucessfully";
           return redirect('/boardmember');
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
        $boardmember=boardmember::findorfail($id);
        $boardmember->delete();
        return redirect('/boardmember');
    }

}
