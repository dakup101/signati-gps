<?php
/* Template Name: Rozwiązania */
get_header();
?>

<?php get_template_part(THEME_PRT, "breadcrumbs") ?>



<section class="container mx-auto px-5">
	<h2 class="text-4xl md:text-5xl font-extrabold mb-[1.6rem] text-center">
		Wybierz swój pojazd <span class="text-secondary">i poznaj funkcjonalności</span> Signati GPS dla
	</h2>
</section>


<?php

	$query_args = array(
	'post_type'      => 'vehicle',
	'posts_per_page' => -1
);

$cur_url = get_the_permalink();

$the_query = new WP_Query($query_args);

?>
<?php if ($the_query->have_posts()) : ?>

<section class="container mx-auto px-5">
	<div class="grid md:grid-cols-6 md:gap-5 md:gap-y-10 md:gap-x-10">
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
		<div>
				<a href="<?php echo get_field("url"); ?>"
		   class="block w-full swiper-slide col-span-6 md:col-span-1 relative py-3 text-dark transition-colors duration-300 before:absolute before:bottom-0 before:w-full before:h-1 before:rounded-full <?php echo $cur_url == get_field("url") ? "before:bg-primary" : "before:bg-l-gray before:opacity-30" ?> before:transition-colors before:duration-300 cursor-pointer hover:text-black hover:before:bg-primary">
			<?php echo get_the_title() ?>
		</a>
		</div>
		<?php endwhile; ?>
	</div>
</section>


<?php wp_reset_query();
endif; ?>

<section class="container mx-auto px-5 mt-20">
	<div class="grid grid-cols-12">
		<div class="col-span-12">
			<div class="grid grid-cols-12 gap-y-10 md:gap-x-10 items-center">
				<?php $entry = get_field("entry"); ?>
				<div class="col-span-12 md:col-span-5 md:col-start-2">
					<h2 class="text-3xl md:text-4xl font-extrabold mb-5">
						<?php echo $entry["title"] ?>
					</h2>
					<div class="mb-5">
						<?php echo $entry["content"]; ?>
					</div>
					<ul class="list-none text-base font-heading mb-6">
						<?php foreach($entry["iconed"] as $key => $el ) :  ?>
						<li class="flex items-center mb-3">
							<div class="relative w-9 h-9 shrink-0 rounded-lg bg-primary-l mr-4">
								<img src="<?= $el['icon']; ?>"
									 alt=""
									 class="absolute top-1/2 left-1/2 w-full max-w-[70%] max-h-[70%] -translate-x-1/2 -translate-y-1/2">
							</div>
							<?= $el["content"]; ?>
						</li>
						<?php endforeach; ?>
					</ul>
<!-- 					<a href="#func"
					   class="font-bold text-primary hover:text-secondary transition-all">
						Zobacz wszystkie funkcjonalności
					</a> -->
				</div>
				<figure class="col-span-10 md:col-span-5">
					<img src="<?php echo $entry["img"]?>"
						 alt="">
				</figure>
			</div>
		</div>
	</div>
</section>


<?php 
	$main = get_field("main"); foreach($main as $key => $el): 
						 if ($key % 2 ==0 || $key == 0) : 
?>

<section class="container px-5 mx-auto">
	<div class="container mx-auto px-5 mt-20 bg-l-gray bg-opacity-10 rounded-3xl py-10">
		<div class="grid grid-cols-12">
			<div class="col-span-12 md:col-span-12">
				<div class="grid grid-cols-12 gap-y-10 md:gap-x-10 items-center">
					<figure class="col-span-12 md:col-span-6 order-last md:order-first">
						<img src="<?php echo $el["img"] ?>"
							 alt="">
					</figure>
					<div class="hidden md:block"></div>
					<div class="col-span-10 md:col-span-4 order-first md:order-last">
						<?php echo wpautop($el["content"]) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php else: ?>

<section class="container px-5 mx-auto">
	<div class="px-5 mt-20 bg-l-gray bg-opacity-10 rounded-3xl py-10">
		<div class="grid grid-cols-12">
			<div class="col-span-12 md:col-span-12">
				<div class="grid grid-cols-12 gap-y-10 md:gap-x-10 items-center">
					<div class="col-span-12 md:col-span-4 md:col-start-2">
						<?php echo wpautop($el["content"]) ?>

					</div>
					<figure class="col-span-12 md:col-span-7">
						<img src="<?php echo $el["img"] ?>"
							 alt="">
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>
<?php endforeach; ?>

<?php if (!empty(get_field("text"))): $text = get_field("text"); $title = get_field("text_title"); ?>

<section class="container mx-auto px-5 mt-20">
	<h2 class="text-4xl md:text-5xl font-extrabold mb-[1.6rem] text-center">
		<?php echo $title ?>
	</h2>
	<?php foreach($text as $key => $el){
	echo wpautop($el["content"]);
	if ($key < count($text) - 1) echo ' <hr class="block opacity-20 my-5"/>';
} ?>

</section>

<?php endif; ?>
<div id="func">
	
</div>
<?php $icons = get_field("icons"); ?>
<section class="container mx-auto px-5 mt-20">
	<h2 class="text-4xl md:text-5xl font-extrabold mb-[1.6rem] text-center">
		<?php echo $icons["naglowek"]; ?>
	</h2>
	<p class="mt-5 block text-center max-w-4xl mx-auto">
		<?php echo wpautop($icons["content"]); ?>
	</p>
</section>


<?php if (!empty($icons["icons"])) : ?>


<section class="container mx-auto px-5 mt-20 mb-20">
	<div class="grid grid-cols-4 md:gap-x-10 md:gap-y-5">
		<?php foreach($icons["icons"] as $key => $el) :  ?>
		<div class="col-span-4 md:col-span-1 relative cards-item px-10 py-10 rounded-xl overflow-hidden">
			<figure class="w-16 h-16 mx-auto">
				<?php echo file_get_contents($el["icon"]) ?>
			</figure>
			<div class="relative mt-3">
				<div class="absolute w-full top-0 z-10"
					 w-full>
					<h3 class="text-lg font-bold text-center">
						<?php echo $el["title"] ?>
					</h3>
					<p
					   class="text-center mt-10 block w-fit mx-auto px-5 text-primary relative before:w-full before:absolute before:border-b before:border-primary before:left-0 before:-bottom-3">
						Czytaj więcej
					</p>
				</div>
			</div>
			<div class="text-center cards-hidden-content h-full relative z-20 bg-white">
				<?php echo $el["content"] ?>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</section>

<?php endif; ?>

<?php get_template_part(THEME_PRT, "faq"); ?>
<?php get_template_part(THEME_PRT, "contact-footer"); ?>
<?php get_footer(); ?>