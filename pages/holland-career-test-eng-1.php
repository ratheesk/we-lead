<?php include('../components/header.inc.php'); ?>

<?php
session_start(); // Session starts here.
?>
 <div class="card mt-5">
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
 <label>Full Name :<span>*</span></label>
 <input name="name" type="text" placeholder="Ex-James Anderson" required>
</div>
 <div class="form-group">
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </div>
 </form>
  </div>
</div>

<?php include('../components/footer.inc.php'); ?>