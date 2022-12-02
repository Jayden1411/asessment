<!DOCTYPE html>  
<html>  
    <head>  
        <title>Clicks Measurement</title>
	   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
	   <script type="text/javascript">
	   google.charts.load('current', {'packages':['corechart']});
	   google.charts.setOnLoadCallback(drawChart);
	  function drawChart()
	  {
	    var data = google.visualization.arrayToDataTable([
	     ['Date', 'Clicks'],
	     <?php
	     foreach($data as $row)
		     {
			 echo "['".$row["click_date"]."', ".$row["clicks"]."],";
		     }
	     ?>
	    ]);

	    var options = {
	     title : 'Clicks Measurement',
	     pieHole : 0.4,
	     chartArea:{left:150,top:70,right:150,width:'80%',height:'60%'}
	    };
	    var chart_area = document.getElementById('piechart');
	    var chart = new google.visualization.BarChart(chart_area);

	    google.visualization.events.addListener(chart, 'ready', function(){
	     chart_area.innerHTML = '<img src="' + chart.getImageURI() + '" class="img-responsive">';
	    });
	    chart.draw(data, options);
	   }
		
	    </script>  
    </head>  
    <body>  
        <div class="container" id="testing">  
	   <div class="panel panel-default">
	   <div align="right">
		   <form method="post" id="make_pdf" action="<?php echo e(url('/test')); ?>">
		    <?php echo csrf_field(); ?>
		    <input type="hidden" name="hidden_html" id="hidden_html" />
		    <button type="button" name="create_pdf" id="create_pdf" class="btn btn-danger btn-xs">Make PDF</button>
		   </form>
	     </div>
	    <div class="panel-body" align="center">
	     <div id="piechart" style="width: 100%; max-width:900px; height: 500px; "></div>
	    </div>
	   </div>
        </div>
 
    </body>  
</html>

<script>
	$(document).ready(function(){
		$('#create_pdf').click(function(){
		$('#hidden_html').val($('#testing').html());
		$('#make_pdf').submit();
		});
	});
</script>

<?php /**PATH C:\xampp\htdocs\parallel\resources\views/index.blade.php ENDPATH**/ ?>