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

		$sql = "SELECT * FROM voucherCode WHERE voucherCode='$recordid'";
		$result = $con->query($sql);
		
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$vcode=$row["voucherCode"];
				$price=$row["price"];
				$sdate=$row["startDate"];
				$edate=$row["expireDate"];
				
			}
		}
		
		$con->close();
	
	?>
    
    <div class='pageContainer'>
	
	    <form method="POST" action="updateEditVoucher.php">
        <table>      
            <tr>
                <td><lable class=contentName>Voucher Code</td>
	            <td><input type="text" name="vcode" value="<?php echo $vcode ?>" readonly></td>
	        <tr>
                <td><lable class=contentName>Price </td>
	            <td><input type="text" name="price" value="<?php echo $price ?>" required pattern=[0-9]{0,99}></td>
	        <tr>
                <td><lable class=contentName>St Date</td>
	            <td><input type="text" name="sdate" value="<?php echo $sdate ?>" required></td>
	        <tr>
                <td><lable class=contentName>Expire Date</td>
	            <td><input type="text" name="edate" value="<?php echo $edate ?>" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="UPDATE" ></td>
            </tr>
        </table>        
        
	
        </form>
    </div>
        
   <script src='../js/administration.js'> </script>


   
</body>
    
    
    </html>