<?php $nav_item = wp_parse_args($args, array()); ?>
<?php $has_children = !empty($nav_item["children"]); ?>

<li
    class="font-heading font-semibold <?= $has_children ? "site-header-nav-item has-children" : "site-header-nav-item" ?>">
    <a href="<?= $nav_item["url"] ?>">
        <span>
            <?= $nav_item["title"] ?>
        </span>
        <?php if ($has_children) echo file_get_contents(THEME_IMG . "arrow.svg") ?>
    </a>
    <?php if ($has_children) : ?>
    <ul class="site-header-nav-sub hide-menu">
        <div class="site-header-nav-sub-info font-bold text-secondary">
            Poznaj funkcjonalnosci dla
        </div>
        <?php foreach ($nav_item["children"] as $sub) get_template_part(THEME_CMP, "header-nav-sub-item", $sub) ?>
    </ul>
    <?php endif; ?>
</li>