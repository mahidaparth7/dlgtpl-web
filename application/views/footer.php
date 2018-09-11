<footer class="footer footer-white footer-big">
		<div class="container">
			<div class="content">
				<div class="row">
					<!-- <div class="col-md-2">
						<h5>About Us</h5>
						<ul class="links-vertical">

							<li>
								<a href="/about-us">
									About Us
								</a>
							</li>
							<li>
								<a href="/board-of-directors">
									Board of Directors
								</a>
							</li>
							<li>
								<a href="/partners">
									Partners
								</a>
							</li>
							<li>
								<a href="/contact-us">
									Contact Us
								</a>
							</li>
						</ul>
					</div> -->
					<div class="col-md-3">
						<h5>Digital Cable Tv</h5>
						<ul class="links-vertical">
							<li>
								<a href="/support/grievance-redressal">
								Grievance Redressal
								</a>
							</li>
							<li>
								<a href="/compliance">
								Compliance 
								</a>
							</li>
							<li>
								<a href="/terms-and-condition">
								Terms & Conditions
								</a>
							</li>
							<li>
								<a href="/privacy-policy" target="_blank">
								Privacy Policy
								</a>
							</li>
						</ul>
					</div>

					<div class="col-md-3">
						<h5>Broadband</h5>
						<ul class="links-vertical">
							<li>
								<a href="/television/faqs">
									Basic Troubleshooting
								</a>
							</li>
							<li>
								<a href="/privacy-policy">
								Appellate Authority
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
								<a href="<?php echo base_url();?>customer-application-form">
									<i class="fa fa-hand-pointer-o fa-2x" style="padding-right:5px;"></i>
									Submit Online
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5>Contact Us</h5>
						<h4 class="text-muted">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<small style="padding: 0px 10px;">0261 613 5000</small>
						</h4>
						<h4>
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<small style="padding: 0px 10px;">info@gtpl.com</small>
						</h4>
						<h4>
							<i class="fa fa-building-o" aria-hidden="true"></i>
							<small style="padding: 0px 10px;">417-431, "DL HOUSE", Intercity Complex,
								Puna-Kumbhariya Road, Nr. PKS Petrol Pump, 
								Parvat Patia, 
								Surat, Gujarat 395002</small>
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
include_once 'modals/sign-in-modal.html';
?>





<a href="" class="scrollToTop " style="display: none;"><i class="	fa fa-arrow-up"></i></a>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-tagsinput.js"></script>
<script src="<?php echo base_url(); ?>assets/js/material-kit23cd.js?v=1.2.1" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/angular-main.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b56d66cdf040c3e9e0be59c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>
