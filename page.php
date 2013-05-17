<?php add_filter('post_class', 'remove_hentry'); ?>

<?php get_header(); ?>

<div class="inner">
<?php get_sidebar(); ?>

<div class="maincontent"><?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <div <?php post_class('clear'); ?> id="post-<?php the_ID(); ?>">
        <div class="post_list_meta">
            
        </div>
        <div class="post_content">
            <?php the_content(); ?>
        </div>
    </div>



    <?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</div></div>
 </div>
<!--innder-->

<?php get_footer(); ?>

