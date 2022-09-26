<?php include('../components/header.inc.php'); ?>

<?php
session_start(); // Session starts here.
?>

<!--========================= Choose Language Section========================= -->
<section>
    <div class="container">
    <div class="section-title text-center mt-4">
          <span data-aos="fade-up">About Us</span>
          <p data-aos="fade-up">The Ocean Ride project is a 13 days bicycle ride around the coastal districts of Sri Lanka, covering over 1300+km to promote marine conservation, create awareness among the local population about the importance of taking care of the ocean, responsible utilization of ocean resources, and creating inspiration to impact the future generation.
          </p>
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
        <div class="form-group">
            <input type="reset" value="Reset" />
            <input type="submit" value="Next" />
        </div>
    </form>
    </div>
</section>

<!--========================= End Choose Language Section========================= -->

<?php include('../components/footer.inc.php'); ?>