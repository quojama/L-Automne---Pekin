<?php

add_theme_support( 'automatic-feed-links' );

if ( ! isset( $content_width ) ) $content_width = 680;

// stop autopagerize
function remove_hentry( $classes ) {

    $classes = array_diff($classes, array('hentry'));
    return $classes;
}

// sidebar widget
register_sidebar( array(
'name' => 'side-bar widget',
'id' => 'sidebar-1',
'description' => 'sidebar widget eria',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
) );

// enable custom menu
add_theme_support( 'menus' );
// CM's place.
register_nav_menu( 'sidebar-navi', 'Sidebar Navigation' );
register_nav_menu( 'sidebar-navi2', 'Sidebar Navigation2' );
register_nav_menu( 'sidebar-navi3', 'Sidebar Navigation3' );
register_nav_menu( 'sidebar-navi4', 'Sidebar Navigation4' );
?>