<?php

namespace Tkufd\Output;

use Tkufd\Output\Page;

class ErrorPage extends Page {
	public function getHeadTitleText() {
		return '無效網址 | TKUFD銀行線上金融統計資料庫';
	}

	public function getBodyPageTitle() {
		return '無效網址';
	}

	public function getBodyPageContent() {
		return '<div class="cdx-message cdx-message--block cdx-message--error" role="alert">' .
			'<span class="cdx-message__icon">' .
			'</span>' .
			'<div class="cdx-message__content">' .
			'<p>您輸入的網址不是有效網址。</p>' .
			'<p><a href=".">返回首頁</a></p>' .
			'</div>' .
			'</div>';
	}
}
