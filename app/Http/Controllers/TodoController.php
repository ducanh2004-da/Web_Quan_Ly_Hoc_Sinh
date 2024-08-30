<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //
    public function getTodo(Request $request){
        $request->validate([
            'todo' => 'required|string|max:255',
        ]);

        $todos = new Todo();
        $todos->work = $request->todo;
        $todos->save();
        // Trả về các thông tin đã cập nhật để sử dụng trong view
        return redirect('/home')->with('success', 'Cập nhật thông tin thành công!');
    }
    public function index()
    {
        $todos = Todo::all();
        return view('home',compact('todos'));
    }
}
