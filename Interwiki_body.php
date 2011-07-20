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
		return wfMessage( $this->canModify() ?
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
				$wgOut->addHTML( $this->showForm( $action ) );
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
			if( $out ) { throw new PermissionsError( 'interwiki' ); }
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
		global $wgRequest, $wgUser;

		$prefix = $wgRequest->getVal( 'prefix' );
		$wpPrefix = '';
		$label = array( 'class' => 'mw-label' );
		$input = array( 'class' => 'mw-input' );

		if( $action == 'delete' ) {
			$topmessage = wfMessage( 'interwiki_delquestion', $prefix )->parse();
			$intromessage = wfMessage( 'interwiki_deleting', $prefix )->parse();
			$wpPrefix = Html::hidden( 'wpInterwikiPrefix', $prefix );
			$button = 'delete';
			$formContent = '';
		} elseif( $action == 'edit' ) {
			$dbr = wfGetDB( DB_SLAVE );
			$row = $dbr->selectRow( 'interwiki', '*', array( 'iw_prefix' => $prefix ), __METHOD__ );
			if( !$row ) {
				$this->error( 'interwiki_editerror', $prefix );
				return;
			}
			$prefix = $row->iw_prefix;
			$defaulturl = $row->iw_url;
			$trans = $row->iw_trans;
			$local = $row->iw_local;
			$wpPrefix = Html::hidden( 'wpInterwikiPrefix', $row->iw_prefix );
			$topmessage = wfMessage( 'interwiki_edittext' )->parse();
			$intromessage = wfMessage( 'interwiki_editintro' )->parse();
			$button = 'edit';
		} elseif( $action == 'add' ) {
			$prefix = $wgRequest->getVal( 'wpInterwikiPrefix' ) ?
				$wgRequest->getVal( 'wpInterwikiPrefix' ) : $wgRequest->getVal( 'prefix' );
			$prefix = Xml::input( 'wpInterwikiPrefix', 20, $prefix,
				array( 'tabindex' => 1, 'id' => 'mw-interwiki-prefix', 'maxlength' => 20 ) );
			$local = $wgRequest->getCheck( 'wpInterwikiLocal' );
			$trans = $wgRequest->getCheck( 'wpInterwikiTrans' );
			$defaulturl = $wgRequest->getVal( 'wpInterwikiURL' ) ?
				$wgRequest->getVal( 'wpInterwikiURL' ) : wfMessage( 'interwiki-defaulturl' );
			$topmessage = wfMessage( 'interwiki_addtext' )->parse();
			$intromessage = wfMessage( 'interwiki_addintro' )->parse();
			$button = 'interwiki_addbutton';
		}

		if( $action == 'add' || $action == 'edit' ) {
			$formContent = Html::rawElement( 'tr', null,
				Html::element( 'td', $label, wfMessage( 'interwiki-prefix-label' ) ) .
				Html::rawElement( 'td', null, '<tt>' . $prefix . '</tt>' )
			) . Html::rawElement( 'tr', null,
				Html::rawElement( 'td', $label, Xml::label( wfMessage( 'interwiki-local-label' ), 'mw-interwiki-local' ) ) .
				Html::rawElement( 'td', $input, Xml::check( 'wpInterwikiLocal', $local, array( 'id' => 'mw-interwiki-local' ) ) )
			) . Html::rawElement( 'tr', null,
				Html::rawElement( 'td', $label, Xml::label( wfMessage( 'interwiki-trans-label' ), 'mw-interwiki-trans' ) ) .
				Html::rawElement( 'td', $input,  Xml::check( 'wpInterwikiTrans', $trans, array( 'id' => 'mw-interwiki-trans' ) ) )
			) . Html::rawElement( 'tr', null,
				Html::rawElement( 'td', $label, Xml::label( wfMessage( 'interwiki-url-label' ), 'mw-interwiki-url' ) ) .
				Html::rawElement( 'td', $input, Xml::input( 'wpInterwikiURL', 60, $defaulturl,
					array( 'tabindex' => 1, 'maxlength' => 200, 'id' => 'mw-interwiki-url' ) ) )
			);
		}

		return Xml::fieldset( $topmessage, Html::rawElement( 'form',
			array( 'id' => "mw-interwiki-{$action}form", 'method' => 'post',
				'action' => $this->getTitle()->getLocalURL( 'action=submit' ) ),
			Html::element( 'p', null, $intromessage ) .
			Html::rawElement( 'table', array( 'id' => "mw-interwiki-{$action}" ),
				$formContent . Html::rawElement( 'tr', null,
					Html::rawElement( 'td', $label, Xml::label( wfMessage( 'interwiki_reasonfield' ),
						"mw-interwiki-{$action}reason" ) ) .
					Html::rawElement( 'td', $input, Xml::input( 'wpInterwikiReason', 60, '',
						array( 'tabindex' => 1, 'id' => "mw-interwiki-{$action}reason", 'maxlength' => 200 ) ) )
				) .	Html::rawElement( 'tr', null,
					Html::rawElement( 'td', null, '' ) .
					Html::rawElement( 'td', array( 'class' => 'mw-submit' ),
						Xml::submitButton( wfMessage( $button )->text(), array( 'id' => 'mw-interwiki-submit' ) ) )
				) . $wpPrefix .
				Html::hidden( 'wpEditToken', $wgUser->editToken() ) .
				Html::hidden( 'wpInterwikiAction', $action )
			)
		) );
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
			$addtext = wfMessage( 'interwiki_addtext' )->escaped();
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
			Html::element( 'th', null, wfMessage( 'interwiki_prefix' ) ) .
			Html::element( 'th', null, wfMessage( 'interwiki_url' ) ) .
			Html::element( 'th', null, wfMessage( 'interwiki_local' ) ) .
			Html::element( 'th', null, wfMessage( 'interwiki_trans' ) ) .
			( $canModify ? Html::element( 'th', array( 'class' => 'unsortable' ), wfMessage( 'interwiki_edit' ) ) : '' );
		$out .= Html::closeElement( 'tr' ) . "\n";

		$selfTitle = $this->getTitle();

		foreach( $iwPrefixes as $i => $iwPrefix ) {
			$out .= Html::openElement( 'tr', array( 'class' => 'mw-interwikitable-row' ) );
			$out .=	Html::element( 'td', array( 'class' => 'mw-interwikitable-prefix' ),
				htmlspecialchars( $iwPrefix['iw_prefix'] ) );
			$out .= Html::element( 'td', array( 'class' => 'mw-interwikitable-url' ), $iwPrefix['iw_url'] );
			$out .= Html::element( 'td', array( 'class' => 'mw-interwikitable-local' ),
				( isset( $iwPrefix['iw_local'] ) ? wfMessage( 'interwiki_' . $iwPrefix['iw_local'] ) : '-' ) );
			$out .= Html::element( 'td', array( 'class' => 'mw-interwikitable-trans' ),
				( isset( $iwPrefix['iw_trans'] ) ? wfMessage( 'interwiki_' . $iwPrefix['iw_trans'] ) : '-' ) );
			if( $canModify ) {
				$out .= Html::rawElement( 'td', array( 'class' => 'mw-interwikitable-modify' ),
					Linker::linkKnown( $selfTitle, wfMessage( 'edit' )->escaped(), array(),
						array( 'action' => 'edit', 'prefix' => $iwPrefix['iw_prefix'] ) ) .
					wfMessage( 'comma-separator' ) .
					Linker::linkKnown( $selfTitle, wfMessage( 'delete' )->escaped(), array(),
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
			Html::rawElement( 'th', array( 'class' => 'mw-align-' . $align ), wfMessage( $title )->escaped() ) .
			Html::rawElement( 'td', null, wfMessage( $text )->parse() )
		);
	}

	function error() {
		global $wgOut;
		$args = func_get_args();
		$wgOut->wrapWikiMsg( "<p class='error'>$1</p>", $args );
	}

}
