
<?php
include 'connection.php';

?>

<html>
<head>
<meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/payments.css">
    <link rel="stylesheet" href="../css/footer.css">
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

<?php

   $recordid1=$_GET['rid'];    
    $recordid3=$_GET['lid'];    

    $loyaltyPoints=1;
    $sql="SELECT * FROM loyaltyholder WHERE loyaltyID='$recordid3'";
    $record1=$conn->query($sql);

        if($record1->num_rows>0)
        {
            while($row=$record1->fetch_assoc())
            {
                $LoyaltyID= $row["LoyaltyID"];
                $userName= $row["username"]; 
                $contatNumber= $row["contactNumber"];
                $email= $row["email"];
                $loyaltyPoints= $row["loyaltyPoints"];
                $password1= $row["password"];
                $check=$row["accountCheck"];

            }
        }
        
        $sql="SELECT * FROM payment WHERE paymentID='$recordid1'";
        $record=$conn->query($sql);
        $totalamount=0;
        if($record->num_rows>0)
        {
            while($row=$record->fetch_assoc())
            {
                $paymentid= $row["paymentID"];
                $rid= $row["reservationId"]; 
                $totalamount= $row["totalAmount"];
                $paidamount= $row["paidAmount"];
                $date= $row["DateTime"];
                $status= $row["paymentStatus"];

            }
        }

          
        if($totalamount>=50000)
        {
            $loyaltyPoints=$loyaltyPoints + 1;
        }
        else if($totalamount>=100000)
        {
            $loyaltyPoints=$loyaltyPoints + 2;
        }
        else if($totalamount>=200000)
        {
            $loyaltyPoints=$loyaltyPoints + 4;
        }

        else if($totalamount>300000)
        {
            $loyaltyPoints=$loyaltyPoints + 6;
        }
        else if($totalamount>=500000)
        {
            $loyaltyPoints=$loyaltyPoints + 10;
        }

        else {
            $loyaltyPoints=$loyaltyPoints + 0;
        }

         $sql="UPDATE loyaltyholder SET loyaltyPoints='$loyaltyPoints' where LoyaltyID='$recordid3'";
         $conn->query($sql);

echo "<div class='section' id='section-3' >
            <form action='paymentUpdate.php?rid=$recordid1' method='POST'>
                <div class='inner-body'>
                    <div class=id>
                        <span class='content-name'><h4>Select Payment Method</h4></span><br><br>
                            <div class='status-radio-btns'>
                                <span class='content-name'>Master Card</span> <input type='radio' name='payment-method' value='master'>
                                <span class='content-name'>Visa Card</span> <input type='radio'name='payment-method' value='visa'>
                            </div>
                    </div>
                    <div class=id>
                    <span class='content-name'><h4>Select Payment Method</h4></span><br><br>
                        <span class='content-name'>Card Number</span><br>
                       <input type='text' name='loyaltyID' ><br>
                    </div>
                    <div class=id>
                        <span class='content-name'>Expiry date</span><br>
                        <input type='text' name='loyaltyID' style='width:90px;' placeholder='MM' size='2'><span class='content-name'>/</span>
                        <input type='text' name='loyaltyPin' style='width:90px;' placeholder='YY' size='2'><br>
                    </div>
                    <div class='id'>
                        <span class='content-name'>Security Code</span><br>
                        <input type='text' name='voucherCode' size='3' style='width:90px;'><br><br>
                        
                    </div>
                    <input type='submit' class='pay-btn' value='Pay' >
                    
                </div>
                
            </form>
            
        </div>";

?>        

        