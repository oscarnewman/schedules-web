@extends('layout.app')

@section('content')

    <div class="articles container">
        <div class="header">
            <h1 class="pull-left">All Articles</h1>
            <a href="{{route('articles.create')}}" class="btn btn-success">New Article</a>
        </div>
        <br>
        <div class="row">
        @foreach($articles as $article)
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="card card-block">
                  <a href="{{route('articles.show', $article->id)}}"><h4 class="card-title">{{ $article->title }}</h4></a>
                  <h6 class="card-subtitle text-muted">{{ $article->author }} <span class="tag tag-{{ $article->category == "news" ? 'primary' : 'danger'}}">{{strtoupper($article->category)}}</span></h6>
                  <p class="card-text">{{ str_limit($article->body, 200) }}</p>
                  <a href="{{route('articles.edit', $article->id)}}" class="btn btn-secondary">Edit</a>
                  <form class="inline" action="{{route('articles.destroy', $article->id)}}" method="post">
                      <input type="hidden" name="_method" value="DELETE">
                      <button type='submit' class="btn btn-danger">Delete</button>
                      {!! csrf_field() !!}
                  </form>
                </div>
            </div>
        @endforeach
        </div>



    </div>

@endsection
