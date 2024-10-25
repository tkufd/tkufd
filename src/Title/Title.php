<?php

namespace Tkufd\Title;

class Title {
	private string $namespace_text;

	private string $namespace_separator;

	private string $main_title_text;

	public function __construct(
		string $namespace_text,
		string $main_title_text
	) {
		$this->namespace_text = $namespace_text;
		$this->main_title_text = $main_title_text;
	}

	// public function isMainPage(): bool {
	public function isMainPage() {
		return false;
	}

	// public function getFullDisplayTitlePlain(): string {
	public function getFullDisplayTitlePlain() {
		if ( $this->namespace_name !== '' ) {
			return $this->namespace_name .
				$this->namespace_separator .
				$this->main_title_name;
		}

		return $this->main_title_name;
	}

	// public function getFullDisplayTitleHtml(): string {
	public function getFullDisplayTitleHtml() {
		if ( $this->namespace_name !== '' ) {
			return $this->namespace_name .
				$this->namespace_separator .
				$this->main_title_name;
		}

		return $this->main_title_name;
	}
}
