// validate form and give back return true (go to next question) or return false (stay at the current question and show alert label)

function validateForm(name){

    let pathCheck = document.forms["evaluation"];
    let pathAlert = document.getElementById("alert");

    if(typeof pathCheck["age"] != 'undefined'){
                  
        if (document.getElementById("age").value < 1){
            pathAlert.innerHTML = "Alter muss mindestens 1 sein"; return false
        }

    }
   
    if(!pathCheck[name].value || pathCheck[name].value < 0 || (document.getElementById("q4Text") && pathCheck["q4"].value < 11) || (!document.getElementById("q4Text").value && pathCheck["q4"].value == 11)) {
 
        if (pathCheck[name].value < 0){
            pathAlert.innerHTML = "Eingabe darf nicht unter 0 sein"; return false
        }

        if(typeof pathCheck["q4"] != 'undefined'){
                  
            if(!document.getElementById("q4Text").value && pathCheck["q4"].value < 11){return true;}

        } 
        
        pathAlert.innerHTML = "Angabe fehlt oder ist falsch!"; return false
    }

    return true;
}

// set range thumb label bubble

const
	range = document.getElementById('range'),
	rangeV = document.getElementById('bubble'),
	setValue = ()=>{
		const
			newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
			newPosition = 10 - (newValue * 0.2);
		rangeV.innerHTML = `${range.value}`;
		rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
	};
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);
