<?php get_header(); ?>

<?php get_template_part(THEME_PRT, "breadcrumbs") ?>


<section class="container mx-auto px-5 blog-post blog-post-content">

    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-8 md:col-start-3">
            <h1 class="text-4xl md:text-5xl mb-10 text-secondary font-extrabold"><?php echo get_the_title(); ?></h1>

            <?php echo wpautop(get_the_content()); ?>
        </div>
    </div>

</section>

<!-- TODO: Related posts with pagination -->
<!-- <section>
    <div class="related-posts">
        <h2>Related Posts</h2>
        <?php
        $orig_post = $post;
        global $post;
        $categories = get_the_category($post->ID);
        if ($categories) {
            $category_ids = array();
            foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

            $args = array(
                'category__in' => $category_ids,
                'post__not_in' => array($post->ID),
                'posts_per_page' => 2,
                'paged' => get_query_var('paged')
            );

            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    // Display your related post content here
                } ?>
        <?php echo get_the_title() ?>
        <?php
                // Display pagination links here
                wp_reset_postdata();
            }
        }
        $post = $orig_post;
        ?>
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $my_query->max_num_pages,
                'prev_text' => '&laquo; Previous',
                'next_text' => 'Next &raquo;'
            ));
            ?>
        </div>

    </div>

</section> -->

<?php get_template_part(THEME_PRT, "video", array("id" => 209)); ?>

<section class="container mx-auto px-5 mt-20 bg-l-gray bg-opacity-10 rounded-3xl py-10">
    <div class="grid grid-cols-12">
        <div class="col-span-10 col-start-2">
            <div class="grid grid-cols-12 gap-y-10 md:gap-10 items-center">
                <div class="col-span-12 md:col-span-5">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-[1.6rem]">
                        Co daje<br><span class="text-secondary">monitoring GPS?</span>
                    </h2>
                    <p class="mb-5">
                        Wbudowany w urządzenie akcelerometr może pokazać przyspieszenia w osiach X, Y, Z - co może pomóc
                        w analizie np. “twardych lądowań”. Dodatkowo pomiar napięcia akumulatora pokaże jego stan,
                        działanie alternatora (ładowania) a także ostrzeżenia o zbyt niskim napięciu.


                    </p>
                    <p>
                        Dostęp do systemu SignatiGPS odbywa się za pomocą aplikacji on-line, jest więc możliwy zarówno z
                        poziomu tabletów, telefonów jak i komputerów stacjonarnych. Możliwe jest założenie wielu kont
                        użytkowników z dostępem do wszystkich lub wybranych samolotów, a także link typu “gość” gdzie
                        widać pozycję samolotu bez potrzeby logowania i udostępniania historii postronnym osobom. Taki
                        dostęp pozwala na przesłanie linku np. znajomej osobie, która może widzieć gdzie jest samolot w
                        określonym czasie (np. tylko dzisiaj).


                    </p>
                </div>
                <figure class="col-span-12 md:col-span-7">
                    <img src="<?php echo THEME_IMG . "rozwiazania_samoloty_03.png" ?>" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="container mx-auto px-5 mt-10 mb-20 bg-l-gray bg-opacity-10 rounded-3xl py-10">
    <div class="grid grid-cols-12">
        <div class="col-span-10 col-start-2">
            <div class="grid grid-cols-2 gap-10 items-center">
                <figure class="col-span-2 md:col-span-1">
                    <img src="<?php echo THEME_IMG . "rozwiazania_samoloty_02.png" ?>" alt="">
                </figure>
                <div class="col-span-2 md:col-span-1">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-[1.6rem]">
                        Dlaczego <span class="text-secondary">warto?</span>
                    </h2>
                    <p class="mb-5">
                        Urządzenia posiadają wbudowane karty GSM dzięki czemu wszelkie dane wysyłane są na bieżąco. W
                        przypadku miejsc bez pokrycia sieci komórkowej zapisywane są w pamięci urządzenia i wysyłane od
                        razu po powrocie zasięgu.

                    </p>
                    <p class="mb-5">
                        W przypadku lotów po trasach na bieżąco można widzieć pozycję samolotu, niezależnie od włączenia
                        / działania transpondera. Jest to szczególnie ważne w przypadku lotów przez uczniów lub młodych
                        pilotów. Dzięki posiadanej pamięci urządzenie jest również czarną skrzynką (w wersji online),
                        która ma zapisane dane dotyczące pozycji i lotu.
                    </p>
                    <p>
                        Analiza tras historycznych powala łatwo sprawdzić, czy samoloty poruszają się na wymaganej
                        wysokości oraz czy nie naruszają stref zakazanych / niebezpiecznych.

                    </p>
                </div>

            </div>
        </div>
    </div>
</section>



<?php get_template_part(THEME_PRT, "faq"); ?>
<?php get_template_part(THEME_PRT, "contact-footer"); ?>

<?php get_footer(); ?>