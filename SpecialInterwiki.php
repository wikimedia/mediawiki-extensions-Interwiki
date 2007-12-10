<?php
/*
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * @author Stephanie Amanda Stevens <phroziac@gmail.com>
 * @author SPQRobin <robin_1273@hotmail.com>
 * @copyright Copyright (C) 2005-2007 Stephanie Amanda Stevens
 * @copyright Copyright (C) 2007 SPQRobin
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * Formatting improvements Stephen Kennedy, 2006.
 */

if (!defined('MEDIAWIKI')) die();
$wgExtensionFunctions[] = "Interwiki";

$wgExtensionCredits['specialpage'][] = array(
	'name'        => 'Interwiki Edit Page',
	'url'         => 'http://mediawiki.org/wiki/Extension:Special_page_to_work_with_the_interwiki_table',
	'description' => 'Adds a [[Special:Interwiki|special page]] to view and manipulate the interwiki table',
	'version'     => '21-11-07',
	'author'      => array( 'Stephanie Amanda Stevens', 'SPQRobin', 'others' ),
);

function Interwiki() {
        global $IP, $wgMessageCache, $wgHooks, $wgSpecialInterwikiMessages;
        require_once( "$IP/includes/SpecialPage.php" );
        require_once( 'SpecialInterwiki.i18n.php');
        foreach( $wgSpecialInterwikiMessages as $key => $value ) {
        $wgMessageCache->addMessages( $wgSpecialInterwikiMessages[$key], $key );}

          # Add a new log type
          $wgHooks['LogPageValidTypes'][] = 'wfInterwikiAddLogType';

	# Add a new log type
	$wgHooks['LogPageValidTypes'][] = 'wfInterwikiAddLogType';
	$wgHooks['LogPageLogName'][] = 'wfInterwikiAddLogName';
	$wgHooks['LogPageLogHeader'][] = 'wfInterwikiAddLogHeader';
	$wgHooks['LogPageActionText'][] = 'wfInterwikiAddActionText';


	class Interwiki extends SpecialPage {
		function Interwiki() {
			SpecialPage::SpecialPage( 'Interwiki' );
			$this->includable( true );
		}

		function execute( $par = null ) {
			$fname = 'Interwiki::execute';
			global $wgOut, $wgRequest, $wgUser;

			$this->setHeaders();
			$wgOut->setPagetitle( wfMsg( 'interwiki' ) );
			$do = $wgRequest->getVal( 'do' );

			// Some common checks
			$admin = $wgUser->isAllowed( 'interwiki' );
			$selfTitle = Title::makeTitle( NS_SPECIAL, 'Interwiki' );

			// Protect administrative actions against malicious requests
			$safePost = $wgRequest->wasPosted() &&
				$wgUser->matchEditToken( $wgRequest->getVal( 'wpEditToken' ) );

			if ($do == "delete") {
				if (!$admin) { $wgOut->permissionRequired('interwiki'); return; }
				$prefix = $wgRequest->getVal( 'prefix' );
				$encPrefix = htmlspecialchars( $prefix );

				$action = $selfTitle->escapeLocalURL( "do=delete2" );
				$button = wfMsgHtml("delete");
				$topmessage = wfMsgHtml('interwiki_delquestion', $prefix);
				$deletingmessage = wfMsgHtml('interwiki_deleting', $prefix);
				$reasonmessage = wfMsgHtml('deletecomment');
				$token = htmlspecialchars( $wgUser->editToken() );

					$out .= "<fieldset>
					<legend>$topmessage</legend>
					<form id=\"delete\" method=\"post\" action=\"{$action}\">
					<table><tr>
					<td>$deletingmessage</td>
					</tr><tr>
					<td><input type=\"hidden\" name=\"prefix\" value=\"{$encPrefix}\" />
					$reasonmessage &nbsp; <input tabindex='1' type='text' name=\"reason\" maxlength='200' size='60' /></td>
					</tr><tr><td>
					<input type=\"submit\" name=\"delete\" value=\"{$button}\" />
					<input type=\"hidden\" name=\"wpEditToken\" value=\"{$token}\"/>
					</td></tr></table>
					</form>
					</fieldset>\n";
			} elseif ($do == "delete2" && $safePost) {
				if (!$admin) { $wgOut->permissionRequired('interwiki'); return; }

				$prefix = $wgRequest->getVal('prefix');
				$reason = $wgRequest->getText('reason');

				$dbw =& wfGetDB( DB_MASTER );
				$dbw->delete( 'interwiki', array( 'iw_prefix' => $prefix ), $fname );

				if ($dbw->affectedRows() == 0) {
					$wgOut->addWikiText( wfMsg( 'interwiki_delfailed', $prefix ) );
				} else {
					$wgOut->addWikiText( wfMsg( 'interwiki_deleted', $prefix ) . '<br /><br />' . wfMsg ( 'returnto', '[[Special:Log/interwiki]]' ) ); # I don't know how to add a link to Special:Interwiki
					$log = new LogPage( 'interwiki' );
					$log->addEntry( 'interwiki', $selfTitle, wfMsgForContent( 'interwiki_log_deleted', $prefix, $reason ) );
				}
			} elseif ($do == "add") {
				if (!$admin) { $wgOut->permissionRequired('interwiki'); return; };
				$action = $selfTitle->escapeLocalURL( "do=add2");
				$topmessage = wfMsgHtml('interwiki_addtext');
				$prefixmessage = wfMsgHtml('interwiki_prefix');
				$transmessage = wfMsgHtml('interwiki_trans');
				$localmessage = wfMsgHtml('interwiki_local');
				$reasonmessage = wfMsgHtml('interwiki_reasonfield');
				$urlmessage = wfMsgHtml('interwiki_url');
				$button = wfMsgHtml('interwiki_addbutton');
				$token = htmlspecialchars( $wgUser->editToken() );

				$out = "<fieldset>
					<legend>$topmessage</legend>
					<form id=\"add\" method=\"post\" action=\"{$action}\">
					<table><tr>
					<td>$prefixmessage</td>
					<td><input tabindex='1' type='text' name=\"prefix\" maxlength='20' size='20' /></td>
					</tr><tr>
					<td>$localmessage</td>
					<td><input type=\"checkbox\" id=\"local\" name=\"local\" /></td>
					</tr><tr>
					<td>$transmessage</td>
					<td><input type=\"checkbox\" id=\"trans\" name=\"trans\" /></td>
					</tr><tr>
					<td>$urlmessage</td>
					<td><input tabindex='1' type='text' name=\"theurl\" maxlength='200' size='60' value='http://' /></td>
					</tr><tr>
					<td>$reasonmessage</td>
					<td><input tabindex='1' type='text' name=\"reason\" maxlength='200' size='60' /></td>
					</tr></table>
					<input type=\"submit\" name=\"add\" value=\"{$button}\" />
					<input type=\"hidden\" name=\"wpEditToken\" value=\"{$token}\" />
					</form>
					</fieldset>\n";
			} elseif ($do == "add2" && $safePost) {
				if (!$admin) { $wgOut->permissionRequired('interwiki'); return; }
				$prefix = $wgRequest->getVal('prefix');
				$reason = $wgRequest->getText('reason');
				$theurl = $wgRequest->getVal('theurl');
				$local = $wgRequest->getCheck('local') ? 1 : 0;
				$trans = $wgRequest->getCheck('trans') ? 1 : 0;

				$dbw =& wfGetDB( DB_MASTER );
				$dbw->insert( 'interwiki',
					array(
						'iw_prefix' => $prefix,
						'iw_url'    => $theurl,
						'iw_local'  => $local,
						'iw_trans'  => $trans ),
					$fname,
					'IGNORE' );

				if( $dbw->affectedRows() == 0 ) {
					$wgOut->addWikiText( wfMsg( 'interwiki_addfailed', $prefix ) );
				} else {
					$wgOut->addWikiText( wfMsg( 'interwiki_added', $prefix ) . '<br /><br />' . wfMsg ( 'returnto', '[[Special:Log/interwiki]]' ) ); # I don't know how to add a link to Special:Interwiki
					$log = new LogPage( 'interwiki' );
					$log->addEntry( 'interwiki', $selfTitle, wfMsgForContent( 'interwiki_log_added', $prefix, $theurl, $trans, $local, $reason ) );
				}
			} else {
				$dbr =& wfGetDB( DB_SLAVE );
				$res = $dbr->select( 'interwiki', '*' );

				$prefixmessage = wfMsgHtml('interwiki_prefix');
				$urlmessage = wfMsgHtml('interwiki_url');
				$localmessage = wfMsgHtml('interwiki_local');
				$transmessage = wfMsgHtml('interwiki_trans');
				$deletemessage = wfMsgHtml('delete');
                $errormessage = wfMsgHtml('interwiki_error');
				$addtext = wfMsgHtml('interwiki_addtext');

				if ($admin) {
                               $skin = $wgUser->getSkin();
                               $out = $skin->makeLinkObj( $selfTitle, $addtext, 'do=add' );
				} else {
					$out = '';
				}
				$out .= "
				<br />
				<table width=\"100%\" border=\"2\">
				<tr><th>$prefixmessage</th> <th>$urlmessage</th> <th>$localmessage</th> <th>$transmessage</th>";
				if( $admin ) {
					$out .= "<th>$deletemessage</th>";
				}

				$out .= "</tr>\n";

				$numrows = $dbr->numRows( $res );
				if ($numrows == 0) {
					$out .= "<br /><div class=\"error\">$errormessage</div><br />";
				}
				while( $s = $dbr->fetchObject( $res ) ) {
					$prefix = htmlspecialchars( $s->iw_prefix );
					$url = htmlspecialchars( $s->iw_url );
					$trans = htmlspecialchars( $s->iw_trans );
					$local = htmlspecialchars( $s->iw_local );
					$out .= "<tr><td>$prefix</td> <td>$url</td> <td>$local</td> <td>$trans</td>";
					if( $admin ) {
						$skin = $wgUser->getSkin();
						$out .= '<td>';
						$out .= $skin->makeLinkObj( $selfTitle, $deletemessage,
							'do=delete&prefix=' . urlencode( $s->iw_prefix ) );
						$out .= '</td>';
					}

					$out .= "</tr>\n";
				}
				$dbr->freeResult( $res );
				$out .= "</table><br />";
			}
			$wgOut->addHTML($out);
		}
	}

	SpecialPage::addPage( new Interwiki );
}


function wfInterwikiAddLogType( &$types ) {
	if ( !in_array( 'interwiki', $types ) )
		$types[] = 'interwiki';
	return true;
}

function wfInterwikiAddLogName( &$names ) {
	$names['interwiki'] = 'interwiki_logpagename';
	return true;
}

function wfInterwikiAddLogHeader( &$headers ) {
	$headers['interwiki'] = 'interwiki_logpagetext';
	return true;
}

function wfInterwikiAddActionText( &$actions ) {
	$actions['interwiki/interwiki'] = 'interwiki_logentry';
	return true;
}
