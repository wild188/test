<?php



echo "hello world";

require("DataConnect.php");
/*
$seat = $_POST['seat'];
$hotdogs = $_POST['dogs'];
$burgers = $_POST['burgers'];

printf("form submitted: $seat ");

$price = ($hotdogs * 2.50) + ($burgers * 5.00);


session_start();
$userID = $_SESSION['id'];
printf("id confirmed: $userID");


$seat = $mysqli->real_escape_string($seat);
$hotdogs = $mysqli->real_escape_string($hotdogs);
$burgers = $mysqli->real_escape_string($burgers);

*/
session_start();
$orderNo = $_SESSION['lastorder'];
//"UPDATE MyGuests SET lastname='Doe' WHERE id=2"
//$search = "INSERT INTO `order` (`userID`, `seat`, `hotdogs`, `hamburgers`, `price`, `orderNo`) VALUES ('$userID', '$seat', '$hotdogs', '$burgers', '$price', NULL);";
//$search = "UPDATE order SET `userID='$userID' `seat`= '$seat' `hotdogs`='$hotdogs' `hamburgers`='$burgers' `price`= '$price' WHERE `orderNo`= '$orderNo'";
$search = "DELETE FROM `order` WHERE `orderNo` = $orderNo;";
printf("DELETE!!!: $search");


//$search = "DELETE FROM `order` WHERE `orderNo` = $orderNo;";

        
        
if($mysqli->query($search)){
   // $_SESSION['lastorder'] = $mysqli->insert_id;
    header ("Location: loginpage.php");
} else{
    echo "Error: " . $search . "<br>" . $mysqli->error;
}


?>
