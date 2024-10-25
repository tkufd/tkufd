<?php

namespace Tkufd\Output;

use Tkufd\Title\Title;

class Page {
	// private Title $title;

	public function __construct(
		// Title $title
	) {
		// $this->title = $title;
	}

	public function getHeadTitleText() {
		return 'TKUFD銀行線上金融統計資料庫';
	}

	// public function getHeadTitle(): string {
	public function getHeadTitle() {
		// if ( $this->title->isMainPage() ) {
			// return '<title>TKUFD</title>';
		// }

		// return '<title>' . $this->title->getTitlePlain() . 'TKUFD</title>';
		return '<title>' .
			$this->getHeadTitleText() .
			'</title>';
	}

	// public function getHeadMetaTags(): string {
	public function getHeadMetaTags() {
		return '<meta charset="UTF-8" />' .
			'<meta name="viewport" content="' .
			'width=device-width, ' .
			'initial-scale=1.0, ' .
			'user-scalable=yes, ' .
			'minimum-scale=0.25, ' .
			'maximum-scale=5.0' .
			'">' .
			'<meta name="generator" content="TKUFD 0.1">' .
			'<meta name="format-detection" content="telephone=no">' .
			'<meta property="og:type" content="website">' .
			'<meta property="og:title" content="' .
			$this->getHeadTitleText() .
			'">';
	}

	// public function getHeadLinkTags(): string {
	public function getHeadLinkTags() {
		return '<link rel="canonical">';
	}

	// public function getHeadStylesheets(): string {
	public function getHeadStylesheets() {
		return '<link rel="stylesheet" href="load.php?type=styles" />';
	}

	// public function getHeadScripts(): string {
	public function getHeadScripts() {
		return '<script src="load.php?type=scripts" async></script>';
	}

	// public function getHead(): string {
	public function getHead() {
		return '<head>' .
			$this->getHeadTitle() .
			$this->getHeadMetaTags() .
			$this->getHeadStylesheets() .
			$this->getHeadScripts() .
			'</head>';
	}

	public function getBodyJumpLinks() {
		return '<a class="site-jump-link" href="#content">跳至內容</a>';
		return '<a class="site-jump-link" href="#nav">跳至導覽列</a>';
	}

	// public function getBodyHeader(): string {
	public function getBodyHeader() {
		return '<header class="site-header">' .
			'<div class="site-name">' .
			'<a class="site-name-link" href=".">' .
			'<span class="site-name-text">' .
			'TKUFD銀行線上金融統計資料庫' .
			'</span>' .
			'</a>' .
			'</div>' .
			'</header>';
	}

	// public function getBodyNav(): string {
	public function getBodyNav() {
		return '<nav id="nav" class="site-nav">' .
			'<ul>' .
			'<li>' .
			'<span class="site-nav-heading">導覽</span>' .
			'<ul>' .
			'<li>' .
			'<a href=".">首頁</a>' .
			'</li>' .
			'</ul>' .
			'<li>' .
			'<span class="site-nav-heading">銀行</span>' .
			'<ul>' .
			'<li>' .
			'<a href="?list=banks">銀行清單</a>' .
			'</li>' .
			'<li>' .
			'<a href="?search=banks">搜尋銀行</a>' .
			'</li>' .
			'</ul>' .
			'</li>' .
			'<li>' .
			'<span class="site-nav-heading">工具</span>' .
			'<ul>' .
			'<li>' .
			'<a href="https://github.com/tkufd/tkufd">GitHub原始碼庫</a>' .
			'</li>' .
			'<li>' .
			'<a href="http://163.13.175.8/php-pwiki/">資料庫概論 - Pwiki</a>' .
			'</li>' .
			'<li>' .
			'<a href="http://163.13.175.8/phpMyAdmin/">phpMyAdmin</a>' .
			'</li>' .
			'<li>' .
			'<a href="phpinfo.php">伺服器資訊</a>' .
			'</li>' .
			'</ul>' .
			'</li>' .
			'</ul>' .
			'</nav>';
	}

	public function displayBodyPageTitle() {
		return true;
	}

	public function getBodyPageTitle() {
		return 'TKUFD銀行線上金融統計資料庫';
	}

	public function getBodyPageContent() {
		return '';
	}

	// public function getBodyMain(): string {
	public function getBodyMain() {
		$content = '<main id="#content" class="site-main">';

		if ( $this->displayBodyPageTitle() === false ) {
			$content .= '<h1 class="page-title hidden">';
		} else {
			$content .= '<h1 class="page-title">';
		}

		$content .= $this->getBodyPageTitle();
		$content .= '</h1>';
		$content .= '<div class="page-content">';
		$content .= $this->getBodyPageContent();
		$content .= '</div>';
		$content .= '</main>';
		return $content;
	}

	// public function getBodyFooter(): string {
	public function getBodyFooter() {
		return '<footer class="site-footer">' .
			'</footer>';
	}

	public function getBodyContainer() {
		return '<div class="site-body-container">' .
			$this->getBodyHeader() .
			$this->getBodyNav() .
			$this->getBodyMain() .
			$this->getBodyFooter() .
			'</div>';
	}

	// public function getBody(): string {
	public function getBody() {
		return $this->getBodyJumpLinks() .
			$this->getBodyContainer();
	}

	// public function getHtml(): string {
	public function getHtml() {
		header( 'Content-Type: text/html; charset=utf-8' );
		header( 'X-Content-Type-Options: nosniff' );
		$content = '<!DOCTYPE html>' .
			'<html lang="zh-Hant-TW" dir="ltr">' .
			$this->getHead() .
			$this->getBody() .
			'</html>';
		header( 'Content-Length: ' . strlen( $content ) );
		header( 'Cache-Control: private, must-revalidate, max-age=0' );
		echo( $content );
	}
}
