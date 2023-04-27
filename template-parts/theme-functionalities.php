<?php if (have_rows('functionalities', 'options')) : ?>

    <section class="container px-5 hidden md:grid grid-cols-1 sm:grid-cols-2 gap-10 mx-auto max-w-7xl py-20">

        <div class="col-span-1">
            <?php if ($functionalities_heading = get_field('functionalities_heading', 'options')) : ?>

                <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                    <span class="text-secondary">
                        <?= $functionalities_heading['blue']; ?>
                    </span>
                    <?= $functionalities_heading['regular']; ?>
                </h2>

            <?php endif; ?>



            <div class="text-base mb-16">
                <?= $functionalities_heading['subheading']; ?>
            </div>


            <div class="functionalities-controller swiper py-5">
                <div class="swiper-wrapper  gap-5">
                    <?php while (have_rows('functionalities', 'options')) : the_row(); ?>
                        <div class="swiper-slide">

                            <div class="func-item-btn relative flex items-center font-light px-4 py-2 rounded-full shadow-xl">
                                <?php if ($icon = get_sub_field('icon')) : ?>
                                    <figure class="mr-3 w-10 h-10">
                                        <?php echo file_get_contents($icon) ?>
                                    </figure>
                                <?php endif; ?>
                                <?php if ($functionality = get_sub_field('functionality')) : ?>
                                    <?= $functionality; ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>

        <div class="col-span-1">
            <div class="swiper functionalities-slider">
                <div class="swiper-wrapper">
                    <?php while (have_rows('functionalities', 'options')) : the_row(); ?>

                        <?php if ($image = get_sub_field('image')) : ?>

                            <div class="swiper-slide">
                                <div class="px-4">
                                    <?= wp_get_attachment_image($image, 'full', '', ["class" => "w-full"]); ?>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <div class="container px-5 mx-auto block md:hidden py-10">
        <?php if ($functionalities_heading = get_field('functionalities_heading', 'options')) : ?>

            <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                <span class="text-secondary">
                    <?= $functionalities_heading['blue']; ?>
                </span>
                <?= $functionalities_heading['regular']; ?>
            </h2>

        <?php endif; ?>


        <div class="text-base mb-8">
            <?= $functionalities_heading['subheading']; ?>
        </div>

        <div class="opacity-60 mb-4">
            <small>* Kliknij, aby zobaczyć więcej</small>
        </div>


        <div class="block func-items-mobile">
            <?php while (have_rows('functionalities', 'options')) : the_row(); ?>
                <div class="group/question block mb-5 md:hidden">
                    <button aria-expanded="false" aria-controls="" class="faq-question block w-full group/button relative">
                        <div class="func-item-btn relative flex items-center font-light px-4 py-2 rounded-full shadow-xl">
                            <?php if ($icon = get_sub_field('icon')) : ?>
                                <figure class="mr-3 w-10 h-10">
                                    <?php echo file_get_contents($icon) ?>
                                </figure>
                            <?php endif; ?>
                            <?php if ($functionality = get_sub_field('functionality')) : ?>
                                <?= $functionality; ?>
                            <?php endif; ?>
                        </div>
                    </button>
                    <div id="answear-" class="overflow-hidden h-0">
                        <div class="pt-10">
                            <?= wp_get_attachment_image($image, 'full', '', ["class" => "w-full"]); ?>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>

<?php endif; ?>