function section3Margin() {
    let x = document.forms["reservationform"]["noOfGuests"].value;
    let datepic =document.forms["reservationform"]["dateTime"].value;
    


    if (x == "" || datepic  == "" ) {
      
      return false;
    }
    else if(x<0 || x>500){
        alert('SORRY!! maximum no of guests is 500')
        return false;
    }
    else{
        if(cater==1){
            document.getElementById('section-3').setAttribute("style","style","top:100%;");
            document.getElementById('section-4').setAttribute("style","top:0%;");
            }
            else{
                document.getElementById('section-3').setAttribute("style","style","top:100%;");
                document.getElementById('section-6').setAttribute("style","top:0%;");
            }

    }
  }

  function section6Margin(){
    
    let x = document.forms["reservationform"]["address"].value;

    if (x == "") {
        alert('address line 1 should be filled');
      
        return false;
      }
    else{

    document.getElementById('section-6').setAttribute("style","top:100%;");
    
    document.getElementById('section-5').setAttribute("style","top:0%;");
    
    }
    
}
function section4Margin(){
  document.getElementById('section-4').setAttribute("style","style","top:100%;");
  document.getElementById('section-5').setAttribute("style","top:0%;")
}