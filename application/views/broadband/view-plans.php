<div ng-controller="BroadbandController as vm">
<div class="page-header header-filter " style="background-image: url('<?php echo base_url(); ?>assets/img/background/broadband-banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">DLGTPL Broadband</h1>
                <h4 class="sub-title">Faster, Smarter and Secure Internet connectivity for Home & Business</h4>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="about-description text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="title">Broadband Plans for Home and Business</h2>
                    <h5 class="description">DL GTPL with its state of art fiber optic networks offers seamless connectivity for home and business.
                        We enhance your internet experiences through faster connectivity that is secure and dependable. Our
                        fiber-optic backbone and its technologically advanced Internet Node and Data Center will make the
                        network capable of reliable Internet service as well as digital TV transmission.</h5>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <button class="btn {{city.active ? 'btn-primary' : 'btn-simple'}} btn-round" ng-click="vm.selectCategory($event, city.value)"
                    ng-repeat="city in vm.cities" title="{{city.tooltip}}">{{city.name}}</button>
            </div>
        </div>
        <div class="row broadband-plans" ng-init="vm.colors = ['#FF8989','#89E0FF','#58AD5C','#F98C0E','#666666','#FF8989','#89E0FF','#58AD5C']">
            <div class="row" ng-repeat="planCategory in vm.plan">
                <h3 class="title" style="text-align:center;">{{planCategory.category}}</h3>
                <div class="MultiCarousel" ng-if="planCategory.plans.length > 4" data-items="1,2,3,4" data-slide="1" id="MultiCarousel" data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <div class="item card card-pricing card-plain" ng-repeat="plan in planCategory.plans ">
                            <div ng-if="plan.month_variation.length > 0" ng-init="plan.price = plan.month_variation[0].price;plan.month_variation[0].active = true;">
                            </div>
                            <div class="card-content" style="border-radius: 0px 10% 0px 10%;padding: 0px !important;border: 4px solid {{vm.colors[$index]}};">
                                <h6 class="category" style="color:#ffffff;border-radius: 0px 15px;margin: 0px;padding: 10px 0px;    background-color: {{vm.colors[$index]}};">{{plan.speed}}</h6>
                                <h1 class="card-title">
                                    <small>₹</small>{{plan.price}}
                                </h1>
                                <div ng-if="!plan.month_variation">
                                    <ul>
                                        <li>
                                            <b>{{plan.validity}}</b>
                                        </li>
                                    </ul>
                                </div>
                                <div ng-if="plan.month_variation.length > 0">
                                    <span>
                                        <b>Select Month</b>
                                    </span>
                                    <span class="label  {{monthVariation.active ? 'label-broadband' : 'label-default'}}" ng-click="vm.changMonth(plan, monthVariation)"
                                        ng-repeat="monthVariation in plan.month_variation">{{monthVariation.validity}}</span>
                                </div>
                                <a ng-click="vm.getPlan(plan)" class="get-now-broadband btn btn-primary btn-round" style="background-color:{{vm.colors[$index]}}">
                                    Get Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-just-icon btn-round btn-github  leftLst">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                    <button class="btn btn-just-icon btn-round btn-github rightLst">
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
                <div ng-if="planCategory.plans.length <= 4" class="row">
                    <div class="col-md-3" ng-repeat="plan in planCategory.plans ">
                        <div ng-if="plan.month_variation.length > 0" ng-init="plan.price = plan.month_variation[0].price;plan.month_variation[0].active = true;">
                        </div>
                        <div class="item card card-pricing card-plain " style="    padding: 10px;">
                            <div class="card-content" style="border-radius: 0px 10% 0px 10%;padding: 0px !important;border: 4px solid {{vm.colors[$index]}};">
                                <h6 class="category" style="color:#ffffff;border-radius: 0px 15px;margin: 0px;padding: 10px 0px;    background-color: {{vm.colors[$index]}};">{{plan.speed}}</h6>
                                <h1 class="card-title">
                                    <small>₹</small>{{plan.price}}
                                </h1>
                                <div ng-if="!plan.month_variation.length ">
                                    <ul>
                                        <li>
                                            <b>{{plan.validity}}</b>
                                        </li>
                                    </ul>
                                </div>
                                <div ng-if="plan.month_variation.length > 0">
                                    <span>
                                        <b>Select Month</b>
                                    </span><br/>
                                    <div style="    padding: 12px 0px;">
                                    <span class="label  {{monthVariation.active ? 'label-broadband' : 'label-default'}}" ng-click="vm.changMonth(plan, monthVariation)"
                                        ng-repeat="monthVariation in plan.month_variation">{{monthVariation.validity}}</span>
                                    </div>

                                </div>
                                <a ng-click="vm.getPlan(plan)" class="get-now-broadband btn btn-primary btn-round" style="background-color:{{vm.colors[$index]}}">
                                    Get Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card col-md-6" style="background:#E5E5E5;">
                <div class="card-body ">
                    <h3 class="title">
                        TERMS & CONDITIONS :
                    </h3>
                </div>
                <div class="card-footer ">
                    <ul>
                        <li class="text-muted">* Inclusive of Tax</li>
                        <li class="text-muted">* Prices & offers are subject to change without prior notice</li>
                        <li class="text-muted">* Installation / Registration charges as applicable</li>
                        <li class="text-muted">* Speed indicated is on a best efforts basis TRAI regulation upto ISP node</li>
                        <li class="text-muted">* All packages are prepaid & no plan change & no refund will be given in any case.</li>
                        <li class="text-muted text-danger">Protect your kids from web sites containing inappropriate, mature content.			
Get Awareness of How your child uses their internet. Use Parental Control Filter.			
</li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>