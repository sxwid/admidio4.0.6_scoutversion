<?php
/******************************************************************************
* Simple PHP Page to render Text and Images in Admidio
 *****************************************************************************/
error_reporting(E_ALL);
ini_set('display_errors', '1');

$rootPath = dirname(dirname(__DIR__));
require_once($rootPath . '/adm_program/system/common.php');

// Navigation of the module starts here
$gNavigation->addStartUrl(CURRENT_URL);

// create html page object
$page = new HtmlPage('spenden','Unterstützen');
$page->addHtml('
    <div id="spenden" class="admidio-blog">
      <div class="admidio-content">
      
      <img style="width: 100%;  height: auto;" alt="" src="https://ptabaden.ch/adm_program/system/show_image.php?module=support&amp;file=1481379023.jpg" ><br><br>
      <p>Die Leiterinnen und Leiter der PTA Baden verrichten ihre Arbeit ehrenamtlich. Die tollen Samstagnachmittage mit den Pfadis entsch&auml;digen die Anstrengungen
      und den Aufwand vollauf. Die Pfadis bezahlen einen j&auml;hrlichen Teilnehmerbetrag von 80 Franken. Die Lager werden zu einem Grossteil mit Geldern von J&amp;S /
      Stiftungen bezahlt, jedoch wird ein Teilnehmerbeitrag f&auml;llig, je nach Dauer des Lagers von 50 - 200 Franken. Dennoch sind wir auf externe Spenden angewiesen,
       um unser Pfadiangebot so vielf&auml;ltig wie heute anzubieten.<br>

      <p>Haben Sie Lust, uns einen tollen Ausflug oder eine Aktivit&auml;t zu erm&ouml;glichen?
      Es freut uns sehr, wenn Sie unsere PTA mit einem Beitrag unterst&uuml;tzen, ob gross oder klein entscheiden Sie&hellip; Besten Dank!</p>

      <p><br>
      Pfadi Trotz Allem Baden<br>
      5400 Baden<br>
      IBAN: CH62 0839 0034 6605 1000 7</p>

      </div>
    </div>
    ');

// show html of complete page
$page->show();

?>
