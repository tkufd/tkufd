<?php

namespace Tkufd\Web;

// use Tkufd\Output\Page as OutputPage;
use Tkufd\Output\PageFactory as OutputPageFactory;
use Tkufd\Output\Scripts as OutputScripts;
use Tkufd\Output\Styles as OutputStyles;
// use Tkufd\Title\Title;
// use Tkufd\Web\Context as WebContext;
// use Tkufd\Web\Request as WebRequest;

class Start {
	// private WebRequest $web_request;
	private $web_request;

	// private Title $title;
	private $title;

	// private OutputPage $output_page;
	private $output_page;

	public function __construct() {
		$page_type = 'error_page';

		if ( isset( $_GET['list'] ) ) {
			if ( $_GET['list'] === 'banks' ) {
				$page_type = 'bank_list';
			}
		} elseif ( isset( $_GET['bank'] ) ) {
			$page_type = 'bank';
		} elseif ( isset( $_GET['search'] ) ) {
			if ( $_GET['search'] === 'banks' ) {
				$page_type = 'bank_search';
			}
		} else {
			$page_type = 'main_page';
		}

		// $this->title = new Title();
		$this->output_page = OutputPageFactory::getPage( $page_type );
	}

	// public function checkEnv(): void {
	public function checkEnv() {
	}

	// public function outputPage(): void {
	public function outputPage() {
		echo( $this->output_page->getHTML() );
	}

	// public function outputPage(): void {
	public function outputResources() {
		$content = '';

		if ( isset( $_GET['type'] ) ) {
			$content_type = $_GET['type'];

			if ( $content_type === 'styles' ) {
				header( 'Content-Type: text/css; charset=utf-8' );
				$content = OutputStyles::getStyles();
			} elseif ( $content_type === 'scripts' ) {
				header( 'Content-Type: text/javascript; charset=utf-8' );
				$content = OutputScripts::getScripts();
			}
		}

		header( 'X-Content-Type-Options: nosniff' );
		header( 'Content-Length: ' . strlen( $content ) );
		header( 'Cache-Control: public, max-age=300, s-maxage=300, stale-while-revalidate=60' );
		echo( $content );
	}

	// public function execute( ?string $entry_point ): void {
	public function execute( $entry_point ) {
		$this->checkEnv();

		if ( $entry_point === 'index' ) {
			$this->outputPage();
		} elseif ( $entry_point === 'load' ) {
			$this->outputResources();
		}
	}
}
