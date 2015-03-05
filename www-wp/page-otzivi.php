<?php 
/*
*Template Name: Для "ОТЗЫВЫ"
*/
get_header(); ?>
<div class="content">
<?php iinclude_page(44); ?>
	<?php // If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || '0' != get_comments_number() ) :
	comments_template();
	endif;
	?>
<div class="clear"></div>
</div>
<?php get_footer(); ?>