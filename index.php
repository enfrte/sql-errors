<?php

include_once 'TranslationsEN.php';
include_once 'SQLErrors.php';
include_once 'db.php';

try {
	$sql = "INSERT INTO users (hetu) VALUES ('444D')";
	$conn->exec($sql); // use exec() because no results are returned
	echo "New record created successfully";
} catch (PDOException $e) {
	$SQL_ERRORS = new SQLErrors();
	if (array_key_exists($e->errorInfo[1], $SQL_ERRORS::ERROR_CODES)) {
		echo '<br>Error: ' . $SQL_ERRORS::ERROR_CODES[$e->errorInfo[1]];
	}
	else {
		echo '<br>Unknown Error.';
	}
}
