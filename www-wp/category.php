<?php get_header(); ?>
<div class="content">
<!-- Цикл вывода постов -->
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<figure><?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
					}  ?>
			</figure>
			<section>
				<h2><?php the_title(); ?></h2>
				<small><?php the_time('F jS, Y') ?></small>
				<?php the_content('Читать далее'); ?>
			</section>
		</article>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>