<footer class="bg-d-blue z-10">
	<div class="container mx-auto px-[15px] pb-[74px] pt-[230px]">
		<div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 gap-[30px]">
			<div class="@container/footer-col flex flex-col mb-5">
				<?php if ($footer_logo = get_field('footer_logo', 'options')) : ?>
				<a href="<?= get_home_url(); ?>"
				   class="inline-block mb-8">
					<img src="<?= $footer_logo; ?>"
						 alt=""
						 class="w-full max-w-[182px]">
				</a>
				<?php endif; ?>
				<?php if (have_rows('social_media', 'options')) : ?>
				<div class="flex items-center mb-4 text-secondary">
					<?php while (have_rows('social_media', 'options')) : the_row(); ?>
					<?php if ($link = get_sub_field('link')) : ?>
					<a href="<?= $link['url']; ?>"
					   class="footer-social text-secondary h-6 mr-5">
						<?php echo file_get_contents($link["icon"]); ?>
					</a>
					<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
				<?php get_template_part(THEME_CMP, 'footer-documents', ['menu' => 'footer-documents']); ?>
			</div>
			<div
				 class="copy col-span-full row-start-3 xs:row-start-3 md:row-start-1 md:col-span-1 md:col-start-2 flex flex-col justify-end text-sm text-secondary font-light text-center">
				<p>&copy; Copyright SignatiGPS. All Rights Reserved</p>
				<div class="everywhere flex justify-center mt-10">
					Projekt i realizacja
					<a href="https://everywhere.pl/"
					   target="_blank"
					   rel="nofollow"
					   class="block">
						Everywhere Polska
					</a>
				</div>
			</div>
			<div class="flex mb-5">
				<?php if ($contact_info = get_field('contact_info', 'options')) : ?>
				<div class="w-1/2 text-white mr-[30px]">
					<h3 class="text-secondary font-bold mb-6 text-2xl">
						<?= $contact_info['heading']; ?>
					</h3>
					<address class=" not-italic mb-7 text-base">
						<?= $contact_info['address']; ?>
					</address>
					<p><a href="tel:<?= trim($contact_info['tel']) ?>"
						  class="hover:text-primary transition-colors underline"><?= $contact_info['tel']; ?></a></p>
					<p><a href="mailto<?= $contact_info['email']; ?>"
						  class="hover:text-primary transition-colors underline"><?= $contact_info['email']; ?></a></p>
				</div>
				<?php endif; ?>
				<div class="w-1/2 text-white">
					<h3 class="text-secondary font-bold mb-6 text-2xl">
						Menu
					</h3>
					<?php get_template_part(THEME_CMP, 'menu-footer', ['menu' => 'footer-menu']); ?>
				</div>
			</div>
		</div>

	</div>
	<?php get_template_part(THEME_CMP, "steps") ?>

</footer>

<?php wp_footer(); ?>

</body>

</html>