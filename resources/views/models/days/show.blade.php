@extends('layout.app')

@section('content')

    <article class="container">
        <h1>{{$day->date}}</h1>
        <h2 class="text-muted">{{$day->schedule->name}}</h2>
    </article>

@endsection
