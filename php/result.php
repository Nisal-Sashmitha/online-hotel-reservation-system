
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/feedbackresult.css">
    <link rel = "stylesheet" href = "../css/footer.css">
    <title>Document</title>
</head>
<body>
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
                
                    <a href='../php/signUp.php' class='loyaltyCard' style="display: block;border:none;" >Get your<br> LOYALTY CARD</a>
                  
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
<div class="pageContainer">
		<?php
		include "connection.php";
		session_start();



	
		if(isset($_GET['edit'])){

			$id=$_GET['id'];

			header("Location:feedback.php?edited='edited'&id='$id'");



		} 
		else if($_POST['edited']=='edited'){
			$service_feedback = $_POST['service-feedback'];
			$Venues_feedback = $_POST['Venues-feedback'];
			$accomodation_feedback =  $_POST['accomodation-feedback'];
			$package_feedback =  $_POST['package-feedback'];
			$Avgstars =  ($service_feedback+$Venues_feedback+$accomodation_feedback+$package_feedback) /4;
			$comments = $_POST['comments'];
			$datetime =date("Y/m/d H:i:s");
			$recordId =$_POST['id'];
		
			$sql ="UPDATE cfeedback 
			SET dateandtime='$datetime', starsforservices='$service_feedback', starsforvenues='$Venues_feedback', starsforaccomodation='$accomodation_feedback',starsforpackages='$package_feedback',Avgstars='$Avgstars',comment='$comments'
			WHERE reservationID='$recordId'";

			if ($conn->query($sql) === TRUE) {
				echo "Record updated successfully<br>";

			  } else {
				echo "Error updating record: " . $conn->error;
			  }
		  
			  $sql = "SELECT * FROM cfeedback where reservationId = $recordId";
				$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			
			
			    while($row = $result->fetch_assoc()) {

					echo "<div class=commentDisplayContainer><div class=commentDisplay><table><tr> 
						<td class=feedbackCname>Customer:".$row["customerName"]."</td>
					</tr><tr><td>";
					$count=1;
					while($count<=$row["AVGstars"]){
					
						echo "<img src=../images/feedback/star.png width=30px height=30px>";
						$count+=1;
					}
					while($count<=5){
					
						echo "<img src=../images/feedback/blackstar.png width=30px height=30px>";
						$count+=1;
					}

					echo "<td class=feedbackCtimeWidth>".$row["dateAndTime"]."</td></tr>

						<tr><td  colspan=3 class=feedbackCcomment>".$row["comment"]."</td></tr></table>";








					echo "<div class=deleteEdit-btn-div><a href=result.php?edit=$recordId&id=$recordId><button class=deleteEdit-btn>Edit comment</button></a>
					<a href=result.php?delete=$recordId><button class=deleteEdit-btn>Delete comment</button></a>
					<a href=thankyou.php><button class=deleteEdit-btn>finish</button></a></div></div></div>";
			    }
			}
		
		

		}

		if(isset($_GET['delete'])){
			
			$recordId=$_GET['delete'];
			$sql = "DELETE FROM cfeedback WHERE reservationId =$recordId ";

			if($conn -> query($sql)){
				echo "<script> alert('Records deleted successfully!!!!')</script>";

			} 
			else{
				echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
			}
			header("Location:thankyou.php");

		

		}
		else if($_POST['edited']!='edited'){
			$name = 'nilumika';
			$datetime= "date";
			$service_feedback = $_POST['service-feedback'];
			$Venues_feedback = $_POST['Venues-feedback'];
			$accomodation_feedback =  $_POST['accomodation-feedback'];
			$package_feedback =  $_POST['package-feedback'];
			$Avgstars =  ($service_feedback+$Venues_feedback+$accomodation_feedback+$package_feedback) /4;
			$comments = $_POST['comments'];
			$recordId =$_POST['id'];
			$datetime =date("Y/m/d H:i:s");

			$sql ="SELECT name from reservation WHERE reservationId='$recordId'";
			$result = $conn->query($sql);
		
			if ($result->num_rows > 0) {
			
			    while($row = $result->fetch_assoc()) {
					$name=$row['name'];

			    }
			}

			echo "done";

			$sql = "INSERT INTO cfeedback (customerName,dateandtime, starsforservices, starsforvenues, starsforaccomodation,starsforpackages,Avgstars,comment,reservationId)
			VALUES ('$name', '$datetime', '$service_feedback', '$Venues_feedback', '$accomodation_feedback', '$package_feedback', '$Avgstars', '$comments','$recordId')";

			if ($conn->query($sql) === TRUE) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$sql = "SELECT * FROM cfeedback where reservationId = $recordId";
			$result = $conn->query($sql);
		
			if ($result->num_rows > 0) {
			
			
			    while($row = $result->fetch_assoc()) {

					echo "<div class=commentDisplayContainer><div class=commentDisplay><table><tr> 
						<td class=feedbackCname>Customer:".$row["customerName"]."</td>
					</tr><tr><td>";
					$count=1;
					while($count<=$row["AVGstars"]){
					
						echo "<img src=../images/feedback/star.png width=30px height=30px>";
						$count+=1;
					}
					while($count<=5){
					
						echo "<img src=../images/feedback/blackstar.png width=30px height=30px>";
						$count+=1;
					}

					echo "<td class=feedbackCtimeWidth>".$row["dateAndTime"]."</td></tr>

						<tr><td  colspan=3 class=feedbackCcomment>".$row["comment"]."</td></tr></table>";








					echo "<div class=deleteEdit-btn-div><a href=result.php?edit=$recordId&id=$recordId><button class=deleteEdit-btn>Edit comment</button></a>
					<a href=result.php?delete=$recordId><button class=deleteEdit-btn>Delete comment</button></a>
					<a href=thankyou.php><button class=deleteEdit-btn>finish</button></a></div></div></div>";
			    }

			}
		
		}
			mysqli_close($conn);


		?>
	</div>	