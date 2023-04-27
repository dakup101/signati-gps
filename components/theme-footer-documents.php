<?php
$args = wp_parse_args($args, array(
    'menu' => null,
    'class' => null
));
$menu = wp_get_menu_array($args['menu'], null);
?>
<ul class="flex mt-auto @[420px]:gap-[50px] flex-col gap-2 @[350px]:flex-row">
    <?php foreach ($menu['menus'] as $item) : ?>
        <li class="mr-2 last:mr-0">
            <a href="<?php echo $item['url'] ?>" class="text-sm text-secondary hover:text-primary focus:text-primary transition-colors">
                <?php echo $item['title'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>