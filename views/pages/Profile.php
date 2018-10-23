<?php
	include '../../Config/Config.php';
	include '../../Controller/ProfileController.php';
	// echo (ProfileController::fetchUser('alghi'));
	$profile = ProfileController::fetchUser('alghi');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../../public/css/profile.css">
	</head>
	<body>
		<div class = frame>	
			<div class="upperBox">
				<div>
					<a href="EditProfile.php"> <img id="edit-profile-logo" src="../../public/img/edit-profile-logo.png"></a>
				</div>
				<br>
				<img src="../../public/img/tayo.jpg" alt="Avatar" class="avatar">

				<h2 class="profileTitle"><?php echo $profile["name"] ?></h2>
				<br>
			</div>
			<div style="margin-left: 50px;">
				<h1>My Profile</h1>

				<table id="profileTable">
				  <tr class="header">
				  	<th style="width:10%;"></th>
				    <th style="width:45%;"></th>
				    <th style="width:45%;"></th>
				  </tr>
				  <tr>
				    <td><img src="../../public/img/username-logo.png" class="logo"></td>
				    <td>Username</td>
				    <td><?php echo $profile["username"] ?></td>
				  </tr>
				  <tr>
				  	<td><img src="../../public/img/email-logo.png" class="logo"></td>
				    <td>Email</td>
				    <td><?php echo $profile["email"] ?></td>
				  </tr>
				  <tr>
				  	<td><img src="../../public/img/address-logo.png" class="logo"></td>
				    <td>Address</td>
				    <td><?php echo $profile["address"] ?></td>
				  </tr>
				  <tr>
				  	<td><img src="../../public/img/phone-logo.png" class="logo"></td>
				    <td>Phone Number</td>
				    <td><?php echo $profile["phone-number"] ?></td>
				  </tr>
				</table>
			</div>
		</div>


	</body>
</html>
