<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'E-COMMERCE STORE' }}</title>
    <link rel="stylesheet" href={{ url('css/app.css') }}>
    <link rel="stylesheet" href="{{ url('/css_user/style.css }}"></link>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('/css/footer.css')}}" rel="stylesheet" type="text/css">
    
</head>
<body style="background-color: #f8f9fa;">
<div id="app">
    @include('layouts.navbar')
    <main class="py-4">
        @yield('content')
    </main>
</div>
@extends('layouts.footer')

@section('content')
@endsection

</body>
</html>