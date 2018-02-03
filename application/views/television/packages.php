<div ng-controller="PackagesController as vm">
<div class="page-header header-filter"  style="background-image: url('<?php echo base_url();?>assets/img/background/packages-banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-8">
                <h1 class="title">Our Packages</h1>
                <h4>Pay for what you watch with our whole range of packages</h4>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="about-services features-2 ">
            <div class="row">
                <div class="card col-md-6" style="background:#E5E5E5;">
                    <div class="card-body ">
                        <h3 class="title">
                            3 steps to create your Entertainment Pack
                        </h3>
                    </div>
                    <div class="card-footer ">
                        <ul>
                            <li class="text-muted">Choose from any of the packs listed below</li>
                            <li class="text-muted">Add A-la-Carte Channels to your chosen package</li>
                            <li class="text-muted">Once you have reviewed your selections made, click on “Submit Order”</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                        <li class="nav-item active ">
                            <a class="nav-link " href="#dashboard-2" target="_self" role="tab" data-toggle="tab" aria-expanded="false">
                                1</br> Packs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#schedule-2" target="_self" role="tab" data-toggle="tab" aria-expanded="true">
                                2</br> A-la-Carte
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#schedule-2" target="_self" role="tab" data-toggle="tab" aria-expanded="true">
                                3</br> Submit</br> Order
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <div class="tab-content">
                        <div class="tab-pane active" id="dashboard-2" aria-expanded="false">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12" ng-repeat="package in vm.packages">
                                    <div class="card">
                                        <div class="card-content text-center {{package.class}}">
                                            <h5 class="category-social">
                                                <i class="fa fa-newspaper-o"></i> {{package.name}}
                                            </h5>
                                            <h2 class="card-title">
                                                <a href="#pablo">{{package.channels}}</a>
                                            </h2>
                                            <h4 class="card-title">
                                                ₹ {{package.price}}
                                            </h4>
                                            <h5 class="card-title">
                                                <a class="cursor-pointer" ng-click="vm.openPopUp(package.name)">
                                                    <i class="fa fa-television" aria-hidden="true"></i> View Channels</a>
                                            </h5>
                                            <div class="footer text-center">
                                                <a ng-click="vm.stepperFormSubmit($index+1, package.name)" class="btn btn-white btn-round">Select</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="schedule-2" aria-expanded="true">
                            Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time
                            schemas.
                            <br>
                            <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <h3 class="title col-md-11">{{vm.currentPackageName}}</h3>
                <button type="button" class="close  col-md-1" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <div class="modal-body">
                <div id="accordion" role="tablist">
                    <div ng-if="category.channels.length > 0" class="card card-collapse" style="padding:10px;" ng-repeat="category in  vm.currentChannels">
                        <div class="card-header" role="tab" id="heading{{$index}}">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" target="_self" href="#collapse{{$index}}" aria-expanded="true" aria-controls="collapse{{$index}}">
                                    {{category.channels[0].category}} ({{category.channels.length}})
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapse{{$index}}" class="collapse" role="tabpanel" aria-labelledby="heading{{$index}}" data-parent="#accordion">
                            <div class="row card-body">
                                <div class="col-md-1" ng-repeat="channel in category.channels">
                                    <img alt="{{channel['name']}}" title="{{channel['name']}}" style="margin:5px 0px;width: 90px;height: 50px;box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);"
                                        src="<?php echo base_url();?>assets/img/channels-img/{{channel['image'] || 'no-img.gif'}}" />
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-link">Nice Button</button>
                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
</div>
</div>