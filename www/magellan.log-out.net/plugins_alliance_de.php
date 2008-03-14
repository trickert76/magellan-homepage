<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="SHORTCUT ICON" href="/favicon.ico" />
    <link rel="alternate stylesheet" href="http://eressea.sourceforge.net/magellan/classic.css" type="text/css" />
    <link rel="stylesheet" href="http://eressea.sourceforge.net/magellan/default.css" type="text/css" />
    <link rel="stylesheet" href="theme.css" type="text/css" />
    <title>Magellan Plugins - Alliance Plugin</title>
  </head>
  <body>
    <div id="container">
<?php
  $page = "plugins";
  $language = "de";
  include_once "navi_de.php";
  include_once "header.php"; 
?>
      <div id="center">
        <h3>
          Alliance Plugin
        </h3>
        <p>
          <table summary="" cellspacing="0" cellpadding="1" border="0" style="margin-left:10px;">
            <tr>
              <td>Name:</td>
              <td>Alliance Plugin</td>
            </tr>
            <tr>
              <td>Version:</td>
              <td>0.1.alpha</td>
            </tr>
            <tr>
              <td>Kurzbeschreibung:</td>
              <td>Serverbasierte Verwaltung von Reports und Befehlen</td>
            </tr>
            <tr>
              <td>Autor:</td>
              <td>Thoralf Rickert</td>
            </tr>
            <tr>
              <td>Website:</td>
              <td><a href="http://odyssey.log-out.net/" class="externalLink">http://odyssey.log-out.net/</a></td>
            </tr>
            <tr>
              <td>Download</td>
              <td><a href="http://odyssey.log-out.net/download.php" class="externalLink">http://odyssey.log-out.net/download.php</a></td>
            </tr>
          </table>
        </p>
        <p>
          Dieses Plugin erm�glicht es, das mehrere Parteien einen einzelnen
          Report verwenden, um ihre Befehle Partei-�bergreifend zu verwalten.
          Auf diese Weise kann z.B. eine Person alle Einheiten der Allianz
          auf einer Insel oder in einer Region bedienen. Alle anderen Parteien
          verbinden dann diese Befehle mit den eigenen in anderen Regionen
          und schicken Sie getrennt zum Eressea Server. 
        </p>
        <p>
          Achtung: Dieses Plugin liegt ein kleines bisschen in der Grauzone
          der Regeln von Eressea. Normalerweise sollte eine Person nur die
          Befehle f�r eine Partei machen. Die Befehle f�r alle andere Parteien
          sollen der entsprechenden Person via Mail oder Sprache mitgeteilt
          werrden, um den Rollenspielcharakter zu erhalten. Dieses Plugin
          k�rzt dieses Prozess 'etwas' ab.
        </p>
        <p>
          Au�erdem ist anzumerken, dass dieses Plugin nur dann genutzt werden
          kann, wenn alle ihren kompletten Report mit den anderen teilen.
          So sieht jeder alles. Zurzeit ist es nicht m�glich, diese Sichtbarkeit
          f�r einzelne Parteien einzuschr�nken. Dieses Feature ist geplant,
          aber die Umsetzung gestaltet sich schwierig. Denk mal alleine an
          die m�glichlichen Berechtigungsstufen f�r eine Partei, eine Insel,
          eine Region oder eine Einheit. Au�erdem ist wichtig anzumerken, dass
          der Serverbetreiber naturgem�� immer alle Reportdetails sehen k�nnte,
          weil auf seinem Rechner der Gesamtreport liegt.
        </p>
      </div>
    </div>
  </body>
</html>

