<?php
  require_once('../../Config/Config.php');
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
        <?php include Config::DOCUMENT_ROOT . "/views/includes/Header.php"?>
        <div class = "frame">
            <h1 style="font-family: 'Dosis', sans-serif";>Search Book</h1>
            <!-- The Form -->
            <form class="bloksearch"  action="<?php echo Config::APP_URL . '/Controller/SearchController.php' ?>" method="post">
                <input type="text" placeholder="Input search term.." name="title" value="">
                <button type="submit" >Search
                </button>
            </form>
        </div>
    </body>
</html>

