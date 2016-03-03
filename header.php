<!doctype html>
<html>
<head>
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">

	<div class="row">

		<div class="columns small-12 small-text-center medium-2 large-3">

			<?php echo bloginfo( 'name' ); ?>

		</div>

		<div class="columns small-12 medium-10 large-9">

			<?php wp_nav_menu( 'header_menu' ); ?>

		</div>

	</div>

</header>