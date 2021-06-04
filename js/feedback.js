function changeColor(section,value,method){
    let value2=value;

    for(value;value<=5;value++){
         let imgId="str-"+section+"-"+value;
         document.getElementById(imgId).setAttribute("style","filter: grayscale(10);");

        
     }
    
     for(value2;value2>=1;value2--){
         let imgId="str-"+section+"-"+value2;
         document.getElementById(imgId).setAttribute("style","filter: grayscale(0);");

        
     }
     setTimeout(method
         
     , 300);
     
}


function sectionMargin(){
    document.getElementById('section-1').setAttribute("style","top:200%;");
    document.getElementById('section-2').setAttribute("style","top:0%;");      
    
}
function section2Margin(){
    document.getElementById('section-2').setAttribute("style","top:200%");
    document.getElementById('section-3').setAttribute("style","top:0%;");
    
}
function section3Margin(){
    document.getElementById('section-3').setAttribute("style","top:200%");
    document.getElementById('section-4').setAttribute("style","top:0%;");
    
}
function section4Margin(){
    document.getElementById('section-4').setAttribute("style","top:200%");
    document.getElementById('section-5').setAttribute("style","top:0%;");
    
}


