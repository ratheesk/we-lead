<?php

    // Echo session variables that were set on previous page
    $building = $_SESSION['building'];
    $thinking = $_SESSION['thinking'];
    $creating = $_SESSION['creating'];
    $helping = $_SESSION['helping'];
    $persuading = $_SESSION['persuading'];
    $organising = $_SESSION['organising'];
    echo $building;
    echo $thinking;

    function primary_interest($args) {
        $results = array();
        $max_value = max($args);
        $results[] = $max_value;
     
        //now get the key for the first occurence of max value
        $found_key = false;
        foreach ($args as $key => $value) {
            if ($value == $max_value && !$found_key) {
                $results[] =  $key;
                $found_key = true;
            }
        }
        return $results;
    }

    $obatained_values = array(
        'building' => $building,
        'thinking' => $thinking,
        'creating' => $creating,
        'helping' => $helping,
        'persuading' => $persuading,
        'organising' => $organising);

    $primary_interest_area = primary_interest($obatained_values);

    echo 'Max value = '.$primary_interest_area[0].' and is in ' . $primary_interest_area[1];
    
    ?>
<h4 class="card-title">Your Career Interest Profile</h4>
<p class="card-text">This section shows your top career interest areas. There are 6 total interest
    areas, each with its own set of typical work tasks, roles, and values. Some of these interest areas
    will appeal to you, while others will be less attractive. Choosing a career which is a good match
    for your interest profile ensures that you enjoy your daily work and get satisfaction out of your
    accomplishments.</p>