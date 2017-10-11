<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<body>
	<!-- Second navbar -->
	
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