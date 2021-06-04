<?php
session_start();
include 'connection.php';

$sql="DELETE FROM loyaltyholder WHERE LoyaltyID=$_SESSION[loyaltyID]";

if($conn->query($sql))
{
    header("location:signIn.php");
}

else{
    echo "Error".$conn->error;
}




?>