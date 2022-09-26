<?php include('../components/header.inc.php'); ?>


<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['k_7'])){
 if (empty($_POST['k_7'])){ 
 // Setting error message
 $_SESSION['error_page4'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: holland-career-test-eng-3.php"); // Redirecting to first page 
 }
 else {
    // Fetching all values posted from second page and storing it in variable.
    foreach ($_POST as $key => $value) {
    $_SESSION['post'][$key] = $value;
    }
    } 
} else {
 if (empty($_SESSION['error_page5'])) {
 header("location: holland-career-test-eng-1.php");//redirecting to first page
 }
}
?>

 <!--========================= Choose Language Section========================= -->

 <section>
    <div class="container">
    <div class="section-title text-center mt-4">
          <span data-aos="fade-up">Page 5</span>
          <p data-aos="fade-up">You are in the page 5 of 5, mark your interest in each activity shown. Do not worry about whether you have the skills or training to do an activity, or how much money you might make. Simply think about whether you would enjoy doing it or not.</p>
    </div>   
  <span id="error">
<?php
// To show error of page 5.
if (!empty($_SESSION['error_page5'])) {
 echo $_SESSION['error_page5'];
 unset($_SESSION['error_page5']);
}
?>
 </span>

 <form action="holland-career-test-eng-4.php" method="post">
 <div class="container-fluid card pt-3">
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Build a stone wall</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_9" id="k_9_1" value="1"  required="required">
                            <label class="form-check-label" for="k_9_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_9" id="k_9_2" value="2">
                            <label class="form-check-label" for="k_9_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_9" id="k_9_3" value="3">
                            <label class="form-check-label" for="k_9_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_9" id="k_9_4" value="4">
                            <label class="form-check-label" for="k_9_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_9" id="k_9_5" value="5">
                            <label class="form-check-label" for="k_9_5">5</label>
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
                            <input class="form-check-input" type="radio" name="k_1_0" id="k_1_0_1" value="1"  required="required">
                            <label class="form-check-label" for="k_1_0_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1_0" id="k_1_0_2" value="2">
                            <label class="form-check-label" for="k_1_0_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1_0" id="k_1_0_3" value="3">
                            <label class="form-check-label" for="k_1_0_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1_0" id="k_1_0_4" value="4">
                            <label class="form-check-label" for="k_1_0_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_1_0" id="k_1_0_5" value="5">
                            <label class="form-check-label" for="k_1_0_5">5</label>
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
                            <input class="form-check-input" type="radio" name="q_9" id="q_9_1" value="1"  required="required">
                            <label class="form-check-label" for="q_9_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_9" id="q_9_2" value="2">
                            <label class="form-check-label" for="q_9_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_9" id="q_9_3" value="3">
                            <label class="form-check-label" for="q_9_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_9" id="q_9_4" value="4">
                            <label class="form-check-label" for="q_9_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_9" id="q_9_5" value="5">
                            <label class="form-check-label" for="q_9_5">5</label>
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
                            <input class="form-check-input" type="radio" name="q_1_0" id="q_1_0_1" value="1"  required="required">
                            <label class="form-check-label" for="q_1_0_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_1_0" id="q_1_0_2" value="2">
                            <label class="form-check-label" for="q_1_0_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_1_0" id="q_1_0_3" value="3">
                            <label class="form-check-label" for="q_1_0_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_1_0" id="q_1_0_4" value="4">
                            <label class="form-check-label" for="q_1_0_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_1_0" id="q_1_0_5" value="5">
                            <label class="form-check-label" for="q_1_0_5">5</label>
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
                            <input class="form-check-input" type="radio" name="m_9" id="m_9_1" value="1"  required="required">
                            <label class="form-check-label" for="m_9_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_9" id="m_9_2" value="2">
                            <label class="form-check-label" for="m_9_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_9" id="m_9_3" value="3">
                            <label class="form-check-label" for="m_9_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_9" id="m_9_4" value="4">
                            <label class="form-check-label" for="m_9_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_9" id="m_9_5" value="5">
                            <label class="form-check-label" for="m_9_5">5</label>
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
                            <input class="form-check-input" type="radio" name="m_1_0" id="m_1_0_1" value="1"  required="required">
                            <label class="form-check-label" for="m_1_0_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_1_0" id="m_1_0_2" value="2">
                            <label class="form-check-label" for="m_1_0_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_1_0" id="m_1_0_3" value="3">
                            <label class="form-check-label" for="m_1_0_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_1_0" id="m_1_0_4" value="4">
                            <label class="form-check-label" for="m_1_0_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_1_0" id="m_1_0_5" value="5">
                            <label class="form-check-label" for="m_1_0_5">5</label>
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
                            <input class="form-check-input" type="radio" name="n_9" id="n_9_1" value="1"  required="required">
                            <label class="form-check-label" for="n_9_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_9" id="n_9_2" value="2">
                            <label class="form-check-label" for="n_9_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_9" id="n_9_3" value="3">
                            <label class="form-check-label" for="n_9_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_9" id="n_9_4" value="4">
                            <label class="form-check-label" for="n_9_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_9" id="n_9_5" value="5">
                            <label class="form-check-label" for="n_9_5">5</label>
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
                            <input class="form-check-input" type="radio" name="n_1_0" id="n_1_0_1" value="1"  required="required">
                            <label class="form-check-label" for="n_1_0_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_1_0" id="n_1_0_2" value="2">
                            <label class="form-check-label" for="n_1_0_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_1_0" id="n_1_0_3" value="3">
                            <label class="form-check-label" for="n_1_0_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_1_0" id="n_1_0_4" value="4">
                            <label class="form-check-label" for="n_1_0_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_1_0" id="n_1_0_5" value="5">
                            <label class="form-check-label" for="n_1_0_5">5</label>
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
                            <input class="form-check-input" type="radio" name="o_9" id="o_9_1" value="1"  required="required">
                            <label class="form-check-label" for="o_9_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_9" id="o_9_2" value="2">
                            <label class="form-check-label" for="o_9_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_9" id="o_9_3" value="3">
                            <label class="form-check-label" for="o_9_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_9" id="o_9_4" value="4">
                            <label class="form-check-label" for="o_9_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_9" id="o_9_5" value="5">
                            <label class="form-check-label" for="o_9_5">5</label>
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
                            <input class="form-check-input" type="radio" name="o_1_0" id="o_1_0_1" value="1"  required="required">
                            <label class="form-check-label" for="o_1_0_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_1_0" id="o_1_0_2" value="2">
                            <label class="form-check-label" for="o_1_0_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_1_0" id="o_1_0_3" value="3">
                            <label class="form-check-label" for="o_1_0_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_1_0" id="o_1_0_4" value="4">
                            <label class="form-check-label" for="o_1_0_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_1_0" id="o_1_0_5" value="5">
                            <label class="form-check-label" for="o_1_0_5">5</label>
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
                            <input class="form-check-input" type="radio" name="p_9" id="p_9_1" value="1"  required="required">
                            <label class="form-check-label" for="p_9_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_9" id="p_9_2" value="2">
                            <label class="form-check-label" for="p_9_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_9" id="p_9_3" value="3">
                            <label class="form-check-label" for="p_9_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_9" id="p_9_4" value="4">
                            <label class="form-check-label" for="p_9_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_9" id="p_9_5" value="5">
                            <label class="form-check-label" for="p_9_5">5</label>
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
                            <input class="form-check-input" type="radio" name="p_1_0" id="p_1_0_1" value="1"  required="required">
                            <label class="form-check-label" for="p_1_0_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1_0" id="p_1_0_2" value="2">
                            <label class="form-check-label" for="p_1_0_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1_0" id="p_1_0_3" value="3">
                            <label class="form-check-label" for="p_1_0_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1_0" id="p_1_0_4" value="4">
                            <label class="form-check-label" for="p_1_0_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1_0" id="p_1_0_5" value="5">
                            <label class="form-check-label" for="p_1_0_5">5</label>
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