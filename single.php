<?php add_filter('post_class', 'remove_hentry'); ?>

<?php get_header(); ?>

<div class="inner">
<?php get_sidebar(); ?>

<div class="maincontent">

<div id="wrapper" class="clearfix" > 
<div id="maincol" >

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<h2 class="contentheader"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<h1 class="postcontents"><?php the_content(); ?></h1>


<?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
<div id="postinfotext">
Posted: <?php the_time("Y,n,j") ?><br/>

</div>

<!-- post navigation -->
<div class="navigation">
<?php if( get_previous_post() ): ?>
<div class="alignleft"><?php previous_post_link('%link', '←'); ?> <?php endif;
if( get_next_post() ): ?><?php next_post_link('%link', '→'); ?>
<?php endif; ?></div>
</div>
<!-- /post navigation -->

<?php endwhile; else: ?>
<p>No matching entries found.</p>
<?php endif; ?>


</div>
</div></div>
 </div>
<!--innder-->

<?php get_footer(); ?>
