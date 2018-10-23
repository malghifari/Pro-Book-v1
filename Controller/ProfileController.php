<?php

include '../Model/Database.php';

class ProfileController	{
	public static function show() {
		$query = "SELECT * FROM user WHERE username = 'alghi' ";
		return $result = Database::exec($query);
	}
}

$profile = ProfileController::show();
var_dump($profile);
?>