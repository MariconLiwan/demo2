<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(){
        return 'Hello from UserController';
    }

    public function show($id){
        $data=array(
            "id"=>$id,
            "name"=>"Maricon Liwan",
            "age"=>20,
            "email"=>"mariconliwan@gmail.com"
        );
        return view('user',['data'=>$data]);
    }
}
