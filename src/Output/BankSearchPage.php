<?php

namespace Tkufd\Output;

use Tkufd\Output\Page;

class BankSearchPage extends Page {
	public function getHeadTitleText() {
		return '搜尋銀行 | TKUFD銀行線上金融統計資料庫';
	}

	public function getBodyPageTitle() {
		return '搜尋銀行';
	}

	public function getBodyPageContent() {
		$content = '<form method="get" action=".">' .
			'<input type="hidden" name="search" value="banks">' .
			'<div class="cdx-field">' .
			'<div class="cdx-label">' .
			'<label class="cdx-label__label" for="stype">' .
			'<span class="cdx-label__label__text">' .
			'搜尋類型' .
			'</span>' .
			'</label>' .
			'</div>' .
			'<div class="cdx-field__control">' .
			'<div class="cdx-radio">' .
			'<div class="cdx-radio__wrapper">' .
			'<input class="cdx-radio__input" type="radio" name="stype" value="bankname"' .
			(
				(
					(
						isset( $_GET['stype'] ) &&
						$_GET['stype'] === 'bankname'
					) ||
					!isset( $_GET['stype'] )
				) ?
				' checked' :
				''
			) .
			'>' .
			'<span class="cdx-radio__icon">' .
			'</span>' .
			'<div class="cdx-radio__label cdx-label">' .
			'<label for="stype" class="cdx-label__label">' .
			'<span class="cdx-label__label__text">' .
			'銀行名稱' .
			'</span>' .
			'</label>' .
			'</div>' .
			'</div>' .
			'</div>' .
			'<div class="cdx-radio">' .
			'<div class="cdx-radio__wrapper">' .
			'<input class="cdx-radio__input" type="radio" name="stype" value="bankcode"' .
			(
				(
					isset( $_GET['stype'] ) &&
					$_GET['stype'] === 'bankcode'
				) ?
				' checked' :
				''
			) .
			'>' .
			'<span class="cdx-radio__icon">' .
			'</span>' .
			'<div class="cdx-radio__label cdx-label">' .
			'<label for="stype" class="cdx-label__label">' .
			'<span class="cdx-label__label__text">' .
			'銀行代碼' .
			'</span>' .
			'</label>' .
			'</div>' .
			'</div>' .
			'</div>' .
			'</div>' .
			'<div class="cdx-field">' .
			'<div class="cdx-label">' .
			'<label class="cdx-label__label" for="q">' .
			'<span class="cdx-label__label__text">' .
			'搜尋文字' .
			'</span>' .
			'</label>' .
			'</div>' .
			'<div class="cdx-field__control">' .
			'<div class="cdx-search-input cdx-search-input--has-end-button">' .
			'<div class="cdx-search-input__input-wrapper">' .
			'<div class="cdx-text-input cdx-text-input--has-start-icon">' .
			'<input class="cdx-text-input__input" type="search" name="q" placeholder="搜尋銀行"' .
			( isset( $_GET['q'] ) ? ' value="' . trim( $_GET['q'] ) . '"' : '' ) .
			' required>' .
			'<span class="cdx-text-input__icon cdx-text-input__start-icon">' .
			'</span>' .
			'</div>' .
			'</div>' .
			'<button class="cdx-button cdx-search-input__end-button">' .
			'搜尋' .
			'</button>' .
			'</div>' .
			'</div>' .
			'</div>' .
			'</form>';

			if ( isset( $_GET['stype'] ) && isset( $_GET['q'] ) && trim( $_GET['q'] ) !== '' ) {
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
				if ( $_GET['stype'] === 'bankname' ) {
					$sql .= ' AND lt_text LIKE \'%' .
						str_replace( '\'', '\\\'', trim( $_GET['q'] ) ) .
						'%\';';

				} elseif ( $_GET['stype'] === 'bankcode' ) {
					$sql .= ' AND bank_code LIKE \'' .
						str_replace( '\'', '\\\'', trim( $_GET['q'] ) ) .
						'%\';';
				} else {
					$content = '<div class="cdx-message cdx-message--block cdx-message--warning">' .
						'<span class="cdx-message__icon">' .
						'</span>' .
						'<div class="cdx-message__content">' .
						'<p><strong>參數錯誤。</strong></p>' .
						'<p>請修正搜尋條件。</p>' .
						'</div>' .
						'</div>' .
						$content;

					return $content;
				}

				$content .= '<h2>搜尋結果</h2>';

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
			}

		return $content;
	}
}
