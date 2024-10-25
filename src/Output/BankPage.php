<?php

namespace Tkufd\Output;

use Tkufd\Output\Page;

class BankPage extends Page {
	public function getHeadTitleText() {
		return '銀行名稱 | TKUFD銀行線上金融統計資料庫';
	}

	public function getBodyPageTitle() {
		return '銀行名稱';
	}

	public function getBodyPageContent() {
		$content = '';

		$db_connection = mysqli_connect(
			'localhost',
			'113dbb04',
			'1763-1176',
			'113dbb04'
		);

		if ( mysqli_connect_errno() ) {
			$content = '<div class="cdx-message cdx-message--block cdx-message--error" role="alert">' .
				'<span class="cdx-message__icon">' .
				'</span>' .
				'<div class="cdx-message__content">' .
				'<p><strong>MySQL/MariaDB連線失敗。</strong></p>' .
				'<p>請稍後再試。</p>' .
				'</div>' .
				'</div>' .
				'<p>錯誤訊息：</p>' .
				mysqli_connect_error() .
				$content;

			return $content;
		}

		mysqli_query( $db_connection, 'SET NAMES utf8' );
		mysqli_query( $db_connection, 'SET CHARACTER_SET_CLIENT = utf8' );
		mysqli_query( $db_connection, 'SET CHARACTER_SET_RESULTS = utf8' );
		$sql = <<<SQL
SELECT bank_code, bank_label_id, lt_label_id, lt_lang_id, lt_text
FROM bank INNER JOIN lang_text
ON bank_label_id = lt_label_id
WHERE lt_lang_id = 672
SQL;
		$sql .= ' AND bank_code = \'' .
			str_replace( '\'', '\\\'', trim( $_GET['bank'] ) ) .
			'\';';
		$result_rows = mysqli_query( $db_connection, $sql );
		$result_row = mysqli_fetch_row( $result_rows );

		if ( $result_row === NULL ) {
			$content .= '<div class="cdx-message cdx-message--block cdx-message--warning">' .
				'<span class="cdx-message__icon">' .
				'</span>' .
				'<div class="cdx-message__content">' .
				'<p><strong>查無資料。</strong></p>' .
				'<p>請嘗試其他搜尋條件。</p>' .
				'</div>' .
				'</div>';
		} else {
			$content .= '<div class="cdx-card-group">';

			while ( $result_row !== NULL ) {
				$content .= '<a href="?bank=' .
					$result_row[0] .
					'" class="cdx-card cdx-card--is-link">' .
					'<span class="cdx-thumbnail cdx-card__thumbnail">' .
					'<span style="' .
					'background-image: ' .
					'url(&quot;' .
					'resources/assets/Bank_' . $result_row[1] . '.jpg' .
					'&quot;);' .
					'" class="cdx-thumbnail__image">' .
					'</span>' .
					'</span>' .
					'<span class="cdx-card__text">' .
					'<span class="cdx-card__text__title">' .
					htmlspecialchars( $result_row[4] ) .
					'</span>' .
					'<span class="cdx-card__text__description">' .
					'<!-- Description -->' .
					'</span>' .
					'<span class="cdx-card__text__supporting-text">' .
					'銀行代碼：' . htmlspecialchars( $result_row[0] ) .
					'</span>' .
					'</span>' .
					'</a>';

				$result_row = mysqli_fetch_row( $result_rows );
			}

			$content .= '</div>';
		}

		return $content;
	}
}
