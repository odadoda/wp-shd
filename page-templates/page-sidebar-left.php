<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>

<h1>pewpew</h1>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap sidebar-left">
	<main class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php comments_template(); ?>
		<?php endwhile;?>
	 </main>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
