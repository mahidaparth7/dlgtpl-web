<div ng-controller="RegisterQueryController as vm">
<div class="main background-grey" style="margin-top:80px;">
    <div class="container">
        <div class="about-services features-2">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title">Register Query / Complaint / Feedback</h2>
                    <!-- <h5 class="description">
                        DL GTPL Digital Cable TV services brings you digital quality pictures with stereophonic sound and many more advanced value
                        added services like Electronic Programming Guide (EPG) that empowers your television to receive up
                        to 1000 Digital TV channels.
                    </h5> -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-primary">
                            <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" style="background: #49C5B6;" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#profile" target="_self" data-toggle="tab" aria-expanded="true">
                                            <i class="fa  fa-2x fa-television" aria-hidden="true"></i> Cable
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#messages" target="_self" data-toggle="tab" aria-expanded="false">
                                            <i class="fa fa-2x fa-internet-explorer" aria-hidden="true"></i> Broadband
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile" aria-expanded="true">
                                    <div class="row">
                                        <form role="form" id="contact-form" method="post">
                                            <div class="col-md-6">
                                                <h3>Personnel Information</h3>

                                                <div class="form-group label-floating">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" name="name" ng-model="cable.personelInformation.name" class="form-control">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mobile No</label>
                                                    <input type="email" name="phone" ng-model="cable.personelInformation.phone" class="form-control" />
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" name="email" ng-model="cable.personelInformation.email" class="form-control" />
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
                                                    <textarea name="address" class="form-control" ng-model="cable.personelInformation.address" id="address" rows="6"></textarea>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h3>Other Information</h3>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">STB / NUID No *</label>
                                                    <input type="text" name="name" ng-model="cable.personelInformation.name" class="form-control">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Operator</label>
                                                    <input type="email" name="phone" ng-model="cable.personelInformation.phone" class="form-control" />
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Type</label>
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>Query</option>
                                                        <option>Complaint</option>
                                                        <option>Feedback</option>
                                                    </select>
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Description</label>
                                                    <textarea name="address" class="form-control" ng-model="cable.personelInformation.address" id="address" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="submit text-center">
                                                    <input type="submit" class="btn btn-primary btn-raised btn-round" value="Submit" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages" aria-expanded="false">
                                    <div class="row">
                                        <form role="form" id="contact-form" method="post">
                                            <div class="col-md-6">
                                                <h3>Personnel Information</h3>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" name="name" ng-model="broadband.personelInformation.name" class="form-control">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mobile No</label>
                                                    <input type="email" name="phone" ng-model="broadband.personelInformation.phone" class="form-control" />
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" name="email" ng-model="broadband.personelInformation.email" class="form-control" />
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
                                                    <textarea name="address" class="form-control" ng-model="broadband.personelInformation.address" id="address" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Other Information</h3>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" name="name" ng-model="broadband.otherInformation.name" class="form-control">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Type</label>
                                                    <select ng-model="broadband.otherInformation.type" class="form-control">
                                                        <option>Select</option>
                                                        <option>Query</option>
                                                        <option>Complaint</option>
                                                        <option>Feedback</option>
                                                    </select>
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Description</label>
                                                    <textarea ng-model="broadband.otherInformation.description" name="description" class="form-control" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="row" style="clear: both;">
                                                <div class="submit text-center">
                                                    <input type="submit" class="btn btn-primary btn-raised btn-round" value="Submit" />
                                                </div>
                                            </div>
                                        </form>
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

</div>
