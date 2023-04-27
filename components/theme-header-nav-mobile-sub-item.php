<?php $sub = wp_parse_args($args, array()); ?>

<li class="site-header-nav-mobile-sub-item">
    <a href="<?= $sub["url"] ?>">
        <span><?= $sub["title"] ?></span>
        <?= ($sub["icon"]) ? file_get_contents($sub["icon"]) : null; ?>
    </a>
</li>