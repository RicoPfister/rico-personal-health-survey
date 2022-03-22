# rico-personal-health-survey

## Version

Gut funktionierende PHP-Mobile-First-Umfrage mit folgenden Hilfsmitteln erstellt:
* Mit Figma die 3 Seiten skizziert (PHP-includes fehlen):<br>
https://www.figma.com/file/cYCf32samkQNS41M9TQHtX/Untitled?node-id=0%3A1
* 3 PHP-Files erstellt, die mit 3 Get-Methode-Buttons arbeiten (+1 leere Index-Startseite):<br>
  * starting.php: Willkommenstext und Alterseingabe
  * collection.php: Dynamische Darstellung der 10 Fragen und der Antwortmöglichkeiten mit JS-Validierung/Labelling
  * feedback.php: Dankeschöntext und Auswertungsberechnung sowie deren (dynamische) numerische und bildliche Darstellung
* Weitere Files:
  * survey.css: u.a. für Bootstrap-Anpassungen
  * survey.js: Form-Validierung und Slider-Labels
  * header.php und footer.php: Auslagerung der navbar und des Copyright-Hinweises
  * survey_questions_answers: Auslagerung der Fragen/Kommentarantworten zwecks besserer Übersichtlichkeit
  * evaluation.php: Auslagerung der Auswertung zwecks besserer Übersichtlichkeit
* Bootstrap Mobile-first umgesetzt

## Nützlicher Code

* Execute a JavaScript when a user writes something in an <input> field:<br>
Beispiel 1: \<input type="text" oninput="myFunction()"\><br>
Beispiel 2: slider.oninput = function() {output.innerHTML = this.value;}


## Arbeitsplanung (Versuch einer Planung)

15.03.2022
1. Wireframe auf Figma erstellen: 3 Seiten und ausgelagerter PHP-Header/Footer
2. Ausgelagerte Navbar und Copyright-Zeile in PHP erstellen
3. Grundgerüst der 3 Seiten aus 1 ausgelagertem PHP/Bootstrap-Seite erstellen

16.03.2022
1. Survey-Form hinzugefügt
2. Javascript-Validation hinzugefügen

17.03.2022
1. Survey-Auswertung hinzugefügen

## Das mache ich beim nächsten Projekt anders
1. Restliche Zeit nicht mit Design-Schnickschnack verschwenden (das Erstellen eines eigenen Form-Range-Slider
war eine Qual), lieber anderen helfen (andere scheinen grundlegendere Codingprobleme zu haben...).

