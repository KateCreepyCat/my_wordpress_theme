<footer class="py-3 my-4">
	<?php wp_nav_menu( [
		'theme_location' => 'footer_menu',
		'menu'           => '',
		'container'      => 'ul',
		//some kind of bug, but when null is assigned, the default container (div) is displayed
		'container_id'   => null,
		'menu_class'     => 'nav justify-content-center border-bottom pb-3 mb-3',
		'menu_id'        => null
	] ); ?>

    <p class="text-center text-muted">© 2021 Company, Inc</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>