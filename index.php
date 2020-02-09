<!DOCTYPE html><html lang="de-DE">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The little Fox - CSS / SASS Template</title>
  <meta name="description" content="The little Fox ist ein CSS / SASS Template, welches modular zum Aufbau einer Webseite genommen werden kann. Über einfache Parameter werden die Farben und das Grundlayout festgelegt und somit ist eine Anpassung an die individuellen Bedürfnisse gewährleistet." />
  <link rel="stylesheet" href="css/index.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/index.js"></script>
</head>
<body>

  <div id="nav">
    <ul>
      <li class="active"><a href="/templates/little-fox/" title="Home">Home</a></li>
      <li><a href="buttons.php" title="Buttons Forms">Buttons / Forms</a></li>
      <li><a href="#" title="Nav Point 2">Nav Point 2</a></li>
      <li><a href="#" title="Nav Point 3">Nav Point 2</a></li>
      <li class="last"><a href="#" title="Nav Point Last">Nav Point Last</a></li>
    </ul>
  </div>

  <div class="header">
    <div class="btn_img" onclick="openNav()"></div>
    <div class="logo left"></div>
    <div class="headline">The little Fox</div>
  </div>

  <img src="img/content/1200x625.jpg" alt="The little Fox" class="img_main">

  <div id="content">
    <h1>The little Fox - CSS / SASS Template</h1>
    <p>Dieses SASS / CSS Template ist ein modular aufgebautes Template, welches mit verschiedenen Containern und Verschachtelungen dieser auftritt. Je nach Bedarf und Layout können die vorgefertigten div-Container individuell verwendet werden. Dieses ist nur eine Sammlung von verschiedenen Möglichkeiten, auf die zurück gegriffen werden kann.</p>
    <p>Über eine "_variables.sass" werden verschiedene Relevante und immer wiederkehrende Parameter festgelegt. So z.B. die Farbgestaltung (Haupt-, Sekundär- und eine so genannte Standardfarbe), oder auch die Gesamtbreite des Inhalts kann einfach angepasst werden.</p>
    <p>Über die obere Navigation werde ich nach und nach weitere Elemente zur modularen Gestaltung einer Webseite hinzufügen. Dazu zählen unter anderem Buttons und Formulare.</p>

    <div class="int_cont">
      <h2>Container Template mit Rahmen</h2>
      <p>Hier haben wir einen Hauptcontainer (Hauptfarbe als Hintergrundfarbe und Sekundärfarbe als Schriftfarbe) mit innenliegenden Containern (Hintergrundfarbe ist Secondary und Schriftfarbe ist Hauptfarbe). Diese innenliegenden Container haben einen äußeren Abstand von "margin: 10px" und inneren Abstand von "padding: 10px".</p>
      <p>Die Bilder sind entweder als Source oder Hintergrundbild im betreffenden div-Container eingebettet.</p>

      <div class="full"><h3>H3 Header</h3><p>100%</p></div>

      <div class="half"><img class="img_src" src="img/content/960x640.jpg" alt="Fuchs"></div>
      <div class="half"><h3>H3 Header</h3><p>50%</p></div>

      <div class="third"><h3>H3 Header</h3><p>33%</p></div>
      <div class="third"><h3>H3 Header</h3><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p></div>
      <div class="third_img"><div class="img_1" id="img_1"></div></div>

      <div class="quarter"><h3>H3 Header</h3><p>25%</p></div>
      <div class="quarter"><h3>H3 Header</h3><p>25%</p></div>
      <div class="quarter"><div class="icon_1"></div><p>25%</p></div>
      <div class="quarter"><h3>H3 Header</h3><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor ...</p></div>
    </div>

    <h2>Container Template ohne Rahmen</h2>
    <p>Hier werden die folgenden Container ohne Margin und nur mit Padding erstellt. Die Farbgestaltung ist je nach Wunsch zwischen Standard (weißer Background und festgelgte Hauptfarbe als Schriftfarbe), main (Background ist die Hauptfarbe, Schriftfarbe die Sekundärfarbe) und secondary (Hintergrund ist Sekund und Schriftfarbe als Hauptfarbe). </p>
    <p>Die Breite der inneren Container kann zwischen full (100%), half (50%) und third (33,33%) unterteilt werden. Die Breite ist full responsive und ab einer festgelegten Größe ($responsive_width) wird diese auf 100% Breite umgeschaltet.</p>
    <p>Die Bilder können entweder als div-Container oder als Source mit "alternative Text" für SEO eingebunden werden.</p>

    <div class="int_cont_2">
      <div class="full main">
        <h2>Full Main</h2>
        <p>Ein voller div-Container auf 100% gesetzte Breite mit der zusätzlichen Farbgebung "main" in der Klasse class="full", welches den Hintergrund auf die Hauptfarbe ($color_main) setzt und die Schriftfarbe auf die Sekundärfarbe ($color_secondary) festlegt. Mit dem Zusatz "secondary" wird diese Farbgebung umgekehrt. Ohne Klassenzusatz wird die Standard-Farbgebung auf weißer Hintergrund und Hauptfarbe als Schriftfarbe festgelegt.</p>
        <p>In diesem Container ist der Titel auf "h2" gesetzt und dementsprechend fett und größer.</p>
      </div>

      <div class="half">
        <h3>Half</h3>
        <p>Div container mit jeweils 50% Bildschirmbreite und in diesem Fall ohne Farbcodierung. Das Bedeutet dass ohne die Zusätze "main" oder "secondary" in der Klasse <i>class="half"</i> diese Farbgebung gilt: weißer Hintergrund und Schiftfarbe gleich der Hauptfarbe ($color_main).</p>
        <p>Bei einer responsiven Bildschirmbreite von 699px werden die Container 100% Breite gesetzt.</p>
        <p>In diesem und allen darauf folgenden Containern ist der Titel auf "h3" eingestellt.</p>
      </div>
      <div class="half secondary">
        <h3>Half Secondary</h3>
        <p>Auch hier ist die Breite 50% jedoch durch den Zusatz "secondary" in der Klasse <i>class="half"</i> die Farbgebung folgend festgelegt wird: Hintergrund gleich der Sekundärfarbe ($color_secondary) und die Schriftfarbe ist die Hauptfarbe</p>
      </div>

      <div class="half_img">
        <img class="img_src" src="img/content/960x640_2.jpg" alt="Fuchs">
      </div>
      <div class="half">
        <h3>Half</h3>
        <p>Dieser Container ist ebenfalls auf 50% der Gesamtbreite ($main_width) oder der Bildschirmbreite angepasst. Jedoch wird der jeweilige andere div-Container mit der Klasse "half_img" und einem eingebundenen Bild <i>img src=""</i> gefüllt. Dieser kann entweder Links oder rechts (respektive im Code darüber oder darunter) angeordnet werden.</p>
        <p>Das responsive Verhalten ist wie bei bei dem oberen div-Container.</p>
      </div>

      <div class="half secondary">
        <h3>Half Secondary</h3>
        <p>Dieses Containerlayout ist gleich des darüber liegenden Containers, nur dass die class="half" mit dem Zusatz "secondary" die Farbänderung hervorruft (Hintergrund: Sekundärfarbe / Schriftfarbe: Hauptfarbe). Mit dem Zusatz "main" werden die Haupt- und Sekundär-Farbgebung umgekehrt.</p>
      </div>
      <div class="half_img">
        <img class="img_src" src="img/content/960x600.jpg" alt="Baby Fuchs">
      </div>

      <div class="half_third">
        <div class="img_1"></div>
      </div>
      <div class="half_twothird">
        <h3>Half Twothird</h3>
        <p>Hier ist das Layout des Containers so aufgebaut, dass 1/3 von einem Bild eingenommen werden. Die übrib gebliebenen 2 Drittel werden von einem Text-Container mit Standard-Hintergrundfarbe und die Textfarbe von der Hauptfarbe des Layouts bestimmt wird</p>
        <p>Selbstverständlich kann man diesen Container mittels den Zusätzen "main" oder "secondary" in der <b>class="half-twothird"</b> farblich anpassen.</p>
        <p>Die Breite des Bildcontainers ist 1/3 des Bildschirms, bzw. 1 Drittel der festgelegten Maximalbreite (<b>$main_width</b>) in der "<i>_variables.sass</i>" Datei.</p>
        <p>Das Bild wird als Div-Hintergrund eingebettet und unter der Klasse "img_1" im CSS verändert. Für weitere Bilder in diesem Layout muss eine weitere Klasse "img_2" im Stile der "img_1" in der SASS-Datei hinzugefügt werden.</p>
      </div>

      <div class="third main">
        <h3>Third Main</h3>
        <ul>
          <li>Breite: 100% / 3 bei mehr als 401px Bildschirmbreite</li>
          <li>Responsive Breite 100% bei 401px Bildschirmbreite</li>
          <li>Hintergrundfarbe: festgelegte Hauptfarbe</li>
          <li>Schriftfarbe: festgelegte Sekundärfarbe</li>
        </ul>
      </div>
      <div class="third">
        <h3>Third</h3>
        <ul>
          <li>Hintergrundfarbe: Bodyfarbe</li>
          <li>Schriftfarbe: festgelegte Hauptfarbe</li>
        </ul>
      </div>
      <div class="third secondary">
        <h3>Third Secondary</h3>
        <ul>
          <li>Hintergrundfarbe: Standard-Hintergrundfarbe</li>
          <li>Schriftfarbe: festgelegte Hauptfarbe</li>
        </ul>
      </div>

    </div>

    <h2>Footer / Fussnavigation</h2>
    <p>Im Folgenden wird der Footer aufgebaut, welcher mit vorgefertigten Social-Media Icons zu den entsprechenden Profilen und Kanälen verlinkt werden kann. Es handelt sich hierbei um eingebundene SVG-Dateien die Individuell mit der Sekundär-Farbe und bei "hover" mit der Standard-Farbe gefüllt werden.</p>
    <p>Des Weiteren Gibt es eine kleine Standard-Fussnavigation zum Kontakt, Impressum und Datenschutzrechtlichen Unterseiten verweist.</p>
    <p>Bei bedarf kann darunter ein regionaler / lokaler oder deutschlandweiter Linkbaum aufgebaut werden, der vorgefertigt in 5 Elementen responsiv aufgebaut wurde. Die Anzahl der Elemente und Links müssen manuell an die Bedürfnisse angepasst werden.</p>

  </div>

  <footer>
    <div class="social_banner">
      <a class="social" href="#" rel="noreferrer" target="_blank" title="Facebook Profile">
        <svg version="1.1" id="facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 448 512" enable-background="new 0 0 448 512" xml:space="preserve" class="social_logo">
         <path class="social" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/>
        </svg>
      </a>
      <a class="social" href="#" rel="noreferrer" target="_blank" title="Instragram Account">
        <svg version="1.1" id="instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 448 512" enable-background="new 0 0 448 512" xml:space="preserve" class="social_logo">
           <path class="social" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
        </svg>
      </a>
      <a class="social" href="#" rel="noreferrer" target="_blank" title="Twitter Profile">
        <svg version="1.1" id="twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 448 512" enable-background="new 0 0 448 512" xml:space="preserve" class="social_logo">
           <path class="social" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
        </svg>
      </a>
      <a class="social" href="#" rel="noreferrer" target="_blank" title="Youtube Channel">
        <svg version="1.1" id="youtube" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 576 512" enable-background="new 0 0 576 512" xml:space="preserve" class="social_logo">
           <path class="social" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
        </svg>
      </a>
      <a class="social" href="#" rel="noreferrer" target="_blank" title="LinkedIn Profile">
        <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 448 512" enable-background="new 0 0 448 512" xml:space="preserve" class="social_logo">
           <path class="social" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
        </svg>
      </a>
      <a class="social" href="#" rel="noreferrer" target="_blank" title="Xing Profile">
        <svg version="1.1" id="xing" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 448 512" enable-background="new 0 0 448 512" xml:space="preserve" class="social_logo">
           <path class="social" d="M162.7 210c-1.8 3.3-25.2 44.4-70.1 123.5-4.9 8.3-10.8 12.5-17.7 12.5H9.8c-7.7 0-12.1-7.5-8.5-14.4l69-121.3c.2 0 .2-.1 0-.3l-43.9-75.6c-4.3-7.8.3-14.1 8.5-14.1H100c7.3 0 13.3 4.1 18 12.2l44.7 77.5zM382.6 46.1l-144 253v.3L330.2 466c3.9 7.1.2 14.1-8.5 14.1h-65.2c-7.6 0-13.6-4-18-12.2l-92.4-168.5c3.3-5.8 51.5-90.8 144.8-255.2 4.6-8.1 10.4-12.2 17.5-12.2h65.7c8 0 12.3 6.7 8.5 14.1z"/>
        </svg>
      </a>
    </div>

    <div class="foot_nav_1">
        <a href="../../kontaktformular" title="Kontakt">Kontakt</a>
        <a href="../../impressum" title="Impressum">Impressum</a>
        <a href="../../datenschutz" title="Datenschutz">Datenschutz</a>
    </div>



    <div class="foot_nav_2">
      <div>
        <h4>Element 1</h4>
        <a href="#" title="Link 1">Link 1</a>
        <a href="#" title="Link 2">Link 2</a>
      </div>
      <div>
        <h4>Element 2</h4>
        <a href="#" title="Link 1">Link 1</a>
        <a href="#" title="Link 2">Link 2</a>
      </div>
      <div>
        <h4>Element 3</h4>
        <a href="#" title="Link 1">Link 1</a>
        <a href="#" title="Link 2">Link 2</a>
      </div>
      <div>
        <h4>Element 4</h4>
        <a href="#" title="Link 1">Link 1</a>
        <a href="#" title="Link 2">Link 2</a>
      </div>
      <div>
        <h4>Element 5</h4>
        <a href="#" title="Link 1">Link 1</a>
        <a href="#" title="Link 2">Link 2</a>
      </div>
    </div>
  </footer>

</body>
