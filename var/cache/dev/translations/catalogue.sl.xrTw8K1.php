<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Vrednost bi morala biti nepravilna (false).',
    'This value should be true.' => 'Vrednost bi morala biti pravilna (true).',
    'This value should be of type {{ type }}.' => 'Vrednost mora biti naslednjega tipa {{ type }}.',
    'This value should be blank.' => 'Vrednost mora biti prazna.',
    'The value you selected is not a valid choice.' => 'Vrednost, ki ste jo izbrali, ni veljavna možnost.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Izbrati morate vsaj {{ limit }} možnost.|Izbrati morate vsaj {{ limit }} možnosti.|Izbrati morate vsaj {{ limit }} možnosti.|Izbrati morate vsaj {{ limit }} možnosti.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Izberete lahko največ {{ limit }} možnost.|Izberete lahko največ {{ limit }} možnosti.|Izberete lahko največ {{ limit }} možnosti.|Izberete lahko največ {{ limit }} možnosti.',
    'One or more of the given values is invalid.' => 'Ena ali več podanih vrednosti ni veljavnih.',
    'This field was not expected.' => 'To polje ni bilo pričakovati.',
    'This field is missing.' => 'To polje manjka.',
    'This value is not a valid date.' => 'Ta vrednost ni veljaven datum.',
    'This value is not a valid datetime.' => 'Ta vrednost ni veljaven datum in čas.',
    'This value is not a valid email address.' => 'Ta vrednost ni veljaven e-poštni naslov.',
    'The file could not be found.' => 'Datoteke ni mogoče najti.',
    'The file is not readable.' => 'Datoteke ni mogoče prebrati.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika ({{ size }} {{ suffix }}). Največja dovoljena velikost je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime tip datoteke je neveljaven ({{ type }}). Dovoljeni mime tipi so {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta vrednost bi morala biti {{ limit }} ali manj.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta vrednost je predolga. Morala bi imeti {{ limit }} znak ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znaka ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znake ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znakov ali manj.',
    'This value should be {{ limit }} or more.' => 'Ta vrednost bi morala biti {{ limit }} ali več.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta vrednost je prekratka. Morala bi imeti {{ limit }} znak ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znaka ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znake ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znakov ali več.',
    'This value should not be blank.' => 'Ta vrednost ne bi smela biti prazna.',
    'This value should not be null.' => 'Ta vrednost ne bi smela biti nedefinirana (null).',
    'This value should be null.' => 'Ta vrednost bi morala biti nedefinirana (null).',
    'This value is not valid.' => 'Ta vrednost ni veljavna.',
    'This value is not a valid time.' => 'Ta vrednost ni veljaven čas.',
    'This value is not a valid URL.' => 'Ta vrednost ni veljaven URL.',
    'The two values should be equal.' => 'Ti dve vrednosti bi morali biti enaki.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika. Največja dovoljena velikost je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Datoteka je prevelika.',
    'The file could not be uploaded.' => 'Datoteke ni bilo mogoče naložiti.',
    'This value should be a valid number.' => 'Ta vrednost bi morala biti veljavna številka.',
    'This file is not a valid image.' => 'Ta datoteka ni veljavna slika.',
    'This is not a valid IP address.' => 'To ni veljaven IP naslov.',
    'This value is not a valid language.' => 'Ta vrednost ni veljaven jezik.',
    'This value is not a valid locale.' => 'Ta vrednost ni veljavna lokalnost.',
    'This value is not a valid country.' => 'Ta vrednost ni veljavna država.',
    'This value is already used.' => 'Ta vrednost je že uporabljena.',
    'The size of the image could not be detected.' => 'Velikosti slike ni bilo mogoče zaznati.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je preširoka ({{ width }}px). Največja dovoljena širina je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premajhna ({{ width }}px). Najmanjša predvidena širina je {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Višina slike je prevelika ({{ height }}px). Največja dovoljena višina je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Višina slike je premajhna ({{ height }}px). Najmanjša predvidena višina je {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ta vrednost bi morala biti trenutno uporabnikovo geslo.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta vrednost bi morala imeti točno {{ limit }} znak.|Ta vrednost bi morala imeti točno {{ limit }} znaka.|Ta vrednost bi morala imeti točno {{ limit }} znake.|Ta vrednost bi morala imeti točno {{ limit }} znakov.',
    'The file was only partially uploaded.' => 'Datoteka je bila le delno naložena.',
    'No file was uploaded.' => 'Nobena datoteka ni bila naložena.',
    'No temporary folder was configured in php.ini.' => 'Začasna mapa ni nastavljena v php.ini.',
    'Cannot write temporary file to disk.' => 'Začasne datoteke ni bilo mogoče zapisati na disk.',
    'A PHP extension caused the upload to fail.' => 'PHP razširitev je vzrok, da nalaganje ni uspelo.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ta zbirka bi morala vsebovati {{ limit }} element ali več.|Ta zbirka bi morala vsebovati {{ limit }} elementa ali več.|Ta zbirka bi morala vsebovati {{ limit }} elemente ali več.|Ta zbirka bi morala vsebovati {{ limit }} elementov ali več.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ta zbirka bi morala vsebovati {{ limit }} element ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elementa ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elemente ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elementov ali manj.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ta zbirka bi morala vsebovati točno {{ limit }} element.|Ta zbirka bi morala vsebovati točno {{ limit }} elementa.|Ta zbirka bi morala vsebovati točno {{ limit }} elemente.|Ta zbirka bi morala vsebovati točno {{ limit }} elementov.',
    'Invalid card number.' => 'Neveljavna številka kartice.',
    'Unsupported card type or invalid card number.' => 'Nepodprti tip kartice ali neveljavna številka kartice.',
    'This is not a valid International Bank Account Number (IBAN).' => 'To ni veljavna mednarodna številka bančnega računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Neveljavna vrednost po ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Neveljavna vrednost po ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Neveljavna vrednost po ISBN-10 ali po ISBN-13.',
    'This value is not a valid ISSN.' => 'Neveljavna vrednost ISSN.',
    'This value is not a valid currency.' => 'Ta vrednost ni veljavna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti enaka {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta vrednost bi morala biti večja od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti večja ali enaka {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta vrednost bi morala biti identična {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta vrednost bi morala biti manjša od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti manjša ali enaka {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta vrednost ne bi smela biti enaka {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta vrednost ne bi smela biti identična {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Razmerje slike je preveliko ({{ ratio }}). Največje dovoljeno razmerje je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Razmerje slike je premajhno ({{ ratio }}). Najmanjše pričakovano razmerje je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Slika je kvadrat ({{ width }}x{{ height }}px). Kvadratne slike niso dovoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Slika je ležeče usmerjena ({{ width }}x{{ height }}px). Ležeče usmerjene slike niso dovoljene.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Slika je pokončno usmerjena ({{ width }}x{{ height }}px). Pokončno usmerjene slike niso dovoljene.',
    'An empty file is not allowed.' => 'Prazna datoteka ni dovoljena.',
    'The host could not be resolved.' => 'Gostitelja ni bilo mogoče prepoznati.',
    'This value does not match the expected {{ charset }} charset.' => 'Ta vrednost se ne ujema s pričakovanim naborom znakov {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'To ni veljavna identifikacijska koda podjetja (BIC).',
    'Error' => 'Napaka',
    'This form should not contain extra fields.' => 'Ta obrazec ne sme vsebovati dodatnih polj.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Naložena datoteka je prevelika. Prosimo, poizkusite naložiti manjšo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrednost je napačna. Prosimo, ponovno pošljite obrazec.',
    'fos_user.username.already_used' => 'Uporabniško ime že obstaja.',
    'fos_user.username.blank' => 'Prosimo, vnesite uporabniško ime.',
    'fos_user.username.short' => 'Uporabniško ime je prekratko.',
    'fos_user.username.long' => 'Uporabniško ime je predolgo.',
    'fos_user.email.already_used' => 'Email že obstaja.',
    'fos_user.email.blank' => 'Prosimo, vnesite email.',
    'fos_user.email.short' => 'Email je prekratek.',
    'fos_user.email.long' => 'Email je predolg.',
    'fos_user.email.invalid' => 'Email je napačen.',
    'fos_user.password.blank' => 'Prosimo, vnesite geslo.',
    'fos_user.password.short' => 'Geslo je prekratko.',
    'fos_user.password.mismatch' => 'Vpisani gesli se ne ujemata.',
    'fos_user.new_password.blank' => 'Prosimo, vnesite novo geslo.',
    'fos_user.new_password.short' => 'Novo geslo je prekratko.',
    'fos_user.current_password.invalid' => 'Geslo je napačno.',
    'fos_user.group.blank' => 'Prosimo, vnesite ime.',
    'fos_user.group.short' => 'Ime je prekratko.',
    'fos_user.group.long' => 'Ime je predolgo.',
    'fos_group.name.already_used' => 'Ime je že v uporabi.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Prišlo je do izjeme pri preverjanju avtentikacije.',
    'Authentication credentials could not be found.' => 'Poverilnic za avtentikacijo ni bilo mogoče najti.',
    'Authentication request could not be processed due to a system problem.' => 'Zahteve za avtentikacijo ni bilo mogoče izvesti zaradi sistemske težave.',
    'Invalid credentials.' => 'Neveljavne pravice.',
    'Cookie has already been used by someone else.' => 'Piškotek je uporabil že nekdo drug.',
    'Not privileged to request the resource.' => 'Nimate privilegijev za zahtevani vir.',
    'Invalid CSRF token.' => 'Neveljaven CSRF žeton.',
    'Digest nonce has expired.' => 'Začasni žeton je potekel.',
    'No authentication provider found to support the authentication token.' => 'Ponudnika avtentikacije za podporo prijavnega žetona ni bilo mogoče najti.',
    'No session available, it either timed out or cookies are not enabled.' => 'Seja ni na voljo, ali je potekla ali pa piškotki niso omogočeni.',
    'No token could be found.' => 'Žetona ni bilo mogoče najti.',
    'Username could not be found.' => 'Uporabniškega imena ni bilo mogoče najti.',
    'Account has expired.' => 'Račun je potekel.',
    'Credentials have expired.' => 'Poverilnice so potekle.',
    'Account is disabled.' => 'Račun je onemogočen.',
    'Account is locked.' => 'Račun je zaklenjen.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Shrani',
    'group.show.name' => 'Ime skupine',
    'group.new.submit' => 'Shrani',
    'group.flash.updated' => 'Skupina je bila uspešno shranjena.',
    'group.flash.created' => 'Skupina je bila uspešno ustvarjena.',
    'group.flash.deleted' => 'Skupina je bila uspešno izbrisana.',
    'security.login.username' => 'Uporabniško ime',
    'security.login.password' => 'Geslo',
    'security.login.remember_me' => 'Zapomni si me',
    'security.login.submit' => 'Prijava',
    'profile.show.username' => 'Uporabniško ime',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Shrani',
    'profile.flash.updated' => 'Profil je bil uspešno shranjen.',
    'change_password.submit' => 'Spremeni geslo',
    'change_password.flash.success' => 'Geslo je bilo uspešno spremenjeno.',
    'registration.check_email' => 'Na %email% smo vam poslali sporočilo s kodo za aktivacijo. Račun aktivirate s klikom na to povezavo.',
    'registration.confirmed' => 'Pozdravljeni %username%, vaš račun je sedaj aktiviran.',
    'registration.back' => 'Nazaj na prvotno stran.',
    'registration.submit' => 'Registracija',
    'registration.flash.user_created' => 'Uporabnik je bil uspešno ustvarjen.',
    'registration.email.subject' => 'Dobrodošli %username%!',
    'registration.email.message' => 'Pozdravljeni %username%!

Za aktivacijo računa prosimo, obiščite %confirmationUrl%

Lep pozdrav,
ekipa.
',
    'resetting.request.username' => 'Uporabniško ime',
    'resetting.request.submit' => 'Spremeni geslo',
    'resetting.reset.submit' => 'Spremeni geslo',
    'resetting.flash.success' => 'Geslo je bilo uspešno spremenjeno.',
    'resetting.email.subject' => 'Sprememba gesla',
    'resetting.email.message' => 'Pozdravljeni %username%!

Za spremembo gesla prosimo, obiščite %confirmationUrl%

Lep pozdrav,
ekipa.
',
    'layout.logout' => 'Odjava',
    'layout.login' => 'Prijava',
    'layout.register' => 'Registracija',
    'layout.logged_in_as' => 'Prijavljen kot %username%',
    'form.group_name' => 'Ime skupine',
    'form.username' => 'Uporabniško ime',
    'form.email' => 'Email',
    'form.current_password' => 'Trenutno geslo',
    'form.password' => 'Geslo',
    'form.password_confirmation' => 'Preverjanje gesla',
    'form.new_password' => 'Novo geslo',
    'form.new_password_confirmation' => 'Preverjanje gesla',
  ),
));

$catalogueIt = new MessageCatalogue('it', array (
  'validators' => 
  array (
    'This value should be false.' => 'Questo valore dovrebbe essere falso.',
    'This value should be true.' => 'Questo valore dovrebbe essere vero.',
    'This value should be of type {{ type }}.' => 'Questo valore dovrebbe essere di tipo {{ type }}.',
    'This value should be blank.' => 'Questo valore dovrebbe essere vuoto.',
    'The value you selected is not a valid choice.' => 'Questo valore dovrebbe essere una delle opzioni disponibili.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Si dovrebbe selezionare almeno {{ limit }} opzione.|Si dovrebbero selezionare almeno {{ limit }} opzioni.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Si dovrebbe selezionare al massimo {{ limit }} opzione.|Si dovrebbero selezionare al massimo {{ limit }} opzioni.',
    'One or more of the given values is invalid.' => 'Uno o più valori inseriti non sono validi.',
    'This field was not expected.' => 'Questo campo non è stato previsto.',
    'This field is missing.' => 'Questo campo è mancante.',
    'This value is not a valid date.' => 'Questo valore non è una data valida.',
    'This value is not a valid datetime.' => 'Questo valore non è una data e ora valida.',
    'This value is not a valid email address.' => 'Questo valore non è un indirizzo email valido.',
    'The file could not be found.' => 'Non è stato possibile trovare il file.',
    'The file is not readable.' => 'Il file non è leggibile.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Il file è troppo grande ({{ size }} {{ suffix }}). La dimensione massima consentita è {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Il mime type del file non è valido ({{ type }}). I tipi permessi sono {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Questo valore dovrebbe essere {{ limit }} o inferiore.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Questo valore è troppo lungo. Dovrebbe essere al massimo di {{ limit }} carattere.|Questo valore è troppo lungo. Dovrebbe essere al massimo di {{ limit }} caratteri.',
    'This value should be {{ limit }} or more.' => 'Questo valore dovrebbe essere {{ limit }} o superiore.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Questo valore è troppo corto. Dovrebbe essere almeno di {{ limit }} carattere.|Questo valore è troppo corto. Dovrebbe essere almeno di {{ limit }} caratteri.',
    'This value should not be blank.' => 'Questo valore non dovrebbe essere vuoto.',
    'This value should not be null.' => 'Questo valore non dovrebbe essere nullo.',
    'This value should be null.' => 'Questo valore dovrebbe essere nullo.',
    'This value is not valid.' => 'Questo valore non è valido.',
    'This value is not a valid time.' => 'Questo valore non è un\'ora valida.',
    'This value is not a valid URL.' => 'Questo valore non è un URL valido.',
    'The two values should be equal.' => 'I due valori dovrebbero essere uguali.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Il file è troppo grande. La dimensione massima è {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Il file è troppo grande.',
    'The file could not be uploaded.' => 'Il file non può essere caricato.',
    'This value should be a valid number.' => 'Questo valore dovrebbe essere un numero.',
    'This file is not a valid image.' => 'Questo file non è una immagine valida.',
    'This is not a valid IP address.' => 'Questo valore non è un indirizzo IP valido.',
    'This value is not a valid language.' => 'Questo valore non è una lingua valida.',
    'This value is not a valid locale.' => 'Questo valore non è una impostazione regionale valida.',
    'This value is not a valid country.' => 'Questo valore non è una nazione valida.',
    'This value is already used.' => 'Questo valore è già stato utilizzato.',
    'The size of the image could not be detected.' => 'La dimensione dell\'immagine non può essere determinata.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La larghezza dell\'immagine è troppo grande ({{ width }}px). La larghezza massima è di {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La larghezza dell\'immagine è troppo piccola ({{ width }}px). La larghezza minima è di {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'L\'altezza dell\'immagine è troppo grande ({{ height }}px). L\'altezza massima è di {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'L\'altezza dell\'immagine è troppo piccola ({{ height }}px). L\'altezza minima è di {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Questo valore dovrebbe essere la password attuale dell\'utente.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Questo valore dovrebbe contenere esattamente {{ limit }} carattere.|Questo valore dovrebbe contenere esattamente {{ limit }} caratteri.',
    'The file was only partially uploaded.' => 'Il file è stato caricato solo parzialmente.',
    'No file was uploaded.' => 'Nessun file è stato caricato.',
    'No temporary folder was configured in php.ini.' => 'Nessuna cartella temporanea è stata configurata nel php.ini.',
    'Cannot write temporary file to disk.' => 'Impossibile scrivere il file temporaneo sul disco.',
    'A PHP extension caused the upload to fail.' => 'Un\'estensione PHP ha causato il fallimento del caricamento.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Questa collezione dovrebbe contenere almeno {{ limit }} elemento.|Questa collezione dovrebbe contenere almeno {{ limit }} elementi.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Questa collezione dovrebbe contenere massimo {{ limit }} elemento.|Questa collezione dovrebbe contenere massimo {{ limit }} elementi.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Questa collezione dovrebbe contenere esattamente {{ limit }} elemento.|Questa collezione dovrebbe contenere esattamente {{ limit }} elementi.',
    'Invalid card number.' => 'Numero di carta non valido.',
    'Unsupported card type or invalid card number.' => 'Tipo di carta non supportato o numero non valido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Questo valore non è un IBAN (International Bank Account Number) valido.',
    'This value is not a valid ISBN-10.' => 'Questo valore non è un codice ISBN-10 valido.',
    'This value is not a valid ISBN-13.' => 'Questo valore non è un codice ISBN-13 valido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Questo valore non è un codice ISBN-10 o ISBN-13 valido.',
    'This value is not a valid ISSN.' => 'Questo valore non è un codice ISSN valido.',
    'This value is not a valid currency.' => 'Questo valore non è una valuta valida.',
    'This value should be equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere uguale a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Questo valore dovrebbe essere maggiore di {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere maggiore o uguale a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Questo valore dovrebbe essere identico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Questo valore dovrebbe essere minore di {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere minore o uguale a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Questo valore dovrebbe essere diverso da {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Questo valore dovrebbe essere diverso da {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Il rapporto di aspetto dell\'immagine è troppo grande ({{ ratio }}). Il rapporto massimo consentito è {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Il rapporto di aspetto dell\'immagine è troppo piccolo ({{ ratio }}). Il rapporto minimo consentito è {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'immagine è quadrata ({{ width }}x{{ height }}px). Le immagini quadrate non sono consentite.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'immagine è orizzontale ({{ width }}x{{ height }}px). Le immagini orizzontali non sono consentite.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'immagine è verticale ({{ width }}x{{ height }}px). Le immagini verticali non sono consentite.',
    'An empty file is not allowed.' => 'Un file vuoto non è consentito.',
    'The host could not be resolved.' => 'L\'host non può essere risolto.',
    'This value does not match the expected {{ charset }} charset.' => 'Questo valore non corrisponde al charset {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Questo valore non è un codice BIC valido.',
    'Error' => 'Errore',
    'This is not a valid UUID.' => 'Questo non è un UUID valido.',
    'This form should not contain extra fields.' => 'Questo form non dovrebbe contenere nessun campo extra.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Il file caricato è troppo grande. Per favore caricare un file più piccolo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Il token CSRF non è valido. Provare a reinviare il form.',
    'fos_user.username.already_used' => 'Username già in uso.',
    'fos_user.username.blank' => 'Si prega di inserire un username.',
    'fos_user.username.short' => 'Username troppo breve.',
    'fos_user.username.long' => 'Username troppo lungo.',
    'fos_user.email.already_used' => 'Email già in uso.',
    'fos_user.email.blank' => 'Si prega di inserire una email.',
    'fos_user.email.short' => 'Email troppo breve.',
    'fos_user.email.long' => 'Email troppo lunga.',
    'fos_user.email.invalid' => 'Email non valida.',
    'fos_user.password.blank' => 'Si prega di inserire una password.',
    'fos_user.password.short' => 'Password troppo breve.',
    'fos_user.password.mismatch' => 'Le due password non coincidono.',
    'fos_user.new_password.blank' => 'Si prega di inserire nuovamente la password.',
    'fos_user.new_password.short' => 'Nuova password troppo breve.',
    'fos_user.current_password.invalid' => 'Password non valida.',
    'fos_user.group.blank' => 'Si prega di inserire un nome.',
    'fos_user.group.short' => 'Nome troppo breve.',
    'fos_user.group.long' => 'Nome troppo lungo.',
    'fos_group.name.already_used' => 'Nome già in uso.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Si è verificato un errore di autenticazione.',
    'Authentication credentials could not be found.' => 'Impossibile trovare le credenziali di autenticazione.',
    'Authentication request could not be processed due to a system problem.' => 'La richiesta di autenticazione non può essere processata a causa di un errore di sistema.',
    'Invalid credentials.' => 'Credenziali non valide.',
    'Cookie has already been used by someone else.' => 'Il cookie è già stato usato da qualcun altro.',
    'Not privileged to request the resource.' => 'Non hai i privilegi per richiedere questa risorsa.',
    'Invalid CSRF token.' => 'CSRF token non valido.',
    'Digest nonce has expired.' => 'Il numero di autenticazione è scaduto.',
    'No authentication provider found to support the authentication token.' => 'Non è stato trovato un valido fornitore di autenticazione per supportare il token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Nessuna sessione disponibile, può essere scaduta o i cookie non sono abilitati.',
    'No token could be found.' => 'Nessun token trovato.',
    'Username could not be found.' => 'Username non trovato.',
    'Account has expired.' => 'Account scaduto.',
    'Credentials have expired.' => 'Credenziali scadute.',
    'Account is disabled.' => 'L\'account è disabilitato.',
    'Account is locked.' => 'L\'account è bloccato.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Aggiorna gruppo',
    'group.show.name' => 'Nome gruppo',
    'group.new.submit' => 'Crea gruppo',
    'group.flash.updated' => 'Il gruppo è stato aggiornato.',
    'group.flash.created' => 'Il gruppo è stato creato.',
    'group.flash.deleted' => 'Il gruppo è stato cancellato.',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Ricordami',
    'security.login.submit' => 'Login',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Aggiorna',
    'profile.flash.updated' => 'Il profilo è stato aggiornato.',
    'change_password.submit' => 'Cambia password',
    'change_password.flash.success' => 'La password è stata cambiata.',
    'registration.check_email' => 'Un\'email è stata inviata a %email%. Contiene il link d\'attivazione che devi utilizzare per attivare il tuo account.',
    'registration.confirmed' => 'Congratulazioni %username%, il tuo account è confermato.',
    'registration.back' => 'Torna alla pagina d\'origine.',
    'registration.submit' => 'Registra',
    'registration.flash.user_created' => 'Utente creato con successo.',
    'registration.email.subject' => 'Benvenuto %username%!',
    'registration.email.message' => 'Ciao %username%!

Per terminare la validazione del tuo account visita %confirmationUrl%

Questo link può essere utilizzato solo una volta per verificare il tuo account.

Saluti,
il Team.
',
    'resetting.check_email' => 'È stata inviata un\'email con il link d\'attivazione che devi utilizzare per il reset della password.
Nota: è possibile richiedere una password entro %tokenLifetime% ore.

Se non ricevi un\'email verifica la cartella di spam o riprova.
',
    'resetting.request.username' => 'Username o indirizzo email',
    'resetting.request.submit' => 'Password reset',
    'resetting.reset.submit' => 'Cambia password',
    'resetting.flash.success' => 'La password è stata resettata.',
    'resetting.email.subject' => 'Password reset',
    'resetting.email.message' => 'Ciao %username%!

Per resettare la password visita %confirmationUrl%

Saluti,
il Team.
',
    'layout.logout' => 'Logout',
    'layout.login' => 'Login',
    'layout.register' => 'Registra',
    'layout.logged_in_as' => 'Collegato come %username%',
    'form.group_name' => 'Nome gruppo',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Password corrente',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Ripeti password',
    'form.new_password' => 'Nuova password',
    'form.new_password_confirmation' => 'Ripeti password',
  ),
));
$catalogue->addFallbackCatalogue($catalogueIt);

return $catalogue;
