<?php

require_once('../Config/Config.php');

class Database
{
  public static function getDB()
  {
    static $db = null;
    if ($db === null) {
      $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
      $db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);
    }
    return $db;
  }
  public static function exec($query)
  {
      $db = self::getDB();
      $statement = $db->prepare($query);
      $statement->execute();
      if (strpos($query, 'SELECT') !== false || strpos($query, 'select') !== false || strpos($query, 'Select') !== false) {
        return $statement->fetch(PDO::FETCH_ASSOC);
      }
      return;
  }
}

?>