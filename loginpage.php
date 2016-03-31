<?PHP
session_start();
	//echo "Session: $_SESSION['login']";

if (!(isset($_SESSION['login']))) {
	//echo "$_SESSION['login']";

	header ("Location: index.html");

}
$id = $_SESSION['id'];
$output = $_SESSION['login']; 
?>
	<html>
    <head>   
        <meta charset="UTF-8">
        <title>Frank's Franks </title>
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
            
            <a href="order.php">Make an order</a>
            <a href="logout.php">Log out</a>
        </nav>
        <div class='content'>
            <p class='half'>
                <?PHP
                echo "
                Welcome $output to Frank's Franks online ordering system. Here you can order franks and burgers right to your seat. Click above to make an order.
                ";
                ?>
                <br>
                <img width="90%" src='pictures/redsox_text.jpg' alt='Red Sox text logo' />
            </p>
            <div class='half'>
		<img src='pictures/game.jpg' alt='Game Day Photo' />
            </div>
        </div>
        </div>
    </body>
</html>