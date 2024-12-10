<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DvhSessionController extends Controller
{
    //#đọc dữ liệu từ session
    public function DvhGetSessionData(Request $request)
    {
        if($request->session()->has("K23CNT2-DinhVanHieu"))
        {
            echo $request->session()->get("K23CNT2-DinhVanHieu");
        }else{
            echo "<h2> không có dữ liệu trong session </h2>";
        }
    }
    //# ghi dữ liệu vào session
    public function DvhStoreSessionData(Request $request)
    {
        //Lưu
        $request->session()->put('K23CNT2-DinhVanHieu','K23CNT2 - Đinh Văn Hiếu - 2310900122');
        echo "<h2> dữ liệu đã được lưu vào session</h2>";
    }

    //#xoá dữ liệu trong session
    public function DvhDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT2-DinhVanHieu');
        echo "<h2> dữ liệu đã được xoá khỏi session </h2>";
    }
}
