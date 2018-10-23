<?php
  require_once('../../Config/Config.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pathway+Gothic+One" rel="stylesheet">
		<link rel="stylesheet" href="../../public/css/login-register.css" type="text/css"/>
    <script src="../../../public/js/Register.js"></script>
	</head>
	<body>
    <div class="container">
      <h1>REGISTER</h1>
      <form action="<?php echo Config::APP_URL . 'Controller/RegisterController.php' ?>" method="post">
        <div class="form-input-attr">
          <label for="name">Name</label>
          <input type="text" id="name" name="name">
        </div>
        <div class="form-input-attr">
          <label for="username">Username</label>
          <input type="text" id="username" name="username">
        </div>
        <div class="form-input-attr">
          <label for="email">Email</label>
          <input type="text" id="email" name="email">
        </div>
        <div class="form-input-attr">
          <label for="password">Password</label>
          <input type="password" id="password" name="password">
        </div>
        <div class="form-input-attr">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirmPassword">
        </div>
        <div class="form-input-attr">
          <label for="address">Address</label>
          <textarea type="text" id="address" name="address"></textarea>
        </div>
        <div class="form-input-attr">
          <label for="phone-number">Phone Number</label>
          <input type="text" id="phone-number" name="phone-number">
        </div>
        <div id="login-redirect">
          <a href="<?php echo Config::APP_URL . 'views/pages/Login.php' ?>">Already have an account?</a><br>
        </div>
        <div id="register-button">
          <input type="submit" value="REGISTER">
        </div>
      <form>
    </div>
  </body>
</html>

