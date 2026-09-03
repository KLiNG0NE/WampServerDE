<?php
//3.2.8 - New file
//3.3.0 - Modification of lines FcgidInitialEnv

$langues['fcgi_mode_link'] = 'Hilfe zum FCGI-Modus';
$langues['fcgi_not_loaded'] = 'PHP kann nicht im FCGI-Modus verwendet werden, da das Apache-Modul „fcgid_module“ nicht geladen ist.';
$langues['fcgi_mode_help'] = <<< 'FCGIEOT'
<h4>PHP im Fast-CGI-Modus mit Wampserver ausführen</h4>
Das CGI (Common Gateway Interface) definiert eine Methode, mit der ein Webserver mit externen Programmen zur Erstellung von Inhalten interagieren kann, die oft als CGI-Programme oder CGI-Skripte bezeichnet werden. Es handelt sich um eine einfache Möglichkeit, dynamische Inhalte auf Ihrer Website einzubinden, wobei Sie die Programmiersprache verwenden können, mit der Sie am besten vertraut sind.

<h5>- Nur eine PHP-Version als Apache-Modul</h5>
Von Anfang an lädt Wampserver PHP als Apache-Modul:
  <code>LoadModule php_module "${INSTALL_DIR}/bin/php/php8.1.1/php8apache2_4.dll"</code>
Dadurch verwenden alle VirtualHosts, Aliase und Projekte dieselbe PHP-Version.
Wird die PHP-Version über das PHP-Menü von Wampmanager verändert, wird diese neue Version überall verwendet.

<h5>- Mehrere PHP-Versionen mit FCGI-Modus</h5>
Seit Wampserver 3.2.8 ist es möglich, PHP im CGI-Modus zu verwenden, d. h., es kann für jeden VirtualHost eine andere PHP-Version festlgelegt werden, deren Add-ons zuvor installiert wurden. Das bedeutet, dass die VirtualHosts nicht mehr zwingend dieselbe PHP-Version verwenden müssen.

Das Apache-Modul „fcgid_module“ (mod_fcgid.so) vereinfacht die Implementierung von CGI
Die Dokumentation befindet sich hier: <a href='https://httpd.apache.org/mod_fcgid/mod/mod_fcgid.html'>mod_fcgid</a>

<h5>- Voraussetzungen</h5>
- 1 Vorhandensein der Datei „mod_fcgid.so“ im Apache-Modulordner.
- 2 Vorhandensein der Zeile zum Laden des Moduls in der Datei „httpd.conf“
  <code>LoadModule fcgid_module modules/mod_fcgid.so</code> (Nicht kommentiert – Kein # am Anfang))
- 3 Vorhandensein der allgemeinen Konfigurationsanweisungen des Moduls „fcgid_module“ in der Datei „httpd.conf“
<code>
&lt;IfModule fcgid_module>
  FcgidMaxProcessesPerClass 300
  FcgidConnectTimeout 10
  FcgidProcessLifeTime 1800
  FcgidMaxRequestsPerProcess 0
  FcgidMinProcessesPerClass 0
  FcgidFixPathinfo 0
  FcgidZombieScanInterval 20
  FcgidMaxRequestLen 536870912
  FcgidBusyTimeout 120
  FcgidIOTimeout 120
  FcgidTimeScore 3
  FcgidPassHeader Authorization
  Define PHPROOT ${INSTALL_DIR}/bin/php/php
&lt;/IfModule>
</code>
Diese drei Punkte 1, 2 und 3 werden mit dem Update auf Wampserver 3.2.8 automatisch erledigt.

<h5>- Erstellen eines FCGI-VirtualHosts</h5>
- Nach dem Update auf Wampserver 3.2.8 lässt sich über die Seite „http://localhost/add_vhost.php“ ganz einfach ein FCGI-VirtualHost hinzufügen.
Die Auswahl der zu verwendenden PHP-Version ist auf die in Ihrem Wampserver installierten PHP-Add-ons beschränkt, wodurch ein PHP-Versionsfehler vermieden wird.
Wenn Sie in einem VirtualHost eine PHP-Version angeben, die in Wampserver nicht vorhanden ist, führt dies zu einem Apache-Fehler und einem „Absturz“ von Apache.

- Soll einen bestehender VirtualHost geändert werden, um den FCGI-Modus mit einer bereits in den Wampserver-PHP-Add-ons vorhandenen PHP-Version hinzuzufügen, muss lediglich die Seite http://localhost/add_vhost.php aufgerufen werden, und das Formular zur Bearbeitung des VirtualHosts geöffnet werden. Dort kann mit nur drei Klicks der FCGI-Modus zum VirtualHost hinzugefügt, die PHP-Version geändert oder der FCGI-Modus entfernt werden.
Damit die Änderungen wirksam werden, muss der Wampserver aktualisiert werden.
Auf derselben Seite http://localhost/add_vhost.php kann über das Formular zur Bearbeitung von Aliasen ebenfalls mit jeweils drei Klicks der FCGI-Modus zu einem Alias hinzugefügt, die PHP-Version geändert oder der FCGI-Modus entfernen werden.

<h5>- Some details</h5>
Um den FCGI-Modus zu einem bestehenden VirtualHost hinzuzufügen, werden einfach die folgenden Anweisungen direkt vor dem &lt;/VirtualHost>-Ende dieses VirtualHosts eingefügt:
<code>
  &lt;IfModule fcgid_module>
    Define FCGIPHPVERSION "7.4.27"
    FcgidInitialEnv PHPRC "${PHPROOT}${FCGIPHPVERSION}/php.ini"
    &lt;Files ~ "\.php$">
      Options +Indexes +Includes +FollowSymLinks +MultiViews +ExecCGI
      AddHandler fcgid-script .php
      FcgidWrapper "${PHPROOT}${FCGIPHPVERSION}/php-cgi.exe" .php
    &lt;/Files>
  &lt;/IfModule>
</code>
Die PHP-Version muss als PHP-Add-on in Ihrem Wampserver vorhanden sein und kann geändert werden.
Umgekehrt führt das Entfernen dieser Zeilen dazu, dass der VirtualHost wieder auf die PHP-Version zurückgreift, die als Apache-Modul verwendet wird.

Bei „Alias“ ist es etwas komplizierter: Sie müssen die oben genannten Zeilen in zwei Teilen hinzufügen, wobei der erste Teil lautet:
<code>
&lt;IfModule fcgid_module>
  Define FCGIPHPVERSION "7.4.27"
  FcgidCmdOptions ${PHPROOT}${FCGIPHPVERSION}/php-cgi.exe \
  InitialEnv PHPRC=${PHPROOT}${FCGIPHPVERSION}/php.ini
&lt;/IfModule>
</code>
direkt vor der &lt;Directory... Direktive.
Der zweite Teil:
<code>
&lt;IfModule fcgid_module>
  &lt;Files ~ "\.php$">
    Options +Indexes +Includes +FollowSymLinks +MultiViews +ExecCGI
    AddHandler fcgid-script .php
    FcgidWrapper "${PHPROOT}${FCGIPHPVERSION}/php-cgi.exe" .php
  &lt;/Files>
&lt;/IfModule>
</code>
innerhalb der &lt;Directory...>..&lt;/Directory> Anweisung, um beispielsweise für jeden Alias die folgende Struktur zu erhalten:
<code>
Alias /myalias "g:/www/mydir/"
&lt;IfModule fcgid_module>
  Define FCGIPHPVERSION "7.4.27"
  FcgidCmdOptions ${PHPROOT}${FCGIPHPVERSION}/php-cgi.exe \
  InitialEnv PHPRC=${PHPROOT}${FCGIPHPVERSION}/php.ini
&lt;/IfModule>
&lt;Directory "g:/www/mydir/">
  Options Indexes FollowSymLinks
  AllowOverride all
  Require local
  &lt;IfModule fcgid_module>
    &lt;Files ~ "\.php$">
      Options +Indexes +Includes +FollowSymLinks +MultiViews +ExecCGI
      AddHandler fcgid-script .php
      FcgidWrapper "${PHPROOT}${FCGIPHPVERSION}/php-cgi.exe" .php
    &lt;/Files>
  &lt;/IfModule>
&lt;/Directory>
</code>

FCGIEOT;

?>