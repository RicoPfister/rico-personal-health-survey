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
  $image = 3;
}
  
else if ($evaluationResult>4) {$evaluationResultText = "Sie scheinen einen <strong>gesunden</strong> Lebensstil zu führen. Herzlichen Glückwunsch! Diese Auswertung ersetzt 
  nicht die fundierte Meinung eines Arztes oder einer Ärztin.";
  $image = 2;
}

else {$evaluationResultText = "Sie scheinen einen <strong>ungesunden</strong> Lebensstil zu führen. Ihr Risiko an Herzversagen zu sterben ist um 42% höher.
Essen Sie mehr Gemüse! Diese Auswertung ersetzt nicht die fundierte Meinung eines Arztes oder einer Ärztin."; $image = 1;}

?>

<!-- bootstrap output -->

<div class="row justify-content-center">

  <div class="row justify-content-center">
    <div class="col-lg-6">
      <p>Merci für die Teilnahme an der Umfrage<p>
    </diV>
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-6">
      <p>Das Testergebnis lautet: <?=$evaluationResult?> von 10 Gesundheitspunkten.<p>
    </diV>
  </div>
  
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <p><?=$evaluationResultText?><p>
    </diV>
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-6">
      <img class="image" src="images/healthy<?=$image?>.jpg" alt="Superheroes">
    </diV>
  </div> 

</div>








<!-- bootstrap container-->

  <!-- bootstrap row1 welcome text--> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

      <div class="col-lg"></div>

        <!-- bootstrap middle automatic centered colored col--> 

        <div class="textCol col-lg-5">
          <p>Vielen Dank, dass Sie an dieser Umfrage teilnehmen. Die folgenden 10 Fragen helfen uns [...] 
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt 
          ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
        </div>

    <!-- bootstrap outer right invisible col--> 

    <div class="col-lg"></div>

  </div>

    <!-- bootstrap row2 form --> 

    <div class="row">

<!-- bootstrap outer left invisible col--> 

<div class="col-lg"></div>

  <!-- bootstrap middle automatic centered colored col--> 

  <div class="evaCol col-lg-5">
    test
  </div>

<!-- bootstrap outer right invisible col--> 

<div class="col-lg"></div>

</div>

  <!-- bootstrap row3 start button--> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

      <div class="col-lg"></div>

        <!-- bootstrap middle automatic centered col--> 

        <div class="col-lg-5 border">
          test
        </div>

    <!-- bootstrap outer right invisible col--> 

    <div class="col-lg"></div>

  </div>