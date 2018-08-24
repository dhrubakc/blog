<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class ContactusController extends Controller
{
      public function index()
    {
        $category_list=Category::all();
        return view('contactus.contactus_form',compact('category_list'));
    }

}
