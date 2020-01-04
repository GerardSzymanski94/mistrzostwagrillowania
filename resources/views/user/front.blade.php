<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Weź udział w konkursie Heinz i zgarnij fantastyczne nagrody! Do wygrania 45x walizka Heinz oraz 20x zestaw porduktów heinz ">
    <title>Na Ferie Heinz pakuje najlepiej</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Carousels -->
    <link href="vendor/flickity/flickity.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="images/general/logo.png" type="image/x-icon">
</head>

<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-* navbar-light fixed-top" id="mainNav">
    <div class="container-fluid d-flex justify-content-end">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <img src="images/general/home.png"/>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-uppercase js-scroll-trigger" href="#start" data-show="#start"
                       data-bg="rules-btn">Zasady</a>
                    <hr/>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase w-100 js-scroll-trigger prices" href="#prices"
                       data-show="#prices" data-bg="prices-btn">Nagrody</a>
                    <hr/>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase js-scroll-trigger" href="#registration"
                       data-show="#registration" data-bg="rules-btn">Weź udział</a>
                    <hr/>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase js-scroll-trigger" href="#products" data-show="#products"
                       data-bg="products-btn">Produkty<br/>biorące udział<br/>w akcji</a>
                    <hr/>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase w-100 regu" href="#" target="_blank">Regulamin</a>
                    <hr/>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase js-scroll-trigger" href="#contact" data-show="#contact"
                       data-bg="contact-btn">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section>
    <div id="video-wrap" class="video-wrap">
        <div class="container h-100">
            <div id="start" class="text-center elements">
                <div class="h-100">
                    <div class="row">
                        <div class="col-lg-5 d-lg-block col-12">
                            <img class="img-fluid img-bg-left mb-lg-0 mb-4" src="images/general/main-img.png"/>
                        </div>
                        <div class="col-lg-7 col-12 start-box pr-lg-5">
                            <div class="mb-4 logo-and-title">
                                <img src="images/general/logo.png" class="mb-3 pt-0 mr-lg-4"/>
                                <h2 class="text-uppercase">na ferie heinz pakuje najlepiej </h2>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img src="images/general/koszyk-icon.png" class="icon d-block mb-3 mr-4"/>
                                <p class="margin-numbers">1.&nbsp;</p>
                                <p class="text-left">Kup dowolny produkt Heinz<br/>w dniach 13.01 do
                                    26.01.2020<br/>i zachowaj paragon</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="images/general/cursor.png" class="icon mr-4"/>
                                <p class="mt-3">2.&nbsp;</p>
                                <div class="btn-box d-lg-block">
                                    <p class="text-left">Napisz, co lubisz jeść z Heinz <br/>zimą i dlaczego</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="images/general/price.png" class="icon mb-3 mr-4"/>
                                <p class="margin-numbers">3.&nbsp;</p>
                                <p class="text-left">Wygraj wyjątkową walizkę<br/>Heinz lub zestaw
                                    produktów<br/>Heinz</p>
                            </div>
                            <div class="btn-box text-center d-flex justify-content-center w-75">
                                <a href="#registration" data-show="#registration" class="btn-item">Formularz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="registration" class="text-center elements">
                <div class="h-100">
                    <div class="row">
                        <div class="col-lg-5 d-lg-block d-none col-12">
                            <img class="img-fluid img-bg-left" src="images/general/main-img.png"/>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="mb-2 logo-and-title mt-2 mt-lg-0">
                                <img src="images/general/logo.png" class="mb-3 mr-xl-4 mt-4 mt-xl-0"/>
                                <h2 class="text-uppercase">na ferie heinz pakuje najlepiej </h2>
                            </div>
                            <div class="row">
                                <div class="offset-lg-1 col-lg-9 col-12">
                                    <h3 class="yellow text-center text-uppercase">Weź udział w konkursie:</h3>
                                    <div class="registration-box">

                                        @if(session('saveForm'))
                                            <div class="alert alert-success">
                                                Twoje zgłoszenie zostało wysłane.
                                            </div>
                                        @endif

                                        <form id="sendRegisterForm" method="post" action="{{ route('saveform') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <label>E-MAIL</label>
                                                    <input name="email" required type="email" class="w-100"
                                                           placeholder="e-mail">
                                                    <label>NUMER PARAGONU</label>
                                                    <input name="bill" required type="text" class="w-100"
                                                           placeholder="numer paragonu">
                                                    <img src="images/general/question-mark.png" class="receipt-btn"
                                                         data-toggle="modal" data-target="#paragon"/>
                                                    <label>ZADANIE TO:</label>
                                                    <textarea name="description" required type="text"
                                                              class="w-100 product-price-input" id="entry-text-area"
                                                              placeholder="Napisz, co lubisz jeść z heinz zimą i dlaczego? (300 ZNAKÓW)"
                                                              cols="50"></textarea>
                                                </div>
                                                <div class="col-12 boxes-row">
                                                    <div class="text-right counter">Pozostało <span
                                                                class="entry-form-section__counter px-1" id="chars"> 300
                                                            </span>
                                                        znaków
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="group">
                                                            <input name="rule1" required type="checkbox" id="regu"
                                                                   class="check">
                                                            <label for="regu">Zapoznałem się z <a href="#"
                                                                                                  target="_blank">Regulaminem</a>i akceptuję
                                                                wszystkie
                                                                zawarte w nim warunki, w tym potwierdzam, iż znane
                                                                są mi
                                                                informacje dotyczące przetwarzania moich danych
                                                                osobowych, o
                                                                których mowa w Rozdziale 4. Regulaminu.”</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block product-list w-100 text-left">
                                                        <input type="checkbox" id="one" name="product[]" value="1">
                                                        <label class="mt-2" for="one">
                                                            <span></span>Heinz ketchup łagodny 570 g
                                                        </label>

                                                        <input type="checkbox" id="two" name="product[]" value="2">
                                                        <label for="two">
                                                            <span></span>Heinz ketchup łagodny 570 g
                                                        </label>

                                                        <input type="checkbox" id="three" name="product[]" value="3">
                                                        <label for="three">
                                                            <span></span>Heinz ketchup łagodny 570 g
                                                        </label>

                                                        <input type="checkbox" id="four" name="product[]" value="4">
                                                        <label for="four">
                                                            <span></span>Heinz ketchup łagodny 570 g
                                                        </label>

                                                        <input type="checkbox" id="five" name="product[]" value="5">
                                                        <label for="five">
                                                            <span></span>Heinz ketchup łagodny 570 g
                                                        </label>

                                                    </div>
                                                    <div class="boxes-row justify-content-between w-100 mt-2 ">

                                                        <a class="btn-item mb-lg-0" href="#"
                                                           target="_blank">Regulamin</a>

                                                        <input type="submit" class="btn-item" value="Wyślij">

                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="prices" class="text-center elements">
                <div class="h-100">
                    <div class="row ">
                        <div class="col-12 d-xl-none d-block mt-5 prices-container">
                            <div class="mb-2 logo-and-title">
                                <img src="images/general/logo.png" class="mb-3 mr-xl-4 mt-4 mt-xl-0"/>
                                <h2 class="text-uppercase">na ferie heinz pakuje najlepiej </h2>
                            </div>
                        </div>
                        <div class="col-12 d-xl-none d-block prices-container">
                            <img src="images/general/walizka.png" alt="Walizka" class="img-fluid">
                            <div class="col-12 d-xl-none d-block">
                                <img src="images/general/wygraj-20-zestawow.png" alt="20 zestawów"
                                     class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="products" class="text-center elements">
                <div class="h-100">
                    <div class="row">
                        <div class="col-lg-5 d-lg-block d-none col-12">
                            <img class="img-fluid img-bg-left" src="images/general/main-img.png"/>
                        </div>
                        <div class="col-lg-7 pr-lg-5 mt-lg-2 pt-lg-0 pt-3 mt-5 pr-0">
                            <div class="mb-2 logo-and-title">
                                <img src="images/general/logo.png" class="mb-3 mr-xl-4 mt-4 mt-xl-0"/>
                                <h2 class="text-uppercase">na ferie heinz pakuje najlepiej </h2>
                            </div>
                            <h3 class="yellow text-center text-uppercase mt-2">produkty biorące udział w akcji:</h3>
                            <div class="main-carousel">
                                <div class="carousel-cell col-12 col-md-4 col-lg-4 px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz ketchup łagodny 855 g.png">
                                        <p class="name">Heinz ketchup<br>
                                            łagodny <br/>
                                            <span class="yellow">855 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-ketchup-jalapeno-chilli--570-g.png">
                                        <p class="name">Heinz ketchup <br/>
                                            jalapeno chill<br>
                                            <span class="yellow">570 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-ketchup-Łagodny-450-g.png">
                                        <p class="name">Heinz ketchup <br/>
                                            Łagodny<br>
                                            <span class="yellow">450 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-ketchup-Łagodny-570-g.png">
                                        <p class="name">Heinz ketchup<br>
                                            łagodny <br/>
                                            <span class="yellow">570 g</span></p>
                                    </div>
                                </div>

                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-Creationz-fasola-w-stylu-hiszpańskim-250-g.png"
                                             class="long-img-2">
                                        <p class="name">Heinz Creationz fasola <br>
                                            w stylu hiszpańskim<br>
                                            <span class="yellow">250 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-Creationz-fasola-w-stylu-włoskim-250-g.png"
                                             class="long-img-1">
                                        <p class="name">Heinz Creationz fasola<br>
                                            w stylu włoskim<br/>
                                            <span class="yellow">250 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-fasolka-barbecue-390-g.png">
                                        <p class="name">Heinz fasolka <br>
                                            barbecue <br/>
                                            <span class="yellow">390 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid" src="images/products/Heinz-fasolka-chilli-390-g.png">
                                        <p class="name">Heinz fasolka<br>
                                            chilli <br>
                                            <span class="yellow">390 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-fasolka-five-beanz-415-g.png">
                                        <p class="name">Heinz fasolka<br>
                                            five beanz <br/>
                                            <span class="yellow">415 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-fasolka-w-sosie-pomidorowym-415-g.png"
                                             class="long-img-1">
                                        <p class="name">Heinz fasolka<br>
                                            w sosie pomidorowym <br/>
                                            <span class="yellow">415 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid" src="images/products/Heinz--majonez-220-ml.png"
                                             class="long-img-1">
                                        <p class="name">Heinz majonez<br>
                                            <span class="yellow"> 220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-pikantny-sos-barbecue-400-ML.png"
                                             class="long-img-1">
                                        <p class="name">Heinz pikantny<br>
                                            sos barbecue <br/>
                                            <span class="yellow">400 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-słodki-sos-barbecue-400-ML.png"
                                             class="long-img-1">
                                        <p class="name">Heinz słodki<br>
                                            sos barbecue<br/>
                                            <span class="yellow">400 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid" src="images/products/Heinz-sos--barbecue-220-ml.png"
                                             class="long-img-1">
                                        <p class="name">Heinz sos<br>
                                            barbecue<br/>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid" src="images/products/Heinz-sos-barbecue-400-ML.png"
                                             class="long-img-1">
                                        <p class="name">Heinz sos<br>
                                            barbecue <br/>
                                            <span class="yellow">400 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid" src="images/products/Heinz-sos-burgerowy-220-ml.png"
                                             class="long-img-1">
                                        <p class="name">Heinz sos<br>
                                            burgerowy <br/>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-sos-curry-mango-220-ml.png"
                                             class="long-img-1">
                                        <p class="name">Heinz sos<br>
                                            curry mango <br/>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid" src="images/products/Heinz-sos--czosnkowy-220-ml.png"
                                             class="long-img-1">
                                        <p class="name">Heinz sos<br>
                                            czosnkowy <br/>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid" src="images/products/Heinz-sos-czosnkowy-400-ML.png"
                                             class="long-img-1">
                                        <p class="name">Heinz sos<br>
                                            czosnkowy <br/>
                                            <span class="yellow">400 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-12 col-md-4 col-lg-4  px-1">
                                    <div class="w-100">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-sos-salsa-chilli-220-ml.png"
                                             class="long-img-1">
                                        <p class="name">Heinz sos<br>
                                            salsa chilli<br/>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="col-lg-12 products-info-2 d-flex flex-wrap align-items-center justify-content-center">
                                <p>Pełna lista produktów, biorących udział w konkursie dostępna tutaj</p>
                                <img src="images/general/arrow.png" class="arrow-icon"/>
                                <a href="pdf/lista_produktow.pdf" target="_blank"><img
                                            src="images/general/ikona-pdf.png" class="pdf-icon"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact" class="text-center elements">
                <div class="h-100">
                    <div class="row">
                        <div class="col-lg-5 d-lg-block d-none col-12">
                            <img class="img-fluid img-bg-left" src="images/general/main-img.png"/>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="mb-2 logo-and-title">
                                <img src="images/general/logo.png" class="mb-3 mr-4 pt-xl-3 pt-5 mt-5 mt-xl-0"/>
                                <h2 class="text-uppercase">na ferie heinz pakuje najlepiej </h2>
                            </div>
                            <div class="contact-box">

                                @if(session('contact'))
                                    <div class="alert alert-success">
                                        Twoja wiadomość została wysłana.
                                    </div>
                                @endif

                                <form id="sendContactForm" method="post" action="{{ route('contactform') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <h3 class="mb-4 mb-lg-0">Jeśli masz pytania,<br/> napisz do
                                                nas:
                                            </h3>
                                            <label>E-MAIL:</label>
                                            <input name="email" required type="email" class="w-100"
                                                   placeholder="E-mail">
                                        </div>
                                        <div class="d-flex flex-wrap flex-lg-nowrap">
                                            <div class="col-lg-7 col-12">
                                                <label>Wiadomość:</label>
                                                <div class="textarea-box">
                                                    <textarea name="content" placeholder="Wiadomość"></textarea>
                                                </div>
                                            </div>
                                            <div class="boxes-row col-lg-4 col-12 mt-4">
                                                <p class="direct">Lub skontaktuj się bezpośrednio pod
                                                    adresem:
                                                    <br/>
                                                    <a
                                                            href="mailto:kontakt@promocjeheinz.pl">kontakt@promocjeheinz.pl</a>
                                                </p>
                                                <div class="btn-box">
                                                    <input type="submit" class="btn-item" value="Wyślij">
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<footer class="mt-xl-0 pt-1 pb-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-8 col-12">
                <p class="copyright"><a target="_blank" href="https://www.heinz.eu/privacy-notice">Polityka
                        prywatności</a> &nbsp; | &nbsp; <a target="_blank"
                                                           href="http://wszystkoociasteczkach.pl/po-co-sa-ciasteczka/">Cookies</a></p>
                <p class="copyright pt-1">ORGANIZATOREM WYKONAWCZYM KONKURSU JEST AFEKT SP. Z O.O.</p>
            </div>
            <div class="col-sm-4 col-12 mt-lg-0 d-flex">
                <img src="images/general/biedronka.png" alt="Biedronka logo" class="img-fluid mr-0 mr-lg-3"/>
            </div>
        </div>
    </div>
    </div>
</footer>
<!-- The Modal -->
<div id="paragon" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <img src="images/general/paragon.png" alt="Paragon"/>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Carousels -->
<script src="vendor/flickity/flickity.pkgd.min.js"></script>
<!-- Custom JavaScript for this theme -->
<script src="js/scripts.js"></script>
<script src="js/mask.js"></script>
</body>

</html>