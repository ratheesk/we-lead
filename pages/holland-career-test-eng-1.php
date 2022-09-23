<?php include('../components/header.inc.php'); ?>

<?php
session_start(); // Session starts here.
?>

 <!--========================= Choose Language Section========================= -->
<section id="choose-language">
<div class="container">
  <div class="row justify-content-center">
<div class="card" style="max-width: 400px;">
  <div class="card-body">
  <span id="error">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>
 </span>
 <form action="holland-career-test-eng-2.php" method="post">
<div class="form-group">
 <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="q1" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="q1" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>
</div>
<div class="form-group">
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </div>
 </form>
</div>
</div>
</div>
</section>

<!--========================= End Choose Language Section========================= -->

<?php include('../components/footer.inc.php'); ?>