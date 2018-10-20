<?php
  require_once('../../Config/Config.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Login</title>
		<link rel="stylesheet" href="#" type="text/css"/>
	</head>
	<body>
    <h1>LOGIN</h1>
    <form action="<?php echo Config::APP_URL . 'Controller/LoginController.php' ?>" method="post">
      User name:<br>
      <input type="text" name="username"><br>
      User password:<br>
      <input type="password" name="psw"><br>
      <a href="<?php echo Config::APP_URL . 'views/pages/Register.php' ?>">Don't have an account?</a><br>
      <input type="submit" value="Login">
    <form>
  </body>
<html>

