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
                <div class="container mx-auto grid grid-cols-1 md:grid-cols-8 pt-5 md:px-16">
                    <div class="col-span-5 relative @container/stats">
                        <img src="<?php echo $el["image"] ?>"
                             alt="">
                    </div>
                    <div class="grid grid-cols-6 relative py-4 md:py-8 col-span-3">
                        <div class="flex flex-col justify-center col-span-6">

                            <h3 class="text-secondary text-4xl font-bold mb-8">
                                <?= $el["heading"]; ?>
                            </h3>

                            <div class="text-white text-base mb-6">
                                <?= $el["text"]; ?>
                            </div>

                            <a href="<?= $el["button"]['url']; ?>"
                               class="btn btn--primary btn--icon btn--arrow group/btn">
                                <img src="<?= $el["button"]['icon']; ?>"
                                     alt=""
                                     class="w-6 mr-3">
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
        <div class="swiper-navigation hidden md:block">
            <button
                    class="swiper-button-next !text-primary hover:!text-secondary-l transition-all after:transition-all">
            </button>
            <button
                    class="swiper-button-prev !text-primary hover:!text-secondary-l transition-all after:transition-all">
            </button>
        </div>
    </div>
</section>


<?php endif; ?>