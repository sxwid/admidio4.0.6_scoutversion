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
$page = new HtmlPage('startseite', 'Willkommen!');

$page->addHtml('
    <div id="start" class="admidio-blog">
      <div class="admidio-content">
      
      <p><img style="width: 100%;  height: auto; display: block; margin-left: auto; margin-right: auto;" alt="" src="https://ptabaden.ch/adm_program/system/show_image.php?module=sts&amp;file=1531405733.jpeg" /></p>
      
        <h3>Gemeinsam l&ouml;sen wir die kniffligsten R&auml;tsel, fangen hinterlistige R&auml;uber und bauen gigantische Luftschl&ouml;sser.<br>
          Manchmal werden wir sogar zu Prinzessinnen, K&ouml;nigen, Piratinnen oder Zirkusartisten. Wir entfachen Feuer, backen, kochen, basteln, tr&auml;umen, lesen, spielen, toben und lernen.<br>
            Sei auch du mit dabei!</h3>

    </div>
    </div>
    ');

// show html of complete page
$page->show();

?>
