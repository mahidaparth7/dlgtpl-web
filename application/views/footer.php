<footer class="footer footer-white footer-big">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-2">
						<h5>About Us</h5>
						<ul class="links-vertical">

							<li>
								<a href="#/about-us?scrollTo=about-us">
									About Us
								</a>
							</li>
							<li>
								<a href="#/board-of-directors">
									Board of Directors
								</a>
							</li>
							<li>
								<a href="#/partners#partners">
									Partners
								</a>
							</li>
							<li>
								<a href="#/contact-us#contact-us">
									Contact Us
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2">
						<h5>Market</h5>
						<ul class="links-vertical">
							<li>
								<a href="#/faqs?scrollTo=faqs">
									Sales FAQ
								</a>
							</li>
							<li>
								<a href="#/service/cable-tv?scrollTo=cable-tv">
									Cable TV
								</a>
							</li>
							<li>
								<a href="#/service/broadband?scrollTo=broadband">
									Broadband
								</a>
							</li>
							<li>
								<a href="https://hindtvnews.com" target="_blank">
									Hind TV
								</a>
							</li>
						</ul>
					</div>

					<div class="col-md-2">
						<h5>Social Feed</h5>
						<ul class="links-vertical">
							<li>
								<a href="#/terms-and-conditions?scrollTo=terms-and-conditions">
									Terms and Condition
								</a>
							</li>
							<li>
								<a href="#/privacy-policy?scrollTo=privacy-policy">
									Privacy Policy
								</a>
							</li>
							<li>
								<a href="#/compliance?scrollTo=compliance">
									Compliance
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5>Customer Application Form</h5>
						<ul class="links-vertical">
							<li>
								<a href="<?php echo base_url(); ?>assets/documents/catv.pdf" target="_blank">
									<i class="fa fa-file-pdf-o fa-2x" style="color:rgb(124, 53, 53);padding-right:5px;"></i> Download
								</a>
							</li>
							<li>
								<a href="#/customer-application-form?scrollTo=/customer-application-form">
									<i class="fa fa-hand-pointer-o fa-2x" style="padding-right:5px;"></i>
									Submit Online
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5>Follow Us</h5>
						<ul class="social-buttons">
							<li>
								<a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook">
									<i class="fa fa-facebook-square"></i>
								</a>
							</li>
							<!-- <li>
								<a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble">
									<i class="fa fa-dribbble"></i>
								</a>
							</li> -->
							<!-- <li>
								<a href="#pablo" class="btn btn-just-icon btn-simple btn-google">
									<i class="fa fa-google-plus"></i>
								</a>
							</li> -->
							<li>
								<a href="#pablo" class="btn btn-just-icon btn-simple btn-instagram">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
						</ul>

						<h5>Customer Care</h5>
						<h4 class="text-muted">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<small style="padding: 0px 10px;">1800 108 1000</small>
						</h4>
						<h4>
							<i class="fa fa-mobile" aria-hidden="true"></i>
							<small style="padding: 0px 10px;">+91 90999 37010</small>
						</h4>
					</div>
				</div>
			</div>

			<hr>

			<div class="copyright pull-center">
				Copyrights © 2014 - 15 DL GTPL. All rights reserved.
			</div>
		</div>
	</footer>
	<div class="icon-bar-panel">
		<a class="side-panel-active" ng-click="openModal('upgrade-hd-dialog')">
			<i class=" fa fa-home "></i>
			<br>
			<span style="font-size:12px; ">Upgrade HD</span>
		</a>
		<a ng-click="openModal()">
			<i class="fa fa-search "></i>
			<br>
			<span style="font-size:12px; ">Payment</span>
		</a>
		<a ng-click="openModal('new-connection-dialog') ">
			<i class="fa fa-cogs "></i>
			<br>
			<span style="font-size:12px; ">New Connection</span>
		</a>
    </div>
    <?php
include_once 'modals/new-connection-modal.html';
include_once 'modals/upgrade-hd-modal.html';
?>





<a href="#" class="scrollToTop " style="display: none;"><i class="	fa fa-arrow-up"></i></a>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-tagsinput.js"></script>
<script src="<?php echo base_url(); ?>assets/js/material-kit23cd.js?v=1.2.1" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/angular-main.js"></script>
</html>
