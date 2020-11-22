<?php
/*
 * Template Name: Contacto
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
<section class="section-contact">

    <div class="micro-hero" style="background-image:url('<?php echo $thumbnail_url ?>')" <?php post_class('container-fluid'); ?>>

    </div>
    <div class="container add-padding-aux">
        <div class="box-contact">
            <div class="element-title-helper change-color-bg-wh">
                <h3>
                    PONTE EN CONTACTO </br>
                    CON NOSOTROS
                </h3>

                <div>
                    <p>
                        ¡Escríbenos o llámanos!
                    </p>
                    <p class="p-exp-contact">
                        Un Asesor te espera con gusto </br>
                        Para resolver todas tus dudas.
                    </p>
                </div>
                <div>
                    <ul class="list-contact">
                        <li>
                            <a href="tel:+5571600118">
                                <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/smartphone.svg" alt="55 7160 0118">
                                55 7160 0118</a>
                        </li>
                        <li>
                            <a href="tel:+5571601799">
                                <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/smartphone.svg" alt="55 7160 0118">
                                55 7160 0118</a>
                        </li>
                        <li>
                            <a href="mailto:contacto@feregsp.com">
                                <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/mail.svg" alt="contacto@feregsp.com">
                                contacto@feregsp.com</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="container-form">
            <?php echo do_shortcode('[contact-form-7 id="29" title="Contancto"]'); ?>
        </div>

    </div>

</section>






<?php
get_footer();
