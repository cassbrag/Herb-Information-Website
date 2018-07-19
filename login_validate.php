<?php
session_start();

function RedirectForward() {
    header("Location:loginacc.php"); /* Redirect browser */
	exit();
}
function RedirectBack() {
    header("Location:logindetails.php"); /* Redirect browser */
	exit();
}
		
        if (isset($_POST['email']) )
			{ 
				$email = $_POST['email'];
			} 
	
		   
		 
		    if (isset($_POST['psswd']) )
			{ 
				 $psswd = $_POST['psswd'];		 
			
			} 
	
	$dbConn = new PDO("mysql:host=localhost;dbname=21600499", "root", "MySQL");


$sql = "SELECT * FROM User_Details WHERE U_Email = ? and U_Password = ?";
$dbrs = $dbConn->prepare($sql);


$dbrs->execute(array($email, $psswd));
$dbrs->fetch();

$numrow = $dbrs->rowCount();

foreach ($dbrs as $dbrow) {
    $dbrow['email'] . " <b>" . $dbrow['psswd'] ;
	 }
	
	if ($numrow == "0" )
		{
			echo "Invalid Email";
			RedirectBack();
		}
		else
		{
			RedirectForward();
		}
	
?>