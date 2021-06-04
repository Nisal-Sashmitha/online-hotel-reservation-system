<?php
	
	include 'config.php';

?>

<?php
	
	$recordid=$_GET['id'];
	
	$sql="DELETE FROM venue WHERE venueID=$recordid";
	
	if($con->query($sql))
	{
		header("location:venues.php");
	}
	else
	{
		echo "ERROR!";
	}
	
	$con->close();

?>