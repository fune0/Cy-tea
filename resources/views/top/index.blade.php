@extends('layouts.layout')

@section('content')

<p>ここにコンテンツが入る</p>

<p>ログインボタン</p>

<p>主要都心5区のマップ</p>

<a href="{{URL::to('/parkings/shibuya')}}">
    {{Form::image('images/topshibuya.png', '渋谷区', ['class' => 'btn'])}}
</a>

<a href="{{URL::to('/parkings/shinjuku')}}">
    {{Form::image('images/topshinjuku.png', '新宿区', ['class' => 'btn'])}}
</a>

<p>検索窓</p>

<p>Twitterヴィジェット</p>

@endsection