<footer class="py-3 my-4">
	<?php wp_nav_menu( [
		'theme_location'  => 'footer_menu',
		'menu'            => '',
		'container'       => 'ul', //some kind of bug, but when null is assigned, the default container (div) is displayed
		'container_id'    => null,
		'menu_class'      => 'nav nav-pills',
		'menu_id'         => null
	] ); ?>
<!--    <ul class="nav justify-content-center border-bottom pb-3 mb-3">-->
<!--        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>-->
<!--        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>-->
<!--        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>-->
<!--        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>-->
<!--        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>-->
<!--    </ul>-->
    <p class="text-center text-muted">© 2021 Company, Inc</p>
</footer>
<?php wp_footer();?>
</body>
</html>