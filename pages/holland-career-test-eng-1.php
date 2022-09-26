<?php include('../components/header.inc.php'); ?>

<?php
session_start(); // Session starts here.
?>

<!--========================= Choose Language Section========================= -->
<section>
    <div class="container">
    <div class="section-title text-center mt-4">
          <span data-aos="fade-up">Page 1</span>
          <p data-aos="fade-up">To take the holland code career quiz, mark your interest in each activity shown. Do not worry about whether you have the skills or training to do an activity, or how much money you might make. Simply think about whether you would enjoy doing it or not.</p>
    </div>      
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
        <div class="container-fluid card pt-3">
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Use precision machines to build custom metal parts</p>
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_3" value="3">
                            <label class="form-check-label" for="K_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_4" value="4">
                            <label class="form-check-label" for="K_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1" id="K_1_5" value="5">
                            <label class="form-check-label" for="K_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
        <div class="form-group text-center pt-3 pb-3">
            <input class="btn btn-danger mr-4" type="reset" value="Reset" />
            <input class="btn btn-success" type="submit" value="Next" />
        </div>
    </form>
    </div>
</section>

<!--========================= End Choose Language Section========================= -->

<?php include('../components/footer.inc.php'); ?>