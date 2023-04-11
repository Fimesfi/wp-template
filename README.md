
# Wordpress pohja kehittäjille
Tämä on valmis pohjateema, josta on helposti jalostettavissa täydellinen Wordpress sivusto. Teema sisältää tarpeelliset funktiot ja toiminnot, jotta sen kanssa voi operoida Wordpress sivustolla.

**Luonut:** Eeli Gren / [Fimes](https://fimes.fi), pääkehittäjä

-------------

# Säännöt vanilla HTML/CSS rakentamiseen:

1. Valmistele sivu niin että sen sivut pystyy rakentamaan mahdollisimman kokonaisvaltaisesti Wordpress Gutenberg- editorilla.
2. Käytä globaaleja tyylejä.
3. 

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
2. Poista kaikki teemat, paitsi `twentytwentythree`.
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
- Atomic Blocks - Gutenberg Blocks Collection (lisäpalikat)
- Contact Form 7 (yhteydenottolomakkeet)

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

