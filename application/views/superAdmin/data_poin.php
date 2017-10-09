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
				<li class=""><a href="<?php echo site_url()?>/superAdmin/beranda"><i class="icon-home2 position-left"></i> Beranda</a></li>

				<li class="dropdown mega-menu mega-menu-wide active hidup">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Laundry <span class="caret"></span> </a>
					<ul class="dropdown-menu width-200">
						<li class="dropdown-header">Inventory Laundry</li>
						<li>
							<a href="<?php echo site_url()?>/superAdmin/laundry"><i class="icon-align-center-horizontal"></i> Kelola Data Laundry</a>
						</li>

						<li class="dropdown-header">Inventory Point</li>
						<li class="active">
							<a href="<?php echo site_url()?>/superAdmin/poin"><i class="icon-trophy3"></i> Kelola Poin</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="<?php echo site_url()?>/superAdmin/pewangi"><i class="icon-color-sampler position-left"></i> Inventory Pewangi </a>
				</li>

				<li>
					<a href="<?php echo site_url()?>/superAdmin/detergen">
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
					<div class="col-lg-12 col-md-12 col-sm-12 animated bounceIn" >
						<!-- Latest posts -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title">Poin Laundry, Bulan:  <?php echo date("d F Y");?></h6>
								<!-- <div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                	</ul>
			                	</div> -->
		                	</div>

							<div class="panel-body" style="margin-top:-2.5%;">
								<!-- Highlighting rows and columns -->
								<table class="table table-hover datatable-highlight huruf-table">
									<thead>
										<tr>
											<th>No</th>
											<th>Laundry</th>
											<th>Pemilik</th>
											<th>Total Pelanggan</th>
											<th>Deksripsi</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="#">Kuy Laundry</a></td>
											<td>Enright</td>
											<td>50 orang</td>
											<td><span class="label label-success">Kandidat Pemenang Poin</span></td>
											<td class="text-center">
												<ul class="icons-list">
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">
															<i class="icon-menu9"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="#"><i class="icon-gift"></i> <span id="sweet_warning">Ucapkan Selamat</span></a></li>
															<li><a href="#"><i class="icon-trophy2"></i> Kirim Poin</a></li>
														</ul>
													</li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
								<!-- /highlighting rows and columns -->
							</div>
						</div>
						<!-- /latest posts -->
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
		&copy; 2017. <a href="<?php echo site_url();?>">Kuy Laundry</a>
	</div>
	<!-- /footer -->
	</body>
</html>