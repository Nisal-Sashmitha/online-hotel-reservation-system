<?php
	
	include'config.php';

?>

<?php
	
	$recordid=$_GET['id'];
	
	$sql="DELETE FROM package WHERE packageID=$recordid";
	
	if($con->query($sql))
	{
		header("location:packages.php");
	}
	else
	{
		echo "ERROR!";
	}
	
	$con->close();

?>