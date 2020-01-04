@extends('admin.app')

@section('content')

    <a class="btn btn-primary" href="{{ route('admin.forms' ) }}">Powrót</a>

    <h3>Dane użytkownika</h3>
    <p>Imię: {{ $form->name }}</p>
    <p>Nazwisko: {{ $form->surname }}</p>
    <p>Nr paragonu: {{ $form->paragon }}</p>
    <p>Data zgłoszenia: {{ \Carbon\Carbon::parse($form->created_at)->addHour()->format('Y-m-d H:i:s') }}</p>
    <br>
    <p>Adres: {{ $form->postal }} {{ $form->city }}</p>
    <p>{{ $form->street }}</p>
    <br>

    <img src="{{ asset('storage/'. $form->paragonimg) }}" height="100px" width="100px" data-action="zoom">
    <br>
  {{--  <a class="btn btn-success" href="{{ route('admin.dashboard.confirmUser', ['user'=>$form->id]) }}">Potwierdź wygraną</a>--}}

    <style>
        img[data-action="zoom"] {
            cursor: pointer;
            cursor: -webkit-zoom-in;
            cursor: -moz-zoom-in;
        }
        .zoom-img,
        .zoom-img-wrap {
            position: relative;
            z-index: 666;
            -webkit-transition: all 300ms;
            -o-transition: all 300ms;
            transition: all 300ms;
        }
        img.zoom-img {
            cursor: pointer;
            cursor: -webkit-zoom-out;
            cursor: -moz-zoom-out;
        }
        .zoom-overlay {
            z-index: 420;
            background: #fff;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            filter: "alpha(opacity=0)";
            opacity: 0;
            -webkit-transition:      opacity 300ms;
            -o-transition:      opacity 300ms;
            transition:      opacity 300ms;
        }
        .zoom-overlay-open .zoom-overlay {
            filter: "alpha(opacity=100)";
            opacity: 1;
        }
        .zoom-overlay-open,
        .zoom-overlay-transitioning {
            cursor: default;
        }
    </style>
@endsection