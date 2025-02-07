<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\cmacontroller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class cmacontroller extends Controller
{
   public function service(){
        $services =['bca','mca','bscit','mscit','mba'];
        
        return  view('service',compact('services'));
    }

    public function submitdata(Request $request){
        // return $request->all();
        // return $request->username;
        $username=$request->username;
        $password=$request->password;
        return view('contactus',compact('username','password'));
        
    }
}
