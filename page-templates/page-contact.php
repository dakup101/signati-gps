<?php
/* Template Name: Kontakt */
get_header();
?>

<?php get_template_part(THEME_PRT, "breadcrumbs") ?>

<section class="container mx-auto px-5 mb-20">
    <div class="grid grid-cols-3 gap-20">
        <div class="text-lg col-span-3 md:col-span-1 text">
            <?php echo get_field("contact_info") ?>
        </div>
        <div class="col-span-3 md:col-span-2 px-10 py-5 md:px-20 md:py-10 rounded-2xl shadow-2xl">
            <h2 class="font-extrabold text-4xl mb-5 text-secondary">
                Napisz do nas
            </h2>
            <?= do_shortcode('[contact-form-7 id="5" title="Formularz - stopka"]') ?>

        </div>
    </div>
</section>

<section class="container mx-auto px-5 mb-20">
    <iframe class="overflow-hidden rounded-2xl
    "
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2562.8436753505507!2d20.20509531571634!3d50.0330249794199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471660b20385bcdf%3A0xf54a1c18f4fb803f!2sSignati!5e0!3m2!1spl!2spl!4v1679671986650!5m2!1spl!2spl"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php get_template_part(THEME_PRT, "faq"); ?>
<?php get_template_part(THEME_PRT, "contact-footer"); ?>
<?php get_footer(); ?>