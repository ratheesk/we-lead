<?php
session_start(); // Session starts here.

$title = "We Lead"; // page title
$description = "“We Lead” (Career Skills Society) is an initiative of the Career Guidance Unit of the University of Peradeniya. The ultimate goal of society is to guide career planning and develop the employability skills of Peradeniya graduates to reach their dream destinations in their professions."; // page description

include('../components/header.inc.php'); // header
include('../components/carousel.inc.php'); // carousel
include('../sections/who-we-are.inc.php'); // who we are section
include('../sections/objectives.inc.php'); // objectives section
include('../sections/holland-test.inc.php'); // holland code career test section
include('../sections/gallery.inc.php'); // gallery section
include('../sections/contact.inc.php'); // gallery section
include('../components/footer.inc.php'); // footer
?>

