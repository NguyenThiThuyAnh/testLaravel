<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/4/2019
 * Time: 11:53 AM
 */

namespace App\Http\Controllers;


class AboutController
{
    public function showsubject($theSubject){
        return "Detail information about $theSubject";
    }
}