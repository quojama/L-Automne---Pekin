<?php add_filter('post_class', 'remove_hentry'); ?>

<?php get_header(); ?>

<div class="inner">
<?php get_sidebar(); ?>
<div class="maincontent">
<div id="wrapper" class="clearfix" ></div>
<div id="maincol" ></div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2 class="contentheader"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<h1 class="postcontents"><?php the_content('<p>Read more &raquo;</p>'); ?></h1>
<?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
<div id="postinfotext">Posted: <?php the_time("Y,n,j") ?><br/></div>
<?php endwhile; else: ?>
<p>No matching entries found.</p>
<?php endif; ?>
<!-- pager -->
<?php if ( $wp_query -> max_num_pages > 1 ) : ?>
<div class="navigation">
<div class="alignleft"><?php next_posts_link('←'); ?> <?php previous_posts_link('→'); ?></div>
<?php endif; ?>
<!-- /pager -->
</div>
</div><!-- innder -->



<?php get_footer(); ?>

