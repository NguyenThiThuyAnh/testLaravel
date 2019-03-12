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
   public function index(){
       return view('admin.template');
   }
}