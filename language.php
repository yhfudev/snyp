<?php
/*
 * Copyright (c) 2005 Nils Rottgardt <nils@rottgardt.org>
 * All rights reserved
 *
 * Published under BSD-licence
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * - Redistributions of source code must retain the above copyright notice,
 *   this list of conditions and the following disclaimer.
 * - Redistributions in binary form must reproduce the above copyright
 *   notice, this list of conditions and the following disclaimer in the
 *   documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 * PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
 * LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 * NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

require_once 'config.inc.php';

$GLOBALS["tEbayUrl"] = "ebay.com";

switch(LANG) {
	case 1:
	//Index Liste
	$GLOBALS["tSnipeStatusArray"] = array('sniping...','Auktion gewonnen','überboten','Gruppe hat gewonnen','keine Ausgabe zugeordnet');
	$GLOBALS["tSnipeListSummaryArray"] = array('laufend','gewonnen','verloren');
	$GLOBALS["tKeine"] = 'Keine Gruppe';
	$GLOBALS["tAlles"] = 'Alles';
	$GLOBALS["tMenueAltArray"] = array('Reload','Gruppen verwalten','neuen Artikel eingeben','gewonnene und verlorene Artikel löschen');
	$GLOBALS["tArtikelNr"] = 'Artikelnummer';
	$GLOBALS["tSnipeStatus"] = 'Snipestatus';
	$GLOBALS["tBildTableTopic"] = 'Bild';
	$GLOBALS["tProzessStatus"] = 'Prozessstatus';
	$GLOBALS["tDbLeer"] = 'keine Einträge in der Datenbank';
	$GLOBALS["tNoProcess"] = 'Kein Prozess!!!';
	//Gruppennotizen
	$GLOBALS["ueGruppennotizen"] = 'Gruppennotizen';
	$GLOBALS["tNotizGespeichert"] = 'Notiz wurde gespeichert.';
	$GLOBALS["tKeineAuswahl"] = 'keine Auswahl';
	$GLOBALS["ueGruppeAnzeigen"] = 'Gruppe Anzeigen';
	$GLOBALS["tGruppnAuswahl"] = 'Gruppenauswahl';
	$GLOBALS["bAnzeigen"] = 'Anzeigen';
	$GLOBALS["bSpeichern"] = 'Speichern';
	//Gruppe verwalten
	$GLOBALS["ueGruppenverwaltung"] = 'Gruppenverwaltung';
	$GLOBALS["tGruppeErstellt"] = 'wurde erstellt';
	$GLOBALS["tGruppeWaehlen"] = 'Bitte eine Gruppe wählen';
	$GLOBALS["ueGruppeAnlegen"] = 'Gruppe anlegen';
	$GLOBALS["ueGruppenName"] = 'Gruppenname';
	$GLOBALS["ueGruppenNotizen"] = 'Notizen';
	$GLOBALS["bGruppeErstellen"] = 'erstellen';
	$GLOBALS["ueGruppeLoeschen"] = 'Gruppe lˆschen';
	$GLOBALS["bGruppeLoeschen"] = 'löschen';
	
	//neuer Artikel
	$GLOBALS["ueNeuerArtikel"] = 'neuer Artikel';
	$GLOBALS["tArtikelDaten"] = 'Artikeldaten';
	$GLOBALS["tAuktionsNr"] = 'Auktionsnnummer';
	$GLOBALS["tHoechstgebot"] = 'Höchstgebot';
	
	$GLOBALS["tBid"] = 'Gebot';
	$GLOBALS["tAnumUrl"] = 'Artikel Nummer oder URL';
	$GLOBALS["tSelectCat4Search"] = 'Wählen Sie eine Kategorie für die Suche aus';
	$GLOBALS["tWatchlist"] = 'Beobachtungsliste';
	$GLOBALS["tGroup"] = 'Gruppen';
	$GLOBALS["tFilterGroup"] = 'Gruppe filtern';
	$GLOBALS["tCleanupAuctions"] = 'Auktionen aufräumen';
	$GLOBALS["tCleanUp"] = 'Aufräumen';
	$GLOBALS["tSnipeAnArticle"] = 'Snipe einen Artikel'; // Snipe an article
	$GLOBALS["tSnipeAllArticle"] = 'Snipe alle Artikel'; // Snipe all Article
	$GLOBALS["tNotes"] = 'Notizen';
	$GLOBALS["tErase"] = 'löschen';
	$GLOBALS["tErrorNoFileDbEntry"] = 'Fehler - keine Datei zum Datenbankeintrag gefunden!';

	$GLOBALS["tCurrencySign"] = '&euro;';
	$GLOBALS["tEbayUrl"] = "ebay.de";
	$GLOBALS["pMenue"] = "menue-d.gif";
	break;
	case 2:
	//Index List
	$GLOBALS["tSnipeStatusArray"] = array('sniping...','auction won','overbidden','Group won','no message assigned');
	$GLOBALS["tSnipeListSummaryArray"] = array('running','won','lost');
	$GLOBALS["tKeine"] = 'none';
	$GLOBALS["tAlles"] = 'all';
	$GLOBALS["tMenueAltArray"] = array('reload','manage groups','add new auction','delete won and lost auctions');
	$GLOBALS["tArtikelNr"] = 'auctionnumer';
	$GLOBALS["tSnipeStatus"] = 'snipestatus';
	$GLOBALS["tBildTableTopic"] = 'image';
	$GLOBALS["tProzessStatus"] = 'processstatus';
	$GLOBALS["tDbLeer"] = 'no entries in database';
	$GLOBALS["tNoProcess"] = 'no process!!!';
	//Groupnotes
	$GLOBALS["ueGruppennotizen"] = 'groupnotes';
	$GLOBALS["tNotizGespeichert"] = 'Note saved.';
	$GLOBALS["tKeineAuswahl"] = 'no selection';
	$GLOBALS["ueGruppeAnzeigen"] = 'show group';
	$GLOBALS["tGruppnAuswahl"] = 'Groupselection';
	$GLOBALS["bAnzeigen"] = 'show';
	$GLOBALS["bSpeichern"] = 'save';
	//manage groups
	$GLOBALS["ueGruppenverwaltung"] = 'Groupmanagement';
	$GLOBALS["tGruppeErstellt"] = 'was created';
	$GLOBALS["tGruppeWaehlen"] = 'please select a group';
	$GLOBALS["ueGruppeAnlegen"] = 'create group';
	$GLOBALS["ueGruppenName"] = 'groupname';
	$GLOBALS["ueGruppenNotizen"] = 'notes';
	$GLOBALS["bGruppeErstellen"] = 'create';
	$GLOBALS["ueGruppeLoeschen"] = 'delete group';
	$GLOBALS["bGruppeLoeschen"] = 'delete';
	
	//new auction
	$GLOBALS["ueNeuerArtikel"] = 'new auction';
	$GLOBALS["tArtikelDaten"] = 'auction informations';
	$GLOBALS["tAuktionsNr"] = 'auctionnumer';
	$GLOBALS["tHoechstgebot"] = 'highest bid';

	$GLOBALS["tBid"] = 'Bid';
	$GLOBALS["tAnumUrl"] = 'Article number or URL';
	$GLOBALS["tSelectCat4Search"] = 'Select a category for the search';
	$GLOBALS["tWatchlist"] = 'Watchlist';
	$GLOBALS["tGroup"] = 'Group';
	$GLOBALS["tFilterGroup"] = 'Filter group';
	$GLOBALS["tCleanupAuctions"] = 'Clean up auctions';
	$GLOBALS["tCleanUp"] = 'Clean up';
	$GLOBALS["tSnipeAnArticle"] = 'Snipe an article';
	$GLOBALS["tSnipeAllArticle"] = 'Snipe all Article';
	$GLOBALS["tNotes"] = 'Notes';
	$GLOBALS["tErase"] = 'Erase';
	$GLOBALS["tErrorNoFileDbEntry"] = 'Error - no file found for database entry!';

	$GLOBALS["tCurrencySign"] = '$';
	$GLOBALS["tEbayUrl"] = "ebay.com";
	$GLOBALS["pMenue"] = "menue-e.gif";
}
?>
