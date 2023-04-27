<section class="bg-gradient-to-r from-gradient-dark-light to-gradient-dark">
    <div class="container grid grid-cols-1 md:grid-cols-3 gap-2 mx-auto">
        <div class="pt-9 px-5 md:px-0 md:pb-24 md:pl-5">
            <?php if ($banner_heading = get_field('banner_heading')) : ?>
                <h1 class="text-white text-4xl xs:text-6xl md:text-4xl lg:text-6xl font-heading mb-3 font-extrabold">
                    <span class="text-secondary">
                        <?= $banner_heading['blue']; ?>
                    </span>
                    <?= $banner_heading['regular']; ?>
                </h1>
            <?php endif; ?>
            <?php if ($banner_text = get_field('banner_text')) : ?>
                <div class="text-l-blue text-base mb-11">
                    <?= $banner_text; ?>
                </div>
            <?php endif; ?>
            <?php if ($banner_button = get_field('banner_button')) : ?>
                <a href="#" class="btn btn--primary btn--icon btn--arrow mb-6 group/btn benefits-show">
                    <img src="<?= THEME_IMG . "benefits.png" ?>" alt="" class=" w-[25px] mr-2.5">
                    <?= $banner_button['title']; ?>
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-r.png" alt="" class="ml-2.5 group-hover/btn:translate-x-2 transition-transform">
                </a>
            <?php endif; ?>
            <?php if ($banner_movie = get_field('banner_movie')) : ?>
                <a href="#" class="flex items-center text-sm text-primary group/play hover:text-secondary transition-colors play-video">
                    <span class="mr-2"><?php get_template_part(THEME_CMP, 'play-orange', ['class' => 'w-[25px]']); ?></span>
                    <?= $banner_movie['title']; ?>
                    <span class="text-xs text-l-gray">
                        &nbsp; <?= $banner_movie['duration']; ?>
                    </span>
                </a>
            <?php endif; ?>
        </div>
        <div <?php if ($banner_bg = get_field('background_image')) : ?> style="background-image: url('<?= $banner_bg; ?>')" <?php endif; ?> class="banner-bg relative md:col-span-2 bg-cover bg-no-repeat py-8 min-h-[600px]">
            <?php if ($stats_1 = get_field('stats_1')) get_template_part(THEME_CMP, "stats", array(
                "title" => "POJAZD",
                "name" => $stats_1["name"],
                "image" => $stats_1["image"],
                "text_1" => "Trasa",
                "value_1" => $stats_1["route"],
                "value_1_suffix" => "&nbsp;km",
                "icon_1" => THEME_IMG . "geo.svg",
                "text_2" => "Śr. prędkość",
                "value_2" => $stats_1["speed"],
                "value_2_suffix" => "&nbsp;km/h",
                "icon_2" => THEME_IMG . "speed.svg",
                "class" => "text-primary absolute max-xs:left-9 xs:left-1/3 top-14 animate__animated animate__fadeInLeft",
                "alt" => false,
                "notch" => "orange",
                "notch_class" => "-bottom-6 right-32 md:right-10"
            )); ?>
            <?php if ($stats_2 = get_field('stats_2')) get_template_part(THEME_CMP, "stats", array(
                "title" => "THE",
                "name" => $stats_2["name"],
                "image" => $stats_2["image"],
                "text_1" => "Trasa",
                "value_1" => $stats_2["route"],
                "value_1_suffix" => "&nbsp;km",
                "icon_1" => THEME_IMG . "geo.svg",
                "text_2" => "Śr. prędkość",
                "value_2" => $stats_2["speed"],
                "value_2_suffix" => "&nbsp;km/h",
                "icon_2" => THEME_IMG . "speed.svg",
                "class" => "text-secondary absolute top-52 md:top-28 right-5 animate__animated animate__fadeInRight",
                "alt" => true,
                "notch" => "blue",
                "notch_class" => "md:-botto -bottom-6 left-10"
            )); ?>

            <?php if ($stats_bottom = get_field('stats_bottom')) : ?>

                <div class="absolute bottom-16 right-5 max-w-[120px]">
                    <?= wp_get_attachment_image($stats_bottom, 'full'); ?>
                </div>

            <?php endif; ?>
        </div>
    </div>

</section>