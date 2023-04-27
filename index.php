<?php
/* Template Name: Artykuły */
get_header();
?>

<?php get_template_part(THEME_PRT, "breadcrumbs") ?>


<div class="container px-5 mx-auto mb-20 grid grid-cols-1 gap-10">
    <!-- POSTS Looop -->
    <?php if (have_posts()) {
        $counter = 1;
        while (have_posts()) {
            the_post();
            get_template_part(THEME_PRT, "post-preview", array("counter" => $counter));
            $counter++;
        }
    }
    wp_reset_postdata(); ?>
</div>

<?php get_template_part(THEME_PRT, "video", array("id" => 209)); ?>
<div class="spacer mb-20">

</div>
<?php get_template_part(THEME_PRT, "faq"); ?>
<?php get_template_part(THEME_PRT, "contact-footer"); ?>

<?php get_footer(); ?>