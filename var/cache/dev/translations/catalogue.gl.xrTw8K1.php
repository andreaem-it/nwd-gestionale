<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('gl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadeiro.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar baleiro.',
    'The value you selected is not a valid choice.' => 'O valor seleccionado non é unha opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar polo menos {{ limit }} opción.|Debe seleccionar polo menos {{ limit }} opcions.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opcions.',
    'One or more of the given values is invalid.' => 'Un ou máis dos valores indicados non son válidos.',
    'This field was not expected.' => 'Este campo non era esperado.',
    'This field is missing.' => 'Este campo falta.',
    'This value is not a valid date.' => 'Este valor non é unha data válida.',
    'This value is not a valid datetime.' => 'Este valor non é unha data e hora válidas.',
    'This value is not a valid email address.' => 'Este valor non é unha dirección de correo electrónico válida.',
    'The file could not be found.' => 'Non se puido atopar o arquivo.',
    'The file is not readable.' => 'O arquivo non se pode ler.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é demasiado grande ({{ size }} {{ suffix }}). O tamaño máximo permitido é {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'O tipo mime do arquivo non é válido ({{ type }}). Os tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} ou menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor é demasiado longo. Debería ter {{ limit }} carácter ou menos.|Este valor é demasiado longo. Debería ter {{ limit }} caracteres ou menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} ou máis.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor é demasiado curto. Debería ter {{ limit }} carácter ou máis.|Este valor é demasiado corto. Debería ter {{ limit }} caracteres ou máis.',
    'This value should not be blank.' => 'Este valor non debería estar baleiro.',
    'This value should not be null.' => 'Este valor non debería ser null.',
    'This value should be null.' => 'Este valor debería ser null.',
    'This value is not valid.' => 'Este valor non é válido.',
    'This value is not a valid time.' => 'Este valor non é unha hora válida.',
    'This value is not a valid URL.' => 'Este valor non é unha URL válida.',
    'The two values should be equal.' => 'Os dous valores deberían ser iguais.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é demasiado grande. O tamaño máximo permitido é {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'O arquivo é demasiado grande.',
    'The file could not be uploaded.' => 'No se puido cargar o arquivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'O arquivo non é unha imaxe válida.',
    'This is not a valid IP address.' => 'Isto non é unha dirección IP válida.',
    'This value is not a valid language.' => 'Este valor non é un idioma válido.',
    'This value is not a valid locale.' => 'Este valor non é unha localización válida.',
    'This value is not a valid country.' => 'Este valor non é un país válido.',
    'This value is already used.' => 'Este valor xa está a ser empregado.',
    'The size of the image could not be detected.' => 'Non se puido determinar o tamaño da imaxe.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A largura da imaxe é demasiado grande ({{ width }}px). A largura máxima permitida son {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A largura da imaxe é demasiado pequena ({{ width }}px). A largura mínima requerida son {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A altura da imaxe é demasiado grande ({{ height }}px). A altura máxima permitida son {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A altura da imaxe é demasiado pequena ({{ height }}px). A altura mínima requerida son {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser a contrasinal actual do usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería ter exactamente {{ limit }} carácter.|Este valor debería ter exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'O arquivo foi só subido parcialmente.',
    'No file was uploaded.' => 'Non se subiu ningún arquivo.',
    'No temporary folder was configured in php.ini.' => 'Ningunha carpeta temporal foi configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'Non se puido escribir o arquivo temporal no disco.',
    'A PHP extension caused the upload to fail.' => 'Unha extensión de PHP provocou que a subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe conter {{ limit }} elemento ou máis.|Esta colección debe conter {{ limit }} elementos ou máis.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe conter {{ limit }} elemento ou menos.|Esta colección debe conter {{ limit }} elementos ou menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe conter exactamente {{ limit }} elemento.|Esta colección debe conter exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarxeta non válido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarxeta non soportado ou número de tarxeta non válido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Este valor non é un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor non é un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor non é un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor non é nin un ISBN-10 válido nin un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor non é un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor non é unha moeda válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser maior que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser maior ou igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser identico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor ou igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor non debería ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor non debería ser identico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'A proporción da imaxe é demasiado grande ({{ ratio }}). A proporción máxima permitida é {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'A proporción da é demasiado pequena ({{ ratio }}). A proporción mínima permitida é {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A imaxe é cadrada ({{ width }}x{{ height }}px). As imáxenes cadradas non están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A imaxe está orientada horizontalmente ({{ width }}x{{ height }}px). As imáxenes orientadas horizontalmente non están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A imaxe está orientada verticalmente ({{ width }}x{{ height }}px). As imáxenes orientadas verticalmente non están permitidas.',
    'An empty file is not allowed.' => 'Non está permitido un arquivo baleiro.',
    'The host could not be resolved.' => 'Non se puido resolver o host.',
    'This value does not match the expected {{ charset }} charset.' => 'A codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Non é un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario non debería conter campos adicionais.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo subido é demasiado grande. Por favor, suba un arquivo máis pequeno.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF non é válido. Por favor, probe a enviar novamente o formulario.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocorreu un erro de autenticación.',
    'Authentication credentials could not be found.' => 'Non se atoparon as credenciais de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'A solicitude de autenticación no puido ser procesada debido a un problema do sistema.',
    'Invalid credentials.' => 'Credenciais non válidas.',
    'Cookie has already been used by someone else.' => 'A cookie xa foi empregado por outro usuario.',
    'Not privileged to request the resource.' => 'Non ten privilexios para solicitar o recurso.',
    'Invalid CSRF token.' => 'Token CSRF non válido.',
    'Digest nonce has expired.' => 'O vector de inicialización (digest nonce) expirou.',
    'No authentication provider found to support the authentication token.' => 'Non se atopou un provedor de autenticación que soporte o token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'Non hai ningunha sesión dispoñible, expirou ou as cookies non están habilitadas.',
    'No token could be found.' => 'Non se atopou ningún token.',
    'Username could not be found.' => 'Non se atopou o nome de usuario.',
    'Account has expired.' => 'A conta expirou.',
    'Credentials have expired.' => 'As credenciais expiraron.',
    'Account is disabled.' => 'A conta está deshabilitada.',
    'Account is locked.' => 'A conta está bloqueada.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nome do grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'Actualizouse o grupo.',
    'group.flash.created' => 'Creouse o grupo.',
    'group.flash.deleted' => 'Borrouse o grupo.',
    'security.login.username' => 'Nome de usuario',
    'security.login.password' => 'Contrasinal',
    'security.login.remember_me' => 'Lembrar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nome de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'Actualizouse o perfil.',
    'change_password.submit' => 'Cambiar contrasinal',
    'change_password.flash.success' => 'O contrasinal cambiouse con éxito.',
    'registration.check_email' => 'Enviouse un email a %email%. Contén un enlace de activación que deberás premer para activala túa conta.',
    'registration.confirmed' => 'Parabéns %username%, confirmouse a túa conta.',
    'registration.back' => 'Volver á páxina orixinal.',
    'registration.submit' => 'Rexistrar',
    'registration.flash.user_created' => 'Creouse o usuario satisfactoriamente.',
    'registration.email.subject' => 'Benvido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completala validación da túa conta - por favor visita %confirmationUrl%

Atentamente,
o Equipo.
',
    'resetting.password_already_requested' => 'O contrasinal para este usuario solicitouse xa dentro das 24 horas.',
    'resetting.check_email' => 'Enviouse un email %email%. Contén un enlace de activación que deberás premer para restablecelo teu contrasinal.',
    'resetting.request.invalid_username' => 'O usuario ou dirección de correo "%username%" non existe.',
    'resetting.request.username' => 'Nome de usuario',
    'resetting.request.submit' => 'Restablecer contrasinal',
    'resetting.reset.submit' => 'Cambiar contrasinal',
    'resetting.flash.success' => 'O contrasinal cambiaouse con éxito.',
    'resetting.email.subject' => 'Benvido %username%!',
    'resetting.email.message' => 'Hola %username%!

Para restablecelo teu contrasinal - por favor visita %confirmationUrl%

Atentamente,
o Equipo.
',
    'layout.logout' => 'Saír',
    'layout.login' => 'Entrar',
    'layout.register' => 'Rexistrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nome de grupo',
    'form.username' => 'Nome de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contrasinal actualizado',
    'form.password' => 'Contrasinal',
    'form.password_confirmation' => 'Repita o contrasinal',
    'form.new_password' => 'Novo contrasinal',
    'form.new_password_confirmation' => 'Repita o contrasinal',
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