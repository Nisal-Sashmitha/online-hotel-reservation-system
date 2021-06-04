<?php

    session_start();
    echo $loyaltyID=$_SESSION['loyaltyID'];



include 'connection.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT loyaltyID, username, contactnumber, email, loyaltyPoints FROM loyaltyholder WHERE LoyaltyID='$loyaltyID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo " loyaltyID: " . $row["loyaltyID"].
         " Name: " . $row["username"].  
         " Email: " . $row["email"]. 
         " LoyaltyPoints:" . $row["loyaltyPoints"].
         "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>