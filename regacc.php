<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon.png">
<title>Register</title>

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

<?php
// define variables 
$fnameErr = $lnameErr = $emailErr = $psswdErr = $genderErr = "";
$fname = $lname = $email = $psswd = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
 // validate first name
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
 // validate last name
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
 // validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

 // validate gender selection
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center>
<h2>Register Now!</h2>
<form method="post" action="regdbconn.php">  
  First Name: <input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error">* <?php echo $fnameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lname" value="<?php echo $lname;?>">
  <span class="error">* <?php echo $lnameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="psswd" value="<?php echo $psswd;?>">
  <span class="error">* <?php echo $psswdErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <p><span class="error">* required field.</span></p>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  
</form>
</center>

<div id="footer">&copy; Cassendra Braganza</div>
</body>
</html>
