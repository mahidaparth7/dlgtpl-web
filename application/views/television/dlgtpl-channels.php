<div  ng-controller="DLGTPLChannelsController as vm" >
<div class="page-header header-filter" ng-controller="DLGTPLChannelsController as vm" style="background-image: url('<?php echo base_url(); ?>assets/img/background/dlgtpl-channels-banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">DLGTPL Channels</h1>
                <h4 class="sub-title">Brings entertainment to your home with our wide range of local channels</h4>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="about-services features-2">
            <div class="row">
                <div class="col-md-6 col-lg-4" ng-repeat="channel in vm.channels">
                    <div class="rotating-card-container" style="height: 250px; margin-bottom: 30px;">
                        <div class="card card-rotate card-background">
                            <div class="front front-background" style="background-image: url('<?php echo base_url(); ?>assets/img/dlgtpl-channels/{{channel.img}}'); height: 250px; ">
                            </div>
                            <div class="back ">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        {{channel.name}}
                                    </h3>
                                    <h4 class="card-title">
                                        {{channel.desc}}
                                    </h4>
                                    <h5 class="card-title">
                                        Channel No. {{channel.no}}
                                    </h5>
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
