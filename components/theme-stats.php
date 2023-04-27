<?php $stats = wp_parse_args($args, array(
    "title" => "THE",
    "name" => "Stats",
    "image" => THEME_IMG . "stats_dummy.jpg",
    "text_1" => "Text 1",
    "value_1" => "17",
    "value_1_suffix" => "&nbsp;km",
    "icon_1" => THEME_IMG . "geo.svg",
    "text_2" => "Text 2",
    "value_2" => "25",
    "value_2_suffix" => "&nbsp;km/h",
    "icon_2" => THEME_IMG . "speed.svg",
    "class" => "text-primary absolute max-xs:left-9 xs:right-1/3",
    "alt" => true,
    "notch" => "orange",
    "notch_class" => "-bottom-6 right-10"
)) ?>
<!-- Single Stat -->
<div class="stat <?php echo $stats["class"] ?>">
    <div class="relative p-3 border-2 border-current border-solid rounded-xl w-fit bg-d-blue bg-opacity-70 md:bg-opacity-50 before:absolute before:inset-0 before:rounded-xl before:opacity-50">
        <div class="text-white border-b border-white border-solid pb-3 <?= $stats["alt"] ? "pr-11" : "pl-8" ?>">
            <div class="text-xs leading-none"><?= $stats["title"] ?></div>
            <div class="text-base font-bold leading-tight"><?= $stats['name']; ?></div>
        </div>
        <div class="flex items-center pt-3 justify-between <?= $stats['alt'] ? "flex-row-reverse" : "flex-row" ?>">
            <div class="flex items-center <?= $stats['alt'] ? "ml-5" : "mr-5" ?>">
                <figure class="h-8 w-8 p-1 relative flex before:absolute before:inset-0 before:bg-current before:h-full before:w-full before:opacity-30 before:rounded-lg mr-3">
                    <?= file_get_contents($stats["icon_1"]) ?>
                </figure>
                <div class="text-white">
                    <div class="text-xs leading-none"><?= $stats['text_1']; ?></div>
                    <div class="text-base font-bold leading-tight"><span class="animate-number distance" data-number="<?= $stats['value_1'] ?>">100</span><?= $stats['value_1_suffix']; ?>
                    </div>
                </div>
            </div>
            <div class="flex items-center">
                <figure class="h-8 w-8 p-1 relative flex before:absolute before:inset-0 before:bg-current before:h-full before:w-full before:opacity-30 before:rounded-lg mr-3">
                    <?= file_get_contents($stats["icon_2"]) ?>
                </figure>
                <div class="text-white">
                    <div class="text-xs leading-none"><?= $stats['text_2']; ?></div>
                    <div class="text-base leading-tight font-bold"><span class="animate-number speed" data-number="<?= $stats['value_2'] ?>">0</span><?= $stats['value_2_suffix']; ?>
                    </div>
                </div>
            </div>
        </div>
        <figure class=" absolute
                            <?= $stats["alt"] ? "top-0 right-0 translate-x-1/3" : "top-0 left-0 -translate-x-1/3" ?>
                            -translate-y-1/3 w-14 h-14 overflow-hidden border-current border-2 border-solid rounded-full ">
            <img src=" <?= $stats["image"] ?>" alt="<?= $stats["name"] ?>" class="w-full h-full object-cover">
        </figure>
        <figure class="absolute h-6 w-6 <?= $stats["notch_class"] ?>">
            <?php
            $dziubek = "";
            switch ($stats["notch"]) {
                case "orange": {
                        $dziubek = "dziubek-orange.svg";
                        break;
                    }
                case "white": {
                        $dziubek = "dziubek-white.svg";
                        break;
                    }
                default: {
                        $dziubek = "dziubek.svg";
                        break;
                    }
            } ?>
            <img src="<?= THEME_IMG . $dziubek ?>" alt="">
        </figure>
    </div>
</div>