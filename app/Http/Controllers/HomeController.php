<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    return "สวัสดี";
    }
    public function greeting($name){
    return "สวัสดี $name";
    }
    public function calculator($num1,$num2,$num3){
    return "ผลรวมของ $num1 ,$num2 และ $num3 คือ" . ($num1+$num2+$num3) . "นะจ๊ะ";
    }

}

