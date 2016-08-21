@extends('layout.app')

@section('content')

    <article class="container">
        <h1>{{$article->title}}</h1>
        <h2 class="text-muted">{{$article->author}} <span class="tag tag-{{ $article->category == "news" ? 'primary' : 'danger'}}">{{strtoupper($article->category)}}</span></h2>

        <p>
            {!! nl2br(e($article->body)) !!}
        </p>
    </article>

@endsection
