@extends('layout.app')

{{--@section('title') Home @endsection--}}
@section('title', 'Home')

@section('content')
    <h1>Home</h1>
    <p>The popularity of cars from Germany is growing inexorably every year, which is not at all surprising.
        After all, this country occupies a leading position in the automotive industry, and cars manufactured from the
        conveyor are famous for their reliability, safety and increased level of comfort.
        Excellent proof of these words are the brands of cars Porsche, Mercedes Benz, BMW, Audi. But not everyone can
        afford to buy a new vehicle. Therefore, many want to drive cars from Germany to order.
        Destacar is competent in this matter and is ready to offer assistance to its employees in resolving all issues.
    </p>
@endsection


@section('aside')
    @parent<p>Додатковий текст в home</p>
@endsection
