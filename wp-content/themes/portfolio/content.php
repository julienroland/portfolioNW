<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php reverie_entry_meta(); ?>
	</header>
	<?php if(has_post_thumbnail()){
		the_post_thumbnail(); 
	}
	else{ ?>
	<div class="entry-content">
		<?php the_content('Continue reading...'); ?>
	</div>
	<?php } ?>
	<?php //include 'bits/tags.php' ?>
	<hr />
</article>