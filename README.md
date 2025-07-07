# Mensa Applikation

Dieses kleine PHP-Projekt verwaltet Menüs und Benutzer einer Mensa. Die Anwendung stammt ursprünglich aus dem Jahr 2015 und besteht aus einfachen PHP-Skripten ohne Framework.

## Voraussetzungen
- PHP >= 7.4
- MySQL Datenbank

## Einrichtung
1. Datenbank aus `db/mensaapp.sql` importieren.
2. Zugangsdaten in `config/connection.php` anpassen oder über Umgebungsvariablen setzen.
3. Projekt im Webserver bereitstellen und `index.php` aufrufen.

## Hinweis
Das Projekt wurde nur minimal modernisiert, um Kompatibilität zu gewährleisten. Für einen produktiven Einsatz sollten zusätzliche Sicherheitsmaßnahmen wie CSRF-Schutz und ein Framework in Betracht gezogen werden.
