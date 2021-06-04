        window.onscroll = function() {scrollFunction()};
        function homemarginchanger(){
            document.getElementById('header-image').setAttribute("style","height:95%;");
        }
        
        function scrollFunction() {
                 
          if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            document.getElementById("header-image").style.height = "0%";
          } else {
            document.getElementById("header-image").style.height = "95%";
          }
        }


//special details part


var venues=["../images/packages/venue9.jpg","../images/packages/venue10.jpg",
        "../images/packages/venue17.jpg","../images/packages/venue11.jpg",];

var venuePara=["Royal Grove is tailor - made for family gatherings and other special occasions which is located at the 2nd  floor of the hotel."
                ,"Boss Room is private and comfortable small venue for board meetings and other private gatherings which is with 600m2 space"
                
                ,"Green Acres is an outdoor venues , popular choice for open - air wedding receptions , cocktail parties & birthday parties which is with 1000m2 space."
                ,"The  Victorian is one of the most using venue which is located at the 5th floor of the hotel. Ideal for weddings , home coming occasions & batch parties."];        

var accomodation=["../images/specialDetails/accomodations/a1.jpg","../images/specialDetails/accomodations/a2.jpg",
"../images/specialDetails/accomodations/a3.jpg","../images/specialDetails/accomodations/a4.jpg"];

var accomodationPara=[" Superior room <br>Size - Sq.ft. 252.10 <br>Occupancy - 3 adults maximum or 2 children (below 12 years) & 2 adults"
,"deluxe room <br>Size - Sq.ft. 252.10 <br>Occupancy - 3 persons maximum",
"premium room <br>Size - Sq.ft. 465 <br>Occupancy - 3 adults maximum or 2 children (below 12 years) & 2 adults"
," executive room <br>Size - Sq.ft. 252.10 <br>Occupancy - 3 adults maximum or 2 adults & 2 children (below 12 years)"];

var offers=["../images/packages/venue9.jpg","../images/specialDetails/accomodations/a3.jpg"];

var offerspara=["25% off for loyalty users","75% off for accomodations book with events"];


       
var venueIndex=0;
var accomodationIndex=0 
var offersindex=0;

//venue and accomodation image styles initialization
document.getElementById('special-oVenue').setAttribute("style","margin-left:0%;");
document.getElementById('special-oVenue-p').setAttribute("style","margin-left:0%;");

document.getElementById('special-accomadations').setAttribute("style","margin-left:0%;");
document.getElementById('special-accomadations-p').setAttribute("style","margin-left:0%;");

function changeImage(){
    
    //venue part
    document.getElementById('special-oVenue').setAttribute("src",venues[venueIndex]);
    document.getElementById('special-oVenue').setAttribute("style","margin-left:0%;");
    document.getElementById('special-oVenue-p').innerHTML=venuePara[venueIndex];
    document.getElementById('special-oVenue-p').setAttribute("style","margin-left:0%;");
    setTimeout(() => {
        document.getElementById('special-oVenue').setAttribute("style","margin-left:-100%;");
        document.getElementById('special-oVenue-p').setAttribute("style","margin-left:-100%;");
        
    }, 5900);
    venueIndex++;
    if(venueIndex>=4){ venueIndex=0;}

    //accomodations part
    document.getElementById('special-accomadations').setAttribute("src",accomodation[accomodationIndex]);
    document.getElementById('special-accomadations').setAttribute("style","margin-left:0%;");
    document.getElementById('special-accomadations-p').innerHTML=accomodationPara[accomodationIndex];
    document.getElementById('special-accomadations-p').setAttribute("style","margin-left:0%;");

    setTimeout(() => {
        document.getElementById('special-accomadations').setAttribute("style","margin-left:-100%;");
        document.getElementById('special-accomadations-p').setAttribute("style","margin-left:-100%;");
        
    }, 5900);
    accomodationIndex++;
    if(accomodationIndex>=4){ accomodationIndex=0;}


    document.getElementById('special-specialOffers').setAttribute("src",offers[offersindex]);
    document.getElementById('special-specialOffers').setAttribute("style","margin-left:0%;");
    document.getElementById('special-specialOffers-p').innerHTML=offerspara[offersindex];
    document.getElementById('special-specialOffers-p').setAttribute("style","margin-left:0%;");
    setTimeout(() => {
        document.getElementById('special-specialOffers').setAttribute("style","margin-left:-100%;");
        document.getElementById('special-specialOffers-p').setAttribute("style","margin-left:-100%;");
        
    }, 5900);
    offersindex++;
    if(offersindex>=2){ offersindex=0;}




  }


setInterval(changeImage, 6000);
setTimeout(() => {
    
    document.getElementById('special-accomadations').setAttribute("style","margin-left:-100%;");
    
}, 5900);



//news change
document.getElementById('highLightsAndNews-p').innerHTML="<h4>Hotel Royal plan to launch spa opportunities in 2021 </h4>Hotel Royal have planned to open a luxury spa with number of facilities which includes body massage, hydrotherapy bath treatment, stone massage and more options to choose. Come and get the experience of signature treatments and spa packages available at our hotel in next year.";
document.getElementById('highLightsAndNews-img').setAttribute("src","../images/spaNews.jpg");
var news=["../images/aniverseryNews.jpg","../images/spaNews.jpg"];

var newspara=["<h4>Hotel Royal celebrates 10th anniversary</h4> Hotel Royal has launched new facilities and opportunities for celebrating its 10th birthday. How ever guests will have to move quickly,  as the deals are only open for a limites time period.",
"<h4>Hotel Royal plan to launch spa opportunities in 2021 </h4>Hotel Royal have planned to open a luxury spa with number of facilities which includes body massage, hydrotherapy bath treatment, stone massage and more options to choose. Come and get the experience of signature treatments and spa packages available at our hotel in next year.",];



var newsindex=0;

//venue and accomodation image styles initialization
document.getElementById('highLightsAndNews-img').setAttribute("style","margin-left:0%;");
document.getElementById('highLightsAndNews-p').setAttribute("style","margin-left:0%;");



function newschange(){
    
    //news and highlight part
    


    document.getElementById('highLightsAndNews-img').setAttribute("src",news[newsindex]);
    document.getElementById('highLightsAndNews-img').setAttribute("style","margin-left:0%;");
    document.getElementById('highLightsAndNews-p').innerHTML=newspara[newsindex];
    document.getElementById('highLightsAndNews-p').setAttribute("style","margin-left:0%;");
    setTimeout(() => {
        document.getElementById('highLightsAndNews-img').setAttribute("style","margin-left:-100%;");
        document.getElementById('highLightsAndNews-p').setAttribute("style","margin-left:-100%;");
        
    }, 5900);
    newsindex++;
    if(newsindex>=2){ newsindex=0;}




  }


setInterval(newschange
  , 6000);
setTimeout(() => {
    
    document.getElementById('special-accomadations').setAttribute("style","margin-left:-100%;");
}, 5900);