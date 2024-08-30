<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $title = 'web của Duc ANh';
        return view('QLHS.mainPage',compact('title'));
    }
}
