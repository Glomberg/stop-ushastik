<?php get_header(); ?>
<div class="content">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<figure><?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
					}  ?>
			</figure>
			<section>
				<h2><?php the_title(); ?></h2>
				<?php the_category(''); ?>
				<?php the_content('Читать далее'); ?>
			</section>
		</article>
	<?php endwhile; ?>
	<?php if (function_exists('bazz_pagination')) bazz_pagination();  ?>
	<script>
		$("#menu-1").addClass("active");
	</script>
</div>
<?php get_footer(); ?>