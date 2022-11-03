<?php
session_start(); // Session starts here.

// function to test inputs in forms
function test_input($data) {
    // strip unnecessary characters
    $data = trim($data);
    // remove backslashes
    $data = stripslashes($data);
    // convert special characters to HTML entities
    $data = htmlspecialchars($data);
    return $data;
  }

function quiz_values($page_num, $submit_value, $progress, $questions) {

    $GLOBALS['page_num'] = $page_num;
    $GLOBALS['submit_value'] = $submit_value;
    $GLOBALS['progress'] = $progress;
    $GLOBALS['questions'] = $questions;

    // shuffle the questions
    shuffle($GLOBALS['questions']);
} 

function test_input_set($questions) {

    $GLOBALS['input_set'] = true;

    for ($i = 0; $i < 12; $i++) {
        if(!isset($_POST[$questions[$i][1]])) {
            $GLOBALS['input_set'] = false;
            break;
        }
    }

}

function test_input_numeric ($questions) {

    $GLOBALS['input_numeric'] = true;

    for ($i = 0; $i < 12; $i++) {
        if(!is_numeric($_POST[$questions[$i][1]]) && empty($_POST[$questions[$i][1]])) {
            $GLOBALS['input_numeric'] = false;
            break;
        }
    }
}

// check the submit key for empty
if (isset($_POST['submit'])) {
    // test input
    $submitted_value = test_input($_POST['submit']);

        // check the value of submit
    switch($submitted_value) {
        case 'Change Language':
            unset($_SESSION['language']);
            header('Location: '.$_SERVER['PHP_SELF']);
            break;
        case 'Try Again':
            unset($_SESSION['language']);
            header('Location: '.$_SERVER['PHP_SELF']);
            break;
        // execute functions for page 1
        case 'Start':
            // check language value for empty
            if (isset($_POST['lang'])) {
                $language = test_input($_POST['lang']);
                // validate the language value
                if ($language == 'english'
                || $language == 'sinhala'
                || $language == 'tamil') {
                    
                    // store the choosed language it in the session
                    $_SESSION['language'] = $language;
                    // include particuler language questions data
                    switch($_SESSION['language']) {
                        case 'english':
                            include('../components/holland-code-career-test/eng-data.inc.php');
                            break;
                        case 'sinhala':
                            include('../components/holland-code-career-test/sin-data.inc.php');
                            break;
                        case 'tamil':
                            include('../components/holland-code-career-test/tamil-data.inc.php');
                            break;
                    }
                    // set the initial values
                    quiz_values(1, 'Page 2', 20, $p_1_questions);
                } else {
                    echo 'Unexpected language is submitted';
                }
            } 
            break;
            // execute functions for page 2
        case 'Page 2':
            // check the language avalilability in session
            if (!empty($_SESSION['language'])) {
                switch($_SESSION['language']) {
                    case 'english':
                        include('../components/holland-code-career-test/eng-data.inc.php');
                        break;
                    case 'sinhala':
                        include('../components/holland-code-career-test/sin-data.inc.php');
                        break;
                    case 'tamil':
                        include('../components/holland-code-career-test/tamil-data.inc.php');
                        break;
                }
            } else {
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
                break;
            }
            test_input_set($p_1_questions);
            if ($input_set) {
                test_input_numeric($p_1_questions);
                if (!$input_numeric) {
                    // Set error message
                    $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
                    quiz_values(1, 'Page 2', 20, $p_1_questions);
                } else {
                    // Fetch all values posted from first page and storing it in variable.
                    foreach ($_POST as $key => $value) {
                        $_SESSION['post'][$key] = $value;
                    }
                    quiz_values(2, 'Page 3', 40, $p_2_questions);
                }
            } else {
                quiz_values(1, 'Page 2', 20, $p_1_questions);
            }
            break;
            // execute functions for page 3
        case 'Page 3':
            // check the language avalilability in session
            if (!empty($_SESSION['language'])) {
                switch($_SESSION['language']) {
                    case 'english':
                        include('../components/holland-code-career-test/eng-data.inc.php');
                        break;
                    case 'sinhala':
                        include('../components/holland-code-career-test/sin-data.inc.php');
                        break;
                    case 'tamil':
                        include('../components/holland-code-career-test/tamil-data.inc.php');
                        break;
                }
            } else {
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
                break;
            }
            test_input_set($p_2_questions);
            if ($input_set) {
                test_input_numeric($p_2_questions);
                if (!$input_numeric) {
                    // Set error message
                    $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
                    quiz_values(2, 'Page 3', 40, $p_2_questions);
                } else {
                    // Fetch all values posted from first page and storing it in variable.
                    foreach ($_POST as $key => $value) {
                        $_SESSION['post'][$key] = $value;
                    }
                    quiz_values(3, 'Page 4', 60, $p_3_questions);
                }
            } else {
                quiz_values(2, 'Page 3', 40, $p_2_questions);
            }
            break;
            // execute functions for page 4
        case 'Page 4':
            // check the language avalilability in session
            if (!empty($_SESSION['language'])) {
                switch($_SESSION['language']) {
                    case 'english':
                        include('../components/holland-code-career-test/eng-data.inc.php');
                        break;
                    case 'sinhala':
                        include('../components/holland-code-career-test/sin-data.inc.php');
                        break;
                    case 'tamil':
                        include('../components/holland-code-career-test/tamil-data.inc.php');
                        break;
                }
            } else {
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
                break;
            }
            test_input_set($p_3_questions);
            if ($input_set) {
                test_input_numeric($p_3_questions);
                if (!$input_numeric) {
                    // Set error message
                    $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
                    quiz_values(3, 'Page 4', 60, $p_3_questions);
                } else {
                    // Fetch all values posted from first page and storing it in variable.
                    foreach ($_POST as $key => $value) {
                        $_SESSION['post'][$key] = $value;
                    }
                    quiz_values(4, 'Page 5', 80, $p_4_questions);
                }
            } else {
                quiz_values(3, 'Page 4', 60, $p_3_questions);
            }
            break;
        // execute functions for page 5
        case 'Page 5':
            // check the language avalilability in session
            if (!empty($_SESSION['language'])) {
                switch($_SESSION['language']) {
                    case 'english':
                        include('../components/holland-code-career-test/eng-data.inc.php');
                        break;
                    case 'sinhala':
                        include('../components/holland-code-career-test/sin-data.inc.php');
                        break;
                    case 'tamil':
                        include('../components/holland-code-career-test/tamil-data.inc.php');
                        break;
                }
            } else {
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
                break;
            }
            test_input_set($p_4_questions);
            if ($input_set) {
                test_input_numeric($p_4_questions);
                if (!$input_numeric) {
                    // Set error message
                    $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
                    quiz_values(4, 'Page 4', 80, $p_4_questions);
                } else {
                    // Fetch all values posted from first page and storing it in variable.
                    foreach ($_POST as $key => $value) {
                        $_SESSION['post'][$key] = $value;
                    }
                    quiz_values(5, 'Report', 100, $p_5_questions);
                }
            } else {
                quiz_values(4, 'Page 4', 80, $p_4_questions);
            }
            break;
        
        case 'Report':
             // check the language avalilability in session
            if (!empty($_SESSION['language'])) {
                switch($_SESSION['language']) {
                    case 'english':
                        include('../components/holland-code-career-test/eng-data.inc.php');
                        break;
                    case 'sinhala':
                        include('../components/holland-code-career-test/sin-data.inc.php');
                        break;
                    case 'tamil':
                        include('../components/holland-code-career-test/tamil-data.inc.php');
                        break;
                }
            } else {
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
                break;
            }
            test_input_set($p_5_questions);
            if ($input_set) {
                test_input_numeric($p_5_questions);
                if (!$input_numeric) {
                    // Set error message
                    $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
                    quiz_values(5, 'Report', 100, $p_5_questions);
                } else {
                    // Fetch all values posted from first page and storing it in variable.
                    foreach ($_POST as $key => $value) {
                        $_SESSION['post'][$key] = $value;
                    }
                    header("location: holland-code-career-test-report.php");
                }
            } else {
                quiz_values(5, 'Report', 100, $p_5_questions);
            }
            break;
        default:
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
    }
} 
?>

<?php include('../components/header.inc.php'); ?>

<?php
if (!empty($_SESSION['language']) && isset($_POST['submit'])){
    include('../components/holland-code-career-test/quiz.inc.php');
} else {
    include('../components/holland-code-career-test/choose-lang.inc.php');
}
 ?>

<?php include('../components/footer.inc.php'); ?>