
<?php

	include 'config.php';
	
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/displayRows.css">
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
	
		$sql="SELECT * FROM package";
		
		$result=$con->query($sql);
		
		if($result->num_rows > 0)
		{
            echo "
            
            <div class=reservationdetailsTable>
                
                    <div class=reservationdetails>
                    
                        <table border=1 class=detailRowsTable>
                            <th>Package ID</th>
                            <th>Package Type</th>
					        <th>Package Name</th>
					        <th>Package Description</th>
					        <th>Price Per Guests</th>
					";
			while($row=$result->fetch_assoc())
			{
				
				$pid=$row["packageID"];
				$type=$row["packageType"];
				$name=$row["packageName"];
				$description=$row["packageDetails"];
				$price=$row["pricePerGuest"];
				
				
				echo "
				    <tr>
							<td>".$pid."</td>
							<td>".$type."</td>
							<td>".$name."</td>
							<td>".$description."</td>
							<td>".$price."</td>
							<td> <a href='editPackages.php?id=$pid'><button >EDIT</button></a></td>
							
				
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