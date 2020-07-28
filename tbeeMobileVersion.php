<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body class="mobile tbee-bc">
    <?php $view = "mobile";
    require_once('js/mobileOrDesktop.php'); ?>

    <?php require_once('partials/tbee/tbeeNav.php'); ?>

    <div class="container-fluid">
        <div class="row h100 justify-content-center align-content-center">
            <div class="col-10">
                <img src="img/logoTbee.png" class="img-fluid" alt="T-Bee Media" data-aos="fade-up"
                    data-aos-duration="3000">
            </div>
        </div>
        <div class="row h50 justify-content-center align-content-center">
            <div class="col-12">
                <img class="img-fluid" src="img/somos.png">
            </div>
        </div>
        <div class="row h50">
            <div class="col-6">
                <div class="text-right mb-5 pb-5">
                    <span class="din-light text-right">No es internet, <br>
                        No es televisión, <br>
                        No es material <br>
                        impreso</span>
                    <h2 class="din-bold text-right">T-BEE es un <br>
                        nuevo medio</h2>
                    <hr class="w-50 mr-0">
                </div>
            </div>
            <div class="col-6 p-0 somos-bc">
            </div>
        </div>
        <div class="row h50">
            <div class="col-6 pic-1"></div>
            <div class="col-6 pic-2"></div>
        </div>
        <div class="row py-4">
            <div class="col-12 py-5 text-right">
                <img src="img/acom-lg.png" alt="Nos acompaña LG" style="width: 30vw;">
                <img src="img/digitalSignage.png" class="img-fluid py-4" alt="">
                <p class="din-light text-left" class="text-justify" style="margin-top: 5vh!important;">
                    Tecnología que sustituye a los carteles
                    tradicionales para
                    mejorar la presentación y promoción de ventas de productos. T-BEE se conecta a
                    cualquier TV y recibiendo los contenidos y la agenda de manera remota, lo que
                    facilita la instalación y además simplifica las actualizaciones de cualquier
                    archivo.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0">
                <img src="img/mobilePicH.png" class="img-fluid">
            </div>
        </div>

        <div class="row pt-5 pb-3">
            <div class="col-12 p-0">
                <h2 class="din-light align-content-center ml-0 font-grey">
                    <img class="h1-5em" src="img/arrowDots.png">
                    Usos & Beneficios
                </h2>
            </div>
            <div class="col-12 my-3">
                <p class="text-center pt-3 din-light mb-0">Existe una gama amplia de posibles usos.
                    Esta
                    tecnología se puede utilizar en <b>interiores o exteriores.</b></p>
                <p class="text-center pt-2 din-light">La tecnología de <b>T-BEE</b> permite una
                    planificación exacta y eficaz ya que el contenido puede ser adaptado a los
                    requerimientos</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 px-2 py-5">
                <img src="img/toRightArrowClock.png" class="img-fluid">
            </div>
            <div class="col-9 border-left border-mobile py-3">
                <p class="din-light">La comunicación es más efectiva debido a la rapidez y agilidad
                    de la modalidad.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 px-2 py-5">
                <img src="img/toRightArrowDolar.png" class="img-fluid">
            </div>
            <div class="col-9 border-left border-mobile py-3">
                <p class="din-light">El costo económico es bajo ya que se ahorra la impresión y la
                    colocación.</p>
            </div>
        </div>

        <div class="row my-5">
            <?php
            require_once("partials/tbee/tbeeGallery.php");
            foreach ($gallery as $url) { ?>
            <div class="col-6 p-0 gal-effect"><img class="img-fluid" src="<?= $url ?>"></div>
            <?php } ?>
        </div>

        <div class="row pt-5 pb-3">
            <div class="col-12 p-0">
                <h2 class="din-light font-grey align-content-center ml-0">
                    <img class="h1-5em" src="img/arrowDots.png">
                    Clientes
                </h2>
            </div>
            <div class="col-12">
                <h3 class="pt-2 din-light text-center font-grey">Que nos eligen día a día</h3>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">

                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active bc-grey"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1" class="bc-grey"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2" class="bc-grey"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3" class="bc-grey"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4" class="bc-grey"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="5" class="bc-grey"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="6" class="bc-grey"></li>
                    </ol>

                    <div class="carousel-inner limit-h30-img h30">

                        <div class="carousel-item active" data-interval="10000">
                            <div class="container w-100">
                                <div class="row justify-content-center align-content-center">
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/ALMACEN.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/ARIBAU.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/BRIOCHE.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container w-100">
                                <div class="row justify-content-center align-content-center">
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/CANAL.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/CAPONATA.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/CHINA_DELI.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container w-100">
                                <div class="row justify-content-center align-content-center">
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/CITY_KIDS.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/GAUCHO_BURGER.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/HAVANNA.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container w-100">
                                <div class="row justify-content-center align-content-center">
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/ILY.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/LA_CABRERA.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/MALDINI.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container w-100">
                                <div class="row justify-content-center align-content-center">
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/PERSICCO.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/ROCK_N_RIBS.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/SANTA_CREPA.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container w-100">
                                <div class="row justify-content-center align-content-center">
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/SOBERANA.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/SWISS.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/TIENDA_DE_CAFE.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container w-100">
                                <div class="row justify-content-center align-content-center">
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/TOSTADO.png">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <img src="img/tbeeBrands/URBAN_CREPE.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev justify-content-start" href="#carouselExampleCaptions" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon icon-black" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next justify-content-end" href="#carouselExampleCaptions" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon icon-black" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-12 p-0">
                <img src="img/tbeeEquipoContenido.png" class="img-fluid w-75" alt="Equipo de contenidos">

                <p class="din-light text-center my-5 p-2">
                    Contamos con un departamento de Contenidos
                </p>

                <div class="text-center">
                    <img src="img/madLogoNegro.png" class="img-fluid w-50" alt="Mad brainstorm">
                </div>

                <div class="container-fluid mt-5">
                    <div class="row justify-content-center">
                        <div class="col-5 contenidos-bc"></div>
                        <div class="col-7">
                            <p class="din-light">
                                Dicho departamento se encuentra en el mercado hace más de 40 años,
                                contando con la experiencia suficiente como para conocer a la
                                perfección
                                las necedidades de comunicación óptimas y rápidas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-10">
                <h2 class="din-light font-grey my-4">Abonos</h2>

                <p class="din-light font-grey text-price mb-2">
                    <strong class="din-bold">MODALIDAD A:</strong> Uso de tecnología
                    aplicada a cada
                    pantalla.
                    TBEE concede autorización del manager para administrar
                    contenidos remotamente. Incluye servicio técnico y capacitación.
                </p>
                <p class="price-gradient p-2 mb-4">
                    <strong class="din-bold font-grey price">Desde 000 U$S</strong>
                </p>

                <p class="din-light font-grey text-price mb-2">
                    <strong class="din-bold">MODALIDAD B:</strong> Uso de tecnologia
                    aplicada a cada pantalla
                    y administración de contenidos. El cliente envía contenidos
                    y TBEE los administra. Incluye servicio técnico.
                </p>
                <p class="price-gradient p-2 mb-4">
                    <strong class="din-bold font-grey price">Desde 000 U$S</strong>
                </p>

                <p class="din-light font-grey text-price mb-2">
                    <strong class="din-bold">MODALIDAD C:</strong> Uso de tecnología
                    aplicada a cada pantalla,
                    animación y administración de contenidos. El cliente envía
                    archivos estáticos, TBEE los anima y administra. Incluye servicio
                    técnico, diseño, animación y administración de contenidos.
                </p>
                <p class="price-gradient p-2 mb-4">
                    <strong class="din-bold font-grey price">Desde 000 U$S</strong>
                </p>

                <p class="din-light font-grey text-price mb-2">
                    <strong class="din-bold">MODALIDAD E:</strong> Incluye diseño,
                    animación y administración de
                    los contenidos manteniendo la actualizacion constante en todas
                    las pantallas. Tambien incluye el desarrollo gráfico y mantenimiento
                    mensual de la imagen y administración del manager.
                </p>
                <p class="price-gradient p-2">
                    <strong class="din-bold font-grey price">Desde 000 U$S</strong>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-0">
                <img class="img-fluid" src="img/tbeeRaspy.png">
            </div>
        </div>

        <footer id="footer" class="row bc-black text-white py-5">
            <div class="col-12 justify-content-end text-right">
                <h3 class="din-bold text-right mb-1">
                    <b>CONTACTANOS</b>
                </h3>
                <p class="din-light text-right mb-1">
                    <b class="text-orange">Email</b>
                    tbee@digital.com.ar
                </p>
                <p class="din-light text-right mb-1">
                    <b class="text-orange">Comercial</b>
                    +54 11 5555 6666
                </p>
                <p class="din-light text-right mb-1">
                    <b class="text-orange">Soporte</b>
                    +54 11 5444 3333
                </p>
            </div>
        </footer>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>