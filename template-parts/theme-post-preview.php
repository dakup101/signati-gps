<?php $args = wp_parse_args($args, array("counter" => 1)); ?>

<article class="py-10 px-5 bg-l-gray bg-opacity-10 rounded-2xl grid grid-cols-12 blog-post blog-post-preview">
    <section class="col-span-12 md:col-span-10 md:col-start-2 grid grid-cols-10 gap-y-5  md:gap-0">

        <div class="col-span-10 md:col-span-5 <?php if ($args["counter"] % 2 == 0) echo "md:order-last" ?>">
            <h3 class="text-2xl font-extrabold t text-secondary-l mb-5 hover:text-primary transition-all">
                <a href="<?php echo get_the_permalink() ?>">
                    <?php echo get_the_title() ?>
                </a>
            </h3>
            <div class="mb-10">
                <?php echo get_the_excerpt() ?>
            </div>
            <a href="<?php echo get_the_permalink() ?>"
                class="underline text-primary transition-all hover:text-secondary">
                (więcej...)
            </a>
        </div>
        <div class="spacer hidden md:block">

        </div>
        <a href="<?php echo get_the_permalink() ?>" style="min-height: 300px"
            class="<?php if ($args["counter"] % 2 == 0) echo "md:order-first" ?>  hover:after:opacity-30 after:opacity-0 after:transition-all after:bg-primary after:absolute after:top-0 after:left-0 after:w-full after:h-full block col-span-10 md:col-span-4 relative overflow-hidden rounded-xl shadow-xl">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>"
                class="absolute w-full object-cover h-full top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
        </a>
    </section>
</article>