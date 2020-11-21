<?php

/**
 * @package WordPress
 */
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
        <div class="">

        </div>
    </div>
   </div>
</section>