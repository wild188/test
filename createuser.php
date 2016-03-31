<?php

echo "hello world";

require("DataConnect.php");

$userID = $_POST['myusername'];
$password = $_POST['mypassword'];
$first = $_POST['fName'];
$last = $_POST['lName'];
$dob  = $_POST['dob'];
$card = $_POST['creditcard'];
$email = $_POST['email'];

printf("$userID");

$search = "SELECT * FROM `customer` WHERE `userID` = '$userID';";



        
        
if($result = $mysqli->query($search)){


    $count = $result->num_rows;
	
	//printf("This number: $count");
	    
    if($count > 0){
        echo "<html>
        <head>
        <title>Login confirmed</title>
        <script type=\"text/javascript\">alert(\"user already exists\")</script>
        <meta http-equiv=\"Refresh\" content=\"0; url=newcustomer.html\" />
        </head>
        <body>
        </body>
        </html>";
    } else {
        
        $input = $sql = "INSERT INTO `customer` (`userID`, `password`, `fName`, `lName`, `dob`, `creditcard`, `email`, `idNo`) "
                . "VALUES ('$userID', '$password', '$first', '$last', '$dob', '$card', '$email', NULL);";
        
        //printf("$input");
        
        if($mysqli->query($input)){
            printf("input complete");
    //$_SESSION['lastorder'] = $mysqli->insert_id;
    //header ("Location: loginpage.php");
} else{
    echo "Error: " . $search . "<br>" . $mysqli->error;
}
        
        echo "<html>
        <head>
        <title>Login confirmed</title>
        <script type=\"text/javascript\">alert(\"Your account has been added witht the username: $userID. Please press OK to continue and login.\")</script>
        <meta http-equiv=\"Refresh\" content=\"0; url=index.html\" />
        </head>
        <body>
        </body>
        </html>";
    }
    
    //header ("Location: loginpage.php");
} else{
    echo "Error: " . $search . "<br>" . $mysqli->error;
}

//INSERT INTO `wldeluci_frank`.`order` (`userID`, `seat`, `hotdogs`, `hamburgers`, `price`, `orderNo`) VALUES ('1', '13 section 10 j', '1', '1', '7.50', NULL);
?>