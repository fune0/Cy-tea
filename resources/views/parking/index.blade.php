@extends('layout.layout')
@section('content')

@foreach($parkings as $parking)
  <p>{{ $parking->lotname }}</p>
  <p>{{ $parking->address }}</p>
  <p>{{ $parking->totalnumbers }}</p>
  <a href="{{url()->current()}}/{{$parking->id}}" class="btn">さらに詳細</a>
@endforeach

@section('content')