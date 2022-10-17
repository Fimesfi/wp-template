<?php

    /* Template Name: Etusivu */
    get_header();
?>

<div class="hero" id="sunset" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/hero.jpg')">
    <div class="content">
        <h1><?php the_field('otsikko'); ?></h1>
        <div class="hr white"></div>
        <p><?php the_field('otsikontagline'); ?></p>  
    </div>
</div>

<div class="welcome">
    <h2 style="font-size: 32px;"><?php the_field('ihanaa_kun_loysit_otsikko'); ?></h2>
</div>

<div class="info-container">
    <div class="content">
    <?php the_field('ensimmainen_sisalto'); ?>
    </div>
</div>

<div class="container">
    <div class="content">
    <?php the_field('toinen_sisalto'); ?>
    </div>
</div>

<div class="imgholder">
    <img src="<?php 
    echo get_field('maljakkokuva')['sizes']['large'];       
    ?>">

</div>

<div class="feedback">
    <h1>palautetta asiakkailta</h1>
    <?php the_field('palautetta_asiakkailta'); ?>
</div>

<div class="hr line"></div>

<div class="myservices">
    <h3>Kiinnostuitko?</h3>
    <div class="contact-container">
        <a href="/yhteystiedot">Ota yhteyttä!</a>
    </div>
    <p>Tutustu palveluihini <a href="/palvelut">tästä</a>.</p>
</div>


<?php
    get_footer();
?>