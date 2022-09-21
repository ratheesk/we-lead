<?php include('../components/header.inc.php'); ?>

 <?php
 session_start();
 if (isset($_POST['city'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['city'])){ 
 // Setting error for page 3.
 $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: holland-career-test-eng-3.php"); // Redirecting to third page.
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.

echo $name;
echo $city;
echo $gender;
 
 
 }}}
 ?>


<?php include('../components/footer.inc.php'); ?>