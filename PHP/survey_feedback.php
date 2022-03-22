<?php include 'survey_questions_answers.php'; ?>
<?php include 'survey_evaluation.php'; ?>

<!-- bootstrap container-->

  <!-- bootstrap row1 welcome text; age input--> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

      <div class="col-lg"></div>

        <!-- bootstrap middle automatic centered colored col--> 

        <div class="col-lg-5">
          <p>Vielen Dank für die Teilnahme an der Umfrage!</p>

          <p class="mt-4"><?=$evaluationResultText?><p>

          <p class="mt-4">Das Testergebnis lautet: <?=$evaluationResult?> von 10 Gesundheitspunkten. Sie entsprechen folgendem Superheldentypus (nicht wissenschaftlich belegt):<p>
          
        </div>

    <!-- bootstrap outer right invisible col--> 

    <div class="col-lg"></div>

  </div>

  <!-- bootstrap row2 form button --> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

    <div class="col-lg"></div>

      <!-- bootstrap middle automatic centered col--> 

      <div class="col-lg-8 d-lg-flex justify-content-center mt-4">
        <div><img style="opacity:<?=$o1?>" class="img-fluid p-2 rounded" src="images/healthy1.jpg" alt="Superheroes"></div>
        <div><img style="opacity:<?=$o2?>" class="img-fluid p-2 rounded" src="images/healthy2.jpg" alt="Superheroes"></div>
        <div><img style="opacity:<?=$o3?>" class="img-fluid p-2 rounded" src="images/healthy3.jpg" alt="Superheroes"></div>       
      </div>

      <!-- bootstrap outer right invisible col--> 

      <div class="col-lg"></div>

  </div>

    <!-- bootstrap row3 detailed evaluation --> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

    <div class="col-lg"></div>

      <!-- bootstrap middle automatic centered col--> 

      <div class="col-lg-5 mt-4">
      <p>Detaillierte Auswertung:</p><br>

      <p><strong>Ihr Alter: </strong><?=$_SESSION["age"]?></p>
      <p><strong>Auswertung:</strong> <?=$answerAge?></p><br>
      
      <p><strong><?=$questionPhrases["q1"]?></strong></p>
      <p><strong>Antwort:</strong> <?=$_SESSION["q1"]?> von 5</p>
      <p><strong>Auswertung:</strong> <?=$answerText1?></p><br>
  
      <p><strong><?=$questionPhrases["q2"]?></strong></p>
      <p><strong>Antwort:</strong> <?=$_SESSION["q2"]?></p>
      <p><strong>Auswertung:</strong> <?=$answerText2?></p><br>

      <p>[Work in progres...]</p>
      </div>

      <!-- bootstrap outer right invisible col--> 

      <div class="col-lg"></div>

  </div>

       

  