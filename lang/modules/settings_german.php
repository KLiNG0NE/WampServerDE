<?php
//
// Translation by KLiNG0NE  (2026-09-03)
//
// Default German language file for
// Projects and VirtualHosts sub-menus
// Settings and Tools right-click sub-menus
// 3.0.7 add $w_listenForApache - $w_AddListenPort - $w_deleteListenPort - $w_settings['SupportMariaDB']
// $w_settings['DaredevilOptions']
// $w_Size - $w_EnterSize - $w_Time - $w_EnterTime - $w_Integer - $w_EnterInteger - $w_add_VirtualHost
// 3.0.8 $w_settings['SupportMySQL'] - $w_portUsedMaria - $w_testPortMariaUsed
// 3.0.9 $w_ext_zend
// 3.1.1 $w_defaultDBMS - $w_invertDefault - $w_changeCLI - $w_misc
// $w_settings['ShowphmyadMenu'] - $w_settings['ShowadminerMenu']
// 3.1.2 $w_reinstallServices - $w_settings['mariadbUseConsolePrompt'] - $w_settings['mysqlUseConsolePrompt']
// $w_enterServiceNameAll - $w_settings['NotVerifyPATH'] - $w_MysqlMariaUser
// 3.1.4 $w_settings 'NotVerifyTLD' 'Cleaning' 'AutoCleanLogs' 'AutoCleanLogsMax' 'AutoCleanLogsMax' 'AutoCleanTmp' 'AutoCleanTmpMax' 'iniCommented'
// $w_wampReport - $w_dowampReport
// 3.1.9 $w_settings 'BackupHosts'
// 3.2.0 $w_verifySymlink  - $w_settings['NotVerifyHosts']
// 3.2.1 $w_addingVer - $w_addingVerTxt - $w_goto - $w_FileRepository
// 3.2.2 $w_MysqlMariaUser and $w_EnterSize modified -  - $w_MySQLsqlmodeInfo $w_mysql_mode $w_phpMyAdminHelp $w_PhpMyAdMinHelpTxt
// 3.2.3 https for wampserver.aviatechno
// 3.2.5 $w_emptyLogs - $w_emptyPHPlog - $w_emptyApaErrLog - $w_emptyApaAccLog - $w_emptyMySQLog - $w_emptyMariaLog - $w_emptyAllLog
//       $w_testAliasDir - $w_verifyxDebugdll - $w_apacheLoadedIncludes - $w_settings 'ShowWWWdirMenu'
// 3.2.6 $w_compareApache - $w_versus - $w_restorefile - $w_restore - $w_apache_restore - $w_ApacheRestoreInfo - $w_apache_restore
//       $w_ApacheCompareInfo - $w_apacheDefineVariables - $w_Refresh_Restart - $w_Refresh_Restart_Info
//       $w_checkUpdates - $w_PhpMyAdminBigFileTxt - $w_apacheTools - $w_PHPloadedExt
//       $w_settings 	apacheCompareVersion - apacheRestoreFiles - apacheGracefulRestart - LinksOnProjectsHomePage
//                    ApacheWampParams - apachePhpCurlDll
//       Suppress : $w_enterServiceNameApache - $w_enterServiceNameMysql - $w_enterServiceNameAll
// 3.2.7 $w_showExcludedPorts
// 3.2.8 $w_phpNotExists - LinksOnProjectsHomeByIp - CheckVirtualHost - $w_PHPversionsUse - $w_All_Versions
//       $w_settings 	ScrollListsHomePage
// 3.2.9 $w_phpparam_obs - $w_ApacheCompiledIn - $w_ApacheDoesNotIf - $w_mod_not_disable
//       $w_NoDefaultDBMS
// 3.3.0 $w_settings WampserverBrowser BrowserChange
//       Suppress apachePhpCurlDll
// 3.3.2 $w_PhpMyAdminGoHidedb - $w_PhpMyAdminGoNoPassword - $w_ConvertHttps - $w_wampHttpsHelp - $w_wampHttpsHelpTxt
//       $w_MariaDBMySQLHelp - $w_MariaDBMySQLHelpTxt - $w_settings httpsReady
//       suppress $w_settings['ShowphmyadMenu']
// 3.3.3 suppress $w_MariaDBMySQLHelpTxt transformed into file 'files\mariadb_mysql_english.rtf'
//       suppress $w_wampHttpsHelpTxt    ........... .... .... 'files\wampmodehttps_english.rtf'
// 3.3.4 $w_AdminerHelpTxt - $w_NeedVirtualhost
// 3.3.5 $w_settings LocalhostHttps
// 3.3.6 $w_wampHttpsHelpAuto - $w_wampHttpsHelpManual
// 3.3.7 $w_ExtNotLoaded
//      suppress $w_PhpMyAdMinHelpTxt and $w_PhpMyAdminBigFileTxt transformed into file 'files\phpmyadmin_english.rtf'
// 3.3.8 $w_ApacheDirectives - $w_DataBasesManagement - CleanLogs_SwitchVersion
// 3.4.0 LinksChooseIp - $w_reinstallWait

// Projects sub-menu
$w_projectsSubMenu = 'Projekte';
// VirtualHosts sub-menu
$w_virtualHostsSubMenu = 'VirtualHosts';
$w_add_VirtualHost = 'VirtualHost-Verwaltung';
$w_aliasSubMenu = 'Aliase';
$w_portUsed = 'Port genutzt von Apache: ';
$w_portUsedMysql = 'Port genutzt von MySQL: ';
$w_portUsedMaria = 'Port genutzt von MariaDB : ';
$w_testPortUsed = 'Teste genutzten Port: ';
$w_portForApache = 'Port für Apache';
$w_listenForApache = 'Port zu Apache hinzufügen';
$w_portForMysql = 'Port für MySQL';
$w_testPortMysql = 'Teste Port 3306';
$w_testPortMysqlUsed = 'Teste genutzten MySQL-Port: ';
$w_testPortMariaUsed = 'Teste genutzten MariaDB-Port: ';

// Right-click Settings
$w_wampSettings = 'Wamp-Einstellungen';
$w_settings = array(
	'urlAddLocalhost' => 'localhost zu URL hinzufügen',
	'VirtualHostSubMenu' => 'VirtualHosts-Untermenü',
	'AliasSubmenu' => 'Alias-Untermenü',
	'ProjectSubMenu' => 'Projekte-Untermenü',
	'HomepageAtStartup' => 'Wampserver-Homepage bei Start',
	'MenuItemOnline' => 'Menüpunkt: Online / Offline',
	'ItemServicesNames' => 'Werkzeuge-Menüpunkt: Ãndere Dienst-Namen',
	'CheckVirtualHost' => 'VirtualHost-Definitionen prüfen',
	'NotCheckVirtualHost' => 'Nicht VirtualHost-Definitionen prüfen',
	'NotCheckDuplicate' => 'Nicht auf doppelte Server-Namen prüfen',
	'VhostAllLocalIp' => 'Erlaube VirtualHost lokale IPs anders als 127.*',
	'SupportMySQL' => 'Aktiviere MySQL',
	'SupportMariaDB' => 'Aktiviere MariaDB',
	'DaredevilOptions' => 'Achtung: Risiko! Nur für Experten.',
	'ShowadminerMenu' => 'Adminer in Menü anzeigen',
	'mariadbUseConsolePrompt' => 'Standard-Konsolen-Prompt für MariaDB anpassen',
	'mysqlUseConsolePrompt' => 'Standard-Konsolen-Prompt für MySQL anpassen',
	'NotVerifyPATH' => 'PATH nicht prüfen',
	'NotVerifyTLD' => 'TLD nicht prüfen',
	'NotVerifyHosts' => 'hosts-Datei nicht prüfen',
	'Cleaning' => 'Automatische Bereinigung',
	'AutoCleanLogs' => 'Log-Dateien automatisch bereinigen',
	'AutoCleanLogsMax' => 'Zeilen vor Bereinigung',
	'AutoCleanLogsMin' => 'Zeilen nach Bereinigung',
	'AutoCleanTmp' => 'tmp-Ordner automatisch bereinigen',
	'AutoCleanTmpMax' => 'Anzahl der Dateien vor Bereinigung',
	'CleanLogs_SwitchVersion' => 'Log-Dateien bei Versions-Änderung leeren',
	'ForTestOnly' => 'Nur zu Test-Zwecken',
	'iniCommented' => 'Auskommentierte php.ini-Direktiven (; am Anfang der Zeile)',
	'BackupHosts' => 'hosts-Datei sichern',
	'ShowWWWdirMenu' => 'Zeige www-Ordner in Menü',
	'ApacheWampParams' => 'WampServer-Einstellungen für Apache',
	'apacheCompareVersion' => 'Vergleich von Apache-Einstellungen aktivieren',
	'apacheRestoreFiles' => 'Wiederherstellung von Apache-Dateien erlauben',
	'apacheGracefulRestart' => 'Sanften Neustart von Apache aktivieren',
	'LinksOnProjectsHomePage' => 'Links zu Projekten auf Homepage erlauben',
	'LinksOnProjectsHomeByIp' => 'Links zu Projekten über \'lokale Link-IP\'',
	'LinksChooseIp' => 'Lokale IP wählen',
	'ScrollListsHomePage' => 'Scrollbare Listen auf Homepage aktivieren',
	'WampserverBrowser' => 'WampServer-Browser',
	'BrowserChange' => 'WampServer-Browser einstellen',
	'httpsReady' => 'WampServer ist bereit für HTTPS-Unterstützung',
	'AllowLocalhostHttps' => 'HTTPS für localhost aktivieren',
);

// Right-click Tools
$w_wampTools = 'Werkzeuge';
$w_restartDNS = 'DNS neu starten';
$w_testConf = 'Syntax von httpd.conf prüfen';
$w_testServices = 'Status der Dienste prüfen';
$w_changeServices = 'Namen der Dienste ändern';
$w_compilerVersions = 'Prüfe Compiler VC, Kompatibilität und ini-Dateien';
$w_UseAlternatePort = 'Nutze einen anderen Port als %s';
$w_AddListenPort = 'Einen Listen-Port für Apache hinzufügen';
$w_vhostConfig = 'VirtualHost anzeigen, der von Apache geprüft wurde';
$w_apacheLoadedModules = 'Geladene Apache-Module anzeigen';
$w_apacheLoadedIncludes = 'Von Apache geladene Includes anzeigen';
$w_apacheDefineVariables = 'Apache-Variablen anzeigen (Definieren)';
$w_showExcludedPorts = 'Vom System ausgeschlossenen Ports anzeigen';
$w_testAliasDir = 'Beziehungen prüfen: Alias  <-> Verzeichnis';
$w_verifyxDebugdll = 'Nicht verwendete xDebug-DLLs prüfen';
$w_empty = 'Leer';
$w_misc = 'Verschiedenes';
$w_emptyAll = 'ALLES leeren';

$w_emptyLogs = 'Protokolle leeren';
$w_emptyPHPlog = 'PHP-Fehlerprotokoll leeren';
$w_emptyApaErrLog = 'Apache-Fehlerprotokoll leeren';
$w_emptyApaAccLog = 'Apache-Zugriffsprotokoll leeren';
$w_emptyMySQLog = 'MySQL-Protokoll leeren';
$w_emptyMariaLog = 'MariaDB-Protokoll leeren';
$w_emptyAllLog ='Alle Protokolldateien leeren';

$w_dnsorder = 'DNS-Suchreihenfolge prüfen';
$w_deleteVer = 'Ungenutzte Versionen löschen';
$w_addingVer = 'Versionen von Apache, PHP, MySQL, MariaDB usw. hinzufügen.';
$w_deleteListenPort = 'Einen Apache-Listen-Port löschen';
$w_delete = 'Löschen';
$w_defaultDBMS = 'Standard-DBMS:';
$w_NoDefaultDBMS = 'Standard-DBMS : keins';
$w_invertDefault = 'Standard-DBMS invertieren ';
$w_changeCLI = 'PHP-CLI-Version ändern';
$w_reinstallServices = 'Alle Dienste neu installieren';
$w_reinstallWait = 'Kann länger als 30 Sek. dauern - Bitte warten';
$w_wampReport = 'Wampserver-Konfigurationsbericht';
$w_dowampReport = 'Erstelle '.$w_wampReport;
$w_verifySymlink = 'Symbolische Links prüfen';
$w_goto = 'Gehe zu:';
$w_FileRepository = 'Links zu Dateien und Add-ons aus den Wampserver-Repositorys';
$w_compareApache = 'Vergleich der Apache-Einstellungen';
$w_versus = 'gegenüber';
$w_restorefile = 'Bei der Installation von Apache gespeicherte Dateien wiederherstellen';
$w_restore = 'Wiederherstellen';
$w_checkUpdates = 'Nach Updates suchen';
$w_apacheTools = 'Apache-Werkzeuge';
$w_PHPloadedExt = 'Geladene PHP-Erweiterungen anzeigen';
$w_PHPversionsUse = 'Verwendete PHP-Versionen anzeigen';

//Miscellaneous
$w_ext_spec = 'Spezielle Erweiterungen';
$w_ext_zend = 'Zend-Erweiterungen';
$w_phpparam_info = 'Nur zur Information';
$w_ext_nodll = 'Keine DLL-Datei';
$w_ext_noline = "Keine 'Erweiterung='";
$w_mod_fixed = "Irreversibles Modul";
$w_mod_not_disable = "Diese Module sollten nicht deaktiviert werden";
$w_no_module = 'Keine Moduldatei';
$w_no_moduleload = "Kein 'LoadModule'";
$w_mysql_none = "keine";
$w_mysql_user = "User-Mode";
$w_mysql_default = "standardmäßig";
$w_mysql_mode = "Erläuterungen zum SQL-Modus";
$w_apache_restore = "Warnung: Wiederherstellung von Apache;";
$w_apache_compare = "Warnung: Vergleich der Apache-Einstellungen";
$w_Refresh_Restart = "Hilfe ".$w_refresh.' - '.$w_restartWamp;
$w_Size = "Größe";
$w_Time = "Zeit";
$w_Integer = "Ganzzahl";
$w_phpMyAdminHelp = "Hilfe PhpMyAdmin";
$w_wampHttpsHelp = "Hilfe zum HTTPS-Modus von Wampserver";
$w_wampHttpsHelpAuto = "Hilfe zum 'automatischen' HTTPS-Modus von Wampserver";
$w_wampHttpsHelpManual = "Hilfe zum 'manuellen' HTTPS-Modus von Wampserver";
$w_phpNotExists = 'PHP-Version existiert nicht';
$w_All_Versions = 'Alle Versionen';
$w_phpparam_obs = 'Einstellungen veraltet | Gelöscht | Neu';
$w_ApacheCompiledIn = 'Integrierte Module';
$w_ApacheDoesNotIf = 'Verwendet nicht <IfModule ModName>.';
$w_PhpMyAdminGoHidedb = 'Native Datenbanken ausblenden';
$w_PhpMyAdminGoNoPassword = 'Verbindung ohne Passwort zulassen';
$w_ConvertHttps = 'HTTPS-Modus für VirtualHost';
$w_MariaDBMySQLHelp = "Hilfe MariaDB - MySQL";
$w_NeedVirtualhost = "Hilfe: Die Notwendigkeit von VirtualHost";
$w_ExtNotLoaded = "PHP-Erweiterung nicht geladen:";
$w_ApacheDirectives = "Konfigurationsanweisungen";
$w_DataBasesManagement = "Datenbankverwaltung";

// PromptText for Aestan Tray Menu type: prompt variables
// May have \r\n for multilines
$w_EnterInteger = "Ganze Zahl eingeben";
$w_enterPort = "Gewünschte Portnummer eingeben";
$w_EnterSize = "Größe eingeben: xxxx, gefolgt von M für Mega oder G für Giga\r\nDas Symbol M oder G muss direkt an die Zahl angehängt werden.\r\nBeispiele: 64M; 256M; 1G";
$w_EnterTime = "Zeit in Sekunden eingeben";
$w_MysqlMariaUser = "Gültigen Benutzernamen eingeben. Falls unbekannt, Standardeinstellung 'root' beibehalten.\r\nFalls ein Passwort für 'root' oder den Benutzer festgelegt wurde, muss dieses eingeben werden, sobald in der Kommandozeile 'Enter password:' erscheint. Kein Passwort: Eingabetaste drücken.";

// Long texts
// Quotation marks " in texts must be escaped: \" - May have \r\n for multilines
$w_addingVerTxt ="Alle \"Add-ons\", z.B. alle Installations-Programme von Apache-, PHP-, MySQL- oder MariaDB-Versionen genauso wie die Updates (Wampserver, Aestan Tray Menu, xDebug, etc.) und Web-Applikationen (PhpMyAdmin, Adminer) können hier herunter geladen werden:\r\n\r\n'https://wampserver.aviatechno.net'\r\n\r\nEinfach das gewünschte Installations-Programm starten, indem mit der rechten Maustaste auf den Namen geklickt wird, und dann \"Als Administrator ausführen\" gewählt wird. Somit wird das Add-on oder die Applikation zum Wampserver hinzugefügt.\r\n\r\nDas Ändern der Apache-, PHP-, MySQL- oder MariaDB-Version geschieht mit nur drei Klicks:\r\nLinks-Klick -> PHP|Apache|MySQL|MariaDB -> Version -> Version wählen\r\n\r\nDie Versionsumstellung umfasst weder etwaige vorgenommene Parameteränderungen noch die Übertragung von Datenbanken aus der alten Version in die neue.\r\n\r\nEs existiert ein weiteres Repository:\r\n\r\n'https://sourceforge.net/projects/wampserver'\r\n\r\nDie Links zu den Repositories sind auch unter \"Rechts-Klick -> Hilfe\" in Wampserver vorhanden.";
$w_MySQLsqlmodeInfo = "MySQL/MariaDB SQL-Modus\r\nDer SQL-Server kann je nach Wert der Anweisung "sql-mode" in verschiedenen SQL-Modi ausgeführt werden.\r\nDas Festlegen eines oder mehrerer Modi schränkt bestimmte Möglichkeiten ein und erfordert eine strengere Einhaltung der SQL-Syntax sowie der Datenvalidierung.\r\nDie Anweisung "sql-mode" in der Datei "my.ini" funktioniert wie folgt:\r\n\r\n- SQL-Modus: Standard-Einstellung\r\nDie Anweisung "sql-mode" existiert nicht oder ist auskommentiert. (;sql-mode=\"...\")\r\nEs werden die Standardmodi der MySQL-/MariaDB-Version angewendet\r\n\r\n- SQL-Modus: user mode\r\nDie Anweisung "sql-mode" wird mit benutzerdefinierten Modi gefüllt, zum Beispiel:\r\nsql-mode=\"NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER\"\r\n\r\n- SQL-Modus: none\r\nTDie Anweisung "sql-mode" ist leer, muss aber vorhanden sein.:\r\nsql-mode=\"\"\r\nes wird kein SQL-Modus angewendet.";
$w_ApacheRestoreInfo = "--- Apache-Dateien wiederherstellen\r\nSeit Apache 2.4.41 werden am Ende einer Release-Installation die Konfigurationsdateien "httpd.conf" und "httpd-vhosts.conf" in einen Sicherungsordner kopiert.\r\nSollten Probleme oder unerwünschte Änderungen an Apache auftreten, können diese beiden Dateien wiederhergestellt werden, um die ursprüngliche Apache-Konfiguration wiederherzustellen.\r\nNatürlich gehen IN DIESEM FALL ALLE KONFIGURATIONSÄNDERUNGEN VERLOREN, DIE MÖGLICHERWEISE NACH DER INSTALLATION VORGENOMMEN WURDEN, wie beispielsweise das Laden von Modulen oder Include-Dateien.";
$w_ApacheCompareInfo = "--- Vergleich von Apache-Versionen\r\nBei mindestens zwei Apache-Versionen besteht die Möglichkeit, die aktuelle Version mit einer früheren Version zu vergleichen.\r\nFolgendes wird verglichen:\r\n- LoadModule\r\n- Include\r\n- httpd-vhosts.conf Dateien\r\n- httpd-ssl.conf Dateien\r\n- openssl.cnf Dateien\r\n- Vorhandensein und Inhalt des "Certs"-Ordners\r\nEs besteht die Möglichkeit, die Konfiguration einer älteren Version in die aktuelle Version zu kopieren.\r\n*** WARNUNG *** Es werden keine Sicherungskopien erstellt. Es liegt in Ihrer Verantwortung, VOR dem Kopieren der Konfigurationen Sicherungskopien anzulegen.";
$w_Refresh_Restart_Info = "--- Unterschied zwischen '".$w_refresh."' und '".$w_restartWamp."' ---\r\n\r\n".$w_refresh.":\r\n\r\n- Führt verschiedene Prüfungen durch\r\n- Liest die Konfigurationsdateien von Wampserver, Apache, PHP, MySQL and MariaDB\r\n- Passt die Wampmanager-Konfigurationsdatei entsprechend an und aktualisiert die Menüs\r\n- Führt einen reibungslosen Neustart von Apache aus\r\n- Lädt das Aestan-Tray-Menü neu\r\n\r\nEs kommt zu keiner Unterbrechung der Verbindungen zu Apache, PHP, MySQL und MariaDB.\r\n\r\n---\r\n\r\n".$w_restartWamp.":\r\n\r\n- Stoppt die Dienste: '".$c_apacheService."', '".$c_mysqlService."' sowie '".$c_mariadbService."'\r\n- Leert alle Protokoll-Dateien\r\n- Leert den 'tmp'-Ordner\r\n- Beendet Wampserver\r\n- Startet Wampserver 'normal'\r\n\r\nSomit werden die Verbindungen zu Apache, PHP, MySQL und MariaDB vollständig unterbrochen und unter anderen Bezeichnungen wiederhergestellt.";
$w_AdminerHelpTxt ="\r\n--- Adminer ---\r\nMit Adminer kann keine Verbindung zu Datenbanken hergestellt werden, wenn kein Passwort vorhanden ist.\r\nDaher muss vor der Nutzung von Adminer ein Passwort für "root" angelegt werden.\r\nDies kann über "phpMyAdmin" oder über die MySQL- und/oder MariaDB-Kommandozeile erfolgen.\r\nEs ist jedoch möglich, Adminer-Verbindungen ohne Passwort zu autorisieren.\r\nInformationen dazu befinden sich im Inhalt der Datei c:\\wamp64\\apps\\adminer4.x.y\\index.php";
?>
