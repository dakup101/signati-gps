<?php

$query_args = array(
    'post_type'      => 'vehicle',
    'posts_per_page' => -1
);

$the_query = new WP_Query($query_args);

?>
<?php if ($the_query->have_posts()) : ?>

    <div class="container px-5 mx-auto py-16">
        <?php if ($vehicle_func_heading = get_field('vehicle_func_heading', 'options')) : ?>

            <h2 class="text-4xl md:text-5xl font-extrabold mb-10 text-center">
                <!-- <?= $vehicle_func_heading['start']; ?> -->
                <span class="text-secondary"><?= $vehicle_func_heading['blue']; ?></span>
                <?= $vehicle_func_heading['end']; ?>
            </h2>

        <?php endif; ?>
        <div class="hidden md:block">
            <div class="vehicles-controller swiper mb-10 md:mb-20 mx-auto hidden">
                <div class="swiper-wrapper">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="swiper-slide col-span-6 md:col-span-1 relative py-3 text-dark transition-colors duration-300 before:absolute before:bottom-0 before:w-full before:h-1 before:rounded-full before:bg-l-gray before:opacity-30 before:transition-colors before:duration-300 cursor-pointer hover:text-black hover:before:bg-primary">
                            <?= get_the_title(); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>


            <div class="vehicles-slider swiper max-w-[1240px] px-[15px] mx-auto">
                <div class="swiper-wrapper">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-10 gap-10 items-center px-[15px]">
                                <div class="lg:col-span-4 py-8">
                                    <h3 class="text-4xl md:text-5xl font-heading font-bold mb-7">
                                        <?= get_the_title(); ?>
                                    </h3>
                                    <?php if ($descrption = get_field('description')) : ?>
                                        <p class="font-light mb-6">
                                            <?= $descrption; ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if (have_rows('featured_functionalities')) : ?>
                                        <ul class="list-none text-base font-heading mb-6">
                                            <?php while (have_rows('featured_functionalities')) : the_row(); ?>
                                                <li class="flex items-center mb-3">
                                                    <?php if ($icon = get_sub_field('icon')) : ?>
                                                        <div class="relative w-9 h-9 shrink-0 rounded-lg bg-primary-l mr-4">
                                                            <img src="<?= $icon['url']; ?>" alt="" class="absolute top-1/2 left-1/2 w-full max-w-[70%] max-h-[70%] -translate-x-1/2 -translate-y-1/2">
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if ($functionality = get_sub_field('functionality')) : ?>
                                                        <?= $functionality; ?>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <a href="<?php echo get_field("url") ?>" class="flex items-center font-bold text-primary hover:text-secondary focus:text-secondary transition-colors duration-300">
										Zobacz szczegóły
									</a>
                                </div>
                                <?php if ($image = get_field('image')) : ?>
                                    <?= wp_get_attachment_image($image, 'vehicles', '', ['class' => 'lg:col-span-6']); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>

        </div>

        <div class="block md:hidden">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <div class="group/question mb-3 md:hidden">
                    <button aria-expanded="<?php echo $the_query->current_post == 0 ? "true" : "false" ?>" aria-controls="" class="faq-question block w-full group/button relative before:absolute before:left-0 before:bottom-0 before:w-full before:h-1 before:rounded-full before:bg-l-gray before:opacity-30">
                        <h3 class="flex items-center justify-between text-left">
                            <span class="relative py-3 text-dark text-left w-full shrink transition-colors mr-5 duration-300  before:transition-colors before:duration-300 cursor-pointer hover:text-black hover:before:bg-primary">
                                <?= get_the_title(); ?>
                            </span>

                            <img src="<?= get_template_directory_uri(); ?>/dist/images/faq-arrow.png" alt="" class="relative w-5 shrink-0 transition-transform group-aria-expanded/button:rotate-180 group-hover/button:animate-bounce-rotated group-aria-expanded/button:group-hover/button:animate-bounce-rotated animation-delay-150">
                        </h3>
                    </button>
                    <div id="answear-" class="overflow-hidden <?php if ($the_query->current_post !== 0) echo "h-0" ?>">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-10 gap-10 items-center px-[15px]">
                            <div class="lg:col-span-4 pt-5">
                                <h3 class="text-4xl md:text-5xl font-heading font-bold mb-7">
                                    <?= get_the_title(); ?>
                                </h3>
                                <?php if ($descrption = get_field('description')) : ?>
                                    <p class="font-light mb-6">
                                        <?= $descrption; ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (have_rows('featured_functionalities')) : ?>
                                    <ul class="list-none text-base font-heading mb-6">
                                        <?php while (have_rows('featured_functionalities')) : the_row(); ?>
                                            <li class="flex items-center mb-3">
                                                <?php if ($icon = get_sub_field('icon')) : ?>
                                                    <div class="relative w-9 h-9 shrink-0 rounded-lg bg-primary-l mr-4">
                                                        <img src="<?= $icon['url']; ?>" alt="" class="absolute top-1/2 left-1/2 w-full max-w-[70%] max-h-[70%] -translate-x-1/2 -translate-y-1/2">
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($functionality = get_sub_field('functionality')) : ?>
                                                    <?= $functionality; ?>
                                                <?php endif; ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <a href="#" class="flex items-center font-bold text-primary hover:text-secondary focus:text-secondary transition-colors duration-300">Zobacz
                                    wszystkie funkcjonalności</a>
                            </div>
                            <?php if ($image = get_field('image')) : ?>
                                <?= wp_get_attachment_image($image, 'vehicles', '', ['class' => 'lg:col-span-6']); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>

    </div>

<?php wp_reset_query();
endif; ?>