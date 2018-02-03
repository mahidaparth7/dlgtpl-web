<div class="main background-grey" ng-controller="FAQController as vm" style="margin-top:80px;">
    <div class="container">
        <div class="about-services features-2">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title">FAQ's</h2>
                    <h5 class="description">
                        DL GTPL Digital Cable TV services brings you digital quality pictures with stereophonic sound and many more advanced value
                        added services like Electronic Programming Guide (EPG) that empowers your television to receive up
                        to 1000 Digital TV channels.
                    </h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default" ng-repeat="faq in vm.faqs">
                            <div class="panel-heading" role="tab" id="heading_{{$index}}">
                                <a role="button" target="_self" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$index}}" aria-expanded="false"
                                    aria-controls="collapse_{{$index}}" class="collapsed">
                                    <h4 class="panel-title">
                                        {{faq.que}}
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapse_{{$index}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_{{$index}}" aria-expanded="false"
                                style="height: 0px;">
                                <div class="panel-body">
                                    {{faq.ans}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>