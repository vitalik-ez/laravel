@extends('layout.app')

@section('title') About Me @endsection


@section('content')
    <h1>About Me</h1>

    @if(count($data) > 0)
        @foreach($data as $key => $value)
            <p>{{$key}} - {{$value}}</p>
        @endforeach
    @else
        @component('components.alert', ['type' => 'danger'])
            Такої сторінки не існує
        @endcomponent
    @endif
@endsection
