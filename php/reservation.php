<?php
	include'config.php';

?>

<?php

	include 'config.php';
	
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/adminreservation.css">
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
                
                    <a href='../php/signUp.php' class='loyaltyCard' style="display: block;border:none;" >Get your<br> LOYALTY CARD</a>
                  
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
            
    </table><br><br><br>    
	<div class=pageContainer>
	<?php
	
	$sql="SELECT * FROM reservation";
		
	$result=$con->query($sql);
		
		if($result->num_rows > 0)
		{
			echo "
            
            <div class=reservationdetailsTable>
                
                    <div class=reservationdetails>
                    
                        <table border=1 class=detailRowsTable>
							<th>Reservation ID</th>
							<th>Customer Name</th>
							<th>Contact Number</th>
							<th>Email</th>
							<th>date and time</th>
							<th>Address</th>
							<th>Package ID</th>
							<th>Venue ID</th>
							<th>Reservation Status</th>
							<th>No Of guests</th>
							<th>LDR</th>
							<th>LTR</th>
							<th>SLDR</th>
							<th>SLTR</th>
							<th>Reservation Pin</th>
					";
			while($row=$result->fetch_assoc())
			{	
				$rid=$row["reservationId"];
				$name=$row["name"];
				$contact=$row["contactNo"];
				$email=$row["email"];
				$date=$row["date"];
				$address=$row["address"];
				$pid=$row["packageId"];
				$vid=$row["venueId"];
				$rstatus=$row["reservationStatus"];
				$guests=$row["numOfGuest"];
				$ldr=$row["LDR"];
				$lrt=$row["LTR"];
				$sldr=$row["SLDR"];
				$slrt=$row["SLTR"];
				$rpin=$row["reservationPin"];
				
				
				echo "
						<tr>
							<td>".$rid."</td>
							<td>".$name."</td>
							<td>".$contact."</td>
							<td>".$email."</td>
							<td>".$date."</td>
							<td>".$address."</td>
							<td>".$pid."</td>
							<td>".$vid."</td>
							<td>".$rstatus."</td>
							<td>".$guests."</td>
							<td>".$ldr."</td>
							<td>".$lrt."</td>
							<td>".$sldr."</td>
							<td>".$slrt."</td>
							<td>".$rpin."</td>
							<td> <a href='adminEditReservation.php?id=$rid'><button >EDIT</button></a></td>
							<td> <a href='admindeletereservation.php?id=$rid'><button >DELETE</button></a></td>
				
						</tr>";
				
			}
			echo "</table></div></div>";
	
		}
		
		else
		{
			echo "NO records";
		}
		
		
		
		$con->close();
		
		?>

    
        
   <script src='../js/administration.js'> </script>


   
</body>
    
    
    </html>