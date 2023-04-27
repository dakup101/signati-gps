<?php

/* Template Name: Strona główna */

get_header(); ?>


<main class="main">
    <?php get_template_part(THEME_PRT, "banner"); ?>
    <?php get_template_part(THEME_PRT, "video"); ?>
    <?php get_template_part(THEME_PRT, "vehicles"); ?>
    <?php get_template_part(THEME_PRT, "for-whom"); ?>
    <?php get_template_part(THEME_PRT, "functionalities"); ?>
    <?php get_template_part(THEME_PRT, "faq"); ?>
    <?php get_template_part(THEME_PRT, "contact-footer"); ?>
</main>

<?php get_footer(); ?>