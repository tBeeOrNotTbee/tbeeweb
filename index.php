<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body class="desktop">
    
    <?php $view="desktop"; require_once("js/mobileOrDesktop.php"); ?>

    <div class="container-fluid px-0 mx-0">
        <div class="mx-0 position-relative">
            <div class="half mx-0 customScroll" id="tbeeCard">

                <div id="tbeeHalf" class="cardContainer">

                    <?php require_once('partials/tbee/tbeeNav.php');?>

                    <!-- LOGO SCREEN -->
                    <div data-anchor="Page logo"
                        class="h100 d-flex flex-column justify-content-around align-items-center">
                        <div></div>
                        <img class="img-fluid logoTbee" src="img/logoTbee.png" data-aos="zoom-out-left"
                            data-aos-duration="3000" onclick="tbeeMouseEnter()">
                        <div>
                            <img src="img/tbeeArrow.png" class="arrow" id="tbeeArrow" style="opacity:0">
                        </div>
                    </div>

                    <!-- TBEE BODY -->
                    <!-- <div id="tbeeBody" class="d-none"> -->
                    <div id="tbeeBody" class="section d-none">
                        <div id="nosotros" class="tbee-screeen container-fluid px-0 mx-0">
                            <div class="row h100 mx-0 px-0 w-100 position-relative">
                                <div class="position-absolute somos">
                                    <img class="img-fluid slide-in from-bottom" src="img/somos.png">
                                </div>
                                <div class="col-4 d-flex flex-column justify-content-end">
                                    <div class="text-right mb-5 pb-5 slide-in from-left">
                                        <span class="din-light text-right">No es internet, <br>
                                            No es televisión, <br>
                                            No es material <br>
                                            impreso</span>
                                        <h2 class="din-bold text-right">T-BEE es un <br>
                                            nuevo medio</h2>
                                        <hr class="w-50 mr-0">
                                    </div>
                                    <div class="px-3 my-5">
                                        <img src="img/tbeeArrow.png" class="arrow">
                                    </div>
                                </div>
                                <div class="col-8 px-0">
                                    <img class="img-fluid h100 slide-in from-right" src="img/tbeewall.png">
                                </div>
                            </div>
                        </div>

                        <div id="tbeeScreen2"
                            class="container-fluid h100 d-flex flex-column justify-content-between position-relative">
                            <img src="img/acom-lg.png" class="acom-lg slide-in from-right" alt="Nos acompaña LG">
                            <div class="row pt-5">
                                <div class="col-6 offset-3 pt-5">
                                    <img src="img/digitalSignage.png" class="img-fluid slide-in from-left" alt="">
                                    <p class="din-light" class="text-justify" style="margin-top: 5vh!important;">
                                        Tecnología que sustituye a los carteles
                                        tradicionales para
                                        mejorar la presentación y promoción de ventas de productos. T-BEE se conecta a
                                        cualquier TV y recibiendo los contenidos y la agenda de manera remota, lo que
                                        facilita la instalación y además simplifica las actualizaciones de cualquier
                                        archivo.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 px-0 slide-in from-left">
                                    <img src="img/tbeeScreen2.png" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div id="tbeeScreen3" class="tbee-screeen container-fluid h100 pt-3">
                            <div class="row pt-5 pb-3">
                                <div class="col-12 p-0">
                                    <h2 class="din-light title-light align-content-center ml-0">
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
                            <div class="row slide-in from-bottom">
                                <div class="col-2 offset-3 py-5">
                                    <img src="img/toRightArrowClock.png" class="img-fluid">
                                </div>
                                <div class="col-6 border-left py-5">
                                    <h3 class="din-light">La comunicación es más efectiva debido a la rapidez y agilidad
                                        de la modalidad.</h3>
                                </div>
                            </div>
                            <div class="row slide-in from-bottom">
                                <div class="col-2 offset-3 py-5">
                                    <img src="img/toRightArrowDolar.png" class="img-fluid">
                                </div>
                                <div class="col-6 border-left py-5">
                                    <h3 class="din-light">El costo económico es bajo ya que se ahorra la impresión y la
                                        colocación.</h3>
                                </div>
                            </div>
                        </div>

                        <div id="trabajos" class="tbee-screeen container-fluid h100 mt-3" style="overflow-y: hidden;">
                            <div class="row">
                            <?php
                            require_once("partials/tbee/tbeeGallery.php");
                            foreach ($gallery as $url) { ?>
                                <div class="col-3 p-0 h30 gal-effect"><img class="img-fluid slide-in from-bottom"
                                        src="<?=$url?>"></div>
                            <?php } ?>   
                            </div>
                        </div>

                        <div id="clientes" class="tbee-screen container-fluid h100 mt-3">
                            <div class="row pt-5 pb-3">
                                <div class="col-12 p-0">
                                    <h2 class="din-light title-light align-content-center ml-0">
                                        <img class="h1-5em" src="img/arrowDots.png">
                                        Clientes
                                    </h2>
                                </div>
                                <div class="col-12">
                                    <h3 class="pt-2 din-light ml-5">Que nos eligen día a día</h3>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">

                                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleCaptions" data-slide-to="0"
                                                class="active bc-grey"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="1"
                                                class="bc-grey"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="2"
                                                class="bc-grey"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="3"
                                                class="bc-grey"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="4"
                                                class="bc-grey"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="5"
                                                class="bc-grey"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="6"
                                                class="bc-grey"></li>
                                        </ol>

                                        <div class="carousel-inner limit-h30-img h30">

                                            <div class="carousel-item active" data-interval="10000">
                                                <div class="container w-100">
                                                    <div class="row justify-content-center align-content-center">
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/ALMACEN.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/ARIBAU.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/BRIOCHE.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="container w-100">
                                                    <div class="row justify-content-center align-content-center">
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/CANAL.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/CAPONATA.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/CHINA_DELI.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="container w-100">
                                                    <div class="row justify-content-center align-content-center">
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/CITY_KIDS.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/GAUCHO_BURGER.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/HAVANNA.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="container w-100">
                                                    <div class="row justify-content-center align-content-center">
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/ILY.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/LA_CABRERA.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/MALDINI.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="container w-100">
                                                    <div class="row justify-content-center align-content-center">
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/PERSICCO.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/ROCK_N_RIBS.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/SANTA_CREPA.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="container w-100">
                                                    <div class="row justify-content-center align-content-center">
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/SOBERANA.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/SWISS.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/TIENDA_DE_CAFE.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="container w-100">
                                                    <div class="row justify-content-center align-content-center">
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/TOSTADO.png">
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="img/tbeeBrands/URBAN_CREPE.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <a class="carousel-control-prev justify-content-start"
                                            href="#carouselExampleCaptions" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon icon-black"
                                                aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next justify-content-end"
                                            href="#carouselExampleCaptions" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon icon-black"
                                                aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tbee-screeen container-fluid h100 mb-5">
                            <div class="row">
                                <div class="col-4 px-0">
                                    <img class="img-fluid h100 slide-in from-left" src="img/tbeeMad.png">
                                </div>
                                <div class="col-8 p-0">
                                    <div class="container-fluid">
                                        <div class="row px-0 pt-5 pb-3">
                                            <div class="col-8 pt-5 pb-3">
                                                <img src="img/tbeeEquipoContenido.png" class="img-fluid"
                                                    alt="Equipo de contenidos">
                                            </div>
                                        </div>
                                        <div class="row py-3">
                                            <div class="col-12">
                                                <h3 class="din-light text-center">Contamos con un departamento de
                                                    Contenidos</h3>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-4">
                                                <img src="img/madLogoNegro.png" class="img-fluid mt-5"
                                                    alt="Mad brainstorm">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <p class="din-light mt-5">
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
                        </div>

                        <div id="abonos" class="tbee-screeen container-fluid h100">
                            <div class="row">
                                <div class="col-5 p-0">
                                    <img src="img/tbeeRaspy.png" class="img-fluid">
                                </div>
                                <div class="col-7 p-0">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-8 mt-3 mb-2">
                                                <h2 class="din-light font-size-3 font-grey">Abonos</h2>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-10">
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <footer id="footer" class="container-fluid bc-black text-white pt-5">
                            <div class="row p-5">
                                <div class="col-12 justify-content-end">
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
                            </div>
                        </footer>
                    </div>

                </div>
            </div>
            <div class="half mx-0 customScroll" id="madCard">
                <div class="cardContainer">
                    <div class="h100 d-flex flex-column justify-content-around align-items-center">
                        <div></div>
                        <img class="img-fluid logoMad" src="img/logoMad.png" data-aos="zoom-out-right"
                            data-aos-duration="3000">
                        <img src="img/madArrow.png" class="arrow" id="madArrow" style="opacity:0">
                    </div>
                    <div id="madBody" class="h100 d-none">
                        <h2 class="mt-4">Slogan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>

    <script>
        let tbee = false;
        let mad = false;

        const sliders = document.querySelectorAll('.slide-in');

        const appearOptions = {
            threshold: 0,//asi parece cuando todo el obj ingreso al viewport 1=true
            rootMargin: "0px 0px -100px 0px" //asi cuando tiene 200px desde abajo hasta el obj
        };

        const appearOnScroll = new IntersectionObserver(
            function (entries, appearOnScroll) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) {
                        return;
                    } else {
                        entry.target.classList.add('appear');
                        //appearOnScroll.unobserve(entry.target)
                    }
                })
            },
            appearOptions);

        $('#tbeeCard').mouseenter(function () {
            $(this).stop(true, true).css("width", "80%").css("right", "20%").siblings().css("width", "20%").css("left", "80%");

            if (mad == true) {
                $('#madBody').addClass('d-none');
                $('#madArrow').css('opacity', '0');
                mad = false;
            }

            $('#tbeeArrow').css('opacity', '1');
            $('#tbeeBody').removeClass('d-none');
            $('#tbeeNav').removeClass('d-none');

            tbee = true;
            sliders.forEach(slide => { appearOnScroll.observe(slide) })
        });

        $('#madCard').mouseenter(function () {
            $(this).stop(true, true).css("width", "80%").css("left", "20%").siblings().css("width", "20%").css("right", "80%");

            if (tbee == true) {
                $('#tbeeBody').addClass('d-none');
                $('#tbeeArrow').css('opacity', '0');
                tbee = false;
            }

            $('#madArrow').css('opacity', '1');
            $('#madBody').removeClass('d-none');
            $('#tbeeNav').addClass('d-none');

            mad = true;
            sliders.forEach(slide => { appearOnScroll.observe(slide) })
        });

        document.getElementById('tbeeCard').onscroll = function () { scrollFunction() };
        document.getElementById('madCard').onscroll = function () { scrollFunctionMad() };

        tbeeCard = document.getElementById('tbeeCard');
        madCard = document.getElementById('madCard');

        function scrollFunction() {
            if (tbeeCard.scrollTop >= 500) {
                document.getElementById("tbeeNav").style.top = "0";
            } else {
                document.getElementById("tbeeNav").style.top = "-10vh";
            }
        }

        function scrollFunctionMad() {
            if (madCard.scrollTop >= 500) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-10vh";
            }
        }
    </script>
</body>

</html>