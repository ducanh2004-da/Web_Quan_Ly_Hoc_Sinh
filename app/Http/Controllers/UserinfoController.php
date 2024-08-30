<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;

class UserinfoController extends Controller
{
    //
    public function getinfo(Request $request)
    {
        $request->validate([
            'ten' => 'required|string|max:255',
            'ngaysinh' => 'required|date',
            'nghe' => 'required|string|max:255',
        ]);

        $userInfo = new Userinfo();
        $userInfo->Name = $request->ten;
        $userInfo->Birthday = $request->ngaysinh;
        $userInfo->Job = $request->nghe;
        $userInfo->save();

        // Trả về các thông tin đã cập nhật để sử dụng trong view
        return redirect('/home')->with('success', 'Cập nhật thông tin thành công!');
    }

    public function showinfo()
    {
        $latestUserInfo = Userinfo::latest()->first();
        return view('home', compact('latestUserInfo'));
    }
}
