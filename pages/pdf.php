<?php
// require composer autoload
require __DIR__ . '../../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
//unlink('filename.pdf');

$primary = [['BUILDING','Builders']];
$paragraph = [
    ['As a Builder, you prefer physical work that uses your hands and body and gives you a tangible
result for your efforts. You prefer working with concrete objects, not abstract concepts. You may be drawn to work
with tools, machines, plants, or animals. You like to be outdoors and be physically active throughout the day.',
'Because you are a Builder, you will prefer a career that allows you to use and hone your hands-on
skills. You enjoy learning to construct, craft, repair, maintain, and tinker. You like creating practical things and
fixing necessary systems.',
'Builders tend to be pragmatic, down-to-earth people who take a “just do it” approach to life.
Builders often dislike having to explain or discuss their work with others, preferring instead to jump in and simply
get it done.',
'Builders like their work best when they can see a real, physical result of their efforts. As a
Builder, your primary career goal will be to discover a job where you can use your physical or mechanical skills to
take useful, observable action on the world around you.']
];

$top_job_tasks = [
    ['Building',
    'Repairing',
    'Taking Action',
    'Using Machines',
    'Using Tools']
];

$core_values = [
    ['Practicality',
    'Productivity',
    'Structure',
    'Independence',
    'Physical Skill']
];

$key_personality_traits = [
    ['Realistic',
    'Sensible',
    'Mechanical',
    'Traditional',
    'Down-to-earth']
];

$sample_jobs = [
    ['Police Officer or Detective',
    'Pilot',
    'Electrician',
    'Carpenter',
    'Auto Mechanic',
    'Building Inspector',
    'Machinist',
    'Civil Engineer',
    'Athlete or Coach']
];

$career_fields = [
    ['Construction',
    'Mechanics',
    'Transportation & Distribution',
    'Military',
    'Athletics',
    'Farming or Ranching',
    'Manufacturing and Industry',
    'Maintenance and Repair',
    'Food Preparation']
];

$areas_of_study = [
    ['Physical Education or Exercise Science',
    'Construction Management',
    'Engineering',
    'Agriculture',
    'Environmental Science',
    'Food Science',
    'Forestry',
    'Construction, Maintenance or Repair',
    'Culinary Arts']
];

$ind = 0;

$html = '<h4 class="card-title mt-4">YOUR PRIMARY INTEREST AREA IS '.$primary[$ind][0].'</h4>
<p class="card-text">'.$paragraph[$ind][0].'</p>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mb-3">
            <span><strong>Top Job Tasks</strong><span>
                    <ul class="list-group mt-1">';

foreach ($top_job_tasks[$ind] as $value) {
    $html .= '<li class="list-item">'.$value.'</li>';
}

$html .= '</ul>
        </div>
        <div class="col-md-4 mb-3">
            <span><strong>Your Core Values</strong><span>
                    <ul class="list-group mt-1">';

foreach ($core_values[$ind] as $value) {
    $html .= '<li class="list-item">'.$value.'</li>';
}
                    
$html .='</ul>
        </div>
        <div class="col-md-4 mb-3">
            <span><strong>Key Personality Traits</strong><span>
                    <ul class="list-group mt-1">';
foreach ($key_personality_traits[$ind] as $value) {
    $html .= '<li class="list-item">'.$value.'</li>';
}

$html .='</ul>
        </div>
    </div>
</div>

<p class="card-text">'.$paragraph[$ind][1].'</p>

<p class="card-text">'.$paragraph[$ind][2].'</p>

<p class="card-text">'.$paragraph[$ind][3].'</p>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mb-3">
            <span><strong>Sample Jobs for '.$primary[$ind][1].'</strong><span>
                    <ul class="list-group mt-1">';

foreach ($sample_jobs[$ind] as $value) {
    $html .= '<li class="list-item">'.$value.'</li>';
}                    

$html .='</ul>
        </div>
        <div class="col-md-4 mb-3">
            <span><strong>Career Fields for '.$primary[$ind][1].'</strong><span>
                    <ul class="list-group mt-1">';

foreach ($career_fields[$ind] as $value) {
    $html .= '<li class="list-item">'.$value.'</li>';
}  
               
$html .='</ul>
        </div>
        <div class="col-md-4 mb-3">
            <span><strong>Areas of Study for '.$primary[$ind][1].'</strong><span>
                    <ul class="list-group mt-1">';

foreach ($areas_of_study[$ind] as $value) {
    $html .= '<li class="list-item">'.$value.'</li>';
}  

$html .='</ul>
        </div>
    </div>
</div>
';
$mpdf = new \Mpdf\Mpdf();

$mpdf->useSubstitutions = true; // optional - just as an example
//$mpdf->SetHeader($url . "\n\n" . 'Page {PAGENO}');  // optional - just as an example
$mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header
//$mpdf->setBasePath($url);
$mpdf->WriteHTML($html);

$mpdf->Output('filename.pdf');


?>