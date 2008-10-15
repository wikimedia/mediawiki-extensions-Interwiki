<?php
/**
 * Internationalisation file for extension Interwiki.
 *
 * @addtogroup Extensions
 *
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
 */

$messages = array();

$messages['en'] = array(
	# general messages
	'interwiki'                => 'View and edit interwiki data',
	'interwiki-title-norights' => 'View interwiki data',
	'interwiki-desc'           => 'Adds a [[Special:Interwiki|special page]] to view and edit the interwiki table',
	'interwiki_prefix'         => 'Prefix',
	'interwiki_reasonfield'    => 'Reason',
	'interwiki_intro'          => 'See $1 for more information about the interwiki table.
There is a [[Special:Log/interwiki|log of changes]] to the interwiki table.',
	'interwiki_url'            => 'URL', # only translate this message if you have to change it
	'interwiki_local'          => 'Local', # only translate this message if you have to change it
	'interwiki_trans'          => 'Trans', # only translate this message if you have to change it
	'interwiki_error'          => 'Error: The interwiki table is empty, or something else went wrong.',

	# deleting a prefix
	'interwiki_delquestion'    => 'Deleting "$1"',
	'interwiki_deleting'       => 'You are deleting prefix "$1".',
	'interwiki_deleted'        => 'Prefix "$1" was successfully removed from the interwiki table.',
	'interwiki_delfailed'      => 'Prefix "$1" could not be removed from the interwiki table.',

	# adding a prefix
	'interwiki_addtext'        => 'Add an interwiki prefix',
	'interwiki_addintro'       => 'You are adding a new interwiki prefix.
Remember that it cannot contain spaces ( ), colons (:), ampersands (&), or equal signs (=).',
	'interwiki_addbutton'      => 'Add',
	'interwiki_added'          => 'Prefix "$1" was successfully added to the interwiki table.',
	'interwiki_addfailed'      => 'Prefix "$1" could not be added to the interwiki table.
Possibly it already exists in the interwiki table.',
	'interwiki_defaulturl'     => 'http://www.example.com/$1', # only translate this message if you have to change it

	# editing a prefix
	'interwiki_edittext'       => 'Editing an interwiki prefix',
	'interwiki_editintro'      => 'You are editing an interwiki prefix.
Remember that this can break existing links.',
	'interwiki_edited'         => 'Prefix "$1" was successfully modified in the interwiki table.',
	'interwiki_editerror'      => 'Prefix "$1" can not be modified in the interwiki table.
Possibly it does not exist.',

	# interwiki log
	'interwiki_logpagename'    => 'Interwiki table log',
	'interwiki_log_added'      => 'added prefix "$2" ($3) (trans: $4) (local: $5) to the interwiki table',
	'interwiki_log_edited'     => 'modified prefix "$2" : ($3) (trans: $4) (local: $5) in the interwiki table',
	'interwiki_log_deleted'    => 'removed prefix "$2" from the interwiki table',
	'interwiki_logpagetext'    => 'This is a log of changes to the [[Special:Interwiki|interwiki table]].',
	'interwiki_defaultreason'  => 'no reason given',
	'interwiki_logentry'       => '', # do not translate this message

	'right-interwiki'          => 'Edit interwiki data',
);

/** Message documentation (Message documentation)
 * @author Jon Harald Søby
 * @author Meno25
 * @author SPQRobin
 */
$messages['qqq'] = array(
	'interwiki' => 'Part of the interwiki extension. This message is the title of the special page [[Special:Interwiki]].',
	'interwiki-title-norights' => 'Part of the interwiki extension. This message is the title of the special page [[Special:Interwiki]] when the user has no right to edit the interwiki data, so can only view them.',
	'interwiki-desc' => 'Part of the interwiki extension. This message is the description shown on [[Special:Version]].',
	'interwiki_prefix' => 'Part of the interwiki extension.',
	'interwiki_reasonfield' => '{{Identical|Reason}}',
	'interwiki_intro' => 'Part of the interwiki extension.
Parameter $1 contains the following (a link): [http://www.mediawiki.org/wiki/Interwiki_table MediaWiki.org]',
	'interwiki_error' => 'Part of the interwiki extension. This error message is shown when the Special:Interwiki page is empty.',
	'interwiki_delquestion' => 'Part of the interwiki extension.
Parameter $1 is the interwiki prefix you are deleting.

{{Identical|Deleting $1}}',
	'interwiki_deleting' => 'Part of the interwiki extension.',
	'interwiki_deleted' => 'Part of the interwiki extension.',
	'interwiki_addbutton' => 'Part of the interwiki extension. This message is the text of the button to submit the interwiki prefix you are adding.

{{Identical|Add}}',
	'interwiki_editerror' => 'Part of the interwiki extension. Error message when modifying a prefix has failed.',
	'interwiki_logpagename' => 'Part of the interwiki extension. This message is shown as page title on Special:Log/interwiki.',
	'interwiki_log_added' => 'Part of the interwiki extension. Shows up in "Special:Log/interwiki" when someone has added a prefix. Leave parameters and text between brackets exactly as it is.',
	'interwiki_log_edited' => 'Part of the interwiki extension. Shows up in "Special:Log/interwiki" when someone has modified a prefix. Leave parameters and text between brackets exactly as it is.',
	'interwiki_log_deleted' => 'Part of the interwiki extension. Shows up in "Special:Log/interwiki" when someone removed a prefix.',
	'interwiki_logpagetext' => 'Part of the interwiki extension. Summary shown on Special:Log/interwiki.',
	'interwiki_defaultreason' => 'Part of the interwiki extension. This message is the default reason in the interwiki log (when adding or deleting a prefix).

{{Identical|No reason given}}',
	'right-interwiki' => '{{doc-right}}',
);

/** Niuean (ko e vagahau Niuē)
 * @author Jose77
 */
$messages['niu'] = array(
	'interwiki_reasonfield' => 'Kakano',
);

/** Afrikaans (Afrikaans)
 * @author Arnobarnard
 */
$messages['af'] = array(
	'interwiki' => 'Bekyk en wysig interwiki data',
	'interwiki-title-norights' => 'Bekyk interwiki data',
	'interwiki-desc' => "Voeg 'n [[Special:Interwiki|spesiale bladsy]] by om die interwiki tabel te bekyk en wysig",
	'interwiki_prefix' => 'Voorvoegsel',
	'interwiki_reasonfield' => 'Rede',
	'interwiki_delquestion' => 'Besig om "$1" te verwyder',
	'interwiki_deleting' => 'U is besig om voorvoegsel "$1" te verwyder.',
	'interwiki_addbutton' => 'Voeg by',
	'interwiki_logpagename' => 'Interwiki tabel staaf',
	'interwiki_defaultreason' => 'geen rede gegee',
);

/** Aragonese (Aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'interwiki_reasonfield' => 'Razón',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'interwiki' => 'عرض وتعديل بيانات الإنترويكي',
	'interwiki-title-norights' => 'عرض بيانات الإنترويكي',
	'interwiki-desc' => 'يضيف [[Special:Interwiki|صفحة خاصة]] لرؤية وتعديل جدول الإنترويكي',
	'interwiki_prefix' => 'بادئة',
	'interwiki_reasonfield' => 'سبب',
	'interwiki_intro' => 'انظر $1 لمزيد من المعلومات حول جدول الإنترويكي.
يوجد [[Special:Log/interwiki|سجل بالتغييرات]] لجدول الإنترويكي.',
	'interwiki_local' => 'محلي',
	'interwiki_trans' => 'عابر',
	'interwiki_error' => 'خطأ: جدول الإنترويكي فارغ، أو حدث خطأ آخر.',
	'interwiki_delquestion' => 'حذف "$1"',
	'interwiki_deleting' => 'أنت تحذف البادئة "$1".',
	'interwiki_deleted' => 'البادئة "$1" تمت إزالتها بنجاح من جدول الإنترويكي.',
	'interwiki_delfailed' => 'البادئة "$1" لم يمكن إزالتها من جدول الإنترويكي.',
	'interwiki_addtext' => 'أضف بادئة إنترويكي',
	'interwiki_addintro' => 'أنت تضيف بادئة إنترويكي جديدة.
تذكر أنها لا يمكن أن تحتوي على مسافات ( )، نقطتين فوق بعض (:)، علامة و (&)، أو علامة يساوي (=).',
	'interwiki_addbutton' => 'إضافة',
	'interwiki_added' => 'البادئة "$1" تمت إضافتها بنجاح إلى جدول الإنترويكي.',
	'interwiki_addfailed' => 'البادئة "$1" لم يمكن إضافتها إلى جدول الإنترويكي.
على الأرجح هي موجودة بالفعل في جدول الإنترويكي.',
	'interwiki_edittext' => 'تعديل بادئة إنترويكي',
	'interwiki_editintro' => 'أنت تعدل بادئة إنترويكي موجودة.
تذكر أن هذا يمكن أن يكسر الوصلات الحالية.',
	'interwiki_edited' => 'البادئة "$1" تم تعديلها بنجاح في جدول الإنترويكي..',
	'interwiki_editerror' => 'البادئة "$1" لم يمكن تعديلها في جدول الإنترويكي.
من المحتمل أنها غير موجودة.',
	'interwiki_logpagename' => 'سجل جدول الإنترويكي',
	'interwiki_log_added' => 'أضاف "$2" ($3) (نقل: $4) (محلي: $5) إلى جدول الإنترويكي',
	'interwiki_log_edited' => 'عدل البادئة "$2" : ($3) (عابر: $4) (محلي: $5) في جدول الإنترويكي',
	'interwiki_log_deleted' => 'أزال البادئة "$2" من جدول الإنترويكي',
	'interwiki_logpagetext' => 'هذا سجل بالتغييرات في [[Special:Interwiki|جدول الإنترويكي]].',
	'interwiki_defaultreason' => 'لا سبب معطى',
	'right-interwiki' => 'تعديل بيانات الإنترويكي',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'interwiki' => 'عرض وتعديل بيانات الإنترويكي',
	'interwiki-title-norights' => 'عرض بيانات الإنترويكي',
	'interwiki-desc' => 'يضيف [[Special:Interwiki|صفحة خاصة]] لرؤية وتعديل جدول الإنترويكي',
	'interwiki_prefix' => 'بادئة',
	'interwiki_reasonfield' => 'سبب',
	'interwiki_intro' => 'انظر $1 لمزيد من المعلومات حول جدول الإنترويكي.
يوجد [[Special:Log/interwiki|سجل بالتغييرات]] لجدول الإنترويكي.',
	'interwiki_local' => 'محلي',
	'interwiki_trans' => 'عابر',
	'interwiki_error' => 'خطأ: جدول الإنترويكى فارغ، أو حدث خطأ آخر.',
	'interwiki_delquestion' => 'حذف "$1"',
	'interwiki_deleting' => 'أنت تحذف البادئة "$1".',
	'interwiki_deleted' => 'البادئة "$1" تمت إزالتها بنجاح من جدول الإنترويكي.',
	'interwiki_delfailed' => 'البادئة "$1" لم يمكن إزالتها من جدول الإنترويكي.',
	'interwiki_addtext' => 'أضف بادئة إنترويكي',
	'interwiki_addintro' => 'أنت تضيف بادئة إنترويكى جديدة.
تذكر أنها لا يمكن أن تحتوى على مسافات ( )، نقطتين فوق بعض (:)، علامة و (&)، أو علامة يساوى (=).',
	'interwiki_addbutton' => 'إضافة',
	'interwiki_added' => 'البادئة "$1" تمت إضافتها بنجاح إلى جدول الإنترويكي.',
	'interwiki_addfailed' => 'البادئة "$1" لم يمكن إضافتها إلى جدول الإنترويكي.
على الأرجح هى موجودة بالفعل فى جدول الإنترويكي.',
	'interwiki_edittext' => 'تعديل بادئة إنترويكي',
	'interwiki_editintro' => 'أنت تعدل بادئة إنترويكى موجودة.
تذكر أن هذا يمكن أن يكسر الوصلات الحالية.',
	'interwiki_edited' => 'البادئة "$1" تم تعديلها بنجاح فى جدول الإنترويكي..',
	'interwiki_editerror' => 'البادئة "$1" لم يمكن تعديلها فى جدول الإنترويكي.
من المحتمل أنها غير موجودة.',
	'interwiki_logpagename' => 'سجل جدول الإنترويكي',
	'interwiki_log_added' => 'أضاف "$2" ($3) (نقل: $4) (محلي: $5) إلى جدول الإنترويكي',
	'interwiki_log_edited' => 'عدل البادئة "$2" : ($3) (عابر: $4) (محلي: $5) فى جدول الإنترويكي',
	'interwiki_log_deleted' => 'أزال البادئة "$2" من جدول الإنترويكي',
	'interwiki_logpagetext' => 'هذا سجل بالتغييرات فى [[Special:Interwiki|جدول الإنترويكي]].',
	'interwiki_defaultreason' => 'لا سبب معطى',
	'right-interwiki' => 'تعديل بيانات الإنترويكي',
);

/** Kotava (Kotava)
 * @author Wikimistusik
 */
$messages['avk'] = array(
	'interwiki' => "Wira va 'interwiki' orig isu betara",
	'interwiki-title-norights' => "Wira va 'interwiki' orig",
	'interwiki-desc' => "Batcoba, ta wira va 'interwiki' origak isu betara, va [[Special:Interwiki|aptafu bu]] loplekur",
	'interwiki_prefix' => 'Abdueosta',
	'interwiki_reasonfield' => 'Lazava',
	'interwiki_intro' => "Ta lo giva icde 'interwiki' origak va $1 wil !
Batcoba tir [[Special:Log/interwiki|'log' dem betaks]] va 'interwiki' origak.",
	'interwiki_error' => "ROKLA : 'Interwiki' origak tir vlardaf oke rotaca al sokir.",
	'interwiki_delquestion' => 'Sulara va "$1"',
	'interwiki_deleting' => 'Rin va "$1" abdueosta dun sulal.',
	'interwiki_deleted' => '"$1" abdueosta div \'interwiki\' origak al zo tioltenher.',
	'interwiki_delfailed' => '"$1" abdueosta div \'interwiki\' origak me zo rotiolter.',
	'interwiki_addtext' => "Loplekura va 'interwiki' abdueosta",
	'interwiki_addintro' => "Rin va warzafa 'interwiki' abdueosta dun loplekul.
Me vulkul da bata va darka ( ) ik briva (:) ik 'ampersand' (&) ik miltastaa (=) me roruldar.",
	'interwiki_addbutton' => 'Loplekura',
	'interwiki_added' => '"$1" abdueosta ko \'interwiki\' origak al zo loplekunhur.',
	'interwiki_addfailed' => '"$1" abdueosta ko \'interwiki\' origak me zo roloplekur.
Rotir koeon ixam tir.',
	'interwiki_edittext' => "Betara va 'interwiki' abdueosta",
	'interwiki_editintro' => "Rin va 'interwiki' abdueosta dun betal.
Me vulkul da batcoba va kruldesi gluyasiki rotempar !",
	'interwiki_edited' => '"$1" abdueosta koe \'interwiki\' origak al zo betanhar.',
	'interwiki_editerror' => '"$1" abdueosta koe \'interwiki\' origak me zo robetar.
Rotir koeon me krulder.',
	'interwiki_logpagename' => "'Interwiki' origak 'log'",
	'interwiki_log_added' => '"$2" abdueosta ($3) (trans: $4) (local: $5) loplekuyuna ko \'interwiki\' origak',
	'interwiki_log_edited' => '"$2" abdueosta ($3) (trans: $4) (local: $5) betayana koe \'interwiki\' origak',
	'interwiki_log_deleted' => '"$2" abdueosta plekuyuna div \'interwiki\' origak',
	'interwiki_logpagetext' => "Batcoba tir 'log' dem betaks va [[Special:Interwiki|'interwiki' origak]].",
	'interwiki_defaultreason' => 'Meka bazena lazava',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 */
$messages['be-tarask'] = array(
	'interwiki_reasonfield' => 'Прычына',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'interwiki' => 'Преглед и управление на междууикитата',
	'interwiki-title-norights' => 'Преглед на данните за междууикита',
	'interwiki-desc' => 'Добавя [[Special:Interwiki|специална страница]] за преглед и управление на таблицата с междууикита',
	'interwiki_prefix' => 'Представка:',
	'interwiki_reasonfield' => 'Причина',
	'interwiki_intro' => 'Вижте $1 за повече информация относно таблицата с междууикита. Съществува [[Special:Log/interwiki|дневник на промените]] в таблицата с междууикита.',
	'interwiki_local' => 'Локално',
	'interwiki_error' => 'ГРЕШКА: Таблицата с междууикита е празна или е възникнала друга грешка.',
	'interwiki_delquestion' => 'Изтриване на "$1"',
	'interwiki_deleting' => 'Изтриване на представката „$1“.',
	'interwiki_deleted' => '„$1“ беше успешно премахнато от таблицата с междууикита.',
	'interwiki_delfailed' => '„$1“ не може да бъде премахнато от таблицата с междууикита.',
	'interwiki_addtext' => 'Добавяне на ново междууики',
	'interwiki_addintro' => "''Забележка:'' Междууикитата не могат да съдържат интервали ( ), двуеточия (:), амперсанд (&) или знак за равенство (=).",
	'interwiki_addbutton' => 'Добавяне',
	'interwiki_added' => '„$1“ беше успешно добавено в таблицата с междууикита.',
	'interwiki_addfailed' => '„$1“ не може да бъде добавено в таблицата с междууикита. Възможно е вече да е било добавено там.',
	'interwiki_defaulturl' => 'http://www.пример.com/$1',
	'interwiki_edittext' => 'Редактиране на междууики представка',
	'interwiki_edited' => 'Представката „$1“ беше успешно променена в таблицата с междууикита.',
	'interwiki_logpagename' => 'Дневник на междууикитата',
	'interwiki_log_added' => 'добави „$2“ ($3) (trans: $4) (локално: $5) в таблицата с междууикита',
	'interwiki_log_deleted' => 'Премахна представката „$2“ от таблицата с междууикитата',
	'interwiki_logpagetext' => 'Тази страница съдържа дневник на промените в [[Special:Interwiki|таблицата с междууикита]].',
	'interwiki_defaultreason' => 'не е посочена причина',
	'right-interwiki' => 'Редактиране на междууикитата',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'interwiki_addbutton' => 'Ouzhpennañ',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'interwiki_defaultreason' => 'dim rheswm wedi ei roi',
);

/** Danish (Dansk)
 * @author Jon Harald Søby
 */
$messages['da'] = array(
	'interwiki_reasonfield' => 'Begrundelse',
);

/** German (Deutsch)
 * @author MF-Warburg
 * @author Raimond Spekking
 */
$messages['de'] = array(
	'interwiki' => 'Interwiki-Daten betrachten und bearbeiten',
	'interwiki-desc' => '[[Special:Interwiki|Spezialseite]] zur Pflege der Interwiki-Tabelle',
	'interwiki_prefix' => 'Präfix',
	'interwiki_reasonfield' => 'Grund',
	'interwiki_intro' => 'Siehe $1 für weitere Informationen über die Interwiki-Tabelle. Das [[Special:Log/interwiki|Logbuch]] zeigt alle Änderungen an der Interwiki-Tabelle.',
	'interwiki_local' => 'Lokal',
	'interwiki_error' => 'Fehler: Die Interwiki-Tabelle ist leer.',
	'interwiki_delquestion' => 'Löscht „$1“',
	'interwiki_deleted' => '„$1“ wurde erfolgreich aus der Interwiki-Tabelle entfernt.',
	'interwiki_delfailed' => '„$1“ konnte nicht aus der Interwiki-Tabelle gelöscht werden.',
	'interwiki_addtext' => 'Ein Interwiki-Präfix hinzufügen',
	'interwiki_addintro' => 'Du fügst ein neues Interwiki-Präfix hinzu. Beachte, dass es kein Leerzeichen ( ), Kaufmännisches Und (&), Gleichheitszeichen (=) und keinen Doppelpunkt (:) enthalten darf.',
	'interwiki_addbutton' => 'Hinzufügen',
	'interwiki_added' => '„$1“ wurde erfolgreich der Interwiki-Tabelle hinzugefügt.',
	'interwiki_addfailed' => '„$1“ konnte nicht der Interwiki-Tabelle hinzugefügt werden.',
	'interwiki_logpagename' => 'Interwikitabelle-Logbuch',
	'interwiki_log_added' => 'hat „$2“ ($3) (trans: $4) (lokal: $5) der Interwiki-Tabelle hinzugefügt',
	'interwiki_log_deleted' => 'hat „$2“ aus der Interwiki-Tabelle entfernt',
	'interwiki_logpagetext' => 'In diesem Logbuch werden Änderungen an der [[Special:Interwiki|Interwiki-Tabelle]] protokolliert.',
	'interwiki_defaultreason' => 'kein Grund angegeben',
	'right-interwiki' => 'Interwiki-Tabelle bearbeiten',
);

/** Greek (Ελληνικά)
 * @author Consta
 */
$messages['el'] = array(
	'interwiki_prefix' => 'Πρόθεμα',
	'interwiki_reasonfield' => 'Λόγος',
	'interwiki_defaultreason' => 'Δεν δίνετε λόγος',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'interwiki' => 'Rigardu kaj redaktu intervikiajn datenojn',
	'interwiki-title-norights' => 'Rigardu intervikiajn datenojn',
	'interwiki-desc' => 'Aldonas [[Special:Interwiki|specialan paĝon]] por rigardi kaj redakti la intervikian tabelon',
	'interwiki_prefix' => 'Prefikso',
	'interwiki_reasonfield' => 'Kialo',
	'interwiki_intro' => 'Vidu $1 por plia informo pri la intervikia tabelo.
Ekzistas [[Special:Log/interwiki|protokolo pri ŝanĝoj]] por la intervikia tabelo.',
	'interwiki_error' => 'ERARO: La intervikia tabelo estas malplena, aŭ iel misfunkciis.',
	'interwiki_delquestion' => 'Forigante "$1"',
	'interwiki_deleting' => 'Vi forigas prefikson "$1".',
	'interwiki_deleted' => 'Prefikso "$1" estis sukcese forigita de la intervikia tabelo.',
	'interwiki_delfailed' => 'Prefikso "$1" ne eblis esti forigita el la intervikia tabelo.',
	'interwiki_addtext' => 'Aldonu intervikian prefikson',
	'interwiki_addintro' => 'Vi aldonas novan intervikian prefikson.
Memoru ke ĝi ne povas enhavi spacetojn ( ), kolojn (:), kajsignojn (&), aŭ egalsignojn (=).',
	'interwiki_addbutton' => 'Aldoni',
	'interwiki_added' => 'Prefikso "$1" estis sukcese aldonita al la intervikia tabelo.',
	'interwiki_addfailed' => 'Prefikso "$1" ne eblis esti aldonita al la intervikia tabelo.
Eble ĝi jam ekzistas en la intervikia tabelo.',
	'interwiki_edittext' => 'Redaktante intervikian prefikson',
	'interwiki_editintro' => 'Vi redaktas intervikian prefikson.
Notu ke ĉi tiu ago povas rompi ekzistantajn ligilojn.',
	'interwiki_edited' => 'Prefikso "$1" estis sukcese modifita en la intervikian tabelon.',
	'interwiki_editerror' => 'Prefikso "$1" ne eblis esti modifita en la intervikia tabelo.
Verŝajne ĝi ne ekzistas.',
	'interwiki_logpagename' => 'Loglibro pri la intervikia tabelo',
	'interwiki_log_added' => 'Aldonis prefikson "$2" ($3) (transvikie: $4) (loke: $5) al la intervikia tabelo',
	'interwiki_log_edited' => 'modifis prefikson "$2" : ($3) (transvikie: $4) (loke: $5) en la intervikia tabelo',
	'interwiki_log_deleted' => 'Forigita prefikso "$2" de la intervikia tabelo',
	'interwiki_logpagetext' => 'Jen loglibro de ŝanĝoj al la [[Special:Interwiki|intervikia tabelo]].',
	'interwiki_defaultreason' => 'nenia kialo skribata',
	'right-interwiki' => 'Redakti intervikiajn datenojn',
);

/** Spanish (Español)
 * @author Piolinfax
 */
$messages['es'] = array(
	'interwiki_defaultreason' => 'no se da ninguna razón',
);

/** Finnish (Suomi)
 * @author Crt
 * @author Jack Phoenix
 * @author Nike
 */
$messages['fi'] = array(
	'interwiki' => 'Katso ja muokkaa wikien välisiä linkkejä',
	'interwiki-title-norights' => 'Selaa interwiki-tietueita',
	'interwiki-desc' => 'Lisää [[Special:Interwiki|toimintosivun]], jonka avulla voi katsoa ja muokata interwiki-taulua',
	'interwiki_prefix' => 'Etuliite',
	'interwiki_reasonfield' => 'Syy',
	'interwiki_intro' => 'Lisätietoja interwiki-taulusta on sivulla $1. On olemassa [[Special:Log/interwiki|loki]] interwiki-tauluun tehdyistä muutoksista.',
	'interwiki_error' => 'VIRHE: interwiki-taulu on tyhjä tai jokin muu meni pieleen.',
	'interwiki_delquestion' => 'Poistetaan ”$1”',
	'interwiki_deleting' => 'Olet poistamassa etuliitettä ”$1”.',
	'interwiki_deleted' => 'Etuliite ”$1” poistettiin onnistuneesti interwiki-taulusta.',
	'interwiki_delfailed' => 'Etuliitteen ”$1” poistaminen interwiki-taulusta epäonnistui.',
	'interwiki_addtext' => 'Lisää wikienvälinen etuliite',
	'interwiki_addintro' => 'Olet lisäämässä uutta wikienvälistä etuliitettä. Se ei voi sisältää välilyöntejä ( ), kaksoispisteitä (:), et-merkkejä (&), tai yhtäsuuruusmerkkejä (=).',
	'interwiki_addbutton' => 'Lisää',
	'interwiki_added' => 'Etuliite ”$1” lisättiin onnistuneesti interwiki-tauluun.',
	'interwiki_addfailed' => 'Etuliitteen ”$1” lisääminen interwiki-tauluun epäonnistui. Kyseinen etuliite saattaa jo olla interwiki-taulussa.',
	'interwiki_edittext' => 'Muokataan interwiki-etuliitettä',
	'interwiki_editintro' => 'Muokkaat interwiki-etuliitettä. Muista, että tämä voi rikkoa olemassa olevia linkkejä.',
	'interwiki_edited' => 'Etuliitettä ”$1” muokattiin onnistuneesti interwiki-taulukossa.',
	'interwiki_editerror' => 'Etuliitettä ”$1” ei voi muokata interwiki-taulukossa. Sitä ei mahdollisesti ole olemassa.',
	'interwiki_logpagename' => 'Loki muutoksista interwiki-tauluun',
	'interwiki_log_added' => 'Uusi etuliite ”$2” ($3) (trans: $4) (paikallinen: $5) interwiki-tauluun',
	'interwiki_log_edited' => '!muokkasi etuliitettä $2: ($3) (trans: $4) (paikallisuus: $5) interwiki-taulussa',
	'interwiki_log_deleted' => 'Poisti etuliitteen ”$2” interwiki-taulusta',
	'interwiki_logpagetext' => 'Tämä on loki muutoksista [[Special:Interwiki|interwiki-tauluun]].',
	'interwiki_defaultreason' => 'ei annettua syytä',
);

/** French (Français)
 * @author Grondin
 * @author IAlex
 * @author Louperivois
 * @author Sherbrooke
 * @author Urhixidur
 */
$messages['fr'] = array(
	'interwiki' => 'Voir et manipuler les données interwiki',
	'interwiki-title-norights' => 'Voir les données interwiki',
	'interwiki-desc' => 'Ajoute une [[Special:Interwiki|page spéciale]] pour voir et éditer la table interwiki',
	'interwiki_prefix' => 'Préfixe',
	'interwiki_reasonfield' => 'Motif',
	'interwiki_intro' => "Voyez $1 pour obtenir plus d'informations en ce qui concerne la table interwiki. Ceci est le [[Special:Log/interwiki|journal des modifications]] de la table interwiki.",
	'interwiki_error' => "Erreur : la table des interwikis est vide ou un processus s'est mal déroulé.",
	'interwiki_delquestion' => 'Suppression de « $1 »',
	'interwiki_deleting' => 'Vous effacez présentement le préfixe « $1 ».',
	'interwiki_deleted' => '« $1 » a été enlevé avec succès de la table interwiki.',
	'interwiki_delfailed' => "« $1 » n'a pas pu être enlevé de la table interwiki.",
	'interwiki_addtext' => 'Ajouter un préfixe interwiki',
	'interwiki_addintro' => "Vous êtes en train d'ajouter un préfixe interwiki. Rappelez-vous qu'il ne peut pas contenir d'espaces ( ), de deux-points (:), d'esperluettes (&) ou de signes égal (=).",
	'interwiki_addbutton' => 'Ajouter',
	'interwiki_added' => '« $1 » a été ajouté avec succès dans la table interwiki.',
	'interwiki_addfailed' => "« $1 » n'a pas pu être ajouté à la table interwiki.",
	'interwiki_edittext' => 'Modifier un préfixe interwiki',
	'interwiki_editintro' => 'Vous modifiez un préfixe interwiki. Rappelez-vous que cela peut casser des liens existants.',
	'interwiki_edited' => 'Le préfixe « $1 » a été modifié avec succès dans la table interwiki.',
	'interwiki_editerror' => "Le préfixe « $1 » ne peut pas être modifié. Il se peut qu'il n'existe pas.",
	'interwiki_logpagename' => 'Journal de la table interwiki',
	'interwiki_log_added' => 'a ajouté « $2 » ($3) (trans: $4) (local: $5) dans la table interwiki',
	'interwiki_log_edited' => 'a modifié le préfixe « $2 » : ($3) (trans: $4) (local: $5) dans la table interwiki',
	'interwiki_log_deleted' => 'a supprimé le préfixe « $2 » de la table interwiki',
	'interwiki_logpagetext' => 'Ceci est le journal des changements dans la [[Special:Interwiki|table interwiki]].',
	'interwiki_defaultreason' => 'Aucun motif donné',
	'right-interwiki' => 'Modifier les données interwiki',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'interwiki_defaulturl' => 'http://www.ègzemplo.com/$1',
);

/** Western Frisian (Frysk)
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'interwiki_addbutton' => 'Tafoegje',
);

/** Galician (Galego)
 * @author Alma
 * @author Toliño
 * @author Xosé
 */
$messages['gl'] = array(
	'interwiki' => 'Ver e manipular datos interwiki',
	'interwiki-title-norights' => 'Ver os datos do interwiki',
	'interwiki-desc' => 'Engade unha [[Special:Interwiki|páxina especial]] para ver e editar a táboa interwiki',
	'interwiki_prefix' => 'Prefixo',
	'interwiki_reasonfield' => 'Razón',
	'interwiki_intro' => 'Vexa $1 para máis información acerca da táboa interwiki. Hai un [[Special:Log/interwiki|rexistro de cambios]] á táboa interwiki.',
	'interwiki_error' => 'ERRO: A táboa interwiki está baleira, ou algo máis saíu mal.',
	'interwiki_delquestion' => 'Eliminando "$1"',
	'interwiki_deleting' => 'Vai eliminar o prefixo "$1".',
	'interwiki_deleted' => 'Eliminouse sen problemas o prefixo "$1" da táboa interwiki.',
	'interwiki_delfailed' => 'Non se puido eliminar o prefixo "$1" da táboa interwiki.',
	'interwiki_addtext' => 'Engadir un prefixo interwiki',
	'interwiki_addintro' => 'Vostede está engadindo un novo prefixo interwiki. Recorde que non pode conter espazos ( ), dous puntos (:), o símbolo de unión (&), ou signos de igual (=).',
	'interwiki_addbutton' => 'Engadir',
	'interwiki_added' => 'Engadiuse sen problemas o prefixo "$1" á táboa interwiki.',
	'interwiki_addfailed' => 'Non se puido engadir o prefixo "$1" á táboa interwiki. Posibelmente xa existe na táboa interwiki.',
	'interwiki_edittext' => 'Editando un prefixo interwiki',
	'interwiki_editintro' => 'Está editando un prefixo interwiki. Lembre que isto pode quebrar ligazóns existentes.',
	'interwiki_edited' => 'O prefixo "$1" foi modificado con éxito na táboa do interwiki.',
	'interwiki_editerror' => 'O prefixo "$1" non pode ser modificado na táboa do interwiki. Posiblemente non existe.',
	'interwiki_logpagename' => 'Rexistro de táboas interwiki',
	'interwiki_log_added' => 'Engadir "$2" ($3) (trans: $4) (local: $5) á táboa interwiki',
	'interwiki_log_edited' => 'modificou o prefixo "$2": ($3) (trans: $4) (local: $5) na táboa do interwiki',
	'interwiki_log_deleted' => 'Eliminouse o prefixo "$2" da táboa interwiki',
	'interwiki_logpagetext' => 'Este é un rexistro dos cambios a [[Special:Interwiki|táboa interwiki]].',
	'interwiki_defaultreason' => 'non foi dada ningunha razón',
	'right-interwiki' => 'Editar os datos do interwiki',
);

/** Gothic (𐌲𐌿𐍄𐌹𐍃𐌺)
 * @author Jocke Pirat
 */
$messages['got'] = array(
	'interwiki_reasonfield' => 'Faírina',
);

/** Gujarati (ગુજરાતી) */
$messages['gu'] = array(
	'interwiki_reasonfield' => 'કારણ',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'interwiki_reasonfield' => 'Fa',
);

/** Hawaiian (Hawai`i)
 * @author Singularity
 */
$messages['haw'] = array(
	'interwiki_reasonfield' => 'Kumu',
	'interwiki_addbutton' => 'Ho‘ohui',
	'interwiki_defaultreason' => '‘a‘ohe kumu',
);

/** Hebrew (עברית)
 * @author Agbad
 * @author Rotemliss
 * @author דניאל ב.
 */
$messages['he'] = array(
	'interwiki' => 'הצגת ועריכת מידע הבינוויקי',
	'interwiki-title-norights' => 'הצגת מידע הבינוויקי',
	'interwiki-desc' => 'הוספת [[Special:Interwiki|דף מיוחד]] להצגת ולעריכת טבלת הבינוויקי',
	'interwiki_prefix' => 'תחילית',
	'interwiki_reasonfield' => 'סיבה',
	'interwiki_intro' => 'ראו $1 למידע נוסף אודות טבלת הבינוויקי.
ישנו [[Special:Log/interwiki|יומן שינויים]] לטבלת הבינוויקי.',
	'interwiki_error' => 'שגיאה: טבלת הבינוויקי ריקה, או שיש שגיאה אחרת.',
	'interwiki_addtext' => 'הוספת תחילית בינוויקי',
	'interwiki_addbutton' => 'הוספה',
	'interwiki_added' => 'הקידומת"$1" הוספה בהצלחה לטבלת הבינוויקי.',
	'interwiki_editintro' => 'הנכם עורכים תחילית בינוויקי.
זכרו שפעולה זו עלולה לשבור קישורים קיימים.',
	'interwiki_logpagename' => 'יומן טבלת הבינוויקי',
	'interwiki_log_deleted' => 'הסיר את התחילית "$2" מטבלת הבינוויקי',
	'interwiki_logpagetext' => 'זהו יומן השינויים שנערכו ב[[Special:Interwiki|טבלת הבינוויקי]].',
	'interwiki_defaultreason' => 'לא ניתנה סיבה',
	'right-interwiki' => 'עריכת מידע הבינוויקי',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'interwiki' => 'आंतरविकि डाटा देखें एवं बदलें',
	'interwiki-title-norights' => 'आंतरविकि डाटा देखें',
	'interwiki-desc' => 'आंतरविकि तालिका देखनेके लिये और बदलने के लिये एक [[Special:Interwiki|विशेष पॄष्ठ]]',
	'interwiki_prefix' => 'उपपद',
	'interwiki_reasonfield' => 'कारण',
	'interwiki_intro' => 'आंतरविकि तालिका के बारें में अधिक ज़ानकारी के लिये $1 देखें। यहां आंतरविकि तालिका में हुए [[Special:Log/interwiki|बदलावों की सूची]] हैं।',
	'interwiki_error' => 'गलती: आंतरविकि तालिका खाली हैं, या और कुछ गलत हैं।',
	'interwiki_delquestion' => '$1 को हटा रहें हैं',
	'interwiki_deleting' => 'आप "$1" उपपद हटा रहें हैं।',
	'interwiki_deleted' => '"$1" उपपद आंतरविकि तालिकासे हटा दिया गया हैं।',
	'interwiki_delfailed' => '"$1" उपपद आंतरविकि तालिकासे हटा नहीं पा रहें हैं।',
	'interwiki_addtext' => 'एक आंतरविकि उपपद दें',
	'interwiki_addintro' => 'आप एक नया आंतरविकि उपपद बढा रहें हैं। कृपया ध्यान रहें की इसमें स्पेस ( ), विसर्ग (:), और (&), या बराबर का चिन्ह (=) नहीम दे सकतें हैं।',
	'interwiki_addbutton' => 'बढायें',
	'interwiki_added' => '$1" उपपद आंतरविकि तालिका में बढाया गया हैं।',
	'interwiki_addfailed' => '"$1" उपपद आंतरविकि तालिका में बढा नहीं पायें।
शायद वह पहले से अस्तित्वमें हैं।',
	'interwiki_edittext' => 'एक आंतरविकि उपपद बदल रहें हैं',
	'interwiki_editintro' => 'आप एक आंतरविकि उपपद बदल रहें हैं। ध्यान रखें ये पहले दी हुई कड़ीयों को तोड सकता हैं।',
	'interwiki_edited' => '"$1" उपपद आंतरविकि तालिका में बदला गया।',
	'interwiki_editerror' => '"$1" उपपद आंतरविकि तालिका में बदल नहीं पायें। शायद वह अस्तित्वमें नहीं हैं।',
	'interwiki_logpagename' => 'आंतरविकि तालिका सूची',
	'interwiki_log_added' => 'आंतरविकि तालिकामें उपपद "$2" ($3) (trans: $4) (local: $5) बढाया',
	'interwiki_log_edited' => 'आंतरविकि तालिकामें उपपद "$2" : ($3) (trans: $4) (local: $5) को बदला',
	'interwiki_log_deleted' => '"$2" उपपद आंतरविकि तालिकासे हटाया',
	'interwiki_logpagetext' => '[[Special:Interwiki|आंतरविकि तालिकामें]] हुए बदलावोंकी यह सूची है।',
	'interwiki_defaultreason' => 'कारण दिया नहीं',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 */
$messages['hil'] = array(
	'interwiki_reasonfield' => 'Rason',
);

/** Croatian (Hrvatski)
 * @author Dalibor Bosits
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'interwiki' => 'Vidi i uredi međuwiki podatke',
	'interwiki-title-norights' => 'Gledanje interwiki tablice',
	'interwiki-desc' => 'Dodaje [[Special:Interwiki|posebnu stranicu]] za gledanje i uređivanje interwiki tablice',
	'interwiki_prefix' => 'Prefiks',
	'interwiki_reasonfield' => 'Razlog',
	'interwiki_intro' => 'Pogledajte $1 za više informacija o interwiki tablici.
Postoji [[Special:Log/interwiki|evidencija promjena]] za interwiki tablicu.',
	'interwiki_local' => 'Lokalno',
	'interwiki_trans' => 'Međuwiki',
	'interwiki_error' => 'GREŠKA: Interwiki tablica je prazna, ili je nešto drugo neispravno.',
	'interwiki_delquestion' => 'Brišem "$1"',
	'interwiki_deleting' => 'Brišete prefiks "$1".',
	'interwiki_deleted' => 'Prefiks "$1" je uspješno uklonjen iz interwiki tablice.',
	'interwiki_delfailed' => 'Prefiks "$1" nije mogao biti uklonjen iz interwiki tablice.',
	'interwiki_addtext' => 'Dodaj međuwiki prefiks',
	'interwiki_addintro' => 'Uređujete novi interwiki prefiks. Upamtite, prefiks ne može sadržavati prazno mjesto ( ), dvotočku (:), znak za i (&), ili znakove jednakosti (=).',
	'interwiki_addbutton' => 'Dodaj',
	'interwiki_added' => 'Prefiks "$1" je uspješno dodan u interwiki tablicu.',
	'interwiki_addfailed' => 'Prefiks "$1" nije mogao biti dodan u interwiki tablicu. Vjerojatno već postoji u interwiki tablici.',
	'interwiki_edittext' => 'Uređivanje interwiki prefiksa',
	'interwiki_editintro' => 'Uređujete interwiki prefiks. Ovo može oštetiti postojeće poveznice.',
	'interwiki_edited' => 'Prefiks "$1" je uspješno promijenjen u interwiki tablici.',
	'interwiki_editerror' => 'Prefiks "$1" ne može biti promijenjen u interwiki tablici. Vjerojatno ne postoji.',
	'interwiki_logpagename' => 'Evidencije interwiki tablice',
	'interwiki_log_added' => 'dodan prefiks "$2" ($3) (trans: $4) (lokalno: $5) u interwiki tablicu',
	'interwiki_log_edited' => 'promijenjen prefiks "$2" : ($3) (trans: $4) (lokalno: $5) u interwiki tablici',
	'interwiki_log_deleted' => 'uklonjen prefiks "$2" iz interwiki tablice',
	'interwiki_logpagetext' => 'Ovo su evidencije promjena na [[Special:Interwiki|interwiki tablici]].',
	'interwiki_defaultreason' => 'nema razloga',
	'right-interwiki' => 'Uređivanje interwiki podataka',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'interwiki' => 'Interwiki-daty wobhladać a změnić',
	'interwiki-desc' => 'Přidawa [[Special:Interwiki|specialnu stronu]] za wobhladowanje a wobdźěłowanje interwiki-tabele',
	'interwiki_prefix' => 'Prefiks',
	'interwiki_reasonfield' => 'Přičina',
	'interwiki_intro' => 'Hlej $1 za dalše informacije wo tabeli interwiki. Je [[Special:Log/interwiki|protokol změnow]] k tabeli interwiki.',
	'interwiki_local' => 'Lokalny',
	'interwiki_error' => 'ZMYLK: Interwiki-tabela je prózdna abo něšto je wopak.',
	'interwiki_delquestion' => 'Wušmórnja so "$1"',
	'interwiki_deleting' => 'Wušmórnješ prefiks "$1".',
	'interwiki_deleted' => 'Prefiks "$1" je so wuspěšnje z interwiki-tabele wotstronił.',
	'interwiki_delfailed' => 'Prefiks "$1" njeda so z interwiki-tabele wotstronić.',
	'interwiki_addtext' => 'Interwiki-prefiks přidać',
	'interwiki_addintro' => 'Přidawaš nowy prefiks interwiki. Wobkedźbuj, zo njesmě mjezery ( ), dwudypki (.), et-znamješka (&) abo znaki runosće (=) wobsahować.',
	'interwiki_addbutton' => 'Přidać',
	'interwiki_added' => 'Prefiks "$1" je so wuspěšnje interwiki-tabeli přidał.',
	'interwiki_addfailed' => 'Prefiks "$1" njeda so interwiki-tabeli přidać. Snano eksistuje hižo w interwiki-tabeli.',
	'interwiki_logpagename' => 'Protokol interwiki-tabele',
	'interwiki_log_added' => 'Je "$2" ($3) (trans: $4) (lokalny: $5) interwiki-tabeli přidał',
	'interwiki_log_deleted' => 'je prefiks "$2" z interwiki-tabele wotstronił',
	'interwiki_logpagetext' => 'To je protokol změnow na [[Special:Interwiki|interwiki-tabeli]].',
	'interwiki_defaultreason' => 'žana přičina podata',
);

/** Haitian (Kreyòl ayisyen)
 * @author Jvm
 * @author Masterches
 */
$messages['ht'] = array(
	'interwiki' => 'Wè epi edite enfòmasyon entèwiki yo',
	'interwiki-title-norights' => 'Wè enfòmasyon interwiki',
	'interwiki-desc' => 'Ajoute yon [[Special:Interwiki|paj espesial]] pou wè ak edite tab interwiki-a',
	'interwiki_prefix' => 'Prefix',
	'interwiki_reasonfield' => 'Rezon',
	'interwiki_intro' => 'Wè $1 pou plis enfòmasyon sou tab interwiki-a.
Geyen yon [[Special:Log/interwiki|jounal pou chanjman yo]] nan tab interwiki-a.',
	'interwiki_error' => 'ERÈ:  Tab interwiki-a vid, oubien yon lòt bagay mal mache.',
	'interwiki_delquestion' => 'Delete "$1"',
	'interwiki_deleting' => 'W’ap delete prefix "$1".',
	'interwiki_deleted' => 'Prefix "$1" te retire nan tab interwiki-a avèk siksès.',
	'interwiki_delfailed' => 'Prefix "$1" pa t\' kapab sòti nan tab interwiki-a.',
	'interwiki_addtext' => 'Mete yon prefix interwiki',
	'interwiki_addintro' => 'W’ap mete yon nouvo prefix interwiki.
Sonje ke li pa ka genyen ladan li espace ( ), de pwen (:), anmpèsand (&), ou sign egalite (=).',
	'interwiki_addbutton' => 'Ajoute',
	'interwiki_added' => 'Prefix "$1" te ajoute sou tab interwiki-a avèk siksès.',
	'interwiki_addfailed' => 'Prefix "$1" pa t’ kapab ajoute sou tab interwiki-a.
Posibleman paske li deja ekziste nan tab interwiki-a.',
	'interwiki_edittext' => 'Edite yon prefix interwiki',
	'interwiki_editintro' => 'W’ap edite yon prefix interwiki.
Sonje ke sa ka kase chèn ki deja ekziste.',
	'interwiki_edited' => 'Prefix "$1" te modifye nan tab interwiki-a avèk siksès.',
	'interwiki_editerror' => 'Prefix "$1" pa ka modifye nan tab interwiki-a.
Posibleman li pa ekziste.',
	'interwiki_logpagename' => 'Jounal tab interwiki-a',
	'interwiki_log_added' => 'te ajoute prefix "$2" ($3) (trans: $4) (local: $5) nan tab interwiki-a',
	'interwiki_log_edited' => 'prefix ki te modifye "$2" : ($3) (trans: $4) (local: $5) nan tab interwiki-a',
	'interwiki_log_deleted' => 'prefix ki te retire "$2" nan tab interwiki-a',
	'interwiki_logpagetext' => 'Sa se yon jounal chanjman nan [[Special:Interwiki|tab interwiki-a]].',
	'interwiki_defaultreason' => 'oken rezon pa t’ bay',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'interwiki' => 'Interwiki adatok megtekintése és szerkesztése',
	'interwiki_prefix' => 'Előtag',
	'interwiki_reasonfield' => 'Ok',
	'interwiki_intro' => 'Lásd a(z) $1 lapot további információkért az interwiki táblákról. Megtekintheted az interwiki táblában bekövetkezett [[Special:Log/interwiki|változások naplóját]] is.',
	'interwiki_error' => 'HIBA: az interwiki-tábla üres, vagy valami elromlott.',
	'interwiki_delquestion' => '„$1” törlése',
	'interwiki_deleting' => 'A(z) „$1” előtag törlésére készülsz.',
	'interwiki_deleted' => 'A(z) „$1” előtagot sikeresen eltávolítottam az interwiki táblából.',
	'interwiki_delfailed' => 'A(z) „$1” előtagot nem sikerült eltávolítanom az interwiki táblából.',
	'interwiki_addtext' => 'Interwiki előtag hozzáadása',
	'interwiki_addintro' => 'Új interwiki előtag hozzáadására készülsz. Ügyelj arra, hogy ne tartalmazzon szóközt ( ), kettőspontot (:), és- (&), vagy egyenlő (=) jeleket.',
	'interwiki_addbutton' => 'Hozzáadás',
	'interwiki_added' => 'A(z) „$1” előtagot sikeresen hozzáadtam az interwiki táblához.',
	'interwiki_addfailed' => 'A(z) „$1” előtagot nem tudtam hozzáadni az interwiki táblához. Valószínűleg már létezik.',
	'interwiki_logpagename' => 'Interwiki tábla-napló',
	'interwiki_log_added' => '„$2” hozzáadva ($3) (ford: $4) (helyi: $5) az interwiki táblához',
	'interwiki_log_deleted' => '„$2” előtag eltávolítva az interwiki táblából',
	'interwiki_logpagetext' => 'Ez az [[Special:Interwiki|interwiki táblában]] történt változások naplója.',
	'interwiki_defaultreason' => 'nincs ok megadva',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'interwiki' => 'Vider e modificar datos interwiki',
	'interwiki-title-norights' => 'Vider datos interwiki',
	'interwiki-desc' => 'Adde un [[Special:Interwiki|pagina special]] pro vider e modificar le tabella interwiki',
	'interwiki_prefix' => 'Prefixo',
	'interwiki_reasonfield' => 'Motivo',
	'interwiki_intro' => 'Vider $1 pro ulterior informationes super le tabella interwiki.
Existe un [[Special:Log/interwiki|registro de modificationes]] al tabella interwiki.',
	'interwiki_error' => 'Error: Le tabella interwiki es vacue, o un altere cosa faceva falta.',
	'interwiki_delquestion' => 'Deletion de "$1"',
	'interwiki_deleting' => 'Tu sta super le puncto de deler le prefixo "$1".',
	'interwiki_deleted' => 'Le prefixo "$1" ha essite removite del tabella interwiki con successo.',
	'interwiki_delfailed' => 'Le prefixo "$1" non poteva esser removite del tabella interwiki.',
	'interwiki_addtext' => 'Adder un prefixo interwiki',
	'interwiki_addintro' => 'Tu sta super le puncto de adder un nove prefixo interwiki.
Memora que illo non pote continer spatios (&nbsp;), duo punctos (:), signos et (&), o signos equal (=).',
	'interwiki_addbutton' => 'Adder',
	'interwiki_added' => 'Le prefixo "$1" ha essite addite al tabella interwiki con successo.',
	'interwiki_addfailed' => 'Le prefixo "$1" non poteva esser addite al tabella interwiki.
Es possibile que illo ja existe in le tabella interwiki.',
	'interwiki_edittext' => 'Modificar un prefixo interwiki',
	'interwiki_editintro' => 'Tu modifica un prefixo interwiki.
Memora que isto pote rumper ligamines existente.',
	'interwiki_edited' => 'Le prefixo "$1" ha essite modificate in le tabella interwiki con successo.',
	'interwiki_editerror' => 'Le prefixo "$1" non pote esser modificate in le tabella interwiki.
Es possibile que illo non existe.',
	'interwiki_logpagename' => 'Registro del tabella interwiki',
	'interwiki_log_added' => 'addeva le prefixo "$2" ($3) (trans: $4) (local: $5) al tabella interwiki',
	'interwiki_log_edited' => 'modificava le prefixo "$2" : ($3) (trans: $4) (local: $5) in le tabella interwiki',
	'interwiki_log_deleted' => 'removeva le prefixo "$2" del tabella interwiki',
	'interwiki_logpagetext' => 'Isto es un registro de modificationes in le [[Special:Interwiki|tabella interwiki]].',
	'interwiki_defaultreason' => 'nulle ration date',
	'right-interwiki' => 'Modificar datos interwiki',
);

/** Indonesian (Bahasa Indonesia)
 * @author Rex
 */
$messages['id'] = array(
	'interwiki' => 'Lihat dan sunting data interwiki',
	'interwiki-title-norights' => 'Lihat data interwiki',
	'interwiki-desc' => 'Menambahkan sebuah [[Special:Interwiki|halaman istimewa]] untuk menampilkan dan menyunting tabel interwiki',
	'interwiki_prefix' => 'Prefiks',
	'interwiki_reasonfield' => 'Alasan',
	'interwiki_intro' => 'Lihat $1 untuk informasi lebih lanjut mengenai tabel interwiki. Lihat [[Special:Log/interwiki|log perubahan]] tabel interwiki.',
	'interwiki_error' => 'KESALAHAN: Tabel interwiki kosong, atau terjadi kesalahan lain.',
	'interwiki_delquestion' => 'Menghapus "$1"',
	'interwiki_deleting' => 'Anda menghapus prefiks "$1".',
	'interwiki_deleted' => 'Prefiks "$1" berhasil dihapus dari tabel interwiki.',
	'interwiki_delfailed' => 'Prefiks "$1" tidak dapat dihapuskan dari tabel interwiki.',
	'interwiki_addtext' => 'Menambahkan sebuah prefiks interwiki',
	'interwiki_addintro' => 'Anda akan menambahkan sebuah prefiks interwiki.
Ingat bahwa prefiks tidak boleh mengandung tanda spasi ( ), titik dua (:), lambang dan (&), atau tanda sama dengan (=).',
	'interwiki_addbutton' => 'Tambahkan',
	'interwiki_added' => 'Prefiks "$1" berhasil ditambahkan ke tabel interwiki.',
	'interwiki_addfailed' => 'Prefiks "$1" tidak dapat ditambahkan ke tabel interwiki. Kemungkinan dikarenakan prefiks ini telah ada di tabel interwiki.',
	'interwiki_edittext' => 'Menyunting sebuah prefiks interwiki',
	'interwiki_editintro' => 'Anda sedang menyunting sebuah prefiks interwiki.
Ingat bahwa tindakan ini dapat mempengaruhi pranala yang telah eksis.',
	'interwiki_edited' => 'Prefiks "$1" berhasil diubah di tabel interwiki.',
	'interwiki_editerror' => 'Prefiks "$1" tidak dapat diubah di tabel interwiki.
Kemungkinan karena prefiks ini tidak ada.',
	'interwiki_logpagename' => 'Log tabel interwiki',
	'interwiki_log_added' => 'menambahkan prefiks "$2" ($3) (trans: $4) (lokal: $5) ke tabel interwiki',
	'interwiki_log_edited' => 'mengubah prefiks "$2" : ($3) (trans: $4) (lokal: $5) di tabel interwiki',
	'interwiki_log_deleted' => 'menghapus prefiks "$2" dari tabel interwiki',
	'interwiki_logpagetext' => 'Ini adalah log perubahan [[Special:Interwiki|tabel interwiki]].',
	'interwiki_defaultreason' => 'tidak ada ringkasan penjelasan',
	'right-interwiki' => 'Menyunting data interwiki',
);

/** Icelandic (Íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'interwiki_reasonfield' => 'Ástæða',
	'interwiki_defaultreason' => 'engin ástæða gefin',
);

/** Italian (Italiano)
 * @author BrokenArrow
 * @author Cruccone
 * @author Darth Kule
 */
$messages['it'] = array(
	'interwiki' => 'Visualizza e modifica i dati interwiki',
	'interwiki-title-norights' => 'Visualizza i dati interwiki',
	'interwiki-desc' => 'Aggiunge una [[Special:Interwiki|pagina speciale]] per visualizzare e modificare la tabella degli interwiki',
	'interwiki_prefix' => 'Prefisso',
	'interwiki_reasonfield' => 'Motivo',
	'interwiki_intro' => 'Vedi $1 per maggiori informazioni sulla tabella degli interwiki.
Esiste un [[Special:Log/interwiki|registro delle modifiche]] alla tabella degli interwiki.',
	'interwiki_error' => "ERRORE: La tabella degli interwiki è vuota, o c'è qualche altro errore.",
	'interwiki_delquestion' => 'Cancello "$1"',
	'interwiki_deleting' => 'Stai cancellando il prefisso "$1"',
	'interwiki_deleted' => 'Il prefisso "$1" è stato cancellato con successo dalla tabella degli interwiki.',
	'interwiki_delfailed' => 'Rimozione del prefisso "$1" dalla tabella degli interwiki fallita.',
	'interwiki_addtext' => 'Aggiungi un prefisso interwiki',
	'interwiki_addintro' => 'Sta per essere aggiunto un nuovo prefisso interwiki.
Non sono ammessi i caratteri: spazio ( ), due punti (:), e commerciale (&), simbolo di uguale (=).',
	'interwiki_addbutton' => 'Aggiungi',
	'interwiki_added' => 'Il prefisso "$1" è stato aggiunto alla tabella degli interwiki.',
	'interwiki_addfailed' => 'Impossibile aggiungere il prefisso "$1" alla tabella degli interwiki.
Il prefisso potrebbe essere già presente in tabella.',
	'interwiki_edittext' => 'Modifica di un prefisso interwiki',
	'interwiki_editintro' => 'Si sta modificando un prefisso interwiki.
Ciò può rendere non funzionanti dei collegamenti esistenti.',
	'interwiki_edited' => 'Il prefisso "$1" è stato modificato nella tabella degli interwiki.',
	'interwiki_editerror' => 'Impossibile modificare il prefisso "$1" nella tabella degli interwiki.
Il prefisso potrebbe essere inesistente.',
	'interwiki_logpagename' => 'Registro tabella interwiki',
	'interwiki_log_added' => 'ha aggiunto il prefisso "$2" ($3) (trans: $4) (locale: $5) alla tabella degli interwiki',
	'interwiki_log_edited' => 'ha modificato il prefisso "$2" : ($3) (trans: $4) (locale: $5) nella tabella degli interwiki',
	'interwiki_log_deleted' => 'ha rimosso il prefisso "$2" dalla tabella degli interwiki',
	'interwiki_logpagetext' => 'Registro dei cambiamenti apportati alla [[Special:Interwiki|tabella degli interwiki]].',
	'interwiki_defaultreason' => 'nessuna motivazione indicata',
	'right-interwiki' => 'Modifica i dati interwiki',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fievarsty
 * @author Mzm5zbC3
 */
$messages['ja'] = array(
	'interwiki' => 'インターウィキ一覧の表示と編集',
	'interwiki-title-norights' => 'インターウィキデータの一覧',
	'interwiki-desc' => 'インターウィキ一覧の表示と追加・編集・削除を行う[[Special:Interwiki|特別ページ]]。',
	'interwiki_prefix' => 'プリフィックス',
	'interwiki_reasonfield' => '理由',
	'interwiki_intro' => 'インターウィキテーブルについては$1をご覧ください。インターウィキテーブルの[[Special:Log/interwiki|ログ]]もあります。',
	'interwiki_error' => 'エラー: インターウィキテーブルが空か、他のものがうまくいきませんでした。',
	'interwiki_delquestion' => '"$1"を削除',
	'interwiki_deleting' => 'あなたは "$1" を削除しようとしています。',
	'interwiki_deleted' => '"$1" はインターウィキテーブルから正常に削除されました。',
	'interwiki_delfailed' => '"$1" をインターウィキテーブルから削除できませんでした。',
	'interwiki_addtext' => 'インターウィキを追加する',
	'interwiki_addintro' => 'あなたは新しいインターウィキを追加しようとしています。その中にスペース( )、コロン(:)、アンパーサンド(&)、等号(=) といった記号を含むことができないことに注意してください。',
	'interwiki_addbutton' => '追加',
	'interwiki_added' => 'プレフィクス"$1" はインターウィキテーブルに正常に追加されました。',
	'interwiki_addfailed' => '"$1" をインターウィキテーブルに追加することができませんでした。すでに同じものが、インターウィキテーブルの中に存在している可能性があります。',
	'interwiki_edittext' => 'インターウィキの編集',
	'interwiki_editintro' => 'あなたはインターウィキ用のプレフィクスを編集しようとしています。この作業によりすでに存在しているリンクを破壊する可能性があります。',
	'interwiki_edited' => '"$1" はインターウィキテーブルより正常に変更されました。',
	'interwiki_editerror' => 'インターウィキテーブルより $1 を変更できませんでした。それは存在していません。',
	'interwiki_logpagename' => 'インターウィキ編集記録',
	'interwiki_log_added' => 'インターウィキテーブルに "$2" ($3) (trans: $4) (local: $5) を追加しました。',
	'interwiki_log_edited' => 'インターウィキテーブルより "$2" を ($3) (trans: $4) (local: $5) に変更しました。',
	'interwiki_log_deleted' => 'インターウィキテーブルから "$2" を削除しました。',
	'interwiki_logpagetext' => 'これは[[Special:Interwiki|インターウィキテーブル]]の変更記録です。',
	'interwiki_defaultreason' => '理由が記述されていません',
	'right-interwiki' => 'インターウィキの編集データ',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 */
$messages['jv'] = array(
	'interwiki' => 'Ndeleng lan nyunting data interwiki',
	'interwiki-title-norights' => 'Ndeleng data interwiki',
	'interwiki-desc' => 'Nambahaké sawijining [[Special:Interwiki|kaca astaméwa]] kanggo ndeleng lan nyunting tabèl interwiki',
	'interwiki_prefix' => 'Préfiks (sisipan awal)',
	'interwiki_reasonfield' => 'Alesan',
	'interwiki_intro' => 'Mangga mirsani $1 kanggo informasi sabanjuré perkara tabèl interwiki.
Ana sawijining [[Special:Log/interwiki|log owah-owahan]] perkara tabèl interwiki.',
	'interwiki_error' => 'KALUPUTAN: Tabèl interwikiné kosong, utawa ana masalah liya.',
	'interwiki_delquestion' => 'Mbusak "$1"',
	'interwiki_deleting' => 'Panjenengan mbusak préfiks utawa sisipan awal "$1".',
	'interwiki_deleted' => 'Préfisk "$1" bisa kasil dibusak saka tabèl interwiki.',
	'interwiki_delfailed' => 'Préfiks "$1" ora bisa diilangi saka tabèl interwiki.',
	'interwiki_addtext' => 'Nambah préfiks interwiki',
	'interwiki_addintro' => 'Panjenengan nambah préfiks utawa sisipan awal interwiki anyar.
Élinga yèn iku ora bisa ngandhut spasi ( ), pada pangkat (:), ampersands (&), utawa tandha padha (=).',
	'interwiki_addbutton' => 'Nambah',
	'interwiki_added' => 'Préfiks utawa sisipan awal "$1" bisa kasil ditambahaké ing tabèl interwiki.',
	'interwiki_addfailed' => 'Préfiks "$1" ora bisa ditambahaké ing tabèl interwiki.
Mbok-menawa iki pancèn wis ana ing tabèl interwiki.',
	'interwiki_edittext' => 'Nyunting sawijining préfiks interwiki',
	'interwiki_editintro' => 'Panjenengan nyunting préfiks interwiki.
Élinga yèn iki ora bisa nugel pranala-pranala sing wis ana.',
	'interwiki_edited' => 'Préfiks "$1" bisa suksès dimodifikasi ing tabèl interwiki.',
	'interwiki_editerror' => 'Préfiks utawa sisipan awal "$1" ora bisa dimodifikasi ing tabèl interwiki.
Mbok-menawa iki ora ana.',
	'interwiki_logpagename' => 'Log tabèl interwiki',
	'interwiki_log_added' => 'nambahaké préfiks (sisipan awal) "$2" ($3) (trans: $4) (local: $5) ing tabèl interwiki',
	'interwiki_log_edited' => 'modifikasi préfiks (sisipan awal) "$2" : ($3) (trans: $4) (local: $5) ing tabèl interwiki',
	'interwiki_log_deleted' => 'ngilangi sisipan awal (préfiks) "$2" saka tabèl interwiki',
	'interwiki_logpagetext' => 'Kaca iki log owah-owahan kanggo [[Special:Interwiki|tabèl interwiki]].',
	'interwiki_defaultreason' => 'ora mènèhi alesan',
);

/** Georgian (ქართული)
 * @author Malafaya
 */
$messages['ka'] = array(
	'interwiki_reasonfield' => 'მიზეზი',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'interwiki' => 'មើលនិងកែប្រែទិន្នន័យអន្តរវិគី',
	'interwiki-title-norights' => 'មើលទិន្នន័យអន្តរវិគី',
	'interwiki-desc' => 'បន្ថែម[[Special:Interwiki|ទំព័រពិសេស]]ដើម្បីមើលនិងកែប្រែតារាងអន្តរវិគី',
	'interwiki_prefix' => 'បុព្វបទ',
	'interwiki_reasonfield' => 'មូលហេតុ',
	'interwiki_intro' => 'មើល$1ចំពោះពត៌មានបន្ថែមអំពីតារាងអន្តរវិគី។ នេះ​ជា[[Special:Log/interwiki|កំនត់ហេតុនៃបំលាស់ប្តូរ]]ក្នុងតារាងអន្តរវិគីនេះ។',
	'interwiki_error' => 'កំហុស:តារាងអន្តរវិគីគឺទទេ ឬក៏មានអ្វីផ្សេងទៀតមានបញ្ហា។',
	'interwiki_delquestion' => 'ការលុបចេញ "$1"',
	'interwiki_deleting' => 'លោកអ្នកកំពុងលុបបុព្វបទ "$1"។',
	'interwiki_deleted' => 'បុព្វបទ"$1"បានដកចេញពីតារាងអន្តរវិគីដោយជោគជ័យហើយ។',
	'interwiki_delfailed' => 'បុព្វបទ"$1"មិនអាចដកចេញពីតារាងអន្តរវិគីបានទេ។',
	'interwiki_addtext' => 'បន្ថែមបុព្វបទអន្តរវិគី',
	'interwiki_addintro' => 'អ្នកកំពុងបន្ថែមបុព្វបទអន្តរវិគីថ្មីមួយ។

សូមចងចាំថាវាមិនអាចមាន ដកឃ្លា( ) ចុច២(:) សញ្ញានិង(&) ឬសញ្ញាស្មើ(=)បានទេ។',
	'interwiki_addbutton' => 'បន្ថែម',
	'interwiki_added' => 'បុព្វបទ "$1" ត្រូវបានបន្ថែមទៅក្នុងតារាងអន្តរវិគីដោយជោគជ័យ។',
	'interwiki_addfailed' => 'បុព្វបទ "$1" មិនអាចបន្ថែមទៅក្នុងតារាងអន្តរវិគីបានទេ។

ប្រហែលជាវាមានរួចហើយនៅក្នុងតារាងអន្តរវិគី។',
	'interwiki_defaulturl' => 'http://www.example.com/$1',
	'interwiki_edittext' => 'ការកែប្រែបុព្វបទអន្តរវិគី',
	'interwiki_editintro' => 'អ្នកកំពុងកែប្រែបុព្វបទអន្តរវិគី។

ចូរចងចាំថាវាអាចនាំអោយខូចតំនភ្ជាប់ដែលមានស្រេច។',
	'interwiki_edited' => 'បុព្វបទ"$1"ត្រូវបានកែសំរួលក្នុងតារាងអន្តរវិគីដោយជោគជ័យហើយ។',
	'interwiki_editerror' => 'បុព្វបទ "$1" មិនអាចកែសំរួលនៅក្នុងតារាងអន្តរវិគីបានទេ។

ប្រហែលជាវាមិនមានអត្ថិភាពទេ។',
	'interwiki_logpagename' => 'កំនត់ហេតុតារាងអន្តរវិគី',
	'interwiki_log_added' => 'បានបន្ថែម "$2" ($3) (trans: $4) (local: $5) ក្នុងតារាងអន្តរវិគី ៖',
	'interwiki_log_edited' => 'កែសំរួលបុព្វបទ "$2" : ($3) (trans: $4) (local: $5) នៅក្នុងតារាងអន្តរវិគី',
	'interwiki_log_deleted' => 'បានដកបុព្វបទ"$2"ចេញពីតារាងអន្តរវិគី',
	'interwiki_logpagetext' => 'នេះជាកំនត់ហេតុនៃបំលាស់ប្តូរក្នុង[[Special:Interwiki|តារាងអន្តរវិគី]]។',
	'interwiki_defaultreason' => 'គ្មានមូលហេតុត្រូវបានផ្តល់អោយ',
	'right-interwiki' => 'កែប្រែទិន្នន័យអន្តរវិគី',
);

/** Korean (한국어)
 * @author ToePeu
 */
$messages['ko'] = array(
	'interwiki' => '인터위키 목록 보기/고치기',
	'interwiki-title-norights' => '인터위키 보기',
	'interwiki-desc' => '인터위키 표를 보거나 고칠 수 있는 [[Special:Interwiki|특수문서]]를 추가',
	'interwiki_prefix' => '접두어',
	'interwiki_reasonfield' => '이유',
	'interwiki_intro' => '인터위키 표에 대한 더 많은 정보는 $1을 참고하세요. 표의 [[Special:Log/interwiki|바뀜 기록]]이 있습니다.',
	'interwiki_error' => '오류: 인터위키 표가 비어 있거나 다른 무엇인가가 잘못되었습니다.',
	'interwiki_delquestion' => '"$1" 지우기',
	'interwiki_deleting' => '접두어 "$1"을(를) 지웁니다.',
	'interwiki_deleted' => '접두어 "$1"을(를) 지웠습니다.',
	'interwiki_delfailed' => '접두어 "$1"을(를) 지울 수 없습니다.',
	'interwiki_addtext' => '접두어 더하기',
	'interwiki_addintro' => '새 인터위키 접두어를 만듭니다. 공백( ), 쌍점(:), &기호(&), 등호(=)는 포함할 수 없습니다.',
	'interwiki_addbutton' => '더하기',
	'interwiki_added' => '접두어 "$1"을(를) 더했습니다.',
	'interwiki_addfailed' => '접두어 "$1"을(를) 더할 수 없습니다. 이미 표에 있을 수 있습니다.',
	'interwiki_edittext' => '접두어 고치기',
	'interwiki_editintro' => '인터위키 접두어를 고칩니다. 이미 만들어진 인터위키를 망가뜨릴 수 있으니 주의해 주세요.',
	'interwiki_edited' => '접두어 "$1"을(를) 고쳤습니다.',
	'interwiki_editerror' => '접두어 "$1"을(를) 고칠 수 없습니다. 목록에 없는 접두어일 수 있습니다.',
	'interwiki_logpagename' => '인터위키 수정 기록',
	'interwiki_log_added' => '접두어 "$2" ($3) (trans: $4) (local: $5) 을(를) 인터위키 목록에 더했습니다.',
	'interwiki_log_edited' => '접두어 "$2" ($3) (trans: $4) (local: $5) 을(를) 인터위키 목록에서 고쳤습니다.',
	'interwiki_log_deleted' => '접두어 "$2"을(를) 인터위키 목록에서 지웠습니다.',
	'interwiki_logpagetext' => '[[Special:Interwiki|인터위키]] 목록의 바뀐 내역입니다.',
	'interwiki_defaultreason' => '이유가 제시되지 않았습니다.',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'interwiki' => 'Engerwiki Date beloere un änndere',
	'interwiki-title-norights' => 'Engerwiki Date beloore',
	'interwiki-desc' => 'Brengk de Sondersigg [[Special:Interwiki]], öm Engerwiki Date ze beloore un ze ändere.',
	'interwiki_prefix' => 'Försaz',
	'interwiki_reasonfield' => 'Aanlass',
	'interwiki_intro' => 'Op dä Sigg $1 fingk mer mieh do dröver, wat et met dä Tabäll met de Engerwiki Date op sich hät.
Et [[Special:Log/interwiki|Logbuch med de Engerwiki Date]] zeichnet all de Änderunge aan de Engerwiki Date op.',
	'interwiki_local' => 'Lokal',
	'interwiki_error' => '<span style="text-transform:uppercase">Fähler:</span> de Tabäll met de Engerwiki Date is leddisch.',
	'interwiki_delquestion' => '„$1“ weed fottjeschmeße',
	'interwiki_deleting' => 'Do wells dä Engerwiki Försaz „$1“ fott schmiiße.',
	'interwiki_deleted' => 'Dä Försaz „$1“ es jäz uß dä Engerwiki Date erusjeschmesse.',
	'interwiki_delfailed' => 'Dä Försaz „$1“ konnt nit uß dä Engerwiki Date jenomme wääde.',
	'interwiki_addtext' => 'Ene Engerwiki Försaz dobei donn',
	'interwiki_addintro' => 'Do bes an ennem Engerwiki Fösaz am dobei donn.
Denk draan, et dörfe kei Zweschräum ( ), Koufmanns-Un (&amp;), Jlisch-Zeiche (=), un kein Dubbelpünkscher (:) do dren sin.',
	'interwiki_addbutton' => 'Dobei donn',
	'interwiki_added' => 'Dä Försaz „$1“ es jäz bei de Engerwiki Date dobei jekomme.',
	'interwiki_addfailed' => 'Dä Försaz „$1“ konnt nit bei de Engerwiki Date dobeijedonn wäde.
Maach sin, dat dä en de Engerwiki Tabäll ald dren wor un es.',
	'interwiki_edittext' => 'Enne Engerwiki Fürsaz Ändere',
	'interwiki_editintro' => 'Do bes an ennem Engerwiki Fösaz am ändere.
Denk draan, domet könnts De Links em Wiki kapott maache, die velleich do drop opboue.',
	'interwiki_edited' => 'Föz dä Försaz „$1“ sen de Engerwiki Date jäz jetuusch.',
	'interwiki_editerror' => 'Dä Försaz „$1“ konnt en de Engerwiki Date nit beärrbeidt wäde.
Maach sin, dat et inn nit jitt.',
	'interwiki_logpagename' => 'Logbooch fun de Engerwiki Tabäll',
	'interwiki_log_added' => 'hät dä Försaz „$2“ ($3) (Trans: $4) (Lokal: $5) en de Engerwiki Date eren jedonn',
	'interwiki_log_edited' => 'hät dä Försaz „$2“ ($3) (Trans: $4) (Lokal: $5) en de Engerwiki Date ömjemodelt',
	'interwiki_log_deleted' => 'hät dä Försaz „$2“ es us de Engerwiki Date eruß jeworfe',
	'interwiki_logpagetext' => 'Hee is dat Logboch met de Änderonge aan de [[Special:Interwiki|Engerwiki Date]].',
	'interwiki_defaultreason' => 'Keine Aanlass aanjejovve',
);

/** Latin (Latina)
 * @author SPQRobin
 * @author UV
 */
$messages['la'] = array(
	'interwiki' => 'Videre et recensere data intervica',
	'interwiki_prefix' => 'Praefixum',
	'interwiki_reasonfield' => 'Causa',
	'interwiki_intro' => 'De tabula intervica, vide etiam $1. Etiam sunt [[Special:Log/interwiki|acta mutationum]] tabulae intervicae.',
	'interwiki_error' => 'ERROR: Tabula intervica est vacua, aut aerumna alia occurrit.',
	'interwiki_delquestion' => 'Removens "$1"',
	'interwiki_deleting' => 'Delens praefixum "$1".',
	'interwiki_deleted' => 'Praefixum "$1" prospere remotum est ex tabula intervica.',
	'interwiki_delfailed' => 'Praefixum "$1" ex tabula intervica removeri non potuit.',
	'interwiki_addtext' => 'Addere praefixum intervicum',
	'interwiki_addbutton' => 'Addere',
	'interwiki_added' => 'Praefixum "$1" prospere in tabulam intervicam additum est.',
	'interwiki_addfailed' => 'Praefixum "$1" in tabulam intervicam addi non potuit. Fortasse iam est in tabula intervica.',
	'interwiki_logpagename' => 'Index tabulae intervicae',
	'interwiki_log_added' => 'addidit "$2" ($3) (trans: $4) (local: $5) in tabulam intervicam',
	'interwiki_log_deleted' => 'removit praefixum "$2" ex tabula intervica',
	'interwiki_logpagetext' => 'Hic est index mutationum [[Special:Interwiki|tabulae intervicae]].',
	'interwiki_defaultreason' => 'nulla causa data',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'interwiki' => 'Interwiki-Date kucken a veränneren',
	'interwiki-title-norights' => 'Interwiki-Date kucken',
	'interwiki-desc' => "Setzt eng [[Special:Interwiki|Spezialsäit]] derbäi fir d'Interwiki-Tabell ze gesin an z'änneren",
	'interwiki_prefix' => 'Prefix',
	'interwiki_reasonfield' => 'Grond',
	'interwiki_intro' => "Kuckt $1 fir méi Informatiounen iwwert d'Interwiki-Tabell.
Et gëtt eng [[Special:Log/interwiki|Lëscht vun den Ännerungen]] vun dëser Interwiki-Tabell.",
	'interwiki_local' => 'Lokal',
	'interwiki_error' => "Feeler: D'Interwiki-Tabell ass eidel.",
	'interwiki_delquestion' => 'Läscht "$1"',
	'interwiki_addtext' => 'En Interwiki-prefix derbäisetzen',
	'interwiki_addbutton' => 'Derbäisetzen',
	'interwiki_defaulturl' => 'http://www.beispill.com/$1',
	'interwiki_edittext' => 'En interwiki Prefix änneren',
	'interwiki_logpagename' => 'Lëscht mat der Interwikitabell',
	'interwiki_logpagetext' => 'Dëst ass eng Lëscht mat den Ännerunge vun der [[Special:Interwiki|Interwikitabell]].',
	'interwiki_defaultreason' => 'kee Grond uginn',
	'right-interwiki' => 'Interwiki-Daten änneren',
);

/** Malayalam (മലയാളം)
 * @author Shijualex
 */
$messages['ml'] = array(
	'interwiki' => 'ഇന്റര്‍ വിക്കി ഡാറ്റ കാണുകയും തിരുത്തുകയും ചെയ്യുക',
	'interwiki-title-norights' => 'ഇന്റര്‍‌വിക്കി ഡാറ്റ കാണുക',
	'interwiki_reasonfield' => 'കാരണം',
	'interwiki_delquestion' => '"$1" മായ്ച്ചുകൊണ്ടിരിക്കുന്നു',
	'interwiki_addbutton' => 'ചേര്‍ക്കുക',
	'interwiki_defaultreason' => 'കാരണമൊന്നും സൂചിപ്പിച്ചിട്ടില്ല',
);

/** Marathi (मराठी)
 * @author Kaustubh
 */
$messages['mr'] = array(
	'interwiki' => 'आंतरविकि डाटा पहा व संपादा',
	'interwiki-title-norights' => 'अंतरविकि डाटा पहा',
	'interwiki-desc' => 'आंतरविकि सारणी पाहण्यासाठी व संपादन्यासाठी एक [[Special:Interwiki|विशेष पान]] वाढविते',
	'interwiki_prefix' => 'उपपद (पूर्वप्रत्यय)',
	'interwiki_reasonfield' => 'कारण',
	'interwiki_intro' => 'आंतरविकि सारणी बद्दल अधिक माहीतीसाठी $1 पहा. इथे आंतरविकि सारणीत करण्यात आलेल्या [[Special:Log/interwiki|बदलांची यादी]] आहे.',
	'interwiki_error' => 'त्रुटी: आंतरविकि सारणी रिकामी आहे, किंवा इतर काहीतरी चुकलेले आहे.',
	'interwiki_delquestion' => '"$1" वगळत आहे',
	'interwiki_deleting' => 'तुम्ही "$1" उपपद वगळत आहात.',
	'interwiki_deleted' => '"$1" उपपद आंतरविकि सारणीमधून वगळण्यात आलेले आहे.',
	'interwiki_delfailed' => '"$1" उपपद आंतरविकि सारणीतून वगळता आलेले नाही.',
	'interwiki_addtext' => 'एक आंतरविकि उपपद वाढवा',
	'interwiki_addintro' => 'तुम्ही एक नवीन आंतरविकि उपपद वाढवित आहात. कृपया लक्षात घ्या की त्यामध्ये स्पेस ( ), विसर्ग (:), आणिचिन्ह (&), किंवा बरोबरची खूण (=) असू शकत नाही.',
	'interwiki_addbutton' => 'वाढवा',
	'interwiki_added' => '"$1" उपपद आंतरविकि सारणी मध्ये वाढविण्यात आलेले आहे.',
	'interwiki_addfailed' => '"$1" उपपद आंतरविकि सारणी मध्ये वाढवू शकलेलो नाही. कदाचित ते अगोदरच अस्तित्वात असण्याची शक्यता आहे.',
	'interwiki_edittext' => 'एक अंतरविकि उपपद संपादित आहे',
	'interwiki_editintro' => 'तुम्ही एक अंतरविकि उपपद संपादित आहात.
लक्षात ठेवा की यामुळे अगोदर दिलेले दुवे तुटू शकतात.',
	'interwiki_edited' => 'अंतरविकि सारणीमध्ये "$1" उपपद यशस्वीरित्या बदलण्यात आलेले आहे.',
	'interwiki_editerror' => 'अंतरविकि सारणीमध्ये "$1" उपपद बदलू शकत नाही.
कदाचित ते अस्तित्वात नसेल.',
	'interwiki_logpagename' => 'आंतरविकि सारणी नोंद',
	'interwiki_log_added' => 'आंतरविकि सारणी मध्ये "$2" ($3) (trans: $4) (local: $5) वाढविले',
	'interwiki_log_edited' => 'अंतरविकि सारणीमध्ये उपपद "$2" : ($3) (trans: $4) (local: $5) बदलले',
	'interwiki_log_deleted' => '"$2" उपपद आंतरविकिसारणी मधून वगळले',
	'interwiki_logpagetext' => '[[Special:Interwiki|आंतरविकि सारणीत]] झालेल्या बदलांची ही सूची आहे.',
	'interwiki_defaultreason' => 'कारण दिलेले नाही',
	'right-interwiki' => 'आंतरविकि डाटा बदला',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'interwiki_reasonfield' => 'Тувтал',
	'interwiki_addbutton' => 'Поладомс',
	'interwiki_defaultreason' => 'тувтал апак ёвта',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'interwiki_reasonfield' => 'Īxtlamatiliztli',
	'interwiki_addbutton' => 'Ticcētilīz',
	'interwiki_defaultreason' => 'ahmo cah īxtlamatiliztli',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'interwiki_prefix' => 'Präfix',
	'interwiki_reasonfield' => 'Grund',
	'interwiki_delquestion' => '„$1“ warrt rutsmeten',
	'interwiki_addtext' => 'Interwiki-Präfix tofögen',
	'interwiki_addbutton' => 'Tofögen',
	'interwiki_defaultreason' => 'keen Grund angeven',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'interwiki' => 'Interwikigegevens bekijken en wijzigen',
	'interwiki-title-norights' => 'Interwikigegevens bekijken',
	'interwiki-desc' => 'Voegt een [[Special:Interwiki|speciale pagina]] toe om de interwikitabel te bekijken en bewerken',
	'interwiki_prefix' => 'Voorvoegsel',
	'interwiki_reasonfield' => 'Reden',
	'interwiki_intro' => 'Zie $1 voor meer informatie over de interwikitabel.
Er is een [[Special:Log/interwiki|logboek van wijzigingen]] aan de interwikitabel.',
	'interwiki_local' => 'Lokaal',
	'interwiki_error' => 'FOUT: De interwikitabel is leeg, of iets anders ging verkeerd.',
	'interwiki_delquestion' => '"$1" aan het verwijderen',
	'interwiki_deleting' => 'U bent voorvoegsel "$1" aan het verwijderen.',
	'interwiki_deleted' => 'Voorvoegsel "$1" is succesvol verwijderd van de interwikitabel.',
	'interwiki_delfailed' => 'Voorvoegsel "$1" kon niet worden verwijderd van de interwikitabel.',
	'interwiki_addtext' => 'Een interwikivoorvoegsel toevoegen',
	'interwiki_addintro' => 'U bent een nieuw interwikivoorvoegsel aan het toevoegen. Let op dat dit geen spaties ( ), dubbelepunt (:), ampersands (&), of gelijkheidstekens (=) mag bevatten.',
	'interwiki_addbutton' => 'Toevoegen',
	'interwiki_added' => 'Voorvoegsel "$1" is succesvol toegevoegd aan de interwikitabel.',
	'interwiki_addfailed' => 'Voorvoegsel "$1" kon niet worden toegevoegd aan de interwikitabel. Mogelijk bestaat hij al in de interwikitabel.',
	'interwiki_edittext' => 'Een interwikivoorvoegsel bewerken',
	'interwiki_editintro' => 'U bent een interwikivoorvoegsel aan het bewerken. Let op dat dit bestaande links kan breken.',
	'interwiki_edited' => 'Voorvoegsel "$1" is succesvol gewijzigd in de interwikitabel.',
	'interwiki_editerror' => 'Voorvoegsel "$1" kan niet worden gewijzigd in de interwikitabel. Mogelijk bestaat hij niet.',
	'interwiki_logpagename' => 'Logboek interwikitabel',
	'interwiki_log_added' => 'Voegde "$2" ($3) (trans: $4) (local: $5) toe aan de interwikitabel',
	'interwiki_log_edited' => 'wijzigde voorvoegsel "$2": ($3) (trans: $4) (local: $5) in de interwikitabel',
	'interwiki_log_deleted' => 'Verwijderde voorvoegsel "$2" van de interwikitabel',
	'interwiki_logpagetext' => 'Dit is een logboek van wijzigingen aan de [[Special:Interwiki|interwikitabel]].',
	'interwiki_defaultreason' => 'geen reden gegeven',
	'right-interwiki' => 'Interwikigegevens bewerken',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Eirik
 * @author Jon Harald Søby
 */
$messages['nn'] = array(
	'interwiki' => 'Vis og endre interwikidata',
	'interwiki-title-norights' => 'Vis interwikidata',
	'interwiki_prefix' => 'Prefiks',
	'interwiki_reasonfield' => 'Årsak',
	'interwiki_defaultreason' => 'inga grunngjeving',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'interwiki' => 'Vis og manipuler interwikidata',
	'interwiki-title-norights' => 'Vis interwikidata',
	'interwiki-desc' => 'Legger til en [[Special:Interwiki|spesialside]] som gjør at man kan se og redigere interwiki-tabellen.',
	'interwiki_prefix' => 'Prefiks',
	'interwiki_reasonfield' => 'Årsak',
	'interwiki_intro' => 'Se $1 for mer informasjon om interwikitabellen. Det er en [[Special:Log/interwiki|logg]] over endringer i interwikitabellen.',
	'interwiki_local' => 'Lokal',
	'interwiki_error' => 'FEIL: Interwikitabellen er tom, eller noe gikk gærent.',
	'interwiki_delquestion' => 'Sletter «$1»',
	'interwiki_deleting' => 'Du sletter prefikset «$1».',
	'interwiki_deleted' => 'Prefikset «$1» ble fjernet fra interwikitabellen.',
	'interwiki_delfailed' => 'Prefikset «$1» kunne ikke fjernes fra interwikitabellen.',
	'interwiki_addtext' => 'Legg til et interwikiprefiks.',
	'interwiki_addintro' => 'Du legger til et nytt interwikiprefiks. Husk at det ikke kan inneholde mellomrom ( ), kolon (:), &-tegn eller likhetstegn (=).',
	'interwiki_addbutton' => 'Legg til',
	'interwiki_added' => 'Prefikset «$1» ble lagt til i interwikitabellen.',
	'interwiki_addfailed' => 'Prefikset «$1» kunne ikke legges til i interwikitabellen. Det er kanskje brukt der fra før.',
	'interwiki_edittext' => 'Redigerer et interwikiprefiks',
	'interwiki_editintro' => 'Du redigerer et interwikiprefiks. Merk at dette kan ødelegge eksisterende lenker.',
	'interwiki_edited' => 'Prefikset «$1» ble endret i interwikitabellen.',
	'interwiki_editerror' => 'Prefikset «$1» kan ikke endres i interwikitabellen. Det finnes muligens ikke.',
	'interwiki_logpagename' => 'Interwikitabellogg',
	'interwiki_log_added' => 'La til «$2» ($3) (trans: $4) (lokal: $5) til interwikitabellen',
	'interwiki_log_edited' => 'endret prefikset «$2»: ($3) (trans: $4) (lokal: $5) i interwikitabellen',
	'interwiki_log_deleted' => 'Fjernet prefikset «$2» fra interwikitabellen',
	'interwiki_logpagetext' => 'Dette er en logg over endringer i [[Special:Interwiki|interwikitabellen]].',
	'interwiki_defaultreason' => 'ingen grunn gitt',
	'right-interwiki' => 'Redigere interwikidata',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'interwiki_reasonfield' => 'Lebaka',
	'interwiki_delquestion' => 'Phumula "$1"',
	'interwiki_addbutton' => 'Lokela',
	'interwiki_defaulturl' => 'http://www.mohlala.com/$1',
	'interwiki_defaultreason' => 'gago lebaka leo lefilwego',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'interwiki' => 'Veire e editar las donadas interwiki',
	'interwiki-title-norights' => 'Veire las donadas interwiki',
	'interwiki-desc' => 'Apond una [[Special:Interwiki|pagina especiala]] per veire e editar la taula interwiki',
	'interwiki_prefix' => 'Prefix',
	'interwiki_reasonfield' => 'Motiu :',
	'interwiki_intro' => "Vejatz $1 per obténer mai d'entresenhas per çò que concernís la taula interwiki. Aquò es lo [[Special:Log/interwiki|jornal de las modificacions]] de la taula interwiki.",
	'interwiki_error' => "Error : la taula dels interwikis es voida o un processús s'es mal desenrotlat.",
	'interwiki_delquestion' => 'Supression "$1"',
	'interwiki_deleting' => 'Escafatz presentament lo prefix « $1 ».',
	'interwiki_deleted' => '$1 es estada levada amb succès de la taula interwiki.',
	'interwiki_delfailed' => '$1 a pas pogut èsser levat de la taula interwiki.',
	'interwiki_addtext' => 'Apond un prefix interwiki',
	'interwiki_addintro' => "Sètz a apondre un prefix interwiki. Rapelatz-vos que pòt pas conténer d'espacis ( ), de punts dobles (:), d'eperluetas (&) o de signes egal (=)",
	'interwiki_addbutton' => 'Apondre',
	'interwiki_added' => '$1 es estat apondut amb succès dins la taula interwiki.',
	'interwiki_addfailed' => '$1 a pas pogut èsser apondut a la taula interwiki.
Benlèu i existís ja.',
	'interwiki_edittext' => 'Modificar un prefix interwiki',
	'interwiki_editintro' => "Modificatz un prefix interwiki. Rapelatz-vos qu'aquò pòt rompre de ligams existents.",
	'interwiki_edited' => 'Lo prefix « $1 » es estat modificat amb succès dins la taula interwiki.',
	'interwiki_editerror' => "Lo prefix « $1 » pòt pas èsser modificat. Es possible qu'exista pas.",
	'interwiki_logpagename' => 'Jornal de la taula interwiki',
	'interwiki_log_added' => 'Ajustat « $2 » ($3) (trans: $4) (local: $5) dins la taula interwiki',
	'interwiki_log_edited' => 'a modificat lo prefix « $2 » : ($3) (trans: $4) (local: $5) dins la taula interwiki',
	'interwiki_log_deleted' => 'Prefix « $2 » suprimit de la taula interwiki',
	'interwiki_logpagetext' => 'Aquò es lo jornal dels cambiaments dins la [[Special:Interwiki|taula interwiki]].',
	'interwiki_defaultreason' => 'Cap de motiu balhat',
	'right-interwiki' => 'Modificar las donadas interwiki',
);

/** Polish (Polski)
 * @author McMonster
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'interwiki' => 'Zobacz i edytuj dane interwiki',
	'interwiki-title-norights' => 'Zobacz dane interwiki',
	'interwiki-desc' => 'Dodaje [[Special:Interwiki|stronę specjalną]] służącą do przeglądania i redakcji tablicy interwiki.',
	'interwiki_prefix' => 'Przedrostek',
	'interwiki_reasonfield' => 'Powód',
	'interwiki_intro' => 'Zobacz $1 aby uzyskać więcej informacji na temat tablicy interwiki.
Historię zmian w tablicy interwiki możesz zobaczyć w [[Special:Log/interwiki|rejestrze]].',
	'interwiki_error' => 'BŁĄD: Tablica interwiki jest pusta lub coś wystąpił poważny problem.',
	'interwiki_delquestion' => 'Czy usunąć „$1”',
	'interwiki_deleting' => 'Usuwasz prefiks „$1”.',
	'interwiki_deleted' => 'Prefiks „$1” został z powodzeniem usunięty z tablicy interwiki.',
	'interwiki_delfailed' => 'Prefiks „$1” nie może zostać usunięty z tablicy interwiki.',
	'interwiki_addtext' => 'Dodaj przedrostek interwiki',
	'interwiki_addintro' => 'Edytujesz przedrostek interwiki.
Pamiętaj, że nie może on zawierać znaku odstępu ( ), dwukropka (:), ampersandu (&) oraz znaku równości (=).',
	'interwiki_addbutton' => 'Dodaj',
	'interwiki_added' => 'Prefiks „$1” został z powodzeniem dodany do tablicy interwiki.',
	'interwiki_addfailed' => 'Prefiks „$1” nie może zostać dodany do tablicy interwiki.
Prawdopodobnie ten prefiks już jest w tablicy.',
	'interwiki_edittext' => 'Edycja przedrostka interwiki',
	'interwiki_editintro' => 'Redagujesz przedrostek interwiki. Pamiętaj, że może to zerwać istniejące powiązania między projektami językowymi.',
	'interwiki_edited' => 'Prefiks „$1” został z powodzeniem poprawiony w tablicy interwiki.',
	'interwiki_editerror' => 'Prefiks „$1” nie może zostać poprawiony w tablicy interwiki. Prawdopodobnie nie brak w tablicy.',
	'interwiki_logpagename' => 'Rejestr tablicy interwiki',
	'interwiki_log_added' => 'dodał przedrostek „$2” ($3) (trans: $4) (local: $5) do tablicy interwiki',
	'interwiki_log_edited' => 'zmienił przedrostek „$2” : ($3) (trans: $4) (local: $5) w tablicy interwiki',
	'interwiki_log_deleted' => 'usunął przedrostek „$2” z tablicy interwiki',
	'interwiki_logpagetext' => 'Poniżej znajduje się rejestr zmian wykonanych w [[Special:Interwiki|tablicy interwiki]].',
	'interwiki_defaultreason' => 'nie podano powodu',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'interwiki_prefix' => 'مختاړی',
	'interwiki_reasonfield' => 'سبب',
	'interwiki_delquestion' => '"$1" د ړنګولو په حال کې دی...',
	'interwiki_deleting' => 'تاسو د "$1" مختاړی ړنګوی.',
	'interwiki_addbutton' => 'ورګډول',
	'interwiki_defaultreason' => 'هېڅ کوم سبب نه دی ورکړ شوی',
);

/** Portuguese (Português)
 * @author 555
 * @author Malafaya
 */
$messages['pt'] = array(
	'interwiki' => 'Ver e manipular dados de interwikis',
	'interwiki-title-norights' => 'Ver dados interwiki',
	'interwiki-desc' => 'Adiciona uma [[Special:Interwiki|página especial]] para visualizar e editar a tabela de interwikis',
	'interwiki_prefix' => 'Prefixo',
	'interwiki_reasonfield' => 'Motivo',
	'interwiki_intro' => 'Veja $1 para maiores informações em relação à tabela de interwikis. Há também um [[Special:Log/interwiki|registo de alterações]] na tabela de interwikis.',
	'interwiki_error' => 'ERRO: A tabela de interwikis está vazia, ou alguma outra coisa não correu bem.',
	'interwiki_delquestion' => 'A apagar "$1"',
	'interwiki_deleting' => 'Está a apagar o prefixo "$1".',
	'interwiki_deleted' => 'O prefixo "$1" foi removido da tabelas de interwikis com sucesso.',
	'interwiki_delfailed' => 'O prefixo "$1" não pôde ser removido da tabela de interwikis.',
	'interwiki_addtext' => 'Adicionar um prefixo de interwikis',
	'interwiki_addintro' => 'Você se encontra prestes a adicionar um novo prefixo de interwiki. Lembre-se de que ele não pode conter espaços ( ), dois-pontos (:), conjunções (&) ou sinais de igualdade (=).',
	'interwiki_addbutton' => 'Adicionar',
	'interwiki_added' => 'O prefixo "$1" foi adicionado à tabela de interwikis com sucesso.',
	'interwiki_addfailed' => 'O prefixo "$1" não pôde ser adicionado à tabela de interwikis. Possivelmente já existe nessa tabela.',
	'interwiki_edittext' => 'Editando um prefixo interwiki',
	'interwiki_editintro' => 'Você está a editar um prefixo interwiki. Lembre-se de que isto pode quebrar ligações existentes.',
	'interwiki_edited' => 'O prefixo "$1" foi modificado na tabela de interwikis com sucesso.',
	'interwiki_editerror' => 'O prefixo "$1" não pode ser modificado na tabela de interwikis. Possivelmente, não existe.',
	'interwiki_logpagename' => 'Registo da tabela de interwikis',
	'interwiki_log_added' => 'adicionado "$2" ($3) (trans: $4) (local: $5) à tabela de interwikis',
	'interwiki_log_edited' => 'modificado o prefixo "$2": ($3) (trans: $4) (local: $5) na tabela de interwikis',
	'interwiki_log_deleted' => 'removido o prefixo "$2" da tabela de interwikis',
	'interwiki_logpagetext' => 'Este é um registo das alterações à [[Special:Interwiki|tabela de interwikis]].',
	'interwiki_defaultreason' => 'sem motivo especificado',
);

/** Romanian (Română)
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'interwiki_reasonfield' => 'Motiv',
);

/** Russian (Русский)
 * @author Illusion
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'interwiki' => 'Просмотр и изменение настроек интервики',
	'interwiki-title-norights' => 'Просмотреть данные об интервики',
	'interwiki-desc' => 'Добавляет [[Special:Interwiki|служебную страницу]] для просмотра и редактирования таблицы префиксов интервики.',
	'interwiki_prefix' => 'Приставка',
	'interwiki_reasonfield' => 'Причина',
	'interwiki_intro' => 'См. $1, чтобы получить более подробную информацию о таблице интервики. Существует также  [[Special:Log/interwiki|журнал изменений]] таблицы интервики.',
	'interwiki_error' => 'ОШИБКА: таблица интервики пуста или что-то другое работает ошибочно.',
	'interwiki_delquestion' => 'Удаление «$1»',
	'interwiki_deleting' => 'Вы удаляете приставку «$1».',
	'interwiki_deleted' => 'Приставка «$1» успешно удалена из таблицы интервики.',
	'interwiki_delfailed' => 'Приставка «$1» не может быть удалена из таблицы интервики.',
	'interwiki_addtext' => 'Добавить новую интервики-приставку',
	'interwiki_addintro' => 'Вы собираетесь добавить новую интервики-приставку. Помните, что она не может содержать пробелы ( ), двоеточия (:), амперсанды (&) и знаки равенства (=).',
	'interwiki_addbutton' => 'Добавить',
	'interwiki_added' => 'Приставка «$1» успешно добавлена в таблицу интервики.',
	'interwiki_addfailed' => 'Приставка «$1» не может быть добавлена в таблицу интервики. Возможно, она уже присутствует в таблице интервики.',
	'interwiki_edittext' => 'Редактирование интервики-приставок',
	'interwiki_editintro' => 'Вы редактируете интервики-приставку. Помните, что это может сломать существующие ссылки.',
	'interwiki_edited' => 'Приставка «$1» успешно изменена в интервики-таблице.',
	'interwiki_editerror' => 'Приставка «$1» не может быть изменена в интервики-таблице. Возможно, она не существует.',
	'interwiki_logpagename' => 'Журнал изменений таблицы интервики',
	'interwiki_log_added' => 'Приставка «$2» ($3) (trans: $4) (local: $5) добавлена в таблицу интервики',
	'interwiki_log_edited' => 'изменил приставку «$2»: ($3) (меж.: $4) (лок.: $5) в интервики-таблице',
	'interwiki_log_deleted' => 'Приставка «$2» удалена из таблицы интервики',
	'interwiki_logpagetext' => 'Это журнал изменений [[Special:Interwiki|таблицы интервики]].',
	'interwiki_defaultreason' => 'причина не указана',
);

/** Sassaresu (Sassaresu)
 * @author Felis
 */
$messages['sdc'] = array(
	'interwiki' => 'Vidè e mudìfiggà li dati interwiki',
	'interwiki_prefix' => 'Prefissu',
	'interwiki_reasonfield' => 'Rasgioni',
	'interwiki_delquestion' => 'Canzillendi "$1"',
	'interwiki_deleting' => 'Sei canzillendi lu prefissu "$1".',
	'interwiki_addtext' => 'Aggiungi un prefissu interwiki',
	'interwiki_addbutton' => 'Aggiungi',
	'interwiki_logpagename' => 'Rigisthru di la table interwiki',
	'interwiki_defaultreason' => 'nisciuna mutibazioni indicadda',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'interwiki' => 'Zobraziť a upravovať údaje interwiki',
	'interwiki-title-norights' => 'Zobraziť údaje interwiki',
	'interwiki-desc' => 'Pridáva [[Special:Interwiki|špeciálnu stránku]] na zobrazovanie a upravovanie tabuľky interwiki',
	'interwiki_prefix' => 'Predpona',
	'interwiki_reasonfield' => 'Dôvod',
	'interwiki_intro' => 'Viac informácií o tabuľke interwiki nájdete na $1. Existuje [[Special:Log/interwiki|záznam zmien]] tabuľky interwiki.',
	'interwiki_error' => 'CHYBA: Tabuľka interwiki je prázdna alebo sa pokazilo niečo iné.',
	'interwiki_delquestion' => 'Maže sa „$1“',
	'interwiki_deleting' => 'Mažete predponu „$1“.',
	'interwiki_deleted' => 'Predpona „$1“ bola úspešne odstránená z tabuľky interwiki.',
	'interwiki_delfailed' => 'Predponu „$1“ nebola možné odstrániť z tabuľky interwiki.',
	'interwiki_addtext' => 'Pridať predponu interwiki',
	'interwiki_addintro' => 'Pridávate novú predponu interwiki. Pamätajte, že nemôže obsahovať medzery „ “, dvojbodky „:“, ampersand „&“ ani znak rovnosti „=“.',
	'interwiki_addbutton' => 'Pridať',
	'interwiki_added' => 'Predpona „$1“ bola úspešne pridaná do tabuľky interwiki.',
	'interwiki_addfailed' => 'Predponu „$1“ nebola možné pridať do tabuľky interwiki. Je možné, že už v tabuľke interwiki existuje.',
	'interwiki_edittext' => 'Upravuje sa predpona interwiki',
	'interwiki_editintro' => 'Upravujete predponu interwiki. Pamätajte na to, že týmto môžete pokaziť existujúce odkazy.',
	'interwiki_edited' => 'Predpona „$1“ bola úspešne zmenená v tabuľke interwiki.',
	'interwiki_editerror' => 'Predponu „$1“ nebolo možné zmeniť v tabuľke interwiki. Je možné, že neexistuje.',
	'interwiki_logpagename' => 'Záznam zmien tabuľky interwiki',
	'interwiki_log_added' => 'Pridané „$2“ ($3) (trans: $4) (local: $5) do tabuľky interwiki',
	'interwiki_log_edited' => 'zmenená predpona „$2“ : ($3) (trans: $4) (lokálna: $5) v tabuľke interwiki',
	'interwiki_log_deleted' => 'Odstránené „$2“ z tabuľky interwiki',
	'interwiki_logpagetext' => 'Toto je záznam zmien [[Special:Interwiki|tabuľky interwiki]].',
	'interwiki_defaultreason' => 'nebol uvedený dôvod',
	'right-interwiki' => 'Upraviť interwiki údaje',
);

/** Serbian Cyrillic ekavian (ћирилица)
 * @author Sasa Stefanovic
 */
$messages['sr-ec'] = array(
	'interwiki_reasonfield' => 'Разлог',
	'interwiki_delquestion' => 'Бришем „$1”',
	'interwiki_addbutton' => 'Додај',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'interwiki' => 'Interwiki-Doaten bekiekje un beoarbaidje',
	'interwiki_prefix' => 'Präfix',
	'interwiki_reasonfield' => 'Gruund',
	'interwiki_intro' => 'Sjuch $1 foar wiedere Informatione uur ju Interwiki-Tabelle. Dät [[Special:Log/interwiki|Logbouk]] wiest aal Annerengen an ju Interwiki-Tabelle.',
	'interwiki_error' => 'Failer: Ju Interwiki-Tabelle is loos.',
	'interwiki_delquestion' => 'Läsket „$1“',
	'interwiki_deleting' => 'Du hoalst Prefix "$1" wäch.',
	'interwiki_deleted' => '„$1“ wuude mäd Ärfoulch uut ju Interwiki-Tabelle wächhoald.',
	'interwiki_delfailed' => '„$1“ kuude nit uut ju Interwiki-Tabelle läsked wäide.',
	'interwiki_addtext' => 'N Interwiki-Präfix bietouföigje',
	'interwiki_addintro' => 'Du föigest n näi Interwiki-Präfix bietou. Beoachte, dät et neen Loosteeken ( ), Koopmons-Un (&), Gliekhaidsteeken (=) un naan Dubbelpunkt (:) änthoolde duur.',
	'interwiki_addbutton' => 'Bietouföigje',
	'interwiki_added' => '„$1“ wuude mäd Ärfoulch ju Interwiki-Tabelle bietouföiged.',
	'interwiki_addfailed' => '„$1“ kuude nit ju Interwiki-Tabelle bietouföiged wäide.',
	'interwiki_logpagename' => 'Interwiki-Tabellenlogbouk',
	'interwiki_log_added' => 'häd „$2“ ($3) (trans: $4) (lokal: $5) ju Interwiki-Tabelle bietouföiged',
	'interwiki_log_deleted' => 'häd „$2“ uut ju Interwiki-Tabelle wächhoald',
	'interwiki_logpagetext' => 'In dit Logbouk wäide Annerengen an ju [[Special:Interwiki|Interwiki-Tabelle]] protokollierd.',
	'interwiki_defaultreason' => 'naan Gruund ounroat',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 */
$messages['su'] = array(
	'interwiki_reasonfield' => 'Alesan',
	'interwiki_delquestion' => 'Ngahapus "$1"',
);

/** Swedish (Svenska)
 * @author Lejonel
 * @author M.M.S.
 */
$messages['sv'] = array(
	'interwiki' => 'Visa och redigera interwiki-data',
	'interwiki-title-norights' => 'Visa interwiki-data',
	'interwiki-desc' => 'Lägger till en [[Special:Interwiki|specialsida]] för att visa och ändra interwikitabellen',
	'interwiki_prefix' => 'Prefix',
	'interwiki_reasonfield' => 'Anledning',
	'interwiki_intro' => 'Se $1 för mer information om interwikitabellen.
Det finns en [[Special:Log/interwiki|logg]] över ändringar av interwikitabellen.',
	'interwiki_error' => 'FEL: Interwikitabellen är tom, eller så gick något fel.',
	'interwiki_delquestion' => 'Ta bort "$1"',
	'interwiki_deleting' => 'Du håller på att ta bort prefixet "$1".',
	'interwiki_deleted' => 'Prefixet "$1 har raderats från interwikitabellen.',
	'interwiki_delfailed' => 'Prefixet "$1" kunde inte raderas från interwikitabellen.',
	'interwiki_addtext' => 'Lägg till ett interwikiprefix',
	'interwiki_addintro' => 'Du håller på att lägga till ett nytt interwikiprefix.
Kom ihåg att det inte kan innehålla mellanslag ( ), kolon (:), &-tecken eller likhetstecken (=).',
	'interwiki_addbutton' => 'Lägg till',
	'interwiki_added' => 'Prefixet "$1" har lagts till i interwikitabellen.',
	'interwiki_addfailed' => 'Prefixet "$1" kunde inte läggas till i interwikitabellen.
Det är möjligt att prefixet redan finns i tabellen.',
	'interwiki_edittext' => 'Redigera ett interwikiprefix',
	'interwiki_editintro' => 'Du redigerar ett interwikiprefix. Notera att detta kan förstöra existerande länkar.',
	'interwiki_edited' => 'Prefixet "$1" har ändrats i interwikitabellen.',
	'interwiki_editerror' => 'Prefixet "$1" kan inte ändras i interwikitabellen. Det är möjligt att det inte finns.',
	'interwiki_logpagename' => 'Interwikitabellogg',
	'interwiki_log_added' => 'lade till prefixet "$2" ($3) (trans: $4) (lokal: $5) i interwikitabellen',
	'interwiki_log_edited' => 'ändrade prefixet "$2" ($3) (trans: $4) (lokal: $5) i interwikitabellen',
	'interwiki_log_deleted' => 'tog bort prefixet "$2" från interwikitabellen',
	'interwiki_logpagetext' => 'Detta är en logg över ändringar i [[Special:Interwiki|interwikitabellen]].',
	'interwiki_defaultreason' => 'ingen anledning given',
	'right-interwiki' => 'Redigera interwikidata',
);

/** Silesian (Ślůnski)
 * @author Herr Kriss
 */
$messages['szl'] = array(
	'interwiki_reasonfield' => 'Čymu',
	'interwiki_addbutton' => 'Dodej',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'interwiki' => 'అంతర్వికీ భోగట్టాని చూడండి మరియు మార్చండి',
	'interwiki_prefix' => 'ఉపసర్గ',
	'interwiki_reasonfield' => 'కారణం',
	'interwiki_intro' => 'అంతర్వికీ పట్టిక గురించి మరింత సమాచారం కోసం $1ని చూడండి. అంతర్వికీ పట్టికకి [[Special:Log/interwiki|మార్పుల చిట్టా]] ఉంది.',
	'interwiki_error' => 'పొరపాటు: అంతర్వికీ పట్టిక ఖాళీగా ఉంది, లేదా ఏదో తప్పు జరిగింది.',
	'interwiki_delquestion' => '"$1"ని తొలగిస్తున్నారు',
	'interwiki_deleting' => 'మీరు "$1" అనే ఉపసర్గని తొలగించబోతున్నారు.',
	'interwiki_deleted' => 'అంతర్వికీ పట్టిక నుండి "$1" అనే ఉపసర్గని విజయవంతంగా తొలగించాం.',
	'interwiki_delfailed' => 'అంతర్వికీ పట్టిక నుండి "$1" అనే ఉపసర్గని తొలగించలేకపోయాం.',
	'interwiki_addtext' => 'ఓ అంతర్వికీ ఉపసర్గని చేర్చండి',
	'interwiki_addbutton' => 'చేర్చు',
	'interwiki_logpagename' => 'అంతర్వికీ పట్టిక చిట్టా',
	'interwiki_logpagetext' => 'ఇది [[Special:Interwiki|అంతర్వికీ పట్టిక]]కి జరిగిన మార్పుల చిట్టా.',
	'interwiki_defaultreason' => 'కారణం ఇవ్వలేదు',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'interwiki_delquestion' => 'Halakon $1',
);

/** Tajik (Cyrillic) (Тоҷикӣ (Cyrillic))
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'interwiki_reasonfield' => 'Сабаб',
	'interwiki_delquestion' => 'Дар ҳоли ҳазфи "$1"',
	'interwiki_addbutton' => 'Илова',
	'interwiki_defaultreason' => 'далеле мушаххас нашудааст',
);

/** Thai (ไทย)
 * @author Passawuth
 */
$messages['th'] = array(
	'interwiki_reasonfield' => 'เหตุผล',
	'interwiki_delquestion' => 'ลบ "$1"',
	'interwiki_addbutton' => 'เพิ่ม',
);

/** Turkish (Türkçe)
 * @author Suelnur
 */
$messages['tr'] = array(
	'interwiki_reasonfield' => 'Neden',
);

/** Ukrainian (Українська)
 * @author Ahonc
 */
$messages['uk'] = array(
	'interwiki_prefix' => 'Префікс',
	'interwiki_reasonfield' => 'Причина',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'interwiki' => 'Xem và sửa đổi dữ liệu về liên kết liên wiki',
	'interwiki-title-norights' => 'Xem dữ liệu liên wiki',
	'interwiki-desc' => 'Thêm một [[Special:Interwiki|trang đặc biệt]] để xem sửa đổi bảng liên wiki',
	'interwiki_prefix' => 'Tiền tố',
	'interwiki_reasonfield' => 'Lý do',
	'interwiki_intro' => 'Xem $1 để biết thêm thông tin về bảng liên wiki.
Đây là [[Special:Log/interwiki|nhật trình các thay đổi]] tại bảng liên wiki.',
	'interwiki_error' => 'LỖi: Bảng liên wiki hiện đang trống, hoặc có vấn đề gì đó đã xảy ra.',
	'interwiki_delquestion' => 'Xóa “$1”',
	'interwiki_deleting' => 'Bạn đang xóa tiền tố “$1”.',
	'interwiki_deleted' => 'Tiền tố “$1” đã được xóa khỏi bảng liên wiki.',
	'interwiki_delfailed' => 'Tiền tố “$1” không thể xóa khỏi bảng liên wiki.',
	'interwiki_addtext' => 'Thêm tiền tố liên kết liên wiki',
	'interwiki_addintro' => 'Bạn đang thêm một tiền tố liên wiki mới.
Hãy nhớ rằng nó không chứa được khoảng trắng ( ), dấu hai chấm (:), dấu và (&), hay dấu bằng (=).',
	'interwiki_addbutton' => 'Thêm',
	'interwiki_added' => 'Tiền tố “$1” đã được thêm vào bảng liên wiki.',
	'interwiki_addfailed' => 'Tiền tố “$1” không thể thêm vào bảng liên wiki.
Có thể nó đã tồn tại trong bảng liên wiki rồi.',
	'interwiki_edittext' => 'Sửa đổi tiền tố liên wiki',
	'interwiki_editintro' => 'Bạn đang sửa đổi một tiền tố liên wiki. Hãy nhớ rằng việc làm này có thể phá hỏng các liên hết đã có.',
	'interwiki_edited' => 'Tiền tố “$1” đã thay đổi xong trong bảng liên wiki.',
	'interwiki_editerror' => 'Tiền tố “$1” không thể thay đổi trong bảng liên wiki. Có thể nó không tồn tại.',
	'interwiki_logpagename' => 'Nhật trình bảng liên wiki',
	'interwiki_log_added' => 'đã thêm tiền tố “$2” ($3) (ngoài: $4) (trong:$5) vào bảng liên wiki',
	'interwiki_log_edited' => 'đã thay đổi tiền tố “$2” : ($3) (ngoài: $4) (trong: $5) trong bảng liên wiki',
	'interwiki_log_deleted' => 'đã xóa tiền tố “$2” khỏi bảng liên wiki',
	'interwiki_logpagetext' => 'Đây là nhật trình các thay đổi trong [[Special:Interwiki|bảng liên wiki]].',
	'interwiki_defaultreason' => 'không đưa ra lý do',
);

/** Volapük (Volapük)
 * @author Malafaya
 */
$messages['vo'] = array(
	'interwiki_reasonfield' => 'Kod',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Alexsh
 */
$messages['zh-hant'] = array(
	'interwiki' => '跨語言連結表',
	'interwiki-desc' => '新增[[Special:Interwiki|特殊頁面]]以檢視或編輯跨語言連結表',
	'interwiki_prefix' => '連結字串',
	'interwiki_reasonfield' => '原因',
	'interwiki_intro' => '請參閱$1以取得更多有關跨語言連結表的訊息。

這裡有跨語言連結表的[[Special:Log/interwiki|更動日誌]]。',
	'interwiki_error' => '錯誤：跨語言連結表為空，或是發生其他錯誤。',
	'interwiki_delquestion' => '正在刪除"$1"',
	'interwiki_deleting' => '您正在刪除連結字串"$1"',
	'interwiki_deleted' => '已成功從連結表中刪除連結字串"$1"',
	'interwiki_delfailed' => '無法從連結表刪除連結字串"$1"',
	'interwiki_addtext' => '新增跨語連結字串',
);

