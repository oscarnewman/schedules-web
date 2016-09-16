@extends('layout.app')

@section('content')

    <div class="container">

        <h1>New Article</h1>

        <form action="{{ route('articles.store') }}" method="post">
            <div class="form-group {{ $errors->has('title') ? 'has-danger' : ''}}">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
                @if($errors->has('title'))
                    <small class="form-control-feedback">{{ $errors->get('title')[0] }}</small>
                @endif
            </div>
            <div class="form-group {{ $errors->has('author') ? 'has-danger' : ''}}">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control">
                @if($errors->has('author'))
                    <small class="form-control-feedback">{{ $errors->get('author')[0] }}</small>
                @endif
            </div>
            <div class="form-group {{ $errors->has('category') ? 'has-danger' : ''}}">
                <label for="category">Category</label>
                <select class="form-control" name="category">
                    <option value="announcement" selected>Announcement</option>
                    <option value="news">News</option>
                </select>
                @if($errors->has('category'))
                    <small class="form-control-feedback">{{ $errors->get('category')[0] }}</small>
                @endif
            </div>
            <div class="form-group {{ $errors->has('push') ? 'has-danger' : ''}}">
                <label for="push">
                <input type="checkbox" name="push" value="1"> Send Push Notifications
                </label>
                @if($errors->has('push'))
                    <small class="form-control-feedback">{{ $errors->get('push')[0] }}</small>
                @endif
                <small class="form-text text-muted">Checking this will send it to all {{ App\Device::count() }} devices with the app. Don't abuse it.</small>
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-danger' : ''}}">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" rows="8"></textarea>
                @if($errors->has('body'))
                    <small class="form-control-feedback">{{ $errors->get('body')[0] }}</small>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {{ csrf_field() }}
        </form>

    </div>

@endsection
