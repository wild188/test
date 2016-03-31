<?PHP
            session_start();
	//echo "Session: $_SESSION['login']";

            if (!(isset($_SESSION['login']))) {
	//echo "$_SESSION['login']";

	header ("Location: login3.php");

            }
            require("DataConnect.php");
            
            
            
            $orderID = $_SESSION['lastorder'];
            $search = "SELECT * FROM `order` WHERE `orderNo` = '$orderID';";
            $result = $mysqli->query($search);
            $order = $result->fetch_assoc();
            
            $seat = $order['seat'];
            $dogs = $order['hotdogs'];
            $burgers = $order['hamburgers'];
            $price = $order['price'];
            
     ?>        

<html>
    <head>   
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="screen.css" type="text/css"/>
    </head>
    <body>
        <div class='outside'>
        <img id='leftLogo' src='pictures/logo.png' alt='Red Sox Logo' />
        <!--
        <img id='centerLogo' src='pictures/redsox_text.jpg' alt='Red Sox text logo' />
        -->
        <h1 class='centertext titlebar'>Get Frank's Fenway Franks Delivered Right to Your Seat</h1>
        
        <img id='rightLogo' src='pictures/logo.png' alt='Red Sox Logo' />
        <br>
        <nav class='centertext'>
            <a href="loginpage.php">Home page</a>
            <a href="logout.php">Log out</a>
        </nav>
        <div class='content'>
            <p class='half'>
                <?PHP 
                echo "
                Your order for $burgers hamburgers and $dogs franks has been placed for a total of \$$price. Your order number is $orderID, and will be delivered to you shortly at $seat. 
                <br>
                <br>
                If you would like to update or cancel your order please do so on the right side of the page. 
                <br>
                <br> Go Red Sox!
                ";
                ?>
            </p>
            <div class='half'>
            
                
                <h2>Update or cancel your order:</h2>
                <form name='signin' method='post' action='http://wldelucia.com/final/updateorder.php'>
                
                   Where are you sitting? Section: <select name="seattype">
<option value="Field Box">Field Box</option>
<option value="Loge Box">Loge Box</option>
<option value="Fiat">Fiat</option>
<option value="Right Field Box">Right Field Box</option>
<option value="Bleacher">Bleacher</option>
<option value="Grandstand">Grandstand</option>
<option value="Green Monster">Green Monster</option>
<option value="Pavilion">Pavilion</option>
</select>
                <input type="number" name="section" min="1" max="165" /><br>
                
                Row: <input type="number" name="row" min="1" max="20" />
                Seat: <input type="number" name="seat" min="1" max="100" /><br>
                    How many Franks?: <input type="number" name="dogs" min="0" max="10" <?PHP echo "value= \"$dogs\" "; ?> />
                    How many burgers: <input type="number" name="burgers" min="0" max="10" <?PHP echo "value= \"$burgers\" "; ?> /><br>
                    <input name="Submit1" type="submit" value="update" />
                </form>
                <form name='signin' method='post' action='http://wldelucia.com/final/deleteorder.php'>
                    <input name="Submit1" type="submit" value="delete" />
                </form>
            </div>
        </div>
        </div>
    </body>
</html>      