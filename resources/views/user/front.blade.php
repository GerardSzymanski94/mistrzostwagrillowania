<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mistrzostwa grillowania 2020">
    <title>Mistrzostwa grillowania 2020</title>
    <meta property="og:title" content="Mistrzostwa grillowania 2020"/>
    <meta property="og:description" content="Przenieś emocje na grilla"/>
    <meta property="og:image" content="images/general/lidl-new-fb.png"/>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Carousels -->
    <link href="vendor/flickity/flickity.min.css" rel="stylesheet">
    <!-- WOW js -->
    <link rel="stylesheet" href="vendor/wow/animate.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="images/general/logo.png" type="image/x-icon">
</head>

<body id="page-top">
<!-- Navigation -->
<nav class="pt-0 navbar navbar-expand-* navbar-light fixed-top" id="mainNav">
    <div class="container-fluid d-flex">
        <img src="images/general/lidl-new.png" alt="Lidl logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <img src="images/general/home.png"/>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-uppercase js-scroll-trigger" href="#start" data-show="#start"
                       data-bg="rules-btn">Home</a>
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
                    <a class="nav-link text-uppercase js-scroll-trigger products-btn" href="#products"
                       data-show="#products" data-bg="products-btn">Produkty<br/>biorące udział<br/>w akcji</a>
                    <hr/>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase w-100 regu" href="pdf/HEINZ_regulamin.pdf" target="_blank">Regulamin</a>
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
                <div class="h-100 d-flex flex-column justify-content-end">
                    <div class="row align-items-end">
                        <img class="img-fluid img-bg-left mb-lg-0 mb-4 mt-2"
                             src="images/general/mistrzostwo-girllowania-logo.png"/>
                        <div class="col-lg-6 d-lg-block col-12"></div>
                        <div class="col-lg-6 col-12 start-box pr-lg-5">

                            <img src="images/general/produkty-home.png"
                                 class="py-4 products-home d-lg-block d-none wow fadeIn" data-wow-delay="1s"/>

                        </div>
                    </div>
                    <div class="row start-box flex-lg-nowrap flex-wrap justify-content-lg-between justify-content-center mb-4 wow slideInLeft"
                         data-wow-duration="2s" data-wow-delay="2s">
                        <div class="d-lg-flex d-block pt-3 pl-lg-4 pl-0 py-lg-1 px-3 align-items-center">
                            <p class="icon-box">
                                <img src="images/general/koszyk-icon.png" class="icon d-block  mx-auto"/>
                            </p>
                            <p class="text-left yellow ml-lg-3 ml-0">Kup minium dwa <br/>
                                produkty heinz</p>
                        </div>
                        <div class="d-lg-flex d-block pt-3 pl-lg-4 pl-0 align-items-center">
                            <p class="icon-box">
                                <img src="images/general/cursor-icon.png" class="icon d-block  mx-auto"/>
                            </p>
                            <p class="text-left yellow ml-lg-1 ml-0">Wejdź na: <a class="white"
                                                                                  href="www.mistrzostwagillowania.pl">www.mistrzostwagillowania.pl</a>
                                <br/>
                                I napisz, dlaczego jesteś mistrzem grilla</p>
                        </div>
                        <div class="d-lg-flex d-block pt-3 pl-lg-4 pl-0 align-items-center">
                            <p class="icon-box">
                                <img src="images/general/winner-icon.png" class="icon d-block  mx-auto"/>
                            </p>
                            <p class="text-left yellow ml-lg-3 ml-0">Zostań mistrzem
                                <br/>
                                I zdobadź nagrody!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="registration" class="text-center elements">
                <div class="h-100">
                    <div class="row h-100">
                        <div class="col-lg-6 d-lg-block d-none col-12">
                            <img class="img-fluid img-bg-left mb-lg-0 mb-4"
                                 src="images/general/mistrzostwo-girllowania-logo.png"/>
                        </div>
                        <div class="col-lg-6 col-12 justify-content-center d-flex flex-column">
                            <div class="row">
                                <div class="offset-lg-2 col-lg-9 col-12">
                                    <h3 class="yellow text-center text-uppercase pb-3 pr-lg-5 pr-0 wow slideInRight"
                                        data-wow-duration="2s">Weź udział
                                        <br/>w konkursie:</h3>
                                    <div class="registration-box">

                                        <form id="sendRegisterForm" method="post" action="{{ route('saveform') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="wow slideInRight" data-wow-duration="2s"
                                                           data-wow-delay="0.2s">E-MAIL</label>
                                                    <input name="email" required type="email"
                                                           class="w-100 wow slideInRight" data-wow-duration="2s"
                                                           data-wow-delay="0.4s" placeholder="e-mail">
                                                    <label class="wow slideInRight" data-wow-duration="2s"
                                                           data-wow-delay="0.6s">NUMER PARAGONU</label>
                                                    <input name="bill" required type="text"
                                                           class="w-100 wow slideInRight" data-wow-duration="2s"
                                                           data-wow-delay="0.8s" placeholder="numer paragonu">
                                                    <img src="images/general/question-mark.png"
                                                         class="receipt-btn wow bounceIn" data-wow-delay="1s"
                                                         data-toggle="modal" data-target="#paragon"/>
                                                    <label class="wow slideInRight" data-wow-duration="2s"
                                                           data-wow-delay="1s">ZADANIE TO:</label>
                                                    <textarea name="description" required type="text"
                                                              class="w-100 product-price-input wow slideInRight"
                                                              data-wow-duration="2s" data-wow-delay="1.2s"
                                                              id="entry-text-area"
                                                              placeholder="Napisz, dlaczego jesteś mistrzem grilla? (do 300 znaków) "
                                                              cols="50" maxlength="300"></textarea>
                                                </div>
                                                <div class="col-12 boxes-row">
                                                    <label class="white text-left wow slideInRight"
                                                           data-wow-duration="2s" data-wow-delay="1.4s">Wybierz z listy
                                                        zakupiony
                                                        produkt
                                                        i zgłoś się do konkursu</label>
                                                    <div class="d-inline-block product-list w-100 text-left wow slideInRight"
                                                         data-wow-duration="2s" data-wow-delay="1.6s">
                                                        <input type="checkbox" id="one" name="product[]" value="1">
                                                        <label class="mt-2" for="one">
                                                            <span></span>Heinz sos curry mango 220 ml
                                                        </label>

                                                        <input type="checkbox" id="two" name="product[]" value="2">
                                                        <label for="two">
                                                            <span></span>HEINZ SOS CZOSNKOWY 220 ML
                                                        </label>

                                                        <input type="checkbox" id="three" name="product[]"
                                                               value="3">
                                                        <label for="three">
                                                            <span></span>HEINZ KLASYCZNY SOS BARBECUE 220 ML
                                                        </label>

                                                        <input type="checkbox" id="four" name="product[]" value="4">
                                                        <label for="four">
                                                            <span></span>HEINZ SOS BURGEROWY 220 ML
                                                        </label>

                                                        <input type="checkbox" id="five" name="product[]" value="5">
                                                        <label for="five">
                                                            <span></span>HEINZ SOS SALSA CHILLI 220 ML
                                                        </label>

                                                        <input type="checkbox" id="seven" name="product[]"
                                                               value="7">
                                                        <label for="seven">
                                                            <span></span>HEINZ SŁODKI SOS CHILLI 220 ML
                                                        </label>

                                                        <input type="checkbox" id="eight" name="product[]"
                                                               value="8">
                                                        <label for="eight">
                                                            <span></span>HEINZ MUSZTARDA MIODOWA 220 ML
                                                        </label>

                                                        <input type="checkbox" id="nine" name="product[]" value="9">
                                                        <label for="nine">
                                                            <span></span>HEINZ MUSZTARDA ŁAGODNA 220 ML
                                                        </label>

                                                        <input type="checkbox" id="ten" name="product[]" value="10">
                                                        <label for="ten">
                                                            <span></span>HEINZ KETCHUP 50% MNIEJ CUKRU I SOLI 400 ML
                                                        </label>

                                                        <input type="checkbox" id="eleven" name="product[]"
                                                               value="11">
                                                        <label for="eleven">
                                                            <span></span>HEINZ KETCHUP ŁAGODNY 450 ML
                                                        </label>

                                                        <input type="checkbox" id="twelve" name="product[]"
                                                               value="12">
                                                        <label for="twelve">
                                                            <span></span>HEINZ SOS CURRY MANGO 875 ML
                                                        </label>

                                                        <input type="checkbox" id="thirteen" name="product[]"
                                                               value="13">
                                                        <label for="thirteen">
                                                            <span></span>HEINZ SOS FIRECRACKER 875 ML
                                                        </label>

                                                        <input type="checkbox" id="fourteen" name="product[]"
                                                               value="14">
                                                        <label for="fourteen">
                                                            <span></span>HEINZ SOS CZOSNKOWY 875 ML
                                                        </label>

                                                        <input type="checkbox" id="fifteen" name="product[]"
                                                               value="15">
                                                        <label for="fifteen">
                                                            <span></span>HEINZ MUSZTARDA BARBECUE 875 ML
                                                        </label>
                                                        <input type="checkbox" id="sixteen" name="product[]"
                                                               value="16">
                                                        <label for="sixteen">
                                                            <span></span>HEINZ KETCHUP ŁAGODNY 875ml
                                                        </label>

                                                        <input type="checkbox" id="seventeen" name="product[]"
                                                               value="17">
                                                        <label for="seventeen">
                                                            <span></span>HEINZ FASOLKA BARBECUE 390 G
                                                        </label>

                                                        <input type="checkbox" id="eighteen" name="product[]"
                                                               value="18">
                                                        <label for="eighteen">
                                                            <span></span>HEINZ FASOLKA CHILLI 390 G
                                                        </label>

                                                        <input type="checkbox" id="nineteen" name="product[]"
                                                               value="19">
                                                        <label for="nineteen">
                                                            <span></span>HEINZ FIVE BEANZ: 5 RODZAJÓW FASOLKI W
                                                            SOSIE POMIDORWYM 415 G
                                                        </label>

                                                        <input type="checkbox" id="twenty" name="product[]"
                                                               value="20">
                                                        <label for="twenty">
                                                            <span></span>HEINZ CREATIONZ FASOLA W STYLU HISZPAŃSKIM
                                                            250 G
                                                        </label>

                                                        <input type="checkbox" id="twentyone" name="product[]"
                                                               value="21">
                                                        <label for="twentyone">
                                                            <span></span>HEINZ CREATIONZ FASOLA W STYLU WŁOSKIM 250
                                                            G
                                                        </label>

                                                        <input type="checkbox" id="twentytwo" name="product[]"
                                                               value="22">
                                                        <label for="twentytwo">
                                                            <span></span>HEINZ MAKARON W SOSIE SEROWYM 400 G
                                                        </label>

                                                        <input type="checkbox" id="twentythree" name="product[]"
                                                               value="23">
                                                        <label for="twentythree">
                                                            <span></span>HEINZ KRĄŻKI MAKARONOWE W SOSIE POMIDOROWYM
                                                            400 G
                                                        </label>

                                                    </div>
                                                    <div class="d-flex wow slideInRight" data-wow-duration="2s"
                                                         data-wow-delay="1.6s">
                                                        <div class="group mt-2">
                                                            <input name="rule1" required type="checkbox" id="regu"
                                                                   class="check">
                                                            <label for="regu">Zapoznałem/zapoznałam się z <a
                                                                        href="pdf/HEINZ_regulamin.pdf"
                                                                        target="_blank">Regulaminem</a> i akceptuję
                                                                wszystkie
                                                                zawarte w nim warunki, w tym potwierdzam, iż
                                                                znane
                                                                są mi
                                                                informacje dotyczące przetwarzania moich danych
                                                                osobowych, o
                                                                których mowa w Rozdziale 3. Regulaminu.”</label>
                                                        </div>
                                                    </div>
                                                    <div class="boxes-row justify-content-between w-100 mt-2 mb-4 wow slideInRight"
                                                         data-wow-duration="2s" data-wow-delay="1.8s">

                                                        <a class="btn-item mb-lg-0 mb-3" href="pdf/HEINZ_regulamin.pdf"
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
                    <div class="row">
                        <h2 class="col-12 text-uppercase text-center yellow mt-5 mb-2">Wygraj</h2>
                    </div>
                    <div class="row align-items-end">
                        <div class="col-lg-4 col-12 wow bounceInUp">
                            <img class="img-fluid" src="images/general/telewizor.png" alt="Telewizor wygrana">
                            <div class="d-flex justify-content-center align-items-baseline">
                                <p class="yellow">2x</p>
                                <p>telewizor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 wow bounceInUp" data-wow-delay="1s">
                            <img class="img-fluid" src="images/general/grill.png" alt="Grill wygrana">
                            <div class="d-flex justify-content-center align-items-baseline">
                                <p class="yellow">20x</p>
                                <p class="text-left align-self-end">Grill <br/>elektryczny</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 wow bounceInUp" data-wow-delay="2s">
                            <img class="img-fluid" src="images/general/decathlon-bon.png" alt="dectahlon wygrana">
                            <div class="d-flex justify-content-center align-items-center">
                                <p class="yellow">40x</p>
                                <p class="text-left">karty podarunkowe<br/>
                                    do decathlon<br/>
                                    o wartości 200 zł
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="products" class="text-center elements mx-5">
                <div class="h-100 container my-5">
                    <div class="row h-100">
                        <div class="col-lg-12 log-12 justify-content-center">

                            <h3 class="yellow text-center text-uppercase mt-lg-2 mt-5 mb-3">Produkty biorące udział
                                w akcji:
                            </h3>
                            <div class="main-carousel mt-5">

                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-sos-curry-mango-220-ml.png">
                                        <p class="name">Heinz sos<br/>
                                            curry mango<br>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-sos--czosnkowy-220-ml.png">
                                        <p class="name">Heinz sos <br/>
                                            czosnkowy<br>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/Heinz-sos--barbecue-220-ml.png">
                                        <p class="name">Heinz sos <br/>
                                            klasyczny barbecue<br>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/Heinz-sos-burgerowy-220-ml.png">
                                        <p class="name">Heinz sos<br/>
                                            burgerowy<br>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/sos-salsa-chilli-220-ml.png">
                                        <p class="name">Heinz salsa<br/>
                                            chilli<br>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/sweet-chili-sauce-220-ml.png">
                                        <p class="name">Heinz słodki<br/>
                                            chilli<br>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/honey-mustard-220-ml.png">
                                        <p class="name">Heinz musztarda <br/>
                                            miodowa<br>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/yellow-mustard-mild-220-ml.png">
                                        <p class="name">Heinz musztarda<br/>
                                            łagodna<br>
                                            <span class="yellow">220 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-ketchup-50-mniej-cukru.png">
                                        <p class="name">Heinz keczup<br/>
                                            50% mniej cukru i soli<br>
                                            <span class="yellow">400 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-ketchup-Łagodny-450-g.png">
                                        <p class="name">Heinz keczup<br/>
                                            łagodny<br>
                                            <span class="yellow">450 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/curry-mango-sauce-875-ml.png">
                                        <p class="name">Heinz sos<br/>
                                            curry mango<br>
                                            <span class="yellow">875 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/firecracer-sauce-875-ml.png">
                                        <p class="name">Heinz sos<br/>
                                            firecracer<br>
                                            <span class="yellow">875 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/kremowy-sos-czosnkowy-675-ml.png">
                                        <p class="name">Heinz sos<br/>
                                            czosnkowy<br>
                                            <span class="yellow">875 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/mustard-barbecue-sauce-875-ml.png">
                                        <p class="name">Heinz musztarda<br/>
                                            barbecue<br>
                                            <span class="yellow">875 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz ketchup lagodny 855 g.png">
                                        <p class="name">Heinz keczup<br/>
                                            łagodny<br>
                                            <span class="yellow">875 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-fasolka-barbecue-390-g.png">
                                        <p class="name">Heinz fasolka<br/>
                                            barbecue<br>
                                            <span class="yellow">390 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/Heinz-fasolka-chilli-390-g.png">
                                        <p class="name">Heinz fasolka<br/>
                                            chilli<br>
                                            <span class="yellow">390 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-fasolka-barbecue-390-g.png">
                                        <p class="name">Heinz fasolka<br/>
                                            five beanz<br>
                                            <span class="yellow">415 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-Creationz-fasola-w-stylu-hiszpanskim-250-g.png">
                                        <p class="name">Heinz creationz fasola<br/>
                                            w stylu hiszpańskim<br>
                                            <span class="yellow">250 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-Creationz-fasola-w-stylu-wloskim-250-g.png">
                                        <p class="name">Heinz creationz fasola<br/>
                                            w stylu włoskim<br>
                                            <span class="yellow">250 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/heinz-macaroni.png">
                                        <p class="name">Heinz Makaron<br/>
                                            w sosie serowym<br>
                                            <span class="yellow">400 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/heinz-spagetti.png">
                                        <p class="name">Heinz krążki makaronowe<br/>
                                            w sosie pomidorowym<br>
                                            <span class="yellow">400 g</span></p>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="col-lg-12 products-info-2 d-flex flex-wrap align-items-center justify-content-center mt-3 wow bounceInUp">
                                <p class="yellow">Pełna lista produktów, biorących udział w konkursie dostępna tutaj
                                </p>
                                <img src="images/general/arrow.png" class="arrow-icon"/>
                                <a href="pdf/HEINZ_lista_produktow.pdf" target="_blank"><img
                                            src="images/general/ikona-pdf.png"
                                            class="pdf-icon"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact" class="text-center elements">
                <div class="h-100">
                    <div class="row h-100">
                        <div class="col-lg-5 d-lg-block d-none col-12">
                            <img class="img-fluid img-bg-left"
                                 src="images/general/mistrzostwo-girllowania-logo.png"/>
                        </div>
                        <div class="col-lg-7 col-12 d-flex flex-column justify-content-center">
                            <div class="contact-box">

                                <form id="sendContactForm" method="post" action="{{ route('contactform') }}">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <div class='col-8 wow slideInRight' data-wow-duration="2s">
                                            <h3 class="mb-4 mb-lg-0 yellow">Jeśli masz pytania,<br/> napisz do
                                                nas:
                                            </h3>
                                            <label class="wow slideInRight" data-wow-duration="2s"
                                                   data-wow-delay="0.2s">E-MAIL:</label>
                                            <input name="email" required type="email" class="w-100 wow slideInRight"
                                                   data-wow-duration="2s" data-wow-delay="0.4s" placeholder="E-mail">
                                        </div>
                                        <div class="col-8">
                                            <label class="wow slideInRight" data-wow-duration="2s"
                                                   data-wow-delay="0.6s">Wiadomość:</label>
                                            <div class="textarea-box wow slideInRight" data-wow-duration="2s"
                                                 data-wow-delay="0.8s">
                                                <textarea class="mb-3" placeholder="Wiadomość" name="body"></textarea>
                                            </div>
                                            <p class="direct mt-1 text-left wow slideInRight" data-wow-duration="2s"
                                               data-wow-delay="1s">Lub skontaktuj się bezpośrednio
                                                pod
                                                adresem:
                                                <a class="yellow"
                                                   href="mailto:kontakt@promocjeheinz.pl">kontakt@promocjeheinz.pl</a>
                                            </p>
                                            <div class="boxes-row mt-2 wow slideInRight" data-wow-duration="2s"
                                                 data-wow-delay="1.2s">
                                                <div class="btn-box">
                                                    <input type="submit" class="btn-item" value="Wyślij">
                                                </div>
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
</section>
<footer class="mt-xl-0 pt-1 pb-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12">
                <p class="py-2 copyright"><a target="_blank" href="https://www.heinz.eu/privacy-notice">Polityka
                        prywatności</a> &nbsp; | &nbsp; <a target="_blank"
                                                           href="http://wszystkoociasteczkach.pl/po-co-sa-ciasteczka/">Cookies</a>
                    &nbsp; | &nbsp;
                    ORGANIZATOREM WYKONAWCZYM KONKURSU JEST AFEKT SP. Z O.O.
                </p>
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
<div id="myModalContact" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="yellow">Dziękujemy za wysłanie pytanie</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-item" data-dismiss="modal">Zamknij</button>
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
<!-- WOW JS -->
<script src="vendor/wow/wow.min.js"></script>
<!-- Custom JavaScript for this theme -->
<script src="js/scripts.js"></script>
<script src="js/mask.js"></script>

<script>
    // $('#myModal').modal('show')
</script>
@if(session('formSaved'))
    <script>
        $('#myModal').modal('show')
    </script>
@endif
@if(session('contact'))
    <script>
        $('#myModalContact').modal('show')
    </script>
@endif
</body>

</html>