<!doctype html>
<html lang="en" ng-app="dlgtpl" ng-clock="">

<head>
	<meta charset="utf-8" />
	<!-- <base href="./"> -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>DLGTPL</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!-- Canonical SEO -->
	<link rel="canonical" href="http://dlgtpl.com" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/material-kit23cd.css?v=1.2.1" rel="stylesheet" />

	<!-- <link href="assets-for-demo/demo.css" rel="stylesheet" /> -->
	<script src="<?php echo base_url(); ?>assets/js/angular.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/angular-route.min.js" type="text/javascript"></script>
</head>
<body class="{{bodyClass}}" id="{{bodyClass}}">
	<nav class="navbar  navbar-fixed-top" style="height:80px;">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" ng-href="/">
					<img src="<?php echo base_url(); ?>assets/img/logo/dlgtpl-logo.png">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navigation-example">
				<ul class="nav navbar-nav navbar-right">
					<li class="{{item.children ? 'dropdown' : ''}}" ng-repeat="item in menu">
						<a ng-if="!item.children" ng-href="{{item.href}}">
							{{item.name}}{{item.children}}
						</a>
						<a ng-if="item.children" href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							{{item.name}}
							<b class="caret"></b>
							<div class="ripple-container"></div>
						</a>
						<ul ng-if="item.children" class="dropdown-menu dropdown-with-icons">
							<li ng-repeat="child in item.children">
								<a ng-href="{{child.href}}" target="{{child.self ? '_self' : ''}}">
									{{child.name}}
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>