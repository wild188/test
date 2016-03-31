<?php


echo "hello world";

require("DataConnect.php");

$seat = $_POST['seat'];
$hotdogs = $_POST['dogs'];
$burgers = $_POST['burgers'];

printf("form submitted: $seat ");

$price = ($hotdogs * 2.50) + ($burgers * 5.00);


session_start();
$userID = $_SESSION['id'];
printf("id confirmed: $userID");


//$seat = $mysqli->real_escape_string($seat);
$seattype= $_POST['seattype'];
$section= $_POST['section'];
$row= $_POST['row'];
$seatNo= $_POST['seat'];

$seat= "$seattype $section row: $row seat: $seat";

$hotdogs = $mysqli->real_escape_string($hotdogs);
$burgers = $mysqli->real_escape_string($burgers);


$orderNo = $_SESSION['lastorder'];
//"UPDATE MyGuests SET lastname='Doe' WHERE id=2"
//$search = "INSERT INTO `order` (`userID`, `seat`, `hotdogs`, `hamburgers`, `price`, `orderNo`) VALUES ('$userID', '$seat', '$hotdogs', '$burgers', '$price', NULL);";
//$search = "UPDATE `order` SET `userID='$userID', `seat`= '$seat', `hotdogs`='$hotdogs', `hamburgers`='$burgers', `price`= '$price' WHERE `orderNo`= //'$orderNo'";

$search = "UPDATE  `order` SET  `seat` =  '$seat',
`hotdogs` =  '$hotdogs',
`hamburgers` =  '$burgers',
`price` =  '$price' WHERE  `orderNo` = $orderNo";

printf("INSERT!!!: $search");


        
        
if($mysqli->query($search)){
    //$_SESSION['lastorder'] = $mysqli->insert_id;
    header ("Location: displayorder.php");
} else{
    echo "Error: " . $search . "<br>" . $mysqli->error;
}

//INSERT INTO `wldeluci_frank`.`order` (`userID`, `seat`, `hotdogs`, `hamburgers`, `price`, `orderNo`) VALUES ('1', '13 section 10 j', '1', '1', '7.50', NULL);
?>
