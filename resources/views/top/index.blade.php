@extends('layout.layout')
 
@section('title', 'サイティー')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link rel="stylesheet" href="/css/top.css">
@endsection
 
@include('layout.head')
 
@include('layout.header')
 
@section('content')
<h4>駐輪場を検索する</h4>
    <div class="btn-area">
        <a href="{{URL::to('/parkings/chiyoda')}}">{{Form::image('images/topchiyoda.png', '千代田区', ['class' => 'btn'])}}</a>
        <a href="{{URL::to('/parkings/chuo')}}">{{Form::image('images/topchuo.png', '中央区', ['class' => 'btn'])}}</a>
        <a href="{{URL::to('/parkings/minato')}}">{{Form::image('images/topminato.png', '港区', ['class' => 'btn'])}}</a>
        <a href="{{URL::to('/parkings/shinjuku')}}">{{Form::image('images/topshinjuku.png', '新宿区', ['class' => 'btn'])}}</a>
        <a href="{{URL::to('/parkings/shibuya')}}">{{Form::image('images/topshibuya.png', '渋谷区', ['class' => 'btn'])}}</a>
        <a href="{{URL::to('/parkings/shinagawa')}}">{{Form::image('images/topshinagawa.png', '品川区', ['class' => 'btn'])}}</a>
    </div>

<h4>シティサイクリストにオススメな駐輪場</h4>
    <div class="spot-area">
        <div class="card">
        </div>
    </div>

@endsection
 
@include('layout.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection
 
@section('pageJs')
<script src="/js/page.js"></script>
@endsection
 
@include('layout.footer')

@section('content')

@endsection