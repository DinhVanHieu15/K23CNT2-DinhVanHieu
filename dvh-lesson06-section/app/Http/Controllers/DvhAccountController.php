<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DvhAccountController extends Controller
{
    public function dvhLogin()
    {
        return view('dvh-login');
    }
    public function dvhloginSubmit(Request $request)
    {
        // Validation form
        $validation = $request->validate([
            'dvhemail' =>'required|email',
            'dvhpassword'=>'required|min:6'
        ]);
        // Lấy giá trị trên các điều khiển của form
        $dvhemail=$request->input('dvhemail');
        $dvhpassword=$request->input('dvhpassword');
        $dvhLoginSession = [
            'dvhemail'=>$dvhemail,
            'dvhpass'=>$dvhpassword
        ];
        if($dvhemail == "dvh@gmail.com" && $dvhpassword=="123456a@"){
            //lưu email
            $request->session()->put('K23CNT2-DinhVanHieu',$dvhemail);
            return redirect('/');
        }
        return redirect()->back()->with('dvh-error','lỗi đăng nhập');
    }
}
