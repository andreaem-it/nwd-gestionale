<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('af', array (
  'validators' => 
  array (
    'This value should be false.' => 'Hierdie waarde moet vals wees.',
    'This value should be true.' => 'Hierdie waarde moet waar wees.',
    'This value should be of type {{ type }}.' => 'Hierdie waarde moet van die soort {{type}} wees.',
    'This value should be blank.' => 'Hierdie waarde moet leeg wees.',
    'The value you selected is not a valid choice.' => 'Die waarde wat jy gekies het is nie \'n geldige keuse nie.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Jy moet ten minste {{ limit }} kies.|Jy moet ten minste {{ limit }} keuses kies.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Jy moet by die meeste {{ limit }} keuse kies.|Jy moet by die meeste {{ limit }} keuses kies.',
    'One or more of the given values is invalid.' => 'Een of meer van die gegewe waardes is ongeldig.',
    'This field was not expected.' => 'Die veld is nie verwag nie.',
    'This field is missing.' => 'Hierdie veld ontbreek.',
    'This value is not a valid date.' => 'Hierdie waarde is nie \'n geldige datum nie.',
    'This value is not a valid datetime.' => 'Hierdie waarde is nie \'n geldige datum en tyd nie.',
    'This value is not a valid email address.' => 'Hierdie waarde is nie \'n geldige e-pos adres nie.',
    'The file could not be found.' => 'Die lêer kon nie gevind word nie.',
    'The file is not readable.' => 'Die lêer kan nie gelees word nie.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die lêer is te groot ({{ size }} {{ suffix }}). Toegelaat maksimum grootte is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Die MIME-tipe van die lêer is ongeldig ({{ type }}). Toegelaat MIME-tipes is {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Hierdie waarde moet {{ limit }} of minder wees.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Hierdie waarde is te lank. Dit moet {{ limit }} karakter of minder wees.|Hierdie waarde is te lank. Dit moet {{ limit }} karakters of minder wees.',
    'This value should be {{ limit }} or more.' => 'Hierdie waarde moet {{ limit }} of meer wees.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Hierdie waarde is te kort. Dit moet {{ limit }} karakter of meer wees.|Hierdie waarde is te kort. Dit moet {{ limit }} karakters of meer wees.',
    'This value should not be blank.' => 'Hierdie waarde moet nie leeg wees nie.',
    'This value should not be null.' => 'Hierdie waarde moet nie nul wees nie.',
    'This value should be null.' => 'Hierdie waarde moet nul wees.',
    'This value is not valid.' => 'Hierdie waarde is nie geldig nie.',
    'This value is not a valid time.' => 'Hierdie waarde is nie \'n geldige tyd nie.',
    'This value is not a valid URL.' => 'Hierdie waarde is nie \'n geldige URL nie.',
    'The two values should be equal.' => 'Die twee waardes moet gelyk wees.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die lêer is te groot. Toegelaat maksimum grootte is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die lêer is te groot.',
    'The file could not be uploaded.' => 'Die lêer kan nie opgelaai word nie.',
    'This value should be a valid number.' => 'Hierdie waarde moet \'n geldige nommer wees.',
    'This file is not a valid image.' => 'Hierdie lêer is nie \'n geldige beeld nie.',
    'This is not a valid IP address.' => 'Hierdie is nie \'n geldige IP-adres nie.',
    'This value is not a valid language.' => 'Hierdie waarde is nie \'n geldige taal nie.',
    'This value is not a valid locale.' => 'Hierdie waarde is nie \'n geldige land instelling nie.',
    'This value is not a valid country.' => 'Hierdie waarde is nie \'n geldige land nie.',
    'This value is already used.' => 'Hierdie waarde word reeds gebruik.',
    'The size of the image could not be detected.' => 'Die grootte van die beeld kon nie opgespoor word nie.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die beeld breedte is te groot ({{ width }}px). Toegelaat maksimum breedte is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die beeld breedte is te klein ({{ width }}px). Minimum breedte verwag is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die beeld hoogte is te groot ({{ height }}px). Toegelaat maksimum hoogte is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die beeld hoogte is te klein ({{ height }}px). Minimum hoogte verwag is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Hierdie waarde moet die huidige wagwoord van die gebruiker wees.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Hierdie waarde moet presies {{ limit }} karakter wees.|Hierdie waarde moet presies {{ limit }} karakters wees.',
    'The file was only partially uploaded.' => 'Die lêer is slegs gedeeltelik opgelaai.',
    'No file was uploaded.' => 'Geen lêer is opgelaai nie.',
    'No temporary folder was configured in php.ini.' => 'Geen tydelike lêer is ingestel in php.ini nie.',
    'Cannot write temporary file to disk.' => 'Kan nie tydelike lêer skryf op skyf nie.',
    'A PHP extension caused the upload to fail.' => '\'n PHP-uitbreiding veroorsaak die oplaai van die lêer om te misluk.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Hierdie versameling moet {{ limit }} element of meer bevat.|Hierdie versameling moet {{ limit }} elemente of meer bevat.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Hierdie versameling moet {{ limit }} element of minder bevat.|Hierdie versameling moet {{ limit }} elemente of meer bevat.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Hierdie versameling moet presies {{ limit }} element bevat.|Hierdie versameling moet presies {{ limit }} elemente bevat.',
    'Invalid card number.' => 'Ongeldige kredietkaart nommer.',
    'Unsupported card type or invalid card number.' => 'Nie-ondersteunde tipe kaart of ongeldige kredietkaart nommer.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Opdateer Groep',
    'group.show.name' => 'Groep Naam',
    'group.new.submit' => 'Nuwe groep',
    'group.flash.updated' => 'Die groep was opgedateer',
    'group.flash.created' => 'Die groep was gemaak',
    'group.flash.deleted' => 'Die groep was verwyder',
    'security.login.username' => 'Gebruiker Naam',
    'security.login.password' => 'Wagwoord',
    'security.login.remember_me' => 'Onthou my',
    'security.login.submit' => 'Teken in',
    'profile.show.username' => 'Gebruiker Naam',
    'profile.show.email' => 'E-pos',
    'profile.edit.submit' => 'Opdateer',
    'profile.flash.updated' => 'Die profiel was opgedateer',
    'change_password.submit' => 'Verander wagwoord',
    'change_password.flash.success' => 'Die wagwoord was verander',
    'registration.check_email' => '\'n E-pos was gestuur na %email%. Dit behels aktiveerings skakel, waarop jy moet klik om jou rekening te aktiveer',
    'registration.confirmed' => 'Geluk %username%, jou rekening is nou geaktiveer',
    'registration.back' => 'Terug na die oorsprongblad',
    'registration.submit' => 'Registreer',
    'registration.flash.user_created' => 'Die verbruiker was suksesvol gemaak',
    'registration.email.subject' => 'Welkom %username%!',
    'registration.email.message' => 'Hello %username%!

Om die registrasie proses te finaliseer, besoek asseblief %confirmationUrl%

Hierdie skakel kan slegs een keer gebruik word.

Groete,
die Span.
',
    'resetting.check_email' => '\'n E-pos was gestuur na %email%. Dit bevat \'n skakel waarop jy moet klik om jou wagwoord te herstel.
Nota: Jy kan eers weer \'n nuwe skakel versoek na %tokenLifetime% ure.

As jy nie \'n e-pos kry nie, kyk in jou "spam" leer en probeer weer.
',
    'resetting.request.username' => 'Verbruikernaam of e-pos adres',
    'resetting.request.submit' => 'Herstel wagwoord',
    'resetting.reset.submit' => 'Verander wagwoord',
    'resetting.flash.success' => 'Die wagwoord was suksesvol herstel',
    'resetting.email.subjet' => 'Herstel Wagwoord',
    'resetting.email.message' => 'Hello %username%!

Om jou wagwoord te herstel, besoek asseblief %confirmationUrl%

Groete,
die Span.
',
    'layout.logout' => 'Sluit af',
    'layout.login' => 'Teken in',
    'layout.register' => 'Registreer',
    'layout.logged_in_as' => 'Ingeteken as %username%',
    'form.group_name' => 'Groep naam',
    'form.username' => 'Verbruiker Naam',
    'form.email' => 'E-pos',
    'form.current_password' => 'Huidige wagwoord',
    'form.password' => 'Wagwoord',
    'form.password_confirmation' => 'Herhaal wagwoord',
    'form.new_password' => 'Nuwe wagwoord',
    'form.new_password_confirmation' => 'Herhaal nuwe wagwoord',
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
