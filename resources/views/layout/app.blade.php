<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    <div class="wrapper">
        @include('inc.header')
        @if(Request::is('/'))
            @include('inc.hello')
        @endif
        <div class="content">
            <div class="left">@include('inc.aside')</div>
            <div class="right">@yield('content')</div>
        </div>
        @include('inc.footer')

    </div>

</body>
</html>
