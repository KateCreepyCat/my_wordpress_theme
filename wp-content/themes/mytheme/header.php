<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="<?php bloginfo( 'url' ); ?>"
       class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4"><?php bloginfo( 'name' ); ?></span>
    </a>

	<?php wp_nav_menu( [
		'theme_location' => 'header_menu',
		'menu'           => '',
		'container'      => 'ul',
		//some kind of bug, but when null is assigned, the default container (div) is displayed
		'container_id'   => null,
		'menu_class'     => 'nav nav-pills',
		'menu_id'        => null
	] ); ?>

	<?php wp_head(); ?>
</header>
