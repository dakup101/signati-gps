<?php $nav = wp_get_menu_array("main-nav", get_the_ID()); ?>
<nav class="site-header-nav">
    <ul class="list-none flex justify-between w-fit gap-10 items-center">
        <?php foreach ($nav["menus"] as $nav_item) get_template_part(THEME_CMP, "header-nav-item", $nav_item) ?>
        <li>
            <a href="#" class="btn btn--primary btn--icon btn--arrow group/btn benefits-show">
                <img src="<?= THEME_IMG . "benefits.png" ?>" alt="" class=" w-[25px] mr-2.5">
                Sprawdź swoje korzyści
                <img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-r.png" alt="" class="ml-2.5 group-hover/btn:translate-x-2 transition-transform">
            </a>
        </li>
    </ul>
</nav>