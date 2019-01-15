<?php
  require_once('../../Config/Config.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pathway+Gothic+One|Varela+Round|M+PLUS+Rounded+1c" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/login-register.css" type="text/css"/>
    <link rel="stylesheet" href="../../public/css/register.css" type="text/css"/>
	</head>
	<body>
    <div class="container">
      <h1>REGISTER</h1>
      <form action="<?php echo Config::APP_URL . '/Controller/RegisterController.php' ?>" method="post">
        <table>
          <colgroup>
            <col style="width:45%">
            <col style="width:50%">
            <col style="width:5%">
          </colgroup>
          <tr>
            <td>
              <label for="nama">Name</label>
            </td>
            <td colspan="2">
              <input type="text" id="nama" name="name">
            </td>                      
          </tr>
          <div class="status-nama"></div>
          <tr>
            <td>
              <label for="username">Username</label>
            </td>
            <td>
              <input type="text" id="username" name="username">
            </td>
            <td>
              <div class="status-username"></div>
            </td>
          </tr>
          <tr>
            <td>
              <label for="email">Email</label>
            </td>
            <td>
              <input type="text" id="email" name="email">
            </td>
            <td>
              <div class="status-email"></div>
            </td>
          </tr>
          <tr>
            <td>
              <label for="password">Password</label>            
            </td>
            <td colspan="2">
              <input type="password" id="password" name="password">
            </td>
          </tr>
          <div class="status-password"></div>
          <tr>
            <td>
              <label for="confirmPassword">Confirm Password</label>
            </td>
            <td colspan="2">
              <input type="password" id="confirmPassword" name="confirmPassword">
            </td>
          </tr>
          <div class="status-confirmPassword"></div>
          <tr>
            <td>
              <label for="address">Address</label>
            </td>
            <td colspan="2">
              <textarea type="text" id="address" name="address"></textarea>
            </td>
          </tr>
          <div class="status-address"></div>
          <tr>
            <td>
              <label for="phoneNumber">Phone Number</label>
            </td>
            <td colspan="2">
              <input type="text" id="phoneNumber" name="phone-number">
            </td>
          </tr>
          <div class="status-phoneNumber"></div>
        </table>
        <div id="login-redirect">
          <a href="<?php echo Config::APP_URL . '/views/pages/Login.php' ?>">Already have an account?</a><br>
        </div>
        <div id="register-button">
          <input type="submit" name="Register" value="REGISTER">
        </div>
      <form>
    </div>
    <script src="../../public/js/Register.js"></script>
  </body>
</html>