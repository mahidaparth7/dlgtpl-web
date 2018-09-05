<div class="page-header header-filter header-small" style="background-image: url('<?php echo base_url();?>assets/img/bg9.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="title" style="color:#1261AC;" >Customer Application Form</h1>
                <!-- <h4>Meet the amazing team behind this project and find out more about how we work.</h4> -->
            </div>
        </div>
    </div>
</div>

<div class="main main-raised" ng-controller="CustomerApplicationFormController as vm">
    <div class="container">

        <div class="row">
            <div class="col-md-8  col-md-offset-2">
                <h2>Submit Online</h2>
                <p class="description">Please fill below form and submit to confirm your registration.
                    <br>
                    <br>
                </p>
                <form role="form" ng-submit="vm.submitCustomerApplicationForm()" name="cafForm" id="contact-form" method="post" class="ng-pristine ng-valid">
                    <div class="row">
                        <div class="form-group label-floating is-empty col-md-6">
                            <label class="control-label">Enter STB # : </label>
                            <input ng-model="vm.caf.stbNo" type="text" name="name" class="form-control" require>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group label-floating is-empty col-md-4">
                            <label class="control-label">First Name</label>
                            <input type="text" ng-model="vm.caf.firstName" name="name" class="form-control" require>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty col-md-4">
                            <label class="control-label">Middle Name</label>
                            <input type="text" ng-model="vm.caf.middleName" name="name" class="form-control" require>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty col-md-4">
                            <label class="control-label">Last Name</label>
                            <input type="text" ng-model="vm.caf.lastName" name="name" class="form-control" require>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group label-floating is-empty col-md-4">
                            <label class="control-label">Mobile No.</label>
                            <input type="text" ng-model="vm.caf.mobileNo" name="name" class="form-control" require>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty col-md-4">
                            <label class="control-label">Home Phone</label>
                            <input type="text" ng-model="vm.caf.phone" name="name" class="form-control" require>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty col-md-4">
                            <label class="control-label">E-mail ID</label>
                            <input type="text" ng-model="vm.caf.email" name="name" class="form-control" require>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group label-floating is-empty col-md-4">
                            <label class="control-label">City</label>
                            <input type="text" ng-model="vm.caf.city" name="phone" class="form-control" require>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty col-md-4">
                            <label class="control-label">State</label>
                            <input type="text" ng-model="vm.caf.state" name="city" class="form-control" require>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty col-md-4">
                            <label class="control-label">Pincode</label>
                            <input type="text" ng-model="vm.caf.pincode" name="city" class="form-control" require>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group label-floating is-empty col-md-6">
                            <label class="control-label">Address</label>
                            <textarea name="address" ng-model="vm.caf.address" class="form-control" require></textarea>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group   col-md-6">
                            <label class="control-label">Proof of Identity</label>
                            <select name="proofOfIdentity" ng-model="vm.caf.proofOfIdentity" require>
                                <option value="-1">--- Select ---</option>
                                <option value="Driving License">Driving License</option>
                                <option value="Election Card">Election Card</option>
                                <option value="Aadhar Card">Aadhar Card</option>
                                <option value="Passport">Passport</option>
                            </select>

                        </div>
                        <div class="form-group form-file-upload form-file-multiple bmd-form-group col-md-6">
                            <input type="file"  id="proofOfAddress" valid-file upload="vm.uploadFile(file1)" ng-model="file1" class="inputFileHidden">
                            <div class="input-group">
                                <input type="text" class="form-control inputFileVisible" placeholder="Single File">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group  col-md-6">
                            <label class="control-label">Proof of Address</label>
                            <select name="proofOfAddress" ng-model="vm.caf.proofOfAddress" require>
                                <option value="-1">--- Select ---</option>
                                <option value="Electricity Bill">Electricity Bill</option>
                                <option value="Driving Licence">Driving Licence</option>
                                <option value="Election Card">Election Card</option>
                                <option value="Telephone/Broadband Bill">Telephone/Broadband Bill</option>
                                <option value="Aadhar Card">Aadhar Card</option>
                                <option value="Lease &amp; License Agreement">Lease &amp; License Agreement</option>
                                <option value="Bank Statement">Bank Statement</option>
                                <option value="Credit Card Statement">Credit Card Statement</option>
                            </select>
                        </div>
                        <div class="form-group form-file-upload form-file-multiple bmd-form-group col-md-6">
                            <input type="file"  id="proofOfAddress" valid-file upload="vm.uploadFile(file)" ng-model="file" class="inputFileHidden">
                            <div class="input-group">
                                <input type="text" class="form-control inputFileVisible" placeholder="Single File">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-check col-md-8 col-md-offset-2">
                            <label class="form-check-label">
                                <input ng-model="vm.caf.termsAndConditionsAggread" class="form-check-input" style="margin-right: 10px;" type="checkbox" value="" require> I/We have read and understood the terms and conditions and acknowledge that the tariff plan
                                selected by me and the applicable rates form part of this agreement and I agree to be bound
                                by the same.
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="submit text-center">
                            <input type="submit"  class="btn btn-primary btn-raised btn-round" value="SUBMIT">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>