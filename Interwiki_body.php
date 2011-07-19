<?php
/**
 * Implements Special:Interwiki
 * @ingroup SpecialPage
 */
class SpecialInterwiki extends SpecialPage {

	/**
	 * Constructor - sets up the new special page
	 */
	public function __construct() {
		parent::__construct( 'Interwiki' );
	}

	/**
	 * Different description will be shown on Special:SpecialPage depending on
	 * whether the user can modify the data.
	 */
	function getDescription() {
		return wfMsg( $this->canModify() ?
			'interwiki' : 'interwiki-title-norights' );
	}

	/**
	 * Show the special page
	 *
	 * @param $par Mixed: parameter passed to the page or null
	 */
	public function execute( $par ) {
		global $wgRequest, $wgOut, $wgUser;

		$this->setHeaders();
		$this->outputHeader();

		$wgOut->addModules( 'SpecialInterwiki' );

		$action = $par ? $par : $wgRequest->getVal( 'action', $par );
		$return = $this->getTitle();

		switch( $action ) {
		case 'delete':
		case 'edit':
		case 'add':
			if( $this->canModify( $wgOut ) ) {
				$this->showForm( $action );
			}
			$wgOut->returnToMain( false, $return );
			break;
		case 'submit':
			if( !$this->canModify( $wgOut ) ) {
				# Error msg added by canModify()
			} elseif( !$wgRequest->wasPosted() || !$wgUser->matchEditToken( $wgRequest->getVal( 'wpEditToken' ) ) ) {
				// Prevent cross-site request forgeries
				$wgOut->addWikiMsg( 'sessionfailure' );
			} else {
				$this->doSubmit();
			}
			$wgOut->returnToMain( false, $return );
			break;
		default:
			$this->showList();
			break;
		}
	}

	/**
	 * Returns boolean whether the user can modify the data.
	 * @param $out If $wgOut object given, it adds the respective error message.
	 * @return Boolean
	 */
	public function canModify( $out = false ) {
		global $wgUser, $wgInterwikiCache;
		if( !$wgUser->isAllowed( 'interwiki' ) ) {
			# Check permissions
			if( $out ) { $out->permissionRequired( 'interwiki' ); }
			return false;
		} elseif( $wgInterwikiCache ) {
			# Editing the interwiki cache is not supported
			if( $out ) { $out->addWikiMsg( 'interwiki-cached' ); }
			return false;
		} elseif( wfReadOnly() ) {
			# Is the database in read-only mode?
			if( $out ) { $out->readOnlyPage(); }
			return false;
		}
		return true;
	}

	function showForm( $action ) {
		global $wgRequest, $wgUser, $wgOut;

		$actionUrl = $this->getTitle()->getLocalURL( 'action=submit' );
		$token = $wgUser->editToken();

		switch( $action ) {
		case 'delete':

			$prefix = $wgRequest->getVal( 'prefix' );
			$button = wfMsg( 'delete' );
			$topmessage = wfMsg( 'interwiki_delquestion', $prefix );
			$deletingmessage = wfMsgExt( 'interwiki_deleting', array( 'parseinline' ), $prefix );
			$reasonmessage = wfMsg( 'deletecomment' );

			$wgOut->addHTML(
				Xml::openElement( 'fieldset' ) .
				Xml::element( 'legend', null, $topmessage ) .
				Xml::openElement( 'form', array( 'id' => 'mw-interwiki-deleteform', 'method' => 'post', 'action' => $actionUrl ) ) .
				Xml::openElement( 'table' ) .
				"<tr><td colspan='2'>$deletingmessage</td></tr>".
				'<tr><td class="mw-label">' . Xml::label( $reasonmessage, 'mw-interwiki-deletereason' ) . '</td>' .
				'<td class="mw-input">' .
				Xml::input( 'wpInterwikiReason', 60, '', array( 'tabindex' => '1', 'id' => 'mw-interwiki-deletereason', 'maxlength' => '200' ) ) .
				'</td></tr>' .
				'<tr><td></td><td class="mw-submit">' . Xml::submitButton( $button, array( 'id' => 'mw-interwiki-submit' ) ) .
				Html::hidden( 'wpInterwikiPrefix', $prefix ) .
				Html::hidden( 'wpInterwikiAction', $action ) .
				Html::hidden( 'wpEditToken', $token ) .
				'</td></tr>' .
				Xml::closeElement( 'table' ) .
				Xml::closeElement( 'form' ) .
				Xml::closeElement( 'fieldset' )
			);
			break;
		case 'edit':
		case 'add':
			if( $action == 'edit' ){
				$prefix = $wgRequest->getVal( 'prefix' );
				$dbr = wfGetDB( DB_SLAVE );
				$row = $dbr->selectRow( 'interwiki', '*', array( 'iw_prefix' => $prefix ), __METHOD__ );
				if( !$row ) {
					$this->error( 'interwiki_editerror', $prefix );
					return;
				}
				$prefix = '<tt>' . htmlspecialchars( $row->iw_prefix ) . '</tt>';
				$defaulturl = $row->iw_url;
				$trans = $row->iw_trans;
				$local = $row->iw_local;
				$old = Html::hidden( 'wpInterwikiPrefix', $row->iw_prefix );
				$topmessage = wfMsgExt( 'interwiki_edittext', array( 'parseinline' ) );
				$intromessage = wfMsgExt( 'interwiki_editintro', array( 'parseinline' ) );
				$button = wfMsg( 'edit' );
			} else {
				$prefix = $wgRequest->getVal( 'wpInterwikiPrefix' ) ? $wgRequest->getVal( 'wpInterwikiPrefix' ) : $wgRequest->getVal( 'prefix' );
				$prefix = Xml::input( 'wpInterwikiPrefix', 20, $prefix, array( 'tabindex' => '1', 'id' => 'mw-interwiki-prefix', 'maxlength' => '20' ) );
				$local = $wgRequest->getCheck( 'wpInterwikiLocal' );
				$trans = $wgRequest->getCheck( 'wpInterwikiTrans' );
				$old = '';
				$defaulturl = $wgRequest->getVal( 'wpInterwikiURL' ) ? $wgRequest->getVal( 'wpInterwikiURL' ) : wfMsg( 'interwiki-defaulturl' );
				$topmessage = wfMsgExt( 'interwiki_addtext', array( 'parseinline' ) );
				$intromessage = wfMsgExt( 'interwiki_addintro', array( 'parseinline' ) );
				$button = wfMsg( 'interwiki_addbutton' );
			}

			$prefixmessage = wfMsgHtml( 'interwiki-prefix-label' );
			$localmessage = wfMsg( 'interwiki-local-label' );
			$transmessage = wfMsg( 'interwiki-trans-label' );
			$reasonmessage = wfMsg( 'interwiki_reasonfield' );
			$urlmessage = wfMsg( 'interwiki-url-label' );

			$wgOut->addHTML(
				Xml::fieldset( $topmessage ) .
				$intromessage .
				Xml::openElement( 'form', array( 'id' => 'mw-interwiki-editform', 'method' => 'post', 'action' => $actionUrl ) ) .
				Xml::openElement( 'table', array( 'id' => "mw-interwiki-$action" ) ) .
				"<tr><td class='mw-label'>$prefixmessage</td><td><tt>$prefix</tt></td></tr>" .
				'<tr><td class="mw-label">' . Xml::label( $localmessage, 'mw-interwiki-local' ) . '</td>' .
				'<td class="mw-input">' . Xml::check( 'wpInterwikiLocal', $local, array( 'id' => 'mw-interwiki-local' ) ) . '</td></tr>' .
				'<tr><td class="mw-label">' . Xml::label( $transmessage, 'mw-interwiki-trans' ) . '</td>' .
				'<td class="mw-input">' .  Xml::check( 'wpInterwikiTrans', $trans, array( 'id' => 'mw-interwiki-trans' ) ) . '</td></tr>' .
				'<tr><td class="mw-label">' . Xml::label( $urlmessage, 'mw-interwiki-url' ) . '</td>' .
				'<td class="mw-input">' . Xml::input( 'wpInterwikiURL', 60, $defaulturl, array( 'tabindex' => '1', 'maxlength' => '200', 'id' => 'mw-interwiki-url' ) ) . '</td></tr>' .
				'<tr><td class="mw-label">' . Xml::label( $reasonmessage, 'mw-interwiki-editreason' ) . '</td>' .
				'<td class="mw-input">' . Xml::input( 'wpInterwikiReason', 60, '', array( 'tabindex' => '1', 'id' => 'mw-interwiki-editreason', 'maxlength' => '200' ) ) .
				Html::hidden( 'wpInterwikiAction', $action ) .
				$old .
				Html::hidden( 'wpEditToken', $token ) .
				'</td></tr>' .
				'<tr><td></td><td class="mw-submit">' . Xml::submitButton( $button, array( 'id' => 'mw-interwiki-submit' ) ) . '</td></tr>' .
				Xml::closeElement( 'table' ) .
				Xml::closeElement( 'form' ) .
				Xml::closeElement( 'fieldset' )
			);
			break;
		}
	}

	function doSubmit() {
		global $wgRequest, $wgOut;
		$prefix = $wgRequest->getVal( 'wpInterwikiPrefix' );
		$do = $wgRequest->getVal( 'wpInterwikiAction' );
		// show an error if the prefix is invalid (only when adding one)
		if( preg_match( '/[\s:&=]/', $prefix ) && $do == 'add' ) {
			$this->error( 'interwiki-badprefix', htmlspecialchars( $prefix ) );
			$this->showForm( $do );
			return;
		}
		$reason = $wgRequest->getText( 'wpInterwikiReason' );
		$selfTitle = $this->getTitle();
		$dbw = wfGetDB( DB_MASTER );
		switch( $do ){
		case 'delete':
			$dbw->delete( 'interwiki', array( 'iw_prefix' => $prefix ), __METHOD__ );

			if ( $dbw->affectedRows() == 0 ) {
				$this->error( 'interwiki_delfailed', $prefix );
				$this->showForm( $do );
			} else {
				$wgOut->addWikiMsg( 'interwiki_deleted', $prefix );
				$log = new LogPage( 'interwiki' );
				$log->addEntry( 'iw_delete', $selfTitle, $reason, array( $prefix ) );
			}
			break;
		case 'edit':
		case 'add':
			$theurl = $wgRequest->getVal( 'wpInterwikiURL' );
			$local = $wgRequest->getCheck( 'wpInterwikiLocal' ) ? 1 : 0;
			$trans = $wgRequest->getCheck( 'wpInterwikiTrans' ) ? 1 : 0;
			$data = array(
				'iw_prefix' => $prefix,
				'iw_url' => $theurl,
				'iw_local' => $local,
				'iw_trans' => $trans
			);
			
			if( $prefix == '' || $theurl == '' ) {
				$this->error( 'interwiki-submit-empty' );
				$this->showForm( $do );
				return;
			}

			if( $do == 'add' ){
				$dbw->insert( 'interwiki', $data, __METHOD__, 'IGNORE' );
			} else {
				$dbw->update( 'interwiki', $data, array( 'iw_prefix' => $prefix ), __METHOD__, 'IGNORE' );
			}

			if( $dbw->affectedRows() == 0 ) {
				$this->error( "interwiki_{$do}failed", $prefix );
				$this->showForm( $do );
			} else {
				$wgOut->addWikiMsg( "interwiki_{$do}ed", $prefix );
				$log = new LogPage( 'interwiki' );
				$log->addEntry( 'iw_' . $do, $selfTitle, $reason, array( $prefix, $theurl, $trans, $local ) );
			}
			break;
		}	
	}

	function showList() {
		global $wgOut;

		$canModify = $this->canModify();

		$wgOut->addWikiMsg( 'interwiki_intro' );
		$wgOut->addHTML(
			Html::rawElement( 'table', array( 'class' => 'mw-interwikitable wikitable intro' ),
				self::addInfoRow( 'start', 'interwiki_prefix', 'interwiki_prefix_intro' ) .
				self::addInfoRow( 'start', 'interwiki_url', 'interwiki_url_intro' ) .
				self::addInfoRow( 'start', 'interwiki_local', 'interwiki_local_intro' ) .
				self::addInfoRow( 'end', 'interwiki_0', 'interwiki_local_0_intro' ) .
				self::addInfoRow( 'end', 'interwiki_1', 'interwiki_local_1_intro' ) .
				self::addInfoRow( 'start', 'interwiki_trans', 'interwiki_trans_intro' ) .
				self::addInfoRow( 'end', 'interwiki_0', 'interwiki_local_0_intro' ) .
				self::addInfoRow( 'end', 'interwiki_1', 'interwiki_local_1_intro' )
			) . "\n"
		);
		$wgOut->addWikiMsg( 'interwiki_intro_footer' );

		if ( $canModify ) {
			$addtext = wfMsgHtml( 'interwiki_addtext' );
			$addlink = Linker::linkKnown( $this->getTitle( 'add' ), $addtext );
			$wgOut->addHTML( '<p class="mw-interwiki-addlink">' . $addlink . '</p>' );
		}

		if( !method_exists( 'Interwiki', 'getAllPrefixes' ) ) {
			# version 2.0 is not backwards compatible (but still display nice error)
			$this->error( 'interwiki_error' );
			return;
		}
		$iwPrefixes = Interwiki::getAllPrefixes( null );

		if ( !is_array( $iwPrefixes ) || count( $iwPrefixes ) == 0 ) {
			# If the interwiki table is empty, display an error message
			$this->error( 'interwiki_error' );
			return;
		}

		$out = '';

		# Output the table header
		$out .=	Html::openElement( 'table', array( 'class' => 'mw-interwikitable wikitable sortable body' ) ) . "\n";
		$out .= Html::openElement( 'tr', array( 'id' => 'interwikitable-header' ) ) .
			Html::element( 'th', null, wfMsgHtml( 'interwiki_prefix' ) ) .
			Html::element( 'th', null, wfMsgHtml( 'interwiki_url' ) ) .
			Html::element( 'th', null, wfMsgHtml( 'interwiki_local' ) ) .
			Html::element( 'th', null, wfMsgHtml( 'interwiki_trans' ) ) .
			( $canModify ? Html::element( 'th', array( 'class' => 'unsortable' ), wfMsgHtml( 'interwiki_edit' ) ) :	'' );
		$out .= Html::closeElement( 'tr' ) . "\n";

		$selfTitle = $this->getTitle();

		foreach( $iwPrefixes as $i => $iwPrefix ) {
			$out .= Html::openElement( 'tr', array( 'class' => 'mw-interwikitable-row' ) );
			$out .=	Html::element( 'td', array( 'class' => 'mw-interwikitable-prefix' ),
				htmlspecialchars( $iwPrefix['iw_prefix'] ) );
			$out .= Html::element( 'td', array( 'class' => 'mw-interwikitable-url' ), $iwPrefix['iw_url'] );
			$out .= Html::element( 'td', array( 'class' => 'mw-interwikitable-local' ),
				( isset( $iwPrefix['iw_local'] ) ? wfMsgHtml( 'interwiki_' . $iwPrefix['iw_local'] ) : '-' ) );
			$out .= Html::element( 'td', array( 'class' => 'mw-interwikitable-trans' ),
				( isset( $iwPrefix['iw_trans'] ) ? wfMsgHtml( 'interwiki_' . $iwPrefix['iw_trans'] ) : '-' ) );
			if( $canModify ) {
				$out .= Html::rawElement( 'td', array( 'class' => 'mw-interwikitable-modify' ),
					Linker::linkKnown( $selfTitle, wfMsgHtml( 'edit' ), array(),
						array( 'action' => 'edit', 'prefix' => $iwPrefix['iw_prefix'] ) ) .
					wfMsg( 'comma-separator' ) .
					Linker::linkKnown( $selfTitle, wfMsgHtml( 'delete' ), array(),
						array( 'action' => 'delete', 'prefix' => $iwPrefix['iw_prefix'] ) )
				);
			}
			$out .= Html::closeElement( 'tr' ) . "\n";
		}
		$out .= Html::closeElement( 'table' );

		$wgOut->addHTML( $out );
	}

	static function addInfoRow( $align = 'start', $title, $text ) {
		return Html::rawElement( 'tr', null,
			Html::rawElement( 'th', array( 'class' => 'mw-align-' . $align ), wfMsg( $title ) ) .
			Html::rawElement( 'td', null, wfMsgExt( $text, 'parseinline' ) )
		);
	}

	function error() {
		global $wgOut;
		$args = func_get_args();
		$wgOut->wrapWikiMsg( "<p class='error'>$1</p>", $args );
	}

}
