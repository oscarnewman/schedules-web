@extends('layout.app')

@section('content')

    <div class="container">
        <div class="header">
            <h1 class="pull-left">All Days</h1>
            <a href="{{route('days.create')}}" class="btn btn-success">New Day</a>
        </div>
        <br>
        <ul class="list-group">
        @foreach($days as $day)
            <li class="list-group-item">
              <h3>{{ $day->date }}</h3>
              <p class="text-muted">{{ $day->schedule->name }}</p>
              <a href="{{route('days.edit', $day->id)}}" class="btn btn-secondary">Edit</a>
              <form class="inline" action="{{route('days.destroy', $day->id)}}" method="post">
                  <input type="hidden" name="_method" value="DELETE">
                  <button type='submit' class="btn btn-danger">Delete</button>
                  {!! csrf_field() !!}
              </form>
            </li>
        @endforeach
    </ul>



    </div>

@endsection
