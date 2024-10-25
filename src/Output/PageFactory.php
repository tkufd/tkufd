<?php

namespace Tkufd\Output;

use Tkufd\Output\BankListPage;
use Tkufd\Output\BankPage;
use Tkufd\Output\BankSearchPage;
use Tkufd\Output\ErrorPage;
use Tkufd\Output\MainPage;
// use TKUFD\Title\Title;

class PageFactory {
	public static function getPage(
		$page_type
		// Title $title
	// ): Page {
	) {
		// if ( $title->isMainPage() ) {
		if ( $page_type === 'bank_list' ) {
			return new BankListPage();
		} elseif ( $page_type === 'bank' ) {
			return new BankPage();
		} elseif ( $page_type === 'bank_search' ) {
			return new BankSearchPage();
		} elseif ( $page_type === 'main_page' ) {
			return new MainPage();
		}

		header( $_SERVER['SERVER_PROTOCOL'] . " 404 Not Found" );
		return new ErrorPage();
	}
}
