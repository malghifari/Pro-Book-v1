<?php
	session_start();
	$_SESSION['page'] = 'History';
	include '../../Config/Config.php';
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
			<div>
				<div class="row">
					<div class="avatar-collumn">
						<div class="avatar">
							
						</div>
					</div>
					<div class="description">
						<h2>Nota Hidup </h2>
						<p>Jumlah: 1</p><br>
						<p>Anda sudah memberikan review</p>
					</div>
					<div class="details">
						<p>30 September 2018</p><br>
						<p>Nomor Order : #2</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
