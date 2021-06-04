<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/account.css">
    <link rel = "stylesheet" href = "../css/footer.css">
    <title>Document</title>
</head>
<body onpageshow="firstwidthchanger()">
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
            
    </table>
    <br><br><br><br><br>

    <div class="pagecontainer" id="pagecontainer">
        
   <?php

    include 'connection.php';

    if($_SESSION['accountcheck']==1){
        $sql = "SELECT * FROM loyaltyholder WHERE loyaltyID=$_SESSION[loyaltyID]";
        $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                        echo "
        
    
                        <div class='section' id='section-1' >
                            <table class='loyalty-details-table'>
                            <tr>
                                <td colspan='2'><h2>Loyalty Card Details</h2></td>
                            </tr> 
                              
                            <tr>
                                <td>Loyalty ID</td>
                                <td>:".$row['LoyaltyID']."</td>
                            </tr>
                
                            
                            <tr>    
                                <td>User Name</td>
                                <td>:".$row['username']."</td>
                        
                            </tr>
                
                            </tr>    
                                <td>Email</td>
                                <td>:".$row['email']."</td>
                            </tr>
                
                            </tr>    
                                <td>Contact No</td>
                                <td>:".$row['contactNumber']."</td>
                            </tr>
                            </table>
                            <div class='loalty-points'>
                                <span class=loyltypointname>Your Loyalty Points</span>
                                <span class='Points'>
                                ".$row['loyaltyPoints']."
                                </span>
                            </div>
                            <div class=user-buttons>
                                <a href='editLoyalCustomer.php'><button><h2>Edit Acount Details</h2></button></a>
                                <a href ='deleteLoyaltyHolder.php'><button><h2>Delete My Account</h2></button></a>
                            </div>
                
                        </div>";
                    
                    }
                }
                else {
                    echo "0 results";
                  }
                  $conn->close();
                        
       

        
     
    }

    else{

        header("location:../html/administration2.html");

    }


    
    ?>
    
    
    
    

    </div>

    <footer>
		<table class = "footer-table">
		<tr>	
		<td class = "footer-data">
			<div class = "para1">
			
				<div class = "location">
					<img class = "icon" src = "../images/location.png" width = "20px" height = "20px" ; > &nbsp <font size = "2.5px" > Address : </font> <br> <br> &nbsp &nbsp &nbsp
					<span class = "text"> No.245/1 , Hotel Royal , Colombo 5 , Sri Lanka </span> 
					<br> <br>
				</div>
			
				<div class = "footer-contact">
					<img class = "icon" src = "../images/phone.png" width = "15px" height = "15px" ; > &nbsp <font size = "2.5px" > Hotline : </font> <br> <br> &nbsp &nbsp &nbsp
					<span class = "text"> 0118945607 <br> &nbsp &nbsp &nbsp 0119993866 </span> 
					<br> <br>
				</div>
				
				<div class = "email">
					<img class = "icon" src = "../images/email.png" width = "20px" height = "20px" ; > &nbsp <font size = "2.5px" > E-mail : </font> <br> <br> &nbsp &nbsp &nbsp
					<span class = "text"> hotelroyal@gmail.com </span> 
					<br> <br>
				</div>
				
			</div>
		</td>
			
			
		<td class = "footer-data">
				
			<div class = "social-media">
				<h3> CONNECT WITH US </h3>
				<div> <a href = "#"> <img class = "icon" id = "fb" src = "../images/fb.png" width = "25px" height = "25px" ; > </a> </div> &nbsp &nbsp 
				<div> <a href = "#"> <img class = "icon" id = "link" src = "../images/link.png" width = "25px" height = "25px" ; > </a> </div> &nbsp &nbsp 
				<div> <a href = "#"> <img class = "icon" id = "insta" src = "../images/insta.png" width = "20px" height = "20px" ; >  </a> </div> &nbsp &nbsp 
				<div> <a href = "#"> <img class = "icon" id = "twitter" src = "../images/twitter.png" width = "20px" height = "15px" ; > </a> </div>&nbsp &nbsp 
				<div> <a href = "#"> <img class = "icon" id = "utube" src = "../images/utube.png" width = "30px" height = "20px" ; > </a> </div>&nbsp &nbsp 
			</div>
			
		</td>
			<td class = "footer-data">
			<div class = "message">
				<h3> CONTACT US </h3>
				<div class = "content">
			
				<form action "#">
					<div class = "mail">
					<label> <font size = "2.5px" > E-mail </font> </label> <br> <br>
					<input type = "email" id = "footer-email" name = "email" pattern = "[a-zA-Z0-9._%+-*$]+@+[a-z0-9]+\.[a-z]{2,3}" required> <br> <br>
					</div>
				
					<div class = "cm"> <br> <br>
					<label> <font size = "2.5px" > Message </font> </label> <br> 
					<textarea rows = "2" cols = "20" required id = footer-text> </textarea>
					</div>
				
					<div class = "btn"> <br>
					<button class = "send" type = "submit"> <font size = "2.5px" > Send </font> </button>
					</div>
				</form>
				</div>
			</div>
			</td>
			<td class = "footer-data"> </td>
			</tr>
		</table>
		</footer>













    <script src='../js/account.js'></script>


</body>
</html>