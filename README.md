# Chat-GPT-4.0-basierte Webseite

In diesem Repository stelle ich eine Webseite vor, die ich als Teil meines Projekts zur beruflichen Neuorientierung entwickelt habe. Die Webseite wurde unter Verwendung von GPT-4.0 erstellt. Ich verfüge über grundlegenden HTML- und CSS-Kenntnisse.

## Projektziele
- Verzicht auf ein fertiges Content-Management-System und Verwendung von Filezilla zum Hochladen von Inhalten.
- Anlehnung des Designs an das Linkedin-Design, einschließlich Grafikanordnung und Schriftarten, ohne auf Google-Fonts zurückzugreifen.
- Integration eines PHP-basierten Kontaktformulars zum Schutz der E-Mail-Adresse vor Auslesen.
- Erstellung eines responsiven Designs, das sich an unterschiedliche Endgeräte anpasst (z.B. funktionierende Tabellen auf Smartphones).
- Responsiver Content: Textlänge passt sich automatisch an das Endgerät an. Es wurden drei Endgeräte berücksichtigt (Desktop, Tablet, Mobile). Textlängen müssen entsprechend angepasst werden

## Technische Details
- Die Webseite ist zunächst per Meta-Tag auf "noindex" gesetzt.
- Es wurde darauf verzichtet, Google Fonts aufgrund von Abmahnrisiken extern einzubinden. Stattdessen wurde die Lato Fonts runtergeladen und dann eingebunden.
- Mittels Textabsätzen in HTML <p></p> und class Attributen werden über das CSS Bedingungen für die Ausspielung der Textabsätze definiet. In diesem Fall ist die Screen-Größe des Users das Kriterium für die Textausspielung

```HTML
<p class="text-desktop"></p>
<p class="text-tablet"></p>
<p class="text-mobile"></p>
```
Die Klassen werden dann über das CSS aufgegriffen und mit Bedingungen versehen

## Verwendete Tools
- GPT-4.0 für die Entwicklung des überwiegenden Webdesigns
- Snappa.com für die Erstellung des Header-Bildes (LinkedIn-Profil-Vorlage)
- Fotor.com zum Zuschneiden des Profilbildes, das im Header integriert ist
- TermFeed für das Cookie-Consent-Banner
- e-recht24 für das Impressum
- WBS-Legal Datenschutzerklärungs-Generator

## Verbaute Tools
- Google Analytics 4
- Google Search Console
- Google Tag Manager

## Bildgrößen
- Hintergrundbild: 1584px x 396px (LinkedIn-Profil) - habe ich in Snappa gebaut
- Logo für Referenzen: 150px x 100px

## Zusätzliche Funktionen
- Sende-Button mit Hover-Effekt
- Responsive Tabelle für berufliche Stationen
- Captcha-Funktion zur Spam-Reduzierung

## Wichtiger Hinweis
Um den bereitgestellten Code anpassen zu können, benötigen Sie grundlegende Kenntnisse in HTML und CSS. Trotz der vielen guten Bausteine von GPT-4 müssen immer wieder Anpassungen vorgenommen werden.

## Live-Version der Webseite
Die vollständige Webseite ist hier verfügbar: https://florian-priegnitz.de
