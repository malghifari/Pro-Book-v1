<?php
	session_start();
	$_SESSION['page'] = 'History';
	include '../../Config/Config.php';
	include Config::DOCUMENT_ROOT . '/Controller/HistoryController.php'
?>

<!DOCTYPE html>
<html>
	<head>
		<title>History</title>
		<link rel="stylesheet" href="../../public/css/global.css" type="text/css"/>
		<link rel="stylesheet" href="../../public/css/header.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="../../public/css/history.css">
	</head>
	<body>
		<div class="frame">
            <?php include Config::DOCUMENT_ROOT . "/views/includes/Header.php"?>
			<h1 class="history-header">History</h1>
			<?php
                $orders = HistoryController::fetchOrder($_COOKIE['username']);
                foreach ($orders as $order) {
                    if($order['flag'] == 0) {
                        $Reviewed = 'Belum direview';
                        $Reviewbutton = '';
                    } else {
                        $Reviewed = 'Anda sudah memberikan review';
                        $Reviewbutton = '<a href="" class="review-button"></a>';
                    }

                    echo "    <div>
                                <div class='row'>
                                    <div class='avatar-collumn'>
                                        <div class='avatar'>
                                            <img src='$order['avatar']\'>
                                        </div>
                                    </div>
                                    <div class='description'>
                                        <h2>$order['book-name']</h2>
                                        <p>Jumlah: $order['quantity']</p><br>
                                        <p>$Reviewed</p>
                                    </div>
                                    <div class='details'>
                                        <p>$order['date']</p><br>
                                        <p>Nomor Order : #$order['order-no']</p>
                                        $Review-button
                                    </div>
                                </div>
                            </div>"
                }
            ?>




		</div>
	</body>
</html>
