@extends('layout.app')

@section('content')

    <div class="container">

        <h1>New Article</h1>

        <form action="{{ route('articles.store') }}" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" name="category">
                    <option value="announcement" selected>Announcement</option>
                    <option value="news">News</option>
                </select>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" rows="8"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {{ csrf_field() }}
        </form>

    </div>

@endsection
