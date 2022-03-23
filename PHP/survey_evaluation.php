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
  if($_SESSION["q6"]>1) $evaluationResult+=1;
  if($_SESSION["q7"]>1) $evaluationResult+=1;
  if($_SESSION["q8"]>0) $evaluationResult+=1;
  if($_SESSION["q9"]>0) $evaluationResult+=1;
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

if($_SESSION["q1"]<2) $answer1Comment = 3;
if($_SESSION["q1"]>1 || $_SESSION["q1"]<5) $answer1Comment = 2;
if($_SESSION["q1"]>4) $answer1Comment = 1;

// answer 2 comment

if($_SESSION["q2"]==1) {$answer2Text = "Ja"; $answer2Comment = 3;}
if($_SESSION["q2"]==0) {$answer2Text = "Nein"; $answer2Comment = 2;}

// answer 3 comment

if($_SESSION["q3"]<2) $answer3Comment = 3;
if($_SESSION["q3"]>1 || $_SESSION["q3"]<5) $answer3Comment = 2;
if($_SESSION["q3"]>4) $answer3Comment = 1;

// answer 4 comment

if($_SESSION["q4"]>1) {$answer4Text = "Eine Aktivität ausgewählt oder angegeben"; $answer4Comment = 1;}
if($_SESSION["q4"]==0) {$answer4Text = "Keine Aktivität ausgewählt oder angegeben"; $answer4Comment = 2;}

// answer 5 comment

if($_SESSION["q5"]<2) $answer5Comment = 3;
if($_SESSION["q5"]>1 || $_SESSION["q5"]<5) $answer5Comment = 2;
if($_SESSION["q5"]>4) $answer5Comment = 1;

// answer 6 comment

if($_SESSION["q6"]==0) {$answer6Text = "Keine"; $answer6Comment = 3;}
if($_SESSION["q6"]==1) {$answer6Text = "Eine"; $answer6Comment = 2;}
if($_SESSION["q6"]==2) {$answer6Text = "Zwei"; $answer6Comment = 1;}
if($_SESSION["q6"]>2) {$answer6Text = "Mehr als zwei"; $answer6Comment = 3;}

// answer 7 comment

if($_SESSION["q7"]==0) {$answer7Text = "Keine"; $answer7Comment = 3;}
if($_SESSION["q7"]==1) {$answer7Text = "Eine"; $answer7Comment = 2;}
if($_SESSION["q7"]==2) {$answer7Text = "Zwei"; $answer7Comment = 1;}
if($_SESSION["q7"]>2) {$answer7Text = "Mehr als zwei"; $answer7Comment = 3;}

// answer 8 comment

if($_SESSION["q8"]==0) {$answer8Text = "Keine"; $answer8Comment = 3;}
if($_SESSION["q8"]==1) {$answer8Text = "Eine"; $answer8Comment = 1;}
if($_SESSION["q8"]>1) {$answer8Text = "Mehr als eine"; $answer8Comment = 3;}

// answer 9 comment

if($_SESSION["q9"]==0) {$answer9Text = "Keine"; $answer9Comment = 3;}
if($_SESSION["q9"]==1) {$answer9Text = "Eine"; $answer9Comment = 1;}
if($_SESSION["q9"]>1) {$answer9Text = "Mehr als eine"; $answer9Comment = 3;}

// answer 10 comment

if($_SESSION["q10"]==0) {$answer10Text = "Keine"; $answer10Comment = 3;}
if($_SESSION["q10"]==1) {$answer10Text = "Eine"; $answer10Comment = 1;}
if($_SESSION["q10"]>1) {$answer10Text = "Mehr als eine"; $answer10Comment = 3;}

// variable comment

$answerAge = $answerPhrases["a".$ageComment];
for($i=1; $i<11; $i++){
${"answerText".$i} = $answerPhrases["a".${"answer".$i."Comment"}];
}
?>