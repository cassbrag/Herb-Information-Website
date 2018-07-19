<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon.png">
<title>Login Form</title>

<div class="navmenu">
  <button class="navbtn">Navigation</button>
	<div class="navmenu-content">
		<a href="homepage.php">Home</a>
		<a href="about.php">About Us</a>
		<a href="login.php">Login/Register</a>
		<a href="herbfacts.php">Herbs & Facts</a>
		<a href="herbtips.php">Tips for Growing Herbs</a>
	</div>
</div>

<center><h1>T H Y M E &#127807; L I N E</h1></center>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<center>  

<?php

// defining variables
$psswdErr = $emailErr = "";
$psswd = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["psswd"])) {
    $psswdErr = "Password is required";
  } else {
    $psswd = test_input($_POST["psswd"]);
    // validate password
    if (!preg_match("/^[a-zA-Z ]*$/",$psswd)) {
      $psswdErr = "Only letters and white space allowed"; 
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h3>Login Form</h3>
<form method="post" action="login_validate.php">  
 E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span> 
<br>
 Password: <input type="password" name="psswd" value="<?php echo $psswd;?>">
  <span class="error">* <?php echo $psswdErr;?></span>
  <br><br>
  <p><span class="error">* required field.</span></p>
  <br><br>
  <input type="submit" name="submit" value="Login">  
</form>
</center>

<div id="footer">&copy; Cassendra Braganza</div>
</body>
</html>