<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\chairmanmessage;

class ContactusController extends Controller
{
      public function index()
    {
        $chairmanmessage_list=Chairmanmessage::all();
        return view('contactus.contactus_form',compact('chairmanmessage_list'));
    }

}
