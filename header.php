<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo wp_title(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>


    <header class="site-header mt-20 lg:mt-24">
        <div class="bg-white fixed top-0 left-0 w-full" style="z-index: 500;">
            <div class="container mx-auto site-header-inner  px-5 py-4 md:py-4 flex justify-between items-center gap-10 ">
                <a href="<?= get_home_url() ?>" class="site-header-logo shrink-0">
                    <img src="<?= THEME_IMG . "signatigps.svg" ?>" alt="" class="h-14">
                </a>
                <?php get_template_part(THEME_CMP, "header-nav") ?>
                <?php get_template_part(THEME_CMP, "header-nav-mobile") ?>
				<div class="header-nav-mobile-overlay">
					
				</div>
                <button class="site-header-nav-mobile-open">
                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m11 16.745c0-.414.336-.75.75-.75h9.5c.414 0 .75.336.75.75s-.336.75-.75.75h-9.5c-.414 0-.75-.336-.75-.75zm-9-5c0-.414.336-.75.75-.75h18.5c.414 0 .75.336.75.75s-.336.75-.75.75h-18.5c-.414 0-.75-.336-.75-.75zm4-5c0-.414.336-.75.75-.75h14.5c.414 0 .75.336.75.75s-.336.75-.75.75h-14.5c-.414 0-.75-.336-.75-.75z" fill-rule="nonzero" />
                    </svg>
                </button>
            </div>
        </div>
    </header>