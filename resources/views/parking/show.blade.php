@extends('layout.layout')

@section('title')
{{ $parking->lotname }}
@stop

@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link rel="stylesheet" href="/css/show.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
@endsection
 
@include('layout.head')
 
@include('layout.header')

@section('content')

<div class="show-area">
    <h1 class="name-txt">{{ $parking->lotname }}</h1>
    <div class="show-slider">
        <!-- Slider main container -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img  class="slide-image" src="{{ $parking->image }}"></div>
                <div class="swiper-slide"><img  class="slide-image" src="{{ $parking->image }}"></div>
                <div class="swiper-slide"><img  class="slide-image" src="{{ $parking->image }}"></div>
            </div>
        
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-pagination"></div>
        
        </div>
    </div>
    <div class="show-main">
        <div class="show-txt">
            <h2>住所</h2>
            <h3>{{ $parking->address }}</h3>
            <h2>料金</h2>
            <h3>{{ $parking->fee }}</h3>
            <h2>収容台数</h2>
            <h3>{{ $parking->totalnumbers }}</h3>
            <h2>概要</h2>
            <h3>{{ $parking->text }}</h3>
        </div>

        <h2 class="map-txt">{{ $parking->lotname }} 周辺MAP</h2>
        <div id="map"></div>
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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWy1hjcFApkPfZIC8osxje7Crkvw578DY"></script>

    <script>
    var MyLatLng = new google.maps.LatLng(35.6811673, 139.7670516);
    var Options = {
    zoom: 15,      //地図の縮尺値
    center: MyLatLng,    //地図の中心座標
    mapTypeId: 'roadmap'   //地図の種類
    };
    var map = new google.maps.Map(document.getElementById('map'), Options);
    </script>

@endsection

@include('layout.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection
 
@include('layout.footer')