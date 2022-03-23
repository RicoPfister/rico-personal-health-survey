<!-- bootstrap container-->

  <!-- bootstrap row1 welcome text; age input--> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

      <div class="col-lg"></div>

        <!-- bootstrap middle automatic centered colored col--> 

        <div class="col-lg-6">
          <p>Vielen Dank, dass Sie an dieser Umfrage teilnehmen. Die folgenden 10 Fragen helfen uns... 
          [Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt 
          ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam]</p>

          <form name="evaluation" action="survey.php" methode="get" onsubmit="return validateForm('age')";>
            <label class="mt-4"for="age">Bitte geben Sie Ihr <strong>Alter</strong> an und es kann losgehen:</label>
            <input class="number" type="number" name="age" id="age" value="">
            <p class="m-0 text-danger fw-bold" id="alert"></p>

        </div>

    <!-- bootstrap outer right invisible col--> 

    <div class="col-lg"></div>

  </div>

  <!--? bootstrap row2 form button --> 

  <div class="row">

      <!-- bootstrap outer left invisible col--> 

    <div class="col-lg"></div>

      <!-- bootstrap middle automatic centered col--> 

      <div class="col-lg-5 mt-4 d-flex justify-content-center">
        <button type="submit" class="btn btn-success me-2">Los Geht's</button></form>       
      </div>
    </form>      

    <!-- bootstrap outer right invisible col--> 

    <div class="col-lg"></div>

  </div>