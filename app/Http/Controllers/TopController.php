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

        $reccomend = $parkings->find([1,2,3,4,5,6])->random(5); // idを指定したものからランダムで5つ表示する

        View::share('reccomended', $reccomend);
    }

    public function index()
    {
        return view('top.top');  // top画面(LP)を表示する
    }
}
