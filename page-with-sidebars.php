<?php
/*
* Template Name: Page with Sidebar
*/
get_header(); ?>

	<main class="container page section with-sidebar">
		<div class="page-content">
			<?php get_template_part('template-parts/page', 'loop'); ?>
		</div>
		<aside class="sidebar">
			<?php get_sidebar(); ?>
		</aside>

	</main>

<?php get_footer(); ?>