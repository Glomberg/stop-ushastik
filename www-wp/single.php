<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<figure><img src="images/uho.jpg" alt=""/></figure>
			<section>
				<h2><?php the_title(); ?></h2>
				<?php the_category(''); ?>
				<?php the_content(); ?>
			</section>
		</article>
<?php endwhile; ?>
	<?php // If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || '0' != get_comments_number() ) :
	comments_template();
	endif;
	?>
<?php get_footer(); ?>