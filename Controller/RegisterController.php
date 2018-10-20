<?php

require_once('../Model/Database.php');

class RegisterController  {
  public static function register()  {
    $query = "INSERT INTO user(name, username, email, password, address, `phone-number`)
    VALUES('". $_POST['name'] . "','" . $_POST['username'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "','" . $_POST['address'] . "','" . $_POST['phone-number'] . "')";
    echo $query;
    return $result = Database::exec($query);  
  }
}

RegisterController::register();

?>