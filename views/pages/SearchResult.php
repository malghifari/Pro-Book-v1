<?php
  require_once('../../Config/Config.php');

  session_start();

  if (class_exists('Config'))  {
      require_once(Config::DOCUMENT_ROOT . '/Model/Database.php');
  } else  {
      require_once('../Model/Database.php');
  }

class SearchController  {
    public static function search(){
        if(isset($_POST['title'])){
            $title = $_POST['title'];
        } else {
            echo "not assign";
        }
        $query = "SELECT DISTINCT 'id-book', title, author, avatar description FROM book NATURAL JOIN review WHERE title = '$title'";
        return $result = Database::exec($query);
    }
    public static function input() {
        $query = "INSERT INTO book(id-book,title,description,author,price)";
        VALUES (1001, 'Matematika','go','kadarsah', 65000);
        return $result = Database::exec($query);
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8" />
      <title>Search Result</title>
      <link rel="stylesheet" href="../../public/css/global.css" type="text/css"/>
			<link rel="stylesheet" href="../../public/css/header.css" type="text/css"/>
      <link rel="stylesheet" href="../../public/css/search-result.css" type="text/css"/>
    </head>
    <body>
        <div class = "frame">
        <?php include Config::DOCUMENT_ROOT . "/views/includes/Header.php"?>
          <h1>Search Result</h1>
          <?php
              $sql = SearchController::search();
              if (sizeof($sql) > 0) {
                  // output data of each row
                  $i = 0;
                  while($i < sizeof($sql)) {
                      $row = $sql[$i];
                      echo "<br><b class='title'>". $row["title"]. "</b><br>
                      <br><b class='author'>" . $row["author"] . "</b>
                      <br><span class='description'>". $row["description"]."</span>";
                      $i++;
                      echo "<button type='submit' class ='button'>Detail
                      </button>";
                      echo "<br><br>";
                  }
              } else {
                  echo "0 results";
              }

          ?>
          </div> 
    </body>
</html>

