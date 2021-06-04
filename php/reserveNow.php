<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/reserveNow.css">
    
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

    

    <!--page part-->
    
    
        <div id="reservtion-page-container">
        <!--select event-->
        <div class="section" id=section-1 >
            <h1>SELECT YOUR EVENT TYPE</h1>
            <div class="section-selecters">
            <label for="event-selecter-r-1" class="selecter" onclick='sectionWMargin(1)'><h1>WEDDING</h1></label>
            <label for="event-selecter-r-2" class="selecter" onclick='sectionMMargin(1)'><h1>MEETING & CONFERENCE</h1></label>
            <label for="event-selecter-r-3" class="selecter" onclick='sectionPMargin(1)'><h1>PARTY</h1></label>
            <label for="event-selecter-r-4" class="selecter" onclick='sectionCMargin(0)'><h1>CATERING</h1></label>
            </div>
        </div>    
        <!--package-->
        <div class="section" id=section-2-1>
            <h1>SELECT A PACKAGE</h1>
            <div class="section-selecters">
            <label for="package-selecter-r-1" class="selecter" onclick='section2Margin()'><h1>PLATINUM</h1></label>
            <label for="package-selecter-r-2" class="selecter" onclick='section2Margin()'><h1>GOLD</h1></label>
            <label for="package-selecter-r-3" class="selecter" onclick='section2Margin()'><h1>SILVER</h1></label>
            <label for="package-selecter-r-4" class="selecter" onclick='section2Margin()'><h1>BRONZE</h1></label>
            </div>
        </div>
        <div class="section" id=section-2-2>
            <h1>SELECT A PACKAGE</h1>
            <div class="section-selecters">
            <label for="package-selecter-r-5" class="selecter" onclick='section2Margin()'><h1>Star Delight</h1></label>
            <label for="package-selecter-r-6" class="selecter" onclick='section2Margin()'><h1>Golden Key</h1></label>
            <label for="package-selecter-r-7" class="selecter" onclick='section2Margin()'><h1>Silver Range</h1></label>
            <label for="package-selecter-r-8" class="selecter" onclick='section2Margin()'><h1>Visionary Vista</h1></label>
            </div>
        </div>
        <div class="section" id=section-2-3>
            <h1>SELECT A PACKAGE</h1>
            <div class="section-selecters">
            <label for="package-selecter-r-9" class="selecter" onclick='section2Margin()'><h1>Spring Fling</h1></label>
            <label for="package-selecter-r-10" class="selecter" onclick='section2Margin()'><h1>Golden Light</h1></label>
            <label for="package-selecter-r-11" class="selecter" onclick='section2Margin()'><h1>Silver Bliss</h1></label>
            <label for="package-selecter-r-12" class="selecter" onclick='section2Margin()'><h1>Cool Daze</h1></label>
            </div>
        </div>
        <div class="section" id=section-2-4>
            <h1>SELECT A PACKAGE</h1>
            <div class="section-selecters">
            <label for="package-selecter-r-13" class="selecter" onclick='section2Margin()'><h1>Taste Buds</h1></label>
            <label for="package-selecter-r-14" class="selecter" onclick='section2Margin()'><h1>Fresh Delight</h1></label>
            <label for="package-selecter-r-15" class="selecter" onclick='section2Margin()'><h1>Savory Nuts</h1></label>
            <label for="package-selecter-r-16" class="selecter" onclick='section2Margin()'><h1>Food Fusion</h1></label>
            </div>
        </div>
           
        
            
         
              <!--reservation form part-->
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" name='reservationform'>
                
                
                <div class="event">
                    <input type="radio" name="eventType" id="event-selecter-r-1" value="wedding">
                    <input type="radio" name="eventType" id="event-selecter-r-2" value="meeting&Conference">
                    <input type="radio" name="eventType" id="event-selecter-r-3" value="party">
                    <input type="radio" name="eventType" id="event-selecter-r-4" value="catering">    
                </div>
                <div class="packages">
                    <input type="radio" name="package" id="package-selecter-r-1" value="1">
                    <input type="radio" name="package" id="package-selecter-r-2" value="2">
                    <input type="radio" name="package" id="package-selecter-r-3" value="3">
                    <input type="radio" name="package" id="package-selecter-r-4" value="4">    
                
                    <input type="radio" name="package" id="package-selecter-r-5" value="5">
                    <input type="radio" name="package" id="package-selecter-r-6" value="6">
                    <input type="radio" name="package" id="package-selecter-r-7" value="7">
                    <input type="radio" name="package" id="package-selecter-r-8" value="8">    
                
                    <input type="radio" name="package" id="package-selecter-r-9" value="9">
                    <input type="radio" name="package" id="package-selecter-r-10" value="10">
                    <input type="radio" name="package" id="package-selecter-r-11" value="11">
                    <input type="radio" name="package" id="package-selecter-r-12" value="12">    
                
                    <input type="radio" name="package" id="package-selecter-r-13" value="13">
                    <input type="radio" name="package" id="package-selecter-r-14" value="14">
                    <input type="radio" name="package" id="package-selecter-r-15" value="15">
                    <input type="radio" name="package" id="package-selecter-r-16" value="16">    
                </div>
                <div class="section" id=section-3>  

                    <h1>Reservation form</h1>
                    <div class="form-body">          
                        <div class="form-body-element">
                            <span class="content-name">Date and starting time </span><br>
                            <input type="datetime-local"  name="dateTime" required >
                        </div>
                        <div class="form-body-element">
                            <span class="content-name">No Of Guests </span><br>
                            <input type="text" name="noOfGuests" pattern='[0-9]{0,3}' required> 
                        </div>
                        <div class="form-body-element">
                            <button class=sec-3-next-btn onclick='section3Margin()'>next</button>
                        </div>
                        
                    </div>

                </div>
                <div class="section" id=section-4>  

                    <h1>Reservation form</h1>
                    <div class="form-body">          
                        <div class="form-body-element">
                            <table class="form-body-element" >
                                
                                    <span class="content-name" style=color:gold;><br>you can attach rooms for for the event day here,
                                        with 75% discount without service<br><br><br></span>
                                
                                <tr>
                                    <th><span class="content-name">Room Type</span></th>
                                    <th><span class="content-name">No of Rooms</span></th>
                                </tr>
                                <tr><td >
                                    <span class="content-name">Luxery doubleBed rooms</span></td>
                                    <td >
                                        <select name="LDR" id="NoOfRooms" required>
                                            <option value="0" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="3">4</option>
                                            <option value="3">5</option>
                                        </select>
                                    </td>
                                </tr>
                            
                                <tr><td >
                                    <span class="content-name">Luxery two beds rooms</span></td>
                                    <td >
                                        <select name="LTR" id="NoOfRooms" required>
                                            <option value="0" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="3">4</option>
                                            <option value="3">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr><td >
                                    <span class="content-name">Semi Luxery doubleBed rooms</span></td>
                                    <td >
                                        <select name="SLDR" id="NoOfRooms" required>
                                            <option value="0" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="3">4</option>
                                            <option value="3">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr><td >
                                    <span class="content-name">Semi Luxery two beds rooms</span></td>
                                    <td >
                                        <select name="SLTR" id="NoOfRooms" required>
                                            <option value="0" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="3">4</option>
                                            <option value="3">5</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="form-body-element">
                            <button class=sec-4-next-btn onclick='section4Margin()'>next</button>
                        </div>
                        
                    </div>

                </div>
                <div class="section" id=section-6>

                    <div class="form-body-element">
                        <span class="content-name"><h3>Enter address for catering<br><br></h3></span>
                        <span class="content-name">Line 1:*<br><br></span><input type="text" name="address"><br><br>
                    </div>
                    <div class="form-body-element">
                        <button class=sec-6-next-btn onclick='section6Margin()'>next</button>
                    </div>
                </div>        


            <div class="section" id=section-5>

                <div class="form-body">

                    <div class="form-body-element">
                        <span class="content-name">Name*</span><br>
                        <input type="text" name="name" required>
                    </div>


                    <div class="form-body-element">
                        <span class="content-name">Contact Number*</span><br>
                        <input type="text" name="contactNumber" required>
                    </div>

                    <div class="form-body-element">
                        <span class="content-name">Email*</span><br>
                        <input type="email" name="email" required>
                    </div>
                 
                        
        
                    <div class="form-body-element">
                        <input type="submit" value= "submit" id=submit-btn name="submit">
                    </div>
                </div>
            </div>
            </form>
               
            
            
        </div>

        <?php
        ob_start();

            if(isset($_POST['submit'])){
                
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
                $pin =  rand(1000,9999);
                $eventType  = $_POST['eventType'];
            
                
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
                if($eventType ='catering'){
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
            
                    echo "<div id=alertCover><div id=alert><h1>SORRY! Time You Enterd has already booked please try other time</h1>
                    <button id=alert-ok-btn onclick='hideAlert()'>OK</button></div></div>";
                
                } 
                else {
                    


                    $sql = "SELECT reservationId FROM reservation";
                    $result = $conn->query($sql);
                    $max=1001;
                    $reservationId=0;
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $reservationId=$row["reservationId"];
                            
                            if($reservationId>=$max){
                                $max=$reservationId;
                            }
                        }
                      } 
                
                      echo "<br>".$max;
                      $max=$max+1;
            
            
                    $sql="INSERT INTO `reservation` (`reservationId`, `name`, `contactNo`, `email`, `date`, `address`, `packageId`, `venueId`, `numOfGuest`, `LDR`, `LTR`, `SLDR`, `SLTR`,`reservationPin`)
                     VALUES ('$max', '$name', '$contactNumber', '$email', '$dbInsertDate', '$address', '$packageID', '$venueID', '$noOfGuests', '$LDR', '$LTR', '$SLDR', '$SLTR','$pin')";

                
                    if ($conn->query($sql) === TRUE) {
                        echo "<div id=alertCover><div id=alert><h1>You Can make the reservation all resources are available as your wish</h1>
                        <div>
                        <a href=voucherCode.php?id=$max><button id=alert-ok-btn >reserve hotel</button></a>
                        <a href=deleteReservation.php?id=$max><button id=alert-ok-btn >I'll come back later</button></a></div></div></div>";
                        
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            
            }

            ob_end_flush();

        ?>


     <script src="../js/reserveNow.js"></script>   
    
    <script>
        function hideAlert(){
            document.getElementById('alertCover').setAttribute("style","top:-100%;");
        }
        function sectionWMargin(i){
            document.getElementById('section-1').setAttribute("style","top:100%;");
            document.getElementById('section-2-1').setAttribute("style","top:7%;");      
            window.cater=i;
            
        }
        function sectionMMargin(i){
            document.getElementById('section-1').setAttribute("style","top:100%;");
            document.getElementById('section-2-2').setAttribute("style","top:7%;");      
            window.cater=i;
            
        }
        function sectionPMargin(i){
            document.getElementById('section-1').setAttribute("style","top:100%;");
            document.getElementById('section-2-3').setAttribute("style","top:7%;");      
            window.cater=i;
            
        }
        function sectionCMargin(i){
            document.getElementById('section-1').setAttribute("style","top:100%;");
            document.getElementById('section-2-4').setAttribute("style","top:7%;");      
            window.cater=i;
            
        }
        
        function section2Margin(){
            document.getElementById('section-2-1').setAttribute("style","style","top:100%;");
            document.getElementById('section-2-2').setAttribute("style","style","top:100%;");
            document.getElementById('section-2-3').setAttribute("style","style","top:100%;");
            document.getElementById('section-2-4').setAttribute("style","style","top:100%;");
            document.getElementById('section-3').setAttribute("style","top:0%;");
        }
           
    </script>
    

    </body>
    
    </html>