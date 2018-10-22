<?php
//include '../../Controller/ProfileController.php';
//echo $profile;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			.avatar {
			    vertical-align: middle;
			    display: block;
			    margin-left: auto;
			    margin-right: auto;
			    width: 200px;
			    height: 200px;
			    border-radius: 50%;
			    border: 10px solid yellow;
			}
			.profileTitle {
				text-align: center;
				color: white;
				font-size: 28pt;
				font-family: calibri;
			}
			.upperBox {	
				background: #003366;
			}
			.h2 {
				position: relative;
			}
			.logo {
				float: left;
				margin-right: 5pt;
			}
		</style>
	</head>
	<body>
		<div class="upperBox">
			<br>
			<br>
			<img src="../../mocks/tayo.jpg" alt="Avatar" class="avatar">

			<h2 class="profileTitle">Tayo the Little Bus</h2>
			<br>
		</div>
		<div style="margin-left: 50px;">
			<h1 style = "color:#ff3300; font-size:28pt; font-family:calibri;">My Profile</h1>

			<table id="profileTable">
			  <tr class="header">
			  	<th style="width:10%;"></th>
			    <th style="width:45%;"></th>
			    <th style="width:45%;"></th>
			  </tr>
			  <tr>
			    <td><img src="username-logo.png" class="logo"></td>
			    <td>Username</td>
			    <td>Tayo</td>
			  </tr>
			  <tr>
			  	<td><img src="email-logo.png" class="logo"></td>
			    <td>Email</td>
			    <td>tayo@gmail.com</td>
			  </tr>
			  <tr>
			  	<td><img src="address-logo.png" class="logo"></td>
			    <td>Address</td>
			    <td>Japan</td>
			  </tr>
			  <tr>
			  	<td><img src="phone-logo.png" class="logo"></td>
			    <td>Phone</td>
			    <td>34567890</td>
			  </tr>
			</table>
		</div>


	</body>
</html>
