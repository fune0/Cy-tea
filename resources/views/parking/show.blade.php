@extends('layout.layout')

@section('title', 'サイティー')
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
    <div class="show-txt">
        <p>{{ $parking->lotname }}</p>
        <p>{{ $parking->address }}</p>
        <p>{{ $parking->fee }}</p>
        <p>{{ $parking->totalnumbers }}</p>
        <p>{{ $parking->text }}</p>
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