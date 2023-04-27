<?php
$args = wp_parse_args($args, array(
    'menu' => null,
    'class' => null
));
$menu = wp_get_menu_array($args['menu'], get_the_ID());
?>
<ul class="flex flex-col">
    <?php foreach ($menu['menus'] as $item) : ?>
    <li class="">
        <a href="<?php echo $item['url'] ?>" class="text-base hover:text-primary focus:text-primary transition-colors">
            <?php echo $item['title'] ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>