<?php
/* Header Template */
?>

<!DOCTYPE html>
<html lang="fi">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <script src="https://kit.fontawesome.com/c09bdf08a0.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>

    <?php
        wp_nav_menu($arg = array(
            'theme_location' => 'primary',
            'container_class' => 'responsive',
        ));
    ?>