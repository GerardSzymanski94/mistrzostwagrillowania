<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="Konkurs Crunchips oraz Nic noc's - jest granie jest chrupanie">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="#">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    <section id="form" class="home mt-3 mt-xl-0 entry-form-section form-winner">
        <div class="container-fluid">
            <div class="row ">
                <h1 class="white text-center col-12">Formularz zwycięzcy</h1>
                <div class="col"></div>
                <div class="col-10 text-center mt-4">

                    @if(session('correct-data-prize'))

                        <p style="text-align: center;font-size: 17px; height: 100vh;">
                            DZIĘKUJEMY ZA WYPEŁNIENIE FORMULARZA
                        </p>

                    @else



                        <form enctype="multipart/form-data" method="post" action="{{ route('confirmform') }}"
                              class="form-register-recipe col-12 col-md-8 mx-auto">
                            @csrf
                            <input type="hidden" name="form1" value="true">

                            <div class="position-relative mb-2">
                                <label for="name">Imię</label>
                                <input required name="name" type="text" class="pl-3 py-2 w-100 test" placeholder="Imię">
                            </div>
                            <div class="position-relative mb-2">
                                <label for="surname">Nazwisko</label>
                                <input required name="surname" type="text" class="pl-3 py-2 w-100" placeholder="Nazwisko">
                            </div>

                            <h4 class="my-4 white">Adres</h4>
                            <div class="position-relative mb-2">
                                <label for="street">Ulica i numer domu</label>
                                <input required name="street" id="account-street" type="text" class="pl-3 py-2 test w-100" placeholder="Ulica">
                            </div>
                            <div class="position-relative mb-2">
                                <label for="postal">Kod pocztowy</label>
                                <input required name="postal" id="account-postal" type="text" class="pl-3 py-2 test w-100" placeholder="Kod pocztowy">
                            </div>
                            <div class="position-relative mb-2">
                                <label for="city">Miasto</label>
                                <input required name="city" id="account-city" type="text" class="pl-3 py-2 test w-100" placeholder="Miasto">
                            </div>
                            <div class="position-relative mb-2">
                                <label>Wgraj zdjęcie paragonu </label>
                                <input required name="paragonimg" type="file" class="pl-3 py-2 w-100" placeholder="Wgraj zdjęcie paragonu">
                            </div>
                            <div class="d-flex justify-content-end mb-1">
                                <input class="form-button btn-standard" type="submit" value="Wyślij">
                            </div>
                        </form>

                    @endif
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"><\/script>')</script>
<script src="{{ asset('js/mask.js') }}"></script>

<script>
    $(document).ready(function () {
        $('input[name="postal"]').mask('00-000');
        $('input[name="phone"]').mask('+48 000 000 000');
    });

    $('#method-account').on('click', function () {
        $('#account-input').attr('disabled', false);
        $('#account-phone').attr('disabled', 'disabled');
    });
    $('#method-phone').on('click', function () {
        $('#account-input').attr('disabled', 'disabled');
        $('#account-phone').attr('disabled', false);
    });
</script>

</body>
</html>
