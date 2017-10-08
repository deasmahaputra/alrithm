<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kuy Laundry</title>

	<!-- Global stylesheets -->
	<link href="<?php echo base_url()?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/charts/highchart/code/highcharts.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/charts/highchart/code/exporting.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/wizards/steps.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/extensions/cookie.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/wizard_steps.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/ui/ripple.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/datatables_advanced.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/components_popups.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/components_modals.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/bootbox.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/sweet_alert.min.js"></script>
	<!-- /theme JS files -->

	<style>
		.hidup {
		    border-bottom: 2px solid #3498DB;
		}

		.navbar-inverse{
			background-color: #3498DB !important;
		}

		.huruf-table{
            font-size:9pt;
        }

        .float{
			position:fixed;
			width:60px;
			height:60px;
			bottom:40px;
			right:40px;
			background-color:#3498DB;
			color:#FFF;
			border-radius:50px;
			text-align:center;
			box-shadow: 2px 2px 3px #999;
			z-index:1000;
			animation: bot-to-top 2s ease-out;
		}

		.my-float{
			font-size:24px;
			margin-top:18px;
		}

		a#menu-share i{
			animation: rotate-in 0.5s;
		}

		a#menu-share:hover > i{
			animation: rotate-out 0.5s;
			color: white;
		}

		@keyframes bot-to-top {
		    0%   {bottom:-40px}
		    50%  {bottom:40px}
		}

		@keyframes scale-in {
		    from {transform: scale(0);opacity: 0;}
		    to {transform: scale(1);opacity: 1;}
		}

		@keyframes rotate-in {
		    from {transform: rotate(0deg);}
		    to {transform: rotate(360deg);}
		}

		@keyframes rotate-out {
		    from {transform: rotate(360deg);}
		    to {transform: rotate(0deg);}
		}
	</style>
</head>