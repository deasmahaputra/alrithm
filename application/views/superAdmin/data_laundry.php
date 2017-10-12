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
						<li class="active">
							<a href="<?php echo site_url()?>/superAdmin/laundry"><i class="icon-align-center-horizontal"></i> Kelola Data Laundry</a>
						</li>

						<li class="dropdown-header">Inventory Point</li>
						<li>
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
					<div class="col-lg-9 col-md-9 col-sm-9 animated bounceInLeft" >
						<!-- Latest posts -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title">Kelola Data Laundry</h6>
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
											<th>Alamat</th>
											<th>No. Hp</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="#">Enright</a></td>
											<td>Traffic Court Referee</td>
											<td>22 Jun 1972</td>
											<td>098 765 432 123</td>
											<td class="text-center">
												<ul class="icons-list">
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">
															<i class="icon-menu9"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="#" data-toggle="modal" data-target="#ubah"><i class="icon-pencil7"></i> Ubah Data Laundry</a></li>
															<li><a href="#"><i class="icon-eraser2"></i> <span id="sweet_warning">Hapus Laundry</span></a></li>
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

					<div class="col-lg-3 col-sm-3 col-md-3 animated bounceInRight">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h6 class="panel-title">Best Three Laundry</h6>
								<br>
								<div class="form-group">
									<label>Filter Lokasi :</label>
									<select class="bootstrap-select show-tick" data-live-search="true" data-width="100%">
										<optgroup label="Jakarta Barat">
											<option value = "">-- Pilih Lokasi Laundry --</option>
											<option value="Kebon Jeruk">Kebon Jeruk</option>
											<option value="Kembangan">Kembangan</option>
											<option value="Palmerah">Palmerah</option>
										</optgroup>
										<optgroup label="Jakarta Pusat">
											<option value="Tanah Abang">Tanah Abang</option>
											<option value="Gambir">Gambir</option>
											<option value="Menteng">Menteng</option>
										</optgroup>
										<optgroup label="Jakarta Timur">
											<option value="Pulo Gadung">Pulo Gadung</option>
											<option value="Jatinegara">Jatinegara</option>
											<option value="Kramat Jati">Kramat Jati</option>
										</optgroup>
										<optgroup label="Jakarta Selatan">
											<option value="Kebayoran Baru">Kebayoran Baru</option>
											<option value="Kebayoran Lama">Kebayoran Lama</option>
											<option value="Pasanggrahan">Pasanggrahan</option>
										</optgroup>
									</select>
								</div>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table text-nowrap huruf-table">
										<thead>
											<tr>
												<th>No</th>
												<th>Laundry</th>
												<th>Points</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Oke Laundry</td>
												<td>80&nbsp;&nbsp;<span class="icon-trophy3" style="color: #FFD700"></span></td>
											</tr>

											<tr>
												<td>2</td>
												<td>Piss Laundry</td>
												<td>60&nbsp;&nbsp;<span class="icon-trophy3" style="color: #c0c0c0"></span></td>
											</tr>

											<tr>
												<td>3</td>
												<td>Cihuy Laundry</td>
												<td>50&nbsp;&nbsp;<span class="icon-trophy3" style="color: #CD7F32"></span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /Inventory barang -->
					</div>

					<a href="#" class="float" id="menu-share" data-popup="tooltip" title="Tambah Data Laundry" data-placement="top" style="margin-right: 2%;"data-toggle="modal" data-target="#modal_animation">
						<i class="icon-googleplus5 my-float" style="color:white"></i>
					</a>
				</div>
				<!-- /dashboard content -->
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!--modal tambah data laundry-->
	<div id="modal_animation" class="modal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Form Data Laundry</h5>
				</div>

				<div class="modal-body">
					<form class="steps-validation" action="#">
						<h6>Informasi Laundry</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Laundry: <span class="text-danger">*</span></label>
										<input type="text" name="nama_laundry" class="form-control required" placeholder="Nama Laundry Anda" autofocus>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>No. HP: <span class="text-danger">*</span></label>
										<input type="number" name="no_hp_lndr" class="form-control required" placeholder="Nomor HP Anda">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat: <span class="text-danger">*</span></label>
										<textarea name="experience-description" rows="4" cols="4" name = "alamat_lndr" placeholder="Alamat Lengkap Laundry Anda" class="form-control required"></textarea>
									</div>
								</div>
							</div>
						</fieldset>

						<h6>Informasi Petugas (Data Kelahiran)</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>NIK: <span class="text-danger">*</span></label>
		                                <input type="number" name="nik" placeholder="No. NIK Anda" class="form-control required">
	                                </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Lengkap: <span class="text-danger">*</span></label>
		                                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap Anda" class="form-control required">
	                                </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Tempat Lahir: <span class="text-danger">*</span></label>
	                                    <input type="text" name="tmpt_lhr" placeholder="Tempat Lahir Anda" class="form-control required">
                                    </div>
                                </div>

                                <div class="col-md-6">
									<div class="form-group">
										<label>Tanggal Lahir: <span class="text-danger">*</span></label>
		                                <input type="date" name="tgl_lhr" placeholder="Tanggal Lahir Anda" class="form-control required">
	                                </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="display-block">Jenis Kelamin:</label>
										<label class="radio-inline">
											<input type="radio" class="styled required" name="jk">
											Male
										</label>

										<label class="radio-inline">
											<input type="radio" class="styled" name="jk">
											Female
										</label>
									</div>
                                </div>

                                <div class="col-md-6">
									<div class="form-group">
										<label>Agama: <span class="text-danger">*</span></label>
		                                <select class="bootstrap-select show-tick required="" " data-width="100%">
											<option value="">--- Pilih Agama ---</option>
											<option value="Islam">Islam</option>
											<option value="Budha">Budha</option>
											<option value="Hindu">Hindu</option>
											<option value="Kristen">Kristen</option>
											<option value="Katolik">Katolik</option>	
										</select>
	                                </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Pekerjaan: <span class="text-danger">*</span></label>
	                                    <input type="text" name="pekerjaan" placeholder="Pekerjaan Anda" class="form-control required">
                                    </div>
                                </div>

                                <div class="col-md-6">
									<div class="form-group">
										<label>Kewarganegaraan: <span class="text-danger">*</span></label>
		                                <input type="text" name="kwn" placeholder="Kewarganegaraan Anda" class="form-control required">
	                                </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat: <span class="text-danger">*</span></label>
										<textarea name="experience-description" rows="4" cols="4" name = "alamat_org" placeholder="Alamat Lengkap Anda" class="form-control required"></textarea>
									</div>
								</div>
							</div>
						</fieldset>

						<h6>Informasi Petugas (Akun Credentials)</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Username: <span class="text-danger">*</span></label>
	                                    <input type="text" name="username" placeholder="Username Anda" class="form-control required">
                                    </div>
                                </div>

                                <div class="col-md-6">
									<div class="form-group">
										<label>Password: <span class="text-danger">*</span></label>
		                                <input type="password" name="password" placeholder="Password Anda" class="form-control required">
	                                </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email: <span class="text-danger">*</span></label>
		                                <input type="email" name="email" placeholder="Email Anda" class="form-control required">
	                                </div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>No. HP: <span class="text-danger">*</span></label>
		                                <input type="number" name="no_hp_org" placeholder="No. HP Anda" class="form-control required">
	                                </div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--modal tambah data laundry-->

	<!--modal ubah data laundry-->
	<div id="ubah" class="modal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Form Ubah Data Laundry</h5>
				</div>

				<div class="modal-body">
					<form class="steps-validation" action="#">
						<h6>Informasi Laundry</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Laundry: <span class="text-danger">*</span></label>
										<input type="text" name="nama_laundry" class="form-control required" placeholder="Nama Laundry Anda" autofocus>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>No. HP: <span class="text-danger">*</span></label>
										<input type="number" name="no_hp_lndr" class="form-control required" placeholder="Nomor HP Anda">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat: <span class="text-danger">*</span></label>
										<textarea name="experience-description" rows="4" cols="4" name = "alamat_lndr" placeholder="Alamat Lengkap Laundry Anda" class="form-control required"></textarea>
									</div>
								</div>
							</div>
						</fieldset>

						<h6>Informasi Petugas (Data Kelahiran)</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>NIK: <span class="text-danger">*</span></label>
		                                <input type="number" name="nik" placeholder="No. NIK Anda" class="form-control required">
	                                </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Lengkap: <span class="text-danger">*</span></label>
		                                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap Anda" class="form-control required">
	                                </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Tempat Lahir: <span class="text-danger">*</span></label>
	                                    <input type="text" name="tmpt_lhr" placeholder="Tempat Lahir Anda" class="form-control required">
                                    </div>
                                </div>

                                <div class="col-md-6">
									<div class="form-group">
										<label>Tanggal Lahir: <span class="text-danger">*</span></label>
		                                <input type="date" name="tgl_lhr" placeholder="Tanggal Lahir Anda" class="form-control required">
	                                </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="display-block">Jenis Kelamin:</label>
										<label class="radio-inline">
											<input type="radio" class="styled required" name="jk">
											Male
										</label>

										<label class="radio-inline">
											<input type="radio" class="styled" name="jk">
											Female
										</label>
									</div>
                                </div>

                                <div class="col-md-6">
									<div class="form-group">
										<label>Agama: <span class="text-danger">*</span></label>
		                                <select class="bootstrap-select show-tick required="" " data-width="100%">
											<option value="">--- Pilih Agama ---</option>
											<option value="Islam">Islam</option>
											<option value="Budha">Budha</option>
											<option value="Hindu">Hindu</option>
											<option value="Kristen">Kristen</option>
											<option value="Katolik">Katolik</option>	
										</select>
	                                </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Pekerjaan: <span class="text-danger">*</span></label>
	                                    <input type="text" name="pekerjaan" placeholder="Pekerjaan Anda" class="form-control required">
                                    </div>
                                </div>

                                <div class="col-md-6">
									<div class="form-group">
										<label>Kewarganegaraan: <span class="text-danger">*</span></label>
		                                <input type="text" name="kwn" placeholder="Kewarganegaraan Anda" class="form-control required">
	                                </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat: <span class="text-danger">*</span></label>
										<textarea name="experience-description" rows="4" cols="4" name = "alamat_org" placeholder="Alamat Lengkap Anda" class="form-control required"></textarea>
									</div>
								</div>
							</div>
						</fieldset>

						<h6>Informasi Petugas (Akun Credentials)</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Username: <span class="text-danger">*</span></label>
	                                    <input type="text" name="username" placeholder="Username Anda" class="form-control required">
                                    </div>
                                </div>

                                <div class="col-md-6">
									<div class="form-group">
										<label>Password: <span class="text-danger">*</span></label>
		                                <input type="password" name="password" placeholder="Password Anda" class="form-control required">
	                                </div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email: <span class="text-danger">*</span></label>
		                                <input type="email" name="email" placeholder="Email Anda" class="form-control required">
	                                </div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>No. HP: <span class="text-danger">*</span></label>
		                                <input type="number" name="no_hp_org" placeholder="No. HP Anda" class="form-control required">
	                                </div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--modal ubah data laundry-->

	<!-- Footer -->
	<div class="footer text-muted">
		&copy; 2017. <a href="<?php echo site_url();?>">Kuy Laundry</a>
	</div>
	<!-- /footer -->
	</body>
</html>