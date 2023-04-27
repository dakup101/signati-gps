<?php
/* Template Name: Sam Tekst */
get_header();
?>

<?php get_template_part(THEME_PRT, "breadcrumbs") ?>

<section class="container mx-auto px-5 mb-20">
    <div class="text">
        <h1 class="font-extrabold text-4xl mb-10">
            <?php echo get_the_title() ?>
        </h1>
        <?php echo wpautop(get_the_content()) ?>
    </div>
</section>

<?php get_template_part(THEME_PRT, "contact-footer"); ?>
<?php get_footer(); ?>