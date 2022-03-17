<?php

session_start();

// data evaluation (without including age)

$evaluationResult = 0;

function evaluationData(){  

  global $evaluationResult;

  if($_SESSION["q1"]==3) $evaluationResult+=1;
  if($_SESSION["q2"]==0) $evaluationResult+=1;
  if($_SESSION["q3"]==3) $evaluationResult+=1;
  if($_SESSION["q4"]==1) $evaluationResult+=1;
  if($_SESSION["q5"]==3) $evaluationResult+=1;
  if($_SESSION["q6"]>1) $evaluationResult+=1;
  if($_SESSION["q7"]>1) $evaluationResult+=1;
  if($_SESSION["q8"]>0) $evaluationResult+=1;
  if($_SESSION["q9"]>0) $evaluationResult+=1;
  if($_SESSION["q10"]==0) $evaluationResult+=1;
  
  }

evaluationData();

if($evaluationResult>8){
  $evaluationResultText = "Sie scheinen <strong>überaus gesund</strong> zu leben und gehören damit zu den 4% der Menschen, die an dieser Umfrage 
  teilgenommen haben. Weiter so! Diese Auswertung ersetzt nicht die fundierte Meinung eines Arztes oder einer Ärztin.";
  $o1 = 0.3; $o2 = 0.3; $o3 = 1.0;
}
  
else if ($evaluationResult>4) {$evaluationResultText = "Sie scheinen einen <strong>gesunden</strong> Lebensstil zu führen. Herzlichen Glückwunsch! Diese Auswertung ersetzt 
  nicht die fundierte Meinung eines Arztes oder einer Ärztin.";
  $o1 = 0.3; $o2 = 1.0; $o3 = 0.3;
}

else {$evaluationResultText = "Sie scheinen einen <strong>ungesunden</strong> Lebensstil zu führen. Ihr Risiko an Herzversagen zu sterben ist um 42% höher.
Essen Sie mehr Gemüse! Diese Auswertung ersetzt nicht die fundierte Meinung eines Arztes oder einer Ärztin."; $o1 = 1.0; $o2 = 0.3; $o3 = 0.3;}

?>

<!-- bootstrap container-->

  <!-- bootstrap row1 welcome text; age input--> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

      <div class="col-lg"></div>

        <!-- bootstrap middle automatic centered colored col--> 

        <div class="col-lg-5">
          <p>Vielen Dank für die Teilnahme an der Umfrage!</p>

          <p><?=$evaluationResultText?><p>

          <p>Das Testergebnis lautet: <?=$evaluationResult?> von 10 Gesundheitspunkten.<p>
          
        </div>

    <!-- bootstrap outer right invisible col--> 

    <div class="col-lg"></div>

  </div>

  <!-- bootstrap row2 form button --> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

    <div class="col-lg"></div>

      <!-- bootstrap middle automatic centered col--> 

      <div class="col-lg d-flex">
        <img style="opacity:<?=$o1?>" class="image" src="images/healthy1.jpg" alt="Superheroes"> 
        <img style="opacity:<?=$o2?>" class="image" src="images/healthy2.jpg" alt="Superheroes"> 
        <img style="opacity:<?=$o3?>" class="image" src="images/healthy3.jpg" alt="Superheroes">       
      </div>
    </form>      

    <!-- bootstrap outer right invisible col--> 

    <div class="col-lg"></div>

  </div>