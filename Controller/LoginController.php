<?php
session_start();

if (class_exists('Config'))  {
  require_once(Config::DOCUMENT_ROOT . '/Model/Database.php');
} else  {
  require_once('../Model/Database.php');
}

class LoginController  {
  public static function login()  {
    $query = "SELECT * FROM user";
    $users = Database::exec($query);
    $header = "Location: " . Config::APP_URL . "/views/pages/Login.php";
    foreach ($users as $user) {
      if ($_POST['username'] === $user['username'] && $_POST['password'] === $user['password']) {
        $_SESSION['username'] = $_POST['username'];
        $header = "Location: " . Config::APP_URL . "/views/pages/Search.php";
        break;
      }
    }
    header($header);
  }
}

LoginController::login();

?>