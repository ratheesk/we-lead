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

$html = '
<section id="report">
    <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp mt-5" data-wow-delay="0.1s">
                <h4 class="section-title bg-white text-center text-primary px-3">Results</h4>
    </div>
        <div class=" text-center mt-4">
            
            <div class="text-left">
                <p data-aos="fade-up">Welcome to your career report! There is  a lot of information here, so take your
                    time and read through it at your own pace.</p>
                <p data-aos="fade-up">Your report is split up into different sections, each of which addresses a
                    different factor in your career search. You will learn about your interests, your personality, and the
                    jobs and work environments that suit you best. You will get personalized advice and suggestions for
                    exploring your career options and planning a successful job search.</p>
                <p data-aos="fade-up">You can read your report straight through, or you can skip to the sections that
                    interest you most.</p>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                Get started!
            </div>
            <div class="card-body ml-2 mr-2">

                <h4 class="card-title">Your Career Interest Profile</h4>
                <p class="card-text">This section shows your top career interest areas. There are 6 total interest
                    areas, each with its own set of typical work tasks, roles, and values. Some of these interest areas
                    will appeal to you, while others will be less attractive. Choosing a career which is a good match
                    for your interest profile ensures that you enjoy your daily work and get satisfaction out of your
                    accomplishments.</p>

                <!--Interest areas explanation-->
                <h4 class="card-title mt-4">The Six Interest Areas</h4>
                <p class="card-text">Each of the six interest areas describes a cluster of related work tasks and
                    activities. People who
                    are drawn to each of these interest areas tend to have certain characteristics, preferences, and
                    personality traits
                    in common.</p>

                <div class="row align-middle border-0 pt-3 ml-2 mr-2">
                    <div class="col-md-2"><strong>Building</strong></div>
                    <div class="col-md-10">Building jobs involve the use of tools, machines, or physical skill. Builders
                        like working
                        with their hands and bodies, working with plants and animals, and working outdoors.</div>
                    <div class="col-md-2 mt-3"><strong>Thinking</strong></div>
                    <div class="col-md-10 mt-2">Thinking jobs involve theory, research, and intellectual inquiry.
                        Thinkers like working
                        with ideas and concepts, and enjoy science, technology, and academia.</div>
                    <div class="col-md-2 mt-3"><strong>Creating</strong></div>
                    <div class="col-md-10 mt-2">Creating jobs involve art, design, language, and self-expression.
                        Creators like working
                        in unstructured environments and producing something unique.</div>
                    <div class="col-md-2 mt-3"><strong>Helping</strong></div>
                    <div class="col-md-10 mt-2">Helping jobs involve assisting, teaching, coaching, and serving other
                        people. Helpers
                        like working in cooperative environments to improve the lives of others.</div>
                    <div class="col-md-2 mt-3"><strong>Persuading</strong></div>
                    <div class="col-md-10 mt-2">Persuading jobs involve leading, motivating, and influencing others.
                        Persuaders like
                        working in positions of power to make decisions and carry out projects.</div>
                    <div class="col-md-2 mt-3"><strong>Organising</strong></div>
                    <div class="col-md-10 mt-2">Organizing jobs involve managing data, information, and processes.
                        Organizers like to
                        work in structured environments to complete tasks with precision and accuracy.</div>
                </div>
                <!--End of Interest areas explanation-->

                <!--Top Interest areas explanation-->
                <h4 class="card-title mt-4">Your Top Interests</h4>
                <p class="card-text">Your primary interest area is also called your career type. Your career type
                    describes the kind of
                    job tasks and activities you enjoy doing, as well as what motivates and satisfies you at work.
                    Certain personality
                    traits and characteristics are associated with each career type.</p>
                <!--End of Top Interest areas explanation-->
';

$html .= '<h4 class="card-title mt-4">YOUR PRIMARY INTEREST AREA IS '.$primary[$ind][0].'</h4>
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