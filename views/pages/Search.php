<?php
<<<<<<< Updated upstream
	if (empty($_COOKIE['username'])) {
		header('Location: Login.php');
		die();
	}
  require_once('../../Config/Config.php');
  session_start();
  $_SESSION['page'] = 'Search';
=======
    if (empty($_COOKIE['username'])) {
      header('Location: Login.php');
      die();
    }
    require_once('../../Config/Config.php');
    session_start();
    $_SESSION['page'] = 'Search';
>>>>>>> Stashed changes
?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
        <title>Search</title>
        <link rel="stylesheet" href="../../public/css/global.css" type="text/css"/>
		<link rel="stylesheet" href="../../public/css/header.css" type="text/css"/>
		<link rel="stylesheet" href="../../public/css/search.css"/>
    </head>
    <body>
        <div class = "frame">
            <?php include Config::DOCUMENT_ROOT . "/views/includes/Header.php"?><br>
            <div class = "container">
                <h1>Search Book</h1>
                <!-- The Form -->
                <form class="bloksearch"  action="<?php echo Config::APP_URL . '/views/pages/SearchResult.php' ?>" method="post">
                    <input type="text" placeholder="Input search term.." name="title" value=""><br><br><br><br>
                    <button type="submit" >Search
                    </button>
                </form>            
            </div>
        </div>
    </body>
</html>

