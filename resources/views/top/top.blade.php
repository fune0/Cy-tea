@extends('layout.layout')
 
@section('title', 'サイティー')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link rel="stylesheet" href="/css/top.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
@endsection
 
@include('layout.head')
 
@include('layout.header')
 
@section('content')

<div class="top-area">
    <!-- Slider main container -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="image" src="images/topcity.jpg"></div>
            <div class="swiper-slide"><img class="image" src="images/toptrip.jpg"></div>
            <div class="swiper-slide"><img class="image" src="images/topoffroad.jpeg"></div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <div class="swiper-pagination"></div>
    </div>

    <div class="top-main">
        <h4 class="top-txt">駐輪場を検索する</h4>
        <div class="btn-area">
            <a href="{{URL::to('/parkings/chiyoda')}}">{{Form::image('images/topchiyoda.png', '千代田区', ['class' => 'btn'])}}</a>
            <a href="{{URL::to('/parkings/chuo')}}">{{Form::image('images/topchuo.png', '中央区', ['class' => 'btn'])}}</a>
            <a href="{{URL::to('/parkings/minato')}}">{{Form::image('images/topminato.png', '港区', ['class' => 'btn'])}}</a>
            <a href="{{URL::to('/parkings/shinjuku')}}">{{Form::image('images/topshinjuku.png', '新宿区', ['class' => 'btn'])}}</a>
            <a href="{{URL::to('/parkings/shibuya')}}">{{Form::image('images/topshibuya.png', '渋谷区', ['class' => 'btn'])}}</a>
            <a href="{{URL::to('/parkings/shinagawa')}}">{{Form::image('images/topshinagawa.png', '品川区', ['class' => 'btn'])}}</a>
        </div>

        <h4 class="top-txt">シティサイクリストにオススメ！駐輪場</h4>
        <div class="spot-area">
            <div class="card">
                @foreach($reccomended as $reccomend)
                    <article>

                        <figure>
                            <img  class="thumbnail" src="{{ $reccomend->image }}">
                        </figure>
                        <div class="card-txt">
                            <h3>{{ $reccomend->lotname }}</h3>
                            <p>住所：{{ $reccomend->address }}</p>
                            <p>収容台数：{{ $reccomend->totalnumbers }}</p>
                            
                            <div class="btn">
                            <a href="parkings/{{$reccomend->ward}}/{{$reccomend->id}}">さらに詳細</a>
                            </div>
                        </div>
                    
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>

    <script>
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
    
        // If we need pagination
        pagination: {
        el: '.swiper-pagination',
        },
    
        // Navigation arrows
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
    })
    </script>

@endsection
 
@include('layout.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection
 
@include('layout.footer')

@section('content')

@endsection