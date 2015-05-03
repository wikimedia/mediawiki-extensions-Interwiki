<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * @file
 * @ingroup Extensions
 * @version 3.0
 * @author Stephanie Amanda Stevens <phroziac@gmail.com>
 * @author Robin Pepermans (SPQRobin) <robinp.1273@gmail.com>
 * @author Jack Phoenix <jack@shoutwiki.com>
 * @author Calimonius the Estrange <isarra@shoutwiki.com>
 * @copyright Copyright © 2005-2007 Stephanie Amanda Stevens
 * @copyright Copyright © 2007-2011 Robin Pepermans (SPQRobin)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link http://www.mediawiki.org/wiki/Extension:SpecialInterwiki Documentation
 * Formatting improvements Stephen Kennedy, 2006.
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( "This is not a valid entry point.\n" );
}

// Set this value to true in LocalSettings.php if you will not use this
// extension to actually change any interwiki table entries. It will suppress
// the addition of a log for interwiki link changes.
$wgInterwikiViewOnly = false;

// Name of a database where global interwikis will be stored.
$wgInterwikiCentralDB = null;

// Extension credits for Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Interwiki',
	'author' => array(
		'Stephanie Amanda Stevens',
		'Alexandre Emsenhuber',
		'Robin Pepermans',
		'Siebrand Mazeland',
		'Platonides',
		'Raimond Spekking',
		'Sam Reed',
		'Jack Phoenix',
		'Calimonius the Estrange',
		'...'
	),
	'version' => '3.0 20140719',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Interwiki',
	'descriptionmsg' => 'interwiki-desc',
);

$wgExtensionFunctions[] = 'InterwikiHooks::onExtensionFunctions';

$wgResourceModules['ext.interwiki.specialpage'] = array(
	'styles' => 'Interwiki.css',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'Interwiki',
	'dependencies' => array(
		'jquery.makeCollapsible',
	),
);

// Set up the new special page
$wgMessagesDirs['Interwiki'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['Interwiki'] = __DIR__ . '/Interwiki.i18n.php';
$wgExtensionMessagesFiles['InterwikiAlias'] = __DIR__ . '/Interwiki.alias.php';
$wgAutoloadClasses['InterwikiHooks'] = __DIR__ . '/Interwiki_hooks.php';
$wgAutoloadClasses['SpecialInterwiki'] = __DIR__ . '/Interwiki_body.php';
$wgAutoloadClasses['InterwikiLogFormatter'] = __DIR__ . '/Interwiki_body.php';
$wgSpecialPages['Interwiki'] = 'SpecialInterwiki';
$wgSpecialPageGroups['Interwiki'] = 'wiki';

$wgHooks['InterwikiLoadPrefix'][] = 'InterwikiHooks::onInterwikiLoadPrefix';
