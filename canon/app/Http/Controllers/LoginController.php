<?php

namespace App\Http\Controllers;
use Request,Validator,DB;
use Redirect;
session_start();

class LoginController extends Controller
{
    public function login(){
        return view('login/login');
    }
    public function name(){
        $u_name=Request::input('u_name');
        if(preg_match('/^[1][358][0-9]{9}$/', $u_name)){
            $users = DB::table('users')->where('user_phone', $u_name)->first();
        }else if(preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $u_name)){
            $users = DB::table('users')->where('user_email',$u_name)->first();
        }
        if($users){
            return 1;
        }
    }
    public function name_pwd(){
        $u_name=Request::input('u_name');
        $u_pwd=Request::input('u_pwd');
        $users = DB::table('users')->select()
             ->where(['user_phone'=>$u_name,'user_pwd'=>$u_pwd])
             ->get();
        if($users){
            return 2;
        }
    }
//    public function name_deng(){
//        $u_name=$_POST['u_name'];
//        $u_pwd=$_POST['u_pwd'];
//        //$_SESSION['username']=$u_name;
//        if(preg_match('/^[1][358][0-9]{9}$/', $u_name)){
//            $arr=DB::table('users')
//                ->where('user_phone',"$u_name")
//                ->where('user_pwd',"$u_pwd")
//                ->get();
//        }else if(preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $u_name)){
//            $arr=DB::table('users')
//                ->where('user_email',"$u_name")
//                ->where('user_pwd',"$u_pwd")
//                ->get();
//        }
//        //print_r($arr);die;
//        if($arr){
//            $_SESSION['u_id']=$arr[0]['user_id'];
//            $_SESSION['username']=$arr[0]['user_name'];
//            return 1;
//        }
//    }
    // public function email_deng(){
    //     $u_name=$_POST['u_name'];
    //     $u_pwd=$_POST['u_pwd'];
    //     $_SESSION['username']=$u_name;
    //     $arr=DB::table('users')->where('user_email',"$u_name")->where('user_pwd',"$u_pwd")->get();
    //     if($arr){
    //     $_SESSION['u_id']=$arr[0]['user_id'];
    //         echo 5;
    //     }else{
    //         echo 6;
    //     }
    // }

    public function name_deng(){
        $u_name=Request::input('u_name');
        $u_pwd=Request::input('u_pwd');
        //验证是手机登录还是邮箱登陆
        if(preg_match('/^[1][358][0-9]{9}$/', $u_name)){
            $users=DB::table('users')
                ->where('user_phone',"$u_name")
                ->get();
            if($u_pwd == $users[0]['user_pwd']){
                $_SESSION['u_id']=$users[0]['user_id'];
                $_SESSION['username']=$users[0]['user_name'];
                return 1;
            }
        }else if(preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $u_name)){
            $users=DB::table('users')
                ->where('user_email',"$u_name")
                ->get();
            if($u_pwd == $users[0]['user_pwd']){
                $_SESSION['u_id']=$users[0]['user_id'];
                $_SESSION['username']=$users[0]['user_name'];
                return 1;
            }
        }
    }

    //注册
    public function register(){
        return view('login/register');
    }
    public function reg(){
//	echo "ssssss";die;
        //dd($_POST);
        $name=$_POST['username'];
        $pwd=$_POST['password'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $a_name=DB::table('users')->where('user_name',"$name")->first();
        if($a_name){
            echo "<script>alert('用户名已存在');location.href='index'</script>";
        }else{

            if(DB::table('users')->where('user_email',"$email")->first()){

                echo "<script>alert('邮箱已存在');location.href='index'</script>";
            }else{
                if(DB::table('users')->where('user_phone',"$phone")->first()){
                    echo "<script>alert('手机号已存在');location.href='index'</script>";
                }else{

                $arr=DB::insert("insert into users(user_name,user_pwd,user_email,user_phone) values('$name','$pwd','$email','$phone');");
                    if($arr){
			$_SESSION['username']=$name;
                        echo "<script>alert('注册成功');location.href='index'</script>";
                    }else{
                        echo "<script>alert('注册失败');location.href='index'</script>";
                    }



                }
            }
        }


    }

    public function out(){
        unset($_SESSION['username']);
        echo "<script>alert('退出成功');location.href='index'</script>";
    }




 }
