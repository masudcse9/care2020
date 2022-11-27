@extends('backend.layouts.master')
@section('title','Scheduling List')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>List View of Schedule</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">List View of Schedule</a>
                        </li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>


        <div class="row my-3">
            <div class="col-sm-2 col-xs-12 mb-10">
                <select class="form-control searchValues text-indent-6 placeholder-color">
                    <option value="16">Croydon - Croydon 6</option>
                    <option value="11">Croydon - Croydon 1</option>
                    <option value="12">Croydon - Croydon 2</option>
                    <option value="13">Croydon - Croydon 3</option>
                    <option value="14">Croydon - Croydon 4</option>
                    <option value="15">Croydon - Croydon 5</option>
                </select>
            </div>
            <div class="col-sm-2 col-xs-12 mb-10">
                <div class="input-group date">
                    <input type="text" class="form-control">
                    <span class="input-group-text input-group-append input-group-addon">
                             <i class="simple-icon-calendar"></i>
                        </span>
                </div>
            </div>

            <div class="col-sm-3 col-xs-12 mb-10 ">
                <button type="button" id="buildSchedule" class="btn  btn-primary  dom-blue-theme " onclick="">
                    Build Schedule
                </button>
                <button type="button" id="check-filters" class="btn btn-primary dom-blue-theme" onclick="openScheduleStatusModal()">
                    Check Schedule
                </button>
            </div>

            <div class=" col-md-4 integration-NO row">
                <label class="col-sm-5 control-label"> Show Unscheduled</label>
                <div class="col-sm-1">
                    <div class="custom-switch custom-switch-secondary mb-2">
                        <input class="custom-switch-input" id="switch2" type="checkbox" checked="">
                        <label class="custom-switch-btn" for="switch2"></label>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12 mb-4">
                <div class="card">
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                        <tr role="row">
                            <th class="sorting_disabled" >Job ID</th>
                            <th style="width: 10%" class="sorting_disabled">
                                        <span class="thHeader hiderun"> Run
                                            <em class="fa fa-filter pull-right"></em>
                                        </span>
                            </th>
                            <th style="width: 10%" class="sorting_disabled">
                                        <span class="thHeader hiderun"> Status
                                            <em class="fa fa-filter pull-right"></em>
                                        </span>
                            </th>
                            <th class="sorting_disabled" >Time Tolerance</th>
                            <th class="sorting_disabled" >No Carers</th>
                            <th class="sorting_disabled" >Start Time</th>
                            <th class="sorting_disabled" >Duration</th>
                            <th class="sorting_disabled" >Visit Name</th>
                            <th class="sorting_disabled">
                                        <span class="thHeader">Service User name
                                            <i class="fa fa-filter pull-right"></i>
                                        </span>
                            </th>
                            <th class="sorting_disabled" >
                                <span class="thHeader">Employee name<i class="fa fa-filter pull-right"></i></span>
                            </th>
                            <th width="20%">Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr role="row" class="odd">
                            <td>488254</td>
                            <td>CR0 7</td>
                            <td>Partially Started</td>
                            <td>N/A</td>
                            <td>2</td>
                            <td>06:55</td>
                            <td>0</td>
                            <td>Personal care</td>
                            <td>William Smith</td>
                            <td>Celine Brown ,Sabrina Haslam</td>
                            <td>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> complete job
                                </button>
                                <button class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-xmark mr-1"></i> Cancel Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> change timing
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> view Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i>change Carers
                                </button>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>488254</td>
                            <td>CR0 7</td>
                            <td>Partially Started</td>
                            <td>N/A</td>
                            <td>2</td>
                            <td>06:55</td>
                            <td>0</td>
                            <td>Personal care</td>
                            <td>William Smith</td>
                            <td>Celine Brown ,Sabrina Haslam</td>
                            <td>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> complete job
                                </button>
                                <button class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-xmark mr-1"></i> Cancel Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> change timing
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> view Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i>change Carers
                                </button>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>488254</td>
                            <td>CR0 7</td>
                            <td>Partially Started</td>
                            <td>N/A</td>
                            <td>2</td>
                            <td>06:55</td>
                            <td>0</td>
                            <td>Personal care</td>
                            <td>William Smith</td>
                            <td>Celine Brown ,Sabrina Haslam</td>
                            <td>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> complete job
                                </button>
                                <button class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-xmark mr-1"></i> Cancel Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> change timing
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> view Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i>change Carers
                                </button>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>488254</td>
                            <td>CR0 7</td>
                            <td>Partially Started</td>
                            <td>N/A</td>
                            <td>2</td>
                            <td>06:55</td>
                            <td>0</td>
                            <td>Personal care</td>
                            <td>William Smith</td>
                            <td>Celine Brown ,Sabrina Haslam</td>
                            <td>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> complete job
                                </button>
                                <button class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-xmark mr-1"></i> Cancel Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> change timing
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> view Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i>change Carers
                                </button>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>488254</td>
                            <td>CR0 7</td>
                            <td>Partially Started</td>
                            <td>N/A</td>
                            <td>2</td>
                            <td>06:55</td>
                            <td>0</td>
                            <td>Personal care</td>
                            <td>William Smith</td>
                            <td>Celine Brown ,Sabrina Haslam</td>
                            <td>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> complete job
                                </button>
                                <button class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-xmark mr-1"></i> Cancel Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> change timing
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> view Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i>change Carers
                                </button>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>488254</td>
                            <td>CR0 7</td>
                            <td>Partially Started</td>
                            <td>N/A</td>
                            <td>2</td>
                            <td>06:55</td>
                            <td>0</td>
                            <td>Personal care</td>
                            <td>William Smith</td>
                            <td>Celine Brown ,Sabrina Haslam</td>
                            <td>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> complete job
                                </button>
                                <button class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-xmark mr-1"></i> Cancel Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> change timing
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i> view Job
                                </button>
                                <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                    <i class="fa-light fa-check mr-1"></i>change Carers
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
