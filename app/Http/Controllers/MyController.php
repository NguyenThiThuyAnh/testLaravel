<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/4/2019
 * Time: 2:34 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

class myController extends Controller
{
    public function setCookie(){
        echo "ddf";
        $response = new Response;
        $response ->withCookie('hoten','ThuyAnh',10);
        return $response;
    }

    public function getCookie(Request$request){
        echo $request->cookie('hoten');
    }


    public function postFile(Request $request)     {
        //kiểm tra có tồn tại myFikle ?
        $data = ['a','b','c'];
         return view('welcome',compact('data'));

    }
}