function validateForm(name){

    let pathCheck = document.forms["evaluation"];
    let pathAlert = document.getElementById("alert");

    if(!pathCheck[name].value || document.getElementById("q4Text").value == "") {

        if(typeof pathCheck["q4"] !== 'undefined'){
        
        if(document.getElementById("q4Text").value === "" && pathCheck["q4"].value < 11){return true;}

        }

       
           
      
      

        pathAlert.innerHTML = "Angabe fehlt oder ist falsch!"; return false
    }

    

    return true;
}