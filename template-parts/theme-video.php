<?php $args = wp_parse_args($args, array("id" => get_the_ID())) ?>
<section class="relative flex flex-col items-center transition-all">
    <video id="video" poster="<?= get_field('poster', $args["id"]); ?>"
        class="absolute top-0 left-0 w-full h-full object-cover">
        <source data-src="<?= get_field('film', $args["id"]) ?>" type="video/<?= get_field('type', $args["id"]); ?>">
    </video>
    <div class="video-overlay transition-all absolute w-full h-full top-0 left-0 bg-dark opacity-60">

    </div>
    <div
        class="animate__animated animate__fadeInLeft relative video-description transition-all pb-16 container mx-auto px-5  duration-300">
        <div class="max-w-md lg:max-w-lg pt-14 pb-14 md:pb-[140px]">
            <?php if ($video_description = get_field('video_description', $args["id"])) : ?>

            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4 font-heading">
                <?= $video_description['title']; ?>
            </h2>

            <p class="text-white mb-10">
                <?= $video_description['text']; ?>
            </p>
            <?php endif; ?>

            <?php if ($video_link = get_field('video_link', $args["id"])) : ?>
            <div class="flex items-center gap-5">
                <button
                    class="play-video block md:hidden relative  w-16 h-16 rounded-full border-2 border-solid border-white transition-all duration-300 hover:border-primary after:absolute after:left-1/2 after:top-1/2 after:border-solid after:border-l-[26px] after:border-l-white after:border-t-[16px] after:border-b-[16px] after:border-t-transparent after:border-b-transparent after:-translate-x-1/3 after:-translate-y-1/2 hover:after:border-l-primary after:transition-colors after:duration-300 cursor-pointer">
                </button>
                <a href="<?= $video_link['url']; ?>" class="btn btn--primary">
                    <?= $video_link['title']; ?>
                </a>
            </div>

            <?php endif; ?>
        </div>
    </div>

    <button
        class="play-video hidden md:block relative max-xs:my-10 xs:absolute xs:top-1/2 xs:max-md:right-5 md:left-1/2 play-video w-20 h-20 rounded-full border-4 border-solid border-white xs:-translate-x-1/2 xs:-translate-y-1/2 transition-all duration-300 hover:border-primary after:absolute after:left-1/2 after:top-1/2 after:border-solid after:border-l-[26px] after:border-l-white after:border-t-[16px] after:border-b-[16px] after:border-t-transparent after:border-b-transparent after:-translate-x-1/3 after:-translate-y-1/2 hover:after:border-l-primary after:transition-colors after:duration-300 cursor-pointer">
    </button>

</section>