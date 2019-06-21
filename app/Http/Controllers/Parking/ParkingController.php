<?php

namespace App\Http\Controllers\Parking;

use App\Parking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 主要5区の区別駐輪場一覧ページを出す
        $url = $_SERVER['REQUEST_URI'];

        if(strstr($url, '/parkings/chiyoda')){
            $ward = "千代田区";
            $parkings = Post::where('ward', "chiyoda")->orderBy('created_at', 'DESC')->paginate(5);

        } elseif(strstr($url, '/parkings/chuo')){
            $ward = "中央区";
            $parkings = Post::where('ward', "chuo")->orderBy('created_at', 'DESC')->paginate(5);
        
        } elseif(strstr($url, '/parkings/minato')){
            $ward = "港区";
            $parkings = Post::where('ward', "minato")->orderBy('created_at', 'DESC')->paginate(5);

        } elseif(strstr($url, '/parkings/shinjuku')){
            $ward = "新宿区";
            $parkings = Post::where('ward', "shinjuku")->orderBy('created_at', 'DESC')->paginate(5);
        
        } elseif(strstr($url, '/parkings/shibuya')){
            $ward = "渋谷区";
            $parkings = Post::where('ward', "shibuya")->orderBy('created_at', 'DESC')->paginate(5);
        
        } elseif(strstr($url, '/parkings/shinagawa')){
            $ward = "品川区";
            $parkings = Post::where('ward', "shinagawa")->orderBy('created_at', 'DESC')->paginate(5);
        
        } else {
            // 404エラーを返す
        };

        return view('parking.index')->with('ward', $ward)->with('parkings', $parkings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        // indexで表示された駐輪場の詳細ページを表示する
        $parking = Post::find($post);

        return view('parking.show')->with('parking', $parking);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function edit(Parking $parking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parking $parking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parking $parking)
    {
        //
    }
}
