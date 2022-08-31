@extends('layouts.master')
@section('title') @lang('translation.Form_Wizard')  @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Forms @endslot
@slot('title') Form Wizard @endslot
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Basic pills Wizard</h4>
            </div>
            <div class="card-body">
                <div id="basic-pills-wizard" class="twitter-bs-wizard">
                    <ul class="twitter-bs-wizard-nav">
                        <li class="nav-item">
                            <a href="#seller-details" class="nav-link" data-toggle="tab">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Seller Details">
                                    <i class="bx bx-list-ul"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#company-document" class="nav-link" data-toggle="tab">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Company Document">
                                    <i class="bx bx-book-bookmark"></i>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#bank-detail" class="nav-link" data-toggle="tab">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Details">
                                    <i class="bx bxs-bank"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- wizard-nav -->

                    <div class="tab-content twitter-bs-wizard-tab-content">
                        <div class="tab-pane" id="seller-details">
                            <div class="text-center mb-4">
                                <h5>Seller Details</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-firstname-input" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input" placeholder="Enter Your First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-lastname-input" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="basicpill-lastname-input" placeholder="Enter Your Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="basicpill-phoneno-input" placeholder="Enter Your Phone No.">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter Your Email ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="basicpill-address-input" class="form-label">Address</label>
                                            <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter Your Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i
                                            class="bx bx-chevron-right ms-1"></i></a></li>
                            </ul>
                        </div>
                        <!-- tab pane -->
                        <div class="tab-pane" id="company-document">
                            <div>
                            <div class="text-center mb-4">
                                <h5>Company Document</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-pancard-input" class="form-label">PAN Card</label>
                                            <input type="text" class="form-control" id="basicpill-pancard-input" placeholder="Enter Your PAN No.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-vatno-input" class="form-label">VAT/TIN No.</label>
                                            <input type="text" class="form-control" id="basicpill-vatno-input" placeholder="Enter Your VAT/TIN No.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-cstno-input" class="form-label">CST No.</label>
                                            <input type="text" class="form-control" id="basicpill-cstno-input" placeholder="Enter Your CST No.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-servicetax-input" class="form-label">Service Tax No.</label>
                                            <input type="text" class="form-control" id="basicpill-servicetax-input" placeholder="Enter Your Service Tax No.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-companyuin-input" class="form-label">Company UIN</label>
                                            <input type="text" class="form-control" id="basicpill-companyuin-input" placeholder="Enter Your Company UIN">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-declaration-input" class="form-label">Declaration</label>
                                            <input type="text" class="form-control" id="basicpill-declaration-input" placeholder="Declaration Details">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextPrev(-1)"><i
                                            class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextPrev(1)">Next <i
                                            class="bx bx-chevron-right ms-1"></i></a></li>
                            </ul>
                            </div>
                        </div>
                        <!-- tab pane -->
                        <div class="tab-pane" id="bank-detail">
                            <div>
                                <div class="text-center mb-4">
                                    <h5>Bank Details</h5>
                                    <p class="card-title-desc">Fill all information below</p>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-namecard-input" class="form-label">Name on Card</label>
                                                <input type="text" class="form-control" id="basicpill-namecard-input" placeholder="Enter Your Name on Card">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Credit Card Type</label>
                                                <select class="form-select">
                                                        <option selected>Select Card Type</option>
                                                        <option value="AE">American Express</option>
                                                        <option value="VI">Visa</option>
                                                        <option value="MC">MasterCard</option>
                                                        <option value="DI">Discover</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-cardno-input" class="form-label">Credit Card Number</label>
                                                <input type="text" class="form-control" id="basicpill-cardno-input" placeholder="Credit Card Number">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-card-verification-input" class="form-label">Card Verification Number</label>
                                                <input type="text" class="form-control" id="basicpill-card-verification-input" placeholder="Credit Verification Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-expiration-input" class="form-label">Expiration Date</label>
                                                <input type="text" class="form-control" id="basicpill-expiration-input" placeholder="Card Expiration Date">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i
                                                class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                    <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target=".confirmModal">Save
                                            Changes</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- tab pane -->
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Wizard with Progressbar</h4>
            </div>
            <div class="card-body">

                <div id="progrss-wizard" class="twitter-bs-wizard">
                    <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Seller Details">
                                    <i class="bx bx-list-ul"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Company Document">
                                    <i class="bx bx-book-bookmark"></i>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Details">
                                    <i class="bx bxs-bank"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- wizard-nav -->

                    <div id="bar" class="progress mt-4">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                    </div>
                    <div class="tab-content twitter-bs-wizard-tab-content">
                        <div class="tab-pane" id="progress-seller-details">
                            <div class="text-center mb-4">
                                <h5>Seller Details</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="progresspill-firstname-input">First name</label>
                                            <input type="text" class="form-control" id="progresspill-firstname-input" placeholder="Enter Your First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="progresspill-lastname-input">Last name</label>
                                            <input type="text" class="form-control" id="progresspill-lastname-input" placeholder="Enter Your Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="progresspill-phoneno-input">Phone</label>
                                            <input type="text" class="form-control" id="progresspill-phoneno-input" placeholder="Enter Your Phone No.">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="progresspill-email-input">Email</label>
                                            <input type="email" class="form-control" id="progresspill-email-input" placeholder="Enter Your Email ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="progresspill-address-input">Address</label>
                                            <textarea id="progresspill-address-input" class="form-control" rows="2" placeholder="Enter Your Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i
                                            class="bx bx-chevron-right ms-1"></i></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="progress-company-document">
                            <div>
                            <div class="text-center mb-4">
                                <h5>Company Document</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="progresspill-pancard-input" class="form-label">PAN Card</label>
                                            <input type="text" class="form-control" id="progresspill-pancard-input" placeholder="Enter Your PAN Card No.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="progresspill-vatno-input" class="form-label">VAT/TIN No.</label>
                                            <input type="text" class="form-control" id="progresspill-vatno-input" placeholder="Enter Your VAT/TIN No.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="progresspill-cstno-input" class="form-label">CST No.</label>
                                            <input type="text" class="form-control" id="progresspill-cstno-input" placeholder="Enter Your CST No.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="progresspill-servicetax-input" class="form-label">Service Tax No.</label>
                                            <input type="text" class="form-control" id="progresspill-servicetax-input" placeholder="Enter Your Service Tax No.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="progresspill-companyuin-input" class="form-label">Company UIN</label>
                                            <input type="text" class="form-control" id="progresspill-companyuin-input" placeholder="Company UIN No.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="progresspill-declaration-input" class="form-label">Declaration</label>
                                            <input type="text" class="form-control" id="progresspill-declaration-input" placeholder="Declaration Details">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i
                                            class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i
                                            class="bx bx-chevron-right ms-1"></i></a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="progress-bank-detail">
                            <div>
                                <div class="text-center mb-4">
                                    <h5>Bank Details</h5>
                                    <p class="card-title-desc">Fill all information below</p>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="progresspill-namecard-input" class="form-label">Name on Card</label>
                                                <input type="text" class="form-control" id="progresspill-namecard-input" placeholder="Enter Your Name on Card">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Credit Card Type</label>
                                                <select class="form-select">
                                                    <option selected>Select Card Type</option>
                                                    <option value="AE">American Express</option>
                                                    <option value="VI">Visa</option>
                                                    <option value="MC">MasterCard</option>
                                                    <option value="DI">Discover</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="progresspill-cardno-input" class="form-label">Credit Card Number</label>
                                                <input type="text" class="form-control" id="progresspill-cardno-input" placeholder="Enter Your Card Number">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="progresspill-card-verification-input" class="form-label">Card Verification Number</label>
                                                <input type="text" class="form-control" id="progresspill-card-verification-input" placeholder="Card Verification Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="progresspill-expiration-input" class="form-label">Expiration Date</label>
                                                <input type="text" class="form-control" id="progresspill-expiration-input" placeholder="Card Expiration Date">
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i
                                            class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target=".confirmModal">Save
                                        Changes</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<!-- Modal -->
<div class="modal fade confirmModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="bx bx-check-circle display-4 text-success"></i>
                    </div>
                    <h5>Confirm Save Changes</h5>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-light w-md" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary w-md" data-bs-dismiss="modal"
                    onclick="nextTab()">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-wizard.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
