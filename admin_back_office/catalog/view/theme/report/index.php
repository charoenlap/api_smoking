<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card border-0">
				<div class="card-header bg-white">
					<h3 class="text-theme">รายงาน</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div id="chart_div"></div>
						</div>
						<div class="col-md-12">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center" width="10%">#</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">1</td>
										<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, ducimus.</td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, ducimus.</td>
									</tr>
									<tr>
										<td class="text-center">3</td>
										<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, ducimus.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#page-report').addClass('active');
	});
</script>
<script type="text/javascript">

  // Load the Visualization API and the corechart package.
  google.charts.load('current', {'packages':['corechart']});

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  function drawChart() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
      ['Mushrooms', 3],
      ['Onions', 1],
      ['Olives', 1],
      ['Zucchini', 1],
      ['Pepperoni', 2]
    ]);

    // Set chart options
    var options = {'title':'How Much Pizza I Ate Last Night', 'width':400,'height':300};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>