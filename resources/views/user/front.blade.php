<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mistrzostwa grillowania 2020">
    <title>Mistrzostwa grillowania 2020</title>
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
                       data-show="#products"
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
                <div class="h-100 d-flex flex-column justify-content-end">
                    <div class="row align-items-end">
                        <img class="img-fluid img-bg-left mb-lg-0 mb-4 mt-2"
                             src="images/general/mistrzostwo-girllowania-logo.png"/>
                        <div class="col-lg-6 d-lg-block col-12"></div>
                        <div class="col-lg-6 col-12 start-box pr-lg-5">

                            <img src="images/general/produkty-home.png" class="py-4 products-home"/>

                        </div>
                    </div>
                    <div class="row start-box justify-content-between mb-4">
                        <div class="d-flex pt-3 pl-4 align-items-center">
                            <p class="icon-box">
                                <img src="images/general/koszyk-icon.png" class="icon d-block  mx-auto"/>
                            </p>
                            <p class="text-left yellow ml-3">Kup minium dwa <br/>
                                produkty heinz</p>
                        </div>
                        <div class="d-flex pt-3 pl-4 align-items-center">
                            <p class="icon-box">
                                <img src="images/general/cursor-icon.png" class="icon d-block  mx-auto"/>
                            </p>
                            <p class="text-left yellow ml-1">Wejdź na:<a class="white"
                                                                         href="www.mistrzostwagillowania.pl">www.mistrzostwagillowania.pl</a>
                                <br/>
                                I napisz, dlaczego jesteś mistrzem grilla</p>
                        </div>
                        <div class="d-flex pt-3 pl-4 align-items-center">
                            <p class="icon-box">
                                <img src="images/general/winner-icon.png" class="icon d-block  mx-auto"/>
                            </p>
                            <p class="text-left yellow ml-3">Zostań mistrzem
                                <br/>
                                I zdobadź nagrody!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="registration" class="text-center elements">
                <div class="h-100">
                    <div class="row h-100">
                        <div class="col-lg-6 d-lg-block col-12">
                            <img class="img-fluid img-bg-left mb-lg-0 mb-4"
                                 src="images/general/mistrzostwo-girllowania-logo.png"/>
                        </div>
                        <div class="col-lg-6 col-12 justify-content-center d-flex flex-column">
                            <div class="row">
                                <div class="offset-lg-2 col-lg-8 col-12">
                                    <h3 class="yellow text-center text-uppercase pb-5">Weź udział w konkursie:</h3>
                                    <div class="registration-box">

                                        <form id="sendRegisterForm" method="post" action="">
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
                                                              placeholder="Napisz, dlaczego jesteś mistrzem grilla? (do 300 znaków) "
                                                              cols="50" maxlength="300"></textarea>
                                                </div>
                                                <div class="col-12 boxes-row">
                                                    <label class="white text-left">Wybierz z listy zakupiony
                                                        produkt
                                                        i zgłoś się do konkursu</label>
                                                    <div class="d-inline-block product-list w-100 text-left">
                                                        <input type="checkbox" id="one" name="product[]" value="1">
                                                        <label class="mt-2" for="one">
                                                            <span></span>Heinz sos curry mango 220 ml
                                                        </label>

                                                        <input type="checkbox" id="two" name="product[]" value="2">
                                                        <label for="two">
                                                            <span></span>Heinz sos burgerowy 220 ml
                                                        </label>

                                                        <input type="checkbox" id="three" name="product[]"
                                                               value="3">
                                                        <label for="three">
                                                            <span></span>Heinz sos salsa chilli 220 ml
                                                        </label>

                                                        <input type="checkbox" id="four" name="product[]" value="4">
                                                        <label for="four">
                                                            <span></span>Heinz majonez 220 ml
                                                        </label>

                                                        <input type="checkbox" id="five" name="product[]" value="5">
                                                        <label for="five">
                                                            <span></span>Heinz klasyczny sos barbecue 220 ml
                                                        </label>

                                                        <input type="checkbox" id="seven" name="product[]"
                                                               value="7">
                                                        <label for="seven">
                                                            <span></span>Heinz creationz fasola w stylu
                                                            hiszpańskim
                                                            250 g
                                                        </label>

                                                        <input type="checkbox" id="eight" name="product[]"
                                                               value="8">
                                                        <label for="eight">
                                                            <span></span>Heinz creationz fasola w stylu włoskim
                                                            250
                                                            g
                                                        </label>

                                                        <input type="checkbox" id="nine" name="product[]" value="9">
                                                        <label for="nine">
                                                            <span></span>Heinz fasolka barbecue 390 g
                                                        </label>

                                                        <input type="checkbox" id="ten" name="product[]" value="10">
                                                        <label for="ten">
                                                            <span></span>Heinz fasolka chilli 390 g
                                                        </label>

                                                        <input type="checkbox" id="eleven" name="product[]"
                                                               value="11">
                                                        <label for="eleven">
                                                            <span></span>Heinz fasolka w sosie pomidorowym 415 g
                                                        </label>

                                                        <input type="checkbox" id="twelve" name="product[]"
                                                               value="12">
                                                        <label for="twelve">
                                                            <span></span>Heinz fasolka five beanz 415 g
                                                        </label>

                                                        <input type="checkbox" id="thirteen" name="product[]"
                                                               value="13">
                                                        <label for="thirteen">
                                                            <span></span>Heinz klasyczny sos barbecue 400 ml
                                                        </label>

                                                        <input type="checkbox" id="fourteen" name="product[]"
                                                               value="14">
                                                        <label for="fourteen">
                                                            <span></span>Heinz słodki sos barbecue 400ml
                                                        </label>

                                                        <input type="checkbox" id="fifteen" name="product[]"
                                                               value="15">
                                                        <label for="fifteen">
                                                            <span></span>Heinz sos chilli barbecue 400 ml
                                                        </label>
                                                        <input type="checkbox" id="seventeen" name="product[]"
                                                               value="17">
                                                        <label for="seventeen">
                                                            <span></span>Heinz ketchup łagodny 450 g
                                                        </label>

                                                        <input type="checkbox" id="eighteen" name="product[]"
                                                               value="18">
                                                        <label for="eighteen">
                                                            <span></span>Heinz ketchup łagodny 570 g
                                                        </label>

                                                        <input type="checkbox" id="nineteen" name="product[]"
                                                               value="19">
                                                        <label for="nineteen">
                                                            <span></span>Heinz ketchup pikantny 570 g
                                                        </label>

                                                        <input type="checkbox" id="twenty" name="product[]"
                                                               value="20">
                                                        <label for="twenty">
                                                            <span></span>Heinz ketchup jalapeño chilli 570 g
                                                        </label>
                                                        <input type="checkbox" id="twentyone" name="product[]"
                                                               value="21">
                                                        <label for="twentyone">
                                                            <span></span>Heinz sos czosnkowy 400 ml
                                                        </label>

                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="group mt-2">
                                                            <input name="rule1" required type="checkbox" id="regu"
                                                                   class="check">
                                                            <label for="regu">Zapoznałem/zapoznałam się z <a
                                                                        href="pdf/regulamin.pdf"
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
                                                    <div class="boxes-row justify-content-between w-100 mt-2 mb-4">

                                                        <a class="btn-item mb-lg-0 mb-3" href="pdf/regulamin.pdf"
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
                        <div class="col-lg-4 col-12">
                            <img class="img-fluid" src="images/general/telewizor.png" alt="Telewizor wygrana">
                            <div class="d-flex justify-content-center align-items-baseline">
                                <p class="yellow">2x</p>
                                <p>telewizor</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <img class="img-fluid" src="images/general/grill.png" alt="Grill wygrana">
                            <div class="d-flex justify-content-center align-items-baseline">
                                <p class="yellow">20x</p>
                                <p class="text-left align-self-end">Grill <br/>elektryczny</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
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

                            <h3 class="yellow text-center text-uppercase mt-2 mb-3">Produkty biorące udział w akcji:
                            </h3>
                            <div class="main-carousel mt-5">
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
                                            barbecue<br>
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
                                        <img class="img-fluid" src="images/products/sos-salsa-chilli-220-ml.png">
                                        <p class="name">Heinz salsa<br/>
                                            chilli<br>
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
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-sos-curry-mango-220-ml.png">
                                        <p class="name">Heinz sos<br/>
                                            curry mango<br>
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
                                             src="images/products/Heinz-ketchup-50-mniej-cukru.png">
                                        <p class="name">Heinz keczup<br/>
                                            50% mniej cukru i soli<br>
                                            <span class="yellow">400 ml</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/mustard-barbecue-sauce-875-ml.png">
                                        <p class="name">Heinz musztarda<br/>
                                            barbecue<br>
                                            <span class="yellow">875 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/kremowy-sos-czosnkowy-675-ml.png">
                                        <p class="name">Heinz sos<br/>
                                            czosnkowy<br>
                                            <span class="yellow">875 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/firecracer-sauce-875-ml.png">
                                        <p class="name">Heinz sos<br/>
                                            firecracer<br>
                                            <span class="yellow">875 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/curry-mango-sauce-875-ml.png">
                                        <p class="name">Heinz sos<br/>
                                            curry mango<br>
                                            <span class="yellow">875 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz-ketchup-Łagodny-450-g.png">
                                        <p class="name">Heinz keczup<br/>
                                            łagodny<br>
                                            <span class="yellow">450 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid"
                                             src="images/products/Heinz ketchup lagodny 855 g.png">
                                        <p class="name">Heinz keczup<br/>
                                            łagodny<br>
                                            <span class="yellow">855 g</span></p>
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
                                             src="images/products/Heinz-fasolka-five-beanz-415-g.png">
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
                                        <p class="name">Heinz Macaroni<br/>
                                            Cheese<br>
                                            <span class="yellow">400 g</span></p>
                                    </div>
                                </div>
                                <div class="carousel-cell col-lg-3 col-12">
                                    <div class="">
                                        <img class="img-fluid" src="images/products/heinz-spagetti.png">
                                        <p class="name">Heinz Hoops<br/>
                                            sos pomidorowy<br>
                                            <span class="yellow">400 g</span></p>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="col-lg-12 products-info-2 d-flex flex-wrap align-items-center justify-content-center mt-3">
                                <p class="yellow">Pełna lista produktów, biorących udział w konkursie dostępna tutaj</p>
                                <img src="images/general/arrow.png" class="arrow-icon"/>
                                <a href="#" target="_blank"><img src="images/general/ikona-pdf.png"
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
                            <img class="img-fluid img-bg-left" src="images/general/mistrzostwo-girllowania-logo.png"/>
                        </div>
                        <div class="col-lg-7 col-12 d-flex flex-column justify-content-center">
                            <div class="contact-box">

                                <form id="sendContactForm" method="post" action="">
                                    <div class="row justify-content-center">
                                        <div class='col-8'>
                                            <h3 class="mb-4 mb-lg-0 yellow">Jeśli masz pytania,<br/> napisz do
                                                nas:
                                            </h3>
                                            <label>E-MAIL:</label>
                                            <input name="email" required type="email" class="w-100"
                                                   placeholder="E-mail">
                                        </div>
                                        <div class="col-8">
                                            <label>Wiadomość:</label>
                                            <div class="textarea-box">
                                                <textarea class="mb-3" placeholder="Wiadomość"></textarea>
                                            </div>
                                            <p class="direct mt-1 text-left">Lub skontaktuj się bezpośrednio
                                                pod
                                                adresem:
                                                <a class="yellow"
                                                   href="mailto:kontakt@promocjeheinz.pl">kontakt@promocjeheinz.pl</a>
                                            </p>
                                            <div class="boxes-row mt-2">
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

<script>
    // $('#myModal').modal('show')
</script>

</body>

</html>