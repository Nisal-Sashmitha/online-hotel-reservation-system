<?php

session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/feedback.css">
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
                
                    <a href='../html/getYourLoyaltyCard.html' class='loyaltyCard' style="display: block;border:none;" >Get your<br> LOYALTY CARD</a>
                  
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

    <div class="pagecontainer">
    <form action='result.php' method='POST'>   
   
    
        <div class='section' id='section-1' >
            <div class='inner-body'>
                <div class=id>
                    <span class='content-name'><h2>How Satisfied Are You With Our sevice?</h2><br><br>
                    <label for="service-feedback-r-1" onclick='changeColor(1,1,sectionMargin)' ><img src="../images/feedback/star.png" class='feedback-star-img' id=str-1-1></label>
                    <label for="service-feedback-r-2" onclick='changeColor(1,2,sectionMargin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-1-2></label>
                    <label for="service-feedback-r-3" onclick='changeColor(1,3,sectionMargin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-1-3></label>
                    <label for="service-feedback-r-4" onclick='changeColor(1,4,sectionMargin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-1-4></label>
                    <label for="service-feedback-r-5" onclick='changeColor(1,5,sectionMargin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-1-5></label>
                </div>
                <div class="feedback-radio-btns" style=visibility:none;>
                        <input type="radio" name="service-feedback" id="service-feedback-r-1" value="1">
                        <input type="radio" name="service-feedback" id="service-feedback-r-2" value="2">
                        <input type="radio" name="service-feedback" id="service-feedback-r-3" value="3">
                        <input type="radio" name="service-feedback" id="service-feedback-r-4" value="4">
                        <input type="radio" name="service-feedback" id="service-feedback-r-5" value="5">
                            
                </div>    
                
            </div>
            
            
        </div>
        <div class='section' id='section-2' >
            <div class='inner-body'>
                <div class=id>
                    <span class='content-name'><h2>How Satisfied Are You With Our Venues?</h2><br><br>
                    <label for="Venues-feedback-r-1" onclick='changeColor(2,1,section2Margin)'><img src="../images/feedback/star.png" class='feedback-star-img'  id=str-2-1></label>
                    <label for="Venues-feedback-r-2" onclick='changeColor(2,2,section2Margin)'><img src="../images/feedback/star.png" class='feedback-star-img'  id=str-2-2></label>
                    <label for="Venues-feedback-r-3" onclick='changeColor(2,3,section2Margin)'><img src="../images/feedback/star.png" class='feedback-star-img'  id=str-2-3></label>
                    <label for="Venues-feedback-r-4" onclick='changeColor(2,4,section2Margin)'><img src="../images/feedback/star.png" class='feedback-star-img'  id=str-2-4></label>
                    <label for="Venues-feedback-r-5" onclick='changeColor(2,5,section2Margin)'><img src="../images/feedback/star.png" class='feedback-star-img'  id=str-2-5></label>
                </div>
                <div class="feedback-radio-btns" style=visibility:none;>
                        <input type="radio" name="Venues-feedback" id="Venues-feedback-r-1" value="1">
                        <input type="radio" name="Venues-feedback" id="Venues-feedback-r-2" value="2">
                        <input type="radio" name="Venues-feedback" id="Venues-feedback-r-3" value="3">
                        <input type="radio" name="Venues-feedback" id="Venues-feedback-r-4" value="4">
                        <input type="radio" name="Venues-feedback" id="Venues-feedback-r-5" value="5">
                            
                </div>
                
                 
                
            </div>
            
            
        </div>
        <div class='section' id='section-3' >
            <div class='inner-body'>
                <div class=id>
                    <span class='content-name'><h2>How Satisfied Are You With Our accomodation?</h2><br><br>
                    <label for="accomodation-feedback-r-1" onclick='changeColor(3,1,section3Margin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-3-1></label>
                    <label for="accomodation-feedback-r-2" onclick='changeColor(3,2,section3Margin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-3-2></label>
                    <label for="accomodation-feedback-r-3" onclick='changeColor(3,3,section3Margin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-3-3></label>
                    <label for="accomodation-feedback-r-4" onclick='changeColor(3,4,section3Margin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-3-4></label>
                    <label for="accomodation-feedback-r-5" onclick='changeColor(3,5,section3Margin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-3-5></label>
                </div>
                <div class="feedback-radio-btns" style=visibility:none;>
                        <input type="radio" name="accomodation-feedback" id="accomodation-feedback-r-1" value="1">
                        <input type="radio" name="accomodation-feedback" id="accomodation-feedback-r-2" value="2">
                        <input type="radio" name="accomodation-feedback" id="accomodation-feedback-r-3" value="3">
                        <input type="radio" name="accomodation-feedback" id="accomodation-feedback-r-4" value="4">
                        <input type="radio" name="accomodation-feedback" id="accomodation-feedback-r-5" value="5">
                            
                </div>
                
                
            </div>
            
        </div>
        <div class='section' id='section-4' >
            <div class='inner-body'>
                <div class=id>
                    <span class='content-name'><h2>How Satisfied Are You With Our packages?</h2><br><br>
                    <label for="package-feedback-r-1" onclick='changeColor(4,1,section4Margin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-4-1></label>
                    <label for="package-feedback-r-2" onclick='changeColor(4,2,section4Margin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-4-2></label>
                    <label for="package-feedback-r-3" onclick='changeColor(4,3,section4Margin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-4-3></label>
                    <label for="package-feedback-r-4" onclick='changeColor(4,4,section4Margin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-4-4></label>
                    <label for="package-feedback-r-5" onclick='changeColor(4,5,section4Margin)'><img src="../images/feedback/star.png" class='feedback-star-img' id=str-4-5></label>
                </div>
                <div class="feedback-radio-btns" style=visibility:none;>
                        <input type="radio" name="package-feedback" id="package-feedback-r-1" value="1">
                        <input type="radio" name="package-feedback" id="package-feedback-r-2" value="2">
                        <input type="radio" name="package-feedback" id="package-feedback-r-3" value="3">
                        <input type="radio" name="package-feedback" id="package-feedback-r-4" value="4">
                        <input type="radio" name="package-feedback" id="package-feedback-r-5" value="5">
                            
                </div>
                
                
            </div>
            
            
        </div>


        
        <div class='section' id='section-5' >
            <div class='inner-body'>
                <div class=id>
                    <span class='content-name'><h2>Do you have any sugestion on what we can do to provide<br> you with a better service?</h2></span><br><br>  
                </div>
                <div class='id'>
                    <input type=text name='edited' value='<?php if(isset($_GET['edited'])){echo $_GET['edited']; } ?>'  style="visibility:hidden;position:absolute;">
                    <input type=text name=id value='<?php echo $_GET['id'];?>'  style="visibility: hidden;position:absolute;">
                    <input type='text' class='suggetions' name='comments'>
                    
                </div>
                
            </div>
            <div class=submit-div>
               <input type='submit' value=submit>
            </div>
        </div>
    
    </form>


   




    

    </div>
    <footer>
		<table class = "footer-table">
		<tr>	
		<td class = "footer-data">
			<div class = "para1">
			
				<div class = "location">
					<img class = "icon" src = "../images/location.png" width = "20px" height = "20px" ; > &nbsp <font size = "2.5px" > Address : </font> <br> <br> &nbsp &nbsp &nbsp
					<span class = "text"> No.245/1 , Hotel Royal , Colombo 5 , Sri Lanka </span> 
					<br> <br>
				</div>
			
				<div class = "footer-contact">
					<img class = "icon" src = "../images/phone.png" width = "15px" height = "15px" ; > &nbsp <font size = "2.5px" > Hotline : </font> <br> <br> &nbsp &nbsp &nbsp
					<span class = "text"> 0118945607 <br> &nbsp &nbsp &nbsp 0119993866 </span> 
					<br> <br>
				</div>
				
				<div class = "email">
					<img class = "icon" src = "../images/email.png" width = "20px" height = "20px" ; > &nbsp <font size = "2.5px" > E-mail : </font> <br> <br> &nbsp &nbsp &nbsp
					<span class = "text"> hotelroyal@gmail.com </span> 
					<br> <br>
				</div>
				
			</div>
		</td>
			
			
		<td class = "footer-data">
				
			<div class = "social-media">
				<h3> CONNECT WITH US </h3>
				<div> <a href = "#"> <img class = "icon" id = "fb" src = "../images/fb.png" width = "25px" height = "25px" ; > </a> </div> &nbsp &nbsp 
				<div> <a href = "#"> <img class = "icon" id = "link" src = "../images/link.png" width = "25px" height = "25px" ; > </a> </div> &nbsp &nbsp 
				<div> <a href = "#"> <img class = "icon" id = "insta" src = "../images/insta.png" width = "20px" height = "20px" ; >  </a> </div> &nbsp &nbsp 
				<div> <a href = "#"> <img class = "icon" id = "twitter" src = "../images/twitter.png" width = "20px" height = "15px" ; > </a> </div>&nbsp &nbsp 
				<div> <a href = "#"> <img class = "icon" id = "utube" src = "../images/utube.png" width = "30px" height = "20px" ; > </a> </div>&nbsp &nbsp 
			</div>
			
		</td>
			<td class = "footer-data">
			<div class = "message">
				<h3> CONTACT US </h3>
				<div class = "content">
			
				<form action "#">
					<div class = "mail">
					<label> <font size = "2.5px" > E-mail </font> </label> <br> <br>
					<input type = "email" id = "footer-email" name = "email" pattern = "[a-zA-Z0-9._%+-*$]+@+[a-z0-9]+\.[a-z]{2,3}" required> <br> <br>
					</div>
				
					<div class = "cm"> <br> <br>
					<label> <font size = "2.5px" > Message </font> </label> <br> 
					<textarea rows = "2" cols = "20" required id = footer-text> </textarea>
					</div>
				
					<div class = "btn"> <br>
					<button class = "send" type = "submit"> <font size = "2.5px" > Send </font> </button>
					</div>
				</form>
				</div>
			</div>
			</td>
			<td class = "footer-data"> </td>
			</tr>
		</table>
		</footer>
    <script src='../js/feedback.js'> </script>
</body>
</html>