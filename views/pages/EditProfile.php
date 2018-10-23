<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../../public/css/editProfile.css">
	</head>
	<body>
		<div class = frame>
			<h1>Edit Profile</h1>
			<form action="/action_page.php">
			  <table>
			  	<tr>
			  		<th style="width:25%;"></th>
				    <th style="width:60%;"></th>
			  	</tr>
			  	<tr>
			  		<td><img id="profile-picture" src="../../public/img/tayo.jpg"></td>
			  		<td>
			  			Update profile picture
			  			<br>
			  			<input type="file" name="image.jpg">
			  			<br>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>Name</td>
			  		<td><input type="text" name="name" value="Tayo the Little Bus"></td>
			  	</tr>
			  	<tr>
			  		<td>Address</td>
			  		<td><textarea name="address" value="Japan"> </textarea></td>
			  	</tr>
			  	<tr>
			  		<td>Phone Number</td>
			  		<td><input type="text" name="phone-number" value="1234567"></td>
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