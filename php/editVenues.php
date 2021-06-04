<?php
	include'config.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/addEditForm.css">
    <link rel="stylesheet" href ="../css/footer.css">
    <title>Document</title>
</head>
<body>
    
	<!--header part-->
    <table class='header' id='header' width=100%>
        <tr width=100%>
            <td rowspan="3">
                <img class='heder-logo' src='../images/logo.png'>
            </td>    
            <td class='header-menu' width=1000px>
                <div class=header-pages >
                    
                        <a href='../php/reserveNow.php' id=reserveNow>RESERVE NOW</span></a>
                        <a href='../html/hm.html' >HOME</a>
                        <a href='../html/contact.html' >CONTACT US</a>
                        <a href='../php/yourReservation.php' >YOUR RESERVATION</a>
                    
                    </div>
                
            </td>
            <td rowspan="2"  >
                
                    <a href='../html/getYourLoyaltyCard.html' class='loyaltyCard' style="display: block;border:none;" >Get your<br> LOYALTY CARD</a>
                  
            </td>
            <td rowspan="2"  >
                <a href=../php/SignIn.php><button>SignIn</button></a>
            </td> 
        </tr>
        <tr>    
            <td class='header-eventMenu'>
                
                    <div class=header-pages >
                        <a href='../html/wedding.html' >WEDDING</a>
                        <a href='../html/meeting&conference.html' >MEETING & CONFERENCE</a>
                        <a href='../html/party.html' >PARTY</a>
                        <a href='../html/venue.html' >VENUE</a>
                        <a href='../html/catering.html' >CATERING</a>
                        
                    </div> 
                           
                       
            </td>
            
        </tr>
        <tr height=50px;>
</tr>    
            
    </table><br><br><br><br>
	
	<?php
	
		$recordid = $_GET['id'];

		$sql = "SELECT * FROM venue where venueID=$recordid";
		$result = $con->query($sql);
		
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$vid = $row["venueID"];
				$name=$row["venueName"];
				$details = $row["venueDetails"];
				$guests = $row["maxGuests"];
				$price = $row["price"];
				
			}
		}
		
		$con->close();
	
	?>
	
	<div class='pageContainer'>

	    <form method="POST" action="updateEditVenues.php">
            <table >
                <tr>
                    <td><label class=contentName>Venue ID</label></td>
	                <td><input type="text" name="vid" value=<?php echo $vid ?> readonly></td>
                </tr>
                <tr>
                    <td><label class=contentName>Venue Name &nbsp</label></td>
                    <td><input type="text" name="name" value=<?php echo $name?> readonly></td>
                </tr>
                <tr>
                    <td><label class=contentName>Package Details </label</td>
                    <td><textarea name="details"><?php echo $details?></textarea></td>
                </tr>    
                <tr>
                    <td><label class=contentName>Maximum Guests</label></td>
                    <td><input type="text" name="guests" value=<?php echo $guests ?> required pattern='[0-9]{0,999}'></td>
                </tr>    
                <tr>
                    <td><label class=contentName>Venue Price </label></td>
                    <td><input type="text" name="price" value=<?php echo $price?> pattern='[0-9]{0,999}' required></td>
                </tr>
                <tr>
	                
                <td><input type="submit" value="UPDATE"></td>
                </tr> 
            </table>       
        
        </form>
    </div>
        
   <script src='../js/administration.js'> </script>


   
</body>
    
    
    </html>