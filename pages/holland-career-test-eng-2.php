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
  <span class="text-danger" id="error">
<?php
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>
 </span>

 <form action="holland-career-test-eng-3.php" method="post">
 <div class="container-fluid card pt-3 pb-3">
        <?php
         // questions and names
         $data = [
            ["Install a hardwood floor", "k_3"],
            ["Repair an air conditioning system", "k_4"],
            ["Research the properties of nuclear energy", "q_3"],
            ["Research a new medicine", "q_4"],
            ["Design a greeting card", "m_3"],
            ["Illustrate a children’s book", "m_4"],
            ["Help a disabled person with their daily routine", "n_3"],
            ["Tutor a child with a learning disability", "n_4"],
            ["Negotiate business partnerships", "o_3"],
            ["Motivate employees to achieve success", "o_4"],
            ["Keep payroll records", "p_3"],
            ["Use spreadsheets to organize financial data", "p_4"]
            ] ;
        
            for ($i = 0; $i < 12; $i++) {
                echo '
                <div class="row border-0 pt-3 ml-2 mr-2 mt-2 holland-quiz">
                <div class="col-md-6 my-auto">
                    <p>'.$data[$i][0].'</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="'.$data[$i][1].'_1">
                                <input class="joyful" type="radio" name="'.$data[$i][1].'" id="'.$data[$i][1].'_1" value="1"  required="required">
                                <svg viewBox="0 0 24 24"><path d="M12,17.5C14.33,17.5 16.3,16.04 17.11,14H6.89C7.69,16.04 9.67,17.5 12,17.5M8.5,11A1.5,1.5 0 0,0 10,9.5A1.5,1.5 0 0,0 8.5,8A1.5,1.5 0 0,0 7,9.5A1.5,1.5 0 0,0 8.5,11M15.5,11A1.5,1.5 0 0,0 17,9.5A1.5,1.5 0 0,0 15.5,8A1.5,1.5 0 0,0 14,9.5A1.5,1.5 0 0,0 15.5,11M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">                            
                            <label class="form-check-label" for="'.$data[$i][1].'_2">
                                <input class="happy" type="radio" name="'.$data[$i][1].'" id="'.$data[$i][1].'_2" value="2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 24 24"><path d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8C16.3,8 17,8.7 17,9.5M12,17.23C10.25,17.23 8.71,16.5 7.81,15.42L9.23,14C9.68,14.72 10.75,15.23 12,15.23C13.25,15.23 14.32,14.72 14.77,14L16.19,15.42C15.29,16.5 13.75,17.23 12,17.23Z" /></svg>
                        </label>
                        </div>                        
                        <div class="form-check form-check-inline">                            
                            <label class="form-check-label" for="'.$data[$i][1].'_3">
                                <input class="neutral" type="radio" name="'.$data[$i][1].'" id="'.$data[$i][1].'_3" value="3">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 24 24"><path d="M8.5,11A1.5,1.5 0 0,1 7,9.5A1.5,1.5 0 0,1 8.5,8A1.5,1.5 0 0,1 10,9.5A1.5,1.5 0 0,1 8.5,11M15.5,11A1.5,1.5 0 0,1 14,9.5A1.5,1.5 0 0,1 15.5,8A1.5,1.5 0 0,1 17,9.5A1.5,1.5 0 0,1 15.5,11M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M9,14H15A1,1 0 0,1 16,15A1,1 0 0,1 15,16H9A1,1 0 0,1 8,15A1,1 0 0,1 9,14Z" /></svg>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">                            
                            <label class="form-check-label" for="'.$data[$i][1].'_4">
                                <input class="bore" type="radio" name="'.$data[$i][1].'" id="'.$data[$i][1].'_4" value="4">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 24 24"><path d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M15.5,8C16.3,8 17,8.7 17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M12,14C13.75,14 15.29,14.72 16.19,15.81L14.77,17.23C14.32,16.5 13.25,16 12,16C10.75,16 9.68,16.5 9.23,17.23L7.81,15.81C8.71,14.72 10.25,14 12,14Z" /></svg>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="'.$data[$i][1].'_5">
                                <input class="dull" type="radio" name="'.$data[$i][1].'" id="'.$data[$i][1].'_5" value="5">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 24 24"><path d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M15.5,8C16.3,8 17,8.7 17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M12,14C9.67,14 7.69,15.46 6.89,17.5H17.11C16.31,15.46 14.33,14 12,14Z" /></svg>
                            </label>
                        </div>
                    </div>
                </div>
            </div>';
            }
        ?>
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