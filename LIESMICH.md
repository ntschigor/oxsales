sales - Umsatzauswertung
=================================================

How to install
--------------
1.    Modul in das Shopverzeichnis kopieren (FTP / SFTP):

          modules/te/sales/
          
2.    Kopieren Sie die Datei "vendormetadata.php" aus /modules/te/setup/ nach

            modules/te/

3.    Modul aktivieren.

4.    tmp/ Verzeichnis leeren und views updaten.


How to use
----------
Gehen Sie unter "Bestellungen verwalten" -> "Umsatz"



Features
--------

Im Standard Oxid Backend lassen sich die Umsatzwerte nur für heute und Total auslesen. Dieses kleine Modul liest die Umsatzzahlen für
- heute
- gestern
- Woche
- letzte Woche
- Monat
- letzter Monat
- vorletzter Monat
- Jahr 

aus. Stornos werden berücksichtigt.

Die Ausgabe erfolgt auf einer separaten Seite im Oxid-Backend


Notice
------------
Getestet in OXID CE 4.8.x eShop
Für Oxid CE / PE ab 4.7.x


Version
-------
Aktuelle Version ist 1.0