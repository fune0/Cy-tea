@extends('layout.layout')
 
@section('title', '自転車を駐めて紅茶を楽しもう')
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
    <div class="top-slider">
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
    </div>

    <div class="top-main">
        <div class="btn-area">
        
            <h2 class="top-txt">駐輪場を検索する</h2>
        
            <a href="{{URL::to('/parkings/chiyoda')}}">{{Form::image('images/topchiyoda.png', '千代田区', ['class' => 'btn'])}}</a>
            <a href="{{URL::to('/parkings/chuo')}}">{{Form::image('images/topchuo.png', '中央区', ['class' => 'btn'])}}</a>
            <a href="{{URL::to('/parkings/minato')}}">{{Form::image('images/topminato.png', '港区', ['class' => 'btn'])}}</a>
            
            <div class="wardName">
                <h3>千代田区</h3>
            
                <h3>中央区</h3>
            
                <h3>港区</h3>
            </div>
            
            <a href="{{URL::to('/parkings/shinjuku')}}">{{Form::image('images/topshinjuku.png', '新宿区', ['class' => 'btn'])}}</a>
            <a href="{{URL::to('/parkings/shibuya')}}">{{Form::image('images/topshibuya.png', '渋谷区', ['class' => 'btn'])}}</a>
            <a href="{{URL::to('/parkings/shinagawa')}}">{{Form::image('images/topshinagawa.png', '品川区', ['class' => 'btn'])}}</a>
            <div class="wardName">
                <h3>新宿区</h3>
                <h3>渋谷区</h3>
                <h3>品川区</h3>
            </div>
        </div>

        <div class="spot-area">

            <h2 class="top-txt">シティサイクリストにオススメ！駐輪場</h2>

            <div class="card">

            @foreach($reccomended as $reccomend)
            
                <article>

                    <figure>
                        <img  class="thumbnail" src="{{ $reccomend->image }}">
                    </figure>
                    <div class="card-txt">
                        <div class="lotname-txt">
                        <h3>{{ $reccomend->lotname }}</h3>
                        </div>
                        <p>{{ $reccomend->address }}</p>
                        <p>収容台数：{{ $reccomend->totalnumbers }}</p>
                    </div>
                    <div class="card-btn">
                        <a href="parkings/{{$reccomend->ward}}/{{$reccomend->id}}">さらに詳細</a>
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