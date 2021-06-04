
function passwordmatching() {
    let x = document.forms["edit-password"]["newPassword"].value;
    let y =document.forms["edit-password"]["Re-newPassword"].value;
    
    if (x != y) {
        alert('new password and re-enterd password are not matching');
      return false;
    }

  }

  function editAccountDetailsMargin(){
    document.getElementById('section-1').setAttribute("style","top:100%;");
    document.getElementById('editAccountDetails').setAttribute("style","top:0%;");      
    
}
function editusernameMargin(){
    document.getElementById('editAccountDetails').setAttribute("style","top:100%;");
    document.getElementById('edit-user-name').setAttribute("style","top:0%;");      
    
}

function edituseremailMargin(){
    document.getElementById('editAccountDetails').setAttribute("style","top:100%;");
    document.getElementById('edit-user-email').setAttribute("style","top:0%;");      
    
}


function editusercontactNumberMargin(){
    document.getElementById('editAccountDetails').setAttribute("style","top:100%;");
    document.getElementById('edit-user-contactNumber').setAttribute("style","top:0%;");
    
}
function edituseraddressMargin(){
    document.getElementById('editAccountDetails').setAttribute("style","top:100%;");
    document.getElementById('edit-user-address').setAttribute("style","top:0%;");
    
}
function edituserpasswordMargin(){
    document.getElementById('editAccountDetails').setAttribute("style","top:100%;");
    document.getElementById('edit-user-password').setAttribute("style","top:0%;");
    
}