<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolist;

class todolistcontroller extends Controller
{
    //
    public function index(){
        return view('welcome',['items'=>todolist::all()]);
    }

    public function saveTodo(Request $req)
    {

        $todoObj = new todolist();
        $todoObj->title = $req->todoItem;
        $todoObj->save();

        return redirect("/");
    }

       public function updateTodo(Request $req)
    {

        $todoObj = todolist::find($req->id);
        $todoObj->title = $req->todoItem;
        $todoObj->save();

        return redirect("/");
    }

    public function delTodo($id)
    { 
        $todo = todolist::find($id);
        $todo ->delete();
        return redirect("/");

    }

    public function editTodo($id)
    {
        $todo = todolist::find($id);

        return view("/edit",['data'=>$todo]);
    }
}
