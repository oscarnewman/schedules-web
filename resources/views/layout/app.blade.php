@extends('layout.base')

@section('html')

    <nav class="navbar navbar-dark bg-inverse">
      <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">LASA Schedules</a>
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('articles.index')}}">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Schedules</a>
        </li>
      </ul>
      </div>

    </nav>

    @yield('content')

@endsection
