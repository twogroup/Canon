<?php

namespace App\Http\Controllers;
use DB,Request,Validator;
class SearchController extends Controller
{
    public function index(){
        $sou=Request::input('sou');
        //echo $sou;
        //$arr=DB::table('shiti')->where(['like','s_logo',$sou])->first();
        $shi = DB::select("select * from shiti where s_logo like '%$sou%'");
        //print_r($arr);
         return  view('search/sen',compact('shi'));

    }
}