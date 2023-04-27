<?php
/* Template Name: Referencje */
get_header();
?>

<?php get_template_part(THEME_PRT, "breadcrumbs") ?>

<section class="container mx-auto px-5 mb-20">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-[1.6rem] text-center">
        Przeczytaj opinie <span class="text-secondary">firm, które korzystają z SignatiGPS</span>
    </h1>
</section>

<?php foreach(get_field("refs") as $key => $el) : if ($key ==0 || $key % 2 == 0) : ?>


<section class="container mx-auto px-5">
    <div class="px-5 mt-20 bg-l-gray bg-opacity-10 rounded-3xl py-10 mb-10">
        <div class="grid grid-cols-12 gap-y-10 md:gap-x-10 items-center">
            <figure class="col-span-12 md:col-span-6 order-last rounded-xl shadow-2xl overflow-hidden h-72 md:h-full">
                <img src="<?php echo $el["img"] ?>"
                     alt="SignatiGPS Historia"
                     class="w-full h-full object-cover">
            </figure>
            <div class="col-span-12 font-light md:col-span-4 order-first md:col-start-2">
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
    <div class="container mx-auto px-5 mt-20 bg-l-gray bg-opacity-10 rounded-3xl py-10 mb-20">
        <div class="grid grid-cols-12 gap-y-10 md:gap-x-10 items-center">
            <figure
                    class="col-span-12 md:col-span-6 order-last md:order-first md:col-start-2 rounded-xl shadow-2xl overflow-hidden h-72 md:h-full">
                <img src="<?php echo $el["img"] ?>"
                     alt="SignatiGPS Historia"
                     class="w-full h-full object-cover">
            </figure>
            <div class="col-span-10 font-light md:col-span-4 order-first md:order-last">
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

<?php get_template_part(THEME_PRT, "contact-footer"); ?>
<?php get_footer(); ?>