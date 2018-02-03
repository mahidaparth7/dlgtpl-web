<div ng-controller="CareersController as vm">
<div class="page-header header-filter" style="background-image: url('<?php echo base_url();?>assets/img/background/careers-banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Careers</h1>
                <h4 class="sub-title">Join our team of expert in technical as well as adminstration field</h4>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="row">
            <h2 class="title">Current Openings</h2>
            <h5 class="description">
                How would you like a career that presents you with challenges and opportunities to prove yourself while giving you a chance
                to show your mettle? And how about shaping your entire endeavor in an environment that values and complements
                your individuality; a dynamic workplace that revels in a performance oriented culture? All this backed by
                consistent support and training to handle your role? Sounds exciting... doesn't it? At DLGTPL, we believe
                that passion drives excellence. It is the passion of the employees that strengthens the structure and builds
                the culture of the organization resulting in unfailing delivery of desired results each and every time. There
                are numerous options to be a part of the DLGTPL family. So if you are looking for a job, a career or academic
                enrichment by virtue of gaining an internship, we have it all on offer. Being a part of the DLGTPL family
                could well be a very important career decision. So… if you think you can make a difference... come forth!
            </h5>
        </div>
        <div class="row" ng-repeat="career in vm.careers">
            <h3 class="title">{{career.position}}</h3>
            <p>{{career.openingLine}} </p>
            <p>
                <b>Requirements:
                    <b></b>
                </b>
            </p>
            <b>
                <b>
                    <p ng-repeat="req in career.requirements">- {{req}}</p>

                    <p>
                        <b>Responsibilities :
                            <b></b>
                        </b>
                    </p>
                    <b>
                        <b>
                            <p ng-repeat="res in career.responsibilities">- {{res}}</p>
        </div>
    </div>
</div>

</div>
