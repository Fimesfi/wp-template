
# Wordpress pohja kehittäjille
Tämä on valmis pohjateema, josta on helposti jalostettavissa täydellinen Wordpress sivusto. Teema sisältää tarpeelliset funktiot ja toiminnot, jotta sen kanssa voi operoida Wordpress sivustolla.

**Luonut:** Eeli Gren / [Fimes](https://fimes.fi), pääkehittäjä

#MUISTA VERSIOHALLINTA - GITHUB
Ladattuasi tämän pohjateeman, luo siitä heti Githubiin uusi repo ja muista pitää se ajantasalla itse sivuston käyttämän teeman kanssa.

-------------

# Säännöt vanilla HTML/CSS rakentamiseen:

1. Valmistele sivu niin että sen sivut pystyy rakentamaan mahdollisimman kokonaisvaltaisesti Wordpress Gutenberg- editorilla.
2. Käytä globaaleja tyylejä.

# Asennus ja setup

### (Vaihe 1.) Asennus

1. Lataa Wordpress haluamaasi kehitysympäristöön (localhost): [Lataa](https://wordpress.org/latest.zip).
2. Lataa tämän teemapohjan uusin julkaisu.
3. Siirrä teema Wordpressin `/themes` kansioon.
4. Asenna Wordpress oppikirjan mukaisesti (tietokanta ja asetukset).

### (Vaihe 2.) Teeman asetukset

1. Muokkaa `style.css` tiedostoon teeman asetukset.

### (Vaihe 3.) Conffaus

1. Poista kaikki pluginit.
2. Poista kaikki teemat, paitsi `twentytwentythree` tai viimeisin julkaisu.
3. Poista kaikki sivut ja artikkelit.
4. Luo kaikki sivut Wordpress hallinnassa, joita sivu tarvitsee ensisijaisesti.
5. Luo valikot (jos teema käyttää).
6. Määritä `Etusivu` ja `Artikkelit` sivut Wordpress asetuksista sivuille.
7. Lisää seuraavat asetukset `wp-config.php`
    ```
    define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
    define( 'WP_DEBUG', true );
    ```

### (Vaihe 4.) Asennettavat lisäosat

- Yoast SEO (hakukoneoptimointi)
- Cookiebot (evästeet)
- Jetpack (analytiikka ja optimointi)
- Safe SVG (tuki .svg tiedostoille)
- Under Construction (työn alla sivu)
- Salasanasuojaus
- Genesis Blocks (lisäpalikat)
- Contact Form 7 (yhteydenottolomakkeet)
- LiteSpeed Cache

`Mikäli lisäosat vaativat kirjautumisen, luodaan tunnukset esim, noreply@asiakas.fi`

# Sivun siirto localhost -> julkaisukohde

1. Suorita Wordpress asennus kohdewebhotelliin.
    - Kieli -> Suomi
    - Tunnuksien luonti
    - Tietokannan asetukset
2. Asenna All-in-one WP Migration plugin localhostille
    - Vie localhostilla oleva sivusto "varmuuskopiona" pluginin avulla tiedostoksi
3. Asenna All-in-one WP Migration plugin kohteelle
    - Asenna Automatic Domain Changer plugin ennen varmuuskopion tuomista
    - Tuo kyseinen varmuuskopio migraatio pluginin avulla

Tämä tuo täysin identtise sivuston localhost -> webhotelli, niin että asetukset ja muutokset siirtyvät.

4. Ennen julkaisua poista vaihe 3. kohta 7. conffaukset

## Funktiot

Sivun osoitteen haku:
```
<?php echo home_url(); ?>
```

Paikallisen tiedoston haku:
```
<?php get_localfile('/assets/<tiedosto>'); ?>
```

Sivun kategorian haku:
```
<?php the_category(', '); ?>
```

Sivun päivämäärän haku:
```
<?php the_date(); ?>
```

Sivun thumbnailin haku:
```
<?php get_thumbnail_url(); ?>
```

Kuvan haku Wordpress ladatuista kuvista:
```
<?php get_mediafile('<tiedosto>'); ?>
```

Sivun otsikon haku:
```
<?php the_title(); ?>
```

Shortcoden ajaminen:
```
<?php
    echo do_shortcode('[contact-form-7 id="52" title="Yhteydenottolomake"]');
?>
```


- Tyylit menisi myös gutenbergiin
- Miten kun sivu pitäisi localilta -> julkaisuun (migraatio, tietokannat)
- style.css ja globals.css tyyleihin Wordpress tärkeimmät tyylisäännöt

