<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bn_BD', array (
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'আপডেট গ্রুপ',
    'group.show.name' => 'গ্রুপের নাম',
    'group.new.submit' => 'গ্রুপ তৈরি',
    'group.flash.updated' => 'গ্রুপের তথ্য হালনাগাদ হয়েছে',
    'group.flash.created' => 'গ্রুপের তথ্য তৈরি করা হয়েছে',
    'group.flash.deleted' => 'গ্রুপের তথ্য মুছে ফেলা হয়েছে',
    'security.login.username' => 'ব্যবহারকারীর নাম',
    'security.login.password' => 'পাসওয়ার্ড',
    'security.login.remember_me' => 'আমাকে মনে রেখো',
    'security.login.submit' => 'লগ ইন',
    'profile.show.username' => 'ব্যবহারকারীর নাম',
    'profile.show.email' => 'ই-মেইল',
    'profile.edit.submit' => 'আপডেট',
    'profile.flash.updated' => 'প্রোফাইল আপডেট করা হয়েছে।',
    'change_password.submit' => 'পাসওয়ার্ড পরিবর্তন',
    'change_password.flash.success' => 'পাসওয়ার্ড পরিবর্তন সফল হয়েছো',
    'registration.check_email' => '%email% এড্রেসে একটি ই-মেইল পাঠানো হয়েছে. অ্যাকাউন্ট সক্রিয় করার জন্য ই-মেইলে পাঠানো লিংকটি ক্লিক করুন
',
    'registration.confirmed' => '%username% অভিনন্দন, আপনার অ্যাকাউন্ট এখন সক্রিয়।',
    'registration.back' => 'আগের পাতা',
    'registration.submit' => 'নিবন্ধন',
    'registration.flash.user_created' => 'ব্যবহারকারী সফলভাবে তৈরি করা হয়েছে',
    'registration.email.subject' => 'স্বাগতম %username%!',
    'registration.email.message' => 'হ্যালো %username%!

আপনার অ্যাকাউন্ট সক্রিয় করার জন্য - দয়া করে %confirmationUrl% লিংকটি ভিসিট করুর

এই লিঙ্কটি শুধুমাত্র একবার আপনার অ্যাকাউন্ট যাচাই করতে ব্যবহার করা যেতে পারে।

শুভেচ্চান্তে,
এডমিন।
',
    'resetting.check_email' => 'একটি ই-মেইল পাঠানো হয়েছে। পাসওয়ার্ড রিসেট করার জন্য ই-মেইলে পাঠানো লিংকটি ক্লিক করুন।
বিঃদ্রঃ  %tokenLifetime% ঘন্টার মধ্যে শুধুমাত্র একবার রিসেট পাসওয়ার্ড করতে পারবেন।

যদি ই-মেইল টি না পেয়ে থাকেন, তাহলে আপসার স্পাম ফোল্ডারে দেখুন অথবা আবার চেষ্টা করুন।
',
    'resetting.request.username' => 'ব্যবহারকারীর নাম অথবা ই-মেইল',
    'resetting.request.submit' => 'রিসেট পাসওয়ার্ড',
    'resetting.reset.submit' => 'পাসওয়ার্ড পরিবর্তন',
    'resetting.flash.success' => 'পাসওয়ার্ডটি সফলভাবো রিসেট করা হয়েছে',
    'resetting.email.subject' => 'রিসেট পাসওয়ার্ড',
    'resetting.email.message' => 'হ্যালো %username%!

আপনার পাসওয়ার্ড রিসেট করতে - দয়া করে %confirmationUrl% লিংকটি ভিসিট করুর

শুভেচ্চান্তে,
এডমিন।
',
    'layout.logout' => 'লগ আউট',
    'layout.login' => 'লগ ইন',
    'layout.register' => 'নিবন্ধন',
    'layout.logged_in_as' => '%username% হিসাবে লগ ইন করেছেন',
    'form.group_name' => 'গ্রুপের নাম',
    'form.username' => 'ব্যবহারকারীর নাম',
    'form.email' => 'ই-মেইল',
    'form.current_password' => 'বর্তমান পাসওয়ার্ড',
    'form.password' => 'পাসওয়ার্ড',
    'form.password_confirmation' => 'পাসওয়ার্ড আবার লিখুন',
    'form.new_password' => 'নতুন পাসওয়ার্ড',
    'form.new_password_confirmation' => 'নতুন পাসওয়ার্ড আবার লিখুন',
  ),
  'validators' => 
  array (
    'fos_user.username.already_used' => 'ব্যবহারকারীর নামটি ইতিমধ্যে ব্যবহার করা হয়েছে',
    'fos_user.username.blank' => 'অনুগ্রহ করে ব্যবহারকারীর নাম লিখুন',
    'fos_user.username.short' => 'নামটি থুবই ছোট',
    'fos_user.username.long' => 'নামটি থুবই বড়',
    'fos_user.email.already_used' => 'ই-মেইল টি ইতিমধ্যে ব্যবহার করা হয়েছে',
    'fos_user.email.blank' => 'অনুগ্রহ করে একটি ই-মেইল লিখুন',
    'fos_user.email.short' => 'ই-মেইল টি থুবই ছোট',
    'fos_user.email.long' => 'ই-মেইল টি থুবই বড়',
    'fos_user.email.invalid' => 'ই-মেইল টি সঠিক নয়',
    'fos_user.password.blank' => 'অনুগ্রহ করে পাসওয়ার্ড লিখুন',
    'fos_user.password.short' => 'পাসওয়ার্ড টি থুবই ছোট',
    'fos_user.password.mismatch' => 'পাসওয়ার্ডটি মেলেনি',
    'fos_user.new_password.blank' => 'অনুগ্রহ করে একটি নতুন পাসওয়ার্ড লিখুন',
    'fos_user.new_password.short' => 'নতুন পাসওয়ার্ড টি থুবই ছোট',
    'fos_user.current_password.invalid' => 'পাসওয়ার্ডটি সঠিক নয়',
    'fos_user.group.blank' => 'অনুগ্রহ করে একটি নাম লিখুন',
    'fos_user.group.short' => 'নামটি থুবই ছোট',
    'fos_user.group.long' => 'নামটি থুবই বড়',
    'fos_group.name.already_used' => 'নামটি ইতিমধ্যে ব্যবহার করা হয়েছে',
  ),
));

$catalogueBn = new MessageCatalogue('bn', array (
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'আপডেট গ্রুপ',
    'group.show.name' => 'গ্রুপের নাম',
    'group.new.submit' => 'গ্রুপ তৈরি',
    'group.flash.updated' => 'গ্রুপের তথ্য হালনাগাদ হয়েছে',
    'group.flash.created' => 'গ্রুপের তথ্য তৈরি করা হয়েছে',
    'group.flash.deleted' => 'গ্রুপের তথ্য মুছে ফেলা হয়েছে',
    'security.login.username' => 'ব্যবহারকারীর নাম',
    'security.login.password' => 'পাসওয়ার্ড',
    'security.login.remember_me' => 'আমাকে মনে রেখো',
    'security.login.submit' => 'লগ ইন',
    'profile.show.username' => 'ব্যবহারকারীর নাম',
    'profile.show.email' => 'ই-মেইল',
    'profile.edit.submit' => 'আপডেট',
    'profile.flash.updated' => 'প্রোফাইল আপডেট করা হয়েছে।',
    'change_password.submit' => 'পাসওয়ার্ড পরিবর্তন',
    'change_password.flash.success' => 'পাসওয়ার্ড পরিবর্তন সফল হয়েছো',
    'registration.check_email' => '%email% এড্রেসে একটি ই-মেইল পাঠানো হয়েছে. অ্যাকাউন্ট সক্রিয় করার জন্য ই-মেইলে পাঠানো লিংকটি ক্লিক করুন
',
    'registration.confirmed' => '%username% অভিনন্দন, আপনার অ্যাকাউন্ট এখন সক্রিয়।',
    'registration.back' => 'আগের পাতা',
    'registration.submit' => 'নিবন্ধন',
    'registration.flash.user_created' => 'ব্যবহারকারী সফলভাবে তৈরি করা হয়েছে',
    'registration.email.subject' => 'স্বাগতম %username%!',
    'registration.email.message' => 'হ্যালো %username%!

আপনার অ্যাকাউন্ট সক্রিয় করার জন্য - দয়া করে %confirmationUrl% লিংকটি ভিসিট করুর

এই লিঙ্কটি শুধুমাত্র একবার আপনার অ্যাকাউন্ট যাচাই করতে ব্যবহার করা যেতে পারে।

শুভেচ্চান্তে,
এডমিন।
',
    'resetting.check_email' => 'একটি ই-মেইল পাঠানো হয়েছে। পাসওয়ার্ড রিসেট করার জন্য ই-মেইলে পাঠানো লিংকটি ক্লিক করুন।
বিঃদ্রঃ  %tokenLifetime% ঘন্টার মধ্যে শুধুমাত্র একবার রিসেট পাসওয়ার্ড করতে পারবেন।

যদি ই-মেইল টি না পেয়ে থাকেন, তাহলে আপসার স্পাম ফোল্ডারে দেখুন অথবা আবার চেষ্টা করুন।
',
    'resetting.request.username' => 'ব্যবহারকারীর নাম অথবা ই-মেইল',
    'resetting.request.submit' => 'রিসেট পাসওয়ার্ড',
    'resetting.reset.submit' => 'পাসওয়ার্ড পরিবর্তন',
    'resetting.flash.success' => 'পাসওয়ার্ডটি সফলভাবো রিসেট করা হয়েছে',
    'resetting.email.subject' => 'রিসেট পাসওয়ার্ড',
    'resetting.email.message' => 'হ্যালো %username%!

আপনার পাসওয়ার্ড রিসেট করতে - দয়া করে %confirmationUrl% লিংকটি ভিসিট করুর

শুভেচ্চান্তে,
এডমিন।
',
    'layout.logout' => 'লগ আউট',
    'layout.login' => 'লগ ইন',
    'layout.register' => 'নিবন্ধন',
    'layout.logged_in_as' => '%username% হিসাবে লগ ইন করেছেন',
    'form.group_name' => 'গ্রুপের নাম',
    'form.username' => 'ব্যবহারকারীর নাম',
    'form.email' => 'ই-মেইল',
    'form.current_password' => 'বর্তমান পাসওয়ার্ড',
    'form.password' => 'পাসওয়ার্ড',
    'form.password_confirmation' => 'পাসওয়ার্ড আবার লিখুন',
    'form.new_password' => 'নতুন পাসওয়ার্ড',
    'form.new_password_confirmation' => 'নতুন পাসওয়ার্ড আবার লিখুন',
  ),
  'validators' => 
  array (
    'fos_user.username.already_used' => 'ব্যবহারকারীর নামটি ইতিমধ্যে ব্যবহার করা হয়েছে',
    'fos_user.username.blank' => 'অনুগ্রহ করে ব্যবহারকারীর নাম লিখুন',
    'fos_user.username.short' => 'নামটি থুবই ছোট',
    'fos_user.username.long' => 'নামটি থুবই বড়',
    'fos_user.email.already_used' => 'ই-মেইল টি ইতিমধ্যে ব্যবহার করা হয়েছে',
    'fos_user.email.blank' => 'অনুগ্রহ করে একটি ই-মেইল লিখুন',
    'fos_user.email.short' => 'ই-মেইল টি থুবই ছোট',
    'fos_user.email.long' => 'ই-মেইল টি থুবই বড়',
    'fos_user.email.invalid' => 'ই-মেইল টি সঠিক নয়',
    'fos_user.password.blank' => 'অনুগ্রহ করে পাসওয়ার্ড লিখুন',
    'fos_user.password.short' => 'পাসওয়ার্ড টি থুবই ছোট',
    'fos_user.password.mismatch' => 'পাসওয়ার্ডটি মেলেনি',
    'fos_user.new_password.blank' => 'অনুগ্রহ করে একটি নতুন পাসওয়ার্ড লিখুন',
    'fos_user.new_password.short' => 'নতুন পাসওয়ার্ড টি থুবই ছোট',
    'fos_user.current_password.invalid' => 'পাসওয়ার্ডটি সঠিক নয়',
    'fos_user.group.blank' => 'অনুগ্রহ করে একটি নাম লিখুন',
    'fos_user.group.short' => 'নামটি থুবই ছোট',
    'fos_user.group.long' => 'নামটি থুবই বড়',
    'fos_group.name.already_used' => 'নামটি ইতিমধ্যে ব্যবহার করা হয়েছে',
  ),
));
$catalogue->addFallbackCatalogue($catalogueBn);
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
$catalogueBn->addFallbackCatalogue($catalogueIt);

return $catalogue;
