<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"style="font-size: 12px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script type="text/javascript"src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</head>
<body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div class="row justify-content-center">
            <div class="card"  style="display: flex;  width: 95%;">
                <div class="card-header"><?php echo e(__('Clicks Per Vacancy')); ?></div>
		 <div class="panel-body" align="center">	
			<div class="row"style="display: flex;  width: 95%;">				
				<div id="myChart" style="max-width:auto; height:400px;"></div>
				<div id="pie_chartx" style="width:auto ; height: 400px;"></div>
			</div>
		</div> 
		
                </div>  
        </div>
</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js" integrity="sha512-t2JWqzirxOmR9MZKu+BMz0TNHe55G5BZ/tfTmXMlxpUY8tsTo3QMD27QGoYKZKFAraIPDhFv56HLdN11ctmiTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  
  <style type="text/css">
   .box{
    margin:0 auto;
   }
  </style>
<script type="text/javascript">
   var analytics = <?php echo $data; ?>
   google.charts.load('current', {'packages':['corechart']});
   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : ''
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
   
  </script>

 <script>
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
		var data = google.visualization.arrayToDataTable( <?php echo $data; ?>);

		var options = {
		  title:'Clicks Measurement'
		};

		var chart = new google.visualization.BarChart(document.getElementById('myChart'));
		  chart.draw(data, options);
		}
	</script>
 </body>   
 </html>   

<?php /**PATH C:\xampp\htdocs\parallel\resources\views/adverts/graph.blade.php ENDPATH**/ ?>