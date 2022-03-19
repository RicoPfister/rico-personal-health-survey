// validate form and give back return true (go to next question) or return false (stay at the current question and show alert label)

function validateForm(name){

    let pathCheck = document.forms["evaluation"];
    let pathAlert = document.getElementById("alert");
    
    if(!pathCheck[name].value || pathCheck[name].value < 0 || (document.getElementById("q4Text") && pathCheck["q4"].value < 11) || (!document.getElementById("q4Text").value && pathCheck["q4"].value == 11)) {

        if(typeof pathCheck["q4"] != 'undefined'){

                  
            if(!document.getElementById("q4Text").value && pathCheck["q4"].value < 11){return true;}

        } 
        
        pathAlert.innerHTML = "Angabe fehlt oder ist falsch!"; return false
    }

    return true;
}

// set slider-label

var slider = document.querySelector('.form-range');
var output = document.getElementById("sliderValue");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}