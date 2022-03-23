# rico-personal-health-survey

## PHP allgemein
* Es ist wohl einfacher einzelne "fertige" PHP-Seiten zu erstellen als alles 1 File erledigen zu lassen (habe dan angefangen Inhalte auszulagern...)
* implode verbindet Array-Elemente zu String: echo implode(", ", $array);
* Habe mit GET gearbeitet, statt POST, um Fehler direkt am PHP? in der URL ablesen zu können

## Unterschiede PHP zu JS
* Arraylängencheck mit count() statt .length
* Verkettung durch . und nicht durch +

## Bootstrap
* Standartelemente (nur) mit CSS abzuändern führte zu massiven Anzeigeproblemen in unterschiedlichen Browsern und Bildschirmauflösungen.
* Range-Slider in Desktop-Ansicht vertikal versuchen auszurichten, um Änderungen an der Mobile-Ansicht zu minimieren.

## Was fehlt oder was hätte ich anders machen können
* <?php condition ?> noch nicht verwendet
* form bootstrap aria-describedby fehlen

