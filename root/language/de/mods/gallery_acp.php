<?php
/**
*
* gallery_acp [Deutsch]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_GALLERY_CLEANUP_EXPLAIN'	=> 'Hier kannst du Überreste aus der Galerie entfernen.',
	'ACP_GALLERY_OVERVIEW'			=> 'phpBB Galerie',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'	=> 'Hier findest du ein paar Statistiken zu deiner Galerie.',
	'ACP_IMPORT_ALBUMS'				=> 'Neue Bilder importieren',
	'ACP_IMPORT_ALBUMS_EXPLAIN'		=> 'Hier kannst Du die Anzahl von Bilder eingeben, die importiert werden sollen. Bevor Du die Bilder importierst, ändere die Größe von Hand mit einer Bildbearbeitungssoftware.',

	'ADD_ALBUM_ON_TOP'				=> 'Album oben einfügen',
	'ADD_PERMISSIONS'				=> 'Berechtigungen hinzufügen',
	'ALBUM_ADMIN'					=> 'Alben-Administration',
	'ALBUM_ADMIN_EXPLAIN'			=> 'In der phpBB Gallery gibt es keine Unterscheidung zwischen Kategorien und Alben. Alles ist albenbasiert, wobei sich Alben wie eine Kategorie verhalten können. Jedes Album kann eine unbegrenzte Anzahl an Subalben haben und du kannst festlegen, ob in ihnen Bilder hochgeladen werden dürfen oder nicht (dann verhält es sich wie eine Kategorie). Hier kannst du Alben hinzufügen, bearbeiten, löschen, schließen und wieder öffnen wie auch zusätzliche Kontrollfunktionen einstellen. Wenn deine Bilderinformationen nicht mehr synchron sind, kannst du das Album auch resynchronisieren. <strong>Du musst passende Berechtigungen erstellen oder kopieren, damit ein neu erstelltes Album auch angezeigt wird.</strong>',
	'ALBUM_AUTH_TITLE'				=> 'Album Berechtigungen',
	'ALBUM_CREATED'					=> 'Album wurde erfolgreich erstellt.',
	'ALBUM_DELETE'					=> 'Album löschen',
	'ALBUM_DELETE_EXPLAIN'			=> 'Das folgende Formular erlaubt dir, ein Album zu löschen. Wenn in dem Album Bilder erstellt werden können, kannst du entscheiden, was mit den darin enthaltenen Bildern (oder Alben) geschehen soll.',
	'ALBUM_DELETED'					=> 'Dieses Album wurde erfolgreich gelöscht',
	'ALBUM_DESC'					=> 'Beschreibung',
	'ALBUM_DESC_EXPLAIN'			=> 'Jede verwendete HTML-Auszeichnung wird so, wie sie ist, angezeigt.',
	'ALBUM_DESC_TOO_LONG'			=> 'Die Beschreibung des Albums ist zu lang. Sie muss weniger als 4000 Zeichen umfassen.',
	'ALBUM_EDIT_EXPLAIN'			=> 'Das unten stehende Formular erlaubt dir, dieses Album individuell anzupassen. Beachte bitte, dass Moderations-Einstellungen über die Berechtigungen für jeden Benutzer bzw. Benutzergruppe gesetzt werden.',
	'ALBUM_FEED'					=> 'Bilder aus diesem Album im Feed anzeigen',
	'ALBUM_ID'						=> 'Album-ID',
	'ALBUM_IMAGE'					=> 'Album-Bild',
	'ALBUM_IMAGE_EXPLAIN'			=> 'Der Ort eines Bildes, relativ zum phpBB-Hauptverzeichnis, das diesem Album zusätzlich zugeordnet werden soll.',
	'ALBUM_NAME_EMPTY'				=> 'Du musst einen Namen für dieses Album angeben.',
	'ALBUM_NO_TYPE_CHANGE_TO_CONTEST'	=> 'Ein Album ohne Wettbewerb kann nicht in ein Album mit Wettbewerb geändert werden.',
	'ALBUM_PARENT'					=> 'Übergeordnetes Album',
	'ALBUM_PASSWORD'				=> 'Album-Passwort',
	'ALBUM_PASSWORD_EXPLAIN'		=> 'Definiert ein Passwort für dieses Album. Es wird empfohlen, vorzugsweise das Berechtigungs-System zu nutzen.',
	'ALBUM_PASSWORD_CONFIRM'		=> 'Album-Passwort bestättigen',
	'ALBUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Muss nur ausgefüllt werden, wenn ein Album-Passwort vergeben wird.',
	'ALBUM_RESYNCED'				=> 'Album „%s“ wurde erfolgreich resynchronisiert',
	'ALBUM_SETTINGS'				=> 'Album Einstellungen',
	'ALBUM_STATUS'					=> 'Album-Status',
	'ALBUM_TYPE'					=> 'Album-Typ',
	'ALBUM_TYPE_CAT'				=> 'Kategorie',
	'ALBUM_TYPE_CONTEST'			=> 'Wettbewerb',
	'ALBUM_TYPE_UPLOAD'				=> 'Album',
	'ALBUM_UPDATED'					=> 'Das Album wurde erfolgreich aktuallisiert',
	'ALBUM_WATERMARK'				=> 'Wasserzeichen in diesem Album anzeigen',
	'ALBUM_WATERMARK_EXPLAIN'		=> 'Wenn hier <samp>Nein</samp> ausgewählt ist, wird das Wasserzeichen ohne Rücksicht auf die Berechtigungen nicht angezeigt!',
	'ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'	=> 'Ein Album mit Wettbewerb kann nicht in ein Album ohne Wettbewerb geändert werden.',
	'ALBUMS'						=> 'Alben',

	'CACHE_DIR_SIZE'				=> 'Größe des cache/-Ordners',
	'CHANGE_AUTHOR_TO_GUEST'		=> 'Autor in Gast ändern',
	'CHECK'							=> 'Überprüfen',
	'CHECK_AUTHOR_EXPLAIN'			=> 'Keine Bilder ohne gültigen Autor gefunden.',
	'CHECK_COMMENT_EXPLAIN'			=> 'Keine Kommentare ohne gültigen Autor gefunden.',
	'CHECK_ENTRY_EXPLAIN'			=> 'Du musst die Überprüfung einmal starten, um nach Dateien ohne Datenbank-Eintrag zu suchen.',
	'CHECK_PERSONALS_EXPLAIN'		=> 'Keine persönlichen Alben ohne Besitzer gefunden.',
	'CHECK_PERSONALS_BAD_EXPLAIN'	=> 'Keine persönlichen Alben gefunden.',
	'CHECK_SOURCE_EXPLAIN'			=> 'Es wurde kein Eintrag gefunden. Du solltest aber die Überprüfung einmal starten, um sicher zu gehen.',
	'CLEAN_AUTHORS_DONE'			=> 'Bilder ohne Autor gelöscht.',
	'CLEAN_CHANGED'					=> 'Autor in "Gast" geändert.',
	'CLEAN_COMMENTS_DONE'			=> 'Kommentare ohne Autor gelöscht.',
	'CLEAN_ENTRIES_DONE'			=> 'Dateien ohne Datenbank-Einträge gelöscht.',
	'CLEAN_GALLERY'					=> 'Galerie reinigen',
	'CLEAN_GALLERY_ABORT'			=> 'Reinigung abgebrochen!',
	'CLEAN_NO_ACTION'				=> 'Keine Aktion ausgeführt. Irgendwas ist schief gelaufen!',
	'CLEAN_PERSONALS_DONE'			=> 'Persönliche Alben ohne Besitzer gelöscht.',
	'CLEAN_PERSONALS_BAD_DONE'		=> 'Persönliche Alben der gewählten Benutzer gelöscht.',
	'CLEAN_PRUNE_DONE'				=> 'Bilder erfolgreich automatisch gelöscht.',
	'CLEAN_PRUNE_NO_PATTERN'		=> 'Kein Suchmuster angegeben.',
	'CLEAN_SOURCES_DONE'			=> 'Datenbank-Einträge ohne Dateien gelöscht.',
	'COLS_PER_PAGE'					=> 'Anzahl der Spalten pro Seite',
	'COMMENT'						=> 'Kommentar',
	'COMMENT_ID'					=> 'Kommentar-ID',
	'COMMENT_SYSTEM'				=> 'Kommentar System aktivieren',
	'COMMENT_USER_CONTROL'			=> 'Benutzer können Kommentare einstellen',
	'COMMENT_USER_CONTROL_EXP'		=> 'Mit dieser Option erlauben sie Benutzern einzustellen, ob andere Benutzer ihre Bilder kommentieren dürfen.',
	'CONFIRM_CLEAN'					=> 'Dieser Vorgang kann nicht Rückgängig gemacht werden!',
	'CONFIRM_CLEAN_AUTHORS'			=> 'Bilder ohne Autor löschen?',
	'CONFIRM_CLEAN_COMMENTS'		=> 'Kommentare ohne Autor löschen?',
	'CONFIRM_CLEAN_ENTRIES'			=> 'Dateien ohne Datenbank-Einträge löschen?',
	'CONFIRM_CLEAN_PERSONALS'		=> 'Persönliche Alben ohne Besitzer löschen?<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_PERSONALS_BAD'	=> 'Persönliche Alben der gewählten Benutzer löschen?<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_SOURCES'			=> 'Datenbank-Einträge ohne Dateien löschen?',
	'CONFIRM_PRUNE'					=> 'Alle Bilder löschen, die folgende Bedingungen erfüllen:<br /><br />%s<br />',
	'CONTEST_DATE_EXPLAIN'			=> 'Das Datum bitte im Format JJJJ-MM-TT SS:MM angeben.',
	'CONTEST_END'					=> 'Ende des Wettbewerbs',
	'CONTEST_END_BEFORE_RATING'		=> 'Das Ende des Wettbewerbs darf nicht vor dem Beginn der Bewertungen liegen.',
	'CONTEST_END_BEFORE_START'		=> 'Das Ende des Wettbewerbs darf nicht vor dem Beginn des Wettbewerbs liegen.',
	'CONTEST_END_EXPLAIN'			=> 'Nach dem Ende des Wettbewerbs dürfen Benutzer keine Bilder mehr bewerten.',
	'CONTEST_END_INVALID'			=> 'Ungültiges Ende des Wettbewerbs (%s). Das Datum bitte im Format JJJJ-MM-TT SS:MM angeben.',
	'CONTEST_RATING'				=> 'Beginn der Bewertung des Wettbewerbs',
	'CONTEST_RATING_BEFORE_START'	=> 'Der Beginn der Bewertung des Wettbewerbs darf nicht vor dem Beginn des Wettbewerbs liegen.',
	'CONTEST_RATING_EXPLAIN'		=> 'Nach dem Beginn der Bewertungen dürfen Benutzer keine Bilder mehr hochladen.',
	'CONTEST_RATING_INVALID'		=> 'Ungültiger Beginn der Bewertung (%s). Das Datum bitte im Format JJJJ-MM-TT SS:MM angeben.',
	'CONTEST_SETTINGS'				=> 'Wettbewerbs Einstellungen',
	'CONTEST_START'					=> 'Beginn des Wettbewerbs',
	'CONTEST_START_EXPLAIN'			=> 'Ab dem Beginn des Wettbewerbs dürfen Benutzer Bilder hochladen.',
	'CONTEST_START_INVALID'			=> 'Ungültiger Beginn des Wettbewerbs (%s). Das Datum bitte im Format JJJJ-MM-TT SS:MM angeben.',
	'COPY_PERMISSIONS'				=> 'Kopiere Berechtigungen von',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Sobald das Album erstellt ist, wird es dieselben Berechtigungen haben wie das hier ausgewählte Album. Wenn hier kein Album gewählt wird, wird das neue Album unsichtbar bleiben, bis entsprechende Berechtigungen gesetzt wurden.',
	'COPY_PERMISSIONS_ALBUM_FROM_EXPLAIN'	=> 'Das Album, von dem die Berechtigungen kopiert werden sollen.',
	'COPY_PERMISSIONS_ALBUM_TO_EXPLAIN'		=> 'Die Zielalben, denen die Berechtigungen zugeordnet werden sollen.',
	'COPY_PERMISSIONS_CONFIRM'		=> 'Bitte beachte, dass dabei alle bisherigen Berechtigungen von allen Gruppen und Benutzern in den Alben gelöscht werden.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Wenn du dich entscheidest, Berechtigungen zu kopieren, wird das Album dieselben Berechtigungen haben wie das von dir hier ausgewählte. Dadurch werden alle Berechtigungen, die du vorher für dieses Album gesetzt hast, durch die des ausgewählten Albums ersetzt. Wenn kein Album gewählt wird, werden die derzeitigen Berechtigungen beibehalten.',
	'COPY_PERMISSIONS_FROM'			=> 'Kopiere Berechtigungen von',
	'COPY_PERMISSIONS_SUCCESSFUL'	=> 'Die Berechtigungen wurden erfolgreich kopiert.',
	'COPY_PERMISSIONS_TO'			=> 'Berechtigungen neuen Alben zuordnen',
	'CREATE'						=> 'Erstellen',
	'CREATE_ALBUM'					=> 'Neues Album erstellen',
	'CREATE_USERS_PEGA'				=> 'Persönliches Album für Benutzer erstellen',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Lösche die Inhalte oder verschieb sie in ein anderes Album',
	'DECIDE_MOVE_DELETE_SUBALBUMS'	=> 'Lösche die Subalben oder verschiebe sie in ein anderes Album',
	'DEFAULT_SORT_EXPLAIN'			=> 'Wenn du hier <samp>Standard</samp> auswählst, wird die Standard-Sortierung aus der Konfiguration übernommen.',
	'DEFAULT_SORT_METHOD'			=> 'Voreingestellte Sortiermethode',
	'DEFAULT_SORT_ORDER'			=> 'Voreingestellte Sortierreihenfolge',
	'DELETE_ALL_IMAGES'				=> 'Lösche Bilder',
	'DELETE_SUBALBUMS'				=> 'Lösche Subalben und deren Bilder',
	'DELETE_ALBUM'					=> 'Album löschen',
	'DELETE_ALBUM_EXPLAIN'			=> 'Das untere Formular erlaubt Dir ein Album zu löschen und zu entscheiden ob du die Bilder löschen oder verschieben möchtest.',
	'DELETE_ALBUM_SUBS'				=> 'Bitte erst die angehängten Alben löschen',
	'DELETE_IMAGES'					=> 'Bilder löschen',
	'DELETE_PERMISSIONS'			=> 'Berechtigungen löschen',
	'DELETE_SUBS'					=> 'Angehängte Alben löschen',
	'DISP_BIRTHDAYS'				=> 'Geburtstage anzeigen',
	'DISP_EXIF_DATA'				=> 'Exif-Daten anzeigen',
	'DISP_EXIF_DATA_EXP'			=> 'Das Feature steht derzeit nicht zur Verfügung, da die benötigte Funktion "exif_read_data" nicht in deiner PHP Installation enthalten ist.',
	'DISP_FAKE_THUMB'				=> 'Thumbnail in der Album-Liste anzeigen',
	'DISP_LOGIN'					=> 'Login-Feld anzeigen',
	'DISP_LOGIN_EXP'				=> 'Nur für Gäste',
	'DISP_PERSONAL_ALBUM_PROFILE'	=> 'Link zum persönlichen Album im Profil anzeigen',
	'DISP_STATISTIC'				=> 'Galerie-Statistik anzeigen',
	'DISP_TOTAL_IMAGES'				=> '"Bilder insgesamt" auf der index.' . $phpEx . ' anzeigen',
	'DISP_USER_IMAGES_PROFILE'		=> 'Statistik über hochgeladene Bilder im Profil anzeigen',
	'DISP_VIEWTOPIC_ICON'			=> 'Button zum persönlichem Album auf der viewtopic.' . $phpEx . ' anzeigen',
	'DISP_VIEWTOPIC_IMAGES'			=> 'Anzahl der Bilder auf der viewtopic.' . $phpEx . ' anzeigen',
	'DISP_VIEWTOPIC_LINK'			=> 'Die Anzahl der Bilder auf die Benutzer Bilder verlinken',
	'DISP_WHOISONLINE'				=> '"Wer ist online" anzeigen',
	'DISPLAY_IN_RRC'				=> 'Bilder aus diesem Album in den "Neusten & Zufälligen"-Bildern anzeigen',
	'DONT_COPY_PERMISSIONS'			=> 'Berechtigungen nicht kopieren',

	'EDIT_ALBUM'					=> 'Album bearbeiten',

	'FAKE_THUMB_SIZE'				=> 'Thumbnailgröße',
	'FAKE_THUMB_SIZE_EXP'			=> 'Wenn du die volle Größe wählst, denke an die 16 Pixel für die schwarze Info-Zeile',
	'FEED_ENABLED'					=> 'Feeds für Alben einschalten',
	'FEED_ENABLED_PEGAS'			=> 'Feeds für persönliche Alben einschalten',
	'FEED_LIMIT'					=> 'Anzahl der angezeigten Elemente',
	'FEED_SETTINGS'					=> 'Feed-Einstellungen',

	'GALLERY_ALBUMS_TITLE'			=> 'Galerie Alben Kontrolle',
	'GALLERY_CONFIG'				=> 'Galerie Konfiguration',
	'GALLERY_CONFIG_EXPLAIN'		=> 'Hier kannst du die Allgemeinen Einstellungen von phpBB Galerie durchführen.',
	'GALLERY_CONFIG_UPDATED'		=> 'Galerie Konfiguration wurde erfolgreich aktualisiert',
	'GALLERY_INDEX'					=> 'Galerie-Index',
	'GALLERY_PURGE_CACHE_EXPLAIN'	=> 'Wenn du den Cache Feature für das Vorschaubild benutzt, musst du nach einer Änderungen an den Einstellungen in "Gallery konfigurieren" den Cache deiner Vorschaubilder leeren, um sie neu generieren zu lassen.',
	'GALLERY_STATS'					=> 'Galerie Statistik',
	'GALLERY_VERSION'				=> 'Version der phpBB Gallery',//ja mit ll und y, da es sich um den MOD-Namen handelt
	'GD_VERSION'					=> 'GD Version optimieren',
	'GENERAL_ALBUM_SETTINGS'		=> 'Allgemeine Albumseinstellungen',
	'GIF_ALLOWED'					=> 'Es ist erlaubt GIF- Dateien hochzuladen',
	'GUPLOAD_DIR_SIZE'				=> 'Größe des upload/-Ordners',

	'HACKING_ATTEMPT'				=> 'Hacking attempt!',
	'HANDLE_IMAGES'					=> 'Was soll mit Bildern passieren',
	'HANDLE_SUBS'					=> 'Was soll mit angehängten Alben passieren',
	'HOTLINK_ALLOWED'				=> 'Erlaubt Domains für Hotlink',
	'HOTLINK_ALLOWED_EXP'			=> 'Die Domains müssen mit Kommata getrennt werden (keine Leerzeichen). Beispiel: "flying-bits.org,phpbb.com"',
	'HOTLINK_PREVENT'				=> 'Hotlink Prävention',

	'IMAGE_DESC_MAX_LENGTH'			=> 'Bild Beschreibung / Kommentar Max Länge (Bytes)',
	'IMAGE_ID'						=> 'Bild-ID',
	'IMAGE_SETTINGS'				=> 'Einstellungen zu den Bildern',
	'IMAGES_PER_DAY'				=> 'Bilder pro Tag',
	'IMPORT_ALBUM'					=> 'Zielalbum:',
	'IMPORT_DEBUG_MES'				=> '%1$s Bilder importiert. Es sind noch %2$s Bilder zu importieren.',
	'IMPORT_DIR_EMPTY'				=> 'Das Verzeichnis %s ist leer. Du musst die Bilder erst hochladen, bevor du sie importieren kannst.',
	'IMPORT_FINISHED'				=> 'Alle %1$s Bilder erfolgreich importiert.',
	'IMPORT_FINISHED_ERRORS'		=> '%1$s Bilder wurden erfolgreich importiert, aber die folgenden Fehler sind aufgetreten:<br /><br />',
	'IMPORT_MISSING_ALBUM'			=> 'Wähle bitte ein Album aus, in das die Bilder importiert werden sollen.',
	'IMPORT_SCHEMA_CREATED'			=> 'Das Import-Schema wurde erstellt, warte bitte während die Bilder importiert werden.',
	'IMPORT_SELECT'					=> 'Wähle die Bilder aus, die importiert werden sollen. Bilder die erfolgreich importiert wurden, werden aus der Auswahl gelöscht. Die anderen Bilder stehen dir danach noch zur Verfügung.',
	'IMPORT_USER'					=> 'Hochgeladen durch',
	'IMPORT_USER_EXP'				=> 'Du kannst die Bilder auch einem anderem Mitglied zuordnen lassen.',
	'IMPORT_USERS_PEGA'				=> 'In das persönliche Album des Benutzers laden.',
	'INDEX_SETTINGS'				=> 'Einstellungen für gallery/index.' . $phpEx,
	'INFO_LINE'						=> 'Dateigröße auf dem Thumbnail anzeigen',
	'INHERIT_PERMISSIONS_ALBUM'		=> 'Berechtigung von einem anderem Album übernehmen',
	'INHERIT_PERMISSIONS_VICTIM'	=> 'Berechtigung aus einer anderen Einstellung übernehmen',

	'JPG_ALLOWED'					=> 'Es ist erlaubt JPG- Dateien hochzuladen',
	'JPG_QUALITY'					=> 'JPG-Qualtität',
	'JPG_QUALITY_EXP'				=> 'Wenn Bilder gedreht oder verkleinert werden, kann ihre Dateigröße danach größer sein als davor. Mit dieser Option kann die Qualtität verringert werden, um Speicherplatz zu sparen.',

	'LIST_INDEX'					=> 'Führe Subalbum in der Legende des übergeordneten Albums auf',
	'LIST_INDEX_EXPLAIN'			=> 'Zeigt einen Link zu diesem Album in der Legende des übergeordneten Albums an, wenn dort die Option „Subalben in Legende aufführen“ aktiviert ist.',
	'LIST_SUBALBUMS'				=> 'Subalben in Legende aufführen',
	'LIST_SUBALBUMS_EXPLAIN'		=> 'Führt die Subalben, bei denen die Option „Führe Subalben in der Legende des übergeordneten Albums auf“ aktiviert ist, in der Legende dieses Albums in der Alben-Übersicht und anderswo auf.',
	'LOCKED'						=> 'Gesperrt',
	'LOOK_UP_ALBUM'					=> 'Wähle ein Album aus',
	'LOOK_UP_ALBUMS_EXPLAIN'		=> 'Du kannst auch mehr als ein Album auswählen.',

	'MANAGE_CRASHED_ENTRIES'		=> 'Defekte Einträge verwalten',
	'MANAGE_CRASHED_IMAGES'			=> 'Defekte Bilder verwalten',
	'MANAGE_PERSONALS'				=> 'Persönliche Alben verwalten',
	'MAX_IMAGES_PER_ALBUM'			=> 'Die maximale Anzahl der Bilder für jedes Album',
	'MAX_IMAGES_PER_ALBUM_EXP'		=> 'Unbegrenzt = -1',
	'MEDIUM_CACHE'					=> 'Verkleinerte Bilder für die Image-page cachen',
	'MEDIUM_DIR_SIZE'				=> 'Größe des medium/-Ordners',
	'MISSING_ALBUM_NAME'			=> 'Du musst einen Namen für das Album eintragen.',
	'MISSING_AUTHOR'				=> 'Bilder ohne gültigen Autor',
	'MISSING_AUTHOR_C'				=> 'Kommentare ohne gültigen Autor',
	'MISSING_ENTRY'					=> 'Dateien ohne Datenbank-Eintrag',
	'MISSING_IMPORT_SCHEMA'			=> 'Das Import-Schema (%s) konnte nicht gefunden werden.',
	'MISSING_OWNER'					=> 'Persönliche Alben ohne Besitzer',
	'MISSING_OWNER_EXP'				=> 'Beim Löschen werden alle Subalben, Bilder und Kommentare mit gelöscht.',
	'MISSING_SOURCE'				=> 'Datenbank-Einträge ohne Datei',
	'MOVE_IMAGES_TO'				=> 'Bilder verschieben nach',
	'MOVE_SUBALBUMS_TO'				=> 'Subalben verschieben nach',

	'NEW_ALBUM_CREATED'				=> 'Neues Album wurde erfolgreich erstellt',
	'NO_ALBUM_SELECTED'				=> 'Du musst mindestens ein Album auswählen.',
	'NO_DESTINATION_ALBUM'			=> 'Du hast kein Album angegeben, zu dem der Inhalt verschoben werden soll.',
	'NO_FILE_SELECTED'				=> 'Du musst mindestens eine Datei auswählen.',
	'NO_PERMISSIONS_SELECTED'		=> 'Du musst mindestens ein Album auswählen, oder ein anderes Berechtigungs-System.',
	'NO_VICTIM_SELECTED'			=> 'Du musst mindestens einen Benutzer oder eine Gruppe auswählen.',
	'NO_INHERIT'					=> 'Berechtigungen nicht kopieren',
	'NO_PARENT_ALBUM'				=> 'Kein übergeordnetes',
	'NO_SUBALBUMS'					=> 'Keine Alben angehängt',
	'NUMBER_ALBUMS'					=> 'Anzahl von Alben',
	'NUMBER_IMAGES'					=> 'Anzahl von Bilder',
	'NUMBER_PERSONALS'				=> 'Anzahl von Persönlichen Alben',

	'OWN_PERSONAL_ALBUMS'			=> 'Eigene persönliche Alben',

	'PERMISSION'					=> 'Berechtigung',
	'PERMISSION_NEVER'				=> 'Nie',
	'PERMISSION_NO'					=> 'Nein',
	'PERMISSION_SETTING'			=> 'Einstellung',
	'PERMISSION_YES'				=> 'Ja',

	'PERMISSION_A_LIST'				=> 'Kann das Album sehen',
	'PERMISSION_A_RESTRICT'			=> 'Kann den Zugriff einschränken',
	'PERMISSION_ALBUM_COUNT'		=> 'Anzahl der möglichen persönlichen Subalben',
	'PERMISSION_ALBUM_UNLIMITED'	=> 'Unbegrenzte Anzahl der persönlichen Subalben',
	'PERMISSION_C'					=> 'Kommentare',
	'PERMISSION_C_DELETE'			=> 'Kann eigene Kommentare löschen',
	'PERMISSION_C_EDIT'				=> 'Kann eigene Kommentare bearbeiten',
	'PERMISSION_C_POST'				=> 'Kann Bilder kommentieren',
	'PERMISSION_C_READ'				=> 'Kann Kommentare lesen',
	'PERMISSION_I'					=> 'Bilder',
	'PERMISSION_I_APPROVE'			=> 'Kann Bilder ohne Freigabe erstellen',
	'PERMISSION_I_COUNT'			=> 'Anzahl der hochladbaren Bilder',
	'PERMISSION_I_DELETE'			=> 'Kann eigene Bilder löschen',
	'PERMISSION_I_EDIT'				=> 'Kann eigene Bilder bearbeiten',
	'PERMISSION_I_LOCK'				=> 'Kann Bilder sperren',
	'PERMISSION_I_RATE'				=> 'Kann Bilder bewerten',
	'PERMISSION_I_RATE_EXPLAIN'		=> 'Gäste und der Bild-Autor können Bilder <samp>NIE</samp> bewerten.',
	'PERMISSION_I_REPORT'			=> 'Kann Bilder melden',
	'PERMISSION_I_UNLIMITED'		=> 'Kann unbegrenzt Bilder hochladen',
	'PERMISSION_I_UPLOAD'			=> 'Kann Bilder hochladen',
	'PERMISSION_I_UPLOAD_EXPLAIN'	=> 'Diese Berechtigung ist auch dafür verantwortlich, um festzustellen ob ein Benutzer Bilder in das Album verschieben darf, wenn er Moderator-Berechtigungen in einem anderem Album hat.',
	'PERMISSION_I_VIEW'				=> 'Kann Bilder sehen',
	'PERMISSION_I_WATERMARK'		=> 'Kann Bilder ohne Wasserzeichen sehen',
	'PERMISSION_M'					=> 'Moderation',
	'PERMISSION_MISC'				=> 'Sonstiges', //Miscellaneous
	'PERMISSION_M_COMMENTS'			=> 'Kann Kommentare moderieren',
	'PERMISSION_M_DELETE'			=> 'Kann Bilder löschen',
	'PERMISSION_M_EDIT'				=> 'Kann Bilder bearbeiten',
	'PERMISSION_M_MOVE'				=> 'Kann Bilder verschieben',
	'PERMISSION_M_REPORT'			=> 'Kann Meldungen bearbeiten',
	'PERMISSION_M_STATUS'			=> 'Kann Bilder freischalten und sperren',

	'PERMISSION_EMPTY'				=> 'Du hast nicht alle Berechtigungen gesetzt.',
	'PERMISSIONS'					=> 'Berechtigungen',
	'PERMISSIONS_COPY'				=> 'Albenrechte kopieren',
	'PERMISSIONS_COPY_EXPLAIN'		=> 'Hier kannst du die Berechtigungen von einem Album zu einem oder mehreren anderen Alben kopieren.',
	'PERMISSIONS_EXPLAIN'			=> 'Hier kannst du festlegen, welche Benutzer und Gruppen Zugriff auf welches Album haben.',
	'PERMISSIONS_STORED'			=> 'Berechtigungen erfolgreich gespeichert.',
	'PERSONAL_ALBUM_INDEX'			=> 'Persönliche Alben in der Galerie-Übersicht als Album anzeigen',
	'PERSONAL_ALBUM_INDEX_EXP'		=> 'Wenn "Nein" ausgewählt ist, wird der Link unterhalb der Alben angezeigt.',
	'PEGA_CREATED'					=> 'Persönliches Album für %s erstellt.',
	'PEGA_ALREADY_EXISTS'			=> '%s hat bereits ein persönliches Album.',
	'PGALLERIES_PER_PAGE'			=> 'Anzahl der persönlichen Galerien pro Seite',
	'PHPBB_INTEGRATION'				=> 'Integration in phpBB',
	'PNG_ALLOWED'					=> 'Es ist erlaubt PNG- Dateien hochzuladen',
	'PURGED_CACHE'					=> 'Cache geleert',
	'PRUNE_ALBUMS'					=> 'Bilder aus Alben löschen',
	'PRUNE_CHECK_OPTION'			=> 'Diese Option beim Löschen berücksichtigen.',
	'PRUNE_COMMENTS'				=> 'Weniger als x Kommentare',
	'PRUNE_PATTERN_ALBUM_ID'		=> 'Das Bild ist in einem der folgenden Alben:<br />&raquo; <strong>%s</strong>',
	'PRUNE_PATTERN_COMMENTS'		=> 'Das Bild hat weniger als <strong>%d</strong> Kommentare.',
	'PRUNE_PATTERN_RATES'			=> 'Das Bild hat weniger als <strong>%d</strong> Bewertungen.',
	'PRUNE_PATTERN_RATE_AVG'		=> 'Das Bild hat eine schlechtere Durchschnitts-Bewertung als <strong>%s</strong>.',
	'PRUNE_PATTERN_TIME'			=> 'Das Bild wurde vor „<strong>%s</strong>“ hochgeladen.',
	'PRUNE_PATTERN_USER_ID'			=> 'Das Bild wurde von einem der folgenden Benutzer hochgeladen:<br />&raquo; <strong>%s</strong>',
	'PRUNE_RATINGS'					=> 'Weniger als x Bewertungen',
	'PRUNE_RATING_AVG'				=> 'Durchschnitts-Bewertung schlechter als',
	'PRUNE_RATING_AVG_EXP'			=> 'Lösche nur Bilder, deren Durchschnitts-Bewertung schlechter als „<samp>x.yz</samp>“ ist.',
	'PRUNE_TIME'					=> 'Hochgeladen vor',
	'PRUNE_TIME_EXP'				=> 'Lösche nur Bilder, die vor „<samp>YYYY-MM-DD</samp>“ hochgeladen wurden.',
	'PRUNE_USERNAME'				=> 'Hochgeladen von',
	'PRUNE_USERNAME_EXP'			=> 'Lösche nur Bilder von bestimmten Benutzern. Um Bilder von „Gästen“ zu löschen, wähle bitte die Check-Box unter der Namens-box aus.',

	'RATE_SCALE'					=> 'Bewertungsskala',
	'RATE_SYSTEM'					=> 'Bewertungssystem aktivieren',
	'REDIRECT_ACL'					=> 'Nun kannst du für dieses Album %sBefugnisse vergeben%s.',
	'REMOVE_IMAGES_FOR_CAT'			=> 'Du musst erst die Bilder aus dem Album entfernen, bevor du das Album zu einer Kategorie machen kannst.',
	'RESET_RATING'					=> 'Bewertungen für Album zurücksetzen',
	'RESET_RATING_COMPLETED'		=> 'Bewertungen erfolgreich gelöscht.',
	'RESET_RATING_CONFIRM'			=> 'Möchtest du wirklich die Bewertungen aller Bilder aus dem Album „%s“ löschen?',
	'RESET_RATING_EXPLAIN'			=> 'Löscht alle Bewertungen zu Bildern eines Albums.',
	'RESIZE_IMAGES'					=> 'Größere Bilder verkleinern',
	'RESYNC_IMAGECOUNTS'			=> 'Anzahl der hochgeladenen Bilder resynchronisieren',
	'RESYNC_IMAGECOUNTS_CONFIRM'	=> 'Bist du sicher, dass du die Anzahl der hochgeladenen Bilder resynchronisieren willst?',
	'RESYNC_IMAGECOUNTS_EXPLAIN'	=> 'Es werden nur Bilder mitgezählt, die noch existieren.',
	'RESYNC_LAST_IMAGES'			=> '"Letztes Bild" neu ermitteln',
	'RESYNC_PERSONALS'				=> 'Persönliche Alben resynchronisieren',
	'RESYNC_PERSONALS_CONFIRM'		=> 'Bist du sicher, dass du die Persönliche Alben resynchronisieren willst?',
	'RESYNCED_IMAGECOUNTS'			=> 'Anzahl der hochgeladenen Bilder resynchronisiert',
	'RESYNCED_LAST_IMAGES'			=> '"Letztes Bild" neu ermittelt',
	'RESYNCED_PERSONALS'			=> 'Persönliche Alben resynchronisiert',
	'ROTATE_IMAGES'					=> 'Option zum Drehen von Bilder anzeigen',
	'ROTATE_IMAGES_EXP'				=> 'Das Feature steht derzeit nicht zur Verfügung, da die benötigte Funktion "imagerotate" nicht in deiner GD Version enthalten ist.',
	'ROWS_PER_PAGE'					=> 'Anzahl der Zeilen auf Bildvorschau-Seite',

	'RRC_DISPLAY_ALBUMNAME'			=> 'Name des Albums',
	'RRC_DISPLAY_COMMENTS'			=> 'Kommentare',
	'RRC_DISPLAY_IMAGENAME'			=> 'Name des Bildes',
	'RRC_DISPLAY_IMAGETIME'			=> 'Hochlade-Zeitpunkt',
	'RRC_DISPLAY_IMAGEVIEWS'		=> 'Anzahl der Bild-Betrachtungen',
	'RRC_DISPLAY_IP'				=> 'User IP',
	'RRC_DISPLAY_NONE'				=> 'Nichts',
	'RRC_DISPLAY_OPTIONS'			=> 'Welche Werte sollen unter dem Thumbnail angezeigt werden',
	'RRC_DISPLAY_USERNAME'			=> 'Benutzername',
	'RRC_DISPLAY_RATINGS'			=> 'Bewertungen',
	'RRC_GINDEX'					=> 'Neueste & zufällige Bilder & Kommentare - Feature',
	'RRC_GINDEX_COLUMNS'			=> 'Spalten',
	'RRC_GINDEX_COMMENTS'			=> 'Kommentare einklappen',
	'RRC_GINDEX_CONTESTS'			=> 'Anzahl der Wettbewerbe',
	'RRC_GINDEX_CROWS'				=> 'Anzahl der Kommentare',
	'RRC_GINDEX_MODE'				=> 'Modus',
	'RRC_GINDEX_MODE_EXP'			=> '"Zufällige Bilder" kann bei großen Datenbanken einige Ladezeit in Anspruch nehmen!',
	'RRC_GINDEX_PGALLERIES'			=> 'Bilder aus persönlichen Alben anzeigen',
	'RRC_GINDEX_ROWS'				=> 'Zeilen',
	'RRC_MODE_COMMENTS'				=> 'Kommentare',
	'RRC_MODE_NONE'					=> 'Nichts',
	'RRC_MODE_RANDOM'				=> 'Zufällige Bilder',
	'RRC_MODE_RECENT'				=> 'Neueste Bilder',
	'RRC_PROFILE_COLUMNS'			=> 'Spalten',
	'RRC_PROFILE_MODE'				=> 'Modus des "Neueste & zufällige Bilder"-Features im Profil',
	'RRC_PROFILE_MODE_EXP'			=> '"Zufällige Bilder" kann bei großen Datenbanken einige Ladezeit in Ansrpuch nehmen!',
	'RRC_PROFILE_ROWS'				=> 'Zeilen',

	'RSZ_HEIGHT'					=> 'Maximale Höhe beim Anzeigen eines Bildes',
	'RSZ_WIDTH'						=> 'Maximale Breite beim Anzeigen eines Bildes',

	'SEARCH_SETTINGS'				=> 'Such-Einstellungen',
	'SELECT_ALBUM'					=> 'Wähle ein Album aus',
	'SELECT_ALBUMS'					=> 'Wähle Alben aus',
	'SELECT_GROUPS'					=> 'Wähle Gruppen',
	'SELECT_PERM_SYS'				=> 'Wähle Berechtigungsart',
	'SELECT_PERMISSIONS'			=> 'Wähle Berechtigungen',
	'SELECTED_ALBUM_NOT_EXIST'		=> 'Das ausgewählte Album existiert nicht.',
	'SELECTED_ALBUMS'				=> 'Ausgewählte Alben',
	'SELECTED_GROUPS'				=> 'Ausgewählte Gruppen',
	'SELECTED_PERM_SYS'				=> 'Ausgewählte Berechtigungsart',
	'SET_PERMISSIONS'				=> '<br /><a href="%s">Berechtigungen</a> jetzt vergeben.',
	'SHORTED_IMAGENAMES'			=> 'Bildernamen kürzen',
	'SHORTED_IMAGENAMES_EXP'		=> 'Sollte der Name eines Bildes zu lange sein und kein Leerzeichen enthalten, kann es zu Problemen im Layout führen.',
	'SORRY_NO_STATISTIC'			=> 'Entschuldigung, aber dieser Statistik-Wert ist noch nicht verfügbar.',
	'SYNC_IN_PROGRESS'				=> 'Synchronisiere Alben',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Derzeit wird Bilder %1$d von %2$d synchronisiert.',

	'THUMBNAIL_CACHE'				=> 'Bildvorschau Cache',
	'THUMBNAIL_QUALITY'				=> 'Bildvorschau Qualität (1-100)',
	'THUMBNAIL_SETTINGS'			=> 'Bildvorschau Einstellungen',

	'UC_IMAGE_NAME'					=> 'Bildname',
	'UC_IMAGE_ICON'					=> '"Letzes Bild"-Icon',
	'UC_IMAGEPAGE'					=> 'Bild auf der Image-page (mit Kommentaren und Bewertungen)',
	'UC_LINK_CONFIG'				=> 'Link Konfiguration',
	'UC_LINK_HIGHSLIDE'				=> 'Highslide-Plugin öffnen',
	'UC_LINK_IMAGE'					=> 'Bild öffnen',
	'UC_LINK_IMAGE_PAGE'			=> 'Image-page (mit Kommentaren und Bewertungen) öffnen',
	'UC_LINK_LYTEBOX'				=> 'Lytebox-Plugin öffnen',
	'UC_LINK_NEXT'					=> 'Nächstes Bild',
	'UC_LINK_NONE'					=> 'Kein Link',
	'UC_LINK_SHADOWBOX'				=> 'Shadowbox-Plugin öffnen',
	'UC_THUMBNAIL'					=> 'Thumbnail',
	'UC_THUMBNAIL_EXP'				=> 'Wird auch für den BBCode benutzt.',
	'UNLOCKED'						=> 'Entsperrt',
	'UPDATE_BBCODE'					=> 'BBCode aktualisieren',
	'UPLOAD_IMAGES'					=> 'Mehrere Bilder auf einmal hochladen',

	'VIEW_IMAGE_URL'				=> 'Link zum Bild auf der Imagepage anzeigen',

	'WATERMARK'						=> 'Wasserzeichen',
	'WATERMARK_HEIGHT'				=> 'Mindesthöhe',
	'WATERMARK_HEIGHT_EXP'			=> 'Um zu verhindern, dass kleine Bilder vollkommen vom Wasserzeichen verdeckt werden, kannst du hier eine Mindesthöhe für das Bild angeben. Wenn das Bild kleiner ist, wird das Wasserzeichen nicht eingeblendet.',
	'WATERMARK_IMAGES'				=> 'Wasserzeichen aktivieren',
	'WATERMARK_OPTIONS'				=> 'Wasserzeichen-Einstellungen',
	'WATERMARK_POSITION'			=> 'Wasserzeichen-Position',
	'WATERMARK_POSITION_BOTTOM'		=> 'unten',
	'WATERMARK_POSITION_CENTER'		=> 'mittig',
	'WATERMARK_POSITION_LEFT'		=> 'links',
	'WATERMARK_POSITION_MIDDLE'		=> 'mittig',
	'WATERMARK_POSITION_RIGHT'		=> 'rechts',
	'WATERMARK_POSITION_TOP'		=> 'oben',
	'WATERMARK_SOURCE'		 		=> 'Wasserzeichen Bild (Releativer Pfad zum Forums Root)',
	'WATERMARK_WIDTH'				=> 'Mindestbreite',
	'WATERMARK_WIDTH_EXP'			=> 'Um zu verhindern, dass kleine Bilder vollkommen vom Wasserzeichen verdeckt werden, kannst du hier eine Mindestbreite für das Bild angeben. Wenn das Bild kleiner ist, wird das Wasserzeichen nicht eingeblendet.',
));

/**
* A copy of Handyman` s MOD version check, to view it on the gallery overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Release Ankündigung',
	'CURRENT_VERSION'		=> 'Derzeitige Version',
	'DOWNLOAD_LATEST'		=> 'Neueste Version herunterladen',
	'LATEST_VERSION'		=> 'Neueste Version',
	'NO_INFO'					=> 'Der Server konnte nicht erreicht werden',
	'NOT_UP_TO_DATE'			=> '%s ist nicht aktuell',
	'RELEASE_ANNOUNCEMENT'	=> 'Ankündigungsthema',
	'UP_TO_DATE'			=> '%s ist aktuell',
	'VERSION_CHECK'			=> 'MOD Version Check',
));

?>