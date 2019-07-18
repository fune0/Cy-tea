@extends('layout.layout')

@section('title')
{{ $ward }}にある駐輪場一覧
@stop

@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link rel="stylesheet" href="/css/index.css">
@endsection
 
@include('layout.head')
 
@include('layout.header')

@section('content')

<div class="breadcrumbs">
    {{ Breadcrumbs::render('ward', $ward) }}
</div>

<div class=card-area>
  <h1 class="index-txt">{{ $ward }}にある駐輪場一覧</h1>
  <div class=index-main>  
    
      @foreach($parkings as $parking)
      <article>
        <figure>
          <img  class="thumbnail" src="{{ $parking->image }}">
        </figure>
        <div class="card-txt">
          <h2>{{ $parking->lotname }}</h2>
          <h3>{{ $parking->address }}</h3>
          <h3>収容台数：{{ $parking->totalnumbers }}</h3>
          
          <div class="btn">
            <a href="{{$parking->ward}}/{{$parking->id}}">さらに詳細</a>
          </div>
        </div>
      
      </article>
      @endforeach

      <div class="pagination">
        {{ $parkings->links() }}
      </div>
      
  </div>
</div>

<div class="breadcrumbs">
    {{ Breadcrumbs::render('ward', $ward) }}
</div>

@endsection

@include('layout.sub')
 
@section('pageSub')

@endsection

@include('layout.footer')