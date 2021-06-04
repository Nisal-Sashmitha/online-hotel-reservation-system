<?php
session_start();
include 'connection.php';

    
    $loyaltyID = $_POST['loyaltyID'];
    $password = $_POST['password'];
        
        
    
      $sql ="SELECT * from loyaltyholder where LoyaltyID='$loyaltyID' ";
      $result=$conn->query($sql);

      echo $result->num_rows;
    

      if($result->num_rows > 0)
      {
          while($row=$result->fetch_assoc())
          {
              $LoyaltyID= $row["LoyaltyID"];
              $userName= $row["username"]; 
              $contatNumber= $row["contactNumber"];
              $email= $row["email"];
              $loyaltyPoints= $row["loyaltyPoints"];
              $password1= $row["password"];
              $check=$row["accountCheck"];

              if("$password"== "$password1"){
                  echo "logged IN";

                 $_SESSION['accountcheck']=$check;

                  $_SESSION['loyaltyID']= $LoyaltyID;
                  

                  header("location:account.php");

              }
              else{
                  echo "invalid password";
                  header("location:SignIn.php?error=false");
              }

          }

      }else{
          echo "ID is not matching";
          header("location:SignIn.php?error=true");
      }

      ?>
<?php




