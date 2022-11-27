@extends('backend.layouts.master')
@section('title', 'Operations')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Report Page</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">Report</a>
                        </li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="bg-white card-body mb-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Report<span class="mandatory text-danger">*</span></label>
                        <div class="col-sm-8">
                            <select class="r1 form-control">
                                <option value="">Select Report Type</option>
                                <option value="Daily Carer Allocation Report">Daily Carer Allocation Report</option>
                                <option value="SUT Anaysis Report">Service User Time Analysis</option>
                                <option value="SU Template Visit Schedule Report">Service User Template Visit Schedule Report</option>
                                <option value="Housepack Report">Housepack</option>
                                <option value="Client Visit Report">Service User Visit Report</option>
                                <option value="Visit Detail Report">Visit Detail Report</option>
                                <option value="GeoFence Report">GeoFence Report</option>
                                <option value="Meds Administration Report">Meds Administration Report</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Week Ending<span class="mandatory text-danger">*</span></label>
                        <div class="col-sm-8">
                            <div class="input-group date">
                                <input type="text" class="form-control">
                                <span class="input-group-text input-group-append input-group-addon">
                                       <i class="simple-icon-calendar"></i>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Search</label>
                        <div class="col-sm-8">
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa-light fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">No. Of Weeks<span class="mandatory text-danger">*</span></label>
                        <div class="col-sm-8">
                            <select class="r1 form-control">
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Include Cancelled Jobs</label>
                        <div class="col-sm-8">
                            <div class="custom-switch custom-switch-secondary mb-2">
                                <input class="custom-switch-input" id="switch2" type="checkbox" checked="">
                                <label class="custom-switch-btn" for="switch2"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex ml-auto ">
                    <button type="button" class="btn btn-primary mr-3"><i class="fa-light fa-file-excel mr-2"></i>Generate Excel</button>
                    <button type="button" class="btn btn-secondary"><i class="fa-light fa-check mr-2"></i>Generate Report</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Service User Time Analysis Generated Reports</h5>
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                            <tr role="row">
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Generated Date Time">Generated Date Time</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Generated By">Generated By</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Week Ending Date">Week Ending Date</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="No. Of Weeks">No. Of Weeks</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Report In The Period">Report In The Period</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Service User">Service User</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Include Cancelled Jobs">Include Cancelled Jobs</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Status">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr role="row" class="odd">
                                <td>26/08/2022 11:43</td>
                                <td>Reekikumar Patel</td>
                                <td>25/07/2022</td>
                                <td>4</td>
                                <td>27/06/2022 - 24/07/2022</td>
                                <td>All</td>
                                <td>No</td>
                                <td>
                                        <span class="span-padding">
                                            <span class="fauxLink md-trigger space-label viewInvoices text-danger" >Download</span>
                                        </span>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td>23/07/2022 14:30</td>
                                <td>Reekikumar Patel</td>
                                <td>07/02/2022</td>
                                <td>6</td>
                                <td>27/12/2021 - 06/02/2022</td>
                                <td>Sophie Clarke</td>
                                <td>No</td>
                                <td>
                                        <span class="span-padding">
                                            <span class="fauxLink md-trigger space-label viewInvoices text-danger">Download</span>
                                        </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
