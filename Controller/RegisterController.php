<?php

if (class_exists('Config'))  {
  require_once(Config::DOCUMENT_ROOT . '/Model/Database.php');
} else  {
  require_once('../Model/Database.php');
}

class RegisterController  {
  public static function register()  {
    $query = "
      INSERT INTO 
        user(
          name, 
          username, 
          email, 
          password, 
          address, 
          `phone-number`
        )
      VALUES(
        :name,
        :username,
        :email,
        :password,
        :address,
        :phoneNumber
      )";
    $queryParams = array(
      ':name' => $_POST['name'],
      ':username' => $_POST['username'],
      ':email' => $_POST['email'],
      ':password' => $_POST['password'],
      ':address' => $_POST['address'],
      ':phoneNumber' => $_POST['phone-number']
    );
    try
    {
      $result = Database::exec($query, $queryParams);
    }
    catch (PDOException $e)  {
      $header = 'Location: '. Config::APP_URL . '/views/pages/Register.php';
      header($header);
      die();  
    }
    $header = 'Location: '. Config::APP_URL . '/views/pages/Login.php';
    header($header);
    die();
  }
}

if ($_POST['Register']) {
  RegisterController::register();
}

?>