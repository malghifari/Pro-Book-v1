<?php
  require_once('../../Config/Config.php');
  include 'header.php';
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
		<title>Search</title>
		<link rel="stylesheet" href="../../public/css/search.css"/>
    </head>

    <body>
    
        <h1>Search Book</h1>
        <!-- The Form -->
        <form class="bloksearch"  action="<?php echo Config::APP_URL . 'Controller/SearchController.php' ?>" method="post">
            <input type="text" placeholder="Input search term.." name="title" value="">
            <br><br><br>
            <button type="submit" >Search
            </button>
        </form>
    </body>
</html>

