@extends('layout.layout')

@section('title', 'サイティー')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link rel="stylesheet" href="/css/index.css">
@endsection
 
@include('layout.head')
 
@include('layout.header')

@section('content')

<div class=card-area>
  
    @foreach($parkings as $parking)
    <div class=card>
      <h3>{{ $parking->lotname }}</h3>
      <p>{{ $parking->address }}</p>
      <p>{{ $parking->totalnumbers }}</p>
      <a href="{{url()->current()}}/{{$parking->id}}" class="btn">さらに詳細</a>
    </div>
    @endforeach
  
</div>

@endsection

@include('layout.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection

@include('layout.footer')