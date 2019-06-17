@extends('layout.layout')
@section('content')

<h1>詳細表示画面です</h1>

    <p>{{ $parking->ward }}</p>
    <p>{{ $parking->lotname }}</p>
    <p>{{ $parking->address }}</p>
    <p>{{ $parking->fee }}</p>
    <p>{{ $parking->totalnumbers }}</p>
    <p>{{ $parking->text }}</p>

@section('content')