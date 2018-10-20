<?php
  require_once('../../Config/Config.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Register</title>
		<link rel="stylesheet" href="#" type="text/css"/>
    <script src="../../../public/js/Register.js"></script>
	</head>
	<body>
    <h1>REGISTER</h1>
    <form action="<?php echo Config::APP_URL . 'Controller/RegisterController.php' ?>" method="post">
      Name:<br>
      <input type="text" name="name"><br>
      User name:<br>
      <input type="text" name="username"><br>
      Email:<br>
      <input type="email" name="email"><br>
      Password:<br>
      <input type="password" name="password"><br>
      Confirm Password:<br>
      <input type="password" name="confirm-password"><br>
      Address:<br>
      <input type="text" name="address"><br>
      Phone Number:<br>
      <input type="text" name="phone-number"><br>
      <a href="<?php echo Config::APP_URL . 'views/pages/Login.php' ?>">Already have an account?</a><br>
      <input type="submit" value="Register">
    <form>
  </body>
</html>

