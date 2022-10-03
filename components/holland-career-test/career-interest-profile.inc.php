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

<canvas id="myChart" height="400px" style="width:100%; max-width:600px"></canvas>

<script>
var xValues = ["Bbuilding", "Thinking", "Creating", "Helping", "Persuading","Organising"];
var yValues = [<?php echo $building; ?>, 
                <?php echo $thinking; ?>, 
                <?php echo $creating; ?>, 
                <?php echo $helping; ?>, 
                <?php echo $persuading; ?>, 
                <?php echo $organising; ?>];
var barColors = ["red", "green","blue","orange","brown","yellow"];

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
    legend: {display: false},
    title: {
      display: true,
      text: "Your interest"
    },
    scales: {
        yAxes: [{
            display: true,
            ticks: {
                beginAtZero: true,
                steps: 10,   // minimum value will be 0.
                max: 100
            }
        }]
        }
  }
});
</script>   