<?php

/*
	myTinyTodo language pack
	Language: Deutsch
	Original name: Deutsch
	Author: Alexander Adam
	Author Url: http://www.alexander-adam.net
	AppVersion: v1.5
	Date: 2012-04-07
*/

class Lang extends DefaultLang
{
	var $js = array
	(
		'confirmDelete' => "Sicher das du diesen Task löschen willst?",
		'confirmLeave' => "Einige Daten wurden nicht gespeichert. Seite wirklich verlassen?",
		'actionNoteSave' => "Speichern",
		'actionNoteCancel' => "Abbrechen",
		'error' => "Ein Fehler ist aufgetreten (hier klicken für Details)",
		'denied' => "Zugriff verweigert",
		'invalidpass' => "Falsches Passwort",
		'tagfilter' => "Tag:",
		'addList' => "Neue Liste erstellen",
		'renameList' => "Liste umbenennen",
		'deleteList' => "Damit werden alle Tasks aus der aktuellen Liste gelöscht.\\nBist du sicher?",
		'clearCompleted' => "Damit werden alle abgeschlossenen Tasks in dieser Liste gelöscht.\\nBist du sicher?",
		'settingsSaved' => "Einstellungen gespeichert. Bitte warten...",
	);

	var $inc = array
	(
		'htab_newtask' => "Neuer Task",
		'htab_search' => "Suchen",
		'btn_add' => "Hinzufügen",
		'btn_search' => "Suchen",
		'advanced_add' => "Erweitert",
		'searching' => "Suchen nach",
		'tasks' => "Tasks",
		'taskdate_inline_created' => "Erstellt am %s",
		'taskdate_inline_completed' => "Abgeschlossen am %s",
		'taskdate_inline_duedate' => "Bis %s",
		'taskdate_created' => "Erstellt",
		'taskdate_completed' => "Abgeschlossen",
		'go_back' => "&lt;&lt; Zurück",
		'edit_task' => "Task bearbeiten",
		'add_task' => "Neuer Task",
		'priority' => "Priorität",
		'task' => "Task",
		'note' => "Notiz",
		'tags' => "Tags",
		'save' => "Speichern",
		'cancel' => "Abbrechen",
		'password' => "Passwort",
		'btn_login' => "Login",
		'a_login' => "Login",
		'a_logout' => "Logout",
		'public_tasks' => "Öffentliche Tasks",
		'tagcloud' => "Tags",
		'tagfilter_cancel' => "Filter abbrechen",
		'sortByHand' => "Sortierung per Hand",
		'sortByPriority' => "Sortierung nach Priorität",
		'sortByDueDate' => "Sortierung nach Fälligkeitsdatum",
		'sortByDateCreated' => "Sortierung nach Erstelldatum",
		'sortByDateModified' => "Sortierung nach Änderungsdatum",
		'due' => "Fällig",
		'daysago' => "vor %d Tagen",
		'indays' => "in %d Tagen",
		'months_short' => array("Jan","Feb","Mär","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Dez"),
		'months_long' => array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember"),
		'days_min' => array("So","Mo","Di","Mi","Do","Fr","Sa"),
		'days_long' => array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag"),
		'today' => "heute",
		'yesterday' => "gestern",
		'tomorrow' => "morgen",
		'f_past' => "Überfällig",
		'f_today' => "Heute und morgen",
		'f_soon' => "Bald",
		'action_edit' => "Bearbeiten",
		'action_note' => "Notiz bearbeiten",
		'action_delete' => "Löschen",
		'action_priority' => "Priorität",
		'action_move' => "Verschieben nach",
		'notes' => "Notizen:",
		'notes_show' => "Anzeigen",
		'notes_hide' => "Ausblenden",
		'list_new' => "Neue Liste",
		'list_rename' => "Liste umbenennen",
		'list_delete' => "Liste löschen",
		'list_publish' => "Liste veröffentlichen",
		'list_showcompleted' => "Zeige abgeschlossene Tasks",
		'list_clearcompleted' => "Lösche abgeschlossene Tasks",
		'list_select' => "Liste auswählen",
		'list_export' => "Exportieren",
		'list_export_csv' => "CSV",
		'list_export_ical' => "iCalendar",
		'list_rssfeed' => "RSS Feed",
		'alltags' => "Alle Tags:",
		'alltags_show' => "Alle anzeigen",
		'alltags_hide' => "Alle ausblenden",
		'a_settings' => "Einstellungen",
		'rss_feed' => "RSS Feed",
		'feed_title' => "%s",
		'feed_completed_tasks' => "Abgeschlossene Tasks",
		'feed_modified_tasks' => "Bearbeitete Tasks",
		'feed_new_tasks' => "Neue Tasks",
		'alltasks' => "Alle Tasks",

		/* Settings */
		'set_header' => "Einstellungen",
		'set_title' => "Titel",
		'set_title_descr' => "(angeben, wenn du den ursprünglichen Titel ändern willst)",
		'set_language' => "Sprache",
		'set_protection' => "Passwortschutz",
		'set_enabled' => "Aktiviert",
		'set_disabled' => "Deaktiviert",
		'set_newpass' => "Neues Passwort",
		'set_newpass_descr' => "(freilassen, wenn du das aktuelle Passwort nicht ändern willst)",
		'set_smartsyntax' => "Smart syntax",
		'set_smartsyntax_descr' => "(/Priorität/ Task /Tags/)",
		'set_timezone' => "Zeitzone",
		'set_autotag' => "Autotagging",
		'set_autotag_descr' => "(fügt automatisch Tags aus dem aktuellen Tag Filter in den neuen Tasks)",
		'set_sessions' => "Session handling Methode",
		'set_sessions_php' => "PHP",
		'set_sessions_files' => "Dateien",
		'set_firstdayofweek' => "Erster Tag der Woche",
		'set_custom' => "Benutzerdefiniert",
		'set_date' => "Datums-Format",
		'set_date2' => "kurzes Datums-Format",
		'set_shortdate' => "kurzes Datum (aktuelles Jahr)",
		'set_clock' => "Zeit-Format",
		'set_12hour' => "12-Stunden",
		'set_24hour' => "24-Stunden",
		'set_submit' => "Änderungen speichern",
		'set_cancel' => "Abbrechen",
		'set_showdate' => "Task Datum in Liste anzeigen",
	);
}