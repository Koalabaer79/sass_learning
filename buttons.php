<!DOCTYPE html><html lang="de-DE">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The little Fox - Buttons and Forms</title>
  <meta name="description" content="The little Fox ist ein CSS / SASS Template, welches modular zum Aufbau einer Webseite genommen werden kann. Über einfache Parameter werden die Farben und das Grundlayout festgelegt und somit ist eine Anpassung an die individuellen Bedürfnisse gewährleistet." />
  <link rel="stylesheet" href="css/buttons.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/index.js"></script>
</head>
<body>

  <div id="nav">
    <ul>
      <li><a href="/" title="Home">Home</a></li>
      <li class="active"><a href="buttons.php" title="Buttons Forms">Buttons / Forms</a></li>
      <li><a href="#" title="Nav Point 2">Nav Point 2</a></li>
      <li><a href="#" title="Nav Point 3">Nav Point 2</a></li>
      <li class="last"><a href="#" title="Nav Point Last">Nav Point Last</a></li>
    </ul>
  </div>

  <div class="header">
    <div class="btn_img" onclick="openNav()"></div>
    <div class="logo left"></div>
    <div class="headline">Buttons and Forms</div>
  </div>

  <img src="img/content/1200x665.jpg" alt="The little Fox" class="img_main">

  <div id="content">
    <h1>The little Fox - Buttons and Forms</h1>
    <p>Hier finden Sie eine Auswahl an Buttons und Formular-Elementen, die Sie in für Ihr Layout verwenden können. Wie auf für das Gesamtlayout mit den einzelnen Container-Elementen, kopieren Sie die Elemente und die dazugehörigen CSS-Klassen und fügen Sie diese in Ihrer Homepage ein.</p>

    <div class="int_cont">
      
      <h2>Auflistungen und Aufzählungen</h2>

      <div class="half">
        <h3>Standard-Auflistung</h3>
        <ul class="square">
          <li>Listenpunkt 1</li>
          <li>Listenpunkt 2</li>
          <li>Listenpunkt 3</li>
        </ul>

        <ul class="circle">
          <li>Listenpunkt 1</li>
          <li>Listenpunkt 2</li>
          <li>Listenpunkt 3</li>
        </ul>

        <ul class="disc">
          <li>Listenpunkt 1</li>
          <li>Listenpunkt 2</li>
          <li>Listenpunkt 3</li>
        </ul>
      </div>

      <div class="half">
        <h3>Individuelle-Auflistung</h3>
        <ul class="arrow">
          <li>Listenpunkt 1</li>
          <li>Listenpunkt 2</li>
          <li>Listenpunkt 3</li>
        </ul>

        <ul class="double-circle">
          <li>Listenpunkt 1</li>
          <li>Listenpunkt 2</li>
          <li>Listenpunkt 3</li>
        </ul>

        <ul class="line">
          <li>Listenpunkt 1</li>
          <li>Listenpunkt 2</li>
          <li>Listenpunkt 3</li>
        </ul>
      </div>

    </div>

  </div>

  <footer>

    <div class="foot_nav_1">
        <a href="../../kontaktformular" title="Kontakt">Kontakt</a>
        <a href="../../impressum" title="Impressum">Impressum</a>
        <a href="../../datenschutz" title="Datenschutz">Datenschutz</a>
    </div>

  </footer>

</body>
