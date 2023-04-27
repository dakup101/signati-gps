<?php
/* Template Name: O nas */
get_header();
?>

<?php get_template_part(THEME_PRT, "breadcrumbs") ?>

<section class="container mx-auto px-5 mb-20">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-[1.6rem] text-center">
        <?php echo get_field("text_start_title") ?>
    </h1>
</section>

<section class="container mx-auto px-5 mb-20">
    <div class="grid grid-cols-12 gap-y-10 items-center">
        <div class="col-span-12 md:col-span-5 order-last md:order-first">
            <div class="mb-10">
                <h2 class="text-2xl md:text-3xl font-extrabold mb-[1.6rem]">
                    <?php echo get_field("text_start_subtitle") ?>
                </h2>
                <?php echo get_field("text_start") ?>
            </div>
            <figure class="h-0.5 w-32 bg-secondary mb-5 block"></figure>
            <div class="text-secondary">
                <?php echo get_field("text_start_blue") ?>
            </div>
        </div>
        <div class="col-span-12 md:col-span-7 order-first md:order-last">
            <img src="<?php echo get_field("img_start") ?>"
                 alt="Signati GPS">
        </div>
    </div>
</section>

<section class="container mx-auto px-5 mb-20">
    <h2 class="text-2xl md:text-4xl font-extrabold mb-10 text-center">
        Nasz zespół
    </h2>
    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-10 md:col-start-2 grid grid-cols-3 gap-20">
            <?php foreach (get_field("team") as $el) : ?>
            <article class="col-span-3 md:col-span-1">
                <figure class="aspect-square w-full h-auto overflow-hidden shadow-2xl rounded-2xl mb-5">
                    <img src="<?php echo $el["img"] ?>"
                         alt="<?php echo $el["name"] ?>"
                         class="w-full h-full object-cover">
                </figure>
                <h3 class="font-bold text-xl md:text-2xl mb-1">
                    <?php echo $el["name"] ?>
                </h3>
                <span class=" font-light">
                    <?php echo $el["pos"] ?>
                </span>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="container mx-auto px-5">
    <div class="px-5 mt-20 bg-l-gray bg-opacity-10 rounded-3xl py-10 mb-10">
        <div class="grid grid-cols-12 items-center">
            <figure class="col-span-12 md:col-span-5 order-last md:order-first md:col-start-2">
                <img src="<?php echo get_field("history_img") ?>"
                     alt="SignatiGPS Historia">
            </figure>
            <div class="hidden md:block"></div>
            <div class="col-span-10 md:col-span-4 order-first md:order-last">
                <h2 class="text-2xl md:text-4xl font-extrabold mb-5">
                    <?php echo get_field("history_title") ?>
                </h2>
                <?php echo get_field("hostory_text") ?>
            </div>
        </div>
    </div>
</section>


<section class="container mx-auto px-5 mb-20">
    <h2 class="text-2xl md:text-4xl font-extrabold mb-[1.6rem] text-center">
        Przeczytaj opinie <span class="text-secondary">firm, które korzystają z SignatiGPS</span>
    </h2>
</section>


<?php foreach(get_field("refs") as $key => $el) : if ($key ==0 || $key % 2 == 0) : ?>

<section class="container mx-auto px-5">
    <div class="px-5 mt-20 bg-l-gray bg-opacity-10 rounded-3xl py-10 mb-10">
        <div class="grid grid-cols-12 gap-y-10 md:gap-x-10 items-center">
            <figure class="col-span-12 md:col-span-5 order-last">
                <img src="<?php echo $el["img"] ?>"
                     alt="SignatiGPS Historia">
            </figure>
            <div class="hidden md:block"></div>
            <div class="col-span-10 md:col-span-4 order-first md:col-start-2">
                <figure class="h-16 w-full mb-5">
                    <img src="<?php echo $el["logo"]  ?>"
                         alt="Creo Concept"
                         class="w-full h-full object-contain object-left">
                </figure>
                <figure class="w-8 h-8 mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-full h-full"
                         viewBox="0 0 24 24">
                        <path
                              d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                    </svg>
                </figure>
                <div class="mb-5">
                    <?php echo $el["tresc"] ?>
                </div>
                <p class="font-bold">
                    <?php echo $el["author"] ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php else : ?>

<section class="container mx-auto px-5">
    <div class="px-5 mt-20 bg-l-gray bg-opacity-10 rounded-3xl py-10 mb-20">
        <div class="grid grid-cols-12 gap-y-10 md:gap-x-10 items-center">
            <figure class="col-span-12 md:col-span-5 order-last md:order-first md:col-start-2">
                <img src="<?php echo $el["img"] ?>"
                     alt="SignatiGPS Historia">
            </figure>
            <div class="hidden md:block"></div>
            <div class="col-span-10 md:col-span-4 order-first md:order-last">
                <figure class="h-16 w-full mb-5">
                    <img src="<?php echo $el["logo"]  ?>"
                         alt="Vitrintec"
                         class="w-full h-full object-contain object-left">
                </figure>
                <figure class="w-8 h-8 mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-full h-full"
                         viewBox="0 0 24 24">
                        <path
                              d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                    </svg>
                </figure>
                <div class="mb-5">
                    <?php echo $el["tresc"] ?>
                </div>
                <p class="font-bold">
                    <?php echo $el["author"] ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php endif; endforeach ?>


<section class="container mx-auto px-5 mb-20">
    <div style="background-image: url('<?php echo THEME_IMG . "o_nas_bg.jpg"; ?>');"
         class="px-5 bg-left md:bg-center grid grid-cols-12 bg-cover bg-no-repeat text-white py-16 rounded-2xl">
        <div class="col-span-12 md:col-span-5 md:col-start-2">
            <h2 class="text-2xl md:text-4xl font-extrabold mb-5">
                <?php echo get_field("cta__title") ?>
            </h2>
            <div class="mb-5 max-w-md">
                <?php echo get_field("cta__text") ?>
            </div>
            <div class="flex items-center mb-5">
                <figure class="w-10 h-10 rounded-lg bg-primary bg-opacity-30 mr-3">
                    <?php echo file_get_contents(THEME_IMG . "ico_monitor.svg") ?>
                </figure>
                <div class="flex flex-col font-bold">
                    <span class="text-secondary  leading-2">
                        <?php echo get_field("cta_title_1") ?>

                    </span>
                    <span class="leading-2">
                        <?php echo get_field("cta_text_1") ?>
                    </span>
                </div>
            </div>
            <div class="flex items-center mb-5">
                <figure class="w-10 h-10 rounded-lg bg-primary bg-opacity-30 mr-3">
                    <?php echo file_get_contents(THEME_IMG . "ico_tablet.svg") ?>
                </figure>
                <div class="flex flex-col font-bold">
                    <span class="text-secondary  leading-2">
                        <?php echo get_field("cta_title_2") ?>
                    </span>
                    <span class="leading-2">
                        <?php echo get_field("cta_text_2") ?>
                    </span>
                </div>
            </div>
            <div class="flex items-center">
                <figure class="w-10 h-10 rounded-lg bg-primary bg-opacity-30 mr-3">
                    <?php echo file_get_contents(THEME_IMG . "ico_telefon.svg") ?>
                </figure>
                <div class="flex flex-col font-bold ">
                    <span class="text-secondary leading-2">
                        <?php echo get_field("cta_title_3") ?>
                    </span>
                    <span class="leading-2">
                        <?php echo get_field("cta_text_3") ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part(THEME_PRT, "video", array("id" => 209)); ?>
<div class="spacer mb-20">

</div>
<?php get_template_part(THEME_PRT, "faq"); ?>
<?php get_template_part(THEME_PRT, "contact-footer"); ?>
<?php get_footer(); ?>