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

    <style>
        @font-face {
            font-family: Adlery;
            src: url(<?php bloginfo('template_url'); ?>/fonts/adlery.ttf);
        }

        .line {
            background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/line.jpg');
        }
    </style>

    <nav>
        <div class="navbar">
            <a href="/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/logo.jpg" class="brand"></a>
            <?php
                wp_nav_menu($arg = array(
                    'theme_location' => 'primary'   
                ));
            ?>
            <button type="button" class="menubtn" onclick="navbar()"><i class="fa-solid fa-bars"></i></button>
        </div>
        <?php
            wp_nav_menu($arg = array(
                'theme_location' => 'primary',
                'container_class' => 'responsive',
            ));
        ?>
    </nav>