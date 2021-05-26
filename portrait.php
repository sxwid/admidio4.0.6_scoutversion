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
$page = new HtmlPage('portrait', 'Über uns');

$page->addHtml('
    <div id="portrait" class="admidio-blog">
      <div class="admidio-content">

        <h3 style="font color:#cf171a;">PTA - was ist das?</h3>
        <p>PTA bedeutet Pfadi Trotz Allem und ist ein Bereich der Pfadi, der schon kurze Zeit nach der Gr&uuml;ndung der Pfadibewegung durch Lord Baden - Powell in England entstand. Die PTA m&ouml;chte Kindern und Jugendlichen mit einer k&ouml;rperlichen, kognitiven oder mehrfachen Behinderung durch m&ouml;glichst verschiedenartige Aktivit&auml;ten ihre F&auml;higkeiten und Fertigkeiten erfahren lassen. Im Rahmen der PTA k&ouml;nnen sie aus ihrem Alltag ausbrechen und vielf&auml;ltige Erfahrungen sammeln. In einer neuen Umgebung werden Herausforderungen mit Spass und Spiel gemeistert. Kreativit&auml;t spielt dabei eine ganz wichtige Rolle. Die Kinder und Jugendlichen sollen nicht nur sich selbst, sondern auch ihre Umwelt kennen lernen. Dazu z&auml;hlen nicht nur andere Mitmenschen, mit und ohne Behinderung, sondern auch die Natur und die Region.</p>
        <p><img alt="" src="https://ptabaden.ch/adm_program/system/show_image.php?module=history&amp;file=1481376108.jpg" style="width: 100%;  height: auto; display: block; margin-left: auto; margin-right: auto;" /></p>

        <h2>Die PTA Baden</h2>
        <p>Unsere PTA besteht aus ca. 20 Kindern, Jugendlichen und Erwachsenen PTA&#39;s/Rovern und 15 Leiterinnen und Leitern, verteilt auf eine PTA Stufe (bis 18 Jahre) und eine Roverstufe. Das Angebot der PTA Baden richtet sich an alle Kinder und Jugendliche mit einer kognitiven und&thinsp;/oder k&ouml;rperlichen Behinderung, welche im Aargau wohnhaft sind.</p>

        <h3>Aktivit&auml;ten</h3>
        <p>Um den unterschiedlichen Bed&uuml;rfnissen der Pfadis gerecht zu werden, gliedert sich die PTA Baden in zwei Gruppen: Die Aktivit&auml;ten der Pfadis finden jeweils jeden dritten Samstagnachmittag im Monat an verschiedenen Orten im Kanton Aargau statt. Dabei geht die Gruppe auf Entdeckungstour durch den Wald, besucht verschiedene Regionen, trifft Fabelwesen, l&ouml;st geheimnisvolle R&auml;tsel, kocht &uuml;ber dem Feuer, bewegt sich in der Natur und erlebt noch weitere tolle Abenteuer. Die Aktivit&auml;ten der Rover bieten unseren &auml;lteren Pfadis ab ca. 18 Jahren die M&ouml;glichkeit, f&uuml;r ihr Alter spezifische Pfadiabenteuer zu erleben. Dabei wird versucht, die Pfadis aktiv in die Planung der Aktivit&auml;ten mit ein zu beziehen und dabei auf ihre W&uuml;nsche und Bed&uuml;rfnisse zu achten. Die Gruppe trifft sich einmal pro Quartal an einem Abend oder am Samstagnachmittag jeweils an verschiedenen Orten im Kanton Aargau.</p>
        <p><img alt="" src="https://ptabaden.ch/adm_program/system/show_image.php?module=history&amp;file=1481377338.jpg" style="width: 100%;  height: auto; display: block; margin-left: auto; margin-right: auto;" /></p>

        <h3>H&ouml;hepunkte</h3>
        <p>Die H&ouml;hepunkte jedes Pfadijahres sind das einw&ouml;chige Sommerlager und das zweit&auml;gige Pfingstlager, an welchen die PTA Stufe teilnimmt. Des Weiteren finden auch immer wieder Aktivit&auml;ten mit Mitgliedern anderer Pfadiabteilungen des Kanton Aargaus statt, wie zum Beispiel das kantonale Pfaditurnier &laquo;BOTT&raquo;. Diese Kontakte erm&ouml;glichen nicht nur eine fliessende Integration, sondern k&ouml;nnen f&uuml;r alle Teilnehmenden eine grosse Bereicherung sein.</p>
        <p><img alt="" src="https://ptabaden.ch/adm_program/system/show_image.php?module=history&amp;file=1481377128.jpg" style="width: 100%;  height: auto; display: block; margin-left: auto; margin-right: auto;" /></p>

        <h3>Das Leitungsteam</h3>
        <p>Das Leitungsteam der PTA Baden besteht aus etwa 15 jungen Erwachsenen. Viele haben in anderen Pfadiabteilungen w&auml;hrend mehreren Jahren Erfahrungen als Leiterinnen und Leiter gesammelt. Jedoch haben die meisten von uns keine Ausbildung im pflegerischen Bereich. Wir erhoffen uns daher einen f&uuml;r einmal differenzierten Umgang ganz ohne Fokus auf die Beeintr&auml;chtigung des Einzelnen. Deshalb ist die Arbeit in einem so vielseitigen und erfahrenen Team sehr interessant und motivierend. Der personelle Aufwand f&uuml;r die zweiw&ouml;chentlichen bzw. einmal monatlichen Aktivit&aumlen ist gross, denn die Kinder und Jugendlichen bed&uuml;rfen einer intensiven Betreuung. Diesen Anspr&uuml;chen wird die PTA durch die kleineren Gruppen und eine gr&ouml;ssere Anzahl von Leiterinnen und Leitern gerecht.</p>

        <h2>PTA historisch</h2>
        <p>Unsere PTA Abteilung datiert zur&uuml;ck bis ins Jahr 1978, wo der PTA Wolkentrupp in Wohlen gegr&uuml;ndet wurde. Als kleine Gruppe hat die PTA f&uuml;r den Kanton Aargau dann verschiedene Orte durchlebt, von Wohlen war sie einige Zeit in Lenzburg angesiedelt, danach bei der M&auml;dchenabteilung Baden Baregg und seit 2016 ist sie wieder eine eigenst&auml;ndige Abteilung, jedoch mit Sitz in Baden.</p>

        <p><img alt="" src="https://ptabaden.ch/adm_program/system/show_image.php?module=history&amp;file=1481376967.jpg" style="width: 100%;  height: auto; display: block; margin-left: auto; margin-right: auto;" /></p>

        <h2>Mitmachen bei der PTA!</h2>

        <h3>Teilnehmende</h3>
        <p>Haben wir Ihr Interesse geweckt? M&ouml;chten Sie, dass ihr Kind bei der PTA mitmacht? Dann besuchen Sie uns doch mal in n&auml;chster Zeit. Die Informationen zu den Aktivit&auml;ten sind auf unserer Homepage zu finden.</p>

        <h3>Leitende</h3>
        <p>Wir sind froh um Unterst&uuml;tzung im Leitungsteam. Beginnst du dein Studium oder tauchst in die Arbeitswelt ein und hast deshalb nicht mehr soviel Zeit f&uuml;r deine normale Pfadi? Hast du deine Leitungst&auml;tigkeit altershalber (bist also schon 20 Jahre jung) aufgegeben, aber vermisst ab und zu die Pfadiluft? Suchst du eine neue Herausforderung? Dann bist du bei uns genau richtig! Nichts wie los - Kontakt mit der Stufenleitung PTA aufnehmen und deiner Schnupperaktivit&auml;t steht nichts mehr im Weg.</p>
      </div>
    </div>
    ');

// show html of complete page
$page->show();

?>
