<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Work;
use App\Mail\ContactMail;

class WorkController extends Controller
{
    //
    public function show_detail(Work $work){

        //URLの末尾取得
        $url = rtrim($_SERVER["REQUEST_URI"], '/');
        $url = (int)substr($url, strrpos($url, '/') + 1);

        //DBからの取得
        $work = Work::query()->where('id', '=' ,$url)->first();

        return view("work_detail")->with(["work" => $work]);

    }

    public function request(Request $request){
        
        Mail::to("sugamon121028@gmail.com")->send(new ContactMail($request['contact']));

        $request->session()->regenerateToken();

        return view("index")->with(["message" => "お問い合わせありがとうございます"]);
    }



}
