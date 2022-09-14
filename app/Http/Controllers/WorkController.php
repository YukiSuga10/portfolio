<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

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
}
