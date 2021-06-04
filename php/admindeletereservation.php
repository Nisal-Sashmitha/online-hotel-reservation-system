<?php
	
	include 'connection.php';
	

	
	$recordid=$_GET['id'];

	

	
	
	

	$sql="DELETE FROM reservation WHERE reservationId=$recordid";
	
	if($conn->query($sql))
	{
		
		header("location:../php/reservation.php");
	}
	else
	{
		echo "ERROR!";
	}
	
	$conn->close();


?>