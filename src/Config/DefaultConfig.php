<?php

namespace Tkufd\Config;

class DefaultConfig {
	private $options = array(
		// For maintenance
		'READ_ONLY' => array(
			'default' => false,
		),
		// Site metadata
		'SITE_FAVICON' => array(
			'default' => '/favicon.ico',
		),
		'SITE_APPLE_TOUCH_ICON' => array(
			'default' => false,
		),
		'SITE_CANONICAL_NAME' => array(
			'default' => 'TKUFD銀行線上金融統計資料庫',
		),
		'SITE_LOGOS' => array(
			'default' => false,
		),
		// Internationalization
		'SITE_LANG' => array(
			'default' => 'zh-hant',
		),
		'LOCAL_TIME_ZONE' => array(
			'default' => 'UTC',
		),
		// Server
		'SERVER' => array(
			'default' => false,
		),
		'FORCE_HTTPS' => array(
			'default' => false,
			'type' => 'boolean',
		),
		'BASE_DIR' => array(
			'default' => '/tkufd',
		),
		'SCRIPT_PATH' => array(
			'default' => false,
		),
		'INDEX_SCRIPT' => array(
			'default' => false,
		),
		'LOAD_SCRIPT' => array(
			'default' => false,
		),
		'REST_SCRIPT' => array(
			'default' => false,
		),
		'PAGE_PATH' => array(
			'default' => false,
		),
		'MAIN_PAGE_USE_DOMAIN_ROOT' => array(
			'default' => true,
			'type' => 'boolean',
		),
		// Database
		'DB_TYPE' => array(
			'default' => 'mysql',
		),
		'DB_SERVER' => array(
			'default' => 'localhost',
		),
		'DB_PORT' => array(
			'default' => 5432,
		),
		'DB_SSL' => array(
			'default' => false,
		),
		'DB_NAME' => array(
			'default' => 'tkufd',
		),
		'DB_OPTIONS' => array(
			'default' => 'DEFAULT CHARACTER SET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci',
		),
		'DB_TABLE_PREFIX' => array(
			'default' => '',
		),
		'DB_TABLE_OPTIONS' => array(
			'default' => 'ENGINE=InnoDB, DEFAULT CHARSET=utf8mb4',
		),
		'DB_USERNAME' => array(
			'default' => 'tkufduser',
		),
		'DB_PASSWORD' => array(
			'default' => '',
		),
		'DB_ADMIN_USERNAME' => array(
			'default' => false,
		),
		'DB_ADMIN_PASSWORD' => array(
			'default' => false,
		),
		'SHARED_DB_NAME' => array(
			'default' => false,
		),
		'SHARED_DB_TABLE_PREFIX' => array(
			'default' => '',
		),
		'SHARED_DB_TABLES' => array(
			'default' => array(),
		),
		// Cache
		'MAIN_CACHE-TYPE' => array(
			'default' => false,
		),
	);

	/**
	 * Returns the default value of the given config option.
	 *
	 * @param string $name The config option name.
	 * @return mixed The given config option's default value, or null if no
	 *   default value is specified.
	 */
	public function getDefaultValue( string $name ) {
		if (
			isset( $this->options[$name] ) &&
			isset( $this->options[$name]['default'] )
		) {
			return $this->options[$name]['default'];
		}

		return null;
	}

	/**
	 * Returns the value of the given config option.
	 *
	 * @param string $name The config option name.
	 * @return mixed The given config option's default value, or null if no
	 *   default value is specified.
	 */
	public function getValue( string $name ) {
		if (
			isset( $this->options[$name] ) &&
			isset( $this->options[$name]['default'] )
		) {
			return $this->options[$name]['default'];
		}

		return null;
	}
}
