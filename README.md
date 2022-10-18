
# Wordpress pohja kehittäjille
Tämä on valmis plug-and-play pohja verkkosivukehittäjille, jotka haluavat helposti liittää vanilla HTML & CSS verkkosivunsa Wordpressiin.
Tarkoituksena on että front-end kehittäjät kehittävät asiakasprojektina staattisen verkkosivun, joka olisi vailla sisällönhallintaa. Tämä dokumentti ohjeistaa, kuinka helposti ja nopeasti staattinen HTML & CSS & JS sivu voidaan sisällyttää Wordpressin järjestelmään tehokkaasti.

**Luonut:** Eeli Gren / [Fimes](https://fimes.fi), pääkehittäjä

**Ominaisuudet:**
[X] - Hakukoneoptimoitu
[X] - Helppokäyttöinen
[X] - Tehokas ja nopea
[X] - Tuki lomakkeille
[] - Tuki custom CSS, JS, PHP... tiedostoille (PHPPUUTTUU!!)
[X] - Sisältö on muokattavissa
[] - Artikkelituki
[] - Hakutoiminto
[] - Kommentointituki
[] - WhooCommerence tuki

## Huomioitavaa vanilla sivua tehdessäsi
- Käytä mahdollisimman paljon selkeitä **default classeja** (esim. `<section>`, `<main>`, `<header>`, ...).
- Luo globaalit tyyli typographille ja globaaleille elementeille, jotka ovat samoja joka sivulla (buttonit, tekstit, h1, ...)
- Aluksi resetoi default tyylit (* { ... })
- Nimeä elementtien classit ja id:t järjevästi (esim. home-section-main), erota sanat classissa **-** viivalla.

## Asennus ja setup
Asennetaan uusin Wordpress versio [tästä](https://wordpress.org/latest.zip).
Siirretään se palvelimelle ja valmistellaan tietokanta [ohjeen mukaisesti](https://wordpress.org/support/article/how-to-install-wordpress/).

## Vaaditut pluginit
Custom teeman editointi:
- [Yoast CEO](https://fi.wordpress.org/plugins/wordpress-seo/)  (Hakukoneoptimointi)
- [ACF](https://fi.wordpress.org/plugins/advanced-custom-fields/) (Advanced custom fields)
- [iTheme-security]() (Turvallisuus)
- [Google Analytics](https://wordpress.org/plugins/google-analytics-for-wordpress/) (Analytiikka)
- [UpdraftPlus](https://fi.wordpress.org/plugins/updraftplus/) (Varmuuskopiointi)

**Valinnaiset pluginit**
- [WPForms](https://fi.wordpress.org/plugins/wpforms-lite/) (Lomakkeet)

### (Vaihe 0.) Suunnittelu
Kansiorakenteen valmistelu, esimerkki:
wp-content/themes/THEMENAME/
├─ css/
├─ fonts/
├─ js/
├─ footer.php
├─ functions.php
├─ page-changeme.php
├─ page.php
├─ screenshot.png
├─ style.css
├─ 404.php
├─ header.php


### (Vaihe 1.) Wordpress valmistelu
Kun Wordpress on asennettu:
1. Poista default pluginit, sivut ja artikkelit
2. Poista lisäksi turhat teemat
3. Varmista että asetuksissa ajan formaatit ovat OK
4. Vaihda `Asetukset > Media => Artikkelin nimi`
5. Vaihda `Asetukset > Osoiterakenne > Tiedostonjen sijainti => "Järjestä siirtämäni tiedostot..." pois päältä`
6. Asenna vaaditut pluginit (kts. Vaaditut pluginit)

### (Vaihe 2.) Teeman valmistelu
Kun vaihe 1. on suoritettu:
1. Lataa tämä pohja-arkisto
2. Pura ladattu .zip-paketti `wp-content/themes` kansioon ja nimeä se projektin mukaan
3. Muokkaa `style.css`, teeman perustiedot
4. Ota teema käyttöön Wordpressin teemoista
5. Luo sivut vanilla HTML & CSS sivun pohjalta (kts. Huomioitavaa vanilla sivua tehdessäsi)


# TO DO:
- functions.phpeehen tuki jquerylle ja font awesomelle sekä custom fonteille
Funktioohjeisiin lisättävä vielä:
- Ladatun attachementin haku paikkaan
- Sivun perustiedon kuten otsikon hakufunktio
- Sivun datan haku funktio the_post
- jne.