<?php

if (class_exists('Config'))  {
  require_once(Config::DOCUMENT_ROOT . '/Model/Database.php');
} else  {
  require_once('../Model/Database.php');
}

class BookDetailController  {
  public static function bookdetail()  {
    $query = "
      SELECT 
        username, 
        rating, 
        content, 
        user.avatar 
      FROM 
        `book` 
        JOIN 
          `review` 
          USING 
            (`id-book`)
            JOIN 
              `user`
              USING (`username`)
      WHERE
        title = :title;";
    $queryParams = array(
      ':title' => 'Matematika'
    );
    return Database::exec($query, $queryParams);
  }
}

$reviews = BookDetailController::bookdetail();

?>