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
	<nav>
		<span>Страницы:</span>
		<ul>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
		</ul>
	</nav>
</div>
<?php get_footer(); ?>