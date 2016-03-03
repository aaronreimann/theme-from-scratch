<?php
get_header();
?>
<div class="row">
           <div class="columns small-8">
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		echo '<h1>';
			the_title();
		echo '</h1>';

		the_content();
	}
}
?>
	</div><!-- closes small-8 -->
</div>

get_footer();