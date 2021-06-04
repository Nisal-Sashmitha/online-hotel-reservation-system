<?php

	include'config.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/">
    <link rel="stylesheet" href ="../css/footer.css">
    <title>Document</title>
</head>
<body>
    
	<!--header part-->
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
	
		<form method="POST" action="updateAddReservation.php">
		
			Rerservation ID &nbsp
			<input type="text" name="rid" value='<?php echo $rid ?>' readonly>
			<br>
			Name &nbsp
			<input type="text" name="name" value='<?php echo $name ?>'>
			<br>
			Contact Number &nbsp
			<input type="text" name="contact" value=<?php echo $contact ?>>
			<br>
			Email &nbsp
			<input type=email name="email" value=<?php echo $email ?>>
			<br>
			Date &nbsp
			<input type="datetime-local" name="date" value=<?php echo date('Y-m-d\TH:i', strtotime($date1));  ?>>
			<br>
			Address &nbsp
			<textarea name="address" rows="3" cols="20"><?php echo $address ?></textarea>
			<br>
			Package ID &nbsp
			<select name="pid" >
				<option value="1"<?php if ($pid == 1) echo ' selected="selected"'; ?>>paltinum</option>
    		    <option value="2"<?php if ($pid == 2) echo ' selected="selected"'; ?>>Gold</option>
    		    <option value="3"<?php if ($pid == 3) echo ' selected="selected"'; ?>>Silver</option>
    		    <option value="4"<?php if ($pid == 4) echo ' selected="selected"'; ?>>bronz</option>
    		</select>
			<br>
			Venue ID &nbsp

			<input type="text" name="vid" value='<?php echo $vid ?>' readonly>
			<br>
			Rerservation Status &nbsp
			<input type="text" name="rstatus" value='<?php echo $rstatus ?>' readonly>

			<br>
			Number Of Guests &nbsp
			<input type="text" name="guests" value=<?php echo $guests ?>>
			<br>
			LDR &nbsp
			<input type="text" name="ldr" value=<?php echo $ldr ?>>
			<br>
			LTR &nbsp
			<input type="text" name="ltr" value=<?php echo $ltr ?>>
			<br>
			SLDR &nbsp
			<input type="text" name="sldr" value=<?php echo $sldr ?>>
			<br>
			SLTR &nbsp
			<input type="text" name="sltr" value=<?php echo $sltr ?>>
			<br>
			Rerservation Pin &nbsp
			<input type="text" name="rpin" value=<?php echo $rpin ?>>

			<br><br>
			<input type="submit" value="UPDATE" >
		</form>
	</div>
        
   <script src='../js/administration.js'> </script>


   
</body>
    
    
    </html>