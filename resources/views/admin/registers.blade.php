@extends('admin.app')

@section('content')

    <form action="{{ route('admin.index') }}" method="GET" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                   placeholder="Email">
            <input type="text" class="form-control" name="b"
                   placeholder="Numer paragonu"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search">
                        </span>
                    </button>
                </span>
        </div>
    </form>

    @isset($q)

        Szukany email: {{ $q }}
    @endisset
    @isset($b)

        Szukany paragon: {{ $b }}
    @endisset
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Data</th>
            <th>Email</th>
            <th>Nr paragonu</th>
            <th>Treść</th>
            <th>Wygrany</th>
            <th></th>
        </tr>

        @foreach($registers as $register)
            <tr>
                <th>{{ $register->id }}</th>
                <th>{{ \Carbon\Carbon::parse($register->created_at)->addHour()->format('Y-m-d H:i:s') }}</th>
                <th>{{ $register->email }}</th>
                <th>{{ $register->paragon }}</th>
                <th>{{ substr($register->description,0,100) }}...</th>
                <th>@if($register->status==1) TAK @endif</th>
                <th><a class="btn btn-primary" href="{{ route('admin.form', ['form'=>$register->id]) }}">Szczegóły</a></th>
            </tr>
        @endforeach
    </table>

    {{ $registers->links() }}
@endsection