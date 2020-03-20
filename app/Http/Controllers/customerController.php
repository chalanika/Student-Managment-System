<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use\App\Customer;

class customerController extends Controller
{
    public function list(){
       $customers = Customer::all();
        return view('internals.customers',[
            'cus'=>$customers,
            ]);
    }
}
