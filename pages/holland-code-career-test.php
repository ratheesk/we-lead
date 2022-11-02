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

function quiz_values($page_num, $question_start, $question_end, $submit_value, $progress) {

    $GLOBALS['page_num'] = $page_num;
    $GLOBALS['question_start'] = $question_start;
    $GLOBALS['question_end'] = $question_end;
    $GLOBALS['submit_value'] = $submit_value;
    $GLOBALS['progress'] = $progress;
} 


// check the submit key for empty
if (isset($_POST['submit'])) {
    // test input
    $submitted_value = test_input($_POST['submit']);
    // validate the values
    if ($submitted_value == 'Start' 
    || $submitted_value == 'Page 2' 
    || $submitted_value == 'Page 3'
    || $submitted_value == 'Page 4'
    || $submitted_value == 'Page 5'
    || $submitted_value == 'Report'
    || $submitted_value == 'Change Language') {
        // check the value of submit
        switch($submitted_value) {
            case 'Change Language':
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
                        // set the initial values
                        quiz_values(1,0,12,'Page 2',20);
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
                    } else {
                        echo 'Unexpected value is submitted';
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

                $input_set = true;

                for ($i = 0; $i < 12; $i++) {
                    if(!isset($_POST[$questions[$i][1]])) {
                        $input_set = false;
                        break;
                    }
                }

                if ($input_set) {

                    $input_empty = false;

                    for ($i = 0; $i < 12; $i++) {
                        if(empty($_POST[$questions[$i][1]])) {
                            $input_empty = true;
                            break;
                        }
                    }

                    if ($input_empty) {
                        // Set error message
                        $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
                        quiz_values(1,0,12,'Page 2',20);
                    } else {
                        // Fetch all values posted from first page and storing it in variable.
                        foreach ($_POST as $key => $value) {
                            $_SESSION['post'][$key] = $value;
                        }

                        quiz_values(2, 12, 24, 'Page 3', 40);

                    }
                } else {
                    quiz_values(1,0,12,'Page 2',20);
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

                $input_set = true;

                for ($i = 12; $i < 24; $i++) {
                    if(!isset($_POST[$questions[$i][1]])) {
                        $input_set = false;
                        break;
                    }
                }

                if ($input_set) {

                    $input_empty = false;

                    for ($i = 12; $i < 24; $i++) {
                        if(empty($_POST[$questions[$i][1]])) {
                            $input_empty = true;
                            break;
                        }
                    }

                    if ($input_empty) {
                        // Set error message
                        $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
                        quiz_values(2,12,24,'Page 3',40);
                    } else {
                        // Fetch all values posted from first page and storing it in variable.
                        foreach ($_POST as $key => $value) {
                            $_SESSION['post'][$key] = $value;
                        }

                        quiz_values(3, 24, 36, 'Page 4', 60);

                    }
                } else {
                    quiz_values(2,12,24,'Page 3',40);
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

                $input_set = true;

                for ($i = 24; $i < 36; $i++) {
                    if(!isset($_POST[$questions[$i][1]])) {
                        $input_set = false;
                        break;
                    }
                }

                if ($input_set) {

                    $input_empty = false;

                    for ($i = 24; $i < 36; $i++) {
                        if(empty($_POST[$questions[$i][1]])) {
                            $input_empty = true;
                            break;
                        }
                    }

                    if ($input_empty) {
                        // Set error message
                        $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
                        quiz_values(3,24,36,'Page 4',60);
                    } else {
                        // Fetch all values posted from first page and storing it in variable.
                        foreach ($_POST as $key => $value) {
                            $_SESSION['post'][$key] = $value;
                        }

                        quiz_values(4, 36, 48, 'Page 5', 80);

                    }
                } else {
                    quiz_values(3,24,36,'Page 4',60);
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

                $input_set = true;

                for ($i = 36; $i < 48; $i++) {
                    if(!isset($_POST[$questions[$i][1]])) {
                        $input_set = false;
                        break;
                    }
                }

                if ($input_set) {

                    $input_empty = false;

                    for ($i = 36; $i < 48; $i++) {
                        if(empty($_POST[$questions[$i][1]])) {
                            $input_empty = true;
                            break;
                        }
                    }

                    if ($input_empty) {
                        // Set error message
                        $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
                        quiz_values(4,36,48,'Page 4',80);
                    } else {
                        // Fetch all values posted from first page and storing it in variable.
                        foreach ($_POST as $key => $value) {
                            $_SESSION['post'][$key] = $value;
                        }

                        quiz_values(5, 48, 60, 'Report', 100);

                    }
                } else {
                    quiz_values(4,36,48,'Page 4',80);
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

                $input_set = true;

                for ($i = 48; $i < 60; $i++) {
                    if(!isset($_POST[$questions[$i][1]])) {
                        $input_set = false;
                        break;
                    }
                }

                if ($input_set) {

                    $input_empty = false;

                    for ($i = 48; $i < 60; $i++) {
                        if(empty($_POST[$questions[$i][1]])) {
                            $input_empty = true;
                            break;
                        }
                    }

                    if ($input_empty) {
                        // Set error message
                        $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
                        quiz_values(5,48,60,'Report',100);
                    } else {
                        // Fetch all values posted from first page and storing it in variable.
                        foreach ($_POST as $key => $value) {
                            $_SESSION['post'][$key] = $value;
                        }

                        header("location: holland-code-career-test-report.php");

                    }
                } else {
                    quiz_values(5,48,60,'Report',100);
                }

                break;
        }
    } else {
        echo 'Undefined submission';
    } 
} 
?>

<?php include('../components/header.inc.php'); ?>

<?php
if (!empty($_SESSION['language'])){
    include('../components/holland-code-career-test/quiz.inc.php');
} else {
    include('../components/holland-code-career-test/choose-lang.inc.php');
}
 ?>

<?php include('../components/footer.inc.php'); ?>