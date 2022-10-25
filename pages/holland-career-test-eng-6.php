<?php

use LDAP\Result;

 include('../components/header.inc.php'); ?>


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
     $k = 5;
     $q = 9;
     $m = 6;
     $n = 9;
     $o = 9;
     $p = 2;
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

    //function to get the least interest area
    function least_interest($args) {
       $results = array();
       $min_value = min($args);
       $results[] = $min_value;
    
       //now get the key for the first occurence of min value
       $found_key = false;
       foreach ($args as $key => $value) {
           if ($value == $min_value && !$found_key) {
               $results[] =  $key;
               $found_key = true;
           }
       }
       return $results;
   }
    //function to check same primary interest areas     
   function same_max_value($all_values,$primary_interest,$primary_interest_value) {
    $results = array();
    $results[] = $primary_interest;

    foreach ($all_values as $key => $value) {
        if ($key != $primary_interest && $value == $primary_interest_value){
            $results[] = $key;
        }
    }
    return $results;
   }

    //function to check same minimum interest areas     
    function same_min_value($all_values,$least_interest,$least_interest_value) {
     $results = array();
     $results[] = $least_interest;
 
     foreach ($all_values as $key => $value) {
         if ($key != $least_interest && $value == $least_interest_value){
             $results[] = $key;
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

     //get the least interest area and that value
     $least_interest_area = least_interest($obatained_values);
    
     // array of primary interest areas
     $same_primary_interest_areas = same_max_value($obatained_values,$primary_interest_area[1],$primary_interest_area[0]);

    // array of least interest areas
     $same_least_interest_areas = same_max_value($obatained_values,$least_interest_area[1],$least_interest_area[0]);

     echo count($same_primary_interest_areas);

     foreach ($same_primary_interest_areas as $value) {
        echo "$value <br>";
      }
    echo count($same_least_interest_areas);

    foreach ($same_least_interest_areas as $value) {
        echo "$value <br>";
    }
 ?>

<?php include('../components/holland-career-test/eng-report.php'); ?>

<?php include('../components/footer.inc.php'); ?>