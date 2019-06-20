@extends('layout.layout')

@section('title', 'サイティー')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link rel="stylesheet" href="/css/show.css">
@endsection
 
@include('layout.head')
 
@include('layout.header')

@section('content')

<div class="show-area">
    <img  class="slide-image" src="{{ $parking->image }}">
    <p>{{ $parking->ward }}</p>
    <p>{{ $parking->lotname }}</p>
    <p>{{ $parking->address }}</p>
    <p>{{ $parking->fee }}</p>
    <p>{{ $parking->totalnumbers }}</p>
    <p>{{ $parking->text }}</p>
</div>

@endsection

@include('layout.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection
 
@include('layout.footer')