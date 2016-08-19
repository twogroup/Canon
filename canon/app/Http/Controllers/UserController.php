<?php

namespace App\Http\Controllers;
use DB,Request,Validator;

class UserController extends Controller
{
    //个人资料
    public function setprofile(){
        $pro = Request::input('pro');
        if ($pro=='') {
            $address = DB::table('region')
                    ->where('parent_id' , '1')
                    ->get();

            $zhiwei = DB::table('zhiwei')->get();
            return view('user/setprofile',['address'=>$address,'zhiwei'=>$zhiwei]);
        }else{
            $address = DB::table('region')
                    ->where('parent_id' , $pro)
                    ->get();
            //print_r($address);
            //return view('user/setprofile',['address'=>$address]);
            //header('Content-type: application/json');
            return json_encode($address);        
        }
        
        
    }
    //头像设置
    public function setavator(){
        return view('user/setavator');
    }
    //手机设置
    public function setphone(){
        return view('user/setphone');
    }
    //邮箱验证
    public function setverifyemail(){
        return view('user/setverifyemail');
    }
    //修改密码
    public function setresetpwd(){
        return view('user/setresetpwd');
    }
    //绑定账号
    public function setbindsns(){
        return view('user/setbindsns');
    }
}