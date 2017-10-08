<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<body>
	<!-- Second navbar -->
	<div class="navbar navbar-default" id="navbar-second">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo site_url()?>/superAdmin/beranda" class="hidup"><i class="icon-home2 position-left"></i> Beranda</a></li>
				
				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Laundry <span class="caret"></span> </a>
					<ul class="dropdown-menu width-200">
						<li class="dropdown-header">Inventory Laundry</li>
						<li>
							<a href="<?php echo site_url()?>/superAdmin/laundry"><i class="icon-align-center-horizontal"></i> Kelola Data Laundry</a>
						</li>

						<li class="dropdown-header">Inventory Point</li>
						<li>
							<a href="starters/layout_boxed.html"><i class="icon-trophy3"></i> Kelola Poin</a>
						</li>
					</ul>
				</li>

				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-color-sampler position-left"></i> Inventory Pewangi </a>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group position-left"></i> Inventory Detergen
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /second navbar -->
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Dashboard content -->
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-7 animated bounceInLeft" >
						<!-- Latest posts -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title">Traffick Poin per Laundry</h6>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                	</ul>
			                	</div>
		                	</div>

							<div class="panel-body">
								<div class="row">
								<div id = "pointL" style="width: 95%; margin: 0 auto; margin-left:-1%;"></div>
								</div>
							</div>
						</div>
						<!-- /latest posts -->
					</div>

					<div class="col-lg-5 col-sm-5 col-md-5 animated bounceInRight">
						<!-- Inventory barang -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title">Ketersediaan Pewangi & Detergen</h6>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                	</ul>
			                	</div>
							</div>

							<div class="panel-body">
								<div id = "pede"></div>
							</div>
						</div>
						<!-- /Inventory barang -->
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 animated bounceIn">
						<!-- Daily financials -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title">Total Pelanggan</h6>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                	</ul>
			                	</div>
							</div>

							<div class="panel-body">
								<div id = "totpel"></div>
							</div>
						</div>
						<!-- /daily financials -->
					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	<!-- Footer -->
	<div class="footer text-muted">
		&copy; 2017. <a href="#">Kuy Laundry</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">RD</a>
	</div>
	<!-- /footer -->
	
	<!--untuk grafik point per laundry-->
	<script type="text/javascript">
		Highcharts.chart('pointL', {
		    chart: {
		        type: 'spline'
		    },
		    title: {
		        text: ''
		    },
		    subtitle: {
		        text: ''
		    },
		    xAxis: {
		        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		    },
		    yAxis: {
		        title: {
		            text: 'Jumlah Poin'
		        }
		    },
		    tooltip: {
		        crosshairs: true,
		        shared: true
		    },
		    plotOptions: {
		        spline: {
		            marker: {
		                radius: 4,
		                lineColor: '#666666',
		                lineWidth: 1
		            }
		        }
		    },
		    exporting:{
		    	enabled:false
		    },
		    credits:{
		    	enabled:false
		    },
		    series: [{
		        name: 'Oke Laundry',
		        marker: {
		            symbol: 'square'
		        },
		        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 10, 23.3, 18.3, 13.9, 9.6]

		    }, {
		        name: 'Piss Laundry',
		        marker: {
		            symbol: 'diamond'
		        },
		        data: [2.4, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
		    },{
		        name: 'Cihuy Laundry',
		        marker: {
		            symbol: 'circle'
		        },
		        data: [4, 7, 9, 10.5, 11, 13.2, 16.0, 15.6, 20.2, 25.3, 28.6, 30.8]
		    }]
		});
	</script>

	<!--grafik total pelanggan-->
	<script type="text/javascript">
		Highcharts.chart('totpel', {
		    chart: {
		        type: 'bar'
		    },
		    title: {
		        text: ''
		    },
		    subtitle: {
		        text: ''
		    },
		    xAxis: {
		        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei'],
		        title: {
		            text: null
		        }
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            enabled:false
		        },
		        labels: {
		            overflow: 'justify'
		        }
		    },
		    exporting:{
		    	enabled:false
		    },
		    tooltip: {
		        valueSuffix: ' millions'
		    },
		    plotOptions: {
		        bar: {
		            dataLabels: {
		                enabled: true
		            }
		        }
		    },
		    legend: {
		        layout: 'vertical',
		        align: 'right',
		        verticalAlign: 'top',
		        x: -40,
		        y: 80,
		        floating: true,
		        borderWidth: 1,
		        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
		        shadow: true
		    },
		    credits: {
		        enabled: false
		    },
		    series: [{
		        name: 'Oke Laundry',
		        data: [107, 140, 635, 203, 200]
		    }, {
		        name: 'Piss Laundry',
		        data: [133, 156, 947, 408, 240]
		    }, {
		        name: 'Cihuy Laundry',
		        data: [1052, 954, 4250, 740, 260]
		    }]
		});
	</script>

	<!--grafik inventory barang per laundry-->
	<script type="text/javascript">
		Highcharts.chart('pede', {
		    chart: {
		        type: 'column'
		    },
		    title: {
		        text: ''
		    },
		    xAxis: {
		        categories: ['Pewangi', 'Detergen']
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: 'Total Barang Terpakai (buah)'
		        },
		        stackLabels: {
		            enabled: true,
		            style: {
		                fontWeight: 'bold',
		                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
		            }
		        }
		    },
		    legend: {
		        // align: 'right',
		        // x: -30,
		        // verticalAlign: 'top',
		        // y: 25,
		        // floating: true,
		        // backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
		        // borderColor: '#CCC',
		        // borderWidth: 1,
		        // shadow: false
		        enabled:false
		    },
		    tooltip: {
		        headerFormat: '<b>{point.x}</b><br/>',
		        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
		    },
		    plotOptions: {
		        column: {
		            stacking: 'normal',
		            dataLabels: {
		                enabled: true,
		                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
		            }
		        },
		        series: {
                    pointWidth:50
                }
		    },
		    exporting:{
		    	enabled:false
		    },
		    credits:{
		    	enabled:false
		    },
		    series: [{
		        name: 'Oke Laundry',
		        data: [5, 3]
		    }, {
		        name: 'Piss Laundry',
		        data: [10, 5]
		    }, {
		        name: 'Cihuy Laundry',
		        data: [3, 4]
		    }]
		});
	</script>

	</body>
</html>