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
		<link rel="stylesheet" type="text/css" href="../../public/css/history.css"/>
	</head>
	<body>
		<div class="frame">
            <?php include Config::DOCUMENT_ROOT . "/views/includes/Header.php"?>
			<h1 class="history-header">History</h1>
			<?php
                $orders = HistoryController::fetchOrder($_COOKIE['username']);
                foreach ($orders as $order) {
                    if($order['flag'] == 1) {
                        $Reviewed = 'Belum direview';
<<<<<<< HEAD
                        $Reviewbutton = '<a href="Review.php" class="review-button"><button type="submit" class ="button">Review</button></a>';
=======
                        $Reviewbutton = '<a href="" class="review-button">Review</a>';
                        $Reviewbutton = '<a href="" class="review-button"><button type="submit" class ="button">Review</button></a>';
>>>>>>> 34a447975694267a62ac9bad2b3f973bfac3a06f
                    } else {
                        $Reviewed = 'Anda sudah memberikan review';
                        $Reviewbutton = '';
                    }
                    echo    "<div>
                                <div class='row'>
                                    <div class='avatar-collumn'>
                                        <div class='avatar'>
                                            <img src=${order['avatar']}>
                                        </div>
                                    </div>
                                    <div class='description'>
                                        <h2>${order['title']}</h2>
                                        <p>Jumlah: ${order['quantity']}</p><br>
                                        <p>$Reviewed</p>
                                    </div>
                                    <div class='details'>
                                        <div class='date'>${order['date']}</div>
                                        <div class='date'>Nomor Order : #${order['order-no']}</div>
                                        $Reviewbutton
                                    </div>
                                </div>
                            </div>";
                }
            ?>
		</div>
	</body>
</html>
