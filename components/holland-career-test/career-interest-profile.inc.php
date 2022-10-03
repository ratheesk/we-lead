<!--chartjs-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<h4 class="card-title">Your Career Interest Profile</h4>
<p class="card-text">This section shows your top career interest areas. There are 6 total interest
    areas, each with its own set of typical work tasks, roles, and values. Some of these interest areas
    will appeal to you, while others will be less attractive. Choosing a career which is a good match
    for your interest profile ensures that you enjoy your daily work and get satisfaction out of your
    accomplishments.</p>

<?php
 //get the percentages
 $building = ($k / 10) * 100;
 $thinking = ($q / 10) * 100;
 $creating = ($m / 10) * 100;
 $helping = ($n / 10) * 100;
 $persuading = ($o / 10) * 100;
 $organising = ($p / 10) * 100;
 echo 'Your primary interest area is '.$primary_interest_area[0].' and is in ' . $primary_interest_area[1];
 ?>

<!--Bar chart-->
<div class="d-flex justify-content-center">
    <canvas id="myChart" height="400px" style="width:100%; max-width:600px"></canvas>
</div>
<!--End of Bar chart-->

<!--Interest areas explanation-->
<h4 class="card-title">The Six Interest Areas</h4>
<p class="card-text">Each of the six interest areas describes a cluster of related work tasks and activities. People who
    are drawn to each of these interest areas tend to have certain characteristics, preferences, and personality traits
    in common.</p>

<div class="row align-middle border-0 pt-3 ml-2 mr-2">
    <div class="col-md-2"><strong>Building</strong></div>
    <div class="col-md-10">Building jobs involve the use of tools, machines, or physical skill. Builders like working
        with their hands and bodies, working with plants and animals, and working outdoors.</div>
    <div class="col-md-2 mt-3"><strong>Thinking</strong></div>
    <div class="col-md-10 mt-2">Thinking jobs involve theory, research, and intellectual inquiry. Thinkers like working
        with ideas and concepts, and enjoy science, technology, and academia.</div>
    <div class="col-md-2 mt-3"><strong>Creating</strong></div>
    <div class="col-md-10 mt-2">Creating jobs involve art, design, language, and self-expression. Creators like working
        in unstructured environments and producing something unique.</div>
    <div class="col-md-2 mt-3"><strong>Helping</strong></div>
    <div class="col-md-10 mt-2">Helping jobs involve assisting, teaching, coaching, and serving other people. Helpers
        like working in cooperative environments to improve the lives of others.</div>
    <div class="col-md-2 mt-3"><strong>Persuading</strong></div>
    <div class="col-md-10 mt-2">Persuading jobs involve leading, motivating, and influencing others. Persuaders like
        working in positions of power to make decisions and carry out projects.</div>
    <div class="col-md-2 mt-3"><strong>Organising</strong></div>
    <div class="col-md-10 mt-2">Organizing jobs involve managing data, information, and processes. Organizers like to
        work in structured environments to complete tasks with precision and accuracy.</div>
</div>
<!--End of Interest areas explanation-->

<!--Top Interest areas explanation-->
<h4 class="card-title">Your Top Interests</h4>
<p class="card-text">Your primary interest area is also called your career type. Your career type describes the kind of
    job tasks and activities you enjoy doing, as well as what motivates and satisfies you at work. Certain personality
    traits and characteristics are associated with each career type.</p>
<!--End of Top Interest areas explanation-->
<!--Script for bar chart-->
<script>
var xValues = ["Building", "Thinking", "Creating", "Helping", "Persuading", "Organising"];
var yValues = [<?php echo $building; ?>,
    <?php echo $thinking; ?>,
    <?php echo $creating; ?>,
    <?php echo $helping; ?>,
    <?php echo $persuading; ?>,
    <?php echo $organising; ?>
];
var barColors = ["red", "green", "blue", "orange", "brown", "yellow"];

new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: "Your interest areas"
        },
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true, // minimum value will be 0.
                    steps: 10,
                    max: 100
                }
            }]
        }
    }
});
</script>
<!--End of Script for bar chart-->