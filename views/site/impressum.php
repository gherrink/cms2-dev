<?php

/**
 * @link https://github.com/mrbirne/cms2
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * 
 * @author Maurice Busch <busch.maurice@gmx.net>
 */

use yii\bootstrap\Nav;

/* @var $this yii\web\View */

$this->title = 'Impressum';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
  <div class="col-sm-4">
    <?= Nav::widget([
        'items' => [
            [
              'label' => 'I. Dienstanbieter',
              'url' => ['site/page', 'view' => 'impressum', '#' => 'dienstanbieter']
            ],
            [
              'label' => 'II. Inhalt des Onlineangebotes',
              'url' => ['site/page', 'view' => 'impressum', '#' => 'onlineangebot']
            ],
            [
              'label' => 'III. Verweise und Links',
              'url' => ['site/page', 'view' => 'impressum', '#' => 'verweise']
            ],
            [
              'label' => 'IV. Urheber- und Kennzeichenrecht',
              'url' => ['site/page', 'view' => 'impressum', '#' => 'urheberrecht']
            ],
            [
              'label' => 'V. Datenschutz',
              'url' => ['site/page', 'view' => 'impressum', '#' => 'datenschutz']
            ],
            [
              'label' => 'VI. Rechtswirksamkeit dieses Haftungsausschlusses',
              'url' => ['site/page', 'view' => 'impressum', '#' => 'wirksamkeit']
            ],
            [
              'label' => 'VII. Bemerkungen',
              'url' => ['site/page', 'view' => 'impressum', '#' => 'bemerkungen']
            ],
        ]
    ]); ?>
  </div>
  
  <div class="col-sm-8">
    <h1>Impressum</h1>

    <h2 id="dienstanbieter">I. Dienstanbieter</h2>

    <p>Dienstanbieter dieser Website der Karateverein Samurai Maximiliansau e.V.</p>

    <p>
      Der Karateverein Samurai Maximiliansau e.V. wurde am 28.01.1984 unter dem 
      Namen "YING UND YANG" gegründet. Die Eintragung ins Vereinsregister erfolgte 
      am 19.03.1986 unter der Nr. VR 1459 beim Amtsgericht Landau.
    </p>

    <p>Seit 1987 führt der Verein den Namen "Karateverein Samurai"</p>

    <p>Ziel des Vereines ist es den Kampfsport Karate zu pflegen.</p>

    <p>eMail-Kontakt: karateverein-samurai-maximiliansau@arcor.de</p>

    <p>
      Gerd Schweickert<br>
      Staudenäcker 45<br>
      76744 Wörth am Rhein<br>
    </p>

    <h2 id="onlineangebot">II. Inhalt des Onlineangebotes</h2>

    <p>
      Die Autoren übernehmen keinerlei Gewähr für die Aktualität, Korrektheit, Vollständigkeit 
      oder Qualität der bereitgestellten Informationen. Haftungsansprüche gegen die Autoren, 
      welche sich auf Schäden materieller oder ideeller Art beziehen, die durch die Nutzung 
      oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter 
      und unvollständiger Informationen verursacht wurden, sind grundsätzlich ausgeschlossen, 
      sofern seitens der Autoren kein nachweislich vorsätzliches oder grob fahrlässiges 
      Verschulden vorliegt. Alle Angebote sind freibleibend und unverbindlich. Die Autoren 
      behalten es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne 
      gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung 
      zeitweise oder endgültig einzustellen. 
    </p>

    <h2 id="verweise">III. Verweise und Links</h2>

    <p>
      Bei direkten oder indirekten Verweisen auf fremde Webseiten ("Hyperlinks"), die 
      außerhalb des Verantwortungsbereiches der Autoren liegen, würde eine Haftungsverpflichtung 
      ausschließlich in dem Fall in Kraft treten, in dem die Autoren von den Inhalten Kenntnis 
      haben und es ihnen technisch möglich und zumutbar wäre, die Nutzung im Falle rechtswidriger 
      Inhalte zu verhindern. Die Autoren erklären hiermit ausdrücklich, dass zum Zeitpunkt der 
      Linksetzung keine illegalen Inhalte auf den zu verlinkenden Seiten erkennbar waren. Auf 
      die aktuelle und zukünftige Gestaltung, die Inhalte oder die Urheberschaft der 
      verlinkten/verknüpften Seiten haben die Autoren keinerlei Einfluss. Deshalb distanzieren 
      sie sich hiermit ausdrücklich von allen Inhalten aller verlinkten/verknüpften Seiten, die 
      nach der Linksetzung verändert wurden. Diese Feststellung gilt für alle innerhalb des 
      eigenen Internetangebotes gesetzten Links und Verweise sowie für Fremdeinträge in von 
      den Autoren eingerichteten Gästebüchern, Diskussionsforen, Linkverzeichnissen, Mailinglisten 
      und in allen anderen Formen von Datenbanken, auf deren Inhalt externe Schreibzugriffe 
      möglich sind. Für illegale, fehlerhafte oder unvollständige Inhalte und insbesondere 
      für Schäden, die aus der Nutzung oder Nichtnutzung solcherart dargebotener Informationen 
      entstehen, haftet allein der Anbieter der Seite, auf welche verwiesen wurde, nicht derjenige, 
      der über Links auf die jeweilige Veröffentlichung lediglich verweist.
    </p>

    <h2 id="urheberrecht">IV. Urheber- und Kennzeichenrecht</h2>

    <p>
      Die Autoren sind bestrebt, in allen Publikationen die Urheberrechte der verwendeten 
      Grafiken, Tondokumente, Videosequenzen und Texte zu beachten, von ihnen selbst erstellte 
      Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie Grafiken, 
      Tondokumente, Videosequenzen und Texte zurückzugreifen. Alle innerhalb des Internetangebotes 
      genannten und gegebenenfalls durch Dritte geschützten Marken- und Warenzeichen unterliegen 
      uneingeschränkt den Bestimmungen des jeweils gültigen Kennzeichenrechts und den Besitzrechten 
      der jeweiligen eingetragenen Eigentümer. Allein aufgrund der bloßen Nennung ist nicht der 
      Schluss zu ziehen, dass Markenzeichen nicht durch Rechte Dritter geschützt sind! Das 
      Copyright für veröffentlichte, von den Autoren selbst erstellte Objekte bleibt allein 
      bei den Autoren der Seiten. Eine Vervielfältigung oder Verwendung solcher Grafiken, 
      Tondokumente, Videosequenzen und Texte in anderen elektronischen oder gedruckten Publikationen 
      ist ohne ausdrückliche Zustimmung der Autoren nicht gestattet. 
    </p>

    <h2 id="datenschutz">V. Datenschutz</h2>

    <p>
      Sofern innerhalb des Internetangebotes die Möglichkeit zur Eingabe persönlicher 
      oder geschäftlicher Daten (Emailadressen, Namen, Anschriften) besteht, so erfolgt 
      die Preisgabe dieser Daten seitens des Nutzers auf ausdrücklich freiwilliger Basis. 
      Die Inanspruchnahme und Bezahlung aller angebotenen Dienste ist - soweit technisch 
      möglich und zumutbar - auch ohne Angabe solcher Daten bzw. unter Angabe anonymisierter 
      Daten oder eines Pseudonyms gestattet. Die Nutzung der im Rahmen des Impressums oder 
      vergleichbarer Angaben veröffentlichten Kontaktdaten wie Postanschriften, Telefon- und 
      Faxnummern sowie Emailadressen durch Dritte zur Übersendung von nicht ausdrücklich 
      angeforderten Informationen ist nicht gestattet. Rechtliche Schritte gegen die Versender 
      von sogenannten Spam-Mails bei Verstössen gegen dieses Verbot sind ausdrücklich vorbehalten. 
    </p>

    <h2 id="wirksamkeit">VI. Rechtswirksamkeit dieses Haftungsausschlusses</h2>

    <p>
      Dieser Haftungsausschluss ist als Teil des Internetangebotes zu betrachten, von
      dem aus auf diese Seite verwiesen wurde. Sofern Teile oder einzelne Formulierungen
      dieses Textes der geltenden Rechtslage nicht, nicht mehr oder nicht vollständig
      entsprechen sollten, bleiben die übrigen Teile des Dokumentes in ihrem Inhalt und
      ihrer Gültigkeit davon unberührt. 
    </p>

    <h2 id="bemerkungen">VII. Bemerkungen</h2>

    <p>Copyright © Karateverein Samurai Maximiliansau e.V.<br>Alle Rechte vorbehalten.</p>
  </div>
</div>