<?php if (have_rows('faq')) : ?>
<section class="faq max-w-[970px] px-5 mx-auto mb-24">
	<?php if ($faq_heading = get_field('faq_heading')) : ?>

	<h2 class="text-4xl md:text-6xl font-extrabold mb-[1.6rem] text-center">
		<?= $faq_heading; ?>
	</h2>

	<?php endif; ?>
	<?php $i = 0; ?>
	<?php foreach(get_field("faq") as $el) : ?>
	<div class="group/question">
		<button aria-expanded="false" aria-controls="" class="faq-question block w-full group/button">
			<h3 class="text-lg font-semibold flex  items-center justify-between pt-5 pb-5 border-l-gray border-opacity-60 border-solid border-b group-last-of-type/question:border-b-0">
				<?php echo $el["a"]; ?>
				<img src="<?= get_template_directory_uri(); ?>/dist/images/faq-arrow.png" alt="" class="relative w-5 transition-transform group-aria-expanded/button:rotate-180 group-hover/button:animate-bounce-rotated group-aria-expanded/button:group-hover/button:animate-bounce-rotated animation-delay-150">
			</h3>
		</button>
		<div id="answear-" class="overflow-hidden h-0">

			<p class="text-lg text-d-gray/75 pt-9 pb-[55px]">
				<?php echo $el["b"]; ?>
			</p>
		</div>
	</div>
	<?php endforeach; ?>
</section>

<?php elseif (have_rows('faq', 'option')) : ?>


<section class="faq max-w-[970px] px-5 mx-auto mb-24">
	<?php if ($faq_heading = get_field('faq_heading', 'options')) : ?>

	<h2 class="text-4xl md:text-6xl font-extrabold mb-[1.6rem] text-center">
		<?= $faq_heading; ?>
	</h2>

	<?php endif; ?>
	<?php $i = 0; ?>
	<?php foreach(get_field("faq", "option") as $el): ?>

	<div class="group/question">
		<button aria-expanded="false" aria-controls="" class="faq-question block w-full group/button">
			<h3 class="text-lg font-semibold flex  items-center justify-between pt-5 pb-5 border-l-gray border-opacity-60 border-solid border-b group-last-of-type/question:border-b-0">
				<?php echo $el["a"] ?>
				<img src="<?= get_template_directory_uri(); ?>/dist/images/faq-arrow.png" alt="" class="relative w-5 transition-transform group-aria-expanded/button:rotate-180 group-hover/button:animate-bounce-rotated group-aria-expanded/button:group-hover/button:animate-bounce-rotated animation-delay-150">
			</h3>
		</button>
		<div id="answear-" class="overflow-hidden h-0">

			<p class="text-lg text-d-gray/75 pt-9 pb-[55px]">
				<?php echo $el["b"]; ?>
			</p>
		</div>
	</div>

	<?php endforeach; ?>
</section>

<?php endif; ?>