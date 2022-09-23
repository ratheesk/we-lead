<?php include('../components/header.inc.php'); ?>

<?php
session_start(); // Session starts here.
?>

<!--========================= Choose Language Section========================= -->
<section id="choose-language">
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p>Repair a dishwasher</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q1" id="q1" value="1"  required="required">
                            <label class="form-check-label" for="q1_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q1" id="q1_2" value="2">
                            <label class="form-check-label" for="q2">2</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Use precision machines to build custom metal parts</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q2" id="q2_1" value="1" required="required">
                            <label class="form-check-label" for="q1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q2" id="q2_2" value="2">
                            <label class="form-check-label" for="q2">2</label>
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
</section>

<!--========================= End Choose Language Section========================= -->

<?php include('../components/footer.inc.php'); ?>