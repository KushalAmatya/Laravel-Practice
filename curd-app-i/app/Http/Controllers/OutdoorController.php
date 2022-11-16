<?php

namespace App\Http\Controllers;

use App\Models\Outdoor;
use Illuminate\Http\Request;

class OutdoorController extends Controller
{
    public function index()
    {
        return view('welcome',['items'=>Outdoor::all()]);
    }

    public function edit($id)
    {
        $outdoor = Outdoor::find($id);

        return view("edit",['items'=>$outdoor]);
    }
     public function savedata(Request $req)
    {

        $outdoorObj = new Outdoor();
        $outdoorObj->BatchName= $req->batchname;
        $outdoorObj->totalBatch= $req->totalbatch;
        $outdoorObj->status= $req->status;
        $outdoorObj->Remark= $req->remark;

        $outdoorObj->save();

        return redirect("/");
    }

    public function deldata($id)
    { 
        $delobj = Outdoor::find($id);
        $delobj ->delete();
        return redirect("/");

    }
     public function updatedata(Request $req)
    {

        $outdoorobj = Outdoor::find($req->id);
    
        $outdoorobj->totalBatch= $req->totalbatch;
        $outdoorobj->BatchName= $req->batchname;
        $outdoorobj->status= $req->status;
        $outdoorobj->Remark= $req->remark;
        $outdoorobj->save();

        return redirect("/");
    }
}
