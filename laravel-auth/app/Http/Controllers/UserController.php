<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required||unique:users',
            'password' => 'required'
        ]);
        $regObj = new User();
        $regObj->email = $req->email;
        $regObj->name = $req->name;
        $regObj->password = Hash::make($req->password);
        $regObj->save();
        
        if($regObj){
            return redirect('/');
        }
        else{
            return back()->with('fail','Unable to sign up');
        }

    }

    public function login(Request $req)
    {
         $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email','=',$req->email)->first();
        

        if($user)
        {
            if(Hash::check($req->password,$user->password))
            {
                return redirect('/');
            }
        }
        else{
            return back()->with('fail','User Not Found');
        }
    }
}
