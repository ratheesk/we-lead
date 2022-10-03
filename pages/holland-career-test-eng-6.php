<?php include('../components/header.inc.php'); ?>


<?php
 session_start();
 

 if (isset($_POST['k_9'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['k_9'])){ 
 // Setting error for page 3.
 $_SESSION['error_page5'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: holland-career-test-eng-5.php"); // Redirecting to third page.
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 
 $k=$k_1+$k_2+$k_3+$k_4+$k_5+$k_6+$k_7+$k_8+$k_9+$k_1_0;
 $q=$q_1+$q_2+$q_3+$q_4+$q_5+$q_6+$q_7+$q_8+$q_9+$q_1_0;
 $m=$m_1+$m_2+$m_3+$m_4+$m_5+$m_6+$m_7+$m_8+$m_9+$m_1_0;
 $n=$n_1+$n_2+$n_3+$n_4+$n_5+$n_6+$n_7+$n_8+$n_9+$n_1_0;
 $o=$o_1+$o_2+$o_3+$o_4+$o_5+$o_6+$o_7+$o_8+$o_9+$o_1_0;
 $p=$p_1+$p_2+$p_3+$p_4+$p_5+$p_6+$p_7+$p_8+$p_9+$p_1_0;

 
 }}}
    //dummy values
     $k = 1;
     $q = 2;
     $m = 3;
     $n = 4;
     $o = 5;
     $p = 6;
    //function to get the primary interest area
     function primary_interest($args) {
         $results = array();
         $max_value = max($args);
         $results[] = $max_value;
      
         //now get the key for the first occurence of max value
         $found_key = false;
         foreach ($args as $key => $value) {
             if ($value == $max_value && !$found_key) {
                 $results[] =  $key;
                 $found_key = true;
             }
         }
         return $results;
     }
     
     //save the values in an array with correct name
     $obatained_values = array(
         'build' => $k,
         'think' => $q,
         'creat' => $m,
         'help' => $n,
         'persuade' => $o,
         'organise' => $p);
    //get the primary interest area and that value
     $primary_interest_area = primary_interest($obatained_values);

 ?>

<!--========================= Choose Language Section========================= -->
<section>
    <div class="container">
        <div class="section-title text-center mt-4">
            <span data-aos="fade-up">Results</span>
            <div class="text-left">
                <p data-aos="fade-up">Welcome to your career report! There's a lot of information here, so take your
                    time and read through it at your own pace.</p>
                <p data-aos="fade-up">Your report is split up into different sections, each of which addresses a
                    different factor in your career search. You'll learn about your interests, your personality, and the
                    jobs and work environments that suit you best. You'll get personalized advice and suggestions for
                    exploring your career options and planning a successful job search.</p>
                <p data-aos="fade-up">You can read your report straight through, or you can skip to the sections that
                    interest you most.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                let's get started!
            </div>
            <div class="card-body">
                <?php 
                 include('../components/holland-career-test/career-interest-profile.inc.php'); ?>
            </div>
        </div>
    </div>
</section>
<!--========================= End Choose Language Section========================= -->

<?php include('../components/footer.inc.php'); ?>