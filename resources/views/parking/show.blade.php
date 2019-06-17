@extends('layout.layout')
@section('content')

    <p>{{ $parking->ward }}</p>
    <p>{{ $parking->lotname }}</p>
    <p>{{ $parking->address }}</p>
    <p>{{ $parking->fee }}</p>
    <p>{{ $parking->totalnumbers }}</p>
    <p>{{ $parking->text }}</p>

@section('content')