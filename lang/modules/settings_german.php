<?php
//
// Translation by KLiNG0NE  (2026-09-02)
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
$w_add_VirtualHost = 'VirtualHost-Management';
$w_aliasSubMenu = 'Aliases';
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
	'VirtualHostSubMenu' => 'VirtualHosts Untermenü',
	'AliasSubmenu' => 'Alias Untermenü',
	'ProjectSubMenu' => 'Projekte Untermenü',
	'HomepageAtStartup' => 'Wampserver-Homepage bei Start',
	'MenuItemOnline' => 'Menüpunkt: Online / Offline',
	'ItemServicesNames' => 'Werkzeuge-Menüpunkt: Ãndere Service-Namen',
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
	'CleanLogs_SwitchVersion' => 'Log-Dateien bei Versions-Ãnderung leeren',
	'ForTestOnly' => 'Nur zu Test-Zwecken',
	'iniCommented' => 'Auskommentierte php.ini-Direktiven (; am Anfang der Zeile)',
	'BackupHosts' => 'hosts-Datei sichern',
	'ShowWWWdirMenu' => 'Zeige www-Ordner in Menü',
	'ApacheWampParams' => 'WampServer-Einstellungen für Apache',
	'apacheCompareVersion' => 'Vergleich von Apache-Einstellungen aktivieren',
	'apacheRestoreFiles' => 'Wiederherstellung von Apache-Dateien erlauben',
	'apacheGracefulRestart' => 'Sanften Neustart von Apache aktivieren',
	'LinksOnProjectsHomePage' => 'Links auf Projekte-Homepage erlauben',
	'LinksOnProjectsHomeByIp' => 'Links zu Projekten über \'lokale Link-IP\'',
	'LinksChooseIp' => 'Lokale IP wählen',
	'ScrollListsHomePage' => 'Scrollbare Listen auf Homepage aktivieren',
	'WampserverBrowser' => 'WampServer-Browser',
	'BrowserChange' => 'WampServer-Browser einstellen',
	'httpsReady' => 'WampServer ist bereit HTTPS zu unterstützen',
	'AllowLocalhostHttps' => 'HTTPS für localhost aktivieren',
);

// Right-click Tools
$w_wampTools = 'Tools';
$w_restartDNS = 'DNS neu starten';
$w_testConf = 'Syntax von httpd.conf prüfen';
$w_testServices = 'Status der Services prüfen';
$w_changeServices = 'Namen der Services ändern';
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
$w_deleteVer = 'Nicht verwendete Versionen löschen';
$w_addingVer = 'Versionen von Apache, PHP, MySQL, MariaDB usw. hinzufügen.';
$w_deleteListenPort = 'Einen Apache-Listen-Port löschen';
$w_delete = 'Löschen';
$w_defaultDBMS = 'Standard-DBMS:';
$w_NoDefaultDBMS = 'Standard-DBMS : keins';
$w_invertDefault = 'Standard-DBMS invertieren ';
$w_changeCLI = 'PHP-CLI-Version ändern';
$w_reinstallServices = 'Alle Services neu installieren';
$w_reinstallWait = 'Kann länger als 30 Sek. dauern - Bitte warten';
$w_wampReport = 'Wampserver-Konfigurationsbericht';
$w_dowampReport = 'Erstelle '.$w_wampReport;
$w_verifySymlink = 'Symbolische Links prüfen';
$w_goto = '^Gehe zu:';
$w_FileRepository = 'Links zu Dateien und Add-ons aus den Wampserver-Repositorys';
$w_compareApache = 'Vergleich der Apache-Einstellungen';
$w_versus = 'gegenüber';
$w_restorefile = 'Bei der Installation von Apache gespeicherte Dateien wiederherstellen';
$w_restore = 'Wiederherstellen';
$w_checkUpdates = 'Nach Updates suchen';
$w_apacheTools = 'Apache-Tools';
$w_PHPloadedExt = 'Geladene PHP-Erweiterungen anzeigen';
$w_PHPversionsUse = 'Nutzung der PHP-Versionen anzeigen';

//miscellaneous
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
$w_Integer = "Ganzzahlwert";
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
$w_MysqlMariaUser = "Gültigen Benutzernamen eingeben. Falls unbekannt, Standardeinstellung 'root' beibehalten.\r\nFalls ein Passwort für 'root' oder den Benutzer festgelegt wurde, muss dieses eingeben werden, sobald in der Konsole 'Enter password:' erscheint. Kein Passwort: Eingabetaste drücken.";

// Long texts
// Quotation marks " in texts must be escaped: \" - May have \r\n for multilines
$w_addingVerTxt ="All \"addons\", i.e. all installers of Apache, PHP, MySQL or MariaDB versions as well as installers of updates (Wampserver, Aestan Tray Menu, xDebug, etc.) and web applications (PhpMyAdmin, Adminer) are on\r\n\r\n'https://wampserver.aviatechno.net'\r\n\r\nJust download the installer files you want and launch them by right-clicking on the name of the downloaded file then \"Run as administrator\" to have the addon or application added to your version of Wampserver.\r\n\r\nThen, changing Apache, PHP, MySQL or MariaDB version is a matter of three clicks:\r\nLeft-Click -> PHP|Apache|MySQL|MariaDB -> Version -> Choose version\r\n\r\nThe version change does not include any parameter changes you might have made, nor does it transfer databases from the old version to the new one.\r\n\r\nAnother repository exists:\r\n\r\n'https://sourceforge.net/projects/wampserver'.\r\n\r\nThe links to the repositories are in Right-Click -> Help\r\n";
$w_MySQLsqlmodeInfo = "MySQL/MariaDB sql-mode\r\nThe SQL server may run in different SQL modes depending on the value of the sql-mode directive.\r\nSetting one or more modes restricts certain possibilities and requires greater rigor in SQL syntax and data validation.\r\nThe operation of the sql-mode directive in the my.ini file is as follows.\r\n\r\n- sql-mode: by default\r\nThe sql-mode directive does not exist or is commented out (;sql-mode=\"...\")\r\nThe default modes of the MySQL/MariaDB version are applied\r\n\r\n- sql-mode: user mode\r\nThe sql-mode directive is populated with user-defined modes, for example :\r\nsql-mode=\"NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER\"\r\n\r\n- sql-mode: none\r\nThe sql-mode directive is empty but must exist:\r\nsql-mode=\"\"\r\nno SQL mode is applied.";
$w_ApacheRestoreInfo = "--- Restoring Apache Files\r\nSince Apache 2.4.41, at the end of a release installation, the operational files httpd.conf and httpd-vhosts.conf are copied to a backup folder.\r\nIn case of problems or unwanted changes to Apache you can restore these two files to the original Apache configuration.\r\nOf course, IN THIS CASE YOU WILL LOSE ANY CONFIGURATION CHANGES YOU MAY HAVE MADE AFTER INSTALLATION, such as module or include loads.";
$w_ApacheCompareInfo = "--- Comparing Apache versions\r\nIf you have at least two versions of Apache, you have the possibility to compare the current version with a previous version.\r\nThe following are compared:\r\n- LoadModule\r\n- Include\r\n- httpd-vhosts.conf files\r\n- httpd-ssl.conf files\r\n- openssl.cnf files\r\n- Presence and content of the Certs folder\r\nYou have the possibility to copy the configuration of an old version on the current version.\r\n*** WARNING *** No backups will be made, it is your responsibility to make backups BEFORE copying the configurations.";
$w_Refresh_Restart_Info = "--- Differences between '".$w_refresh."' and '".$w_restartWamp."'\r\n-- ".$w_refresh.":\r\n- Performs various checks,\r\n- Rereads the configuration files of Wampserver, Apache, PHP, MySQL and MariaDB,\r\n- Modifies the Wampmanager configuration file accordingly and updates the menus,\r\n- Performs a 'Graceful Restart Apache',\r\n- Reloads the Aestan Tray menu.\r\nThere is no interruption of the Apache, PHP, MySQL and MariaDB connections.\r\n\r\n-- ".$w_restartWamp.":\r\n- Stop the services :".$c_apacheService.", ".$c_mysqlService." and ".$c_mariadbService.",\r\n- Empty all the log files,\r\n- Empty the tmp folder,\r\n- Exit Wampserver,\r\n- Starts Wampserver 'normally'.\r\nThere is thus a total cut of the connections Apache, PHP, MySQL and MariaDB and put back in place these under other identifications";
$w_AdminerHelpTxt ="\r\n--- Adminer ---\r\nAdminer does not allow you to connect to databases without a password.\r\nIt is therefore necessary to create a password for 'root' before using Adminer.\r\nThis can be done via PhpMyAdmin or via the MySQL and/or MariaDB console.\r\nHowever, it is possible to authorize Adminer connections without a password.\r\nTo do this, see the contents of the file c:\\wamp64\\apps\\adminer4.x.y\\index.php\r\n";

?>
