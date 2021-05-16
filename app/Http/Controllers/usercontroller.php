<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Data;
use Illuminate\Support\Facades\Hash;
class usercontroller extends Controller
{
    //
    function show(Request $req){
        $data= new Data;
        $data->name = $req->name;
        $data->father_name = $req->fname;
        $data->age = $req->age;
        $data->gender = $req->gender;
        // print_r($req->hobbies);
        $data->hobbies = implode('-',$req->hobbies);
        $data->dob = $req->dob;
        $data->email = $req->email;
        $req->validate(['photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
        $imageName = $req->email.'1.'.$req->photo->extension();
         $req->photo->move(public_path('images'),$imageName);
        $data->password = Hash::make($req->password);
        $data->save();
    return "hello";

    }
    function load(){
        return view('new');
    }
    function select(){
        return DB::select("select * from users");
    }
}
