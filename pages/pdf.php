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

$core_needs = [
    ['Use my hands and body to do something useful',
    'Learn how to use tools, machines, and practical objects',
    'Get outdoors regularly and/or have a connection to nature',
    'Have a physical, tangible product to show for my efforts']
];

$prefered_tasks = [
    ['Working with tools or machines',
    'Working with plants or animals',
    'Repairing or maintaining things, especially mechanical systems',
    'Building, constructing, or crafting things',
    'Being athletic or physical',
    'Making something tangible, practical and useful']
];

$key_questions = [
    ['Will this career allow me to be active throughout the day?',
    'Will I learn and use practical skills in this career?',
    'Will this career allow me to do plenty of hands-on work?']
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

<!--Choosing the right career-->
<h4 class="card-title mt-4">Choosing the Right Career</h4>
<p class="card-text">As you continue in your career search, it will be crucial that you have a system
    for evaluating your opportunities.
    You need a well-defined approach to looking at various careers and deciding whether they are worth
    further
    exploration. You’ve already taken the first step by assessing your interests, but now the task is to
    take that selfknowledge and translate it into a game plan for exploring your career options.</p>

<p class="card-text">The first step is to clearly understand your criteria for the career path you seek.
    You don’t need to know exactly
    which career is right for you, but you do need to know what you are looking for. You must understand
    the factors
    which are more important to your happiness and satisfaction in a career. Equally, you must
    understand the
    aspects of a career that you want to avoid, so that you don’t end up in a job that frequently
    requires you to do
    things that are not a good fit.</p>

<p class="card-text">This section will suggest some criteria that you may want to use as part of your
    career exploration process. These
    are based on your interest profile, but you will probably find that some of the suggested criteria
    seem more
    relevant to you than others. You may also find that you want to add to what is given here. Use these
    suggestions
    as a starting point to build your own system of evaluating possible careers.
</p>
<h5 class="card-title mt-4">What Makes Your Ideal Career?</h5>
<p class="card-text">In choosing a career, you want to be mindful of the factors that are most important
    to you. Many of these factors will be based on your interests and personality, but some will be
    unique to you. This section will provide you with some guidance in the factors that may be important
    to you in your career search. </p>


<h5 class="card-title mt-4">Satisfying Your Core Needs</h5>
<p class="card-text">An ideal career should satisfy your most fundamental motivations to work. Although
    everyone wants to feel a sense of purpose, we all differ in how we like to feel that we contribute.
    To understand what sort of career will be satisfying, you must understand the factors that create
    satisfaction for you.</p>

<p class="card-text">Below, you will see a list of the factors that are most likely to be important to
    you in a career. Generally, if a career has all or most of these factors, you will find the
    day-to-day work satisfying. As you explore different careers, you can use this list as a sort of
    checklist for each potential career. The more closely a career seems to fit your list of core needs,
    the more likely you will be happy with it in the long term.</p>

<!--Your Core Needs-->
<div class="container-fluid">
<span class="ml-2"><strong>Your Core Needs :</strong></span>
<ul class="list-group mt-1 ml-3">
';

foreach ($core_needs[$ind] as $value) {
    $html .= '<li class="list-item">'.$value.'</li>';
} 

$html .= '</ul>
</div>
<!--End of Your Core Needs-->
<h5 class="card-title mt-4">Doing tasks and activities that suit you</h5>
<p class="card-text">One of the most important aspects of job satisfaction is the extent to
            which your
            daily work fits with your preferred
            types of activities. Although this may seem obvious, it can be easy to overlook the mundane
            day-to-day aspects of
            a job that sounds exciting in the abstract. Before you decide a job is right for you, be
            sure you
            understand what the
            everyday tasks of that job entail, and compare these tasks with your preferred tasks listed
            below.
</p>
<!--Prefered tasks-->
<div class="container-fluid">
<span class="ml-2"><strong>Your prefered tasks :</strong></span>
<ul class="list-group mt-1 ml-3">
';

foreach ($prefered_tasks[$ind] as $value) {
    $html .= '<li class="list-item">'.$value.'</li>';
} 

$html .= '
</ul>
</div>
<!--End of Prefered tasks-->
<!--Tasks to avoid-->
<h5 class="card-title mt-4">Avoiding What You Do not Like</h5>
<p class="card-text">Almost as important as understanding what tasks you enjoy is
                    understanding which tasks and activites you would prefer to avoid. If some parts of
                    a job are very appealing to you, but other aspects are boring, irritating, or
                    otherwise unpleasant, it is unlikely you will be happy in that job over the long term.
</p>
<p class="card-text">For each career you are considering, take stock of the typical daily
                    activities and make sure that you will not have to spend significant time on tasks
                    you do not enjoy. Although nobody has a job that they love all the time, it is
                    important to avoid career paths that require a lot of time spent on activities that
                    you simply are not suited to.</p>

<div class="container-fluid">
    <span class="ml-2"><strong>Tasks to Avoid :</strong></span>
    <ul class="list-group mt-1 ml-3">
';

foreach ($prefered_tasks[$ind] as $value) {
    $html .= '<li class="list-item">'.$value.'</li>';
}

$html .= '
</ul>
</div>
<!--End of Tasks to avoid-->
<!--Asking questions-->
<h5 class="card-title mt-4">Asking The Important Questions</h5>
<p class="card-text">As you explore careers, you will be asking many questions.
                            You are probably already wondering about common concerns, like how much
                            money you might make, how much education or training you will need, or how
                            easy it might be to find a job in a particular field.</p>

<p class="card-text">But it’s also important that you ask questions that are
                            personal to you and your interests. These questions will help you dial in to
                            the careers that will suit your personality. Here, we suggest some questions
                            that you may want to ask about each career you are seriously considering.
</p>
<p class="card-text">You might answer these questions by doing research online,
                            in books, magazines, or trade journals, or by interviewing people in the
                            field. You may find that the answers to some questions are not a clear “yes”
                            or “no,” and that’s fine. The goal is not to get black-and-white answers to
                            every question, but to gain a better and more complete understanding of
                            whether a career is a good fit for you.</p>

<div class="container-fluid">
 <span class="ml-2"><strong>Your Key Questions :</strong></span>
 <ul class="list-group mt-1 ml-3">
';

foreach ($key_questions[$ind] as $value) {
    $html .= '<li class="list-item">'.$value.'</li>';
}

$html .= '
</ul>
</div>
<!--End of Asking questions-->
<!--End of Choosing the right career-->
<!--The Next Step-->
<h4 class="card-title mt-4">The Next Step</h4>
<p class="card-text">You have just made an excellent start to your career
                                    search process by exploring your interests, talents, preferences,
                                    and values. Give yourself a pat on the back!</p>

<p class="card-text">Although choosing a career is not an easy process,
                                    it can be an incredibly rewarding one when done right. By doing
                                    an objective assessment of who you are and what you are suited to,
                                    you have already gotten off to a huge head start.</p>

<p class="card-text">You have digested a lot of information, so take a
                                    while to sit with it. When you are ready, come back to your list of
                                    careers and pick out the ones that sound most appealing. Click on
                                    the "Read more" link next to each of these
                                    careers to learn more about them. Use this as a jumping-off point to
                                    begin your own research.
</p>
<p class="card-text">You have plenty of work ahead of you to find your
                                    ideal career, but you should now feel well prepared to get
                                    started. We wish you the best of luck in your search!</p>
<!--End of The Next Step-->
</div>
</div>
</div>
</section>
';

$mpdf = new \Mpdf\Mpdf();

$mpdf->useSubstitutions = true; // optional - just as an example
//$mpdf->SetHeader($url . "\n\n" . 'Page {PAGENO}');  // optional - just as an example
$mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header
//$mpdf->setBasePath($url);
$mpdf->WriteHTML($html);

$mpdf->Output('filename.pdf');


?>