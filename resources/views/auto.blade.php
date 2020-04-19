@extends('layout.app')

@section('title', 'Auto')


@section('content')
    <h1>Auto</h1>
    <p>We are looking for, checking and buying cars that are popular among our customers in Germany so
        that you can buy a car without extra time, effort and money. Cars are with us and we will tell
        you in detail all the information about the car you are interested in.</p>
    <span>{{ $audi->id }}</span>
    <span>{{ $audi->name }}</span>
    <span>{{ $audi->model }}</span>
    <span>{{ $audi->engine }}</span>
@endsection
