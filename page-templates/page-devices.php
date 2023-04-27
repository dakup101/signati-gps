<?php
/* Template Name: Urządzenia */
get_header();
?>

<?php get_template_part(THEME_PRT, "breadcrumbs") ?>


<section class="container mx-auto px-5 mb-20">
    <h2 class="text-4xl md:text-5xl font-extrabold mb-[1.6rem] text-center">
        Rodzaje urządzeń SignatiGPS<br><span class="text-secondary">i ich funkcjonalności</span>
    </h2>
</section>

<section class="container mx-auto px-5 mb-20">
    <div class="grid grid-cols-2 gap-20">
        <?php foreach(get_field("devices") as $el) : ?>
        <article class="col-span-2 lg:col-span-1 rounded-2xl overflow-hidden shadow-lg md:shadow-2xl porduct-item">
            <section class="bg-secondary py-3">
                <h3 class="text-xl font-bold text-center text-white"><?php echo $el["name"]; ?></h3>
            </section>
            <section class="grid grid-cols-5 h-full">
                <figure class="col-span-5 md:col-span-2 bg-white flex items-center justify-center p-5">
                    <img src="<?php echo $el["img"] ?>"
                         alt="<?php echo $el["name"] ?>">
                </figure>
                <div class="col-span-5 md:col-span-3 bg-l-gray bg-opacity-20 p-5 text-sm">
                    <div class="mb-5">
                        <?php echo $el["desc"] ?>
                    </div>
                    <div class="grid grid-cols-2 gap-5">
                        <?php foreach($el["icons"] as $ico) :  ?>
                        <div class="flex items-center col-span-2 sm:col-span-1">
                            <figure
                                    class="overflow-hidden rounded-md bg-white w-10 h-10 relative text-secondary mr-3 flex-shrink-0">
                                <div class="bg-secondary bg-opacity-20 relative p-2 w-full h-full">
                                    <?php echo file_get_contents($ico["icon"]) ?>
                                </div>
                            </figure>
                            <span class="font-semibold leading-5">
                                <?php echo $ico["text"] ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="/kontakt/"
                       class="btn btn--primary btn--icon btn--arrow group/btn my-10">
                        Zamów teraz
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-r.png"
                             alt=""
                             class="ml-2.5 group-hover/btn:translate-x-2 transition-transform">
                    </a>
                </div>
            </section>
        </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="container mx-auto px-5 mt-20">
    <h2 class="text-4xl md:text-5xl font-extrabold mb-[1.6rem] text-center">
        Dopasuj akcesoria <span class="text-secondary">do Twoich potrzeb</span>
    </h2>
</section>

<section class="container mx-auto px-5 mt-20 mb-20">
    <div class="grid grid-cols-4 gap-20">
        <?php foreach(get_field("addons") as $el) : ?>
        <article class="col-span-4 md:col-span-1 rounded-xl shadow-lg md:shadow-2xl overflow-hidden">
            <h3 class="py-2 px-5 bg-secondary font-bold text-white text-center">
                <?php echo $el["name"] ?>
            </h3>
            <figure class="h-20 text-center w-full my-5 px-5">
                <img src="<?php echo $el["img"] ?>"
                     alt=""
                     class="h-full w-full object-contain mx-auto">
            </figure>
            <div class="px-5 mb-10 text-center text-sm">
                <?php echo $el["desc"] ?>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</section>

<?php get_template_part(THEME_PRT, "faq"); ?>
<?php get_template_part(THEME_PRT, "contact-footer"); ?>
<?php get_footer(); ?>