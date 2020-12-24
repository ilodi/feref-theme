<?php
/*
 * Template Name: Home
 * description: >-
 */
get_header();
?>

<?php
if (has_post_thumbnail()) {
    $thumbnail_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'my-fun-size');
    $thumbnail_url = $thumbnail_data[0];
}
?>

<section class="main-hero" id="post-<?php the_ID(); ?>" style="background-image:url('<?php echo $thumbnail_url ?>')" <?php post_class('container-fluid'); ?>>
    <div class="help-shadow">

        <div class="container">
            <div class="hero-title-helper ">
                <span>
                    Para nosotros
                </span>
                <h1>
                    Su seguridad es </br>
                    nuestro compromiso.
                </h1>
                <a class="btn" href="<?php echo (get_permalink(14)) ?>" target="_blank" rel="noopener noreferrer">
                    CONTACTO
                </a>
            </div>
        </div>
    </div>
</section>

<!--  -->
<section class="section-say-hello add-padding-aux">
    <div class="container add-padding-aux">
        <div class="box-aux-hi">
            <div class="area-img add-padding-aux" id="activeVideo">

                <div>
                    <a id="play-video" class="video-play-button" href="#">
                        <span></span>
                    </a>

                    <img class="help-img-home-A" src="<?php bloginfo('template_url'); ?>/assets/image/aux/hom.jpg" alt="nosotros" /></div>
                <div> <img class="help-img-home-B" src="<?php bloginfo('template_url'); ?>/assets/image/aux/hom.jpg" alt="nosotros" /></div>
            </div>
            <div class="box-label-hi">
                <div class="element-title-helper change-color-bg-wh">
                    <h3>
                        ¿QUIENES </br>
                        SOMOS?
                    </h3>

                    <div>
                        <p>
                            Somos una empresa 100% mexicana, legalmente constituida bajo las leyes mexicanas.
                        </p>
                        <p class="exp-p-hi">
                            La cual está a la vanguardia de los Sistemas Operativos en Seguridad Privada, los cuales se basan principalmente en minimizar las posibilidades de sufrir algún tipo de percance o robo a nuestros clientes.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--  -->
<div id="modalVideo" class=" ">
    <div id="modalBody" class="">

        <button id="btnToClose" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <video id="TheModalVideo" loop controls>
            <source src="<?php bloginfo('template_url'); ?>/assets/video/Fereg.mp4" type="video/mp4" />
        </video>


    </div>

</div>
<!--  -->
<section class="section-procedimientos add-padding-aux">
    <div class="container">
        <div>
            <div class="element-title-helper ">
                <span>
                    Nuestro servicios cuentan con los procedimientos adecuados
                </span>
                <h3 class="text-upp">
                    PARA actuar de la mejor manera, y </br>
                    salvaguardar la integridad de </br>
                    nuestros cliente.
                </h3>
            </div>
            <div class="container-info-extra add-padding-aux-slim">
                <div class="item-info-extra">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/atencion.svg" alt="Atención personal">
                    <h4>Atención personal</h4>
                </div>
                <!--  -->


                <div class="item-info-extra">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/servicio.svg" alt="Excelente Servicio">
                    <h4>Excelente Servicio</h4>

                </div>
                <!--  -->
                <div class="item-info-extra">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/profesional.svg" alt="Profesionalismo">
                    <h4>Profesionalismo</h4>
                </div>
                <!--  -->
                <div class="item-info-extra">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/tiempo.svg" alt="Tiempo de respuesta">
                    <h4>Tiempo de respuesta</h4>

                </div>
                <!--  -->
            </div>
        </div>
    </div>
</section>
<!--  -->
<section class="section-services">
    <div class="grid-container">

        <div class="item-services">
            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/aux/AccesoriosdeSeguridad.jpg" alt="Accesoriosde Seguridad" />
            </div>
            <div class="text-item-service">
                <h6>Accesorios
                    de Seguridad</h6>
                <p>
                    Dispositivos que complementan
                    la vigilancia, prevención y cuidado
                    de su patrimonio.
                </p>
            </div>
        </div>
        <!--  -->
        <div class="item-services">
            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/aux/CustodiaaUnidades.jpg" alt="Custodia a Unidades" />
            </div>
            <div class="text-item-service">
                <h6>Custodia
                    a Unidades</h6>
                <p>
                    Custodia, vigilancia, cuidado y
                    protección de bienes, muebles
                    o valores que traslade el cliente.
                </p>
            </div>
        </div>
        <!--  -->
        <!--  -->
        <div class="item-services">
            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/aux/Escolta.jpg" alt="Escolta" />
            </div>
            <div class="text-item-service">
                <h6>Escolta</h6>
                <p>
                    Protección, custodia, salvaguarda,
                    defensa de la vida y de la integridad
                    corporal del cliente.
                </p>
            </div>
        </div>
        <!--  -->
        <!--  -->
        <div class="item-services">
            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/aux/GuardiaIntramuro.jpg" alt="Guardia Intramuro" />
            </div>
            <div class="text-item-service">
                <h6>Guardia
                    Intramuro</h6>
                <p>
                    Capital humano altamente
                    seleccionado y capacitado.
                </p>
            </div>
        </div>
        <!--  -->
        <div class="item-services">
            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/aux/Monitoreo.jpg" alt="Monitoreo" />
            </div>
            <div class="text-item-service">
                <h6>Monitoreo</h6>
                <p>
                    Trabajamos las 24 hrs,
                    los 365 días del año.
                </p>
            </div>
        </div>
        <!--  -->
        <!--  -->
        <div class="item-services">
            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/aux/RastreoSatelital.jpg" alt="Rastreo Satelital" />
            </div>
            <div class="text-item-service">
                <h6>Rastreo
                    Satelital</h6>
                <p>
                    Rastreo de vehículos particulares,
                    o rastreo de flotillas vehiculares.
                </p>
            </div>
        </div>
        <!--  -->
    </div>
</section>
<!--  -->
<section class="section-about add-padding-aux">
    <div class="container">
        <div class="element-title-helper change-color-bg-wh add-padding-aux-slim ">
            <span>
                FEREG
            </span>
            <h3>
                NUESTRO </br>
                VALORES
            </h3>
        </div>
        <div class="box-info-about">

            <div class="container-item-about">
                <div class="item-about">
                    <h5>Misión</h5>
                    <p>
                        Ofrecer servicios de excelencia para
                        proporcionar una satisfacción total y
                        cubrir las necesidades de nuestros clientes.
                    </p>
                </div>
                <div class="item-about">
                    <h5>Visión.</h5>
                    <p>
                        Ser el grupo líder a nivel nacional
                        en el área de la seguridad privada.
                    </p>
                </div>
            </div>

            <div class="img-map">
                <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/map.svg" alt="nuestro territorio" />
            </div>

        </div>
    </div>
</section>

<section class="section-clientes add-padding-aux ">
    <div class="container">
        <div class="label add-padding-aux-slim ">
            <p>Esto son solo algunos de los muchos clientes que han confiado en nosotros.</p>
        </div>
        <!--  -->
        <div class="grid-clients">
            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/ams_logo_mexico.svg" alt="nuestro clientes" />
            </div>
            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/charly.png" alt="nuestro clientes" />
            </div>
            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/daruma.svg" alt="nuestro clientes" />
            </div>
            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/vesta.svg" alt="nuestro clientes" />
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/estamp2020.svg" alt="nuestro clientes" />
            </div>



            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/farmacias-sanisidro-c.svg" alt="nuestro clientes" />
            </div>


            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/ibarra.svg" alt="nuestro clientes" />
            </div>


            <div class="you-next">
                <img src="<?php bloginfo('template_url'); ?>/assets/image/logo/aux-next-you.svg" alt="Tenemos reservado un espacio para ti!" />
                <div>
                    <p>Tenemos reservado un espacio <span>para ti!!</span></p>
                </div>
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/ICI.svg" alt="nuestro clientes" />
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/nitrex.svg" alt="nuestro clientes" />
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/ponty.svg" alt="nuestro clientes" />
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/rieke.svg" alt="nuestro clientes" />
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/semillas.svg" alt="nuestro clientes" />
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/skechers.svg" alt="nuestro clientes" />
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/clientes/Thyssenkrupp.svg" alt="nuestro clientes" />
            </div>

        </div>
        <!--  -->
    </div>
</section>

<section class="section-sucursales add-padding-aux">
    <div class="container">
        <div>
            <div class="element-title-helper">
                <span>
                    Siempre cerca de ti.
                </span>
                <h3>
                    NUESTRAS</br>
                    SUCURSALES
                </h3>
            </div>
            <div class="container-info-extra add-padding-aux-slim">
                <div class="item-info-extra">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/estadoMX.svg" alt="ESTADO DE MÉXICO">
                    <h4>ESTADO DE MÉXICO</h4>
                    <p>
                        Citlatepétl. 55Mz. 331,
                        Col. Ciudad Azteca,
                        Secc. Ote. Ecatepec de
                        Morelos, c.p 55120.
                    </p>
                </div>
                <!--  -->
                <div class="item-info-extra">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/CDMX.svg" alt="ESTADO DE MÉXICO">
                    <h4>Ciudad de México</h4>
                    <p>
                        Av. Del Taller, Retorno 26
                        No. 5 Col. Jardín Balbuena
                        Venustiano Carranza
                        c.p 15900.
                    </p>
                </div>
                <!--  -->
                <div class="item-info-extra">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/qro.svg" alt="ESTADO DE MÉXICO">
                    <h4>querétaro</h4>
                    <p>
                        Magnolias 58, Col.
                        Jardines de Querétaro,
                        c.p 76020
                    </p>
                </div>
                <!--  -->
                <div class="item-info-extra">
                    <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/gto.svg" alt="ESTADO DE MÉXICO">
                    <h4>Guanajuato</h4>
                    <p>
                        Villa Carbón 325 Col.
                        Villas de Guanajuato,
                        c.p 36258
                    </p>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
</section>

<!--  -->
<section class="section-options add-padding-aux">
    <div class="container ">
        <div class="title-helper">
            <h2>
                Fereg Seguridad </br>
                privada la mejor opción
            </h2>
        </div>

        <div class="element-options">
            <div>
                <h4>
                    Atención
                </h4>
                <p>
                    Nuestra atención es personalizada
                    Y especializada para tus necesidades.
                </p>
            </div>
            <!--  -->
            <div>
                <h4>
                    Fidelidad
                </h4>
                <p>
                    Creamos una gran conexión
                    con nuestros clientes.
                </p>
            </div>
            <!--  -->
            <div>
                <h4>
                    Atención 24 Hrs
                </h4>
                <p>
                    Con nuestro Centro de monitoreo
                    siéntete seguro las 24 hrs.
                </p>
            </div>
            <!--  -->
            <div>
                <h4>
                    Profesionalismo
                </h4>
                <p>
                    Nuestro personal esta capacitado
                    para brindarte el mejor servicio.
                </p>
            </div>
            <!--  -->
            <div>
                <h4>
                    Tiempo de reacción
                </h4>
                <p>
                    Respuestas rápidas ante
                    acontecimientos imprevistos.
                </p>
            </div>
            <!--  -->
            <div>
                <h4>
                    El mejor servicio
                </h4>
                <p>
                    Nuestros clientes nos
                    otorgan esta caracteristica.
                </p>
            </div>
            <!--  -->
        </div>
    </div>
</section>

<script>
    function changeState() {
        window.modalVideo.classList.toggle('active');
        window.modalBody.classList.toggle('show-body-modal')
    }

    function videoManage() {

        window.TheModalVideo.play();


    }
    window.activeVideo.addEventListener('click', () => {
        changeState()
        videoManage()
    })
    window.btnToClose.addEventListener('click', () => {
        changeState()
        window.TheModalVideo.pause();
    })
</script>
<?php
get_footer();
