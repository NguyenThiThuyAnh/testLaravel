<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/3/2019
 * Time: 11:43 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getData(Request $request){

         return $request->path();
}
}