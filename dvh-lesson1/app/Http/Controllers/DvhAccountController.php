<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    // action: return view and data
    public function showData()
    {
        // Trả về view có tên account-show trong thư mục \\resources\view\account-show.blade.php
        $data = array('231090012','DinhVanHieu');
        return view('dvh-account-show',compact('data'));
    }
    //account-list
    public function List(){
        //list
        $data = array(
            ["id"=>1,"UserName"=>"DinhHieu","Password"=>"12345@a","FullNam"=>"Đinh Văn Hiếu"],
            ["id"=>2,"UserName"=>"ThuUyen","Password"=>"12345@h","FullNam"=>"Lê Thu Uyên"]
        );
        //trả về view và data
        return view('dvh-account-list',compact('data'));
    }
    //get database
    public function dvhgetaccount()
    {
        $data = DB::table('dvh_lesson1_db')->get();
        return view('dvh-account-getall',compact('data'));
    }

}


