<?php
    /* Main Template File */

    // Loads header.php
    get_header();
?>

<?php
    // Get page basic content
    if(have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
?>

<?php
    // Loads footer.php
    get_footer();
?>