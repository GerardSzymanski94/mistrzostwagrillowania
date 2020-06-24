@extends('admin.app')

@section('content')

    <h4>Dni</h4>
    @foreach($dates as $date)

        <div class="col-md-3">
            <a class="btn btn-primary" href="{{ route('admin2.registers', ['date'=>$date]) }}"> {{ $date }} </a>
        </div>

    @endforeach

@endsection
