<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use View;

class TopController extends Controller
{

    public function __construct()
    {
        $parkings = Post::all();

        $reccomend = $parkings->find([7,8,9,10,11])->random(3); // idを指定したものからランダムで3つ表示する

        View::share('reccomended', $reccomend);
    }

    public function index()
    {
        return view('top.top');  // top画面(LP)を表示する
    }
}
