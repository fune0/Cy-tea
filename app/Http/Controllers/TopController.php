<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        return view('top.index');  // top画面(LP)を表示する
    }
}
