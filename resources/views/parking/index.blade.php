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
  <h4 class="index-txt">{{ $ward }}にある駐輪場一覧</h4>
  
    @foreach($parkings as $parking)
    <article>
      <figure>
        <img  class="thumbnail" src="{{ $parking->image }}">
      </figure>
      <div class="card-txt">
        <h3>{{ $parking->lotname }}</h3>
        <p>{{ $parking->address }}</p>
        <p>収容台数：{{ $parking->totalnumbers }}</p>
        
        <div class="btn">
          <a href="{{$parking->ward}}/{{$parking->id}}">さらに詳細</a>
        </div>
      </div>
    
    </article>
    @endforeach
  
</div>

@endsection

@include('layout.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection

@include('layout.footer')