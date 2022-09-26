<?php include('../components/header.inc.php'); ?>


<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['k_5'])){
 if (empty($_POST['k_5'])){ 
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

 <section>
    <div class="container">
    <div class="section-title text-center mt-4">
          <span data-aos="fade-up">Page 3</span>
          <p data-aos="fade-up">You are in the page 3 of 5, mark your interest in each activity shown. Do not worry about whether you have the skills or training to do an activity, or how much money you might make. Simply think about whether you would enjoy doing it or not.</p>
    </div>   
  <span id="error">
<?php
// To show error of page 3.
if (!empty($_SESSION['error_page3'])) {
 echo $_SESSION['error_page3'];
 unset($_SESSION['error_page3']);
}
?>
 </span>

 <form action="holland-career-test-eng-4.php" method="post">
 <div class="container-fluid card pt-3">
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Install a hardwood floor</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_5" id="k_5_1" value="1"  required="required">
                            <label class="form-check-label" for="k_5_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_5" id="k_5_2" value="2">
                            <label class="form-check-label" for="k_5_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_5" id="k_5_3" value="3">
                            <label class="form-check-label" for="k_5_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_5" id="k_5_4" value="4">
                            <label class="form-check-label" for="k_5_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_5" id="k_5_5" value="5">
                            <label class="form-check-label" for="k_5_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Repair an air conditioning system</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_6" id="k_6_1" value="1"  required="required">
                            <label class="form-check-label" for="k_6_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_6" id="k_6_2" value="2">
                            <label class="form-check-label" for="k_6_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_6" id="k_6_3" value="3">
                            <label class="form-check-label" for="k_6_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_6" id="k_6_4" value="4">
                            <label class="form-check-label" for="k_6_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="k_6" id="k_6_5" value="5">
                            <label class="form-check-label" for="k_6_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Research the properties of nuclear energy</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_5" id="q_5_1" value="1"  required="required">
                            <label class="form-check-label" for="q_5_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_5" id="q_5_2" value="2">
                            <label class="form-check-label" for="q_5_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_5" id="q_5_3" value="3">
                            <label class="form-check-label" for="q_5_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_5" id="q_5_4" value="4">
                            <label class="form-check-label" for="q_5_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_5" id="q_5_5" value="5">
                            <label class="form-check-label" for="q_5_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Research a new medicine</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_4" id="q_4_1" value="1"  required="required">
                            <label class="form-check-label" for="q_4_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_4" id="q_4_2" value="2">
                            <label class="form-check-label" for="q_4_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_4" id="q_4_3" value="3">
                            <label class="form-check-label" for="q_4_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_4" id="q_4_4" value="4">
                            <label class="form-check-label" for="q_4_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q_4" id="q_4_5" value="5">
                            <label class="form-check-label" for="q_4_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Design a greeting card</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_5" id="m_5_1" value="1"  required="required">
                            <label class="form-check-label" for="m_5_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_5" id="m_5_2" value="2">
                            <label class="form-check-label" for="m_5_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_5" id="m_5_3" value="3">
                            <label class="form-check-label" for="m_5_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_5" id="m_5_4" value="4">
                            <label class="form-check-label" for="m_5_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_5" id="m_5_5" value="5">
                            <label class="form-check-label" for="m_5_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Illustrate a children’s book</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_6" id="m_6_1" value="1"  required="required">
                            <label class="form-check-label" for="m_6_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_6" id="m_6_2" value="2">
                            <label class="form-check-label" for="m_6_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_6" id="m_6_3" value="3">
                            <label class="form-check-label" for="m_6_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_6" id="m_6_4" value="4">
                            <label class="form-check-label" for="m_6_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="m_6" id="m_6_5" value="5">
                            <label class="form-check-label" for="m_6_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Help a disabled person with their daily routine</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_5" id="n_5_1" value="1"  required="required">
                            <label class="form-check-label" for="n_5_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_5" id="n_5_2" value="2">
                            <label class="form-check-label" for="n_5_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_5" id="n_5_3" value="3">
                            <label class="form-check-label" for="n_5_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_5" id="n_5_4" value="4">
                            <label class="form-check-label" for="n_5_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_5" id="n_5_5" value="5">
                            <label class="form-check-label" for="n_5_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Tutor a child with a learning disability</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_6" id="n_6_1" value="1"  required="required">
                            <label class="form-check-label" for="n_6_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_6" id="n_6_2" value="2">
                            <label class="form-check-label" for="n_6_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_6" id="n_6_3" value="3">
                            <label class="form-check-label" for="n_6_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_6" id="n_6_4" value="4">
                            <label class="form-check-label" for="n_6_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="n_6" id="n_6_5" value="5">
                            <label class="form-check-label" for="n_6_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Negotiate business partnerships</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_5" id="o_5_1" value="1"  required="required">
                            <label class="form-check-label" for="o_5_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_5" id="o_5_2" value="2">
                            <label class="form-check-label" for="o_5_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_5" id="o_5_3" value="3">
                            <label class="form-check-label" for="o_5_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_5" id="o_5_4" value="4">
                            <label class="form-check-label" for="o_5_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_5" id="o_5_5" value="5">
                            <label class="form-check-label" for="o_5_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Motivate employees to achieve success</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_6" id="o_6_1" value="1"  required="required">
                            <label class="form-check-label" for="o_6_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_6" id="o_6_2" value="2">
                            <label class="form-check-label" for="o_6_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_6" id="o_6_3" value="3">
                            <label class="form-check-label" for="o_6_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_6" id="o_6_4" value="4">
                            <label class="form-check-label" for="o_6_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="o_6" id="o_6_5" value="5">
                            <label class="form-check-label" for="o_6_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Keep payroll records</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_5" id="p_5_1" value="1"  required="required">
                            <label class="form-check-label" for="p_5_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_5" id="p_5_2" value="2">
                            <label class="form-check-label" for="p_5_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_5" id="p_5_3" value="3">
                            <label class="form-check-label" for="p_5_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_5" id="p_5_4" value="4">
                            <label class="form-check-label" for="p_5_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_5" id="p_5_5" value="5">
                            <label class="form-check-label" for="p_5_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-middle border pt-3 ml-2 mr-2">
                <div class="col-md-6">
                    <p>Use spreadsheets to organize financial data</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_6" id="p_6_1" value="1"  required="required">
                            <label class="form-check-label" for="p_6_1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_6" id="p_6_2" value="2">
                            <label class="form-check-label" for="p_6_2">2</label>
                        </div>                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_6" id="p_6_3" value="3">
                            <label class="form-check-label" for="p_6_3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_6" id="p_6_4" value="4">
                            <label class="form-check-label" for="p_6_4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_6" id="p_6_5" value="5">
                            <label class="form-check-label" for="p_6_5">5</label>
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