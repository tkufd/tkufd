<?php

namespace Tkufd\Output;

use Tkufd\Output\CodexStyles;
use Tkufd\Output\SkinStyles;

class Styles {
	public static function getStyles() {
		return SkinStyles::getStyles() .
			CodexStyles::getStyles();
	}
}
