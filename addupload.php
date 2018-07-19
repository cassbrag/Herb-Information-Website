<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon.png">
<title>Upload & Add</title>

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

<div class="titlespace">
	<h1>T H Y M E &#127807; L I N E</h1>
</div>
</head>
<body>
<br><br><br>
<center>
<form action="thanks.php" method="post" enctype="multipart/form-data">
	Enter your own tips/knowledge on herbs:
	<textarea name="comment" rows="5" cols="40" value="<?php echo $tip;?>"></textarea>
	<br><br>
    <input type="submit" value="Submit" name="submit">
</form>
</center>

<div id="footer">&copy; Cassendra Braganza</div>
</body>
</html>