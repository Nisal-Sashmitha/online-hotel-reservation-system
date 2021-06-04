<?php

	include 'connection.php';

	$rid=$_POST["rid"];
	$name=$_POST["name"];
	$contact=$_POST["contact"];
	$email=$_POST["email"];
	$dateTime=$_POST["date"];
	$address=$_POST["address"];
	$pid=$_POST["pid"];
	$vid=$_POST["vid"];
	$rstatus=$_POST["rstatus"];
	$noOfGuests=$_POST["guests"];
	$ldr=$_POST["ldr"];
	$ltr=$_POST["ltr"];
	$sldr=$_POST["sldr"];
	$sltr=$_POST["sltr"];
	$rpin=$_POST["rpin"];
	$venueID=0;
	if($noOfGuests>400 and $noOfGuests<=500){
		$venueID=3;

	}
	else if($noOfGuests>200){
		$venueID=4;
	}
	else if($noOfGuests>30){
		$venueID=1;
	}
	else if($noOfGuests>=0){
		$venueID=2;
	}
	
	if($pid >12){
		$venueID=6;
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

	$sql = "SELECT reservationId FROM reservation WHERE venueId='$venueID' and date between '$startTime' and '$endTime'";
    $result = $conn->query($sql);
    echo "<br>".$result->num_rows;
            
   
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "raw ";
			if($row["reservationId"]!=$rid){
				echo "<div id=alertCover><div id=alert><h1>SORRY! Time You Enterd has already booked please try other time</h1>
				<a href=editReservation.php?id='$rid'><button id=alert-ok-btn onclick='hideAlert()'>OK</button></a></div></div>";
			}	
			else{
				$sql="UPDATE reservation SET reservationId='$rid',Name='$name',contactNo='$contact',email='$email',date='$dateTime',address='$address',packageId='$pid',venueId='$venueID',reservationStatus='$rstatus',numOfGuest='$noOfGuests',LDR='$ldr',LTR='$ltr',SLDR='$sldr',SLTR='$sltr',reservationPin='$rpin' WHERE reservationId='$rid'";
 				
	
				if ($conn->query($sql) === TRUE) {
					echo "Updated";
					$_SESSION['updatedId']=$rid; 
					header("Location:reservation.php");
			
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
			}

            }
		    
        }
    }
    else if($result->num_rows==0){

        $sql="UPDATE reservation SET reservationId='$rid',Name='$name',contactNo='$contact',email='$email',date='$dateTime',address='$address',packageId='$pid',venueId='$venueID',reservationStatus='$rstatus',numOfGuest='$noOfGuests',LDR='$ldr',LTR='$ltr',SLDR='$sldr',SLTR='$sltr',reservationPin='$rpin' WHERE reservationId='$rid'";
 				
	
				if ($conn->query($sql) === TRUE) {
					echo "Updated";
					$_SESSION['updatedId']=$rid; 
					header("Location:reservation.php.php?id=$rid");
			
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
			}

    }