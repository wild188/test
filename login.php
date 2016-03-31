<?php
//session_start();

//mysqli_connect_errno

require("DataConnect.php");
if($mysqli->connect_error){
    printf("Data connection failed: %s/n", mysqli_connect_error());
    exit();
}
else{
   //printf("Successful connection", mysqli_);
   }




//printf(" hello?");
//printf('username:' . $_POST['myusername']);


$username = $_POST['myusername'];
$password = $_POST['mypassword'];

//printf("111username: $username \n password:  $password");

//printf('\n username' . $username . '\n password: ' . $password);
//printf("userXname: $myusername \n password:  $mypassword");

$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);

//printf("222username: $username \n password:  $password");

$search = "SELECT * FROM `customer` WHERE `userID` = '$username' and `password` = '$password';";
//printf($search);

if ($result = $mysqli->query($search)) {
	$count = $result->num_rows;
	
	if($count == 1){
		$user = $result->fetch_assoc();
		session_start();
		$_SESSION['login'] = $user['fName']; //"hello2";
		$_SESSION['id'] = $user['idNo'];
		
		$message = "You have logged in!";
		
		header ("Location: loginpage.php");
		//$message = "You have logged in!";
		/*
		$user = $result->fetch_assoc();
		session_start();
		$_SESSION['id'] = 1; //$user['idNo'];
		$_SESSION['name'] = "bill";//$user['lName'];
		
	echo "<html>
	<head>
	<title>Login confirmed</title>
	<meta http-equiv=\"Refresh\" content=\"0; url=http://www.wldelucia.com/final/loginpage.php\" />
	</head>
	<body>
	</body>
	</html>";
*/
	} else {
	echo "<br> failed";
	//header ("Location: index.html");
	}
	
    printf("Select returned %d rows.\n", $result->num_rows);
}else{
    echo " query failed ";
}
?>