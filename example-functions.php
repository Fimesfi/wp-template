<?php


// To get the footer
//<?php wp_footer();

// Function to get menu items, but only with <a> links

$primaryMenu = array(
    'theme_location'  => 'primary',
    'menu'            => '',
    'container'       => '',
    'container_class' => false,
    'container_id'    => '',
    'echo'            => false,
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'depth'           => 0,
    'walker'          => ''
);

echo strip_tags( wp_nav_menu( $primaryMenu ), '<a>' );
