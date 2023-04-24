<?php

namespace App\Http\Controllers;

use App\Events\UserSurbscribed;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function subscribe(Request $request){
        $request->validate([
            "email"=>"required|unique:newsletter"
        ]);
        event(new UserSurbscribed($request->input("email")));
        return back();
    }
}
