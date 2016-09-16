@extends('layout.app')

@section('content')

    <div class="container">

        <h1>Edit Article</h1>

        <form action="{{ route('articles.update', $article->id) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$article->title}}">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" value="{{$article->author}}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" name="category">
                    <option value="announcement" {{ $article->category == "news" ? '' : 'selected' }}>Announcement</option>
                    <option value="news" {{ $article->category == "announcement" ? '' : 'selected' }}>News</option>
                </select>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" rows="8">{{$article->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {{ csrf_field() }}
        </form>

    </div>

@endsection
