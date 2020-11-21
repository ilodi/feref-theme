<?php
/*
 * Template Name: Proceso de selección
 * description: >-
 */
get_header();
?>

<?php locate_template('./hero.php', true, true); ?>

<section class="section-selection add-padding-aux">
    <div class="container">
        <div class="element-title-helper change-color-bg-wh  ">
            <h3>
                ETAPAS
            </h3>
        </div>
        <div class="box-proceses">
            <div class="item-proceses">
                <h2>evaluación médica</h2>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/story-view/1.png" alt="evaluación médica" />
            </div>
            <!--  -->
            <div class="item-proceses">
                <h2>Evaluación tocicológica</h2>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/story-view/2.png" alt="Evaluación tocicológica" />
            </div>
            <!--  -->
            <div class="item-proceses">
                <h2>evaluación psicologica</h2>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/story-view/3.png" alt="evaluación psicologica" />
            </div>
            <!--  -->
            <div class="item-proceses">
                <h2>evaluación de competencia</h2>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/story-view/4.png" alt="evaluación de competencia" />
            </div>
            <!--  -->
            <!--  -->
            <div class="item-proceses">
                <h2>investigación judicial</h2>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/story-view/5.png" alt="investigación judicial" />
            </div>
            <!--  -->
            <div class="item-proceses">
                <h2>evaluación de entorno social</h2>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/story-view/6.png" alt="evaluación de entorno social" />
            </div>
            <!--  -->
            <div class="item-proceses">
                <h2>contratación</h2>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/story-view/7.png" alt="contratación" />
            </div>
            <!--  -->
            <div class="item-proceses">
                <h2>ficha técnica</h2>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/story-view/8.png" alt="ficha técnica" />
            </div>
            <!--  -->
            <div class="item-proceses">
                <h2>parte del equipo</h2>
                <img src="<?php bloginfo('template_url'); ?>/assets/image/story-view/9.png" alt="parte del equipo" />
            </div>
            <!--  -->
        </div>
    </div>
</section>

<?php
get_footer();
