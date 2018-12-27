<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class masuk extends Controller
{
    public function home(){
        $data = User::all();
        
    	return view('masuk',compact('data'));


    }
}
