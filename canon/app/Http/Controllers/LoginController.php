<?php

namespace App\Http\Controllers;
use Request,Validator,DB;
use Redirect;
use open51094;
session_start();

class LoginController extends Controller
{
    public function login(){
        return view('login/login');
    }
    //登录
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
    //注册验证
    public function reg(){
        $name=Request::input('username');
        $pwd=Request::input('password');
        $email=Request::input('email');
        $phone=Request::input('phone');
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

    //QQ登录
    public function sign(){
        include 'open51094.class.php';
        $open = new open51094();
        $code = Request::get('code');
        $qq = $open->me($code);
        //
        $qq_name=$qq['name'];
        $qq_uniq=$qq['uniq'];
        //
        $data = DB::table('users')->where('user_openid',$qq_uniq)->first();
        //
        if ($data) {
            $qq_name = $data['user_nickname'];
            $user_id = $data['user_id'];
            $_SESSION['u_id']=$user_id;
            $_SESSION['username']=$qq_name;
        }else{
            $res = DB::table('users')->insert(['user_nickname'=> $qq_name,'user_openid'=>$qq_uniq]);
            $_SESSION['u_id']=$user_id;
            $_SESSION['username']=$qq_name;
        }
        return redirect('/index');
    }
    //微博登陆
    public function weibo(){
        include 'open51094.class.php';
        $open = new open51094();
        $code = Request::get('code');
        $data = $open->me($code);
        //
        $weibo_uniq = $data['uniq'];
        $weibo_name = $data['name'];
        //
        $data = DB::table('users')->where('user_openid',$weibo_uniq)->first();
        //
        if ($data) {
            $weibo_name = $data['user_nickname'];
            $user_id = $data['user_id'];
            $_SESSION['u_id'] = $user_id;
            $_SESSION['username'] = $weibo_name;
        }else{
            //$name="宝典".rand(10000,999);
            $res = DB::table('users')->insert(['user_nickname'=> $weibo_name,'user_openid'=>$weibo_uniq]);
            $_SESSION['username'] = $weibo_name;
        }
        return redirect('/index');   
    }


 }
