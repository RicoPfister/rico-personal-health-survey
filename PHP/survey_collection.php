<?php

// qestions text array

$questionPhrases = [
"q1" => "Frage 1: Wie gesund sind Sie körperlich?",
"q2" => "Frage 2: Nehmen Sie Nahrungsergänzungsmittel?",
"q3" => "Frage 3: Wie wichtig ist köperliche Aktivität für Sie?",
"q4" => "Frage 4: Welche zusätzliche körperliche Aktivität betreiben Sie am meisten?",
"q5" => "Frage 5: Haben Sie das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?",
"q6" => "Frage 6: An einem typischen Tag: Wie viele Ihrer Malzeiten oder Snacks enthalten Kohlenhydrate?",
"q7" => "Frage 7: An einem typischen Tag: Wie viele Ihrer Malzeiten oder Snacks enthalten Protein?",
"q8" => "Frage 8: An einem typischen Tag: Wie viele Ihrer Malzeiten oder Snacks enthalten Gemüse?",
"q9" => "Frage 9: An einem typischen Tag: Wie viele Ihrer Malzeiten oder Snacks enthalten Früchte?",
"q10" => "Frage 10: An einem typischen Tag: Wie viele Ihrer Malzeiten kommen aus der Mikrowelle oder sind schon fertig zubereitet?"
];

session_start();

// go to current/next/previous question

for($i=1; $i<=count($questionPhrases); $i++){

  if($_SESSION["q$i"] == ""){

      if($_SESSION["goBack"]){
        $i--;
        $question = $questionPhrases["q$i"];
        unset($_SESSION["goBack"]);
        array_pop($_SESSION);
        header("Refresh:0; url=survey.php");

      } else {$question = $questionPhrases["q$i"];}
    
    inputVariation($i);
    break;
  }

};

// choose form input

function inputVariation($i){

  switch("q$i"){

    // question 1: range

    case "q1":
    
    $GLOBALS['inputVariationForm'] = "Überhaupt nicht gesund<input type='range' class='form-range' id='customRange1' min='1' max='5' name='q$i'>Extrem gesund";      
    break;
    
    // question 2: check

    case "q2":

    $GLOBALS['inputVariationForm'] =
    
    "<div class='form-check'>
      <input class='form-check-input' type='radio' name='q2' value='1' id='flexRadioDefault1'>
      <label class='form-check-label' for='check1'>Ja</label>
    </div>
    <div class='form-check'>
      <input class='form-check-input' type='radio' name='q2' value='0' id='flexRadioDefault2'>
      <label class='form-check-label' for='check1'>Nein</label>
    </div>";      
    break;

    // question 3: range

    case "q3":

    $GLOBALS['inputVariationForm'] = "Überhaupt nicht wichtig<input type='range' class='form-range' id='customRange1' min='1' max='5' name='q$i'>Sehr wichtig";      
    break;    

    // check

    case "q4":

    $q4Array = ["Keine zusätzliche körperliche Aktivität" => "0", "Gewichte heben" => "1", "Gehen" => "1", "Wandern" => "1", "Joggen" => "1", "Rennen" => "1", "Schwimmen" => "1", "Tanzen" => "1", "Aerobics" => "1", "Pilates" => "1", "Team Sport" => "1"];
    
    foreach($q4Array as $key => $val){

      $GLOBALS['inputVariationForm'] .=      
    
      "<div class='form-check'>
        <input class='form-check-input' type='radio' name='q4' value=$val id='check2'>
        <label class='form-check-label' for='check2'>$key</label>
      </div>";

      }

    $GLOBALS['inputVariationForm'] .= 

    "<div class='form-check'>
      <input class='form-check-input' type='radio' name='q4' value='1'>
      <input type='text' placeholder='Andere gesunde Aktivität'></input>
    </div>";
          
    break;

    // question 5: range

    case "q5":

    $GLOBALS['inputVariationForm'] = "Viel zu wenig<input type='range' class='form-range' id='customRange1' min='1' max='5' name='q$i'>viel zu viel";      
    break;    

    // number

    case "q6":
    case "q7":
    case "q8":
    case "q9":
    case "q10":
    
    $GLOBALS['inputVariationForm'] .= 
    
    "<input class='number' type='number' name='q$i'>";                
    break;
  }
}

// create form

/*echo 

"<form action='survey.php' method='get'>
  <div class='row justify-content-center'>
    <div class='col-6 mb-3'>
      <label for='question'>".$question."</label>
    </div>
  </div>
  <div class='row justify-content-center'>
    <div class='col-6 mb-3'>". $inputVariationForm ."</div>
  </div>
  <div class='row justify-content-center'>
    <div class='col-1 mb-3 text-center'>
      <button>Weiter</button>
    </div>
  </div>
</form>

<form action='survey.php' method='get'>
  <input type='hidden' name='deleteData' value='yes'>
  <div class='row justify-content-center'>
    <div class='col-2 mb-3 text-center'>
      <button>Daten löschen</button>
    </div>
  </div>
</form>

<form action='survey.php' method='get'>
  <input type='hidden' name='goBack' value='yes'>
  <div class='row justify-content-center'>
    <div class='col-2 mb-3 text-center'>
      <button>Zurück</button>
    </div>
  </div>
</form>"

*/

?>

<form action="survey.php" methode="get">

<!-- bootstrap container-->

  <!-- bootstrap row1 title evaluation question--> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

      <div class="col-lg"></div>

        <!-- bootstrap middle automatic centered colored col--> 

        <div class="evalTitle col-lg-5">
          <h5 class="m-0"><?=$question?></h5>
        </div>

    <!-- bootstrap outer right invisible col--> 

    <div class="col-lg"></div>

  </div>

    <!-- bootstrap row2 form --> 

    <div class="row">

<!-- bootstrap outer left invisible col--> 

<div class="col-lg"></div>

  <!-- bootstrap middle automatic centered colored col--> 

    <div class="evalCol col-lg-5 mt-3 border">
      <?=$inputVariationForm?>
    </div>

<!-- bootstrap outer right invisible col--> 

<div class="col-lg"></div>

</div>

  <!-- bootstrap row3 buttons --> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

      <div class="col-lg"></div>

        <!-- bootstrap middle automatic centered col--> 

            <div class="col-lg"></div>
              <div class="col-lg-5 mt-3">
                <button class="me-2">Weiter</button>
                <button class="me-2">Weiter</button>
                <button>Weiter</button>
              </div>
            <div class="col-lg"></div> 

    <!-- bootstrap outer right invisible col--> 

    <div class="col-lg"></div>

  </div>

  </form>