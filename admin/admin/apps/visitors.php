<?php  include '../adminphpserver.php'; ?>
<?php



?>

<div class="canvas" style="display: inline-block; padding-top: 100px;">
   <canvas id="dtChart" width="200" height="120" class="img"></canvas>
</div>
 <div class="canvas" style="float: right; padding-top: 100px;">
   <h1 style="color: gray; text-align: center; text-transform: capitalize;">Real Time statistic </h1>       <table style="text-align: center; margin-top: 100px; width: 50%">
   	          <tr style="border:none!important;">
   	          	<th>Online</th>
   	          	<th>Visitors</th>
   	          	<th>Users</th>
   	          </tr>
   	          <tr style="border:1px solid lightgray;">
   	          	<td><?php echo $nruvon; ?></td>
   	          	<td><?php echo $nrvst; ?></td>
   	          	<td><?php echo $nrusr; ?></td>
   	          </tr>
   	         
          </table>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script type="text/javascript">
	var ctx = document.getElementById("dtChart").getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["january", "Feb", "march", "april"],
        datasets: [{
            label: 'total user',
            data: [12, 19, 3, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
               
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
             
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

