<?php

namespace App\Http\Controllers;
use Request,Validator,DB;
use Session;

/*
*  方法模块
*  展示文章
*   
*/
class ArticleController extends Controller
{
    /*
    *   文章最新
    */
    public function article(){
        $at_type=DB::table('ar_type')->get();
        $article = DB::table('article')
                ->leftJoin('ar_type' , 'article.a_type' , '=' , 'ar_type.at_id')
                ->leftJoin('a_lei' , 'article.a_lei' , '=' , 'a_lei.al_id')
                ->orderBy('a_id' , 'desc')
                ->paginate(5);
        if(empty(Session::get('username'))){
            $username=0;
        }else{
            $username=Session::get('username');
        }
        return view('article/article',['at_type'=>$at_type,'article'=>$article]);
    }
    
    /**
     * 点击写文章
     * [publish description]
     * @return [type] [description]
     */
    public function publish(){
        //判断session是否为空 开启session 
        if(!isset($_SESSION)){
            session_start();
            }
        header('Content-Type: text/html; charset=utf-8');
        //根据session判断登陆
        if(empty($_SESSION['username'])){
            echo "<script>alert('请先登录'),location.href='index'</script>";die;
            }else{


            $at_type=DB::table('ar_type')->get();
            //print_r($at_type);die;
            $a_lei=DB::table('a_lei')->get();
            return view('article/publish',['ar_type'=>$at_type,'a_lei'=>$a_lei]);
            }
    }
    
    
    public function add(){
        $a_title=Request::input('a_title');
        $a_type=Request::input('a_type');
        $a_con=Request::input('a_con');
        $a_addtime=date("Y-m-d H:i:s");
        $a_logo=Request::file('a_logo');

        $clientName = $a_logo ->  getClientOriginalName();
        //所以这里道出了文件上传的原理,将文件上传的某个临时目录中,然后使用Php的函数将文件移动到指定的文件夹.
        $entension = $a_logo -> getClientOriginalExtension();         //上传文件的后缀.

        $filedir=$_SERVER['DOCUMENT_ROOT']."/uploads/article/";//上传存放的目录

        $newImagesName=md5(time()).rand(1000,9999).".".$entension;  //重新命名上传文件名字
        $a_logo->move($filedir,$newImagesName); //使用move 方法移动文件.
        
        $re = DB::table('article')->insert([
                'a_title' => $a_title,
                'a_type' => $a_type,
                'a_con' => $a_con,
                'a_addtime' => $a_addtime,
                'a_logo' => "/uploads/article/".$newImagesName
            ]);
        if($re){
            echo "<script>alert('提交成功');location.href='article';</script>";
        }else{
            echo "<script>alert('提交失败');location.href='publish';</script>";
        }
    }
    
    /*
    *   文章点赞功能
    */
    public function zan(){

        $a_id=Request::input('id');
        if(empty(Session::get('username'))){
            echo 1;
        }else{
            $username=Session::get('username');
        }
        $user=DB::table('users')->where("user_name","$username")->first();//->orwhere("user_email","$username")
        $u_id = $user['user_id'];
        //文章点赞功能查询
        $arr = DB::table('article_zan')->where('u_id',$u_id)->where('article_id',$a_id)->get();
        //print_r($arr);die;
        if($arr!=array()){
            return 0;
        }else{
            //得到对应id的文章
            $zan = DB::table('article')->where('a_id',$a_id)->first();
            $num = $zan['a_num'];
            $a_num = $num+=1;
            //点赞数量增加
            $zan_jia = DB::table('article')->where('a_id',$a_id)->update(['a_num'=>$a_num]);
            //没点过赞的人点赞成功
            $article_zan_jia = DB::table('article_zan')->insert(['u_id'=>$u_id,'article_id'=>$a_id]);
            //得到对应id的文章
            $zan = DB::table('article')->where('a_id',$a_id)->first();

            return 1;
        }
    }    
    
    public function type(){
        $type=Request::input('type');
        if($type=='0'){
            $type=DB::table('article')->get();
        }else{
            $type=DB::table('article')->where("a_type",$type)->get();
        }

        //print_r($type);die;
        return view("article/type",['article'=>$type]);
    }


    public function wxiang(){
        if(empty(Session::get('username'))){
            $username=0;
        }else{
            $username=Session::get('username');
        }
        $id=Request::input('id');
        $arr=DB::table("article")
            ->join("ar_type","article.a_type","=","ar_type.at_id")
            ->where("article.a_id",$id)->get();
        //var_dump($arr);exit();
        $aping=DB::table('aping')->join("users","aping.u_id","=","users.user_id")->join("article","aping.a_id","=","article.a_id")->orderBy("aping.ap_id","desc")->limit(3)->get();
       //print_r($aping);die;
        return view('article/wxiang',['arr'=>$arr[0],'username'=>$username,'aping'=>$aping]);
    }
    
    public function wping(){
        if(empty(Session::get('username'))){
            $username=0;
            $u_id=0;
        }else{
            $username=Session::get('username');
            $u_id=DB::table('users')->where("user_name","$username")->first();//->orwhere("user_email","$username")
            $u_id=$u_id['user_id'];
        }
        echo $u_id;die;
        $a_id=Request::input('a_id');
        $ping=Request::input('ping');
        $sql="insert into aping(u_id,ap_con,a_id) values('$u_id','$ping','$a_id')";
        $re=DB::insert($sql);

        $aping=DB::table('aping')->join("users","aping.u_id","=","users.user_id")->join("article","aping.a_id","=","article.a_id")->orderBy("aping.ap_id","desc")->limit(3)->get();
        //print_r($aping);die;
        return json_encode($aping);
        //return view('article/aping',['aping'=>$aping]);
    }

    /*
    *   文章最热
    */
    public function hot(){
        $at_type=DB::table('ar_type')->get();
        $article = DB::table('article')
                ->leftJoin('ar_type' , 'article.a_type' , '=' , 'ar_type.at_id')
                ->leftJoin('a_lei' , 'article.a_lei' , '=' , 'a_lei.al_id')
                ->orderBy('a_num' , 'desc')
                ->get();
        if(empty(Session::get('username'))){
            $username=0;
        }else{
            $username=Session::get('username');
        }
        $user=DB::table('users')->where("user_name","$username")->first();//->orwhere("user_email","$username")
        $u_id=$user['user_id'];
        foreach($article as $key=>$val){
            $arr=DB::table('article_zan')->where(["u_id"=>0,"article_id"=>$val['a_id']])->first();
            if($arr){
                $article[$key]['zan']="1";
            }else{
                $article[$key]['zan']="0";
            }
        }
        return view('article/article1',['at_type'=>$at_type,'article'=>$article]);
    }
}
