<?php include('../components/header.inc.php'); ?>

 <?php
 session_start();
 if (isset($_POST['q3'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['q3'])){ 
 // Setting error for page 3.
 $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: holland-career-test-eng-3.php"); // Redirecting to third page.
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array. 
 
 }}}
 ?>
 <!--========================= Choose Language Section========================= -->

 <section id="choose-language">
<div class="container">
  <div class="row justify-content-center">
<div class="card" style="max-width: 400px;">
  <div class="card-body">
<?php
echo $q3;
echo $q2;
echo $q1;
?>
</div>
</div>
</div>
</section>
<!--========================= End Choose Language Section========================= -->

<?php include('../components/footer.inc.php'); ?>