@extends('admin2.app')

@section('content')
    @if (session('save'))
        <div class="alert alert-info alert-block">
            <strong>Zmieniono status</strong>
        </div>
    @endif

    <a class="btn btn-primary" href="{{ \Illuminate\Support\Facades\URL::previous() }}">Powrót</a>

    <h3>Dane zgłoszenia</h3>
    <p>Email: {{ $form->email }}</p>
    <p>Treść: {{ $form->description }}</p>
    <p>Produkty: {{ $form->getProducts() }}</p>
    <p>Wygrany: @if($form->status==1) TAK @else NIE @endif</p>
    <br>
    <a class="btn btn-success" href="{{ route('admin2.winner', ['form'=>$form->id]) }}">Potwierdź wygraną</a>

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
            -webkit-transition: opacity 300ms;
            -o-transition: opacity 300ms;
            transition: opacity 300ms;
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
