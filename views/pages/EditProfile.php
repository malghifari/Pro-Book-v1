<?php
	include '../../Config/Config.php';
	include '../../Controller/ProfileController.php';
	session_start();
	$_SESSION['page'] = 'Profile';
	if (empty($_COOKIE['username'])) {
		header('Location: Login.php');
		die();
	} else {
		$profile = ProfileController::fetchUser($_COOKIE['username']);	
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Profile</title>
		<link rel="stylesheet" href="../../public/css/global.css" type="text/css"/>
		<link rel="stylesheet" href="../../public/css/header.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="../../public/css/edit-profile.css">
	</head>
	<body>
		<div class = frame>
			<?php include Config::DOCUMENT_ROOT . "/views/includes/Header.php"?>
			<h1>Edit Profile</h1>
			<form method="post" action="../../Controller/ProfileController.php">
<!--                <div>-->
<!--                    <div class="row">-->
<!--                        <div class="first-column avatar-column">-->
<!--                            <div class="avatar">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="second-column">-->
<!--                            Update profile picture-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="first-collumn">-->
<!---->
<!--                        </div>-->
<!--                        <div class="second-collumn">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="first-collumn">-->
<!---->
<!--                        </div>-->
<!--                        <div class="second-collumn">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="first-collumn">-->
<!---->
<!--                        </div>-->
<!--                        <div class="second-collumn">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

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
			  
			  <input type="submit" name="save" id="save-button" value="Save">
			</form> 
		</div>
	</body>
</html>