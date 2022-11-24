<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use Illuminate\Support\Facades\Hash;

use ReflectionFunctionAbstract;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

     public function getlogin()
    {
        return view('login');
    }

     public function getregister()
    {
        return view('register');
    }

    public function dataregister(Request $req)
    {
         $req->validate([
            'username' => 'required',
            'email' => 'required|unique:articles',
            'password' => 'required'
        ]);
        $reqObj = new Article();
        $reqObj->username = $req->username;
        $reqObj->email = $req->email;
        $reqObj->password = Hash::make($req->password);
        $reqObj->save();

        return redirect('login');
    }


    public function loginauth(Request $req)
    {
          $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $logObj = Article::where('email','=',$req->email)->first();        
        if($logObj)
        {
            if(Hash::check($req->password,$logObj->password))
            {
                return redirect('/');
            }
        }
        else{
            return back()->with('fail','User Not Found');
        }
    }
}
