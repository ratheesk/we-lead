<?php include('../components/header.inc.php'); ?>


<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['k_5'])){
 if (empty($_POST['k_5'])){ 
 // Setting error message
 $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: holland-career-test-eng-3.php"); // Redirecting to first page 
 }
 else {
    // Fetching all values posted from second page and storing it in variable.
    foreach ($_POST as $key => $value) {
    $_SESSION['post'][$key] = $value;
    }
    } 
} else {
 if (empty($_SESSION['error_page4'])) {
 header("location: holland-career-test-eng-1.php");//redirecting to first page
 }
}
?>

 <!--========================= Choose Language Section========================= -->

 <section>
    <div class="container">
    <div class="section-title text-center mt-4">
          <span data-aos="fade-up">Page 4</span>
          <p data-aos="fade-up">You are in the page 4 of 5, mark your interest in each activity shown. Do not worry about whether you have the skills or training to do an activity, or how much money you might make. Simply think about whether you would enjoy doing it or not.</p>
    </div>   
  <span class="text-danger" id="error">
<?php
// To show error of page 4.
if (!empty($_SESSION['error_page4'])) {
 echo $_SESSION['error_page4'];
 unset($_SESSION['error_page4']);
}
?>
 </span>

 <form action="holland-career-test-eng-5.php" method="post">
 <div class="container-fluid card pt-3">
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Build a stone wall</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_7" id="k_7_1" value="1"  required="required">
                            <label class="form-check-label" for="k_7_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_7" id="k_7_2" value="2">
                            <label class="form-check-label" for="k_7_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_7" id="k_7_3" value="3">
                            <label class="form-check-label" for="k_7_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_7" id="k_7_4" value="4">
                            <label class="form-check-label" for="k_7_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_7" id="k_7_5" value="5">
                            <label class="form-check-label" for="k_7_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Operate a bulldozer</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_8" id="k_8_1" value="1"  required="required">
                            <label class="form-check-label" for="k_8_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_8" id="k_8_2" value="2">
                            <label class="form-check-label" for="k_8_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_8" id="k_8_3" value="3">
                            <label class="form-check-label" for="k_8_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_8" id="k_8_4" value="4">
                            <label class="form-check-label" for="k_8_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_8" id="k_8_5" value="5">
                            <label class="form-check-label" for="k_8_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Analyze soil samples for pollution</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_7" id="q_7_1" value="1"  required="required">
                            <label class="form-check-label" for="q_7_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_7" id="q_7_2" value="2">
                            <label class="form-check-label" for="q_7_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_7" id="q_7_3" value="3">
                            <label class="form-check-label" for="q_7_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_7" id="q_7_4" value="4">
                            <label class="form-check-label" for="q_7_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_7" id="q_7_5" value="5">
                            <label class="form-check-label" for="q_7_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Study a fault line to predict earthquakes</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_8" id="q_8_1" value="1"  required="required">
                            <label class="form-check-label" for="q_8_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_8" id="q_8_2" value="2">
                            <label class="form-check-label" for="q_8_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_8" id="q_8_3" value="3">
                            <label class="form-check-label" for="q_8_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_8" id="q_8_4" value="4">
                            <label class="form-check-label" for="q_8_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_8" id="q_8_5" value="5">
                            <label class="form-check-label" for="q_8_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Design a billboard advertisemen</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_7" id="m_7_1" value="1"  required="required">
                            <label class="form-check-label" for="m_7_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_7" id="m_7_2" value="2">
                            <label class="form-check-label" for="m_7_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_7" id="m_7_3" value="3">
                            <label class="form-check-label" for="m_7_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_7" id="m_7_4" value="4">
                            <label class="form-check-label" for="m_7_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_7" id="m_7_5" value="5">
                            <label class="form-check-label" for="m_7_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Edit a movie</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_8" id="m_8_1" value="1"  required="required">
                            <label class="form-check-label" for="m_8_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_8" id="m_8_2" value="2">
                            <label class="form-check-label" for="m_8_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_8" id="m_8_3" value="3">
                            <label class="form-check-label" for="m_8_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_8" id="m_8_4" value="4">
                            <label class="form-check-label" for="m_8_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_8" id="m_8_5" value="5">
                            <label class="form-check-label" for="m_8_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Plan educational games for preschool children</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_7" id="n_7_1" value="1"  required="required">
                            <label class="form-check-label" for="n_7_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_7" id="n_7_2" value="2">
                            <label class="form-check-label" for="n_7_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_7" id="n_7_3" value="3">
                            <label class="form-check-label" for="n_7_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_7" id="n_7_4" value="4">
                            <label class="form-check-label" for="n_7_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_7" id="n_7_5" value="5">
                            <label class="form-check-label" for="n_7_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Plan activities for elderly people</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_8" id="n_8_1" value="1"  required="required">
                            <label class="form-check-label" for="n_8_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_8" id="n_8_2" value="2">
                            <label class="form-check-label" for="n_8_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_8" id="n_8_3" value="3">
                            <label class="form-check-label" for="n_8_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_8" id="n_8_4" value="4">
                            <label class="form-check-label" for="n_8_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_8" id="n_8_5" value="5">
                            <label class="form-check-label" for="n_8_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Lead a team</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_7" id="o_7_1" value="1"  required="required">
                            <label class="form-check-label" for="o_7_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_7" id="o_7_2" value="2">
                            <label class="form-check-label" for="o_7_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_7" id="o_7_3" value="3">
                            <label class="form-check-label" for="o_7_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_7" id="o_7_4" value="4">
                            <label class="form-check-label" for="o_7_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_7" id="o_7_5" value="5">
                            <label class="form-check-label" for="o_7_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Start a new business</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_8" id="o_8_1" value="1"  required="required">
                            <label class="form-check-label" for="o_8_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_8" id="o_8_2" value="2">
                            <label class="form-check-label" for="o_8_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_8" id="o_8_3" value="3">
                            <label class="form-check-label" for="o_8_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_8" id="o_8_4" value="4">
                            <label class="form-check-label" for="o_8_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_8" id="o_8_5" value="5">
                            <label class="form-check-label" for="o_8_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Calculate the cost of a construction project</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_7" id="p_7_1" value="1"  required="required">
                            <label class="form-check-label" for="p_7_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_7" id="p_7_2" value="2">
                            <label class="form-check-label" for="p_7_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_7" id="p_7_3" value="3">
                            <label class="form-check-label" for="p_7_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_7" id="p_7_4" value="4">
                            <label class="form-check-label" for="p_7_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_7" id="p_7_5" value="5">
                            <label class="form-check-label" for="p_7_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Help customers fill out loan applications</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_8" id="p_8_1" value="1"  required="required">
                            <label class="form-check-label" for="p_8_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_8" id="p_8_2" value="2">
                            <label class="form-check-label" for="p_8_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_8" id="p_8_3" value="3">
                            <label class="form-check-label" for="p_8_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_8" id="p_8_4" value="4">
                            <label class="form-check-label" for="p_8_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_8" id="p_8_5" value="5">
                            <label class="form-check-label" for="p_8_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
        <div class="form-group text-center pt-3 pb-3">
            <input class="btn btn-danger mr-4" type="reset" value="Reset" />
            <input class="btn btn-success" type="submit" value="Next" />
        </div>
 </div>
 </form>
 </div>
</section>
<!--========================= End Choose Language Section========================= -->
<?php include('../components/footer.inc.php'); ?>