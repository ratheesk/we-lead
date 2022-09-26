<?php include('../components/header.inc.php'); ?>


<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['k_1'])){
 if (empty($_POST['k_1'])){ 
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

 <section>
    <div class="container">
    <div class="section-title text-center mt-4">
          <span data-aos="fade-up">Page 2</span>
          <p data-aos="fade-up">You are in the page 2 of 5, mark your interest in each activity shown. Do not worry about whether you have the skills or training to do an activity, or how much money you might make. Simply think about whether you would enjoy doing it or not.</p>
    </div>    
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
 <div class="container-fluid card pt-3">
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Install a hardwood floor</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_3" id="k_3_1" value="1"  required="required">
                            <label class="form-check-label" for="k_3_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_3" id="k_3_2" value="2">
                            <label class="form-check-label" for="k_3_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_3" id="k_3_3" value="3">
                            <label class="form-check-label" for="k_3_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_3" id="k_3_4" value="4">
                            <label class="form-check-label" for="k_3_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_3" id="k_3_5" value="5">
                            <label class="form-check-label" for="k_3_5">5</label>
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
                            <input class="form-check-input" type="radio" name="k_2" id="k_2_1" value="1"  required="required">
                            <label class="form-check-label" for="k_2_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_2" id="k_2_2" value="2">
                            <label class="form-check-label" for="k_2_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_2" id="k_2_3" value="3">
                            <label class="form-check-label" for="k_2_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_2" id="k_2_4" value="4">
                            <label class="form-check-label" for="k_2_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_2" id="k_2_5" value="5">
                            <label class="form-check-label" for="k_2_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Analyze the structure of molecules</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_1" id="q_1_1" value="1"  required="required">
                            <label class="form-check-label" for="q_1_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_1" id="q_1_2" value="2">
                            <label class="form-check-label" for="q_1_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_1" id="q_1_3" value="3">
                            <label class="form-check-label" for="q_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_1" id="q_1_4" value="4">
                            <label class="form-check-label" for="q_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_1" id="q_1_5" value="5">
                            <label class="form-check-label" for="q_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Do scientific experiments</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_2" id="q_2_1" value="1"  required="required">
                            <label class="form-check-label" for="q_2_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_2" id="q_2_2" value="2">
                            <label class="form-check-label" for="q_2_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_2" id="q_2_3" value="3">
                            <label class="form-check-label" for="q_2_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_2" id="q_2_4" value="4">
                            <label class="form-check-label" for="q_2_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_2" id="q_2_5" value="5">
                            <label class="form-check-label" for="q_2_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Design a magazine cover</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_1" id="m_1_1" value="1"  required="required">
                            <label class="form-check-label" for="m_1_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_1" id="m_1_2" value="2">
                            <label class="form-check-label" for="m_1_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_1" id="m_1_3" value="3">
                            <label class="form-check-label" for="m_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_1" id="m_1_4" value="4">
                            <label class="form-check-label" for="m_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_1" id="m_1_5" value="5">
                            <label class="form-check-label" for="m_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Paint a portrait</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_2" id="m_2_1" value="1"  required="required">
                            <label class="form-check-label" for="m_2_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_2" id="m_2_2" value="2">
                            <label class="form-check-label" for="m_2_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_2" id="m_2_3" value="3">
                            <label class="form-check-label" for="m_2_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_2" id="m_2_4" value="4">
                            <label class="form-check-label" for="m_2_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_2" id="m_2_5" value="5">
                            <label class="form-check-label" for="m_2_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Teach social skills to disabled children</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_1" id="n_1_1" value="1"  required="required">
                            <label class="form-check-label" for="n_1_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_1" id="n_1_2" value="2">
                            <label class="form-check-label" for="n_1_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_1" id="n_1_3" value="3">
                            <label class="form-check-label" for="n_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_1" id="n_1_4" value="4">
                            <label class="form-check-label" for="n_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_1" id="n_1_5" value="5">
                            <label class="form-check-label" for="n_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Teach adults to read</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_2" id="n_2_1" value="1"  required="required">
                            <label class="form-check-label" for="n_2_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_2" id="n_2_2" value="2">
                            <label class="form-check-label" for="n_2_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_2" id="n_2_3" value="3">
                            <label class="form-check-label" for="n_2_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_2" id="n_2_4" value="4">
                            <label class="form-check-label" for="n_2_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_2" id="n_2_5" value="5">
                            <label class="form-check-label" for="n_2_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Coordinate a business conference</p>
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_1" id="o_1_3" value="3">
                            <label class="form-check-label" for="o_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_1" id="o_1_4" value="4">
                            <label class="form-check-label" for="o_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_1" id="o_1_5" value="5">
                            <label class="form-check-label" for="o_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Plan a marketing strategy for a new company</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_2" id="o_2_1" value="1"  required="required">
                            <label class="form-check-label" for="o_2_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_2" id="o_2_2" value="2">
                            <label class="form-check-label" for="o_2_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_2" id="o_2_3" value="3">
                            <label class="form-check-label" for="o_2_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_2" id="o_2_4" value="4">
                            <label class="form-check-label" for="o_2_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_2" id="o_2_5" value="5">
                            <label class="form-check-label" for="o_2_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Track monthly expenses for a company</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1" id="p_1_1" value="1"  required="required">
                            <label class="form-check-label" for="p_1_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1" id="p_1_2" value="2">
                            <label class="form-check-label" for="p_1_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1" id="p_1_3" value="3">
                            <label class="form-check-label" for="p_1_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1" id="p_1_4" value="4">
                            <label class="form-check-label" for="p_1_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_1" id="p_1_5" value="5">
                            <label class="form-check-label" for="p_1_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Review financial records for accuracy</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_2" id="p_2_1" value="1"  required="required">
                            <label class="form-check-label" for="p_2_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_2" id="p_2_2" value="2">
                            <label class="form-check-label" for="p_2_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_2" id="p_2_3" value="3">
                            <label class="form-check-label" for="p_2_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_2" id="p_2_4" value="4">
                            <label class="form-check-label" for="p_2_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_2" id="p_2_5" value="5">
                            <label class="form-check-label" for="p_2_5">5</label>
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