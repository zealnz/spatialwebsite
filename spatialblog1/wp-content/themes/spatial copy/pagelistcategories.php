
<?php get_header(); ?>


<div id="content" class="narrowcolumn">

	<div class="post" id="post-<?php the_ID(); ?>">

		<h2><?php the_title(); ?></h2>
		
		<div class="entry">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		
		</div>

		<?php query_posts('category_name='.get_the_title().'&post_status=publish,future');?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="entry"><?php the_content(); ?></div>
		<?php endwhile; else: endif; ?>

		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	</div>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


<div style="display:none;" >
< ?php
/*
Template Name: Page List Posts in Category with same name as page
*/
?>
</div>
