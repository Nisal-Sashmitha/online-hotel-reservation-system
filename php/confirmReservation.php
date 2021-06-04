<?php
    include 'connection.php';




    $packageID = $_POST['package'];
    $dateTime = $_POST['dateTime'];
    $noOfGuests = $_POST['noOfGuests'];
    $LDR = $_POST['LDR'];
    $LTR = $_POST['LTR'];
    $SLDR = $_POST['SLDR'];
    $SLTR = $_POST['SLTR'];
    $address = $_POST['address'];
    $name = $_POST['name'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
   
    

    
    $dbInsertDate = date('Y-m-d H:i:s', strtotime($dateTime));
  
   

    if($noOfGuests>400 and $noOfGuests<=500){
        $venueID=3;
    }
    else if($noOfGuests>200){
        $venueID=4;
    }
    else if($noOfGuests>30){
        $venueID=1;
    }
    else if($noOfGuests>0){
        $venueID=2;
    }
    
    $endTime=$dateTime;
    $date=date_create($endTime);
    date_add($date,date_interval_create_from_date_string("8 hours"));
    $endTime = date_format($date,"Y-m-d H:i:s");

    $startTime=$dateTime;
    $date=date_create($startTime);
    date_add($date,date_interval_create_from_date_string("-8 hours"));
    $startTime = date_format($date,"Y-m-d H:i:s");

    echo $startTime;

    $sql = "SELECT reservationId FROM reservation WHERE date between '$startTime' and '$endTime'";
    $result = $conn->query($sql);
    echo "<br>".$result->num_rows;


    if ($result->num_rows > 0) {

        echo "<h1>time slot is not available please try another time</h1>";
    
    } 
    else {
        
        $sql = "SELECT reservationId FROM reservation";
        $result = $conn->query($sql);
        $reservationId=$result->num_rows+1001;

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $reservationId=$row["reservationId"]+1;
            }
          } else {
            $reservationId=1000;
          }
    
    


        $sql="INSERT INTO `reservation` (`reservationId`, `name`, `contactNo`, `email`, `roomType`, `noOfRooms`, `date`, `address`, `eventType`, `packageId`, `venueId`) 
        VALUES ('$reservationId', '$name', '$contactNumber', '$email', 'dsfd', '$SLTR', '$dbInsertDate', '$address', 'weddding', '$packageID', '$venueID')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    

  $conn->close();
?>