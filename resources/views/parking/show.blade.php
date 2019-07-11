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

<div class="breadcrumbs">
    {{ Breadcrumbs::render('showParking', $ward, $parking) }}
</div>

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
            <h3 id="address">{{ $parking->address }}</h3>
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

<div class="breadcrumbs">
    {{ Breadcrumbs::render('showParking', $ward, $parking) }}
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

    {{-- GoogleMapsAPI利用 --}}
    <script>
    function initMap() {
    //地図を表示する領域の div 要素のオブジェクトを変数に代入
    var target = document.getElementById('map');  
    //HTMLに記載されている住所の取得
    var address = document.getElementById('address').textContent; 
    //ジオコーディングのインスタンスの生成
    var geocoder = new google.maps.Geocoder(); 
    
    //geocoder.geocode() にアドレスを渡して、コールバック関数を記述して処理
    geocoder.geocode({ address: address }, function(results, status){
    //ステータスが OK で results[0] が存在すれば、地図を生成
        if (status === 'OK' && results[0]){  
            new google.maps.Map(target, {
            //results[0].geometry.location に緯度・経度のオブジェクトが入っている
            center: results[0].geometry.location,
            zoom: 15

            });
        }else{ 
        //ステータスが OK 以外の場合や results[0] が存在しなければ、アラートを表示して処理を中断
        alert('失敗しました。理由: ' + status);
        return;
        }
    });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWy1hjcFApkPfZIC8osxje7Crkvw578DY&callback=initMap" async defer></script>

@endsection

@include('layout.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection
 
@include('layout.footer')