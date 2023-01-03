<?php
session_start(); // Session starts here.

$title = "Career Fiesta 2023"; // page title
$description = "We Lead Career Fiesta provides both students and
employers an opportunity to meet one another, establish professional
relationships, and discuss potential jobs and/or internship opportunities.
Further, undergraduates will be able to meet with experts from professional
bodies and post-graduate institutes to plan their future academic paths.
"; // page description

include('../components/header.inc.php'); // header
include('carousel.inc.php'); // carousel

include('../sections/contact.inc.php'); // gallery section
include('../components/footer.inc.php'); // footer
?>

