<?php
session_start();
if (!class_exists('Config'))	{
	include '../Config/Config.php';
}
include Config::DOCUMENT_ROOT . '/Model/Database.php';

class ProfileController	{
	public static function fetchUser($username) {
		$query = "SELECT * FROM user";
		$users = Database::exec($query);
		foreach ($users as $user) {
			if ($username == $user["username"]) {
				return $user;
			}
		}
	}
	public static function updateUser($username) {
		$query = "UPDATE user SET name='" . $_POST['name'] . "', address='" . $_POST['address'] . "', phone-number='" . $_POST['phone-number'] . "' WHERE username='" . $username . "'";
		Database::exec($query);
		var_dump($query);
	}
}

if (isset($_POST['save']))	{
	ProfileController::updateUser($_SESSION['username']);
	//header('Location: ' . Config::APP_URL . '/views/pages/EditProfile.php');
}

?>