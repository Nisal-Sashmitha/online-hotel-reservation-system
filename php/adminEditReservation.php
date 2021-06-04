<?php
	include	'config.php';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/addEditForm.css">
    
    
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
		session_start();
        $recordid = $_SESSION['loggedReservationId'];
        $recordid = $_GET['id'];

		$sql = "SELECT * FROM reservation where reservationId=$recordid";
		$result = $con->query($sql);
		
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$rid=$row["reservationId"];
				$name=$row["name"];
				$contact=$row["contactNo"];
				$email=$row["email"];
				$date1=$row["date"];
				$address=$row["address"];
				$pid=$row["packageId"];
				$vid=$row["venueId"];
				$rstatus=$row["reservationStatus"];
				$guests=$row["numOfGuest"];
				$ldr=$row["LDR"];
				$ltr=$row["LTR"];
				$sldr=$row["SLDR"];
				$sltr=$row["SLTR"];
				$rpin=$row["reservationPin"];
				if($vid==1){
					$vid='Royal Grove';
				}
				else if($vid==2){
					$vid='Boss Room';
				}
				else if($vid==3){
					$vid='Green Acres';
				}
				else{
					$vid='The Victorian';
				}
				
			}
		}
		
		$con->close();
	
	?>
	
<div class='pageContainer'>
<form method="POST" action="adminUpdateEditReservation.php" name=editres onsubmit="return validate(this)">
	<table >
        <tr>
            <td><label class=contentName>Rerservation ID</label></td>
	        <td><input type="text" name="rid" value='<?php echo $rid ?>' readonly></td>
        </tr>
        <tr>
            <td><label class=contentName>Name</label></td>
	        <td><input type="text" name="name" value='<?php echo $name ?>' required></td>
        </tr>
        <tr>
            <td><label class=contentName>Contact Numbe</label></td>
	        <td><input type="text" name="contact" value=<?php echo $contact ?> pattern=[0-9]{10} required></td>
        </tr>
        <tr>
            <td><label class=contentName>Email</label></td>
	        <td><input type=email name="email" value=<?php echo $email ?> required></td>
        </tr>
        <tr>
            <td><label class=contentName>Date</label></td>
	        <td><input type="datetime-local" name="date" value=<?php echo date('Y-m-d\TH:i', strtotime($date1));  ?> required></td>
        </tr>
        <tr>
            <td><label class=contentName>Address</label></td>
	        <td><textarea name="address" rows="3" cols="20"><?php echo $address ?></textarea></td>
        </tr>
        <tr>
            <td><label class=contentName>Package ID</label></td>
	        <td><select name="pid" >
            <option value="1"<?php if ($pid == 1) echo ' selected="selected"'; if($pid>4){echo "disabled";} ?>>paltinum</option>
	    <option value="2"<?php if ($pid == 2) echo ' selected="selected"'; if($pid>4){echo "disabled";}?>>Gold</option>
	    <option value="3"<?php if ($pid == 3) echo ' selected="selected"'; if($pid>4){echo "disabled";}?>>Silver</option>
        <option value="4"<?php if ($pid == 4) echo ' selected="selected"'; if($pid>4){echo "disabled";}?>>Bronze</option>
        <option value="5"<?php if ($pid == 5) echo ' selected="selected"'; if($pid>8 || $pid<5 ){echo "disabled";}?>>Star Delight</option>
	    <option value="6"<?php if ($pid == 6) echo ' selected="selected"'; if($pid>8 || $pid<5){echo "disabled";}?>>Golden Key</option>
	    <option value="7"<?php if ($pid == 7) echo ' selected="selected"'; if($pid>8 || $pid<5){echo "disabled";}?>>Silver Range</option>
        <option value="8"<?php if ($pid == 8) echo ' selected="selected"'; if($pid>8 || $pid<5){echo "disabled";}?>>Visionary Vista</option>
        <option value="9"<?php if ($pid == 9) echo ' selected="selected"'; if($pid>12 || $pid<9){echo "disabled";}?>>Spring Fling</option>
	    <option value="10"<?php if ($pid == 10) echo ' selected="selected"'; if($pid>12 || $pid<9){echo "disabled";}?>>Golden Light</option>
	    <option value="11"<?php if ($pid == 11) echo ' selected="selected"'; if($pid>12 || $pid<9){echo "disabled";}?>>Silver Bliss</option>
        <option value="12"<?php if ($pid == 12) echo ' selected="selected"'; if($pid>12 || $pid<9){echo "disabled";}?>>Cool Daze</option>
        <option value="13"<?php if ($pid == 13) echo ' selected="selected"'; if($pid<13){echo "disabled";}?>>Taste Buds</option>
	    <option value="14"<?php if ($pid == 14) echo ' selected="selected"'; if($pid<13){echo "disabled";}?>>Fresh Delight</option>
	    <option value="15"<?php if ($pid == 15) echo ' selected="selected"'; if($pid<13){echo "disabled";}?>>Savory Nuts</option>
	    <option value="16"<?php if ($pid == 16) echo ' selected="selected"'; if($pid<13){echo "disabled";}?>>Food Fusion</option>
	            </select></td>
        </tr>
        <tr>
            <td><label class=contentName>Venue ID</label></td>
	        <td><input type="text" name="vid" value='<?php echo $vid ?>' readonly></td>
        </tr>
        <tr>
            <td><label class=contentName>Rerservation Status</label></td>
	        <td><select name="rstatus" >
		        <option value="0"<?php if ($rstatus == 0) echo ' selected="selected"'; ?>>Level 1</option>
	            <option value="1"<?php if ($rstatus == 1) echo ' selected="selected"'; ?>>Level 2</option>
	            <option value="2"<?php if ($rstatus == 2) echo ' selected="selected"'; ?>>Level 3</option>
	            <option value="3"<?php if ($rstatus == 3) echo ' selected="selected"'; ?>>Level 4</option>
	            </select></td>
        </tr>
        <tr>
            <td><label class=contentName>Number Of Guests</label></td>
	        <td><input type="text" name="guests" value=<?php echo $guests ?> max=500 pattern=[0-9]{0,3}></td>
        </tr>
        <tr>
            <td><label class=contentName>LDR</label></td>
	        <td><input type="text" name="ldr" value=<?php echo $ldr ?>  pattern=[0-9]{0,3}></td>
        </tr>
        <tr>
            <td><label class=contentName>LTR</label></td>
	        <td><input type="text" name="ltr" value=<?php echo $ltr ?> pattern=[0-9]{0,3}></td>
        </tr>
        <tr>
            <td><label class=contentName>SLDR</label></td>
	        <td><input type="text" name="sldr" value=<?php echo $sldr ?> pattern=[0-9]{0,3}></td>
        </tr>
        <tr>
            <td><label class=contentName>SLTR</label></td>
	        <td><input type="text" name="sltr" value=<?php echo $sltr ?> pattern=[0-9]{0,3}></td>
        </tr>
        <tr>
            <td><label class=contentName>Rerservation Pin</label></td>
	        <td><input type="text" name="rpin" value=<?php echo $rpin ?>></td>
        </tr>
        <tr>
            <td><input type="submit" value="UPDATE" ></td>
        </tr>
	</table>	
		
		
</form>
</div>
    <script>

function validate() {
    let x = document.forms["editres"]["guests"].value;
    let ldr = document.forms["editres"]["ldr"].value;
    let ltr = document.forms["editres"]["ltr"].value;
    let sldr = document.forms["editres"]["sldr"].value;
    let sltr = document.forms["editres"]["sltr"].value;
    
    


    if (x>500 ) {
        alert('SORRY!! maximum no of guests is 500');
      return false;
    }
    else if(ldr>5 || ltr>5 || sldr>5 || sltr>5){
        alert('you cant add more than 5 rooms per room type');
        return false;
    }
    
  }
    </script>
	    
	<script src='../js/administration.js'> </script>


	
</body>
    
    
    </html>