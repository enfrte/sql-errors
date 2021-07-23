<?php

class SQLErrors {
	const ERROR_CODES = [
		1062 => DUPLICATE_ENTRY,
		// add more error codes 
	];

	public static function getErrorFromErrorCode($error_code){
		if (array_key_exists($error_code, self::ERROR_CODES)) {
			return '<br>Error: ' . self::ERROR_CODES[$error_code];
		}
		else {
			echo '<br>Unknown Error.';
		}
	}
}
