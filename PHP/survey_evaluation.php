<?php

session_start();

// total value data evaluation (without including age)

$evaluationResult = 0;

function evaluationData(){  

  global $evaluationResult;

  if($_SESSION["q1"]==3) $evaluationResult+=1;
  if($_SESSION["q2"]==0) $evaluationResult+=1;
  if($_SESSION["q3"]==3) $evaluationResult+=1;
  if($_SESSION["q4"]>0) $evaluationResult+=1;
  if($_SESSION["q5"]==3) $evaluationResult+=1;
  if($_SESSION["q6"]>1) $evaluationResult+=1;
  if($_SESSION["q7"]>1) $evaluationResult+=1;
  if($_SESSION["q8"]>0) $evaluationResult+=1;
  if($_SESSION["q9"]>0) $evaluationResult+=1;
  if($_SESSION["q10"]==0) $evaluationResult+=1;
  
  }

evaluationData();

if($evaluationResult>7){
  $evaluationResultText = "Sie scheinen <strong>überaus gesund</strong> zu leben und gehören damit zu den 4% der Menschen, die an dieser Umfrage 
  teilgenommen haben. Vielleicht ist aber weniger mehr! Diese Auswertung ersetzt nicht die fundierte Meinung eines Arztes oder einer Ärztin.";
  $o1 = 0.2; $o2 = 0.2; $o3 = 1.0;
}
  
else if ($evaluationResult>3) {$evaluationResultText = "Sie scheinen einen <strong>gesunden</strong> Lebensstil zu führen. Herzlichen Glückwunsch! Diese Auswertung ersetzt 
  nicht die fundierte Meinung eines Arztes oder einer Ärztin.";
  $o1 = 0.2; $o2 = 1.0; $o3 = 0.2;
}

else {$evaluationResultText = "Sie scheinen einen <strong>ungesunden</strong> Lebensstil zu führen. Ihr Risiko an Herzversagen zu sterben ist um 42% höher.
Essen Sie mehr Gemüse! Diese Auswertung ersetzt nicht die fundierte Meinung eines Arztes oder einer Ärztin."; $o1 = 1.0; $o2 = 0.2; $o3 = 0.2;}

// age comment

if($_SESSION["age"]<50) $ageComment = 4;
if($_SESSION["age"]>=50) $ageComment = 5;

// answer 1 comment

if($_SESSION["q1"]<2) $answer1Comment = 3;
if($_SESSION["q1"]>1 || $_SESSION["q1"]<5) $answer1Comment = 2;
if($_SESSION["q1"]>4) $answer1Comment = 1;

// answer 2 comment

if($_SESSION["q2"]==1) $answer2Comment = 3;
if($_SESSION["q2"]==0) $answer2Comment = 2;

// variable comment

$answerAge = $answerPhrases["a".$ageComment];
$answerText1 = $answerPhrases["a".$answer2Comment];
$answerText2 = $answerPhrases["a".$answer2Comment];

?>