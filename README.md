
# Wordpress pohja kehittäjille
Tämä on valmis plug-and-play pohja verkkosivukehittäjille, jotka haluavat helposti liittää vanilla HTML & CSS verkkosivunsa Wordpressiin.
Tarkoituksena on että front-end kehittäjät kehittävät asiakasprojektina staattisen verkkosivun, joka olisi vailla sisällönhallintaa. Tämä dokumentti ohjeistaa, kuinka helposti ja nopeasti staattinen HTML & CSS & JS sivu voidaan sisällyttää Wordpressin järjestelmään tehokkaasti.

**Luonut:** Eeli Gren / [Fimes](https://fimes.fi), pääkehittäjä

## Asennus ja setup

Asennetaan uusin Wordpress versio [tästä](https://wordpress.org/latest.zip).
Siirretään se palvelimelle ja valmistellaan tietokanta [ohjeen mukaisesti](https://wordpress.org/support/article/how-to-install-wordpress/).

### 1. Lataa oheinen paketti
- Siirrä Wordpressin **wp-content** kansioon.

## Huomioi vanilla sivua tehdessäsi
- Käytä mahdollisimman paljon selkeitä **default classeja** (esim. `<section>`, `<main>`, `<header>`, ...).
- Luo globaalit tyyli typographille ja globaaleille elementeille, jotka ovat samoja joka sivulla (buttonit, tekstit, h1, ...)
- Aluksi resetoi default tyylit (* { ... })
- Nimeä elementtien classit ja id:t järjevästi (esim. home-section-main), erota sanat classissa **-** viivalla.








# wp-template
Template teema Wordpress integrointiin.
Valmis plug-and-play teema wordpressiin. Sisältää default sivun, sivupohjat, asetukset, funktiot, js, css, external linkkaukset
ohessa ohjeet ja linkit wpn dokumentaatioon

![image](https://user-images.githubusercontent.com/115319031/196048672-9a70ec69-34bb-4699-9038-f66c66d1c3cd.png)

kansiorakenne (kartta)

listattuna vaiheet mitä pitää tehdä!! (tutoriaali)
kommentoinnit template teeman filuihin (helppo vaihtaa vain juuri siihen projektiin mitä työstää funktiot ja classit yms)

listattuna asiat, jotka tulee ottaa huomioon vanilla sivua tehdessä:
- käytä mahd. paljon default classeja
- luo globaalit tyylit typographille ja tietyille kuten buttoneille
- aluksi resetoi tyylit
- nimeä classit huolellisesti esim. main-section-contact
