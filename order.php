<?PHP
            session_start();
	//echo "Session: $_SESSION['login']";

            if (!(isset($_SESSION['login']))) {
	//echo "$_SESSION['login']";

	header ("Location: index.html");

            }
            
            
          ?>

<html>
    <head>   
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="screen.css" type="text/css"/>
        <script type="text/javascript" src="Formval.js"></script> 
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
            
            <a href="logout.php">Log out</a>
            <a href="loginpage.php">Home page</a>
        </nav>
        <div class='content'>
            <p class='half'>
                Enjoy a Fenway Frank for only $2.50 or a burger for $5.00 without leaving your seat. Fill out the order form to the right and your order will be delivered shortly.
                
                <img  width="90%" src='pictures/deliver.jpg' alt='Deliver' />
            </p>
            <div class='half'>
                <h2>Make an order:</h2>
                <form name='order' method='post' action='http://wldelucia.com/final/createorder.php' onSubmit="return orderVal(this)">
                   <span>Where are you sitting? Section: <select name="seattype">
<option value="Field Box">Field Box</option>
<option value="Loge Box">Loge Box</option>
<option value="Fiat">Fiat</option>
<option value="Right Field Box">Right Field Box</option>
<option value="Bleacher">Bleacher</option>
<option value="Grandstand">Grandstand</option>
<option value="Green Monster">Green Monster</option>
<option value="Pavilion">Pavilion</option>
</select>
                <input type="number" name="section" min="1" max="165" id="section"/></span><br>
                
                <span>Row: <input type="number" name="row" min="1" max="20" id="row"/>
                Seat: <input type="number" name="seat" min="1" max="100" id="seat"/></span><br>
                    <span>How many Franks?: <input type="number" name="dogs" min="0" max="10" id="dogs"/>
                    How many burgers: <input type="number" name="burgers" min="0" max="10" id="burgers"/></span><br>
                    <input name="Submit1" type="submit" value="submit" />
                </form>
            </div>
        </div>
        </div>
    </body>
</html>