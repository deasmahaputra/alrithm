<div class="navbar navbar-default" id="navbar-second">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo site_url()?>/laundryOwner/beranda" class="hidup"><i class="icon-home2 position-left"></i> Beranda</a></li>
				
				<li class="dropdown mega-menu mega-menu-wide">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Laundry <span class="caret"></span> </a>
					<ul class="dropdown-menu width-200">
						<li class="dropdown-header">Inventory Laundry</li>
						<li>
							<a href="<?php echo site_url()?>/laundryOwner/laundry"><i class="icon-align-center-horizontal"></i> Kelola Data Laundry</a>
						</li>

						<li class="dropdown-header">Inventory Point</li>
						<li>
							<a href="<?php echo site_url()?>/laundryOwner/poin"><i class="icon-trophy3"></i> Kelola Poin</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="<?php echo site_url()?>/laundryOwner/pewangi"><i class="icon-color-sampler position-left"></i> Inventory Pewangi </a>
				</li>

				<li>
					<a href="<?php echo site_url()?>/laundryOwner/detergen">
						<i class="icon-make-group position-left"></i> Inventory Detergen
					</a>
				</li>
			</ul>
		</div>
	</div>