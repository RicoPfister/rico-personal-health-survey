<?php

// total value data evaluation (without including age)

$evaluationResult = 0;

function evaluationData(){  

  global $evaluationResult;

  if($_SESSION["q1"]==3) $evaluationResult+=1;
  if($_SESSION["q2"]==0) $evaluationResult+=1;
  if($_SESSION["q3"]==3) $evaluationResult+=1;
  if($_SESSION["q4"]>0) $evaluationResult+=1;
  if($_SESSION["q5"]==3) $evaluationResult+=1;
  if($_SESSION["q6"]==2) $evaluationResult+=1;
  if($_SESSION["q7"]==2) $evaluationResult+=1;
  if($_SESSION["q8"]==1) $evaluationResult+=1;
  if($_SESSION["q9"]==1) $evaluationResult+=1;
  if($_SESSION["q10"]==0) $evaluationResult+=1;
  
  }

evaluationData();

if($evaluationResult>7){
  $evaluationResultText = $answersCommentPhrases["aC1"];
  $o1 = 0.2; $o2 = 0.2; $o3 = 1.0;
}
  
else if ($evaluationResult>3) {
  $evaluationResultText = $answersCommentPhrases["aC2"];
  $o1 = 0.2; $o2 = 1.0; $o3 = 0.2;
}

else {
  $evaluationResultText = $answersCommentPhrases["aC3"];
  ; $o1 = 1.0; $o2 = 0.2; $o3 = 0.2;
}

// age comment

if($_SESSION["age"]<50) $ageComment = 4;
if($_SESSION["age"]>=50) $ageComment = 5;

// answer 1 comment

if($_SESSION["q1"]<2) $answer1Comment = 1;
if($_SESSION["q1"]>1 || $_SESSION["q1"]<5) $answer1Comment = 2;
if($_SESSION["q1"]>4) $answer1Comment = 1;

// answer 2 comment

if($_SESSION["q2"]==1) {$answer2Text = "Ja (0 Punkte)"; $answer2Comment = 3;}
if($_SESSION["q2"]==0) {$answer2Text = "Nein (1 Punkt)"; $answer2Comment = 2;}

// answer 3 comment

if($_SESSION["q3"]<2) $answer3Comment = 1;
if($_SESSION["q3"]>1 || $_SESSION["q3"]<5) $answer3Comment = 2;
if($_SESSION["q3"]>4) $answer3Comment = 1;

// answer 4 comment

if($_SESSION["q4"]>0) {$answer4Text = "Eine Aktivität ausgewählt oder angegeben (1 Punkt)"; $answer4Comment = 1;}
if($_SESSION["q4"]==0) {$answer4Text = "Keine Aktivität ausgewählt oder angegeben (0 Punkte)"; $answer4Comment = 2;}

// answer 5 comment

if($_SESSION["q5"]<2) $answer5Comment = 1;
if($_SESSION["q5"]>1 || $_SESSION["q5"]<5) $answer5Comment = 2;
if($_SESSION["q5"]>4) $answer5Comment = 1;

// answer 6 comment

if($_SESSION["q6"]==0) {$answer6Text = "Keine (0 Punkte)"; $answer6Comment = 3;}
if($_SESSION["q6"]==1) {$answer6Text = "Eine (0 Punkte)"; $answer6Comment = 2;}
if($_SESSION["q6"]==2) {$answer6Text = "Zwei (1 Punkt)"; $answer6Comment = 1;}
if($_SESSION["q6"]>2) {$answer6Text = "Mehr als zwei (0 Punkte)"; $answer6Comment = 3;}

// answer 7 comment

if($_SESSION["q7"]==0) {$answer7Text = "Keine (0 Punkte)"; $answer7Comment = 3;}
if($_SESSION["q7"]==1) {$answer7Text = "Eine (0 Punkte)"; $answer7Comment = 2;}
if($_SESSION["q7"]==2) {$answer7Text = "Zwei (1 Punkt)"; $answer7Comment = 1;}
if($_SESSION["q7"]>2) {$answer7Text = "Mehr als zwei (0 Punkte)"; $answer7Comment = 3;}

// answer 8 comment

if($_SESSION["q8"]==0) {$answer8Text = "Keine (0 Punkte)"; $answer8Comment = 3;}
if($_SESSION["q8"]==1) {$answer8Text = "Eine (1 Punkt)"; $answer8Comment = 1;}
if($_SESSION["q8"]>1) {$answer8Text = "Mehr als eine (0 Punkte)"; $answer8Comment = 3;}

// answer 9 comment

if($_SESSION["q9"]==0) {$answer9Text = "Keine (0 Punkte)"; $answer9Comment = 3;}
if($_SESSION["q9"]==1) {$answer9Text = "Eine (1 Punkt)"; $answer9Comment = 1;}
if($_SESSION["q9"]>1) {$answer9Text = "Mehr als eine (0 Punkte)"; $answer9Comment = 3;}

// answer 10 comment

if($_SESSION["q10"]==0) {$answer10Text = "Keine (1 Punkte)"; $answer10Comment = 1;}
if($_SESSION["q10"]>0) {$answer10Text = "Eine (0 Punkt)"; $answer10Comment = 3;}

// variable comment

$answerAge = $answerPhrases["a".$ageComment];
for($i=1; $i<11; $i++){
${"answerText".$i} = $answerPhrases["a".${"answer".$i."Comment"}];
}
?>