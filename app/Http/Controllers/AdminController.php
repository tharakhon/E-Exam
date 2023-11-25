<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $blogs=[
            [
                'fullname'=>"นาย ก",
                'Leavetype'=>"ลาป่วย",
                'status'=>true, 
            ],
            [
                'fullname'=>"นาง ข",
                'Leavetype'=>"ลาป่วย",
                'status'=>false, 
            ],
        ];
    return view('layout',compact('blogs'));
    }

    function create(){
        return view('welcome');
    }

    function insert(Request $request){
        $request->validate(
            [
            'fullname'=>'required',
            'phone'=>'required',
            'Leavetype'=>'required',
            'vacation'=>'required',
            'DateTo'=>'required',
            ],
            [
                'fullname.required'=>'กรุณาป้อนชื่อของคุณ',
                'phone.required'=>'กรุณาป้อนเบอร์โทรศัพท์ของคุณ',
                'Leavetype.required'=>'กรุณาป้อนประเภทการลาของคุณ',
                'vacation.required'=>'กรุณาป้อนสาเหตุการลาของคุณ',
                'DateTo.required'=>'กรุณาป้อนวันที่ขอลา - ถึงวันที่ของคุณ',
                
            ]
        );
        return view('welcome');
    }
}
