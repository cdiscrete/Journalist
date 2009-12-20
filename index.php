<?php get_header(); ?>

<div id="content" class="group">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post hentry<?php if (function_exists('sticky_class')) { sticky_class(); } ?>">
<h2 id="post-<?php the_ID(); ?>" class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<p class="comments"><a href="<?php comments_link(); ?>"><?php comments_number(__('without comments', 'journalist'),__('with one comment', 'journalist'),__('with % comments', 'journalist') );?></a></p>

<div class="main entry-content group">
	<?php the_content(__('Read the rest of this entry &raquo;', 'journalist'));?>
</div>

<div class="meta group">
<div class="signature">
    <p><?php printf(__('Written by %s', 'journalist'), the_author('', false));?> <span class="edit"><?php edit_post_link(__('Edit', 'journalist') );?></span></p>
    <p><?php the_time(__('F jS, Y', 'journalist'));?> <?php _e("at", 'journalist');?> <?php the_time(__('g:i a', 'journalist'));?></p>
</div>	
<div class="tags">
    <p><?php printf(__('Posted in %s', 'journalist'), get_the_category_list(','));?></p>
       <?php the_tags( '<p>' . __('Tags:', 'journalist') . ' ', ', ', '</p>'); ?>
</div>
</div>
</div><!-- END .hentry -->

<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p><?php _e('Apologies, but we were unable to find what you were looking for. Perhaps searching will help.', 'journalist'); ?></p>
</div>
<?php endif; ?>

<div class="navigation group">
	<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'journalist') );?></div>
	<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'journalist') );?></div>
</div>

</div> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>