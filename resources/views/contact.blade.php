@extends('layout.app')


@section('title') Contact @endsection

@section('content')
    <h1>Contacts</h1>
    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/contact/submit" method="post">
        @csrf
        <div>
        <p>Введіть ім'я: <input type="text" name="name"></p>
        <p>Введіть email: <input type="email" name="email"></p>
        <p>Введіть повідомлення: <input type="text" name="message"></p>
        <p><input type="submit" name="button"></p>
        </div>
    </form>
@endsection
