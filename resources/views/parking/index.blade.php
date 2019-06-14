@extends('layouts.layout')
@section('content')

<h1>一覧表示画面です</h1>

@foreach($parkings as $parking)
  <p>{{ $parking->lotname }}</p>
  <p>{{ $parking->address }}</p>
  <p>{{ $parking->totalnumbers }}</p>
  <a href="parking/{id}" class="btn">さらに詳細</a>
@endforeach

@section('content')