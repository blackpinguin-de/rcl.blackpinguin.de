<?php
$path = strtok($_SERVER['REQUEST_URI'],'?');
$query = strtok('?');

parse_str($query, $_GET);
include_once("/rcl/www/rcl/php/util.php");
$error = http_response_code();
$title = $error . $rcl->lang(" Fehler", " Error");

include_once("/rcl/www/rcl/include1.php");

switch($error){
default:
    i18n('head', http_response_code().' Fehler - Unbekannter Fehler', http_response_code().' Error - Unknown Error');
    i18n('text', 'Ein Fehler ist aufgetreten, aber es konnte keine Fehlermeldung dafür gefunden werden.',
                 'An error occured, but no error message could be found.');
break;
case 401:
    i18n('head', '401 Fehler - Nicht autorisiert', '401 Error - Unauthorized');
    i18n('text', 'Die von Ihnen angefragte Seite</p><p><b>'.$_SERVER['REQUEST_URI'].'</b><p/><p>kann nicht ohne gültige Authentifizierung aufgerufen werden.</p><p>Entweder haben Sie falsche Zugangsdaten eingegeben (z.B. ein falsches Passwort), oder Ihr Browser ist nicht in der Lage, passende Zugangsdaten zu übermitteln.',
                 'The page you requested</p><p><b>'.$_SERVER['REQUEST_URI'].'</b></p><p>can\'t be accessed without authorization.</p><p>Either you supplied the wrong credentials (e.g., bad password), or your browser doesn\'t understand how to supply the credentials required.');
break;
case 403:
    i18n('head', '403 Fehler - Zugriff verboten', '403 Error - Forbidden');
    i18n('text', 'Sie haben nicht die erforderlichen Zugriffsrechte um </p><p><b>'.$_SERVER['REQUEST_URI'].'</b><p/><p>auf diesem Server aufzurufen.',
                 'You don\'t have permission to access</p><p><b>'.$_SERVER['REQUEST_URI'].'</b></p><p>on this server.');
break;
case 404:
    i18n('head', '404 Fehler - Seite nicht gefunden', '404 Error - Page not found');
    i18n('text', 'Die von Ihnen aufgerufene Seite</p><p><b>'.$_SERVER['REQUEST_URI'].'</b><p/><p>konnte auf diesem Server nicht gefunden werden.',
                 'The page you requested</p><p><b>'.$_SERVER['REQUEST_URI'].'</b></p><p>could not be found on this server.');
break;
}

?>

<div id="http-error">
<h3><?=i18n('head');?></h3>
<p><?=i18n('text');?></p>
</div>

<?php include_once("/rcl/www/rcl/include2.php"); ?>
