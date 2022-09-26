<?php include('../components/header.inc.php'); ?>

 <?php
 session_start();
 if (isset($_POST['o_1'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['o_1'])){ 
 // Setting error for page 3.
 $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: holland-career-test-eng-3.php"); // Redirecting to third page.
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 
 $k=$k_1+$k_2;
 $q=$q_1+$q_2;
 $m=$m_1+$m_2;
 $n=$n_1+$n_2;
 $o=$o_1+$o_2;
 $p=$p_1+$p_2;
 
 }}}
 ?>
 <!--========================= Choose Language Section========================= -->

 <section id="choose-language">
<div class="container">
  <div class="row justify-content-center">
<div class="card" style="max-width: 400px;">
  <div class="card-body">
<?php
echo "points for building is $k <br>";
echo "points for thinking is $q <br>";
echo "points for creating is $m <br>";
echo "points for helping is $n <br>";
echo "points for persuading is $o <br>";
echo "points for organising is $p <br>";
?>
</div>
</div>
</div>
</section>
<!--========================= End Choose Language Section========================= -->

<?php include('../components/footer.inc.php'); ?>