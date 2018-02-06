<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNyvywjOknayil7PWnMg9d6GqltcKGO9w"></script>
<div ng-controller="ContactUsController as vm">
<div id="contactUsMap" class="big-map"></div>
<div class="main main-raised">
	<div class="contact-content">
		<div class="container">
			<h2 class="title">Send us a message</h2>
			<div class="row">
				<div class="col-md-6">
					<p class="description">You can contact us with anything related to our Products. We'll get in touch with you as soon as possible.
						<br>
						<br>
					</p>
					<form role="form" id="contact-form" ng-submit="vm.contactUsForm();" method="post">
						<div class="form-group label-floating">
							<label class="control-label">Your name</label>
							<input type="text" name="name" ng-model="vm.user.name" class="form-control" required>
						</div>
						<div class="form-group label-floating">
							<label class="control-label">Email address</label>
							<input type="email" name="email" ng-model="vm.user.email" class="form-control" required/>
						</div>
						<div class="form-group label-floating">
							<label class="control-label">Phone</label>
							<input type="number" name="phone" ng-model="vm.user.phoneNumber" class="form-control" required/>
						</div>
						<div class="form-group label-floating">
							<label class="control-label">Your message</label>
							<textarea name="message" class="form-control" ng-model="vm.user.message" id="message" rows="6" required></textarea>
						</div>
						<div class="submit text-center">
							<input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us" />
						</div>
					</form>
				</div>
				<div class="col-md-4 col-md-offset-2">
					<div class="info info-horizontal">
						<div class="icon icon-primary">
							<i class="material-icons">pin_drop</i>
						</div>
						<div class="description">
							<h4 class="info-title">Find us at the office</h4>
							417-431, "DL HOUSE", Intercity Complex,
							<p> Puna-Kumbhariya Road, Nr. PKS Petrol Pump,
								<br>   Parvat Patia,
								<br>  Surat, Gujarat 395002
							</p>
						</div>
					</div>
					<div class="info info-horizontal">
						<div class="icon icon-primary">
							<i class="material-icons">phone</i>
						</div>
						<div class="description">
							<h4 class="info-title">Give us a ring</h4>
								0261 613 5000
								<br> Mon - Fri, 9:00AM -8:00PM
							</p>
						</div>
					</div>
					<div class="info info-horizontal">
						<div class="icon icon-primary">
							<i class="material-icons">mail</i>
						</div>
						<div class="description">
							<h4 class="info-title">Mail Us at</h4>
							<p> info@gtpl.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
