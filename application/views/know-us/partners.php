<div ng-controller="PartnersController as vm">
<div class="page-header header-filter header-small" style="background-image: url('<?php echo base_url();?>assets/img/background/partners-banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Our Partners</h1>
                <!-- <h4>Meet the amazing team behind this project and find out more about how we work.</h4> -->
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="about-description text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h5 class="description">Our vision to provide the best services is rooted to the belief and know how of the technological advancements
                        across the world. We are on a constant endeavor to upgrade to better technical platforms that can
                        deliver impeccable consumer experiences. Therefore we partner with world leaders in technology and
                        research oriented organizations.</h5>
                </div>
            </div>
        </div>
        <div class="about-services features-2">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12" ng-repeat="partner in vm.partners">
                    <div class="card card-profile card-plain">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="{{partner.img}}">
                            </a>
                            <div class="colored-shadow" style="background-image: url(&quot;{{partner.img}}&quot;); opacity: 1;"></div>
                            <div class="ripple-container"></div>
                        </div>

                        <div class="card-content" style="height:75px;">
                            <h4 class="card-title">{{partner.name}}</h4>
                            <h6 class="category text-gray">{{partner.tagLine}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8  col-md-offset-2">
                <h2>Become a Partner !</h2>
                <p class="description">Join In with India's fastest growing Multi System Operator(MSO) and be a part of the Digital Revolution.
                    Kindly enter a few details about you and your organization and we will get back to you.
                    <br>
                    <br>
                </p>
                <form role="form" id="contact-form" method="post" class="ng-pristine ng-valid">
                    <div class="row">
                        <div class="form-group label-floating is-empty col-md-6">
                            <label class="control-label">Your name</label>
                            <input type="text" name="name" class="form-control">
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty col-md-6">
                            <label class="control-label">Email address</label>
                            <input type="email" name="email" class="form-control">
                            <span class="material-input"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group label-floating is-empty col-md-6">
                            <label class="control-label">Phone</label>
                            <input type="text" name="phone" class="form-control">
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty col-md-6">
                            <label class="control-label">City</label>
                            <input type="text" name="city" class="form-control">
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group label-floating is-empty col-md-6">
                            <label class="control-label">State</label>
                            <input type="text" name="state" class="form-control">
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty col-md-6">
                            <label class="control-label">Country</label>
                            <input type="text" name="country" class="form-control">
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group label-floating is-empty col-md-6">
                            <label class="control-label">Company Name</label>
                            <input type="text" name="company-name" class="form-control">
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty col-md-6 ">
                            <label class="control-label">Business Profile</label>
                            <input type="text" name="business-profile" class="form-control">
                            <span class="material-input"></span>
                        </div>
                    </div>

                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Your message</label>
                        <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                        <span class="material-input"></span>
                    </div>
                    <div class="submit text-center">
                        <input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>