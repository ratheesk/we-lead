<?php
session_start(); // Session starts here.
$title = "We Lead | Holland Code Career Test";
$description = "Take this FREE career test to discover your interest in different types of careers in the world and find your most suitable job catergaries to work.";

// function to test inputs in forms
function test_input($data) {

    $data = trim($data); // strip unnecessary characters
    $data = stripslashes($data); // remove backslashes
    $data = htmlspecialchars($data);  // convert special characters to HTML entities
    
    return $data;
  }

// set variable values for quiz page
function quiz_values($page_num, $submit_value, $progress, $questions) {

    $GLOBALS['page_num'] = $page_num;
    $GLOBALS['submit_value'] = $submit_value;
    $GLOBALS['progress'] = $progress;
    $GLOBALS['questions'] = $questions;

    shuffle($GLOBALS['questions']); // shuffle the questions
} 

// check do all questions have answers
function test_answer_set($questions) {

    $GLOBALS['answer_set'] = true;

    for ($i = 0; $i < 12; $i++) {
        if(!isset($_POST[$questions[$i][1]])) {
            $GLOBALS['answer_set'] = false;
            break;
        }
    }

}

// check whether all answers are numeric
function test_answer_numeric ($questions) {

    $GLOBALS['answer_numeric'] = true;

    for ($i = 0; $i < 12; $i++) {
        if(!is_numeric($_POST[$questions[$i][1]]) && empty($_POST[$questions[$i][1]])) {
            $GLOBALS['answer_numeric'] = false;
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
                            include('../holland-code-career-test/eng-data.inc.php');
                            break;
                        case 'sinhala':
                            include('../holland-code-career-test/sin-data.inc.php');
                            break;
                        case 'tamil':
                            include('../holland-code-career-test/tamil-data.inc.php');
                            break;
                        default:
                            include('../holland-code-career-test/eng-data.inc.php');
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
                        include('../holland-code-career-test/eng-data.inc.php');
                        break;
                    case 'sinhala':
                        include('../holland-code-career-test/sin-data.inc.php');
                        break;
                    case 'tamil':
                        include('../holland-code-career-test/tamil-data.inc.php');
                        break;
                    default:
                        include('../holland-code-career-test/eng-data.inc.php');
                }
            } else {
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
                break;
            }
            test_answer_set($p_1_questions);
            if ($answer_set) {
                test_answer_numeric($p_1_questions);
                if (!$answer_numeric) {
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
                        include('../holland-code-career-test/eng-data.inc.php');
                        break;
                    case 'sinhala':
                        include('../holland-code-career-test/sin-data.inc.php');
                        break;
                    case 'tamil':
                        include('../holland-code-career-test/tamil-data.inc.php');
                        break;
                    default:
                        include('../holland-code-career-test/eng-data.inc.php');                        
                }
            } else {
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
                break;
            }
            test_answer_set($p_2_questions);
            if ($answer_set) {
                test_answer_numeric($p_2_questions);
                if (!$answer_numeric) {
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
                        include('../holland-code-career-test/eng-data.inc.php');
                        break;
                    case 'sinhala':
                        include('../holland-code-career-test/sin-data.inc.php');
                        break;
                    case 'tamil':
                        include('../holland-code-career-test/tamil-data.inc.php');
                        break;
                    default:
                        include('../holland-code-career-test/eng-data.inc.php');
                }
            } else {
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
                break;
            }
            test_answer_set($p_3_questions);
            if ($answer_set) {
                test_answer_numeric($p_3_questions);
                if (!$answer_numeric) {
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
                        include('../holland-code-career-test/eng-data.inc.php');
                        break;
                    case 'sinhala':
                        include('../holland-code-career-test/sin-data.inc.php');
                        break;
                    case 'tamil':
                        include('../holland-code-career-test/tamil-data.inc.php');
                        break;
                    default:
                        include('../holland-code-career-test/eng-data.inc.php');
                }
            } else {
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
                break;
            }
            test_answer_set($p_4_questions);
            if ($answer_set) {
                test_answer_numeric($p_4_questions);
                if (!$answer_numeric) {
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
                        include('../holland-code-career-test/eng-data.inc.php');
                        break;
                    case 'sinhala':
                        include('../holland-code-career-test/sin-data.inc.php');
                        break;
                    case 'tamil':
                        include('../holland-code-career-test/tamil-data.inc.php');
                        break;
                    default:
                        include('../holland-code-career-test/eng-data.inc.php');
                }
            } else {
                unset($_SESSION['language']);
                header('Location: '.$_SERVER['PHP_SELF']);
                break;
            }
            test_answer_set($p_5_questions);
            if ($answer_set) {
                test_answer_numeric($p_5_questions);
                if (!$answer_numeric) {
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

 include('../components/header.inc.php'); // header

    if (!empty($_SESSION['language']) && isset($_POST['submit'])){
        include('../holland-code-career-test/quiz.inc.php'); //quiz component
    } else {
        include('../holland-code-career-test/choose-lang.inc.php'); // choose language component
    }

 include('../components/footer.inc.php'); // footer
 
 ?>