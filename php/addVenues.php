<?php

	include 'config.php';
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
                
                    <a href='../html/getYourLoyaltyCard.html'  class='loyaltyCard' style="display: block;border:none;" >Get your<br> LOYALTY CARD</a>
                  
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

    <div class='pageContainer'>
	
	    <form method="POST" action="updateAddVenues.php">
    
	        <table>      
                <tr>
	                <td><lable class=contentName>Venue ID</lable></td>
	                <td><input type="text" name="id" ></td>
                </tr>
                <tr>
	                <td><lable class=contentName>Venue Name</lable></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
	                <td><lable class=contentName>Venue Details</lable></td>
	                <td><textarea name="details" rows="3" cols="40"></textarea></td>
                </tr>
                <tr>
	                <td><lable class=contentName>Maximum Guests</lable></td>
                    <td><input type="text" name="guests" pattern=''></td>
                </tr>
                <tr>
	                <td><lable class=contentName>Price</lable></td>
	                <td><input type="text" name="price"></td>
                </tr>
	                <td><input type="submit" value="ADD VENUES"></td>
                </tr>    

            </table>    
        </form>
    </div>    
        
   <script src='../js/administration.js'> </script>


   
</body>
    
    
    </html>