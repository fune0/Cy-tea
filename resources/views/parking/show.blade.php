@extends('layout.layout')

@section('title', 'サイティー')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link rel="stylesheet" href="../dist/css/swiper.min.css">
<link rel="stylesheet" href="/css/index.css">
<style>
        html, body {
          position: relative;
          height: 100%;
        }
        body {
          background: #eee;
          font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
          font-size: 14px;
          color:#000;
          margin: 0;
          padding: 0;
        }
        .swiper-container {
          width: 100%;
          height: 100%;
        }
        .swiper-slide {
          background-position: center;
          background-size: cover;
        }
      </style>
@endsection
 
@include('layout.head')
 
@include('layout.header')

@section('content')

    <p>{{ $parking->ward }}</p>
    <p>{{ $parking->lotname }}</p>
    <p>{{ $parking->address }}</p>
    <p>{{ $parking->fee }}</p>
    <p>{{ $parking->totalnumbers }}</p>
    <p>{{ $parking->text }}</p>

@endsection

@include('layout.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection
 
@include('layout.footer')