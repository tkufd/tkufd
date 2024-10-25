<?php

namespace Tkufd\Output;

use Tkufd\Output\Page;

class MainPage extends Page {
	public function displayBodyPageTitle() {
		return false;
	}

	public function getBodyPageContent() {
		return '<p>歡迎來到TKUFD銀行線上金融統計資料庫！</p>' .
			'<h2>參閱</h2>' .
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
			'</ul>';
	}
}
