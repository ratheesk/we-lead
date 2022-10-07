
<!--chartjs-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

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