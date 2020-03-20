<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class studentController extends Controller
{
    public function store(Request $req){
       // dd($req->all());

       $data = request()->validate([
          'name'=>'required|min:5'
       ]);
       $stu = new Student;
       $stu->name = $req->name;
       $stu->email = $req->email;
      
       
       $stu->save();
      return redirect()->back();
      //  return view('/home');
    }
}
