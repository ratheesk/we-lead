<?php include('../components/header.inc.php'); ?>

 <?php
 session_start();
 if (isset($_POST['k_9'])) {
 if (!empty($_SESSION['post'])){
 if (empty($_POST['k_9'])){ 
 // Setting error for page 3.
 $_SESSION['error_page5'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: holland-career-test-eng-5.php"); // Redirecting to third page.
 } else {
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 
 $k=$k_1+$k_2+$k_3+$k_4+$k_5+$k_6+$k_7+$k_8+$k_9+$k_1_0;
 $q=$q_1+$q_2+$q_3+$q_4+$q_5+$q_6+$q_7+$q_8+$q_9+$q_1_0;
 $m=$m_1+$m_2+$m_3+$m_4+$m_5+$m_6+$m_7+$m_8+$m_9+$m_1_0;
 $n=$n_1+$n_2+$n_3+$n_4+$n_5+$n_6+$n_7+$n_8+$n_9+$n_1_0;
 $o=$o_1+$o_2+$o_3+$o_4+$o_5+$o_6+$o_7+$o_8+$o_9+$o_1_0;
 $p=$p_1+$p_2+$p_3+$p_4+$p_5+$p_6+$p_7+$p_8+$p_9+$p_1_0;
 
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