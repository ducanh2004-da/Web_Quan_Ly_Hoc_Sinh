<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use App\Models\Image;
use App\Models\Todo;
use Illuminate\Http\Request;

class HomeController02 extends Controller
{
    public function index()
    {
        $latestUserInfo = Userinfo::latest()->first();
        $images = Image::all();       // Fetch images
        $todos = Todo::all();         // Fetch todos

        return view('home', compact('latestUserInfo', 'images', 'todos'));
    }
}
