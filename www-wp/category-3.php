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
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?></small>
				<?php the_excerpt('Читать далее'); ?>
			</section>
		</article>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>