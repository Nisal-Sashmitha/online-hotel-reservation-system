<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/addEditForm.css">
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
            
    </table>
    <br><br><br><br><br>

<?php

session_start();
include 'connection.php';

$sql ="SELECT * FROM loyaltyholder WHERE LoyaltyId=$_SESSION[loyaltyID]";

$results=$conn->query($sql);

if($results->num_rows>0)
{
    while($row=$results->fetch_assoc())
    {
        $loyaltyid=$row["LoyaltyID"];
        $user=$row["username"];
        $user=$row["username"];
        $email=$row["email"];
        $contact=$row["contactNumber"];
        $loyalpoints=$row["loyaltyPoints"];

    }
}



?>

<div class='pageContainer'>
    <form method="POST" action="updateEditLoyalCustomer.php">
        <table >
                <tr>
                    <td><label class=contentName>Loyalty ID</label></td>
	                <td><input type="text" name="loyaltyid" value='<?php echo $loyaltyid ?>'' readonly ></td>
                </tr>
                <tr>
                    <td><label class=contentName>USer Name</label></td>
	                <td><input type="text" name="user" value='<?php echo $user ?>'' ></td>
                </tr>
                <tr>
                    <td><label class=contentName>Email</label></td>
	                <td><input type="email" name="email" value='<?php echo $email ?>'></td>
                </tr>
                <tr>
                    <td><label class=contentName>Contact Number</label></td>
	                <td><input type="text" name="contact" value=<?php echo $contact ?> pattern="[0-9]{10}"></td>
                </tr>
                <tr>
                    <td><label class=contentName>Loyalty Points</label></td>
	                <td><input type="text" name="loyaltypoints" value=<?php echo $loyalpoints ?> readonly></td>
                </tr>
                <tr>
                    <td><input type="submit" value="UPDATE" name="butnsubmit"></td>
                </tr>
        </table>
    </form>
</div>    


</body>
</html>