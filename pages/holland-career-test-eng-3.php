<?php include('../components/header.inc.php'); ?>


<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['q2'])){
 if (empty($_POST['q2'])){ 
 // Setting error message
 $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: holland-career-test-eng-2.php"); // Redirecting to first page 
 }
 else {
    // Fetching all values posted from second page and storing it in variable.
    foreach ($_POST as $key => $value) {
    $_SESSION['post'][$key] = $value;
    }
    } 
} else {
 if (empty($_SESSION['error_page3'])) {
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
if (!empty($_SESSION['error_page3'])) {
 echo $_SESSION['error_page3'];
 unset($_SESSION['error_page3']);
}
?>
 </span>

 <form action="holland-career-test-eng-4.php" method="post">
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p>Repair a dishwasher</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_1" id="o_1_1" value="1"  required="required">
                            <label class="form-check-label" for="o_1_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_1" id="o_1_2" value="2">
                            <label class="form-check-label" for="o_1_2">2</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Analyze the structure of molecules</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1" id="p_1_1" value="1" required="required">
                            <label class="form-check-label" for="p_1_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1" id="p_1_2" value="2">
                            <label class="form-check-label" for="p_1_2">2</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input type="reset" value="Reset" />
            <input type="submit" value="Next" />
        </div>
 </form>
 </form>
</div>
</div>
</div>
</section>
<!--========================= End Choose Language Section========================= -->
<?php include('../components/footer.inc.php'); ?>