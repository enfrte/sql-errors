<?php

include_once 'TranslationsEN.php';
include_once 'SQLErrors.php';
include_once 'db.php';

try {
	$sql = "INSERT INTO users (hetu) VALUES ('444D')";
	$conn->exec($sql); // use exec() because no results are returned
	echo "<br>New record created successfully.";
} catch (PDOException $e) {
	echo SQLErrors::getErrorFromErrorCode($e->errorInfo[1]);
}
