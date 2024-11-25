<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DvhAccountController extends Controller
{
    //
    public function index (){
        return "<h1> welcome to, Dinh Van Hieu - Controller </h1>";
    }
    // create form
    public function create(){
        return view('dvh-account-create');
    }
}
