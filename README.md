# Teorijas atbildes:

## Kas ir API?
API ir saskarne, kas ļauj dažādām programmatūrām savstarpēji sazināties un apmainīties ar datiem. API definē metodes un datu formātus, kurus viena programma var izmantot, lai pieprasītu pakalpojumus no citas programmas.

## Kā deklarēt mainīgo PHP valodā?
PHP valodā mainīgos deklarē, izmantojot `$` simbolu, kam seko mainīgā nosaukums. Piemēram:
```php
$mainigais = "Hallo zere";
$skaitlis = 69;
```

## Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
Laravel izmanto MVC (Model-View-Controller) arhitektūru. MVC ir programmatūras dizaina paraugs, kas sadala lietojumprogrammu trīs galvenajās daļās.

### Kā MVC strādā:
- Lietotājs nosūta pieprasījumu uz lietojumprogrammu.
- Kontrolieris saņem šo pieprasījumu un izsauc nepieciešamo modeli, lai iegūtu vai manipulētu ar datiem.
- Modelis pieprasa vai atjaunina datus datubāzē.
- Kontrolieris saņem datus no modeļa un nodod tos skatam.
- Skats renderē datus un atgriež HTML vai citu atbilstošu formātu lietotājam.

## Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM (Object-Relational Mapping) ir tehnika, kas ļauj programmētājiem manipulēt ar datu bāzēm, izmantojot objektus programmēšanas valodā, nevis tieši rakstot SQL vaicājumus. Laravel izmanto Eloquent ORM.

Eloquent ORM piedāvā elegantu un viegli lietojamu saskarni, lai strādātu ar datu bāzēm, padarot datu manipulāciju vienkāršāku un efektīvāku.

## Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:

```php
return response()->json(User::where('rating', '>', 4))->get();
```