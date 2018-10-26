<?php
    session_start();
	$_SESSION['page'] = 'History';
	include '../../Config/Config.php';
	require_once(Config::DOCUMENT_ROOT . '/Controller/HistoryController.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>History</title>
		<link rel="stylesheet" href="../../public/css/global.css" type="text/css"/>
		<link rel="stylesheet" href="../../public/css/header.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="../../public/css/review.css">
	</head>
	<body>
		<div class="frame">
            <?php include Config::DOCUMENT_ROOT . "/views/includes/Header.php"?>
            <div class="margin">
              <img src='' width='100px' height='100px' >
                <h1 class="title-review">Nota Hidup</h1>
                <p class="author-review">Ligh R. D. B.</p><br><br>
                <h2 class="rating">Add Rating</h2>

                <form>
                <fieldset>
                    <span class="star-cb-group">
                    <input type="radio" id="rating-5" name="rating" value="1" /><label for="rating-1">1</label>
                    <input type="radio" id="rating-4" name="rating" value="2" checked="checked" /><label for="rating-2">2</label>
                    <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
                    <input type="radio" id="rating-2" name="rating" value="4" /><label for="rating-4">4</label>
                    <input type="radio" id="rating-1" name="rating" value="5" class="star-cb-clear" /><label for="rating-5">5</label>
                    </span>
                </fieldset>
                </form>

                <h2 class="rating"> Add Comment</h2>
                <form action="/action_page.php" id = "">
                    <textarea rows = "4" cols="50" name="comment" form ="">Enter text here...
                    </textarea>
                </form>

            </div>
            <div class="button">
                <a href='History.php'><button type='submit' class='submit'>Submit</button></a> 
                <a href='History.php'><button type='submit' class ='back'>Back</button></a>
        </div>
        </div>
    </body>
</html>