<section class="container px-[15px] mx-auto -mb-36 z-20">

    <div class="relative rounded-3xl px-5 py-16 bg-[#fff] before:absolute before:inset-0 before:shadow-glow before:shadow-[#d5d5d5] before:rounded-3xl before:-z-[1000]">
        <div class="max-w-[1230px] grid gap-[30px] grid-cols-1 xs:grid-cols-2 md:grid-cols-10 px-[15px] mx-auto ">
            <div class="md:col-span-4">
                <div class="">
                    <div class="flex justify-center xs:justify-start mb-10">
                        <div class="relative">
                            <img src="<?= get_template_directory_uri(); ?>/dist/images/shield.png" alt="" class="w-[61px]">
                            <img id="rocket" src="<?= get_template_directory_uri(); ?>/dist/images/rocket.png" alt="" class="absolute -top-3 left-1/2 -translate-x-1/2 w-[37px]">
                        </div>
                    </div>
                    <?php if ($footer_contact_heading = get_field('footer_contact_heading', 'options')) : ?>

                        <h2 class="text-4xl md:text-5xl font-extrabold text-[#081e22] mb-4">
                            <?= $footer_contact_heading['regular']; ?>
                            <span class="text-secondary">
                                <?= $footer_contact_heading['blue']; ?>
                            </span>
                        </h2>

                    <?php endif; ?>

                    <?php if ($footer_contact_subheading = get_field('footer_contact_subheading', 'options')) : ?>

                        <p class="text-base font-light">
                            <?= $footer_contact_subheading; ?>
                        </p>

                    <?php endif; ?>
                </div>
            </div>
            <div class="md:col-span-6">
                <?= do_shortcode('[contact-form-7 id="5" title="Formularz - stopka"]') ?>
            </div>
        </div>
    </div>

</section>

<?php $cf7_css_classes = 'grid grid-cols-1 sm:grid-cols-2 gap-x-[30px] gap-y-5 mb-1.5 font-bold sm:col-span-2 col-span-1 flex justify-end'; ?>