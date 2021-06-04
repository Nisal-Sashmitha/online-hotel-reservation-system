<?php
	 
	include 'config.php';

?>

<?php
	
	$recordid=$_GET['id'];
	
	$sql="DELETE FROM voucherCode WHERE voucherCode='$recordid'";
	
	if($con->query($sql))
	{
		header("location:voucher.php");
	}
	else
	{
		echo "ERROR!";
	}
	
	$con->close();

?>