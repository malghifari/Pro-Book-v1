<?php
	include '../../Config/Config.php';
	include '../../Controller/ProfileController.php';
	// echo (ProfileController::fetchUser('alghi'));
	$profile = ProfileController::fetchUser('alghi');
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../../public/css/editProfile.css">
	</head>
	<body>
		<div class = frame>
			<h1>Edit Profile</h1>
			<form method="post" action="../../Controller/EditProfileController.php">
			  <table>
			  	<tr>
			  		<th style="width:25%;"></th>
				    <th style="width:60%;"></th>
			  	</tr>
			  	<tr>
			  		<td><img id="profile-picture" src="../../public/img/tayo.jpg"></td>
			  		<td>
			  			Update profile picture
			  			<table>
			  				<tr>
			  					<td><textarea id="img-uploader" name="avatar" rows="1" cols="1"></textarea></td>
			  					<td><input type="file" name="avatar"></td>
			  				</tr>	
			  			</table>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>Name</td>
			  		<td><input type="text" name="name" value="<?php echo htmlspecialchars($profile["name"]) ?>" ></td>
			  	</tr>
			  	<tr>
			  		<td>Address</td>
			  		<td><textarea name="address"><?php echo $profile["address"] ?></textarea></td>
			  	</tr>
			  	<tr>
			  		<td>Phone Number</td>
			  		<td><input type="text" name="phone-number" value="<?php echo $profile["phone-number"] ?>" ></td>
			  	</tr>
			  </table>
			  <br>
			  <br>
			  <div id="back-button"><a href="Profile.php" style="text-decoration: none;"> Back </a></div>
			  
			  <input type="submit" id="save-button" value="Save">
			</form> 
		</div>
	</body>
</html>