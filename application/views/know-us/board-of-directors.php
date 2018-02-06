<div ng-controller="BODController as vm">
<div class="page-header header-filter header-small" style="background-image: url('<?php echo base_url();?>assets/img/background/board-of-directors-banner.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="title">Board of Directors</h1>
				<h4>An amazing group of people behind the success of DLGTPL.</h4>
			</div>
		</div>
	</div>
</div>

<div class="main main-raised">

	<div class="about-team team-1">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="title">We are nerd rockstars</h2>
					<h5 class="description">Meet our team of board of directors who are passionate to deliver best cable and broadbad service to their customers
					</h5>
				</div>
			</div>
		</div>
		<div>
			<div class="container">
				<div class="row board-of-directors-list">
					<div class="col-md-4" ng-repeat="bod in vm.boardOfDirectors">
						<div class="card card-profile">
							<div class="card-avatar">
								<a href="#pablo">
									<img class="img" src="<?php echo base_url();?>assets/img/board-of-directors/{{bod.img}}">
								</a>
							</div>
							<div class="card-content">
								<h4 class="card-title">{{bod.name}}</h4>
								<h6 class="category text-muted">CEO / Co-Founder</h6>
								<p class="card-description"> {{bod.desc}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>