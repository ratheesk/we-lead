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
                            <input class="form-check-input" type="radio" name="k_1" id="k_1_1" value="1"  required="required">
                            <label class="form-check-label" for="k_1_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_2" value="2">
                            <label class="form-check-label" for="K_1_2">2</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Repair a dishwasher</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_2" id="k_2_1" value="1"  required="required">
                            <label class="form-check-label" for="k_2_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_2" id="k_2_2" value="2">
                            <label class="form-check-label" for="k_2_2">2</label>
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
                            <input class="form-check-input" type="radio" name="q_1" id="q_1_1" value="1" required="required">
                            <label class="form-check-label" for="q_1_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_1" id="q_1_2" value="2">
                            <label class="form-check-label" for="q_1_2">2</label>
                        </div>
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
                            <input class="form-check-input" type="radio" name="q_2" id="q_2_1" value="1" required="required">
                            <label class="form-check-label" for="q_2_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_2" id="q_2_2" value="2">
                            <label class="form-check-label" for="q_2_2">2</label>
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