<?php
/* Footer Template */ 
?>

    <div class="icon-bar">
        <a href="https://www.facebook.com/Loistavaksi/"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/loistavaksi/"><i class="fa fa-instagram"></i></a>
    </div>



    <div class="cookie-banner" style="display: none">
        <p>Käytämme evästeitä käyttökokemuksesi parantamiseksi. Mikäli jatkat sivuston käyttöä, hyväksyt myös evästeiden käytön. Voit lukea lisää evästeistä <a href="/evastekaytanto.php">täältä</a>.</p>
        <button class="cookie-close">Hyväksy ja sulje</button>
        <script>
            if(localStorage.getItem('cookieSeen') != 'shown'){
                $(".cookie-banner").delay(500).fadeIn();
            }

            $('.cookie-close').click(function(e) {
                localStorage.setItem('cookieSeen','shown')
                $('.cookie-banner').fadeOut(); 
            });

        </script>
    </div>

    <div class="footer-bottom">


        <div class="links">
        <?php
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
        ?>

        
        </div>
        
        <p>Sivujen toteutus: <a href="https://fimes.fi">Eeli Gren &copy; 2022 • Fimes</a></p>
    </div>

    <?php wp_footer(); ?>
    </body>
</html>