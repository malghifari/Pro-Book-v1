<?php

if (class_exists('Config'))  {
  require_once(Config::DOCUMENT_ROOT . '/Model/Database.php');
} else  {
  require_once('../Model/Database.php');
}
echo $_SERVER['DOCUMENT_ROOT'];
class RegisterController  {
  public static function register()  {
    $query = "INSERT INTO user(name, username, email, password, address, `phone-number`)
    VALUES('". $_POST['name'] . "','" . $_POST['username'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "','" . $_POST['address'] . "','" . $_POST['phone-number'] . "')";
    return $result = Database::exec($query);  
  }
}

RegisterController::register();

?>