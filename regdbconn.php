<?php

function RedirectBack() {
    header("Location:logindetails.php"); /* Redirect browser */
	exit();
}

$email = !empty($_POST['email']) ? trim($_POST['email']) : null;
$pass = !empty($_POST['psswd']) ? trim($_POST['psswd']) : null;
$fname = !empty($_POST['fname']) ? trim($_POST['fname']) : null;
$lname = !empty($_POST['lname']) ? trim($_POST['lname']) : null;
$gender = !empty($_POST['gender']) ? trim($_POST['gender']) : null;

$dbConn = new PDO("mysql:host=localhost;dbname=21600499", "root", "MySQL");

$sql = "UPDATE User_Details SET U_Email=?, U_Password=?, U_FirstName=?, U_LastName=?, U_Gender=?";
$dbrs = $dbConn->prepare($sql);
$dbrs->execute(array($email, $psswd, $fname, $lname, $gender));
$numrow = $dbrs->rowCount();

echo "Thank you for registering! You may now login.";
RedirectBack();

?>