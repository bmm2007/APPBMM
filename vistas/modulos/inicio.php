<?php

use Controladores\ControladorCrear;




$tabla = 'noticias ORDER BY  id DESC LIMIT 4';
$item = null;
$valor = null;
$resultado = ControladorCrear::ctrMostrar($tabla, $item, $valor);

$tabla = 'eventos ORDER BY  id DESC LIMIT 4';
$item = null;
$valor = null;
$resultadoEventos = ControladorCrear::ctrMostrar($tabla, $item, $valor);
?>

<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Administración Bancaria</h5>
                                    <p class="mt-4 pr-lg-4">Da el primer paso hacia el éxito con nosotros. </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2 btn-banner" href="bancaria"> Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Administración de Empresas</h5>
                                    <p class="mt-4 pr-lg-4">Da el primer paso hacia el éxito con nosotros. </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2 btn-banner" href="empresas"> Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>

            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Administración de Negocios Internacionales</h5>
                                    <p class="mt-4 pr-lg-4">Da el primer paso hacia el éxito con nosotros.</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2 btn-banner" href="about.html"> Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Contabilidad</h5>
                                    <p class="mt-4 pr-lg-4">Da el primer paso hacia el éxito con nosotros.</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2 btn-banner" href="about.html"> Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top4 b3 bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Computación e Informática</h5>
                                    <p class="mt-4 pr-lg-4">Da el primer paso hacia el éxito con nosotros.</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2 btn-banner" href="computacion"> Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top5 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>Secretariado Ejecutivo</h5>
                                    <p class="mt-4 pr-lg-4">Da el primer paso hacia el éxito con nosotros.</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2 btn-banner" href="about.html"> Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>


    <div class="waveWrapper waveAnimation">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path>
        </svg>
    </div>
</section>
<section class="quienes-somos">
    <div></div>
    <div></div>
    <div></div>
</section>
<!-- /main-slider -->
<section class="w3l-courses">

</section>
<section class="w3l-features py-5" id="facilities">
    <div class="call-w3 py-lg-5 py-md-4 py-2">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-5 feature-grid-left">
                    <!-- <h5 class="title-small mb-1">Study and graduate</h5> -->
                    <h3 class="title-big mb-4">Nuestras facilidades </h3>
                    <p class="text-para">Curabitur id gravida risus. Fusce eget ex fermentum, ultricies nisi ac sed,
                        lacinia est.
                        Quisque ut lectus consequat, venenatis eros et, commodo risus. Nullam sit amet laoreet elit.
                        Suspendisse non magna a velit efficitur. </p>
                    <p class="text-para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ab qui impedit, libero illo
                        quia sequi quibusdam iure. Error minus quod reprehenderit quae dolor velit soluta animi
                        voluptate dicta enim? Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, provident!</p>
                    <a href="#url" class="btn btn-primary btn-style btn-style-g  mt-md-5 mt-4">Discover More</a>
                </div>
                <div class="col-lg-7 feature-grid-right mt-lg-0 mt-5">
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1 box-wrap">
                            <a href="#more" class="icon"><span class="fa fa-certificate"></span></a>
                            <h4><a href="#feature" class="title-head">Global Certificate</a></h4>
                            <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed doloramet laoreet.</p>
                        </div>
                        <div class="grids-1 box-wrap">
                            <a href="#more" class="icon"><span class="fa fa-book"></span></a>
                            <h4><a href="#feature" class="title-head">Books & Library</a></h4>
                            <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet laoreet.</p>
                        </div>
                        <div class="grids-1 box-wrap">
                            <a href="#more" class="icon"><span class="fa fa-trophy"></span></a>
                            <h4><a href="#feature" class="title-head">Scholarship</a></h4>
                            <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet laoreet.</p>
                        </div>
                        <div class="grids-1 box-wrap">
                            <a href="#more" class="icon"><span class="fa fa-graduation-cap"></span></a>
                            <h4><a href="#feature" class="title-head">Alumni Support</a></h4>
                            <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet laoreet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- middle -->
<div class="middle py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="welcome-left text-center py-lg-4">
            <h5 class="title-small text-center mb-1">Estudia con nosotros</h5>
            <h3 class="title-big">INSCRIPCIÓN</h3>
            <a href="contact.html" class="btn btn-style btn-style-g  btn-primary mt-sm-5 mt-4">Ver formulario</a>
        </div>
    </div>
</div>
<!-- //middle -->