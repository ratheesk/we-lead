
<!--chartjs-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
 //get the percentages
 $building = ($k / 40) * 100;
 $thinking = ($q / 40) * 100;
 $creating = ($m / 40) * 100;
 $helping = ($n / 40) * 100;
 $persuading = ($o / 40) * 100;
 $organising = ($p / 40) * 100;
 ?>


<div class="d-flex justify-content-center">
    <canvas id="myChart" height="400px" style="width:100%; max-width:600px; max-height:400px; "></canvas>
</div>



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

const ctx = document.getElementById('myChart');

const plugin = {
  id: 'custom_canvas_background_color',
  beforeDraw: (chart) => {
    const {ctx} = chart;
    ctx.save();
    ctx.globalCompositeOperation = 'destination-over';
    ctx.fillStyle = 'white';
    ctx.fillRect(0, 0, chart.width, chart.height);
    ctx.restore();
  }
};

const myChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            }
        },
        title: {
            display: true,
            text: "Your interest areas"
        },
        scales: {
            y: {
                suggestedMax: 100
            },
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true, // minimum value will be 0.
                    steps: 10,
                    max: 100
                }
            }]
        }
    },
    plugins: [plugin]
});
</script>
<!--End of Script for bar chart-->
