@extends('layout.base')

@section('html')

    <nav class="navbar navbar-full navbar-dark" style="background-color: #8e44ad;">
      <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">LASA Schedules</a>
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('articles.index')}}">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('schedules.index') }}">Schedules</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('days.index') }}">Days</a>
        </li>
      </ul>
      </div>

    </nav>

    @yield('content')

@endsection
