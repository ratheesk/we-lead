<?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            echo "This is Button1 that is selected";
        }
        function button2() {
            echo "This is Button2 that is selected";
        }
    ?>
  

<section>
    <div class="container">
        <div class="section-title text-center mt-4">
            <span data-aos="fade-up">Results</span>
            <div class="row justify-content-center">
            <div class=" col-12 card p-3" style="max-width: 400px;">
            <div class="text-left">
            <?php 
              echo 'There are ' .count($same_primary_interest_areas). ' primary interest areas for you according to your answers.
              do you wnat to try again with more accurate answers or continue the report?';            ?>
            </div>
            <div class="pt-3 row justify-content-end">
            
        <button type="submit" class="btn btn-secondary mr-3" name="button1" value="But1">Close</button>
            
        <button type="submit" class="btn btn-primary mr-3" name="button2" value="But2">Understood</button>
          
      </div>
            </div>
  </div>
           
        </div>
    </div>
</section>