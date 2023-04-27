<?php if (have_rows('for_whom', 'options')) : ?>

    <section class="bg-d-blue px-5 py-20">
        <?php if ($for_whom_heading = get_field('for_whom_heading', 'options')) : ?>

            <div class="container px-[15px] text-center mb-2 mx-auto">
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-1.5">
                    <?= $for_whom_heading['white']; ?>
                    <span class="text-secondary">
                        <?= $for_whom_heading['blue']; ?>
                    </span>
                </h2>
                <div class="text-white max-w-[610px] mx-auto">
                    <?= $for_whom_heading['text']; ?>
                </div>
            </div>

        <?php endif; ?>
        <div class="for-slider swiper">
            <div class="swiper-wrapper pb-16 md:pb-0">
                <?php foreach (get_field('for_whom', 'options') as $el) :  ?>
                    <div class="swiper-slide">
                        <div class="container mx-auto grid grid-cols-1 md:grid-cols-8 pt-5 px-[15px]">
                            <div class="col-span-5 relative @container/stats">
                                <img src="<?php echo $el["image"] ?>" alt="">

                                <!-- <?php if ($img = get_sub_field('bg')) : ?>


                                <?php endif; ?>
                                <?php if ($image = get_sub_field('image')) : ?>

                                    <?= wp_get_attachment_image($image, 'for-whom', '', ['class' => 'col-start-1 col-span-6 @[560px]/stats:col-start-2 @[560px]/stats:col-span-5 rounded-3xl']) ?>

                                    <?php if ($text_icon = get_sub_field('text_icon')) : ?>

                                        <div class="absolute col-start-1 top-5 bg-secondary text-white flex items-center px-6 py-8 rounded-2xl max-w-[280px] @[560px]/stats:translate-x-11 before:absolute before:inset-0 before:shadow-glow before:shadow-secondary before:rounded-2xl before:animate-pulse">
                                            <div class="text-[1.375rem] leading-tight">
                                                <?= $text_icon['text']; ?>
                                            </div>
                                            <?= wp_get_attachment_image($text_icon['icon'], 'full', '', ['class' => 'w-10 ml-8']); ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($stats = get_sub_field('stats')) : ?>

                                        <div class="absolute col-start-1 ml-5 bottom-48 @[500px]/stats:bottom-28 px-3 py-2 border-2 border-white border-solid rounded-xl max-w-[250px] w-full bg-d-blue bg-opacity-80  before:absolute before:inset-0 before:shadow-glow before:shadow-white before:animate-pulse before:animation-delay-300">
                                            <div class="text-white border-b border-white border-solid pb-1 pl-11">
                                                <div class="text-xs"><?= $stats['label']; ?></div>
                                                <div class="text-base font-bold"><?= $stats['name']; ?></div>
                                            </div>
                                            <div class="flex items-center pt-1 justify-between">
                                                <div class="flex items-center text-white">
                                                    <img src="<?= get_template_directory_uri(); ?>/dist/images/pin-black.svg" alt="">
                                                    <div class="mr-2">
                                                        <div class="text-xs">Trasa</div>
                                                        <div class="text-base font-bold"><?= $stats['route']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center text-white">
                                                    <img src="<?= get_template_directory_uri(); ?>/dist/images/speed-black.svg" alt="">
                                                    <div>
                                                        <div class="text-xs">Śr. prędkość</div>
                                                        <div class="text-base font-bold"><?= $stats['speed']; ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="absolute top-0 left-0 w-14 h-14 overflow-hidden border-white border-2 border-solid rounded-full -translate-x-1/3 -translate-y-1/3">
                                                <?= wp_get_attachment_image($stats['image'], 'stats-img', '', ['class' => 'w-full h-full object-cover']); ?>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                    <div class="absolute -right-4 bottom-0 @[500px]/stats:bottom-28 p-5 bg-white rounded-2xl border-solid border-2 border-secondary before:absolute before:inset-0 before:rounded-2xl before:shadow-glow before:shadow-secondary before:animate-pulse isolate before:-z-[1]">
                                        <div class="text-sm font-bold mb-5">Analiza trasy:</div>
                                        <ul class="list-none p-0">
                                            <li class="text-sm mb-5">
                                                <label for="route" class="pl-7"><input type="checkbox" id="route" name="route" class="hidden">Długość przebytej trasy</label>
                                            </li>
                                            <li class="text-sm mb-5">
                                                <label for="route" class="pl-7"><input type="checkbox" id="route" name="route" class="hidden">Spalanie i koszt paliwa</label>
                                            </li>
                                            <li class="text-sm">
                                                <label for="route" class="pl-7"><input type="checkbox" id="route" name="route" class="hidden">Prędkość średnia</label>
                                            </li>
                                        </ul>
                                    </div>



                                <?php endif; ?> -->
                            </div>
                            <div class="grid grid-cols-6 relative py-4 md:py-8 col-span-3">
                                <div class="flex flex-col justify-center col-span-6">


                                    <h3 class="text-secondary text-4xl font-bold mb-8">
                                        <?= $el["heading"]; ?>
                                    </h3>



                                    <div class="text-white text-base mb-6">
                                        <?= $el["text"]; ?>
                                    </div>




                                    <a href="<?= $el["button"]['url']; ?>" class="btn btn--primary btn--icon btn--arrow group/btn">
                                        <img src="<?= $el["button"]['icon']; ?>" alt="" class="w-6 mr-3">
                                        <?= $el["button"]['title']; ?>
                                        <span class="arrow"></span>
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination mt-20"></div>
        </div>
    </section>


<?php endif; ?>