<?php
/*
 * Template Name: Bolsa de trabajo
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
                    FEREG
                </span>
                <h1>
                    ÚNETE AL </br>
                    <span>EQUIPO!</span>

                </h1>
                <!-- <a href="<?php echo (get_permalink(14)) ?>">

                    ddd
                </a> -->
            </div>
        </div>
    </div>
</section>

<section class="section-job add-padding-aux">
    <div class="container">
        <div class="element-title-helper change-color-bg-wh ">
            <span>
                En Grupo FEREG
            </span>
            <h3>
                FORMA PARTE </br>
                DE ESTE EQUIPO!
            </h3>
            <p>
                Nos nos encargados. de fomentar el amor al trabajo. </br>
                Puedes mandarnos tu <strong>CV</strong> en formato <strong>PDF</strong>.
            </p>
        </div>
        <div class="box-form">

            <div class="container-form">
                <?php echo do_shortcode('[contact-form-7 id="28" title="Forma parte"]'); ?>
            </div>

            <div class="img-map">
                <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/map.svg" alt="nuestro territorio" />
            </div>

        </div>
    </div>
</section>








<?php
get_footer();
