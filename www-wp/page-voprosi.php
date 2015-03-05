<?php 
/*
*Template Name: Для "ВОПРОСЫ"
*/
get_header(); ?>
<div class="content">
<?php iinclude_page(42); ?>
	<?php // If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || '0' != get_comments_number() ) :
	comments_template();
	endif;
	?>
<div class="clear"></div>
</div>
<?php get_footer(); ?>