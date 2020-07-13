<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php
      $page = "plugins";
      $language = "de";
      include_once "head.php";
    ?>
    <title>
      Magellan Plugins - Statistics Plugin
    </title>
  </head>
  <body>
    <div id="container">
      <?php
        include_once "navi_".$language.".php";
        include_once "header.php"; 
      ?>
      <div id="center">
        <h3>
          Statistics Plugin
        </h3>
        <table summary="" cellspacing="0" cellpadding="1" border="0" class=
        "plugin">
          <tr class="plugin">
            <td class="plugin">
              Name:
            </td>
            <td class="plugin">
              Statistics Plugin
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Version:
            </td>
            <td class="plugin">
              0.7.alpha
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Kurzbeschreibung:
            </td>
            <td class="plugin">
              Zeigt Statistiken zu historischen Daten an
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Autor:
            </td>
            <td class="plugin">
              Thoralf Rickert
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Website:
            </td>
            <td class="plugin">
              -
            </td>
          </tr>
          <tr class="plugin">
            <td class="plugin">
              Download:
            </td>
            <td class="plugin">
              <a href=
              "download_de.php#plugins">https://magellan.narabi.de/</a>
            </td>
          </tr>
        </table>
        <p>
          Mit Hilfe des Statistik Plugins kann man sich den historischen Verlauf
          seiner Einheiten, Regionen, Schiffe und Gebäude anschauen. Das Plugin
          sammelt über die Zeit alle Informationen von Runde zu Runde und zeigt
          diese in einem Dock an. Einzige Voraussetzung: Man muss die neuen 
          Reports immer einem "Basis-Report" hinzufügen, weil das Plugin die 
          Zusatzdaten in einer Datei speichert, die nur zu dem Namen eines Reports
          passt.
        </p>
        <p>
          <img src="statisticsplugin/talente.png" alt=""/>
        </p>
        <p>
          <img src="statisticsplugin/punktestatistik.png" alt=""/>
        </p>
        <p>
          <img src="statisticsplugin/handelspreise.png" alt=""/>
        </p>
        <p>
          <img src="statisticsplugin/regionsuebersicht.png" alt=""/>
        </p>
        <p>
          Dieses Plugin ist noch in der Entwicklungsphase und ist deshalb noch
          nicht besonders ausgereift. Nutzung auf eigenen Gefahr.
        </p>
      </div>
    </div>
  </body>
</html>

