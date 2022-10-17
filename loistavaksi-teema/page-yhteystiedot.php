<?php

    /* Template Name: Yhteystiedot */

    get_header();

?>

<div class="hero smaller" id="yhteystiedot" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/hero-tietoa.jpg');">
    <div class="content">
        <h1>yhteystiedot</h1>
        <div class="hr white"></div>
    </div>
</div>

<div class="contact">
    <div class="content">
        <div class="details">
            <ul>
                <li style="margin-bottom: 1rem;"><span class="bold">Loistavaksi</span></li>
                <li><span class="icon"><i class="fa-solid fa-user"></i></span>Sanna Leppänen</li>
                <li><span class="icon"><i class="fa-solid fa-phone"></i></span>0401692575</li>
                <li><span class="icon"><i class="fa-solid fa-location-crosshairs"></i></span>Väinö Valveen katu 3</li>
                <li><span class="icon"><i class="fa-solid fa-tree-city"></i></span>53900 Lappeenranta</li>
                <li><span class="icon"><i class="fa-solid fa-building"></i></span>Y-Tunnus: 3248251-8</li>
                <li><span class="icon"><i class="fa-solid fa-globe"></i></span>loistavaksi.fi</li>
            </ul>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.702647239346!2d28.17654571614278!3d61.05908638229713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469095a2642075c9%3A0x881d7cbce4cf80b!2sV%C3%A4in%C3%B6%20Valveen%20katu%203%2C%2053900%20Lappeenranta!5e0!3m2!1sfi!2sfi!4v1652360769656!5m2!1sfi!2sfi" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="normal"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.702647239346!2d28.17654571614278!3d61.05908638229713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469095a2642075c9%3A0x881d7cbce4cf80b!2sV%C3%A4in%C3%B6%20Valveen%20katu%203%2C%2053900%20Lappeenranta!5e0!3m2!1sfi!2sfi!4v1652360769656!5m2!1sfi!2sfi" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="responsive"></iframe>
        </div>

        <form method="POST">
            <h3>Ota yhteyttä</h3>
            <p style="text-align: center;">Avoinna ajanvaraukselle.</p>
            <?php echo $infotext; ?>
            <label for="name">Nimi<span>*</span></label>
            <div class="row">
                <input type="text" placeholder="Nimi..." id="name" name="name">
            </div>
            <label for="name">Sähköposti<span>*</span></label>
            <div class="row">
                <input type="text" placeholder="Sähköposti..." name="email">
            </div>
            <label for="name">Puhelinnumero<span>*</span></label>
            <div class="row">
                <input type="text" placeholder="Puhelinnumero..." name="phone">
            </div>
            <label for="name">Viesti<span>*</span></label>
            <div class="row">
                <textarea type="text" placeholder="Viesti..." name="msg"></textarea>
            </div>
            <div class="row"><button type="submit" name="send">Lähetä</button></div>
            
        </form>
    </div>      
</div>
<div id="ajanvaraus"></div>
<br><br><br><br><br><br>
        <h1 style="text-align: center; font-family: Adlery;
    font-weight: 400; font-size: 32px;">Ajanvaraus</h1><br>
            <script type="text/javascript" language="javascript">(function(d,s,i,c,j,a){a=d.getElementsByTagName(s)[0];if(d.getElementById(i))return;j=d.createElement(s);j.id=i;j.async=1;j.setAttribute("data-c",c);j.src="https://static.vello.fi/js/wizard/vwiz.js";a.parentNode.insertBefore(j,a);}(document,"script","vello-wizard-sdk","loistavaksi"));</script>
<div id="vello-wizard"></div>

        <div class="hr line"></div>

        <div class="myservices">
            <p>Tutustu palveluihini <a href="/palvelut">tästä</a>.</p>
        </div>

<?php
    get_footer();
?>