<?php include('../components/header.inc.php'); ?>


<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['name'])){
 if (empty($_POST['name'])){ 
 // Setting error message
 $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: holland-career-test-eng-1.php"); // Redirecting to first page 
 } 
 else {
    // Fetching all values posted from second page and storing it in variable.
    foreach ($_POST as $key => $value) {
    $_SESSION['post'][$key] = $value;
    }
    } 

} else {
 if (empty($_SESSION['error_page2'])) {
 header("location: holland-career-test-eng-1.php");//redirecting to first page
 }
}
?>
 <!--========================= Choose Language Section========================= -->

<section id="choose-language">
<div class="container">
  <div class="row justify-content-center">
<div class="card" style="max-width: 400px;">
  <div class="card-body">
  <span id="error">
<?php
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>
 </span>

 <form action="holland-career-test-eng-3.php" method="post">
 <div class="form-group">
 <label>Gender :<span>*</span></label>
 <input type="radio" name="gender" value="male" required>Male
 <input type="radio" name="gender" value="female">Female
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