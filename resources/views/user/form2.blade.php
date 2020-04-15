<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Konkurs Poznaj Smaki Ameryki</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Carousels -->
    <link href="{{ asset('/vendor/flickity/flickity.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('images/general/favicon.ico') }}" type="image/x-icon">

</head>

<body id="page-top">

<!-- Navigation -->
<section style="color: #fff;">
    <div id="video-wrap" class="video-wrap" style="overflow: auto">
        <div class="container">
            <div class="row" style="height: auto;">
                <div class="col-md-12">
                    <div id="start" class="text-center" style="margin-top: 25px;">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <h3 style="color: #fff;">GRATULUJEMY WYGRANEJ!</h3>
                                <div class="row" style="margin-bottom: 30px;">
                                    <div class="col-sm-12" style="font-size: 13px;">

                                            <span>
                                                TWOJE ZGŁOSZENIE ZOSTAŁO WYBRANE PRZEZ KOMISJĘ KONKURSOWĄ. ABY OTRZYMAĆ <b>NAGRODĘ II STOPNIA,</b> MUSIMY ZWERYFIKOWAĆ TWOJE
                                                ZGŁOSZENIE. <br />W TYM CELU PROSIMY O WYPEŁNIENIE PONIŻSZEGO FORMULARZA. WYPEŁNIENIE WSZYSTKICH OKIEN JEST NIEZBĘDNE, ABYŚMY MOGLI
                                                PRZYZNAĆ TOBIE NAGRODĘ. PROSIMY O DOŁĄCZENIE DO
                                                FORMULARZA ZDJĘCIA LUB SCANU PARAGONU.
                                            </span>

                                    </div>
                                    <div class="col"></div>
                                </div>

                                <form action="{{ route('confirmform') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="form-group regi-paragon text-left">
                                                <label class="pl-2">IMIĘ</label>
                                                <input name="name" type="text" class="form-control" placeholder="IMIĘ" required style="margin-bottom: 0"
                                                       value="{{ old('name') }}">
                                                @if($errors->has('name'))
                                                    <div class="invalid-feedback" style="color: yellow; display: block">
                                                        {{ $errors->first('name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="form-group regi-paragon text-left">
                                                <label class="pl-2">NAZWISKO</label>
                                                <input name="surname" type="text" class="form-control" placeholder="NAZWISKO" required style="margin-bottom: 0"
                                                       value="{{ old('surname') }}">
                                                @if($errors->has('surname'))
                                                    <div class="invalid-feedback" style="color: yellow; display: block">
                                                        {{ $errors->first('surname') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="form-group regi-paragon text-left">
                                                <label class="pl-2">NR TELEFONU</label>
                                                <input name="phone" type="text" class="form-control" placeholder="NR TELEFONU" required style="margin-bottom: 0"
                                                       value="{{ old('phone') }}">
                                                @if($errors->has('phone'))
                                                    <div class="invalid-feedback" style="color: yellow; display: block">
                                                        {{ $errors->first('phone') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="form-group regi-paragon text-left">
                                                <label class="pl-2">ADRES E-MAIL ZGŁOSZENIA</label>
                                                <input name="email" type="email" class="form-control" placeholder="ADRES E-MAIL ZGŁOSZENIA" required style="margin-bottom: 0"
                                                       value="{{ old('email') }}">
                                                @if($errors->has('email'))
                                                    <div class="invalid-feedback" style="color: yellow; display: block">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-12 my-4">adres pocztowy Laureata, na który ma zostać przekazana nagroda w konkursie</div>
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="form-group regi-paragon text-left">
                                                <label class="pl-2">ULICA</label>
                                                <input name="street" type="text" class="form-control" placeholder="ULICA" required style="margin-bottom: 0" value="{{ old('street') }}">
                                                @if($errors->has('street'))
                                                    <div class="invalid-feedback" style="color: yellow; display: block">
                                                        {{ $errors->first('street') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="form-group regi-paragon text-left">
                                                <label class="pl-2">NR DOMU</label>
                                                <input name="street_number" type="text" class="form-control" placeholder="NR DOMU" required style="margin-bottom: 0"
                                                       value="{{ old('street_number') }}">
                                                @if($errors->has('street_number'))
                                                    <div class="invalid-feedback" style="color: yellow; display: block">
                                                        {{ $errors->first('street_number') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="form-group regi-paragon text-left">
                                                <label class="pl-2">NR MIESZKANIA</label>
                                                <input name="street_number2" type="text" class="form-control" placeholder="NR MIESZKANIA" style="margin-bottom: 0"
                                                       value="{{ old('street_number2') }}">
                                                @if($errors->has('street_number2'))
                                                    <div class="invalid-feedback" style="color: yellow; display: block">
                                                        {{ $errors->first('street_number') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-7 col-sm-12">
                                            <div class="form-group regi-paragon text-left">
                                                <label class="pl-2">MIEJSCOWOŚĆ</label>
                                                <input name="city" type="text" class="form-control" placeholder="MIEJSCOWOŚĆ" required style="margin-bottom: 0" value="{{ old('city') }}">
                                                @if($errors->has('city'))
                                                    <div class="invalid-feedback" style="color: yellow; display: block">
                                                        {{ $errors->first('city') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-sm-12">
                                            <div class="form-group regi-paragon text-left">
                                                <label class="pl-2">KOD POCZTOWY</label>
                                                <input name="postal" type="text" class="form-control" placeholder="KOD POCZTOWY" required style="margin-bottom: 0" value="{{ old('postal') }}">
                                                @if($errors->has('postal'))
                                                    <div class="invalid-feedback" style="color: yellow; display: block">
                                                        {{ $errors->first('postal') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group regi-paragon text-left">
                                                <label class="pl-2">Zdjęcie/scan paragonu</label>
                                                <input name="paragon" type="file" class="form-control" required style="margin-bottom: 0">
                                                @if($errors->has('paragon'))
                                                    <div class="invalid-feedback" style="color: yellow; display: block">
                                                        {{ $errors->first('paragon') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label> <input type="checkbox" name="rule1" required />
                                                    Laureat oświadcza, że zapoznał się z  <a href="{{ asset('pdf/regulamin.pdf') }}" target="_blank"><b>Regulaminem Konkursu</b></a>
                                                    i akceptuje jego treść, zgodnie z zastrzeżeniem pkt. 3.1. Regulaminu
                                                    nie jest pracownikiem Organizatora Konkursu tj. HJ HEINZ Polska sp. z o. o. ani pracownikiem Organizatora Wykonawczego - AFEKT
                                                    sp. z o.o., ani nie jest pracownikiem Punktu Sprzedaży, a także nie jest członkiem najbliższej rodziny tych osób, ma ukończone
                                                    18 lat i  posiada pełną zdolność do czynności prawnych oraz  jest konsumentem na terenie Rzeczypospolitej Polskiej.

                                                   </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn text-white text-uppercase special-input btn-send-form"
                                                    style="background:#fff; color:#dd1d21 !important;">Zapisz</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="height: auto; margin-top: 30px;">
                <div class="col-md-4">
                    <p class="copyright"><br /><br /><a target="_blank" href="https://www.heinz.eu/privacy-notice">Polityka prywatności</a>
                        &nbsp; | &nbsp; <a target="_blank" href="http://wszystkoociasteczkach.pl/po-co-sa-ciasteczka/">Cookies</a></p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/general/logo.png') }}" class="order-1 order-lg-2 img-fluid" />
                </div>
                <div class="col-md-4">
                    <p class="copyright order-2 order-lg-3"><br /><br />ORGANIZATOREM WYKONAWCZYM KONKURSU JEST AFEKT SP. Z O.O.</p>
                </div>
            </div>

        </div>

    </div>

</section>


<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="yellow">Dziękujemy za wysłanie zgłoszenia</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-item" data-dismiss="modal">Zamknij</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Carousels -->
<script src="{{ asset('vendor/flickity/flickity.pkgd.min.js') }}"></script>

<!-- Custom JavaScript for this theme -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/mask.js') }}"></script>


<script>

    function autotab(current, to) {
        if (current.getAttribute &&
            current.value.length == current.getAttribute("maxlength")) {
            to.focus()
        }
    }

    $(document).ready(function () {

        $('input[name="birthday"]').mask('00-00-0000');
        $('input[name="phone"]').mask('+48 000 000 000');
        $('input[name="postal"]').mask('00-000');
    });
</script>

@if(session('formSaved'))
    <script>
        $('#myModal').modal('show')
    </script>
@endif

</body>
</html>