<?php

include 'survey_questions_answers.php';

session_start();

// go to current/next/previous question

global $i;

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
       
    $GLOBALS['inputVariationForm'] ="<label for='range' class='form-label'>Wählen Sie einen Wert zwischen 1 und 5</label><br><br>
    <div class='rangeWidth'><div class='bubble' id='bubble'></div><input type='range' class='range' id='range' min='1' max='5' name='q$i' id='q$i'>

    <div class='d-flex justify-content-between'><small class='text-muted'>Überhaupt nicht gesund</small><small class='text-muted'>Extrem gesund</small></div></div>";      
    break;
    
    // question 2: check

    case "q2":

    $GLOBALS['inputVariationForm'] =
    
    "<div class='form-check'>
      <input class='form-check-input' type='radio' name='q$i' value='1' id='q$i'>
      <label class='form-check-label' for='q2'>Ja</label>
    </div>
    <div class='form-check'>
      <input class='form-check-input' type='radio' name='q$i' value='0' id='q$i'>
      <label class='form-check-label' for='q2'>Nein</label>
    </div>";      
    break;

    // question 3: range

    case "q3":
    
    $GLOBALS['inputVariationForm'] ="<label for='range' class='form-label'>Wählen Sie einen Wert zwischen 1 und 5</label><br><br>
    <div class='rangeWidth'><div class='bubble' id='bubble'></div><input type='range' class='range' id='range' min='1' max='5' name='q$i' id='q$i'>
    <div class='d-flex justify-content-between'><small class='text-muted'>Überhaupt nicht wichtig</small><small class='text-muted'>Sehr wichtig</small></div></div>";
    break;

    // check

    case "q4":

    $q4Array = ["Gewichte heben" => "1", "Gehen" => "2", "Wandern" => "3", "Joggen" => "4", "Rennen" => "5", "Schwimmen" => "6", "Tanzen" => "7", "Aerobics" => "8", "Pilates" => "9", "Team Sport" => "10"];
    
    $GLOBALS['inputVariationForm'] = 

      "<div class='form-check'>
        <input class='form-check-input' type='radio' name='q4' value='0' id='q4' checked>
        <label class='form-check-label' for='q4'>Keine zusätzliche körperliche Aktivität</label>
      </div>";
    
    foreach($q4Array as $key => $val){

      $GLOBALS['inputVariationForm'] .=      
    
      "<div class='form-check'>
        <input class='form-check-input' type='radio' name='q$i' value=$val id='q$i'>
        <label class='form-check-label' for='q$i'>$key</label>
      </div>";

      }

    $GLOBALS['inputVariationForm'] .= 

    "<div class='form-check'>
      <input class='form-check-input' type='radio' name='q4' value='11' id='q4'>
      <input type='text' id='q4Text' placeholder='Andere gesunde Aktivität'></input>
    </div>";
          
    break;

    // question 5: range

    case "q5":
   
    $GLOBALS['inputVariationForm'] ="<label for='range' class='form-label'>Wählen Sie einen Wert zwischen 1 und 5</label><br><br>
    <div class='rangeWidth'><div class='bubble' id='bubble'></div><input type='range' class='range' id='range' min='1' max='5' name='q$i' id='q$i'>
    <div class='d-flex justify-content-between'><small class='text-muted'>Viel zu wenig</small><small class='text-muted'>gerade richtig</small><small class='text-muted'>viel zu viel</small></div></div>";
    break;

    // number

    case "q6":
    case "q7":
    case "q8":
    case "q9":
    case "q10":
    
    $GLOBALS['inputVariationForm'] .= 
    
    "Anzahl: <input class='number' type='number' name='q$i'>";                
    break;
  }
}

// create form

?>

<form name="evaluation" action="survey.php" methode="get" onsubmit="return validateForm('q<?=$i?>')";>

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

    <!-- bootstrap middle automatic centered col with border--> 

      <div class="evalCol col-lg-5 mt-3 p-3 border">
        <?=$inputVariationForm?>
        <p class="text-danger fw-bold" id="alert"></p>
      </div>

  <!-- bootstrap outer right invisible col--> 

  <div class="col-lg"></div>

  </div>

    <!-- bootstrap row3 buttons --> 

    <div class="row">

        <!-- bootstrap outer left invisible col--> 

        <div class="col-lg"></div>

          <!-- bootstrap middle automatic centered col--> 

            <div class="col-lg-5 mt-2 float-start">
              
            <button type="submit" class="btn btn-success float-start m-1">Weiter</button></form>
            
            <form action="survey.php" method="get"><button type="submit" name="deleteData" value="yes" class="btn btn-danger float-start m-1">Umfrage Löschen</button></form>
            
            <form form action="survey.php" method="get"><button type="submit" name="goBack" value="yes" class="btn btn-secondary m-1">Zurück</button></form>

            </div>
          
      <!-- bootstrap outer right invisible col--> 

      <div class="col-lg"></div>

    </div>

 