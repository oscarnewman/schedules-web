@extends('layout.app')

@section('content')

    <div class="container">

        <h1>New Day</h1>

        <form action="{{ route('days.store') }}" method="post">
            <div class="form-group {{ $errors->has('date') ? 'has-danger' : ''}}">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control">
                @if($errors->has('date'))
                    <small class="form-control-feedback">{{ $errors->get('date')[0] }}</small>
                @endif
            </div>
            <div class="form-group {{ $errors->has('schedule') ? 'has-danger' : ''}}">
                <label for="schedule">Schedule</label>
                <select class="form-control" name="schedule">
                    @foreach($schedules as $schedule)
                        <option value="{{ $schedule->id }}">{{ $schedule->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('schedule'))
                    <small class="form-control-feedback">{{ $errors->get('schedule')[0] }}</small>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {{ csrf_field() }}
        </form>

    </div>

@endsection
