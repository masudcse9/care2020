@extends('backend.layouts.master')
@section('title','Housekeeping')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Scheduled Jobs Housekeeping</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">Scheduled Jobs Housekeeping</a>
                        </li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-container">

                            <ul class="nav nav-tabs">
                                <li class="active res-action header-schedulejobhousekeeping ">
                                    <a href="#jobNotStarted" data-toggle="tab"aria-expanded="true">
                                        Jobs Not Started</a>
                                </li>
                                <li class="receiveTab res-observation itemLineTab header-schedulejobhousekeeping">
                                    <a href="#jobNeedingAttention" data-toggle="tab" aria-expanded="false"> Jobs Needing
                                        Attention</a>
                                </li>
                                <li class="res-action header-schedulejobhousekeeping">
                                    <a href="#dayJobs" data-toggle="tab" aria-expanded="true"> Day Jobs </a>
                                </li>
                            </ul>

                            <div class="tab-content mt-3">
                                <div id="jobNotStarted" class="tab-pane cont active finance-scrn">
                                    <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <div class="row am-datatable-body">

                                            <div class="col-sm-12">
                                                <table id="scheduledOutstandingJobsDataTable"
                                                       class="table table-hover table-bordered table-striped dataTable no-footer">
                                                    <thead>
                                                    <tr role="row">
                                                        <th style="width: 20%" class="sorting_disabled">
                                                                <span class="thHeader"> Scheduled Start Date Time
                                                                    <i class="fa fa-filter pull-right"></i>
                                                                </span>
                                                        </th>
                                                        <th style="width: 14%" class="sorting_disabled" >Job Name</th>
                                                        <th width="" style="width: 14%" class="sorting_disabled">
                                                                <span class="thHeader">Service User
                                                                    <i class="fa fa-filter pull-right"></i>
                                                                </span>
                                                        </th>
                                                        <th width="15%" class="sorting_disabled">Employee's</th>
                                                        <th width="21%" class="sorting_disabled" >Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>14/11/2022 04:50</td>
                                                        <td>Outreach</td>
                                                        <td>Arumugam Sritharan</td>
                                                        <td>Dahlia Richards</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>14/11/2022 03:30</td>
                                                        <td>Personal care lunch</td>
                                                        <td>Jayne McClymont</td>
                                                        <td><span class="ellipsis" title="Juliet Haughton, Dahlia Richards">Juliet Haughton, Dahlia Richa…</span>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>14/11/2022 02:55</td>
                                                        <td>Personal care - AM</td>
                                                        <td>Afagh (DiDi) Khaknegar - Moghaddam</td>
                                                        <td>Richelle Lawrence</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>14/11/2022 07:01 (Unscheduled)</td>
                                                        <td>Personal care</td>
                                                        <td>suzette thomas</td>
                                                        <td></td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal care am</td>
                                                        <td>Dawn Cominetti</td>
                                                        <td>Rhotecia Monroe Carvalho</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal Care - AM</td>
                                                        <td>Jennifer Hull</td>
                                                        <td>Alphanso Broderick</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>14/11/2022 06:25</td>
                                                        <td>Personal Carer Am</td>
                                                        <td>Doris Campbell</td>
                                                        <td>Claudine Walker</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal care</td>
                                                        <td>Jacob Lee</td>
                                                        <td>Nadine Grant</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal Care am visit</td>
                                                        <td>Algena John</td>
                                                        <td><span class="ellipsis" title="Ingrid  Bailey, Claudine Walker">Ingrid  Bailey, Claudine Walk…</span>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal Care</td>
                                                        <td>Jennifer Esmine Bennett</td>
                                                        <td>Alicia Anderson</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>14/11/2022 08:00</td>
                                                        <td>Personal care am</td>
                                                        <td>Olwen Gibbons</td>
                                                        <td><span class="ellipsis"
                                                                  title="Kamarea Hudson Bobb, Gloria Davis">Kamarea Hudson Bobb, Gloria D…</span>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>14/11/2022 06:15</td>
                                                        <td>Personal care Am</td>
                                                        <td>Kusumben Patel</td>
                                                        <td>Sandria Brown</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal Care - AM</td>
                                                        <td>Harold Ollivierre</td>
                                                        <td>Richelle Lawrence</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal care am</td>
                                                        <td>Emmerson Dottin- ( 3296 key safe )</td>
                                                        <td>Myriam Herma Seymour</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal care am</td>
                                                        <td>Wessam Daleme</td>
                                                        <td><span class="ellipsis" title="Juliet Haughton, Dahlia Richards">Juliet Haughton, Dahlia Richa…</span>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal Care</td>
                                                        <td>Sylvester Elumeze</td>
                                                        <td><span class="ellipsis"
                                                                  title="Michelle  Mcdermott, Allison Wood">Michelle  Mcdermott, Allison …</span>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal care</td>
                                                        <td>Anne Page</td>
                                                        <td>Rhotecia Monroe Carvalho</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>14/11/2022 07:00</td>
                                                        <td>Personal care AM</td>
                                                        <td>Lesley Hopkins</td>
                                                        <td>Karline Wallington</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row am-datatable-footer align-items-center">
                                            <div class="col-sm-5">
                                                <div class="dataTables_info" id="scheduledOutstandingJobsDataTable_info"
                                                     role="status" aria-live="polite">Showing 1 to 25 of 14,632 entries
                                                </div>
                                            </div>
                                            <div class="col-sm-7 blue-theme-pagination">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                     id="scheduledOutstandingJobsDataTable_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button previous disabled">
                                                            <a href="#">Previous</a>
                                                        </li>
                                                        <li class="paginate_button active">
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li class="paginate_button ">
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li class="paginate_button ">
                                                            <a href="#">3</a>
                                                        </li>

                                                        <li class="paginate_button next">
                                                            <a href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="jobNeedingAttention" class="tab-pane cont finance-scrn">

                                    <div id="scheduledPartiallyCompletedAndStartedJobs_wrapper"
                                         class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <div class="row am-datatable-body">
                                            <div class="col-sm-12">
                                                <table class="table table-hover table-bordered table-striped dataTable no-footer" >
                                                    <thead>
                                                    <tr role="row">
                                                        <th style="width: 20%" class="sorting_disabled">
                                                                    <span class="thHeader"> Scheduled Start Date Time
                                                                        <i class="fa fa-filter pull-right"></i>
                                                                    </span>
                                                        </th>
                                                        <th style="width: 14%" class="sorting_disabled">
                                                            Job Name
                                                        </th>
                                                        <th width="" style="width: 14%" class="sorting_disabled">
                                                                    <span class="thHeader">Service User
                                                                        <i class="fa fa-filter pull-right"></i>
                                                                    </span>
                                                        </th>
                                                        <th width="15%" class="sorting_disabled" >Employee's</th>
                                                        <th style="width: 14%" class="sorting_disabled">Status</th>
                                                        <th width="20%" class="sorting_disabled">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>14/11/2022 05:40</td>
                                                        <td>Personal care</td>
                                                        <td>Catherine Boultwood</td>
                                                        <td>Claudine Walker</td>
                                                        <td>Started</td>
                                                        <span class="mandatory text-danger">*</span>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>13/11/2022 22:00</td>
                                                        <td>Personal care</td>
                                                        <td>Jennifer Hull</td>
                                                        <td>Hattia Williams, Noriko Henry</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>13/11/2022 20:50</td>
                                                        <td>Personal care</td>
                                                        <td>Francis Ruscillo</td>
                                                        <td>Jason Thomas, Rohan Gordon</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>13/11/2022 20:30</td>
                                                        <td>Personal care</td>
                                                        <td>Pamela Ann Richardson</td>
                                                        <td><span class="ellipsis" title="Avon Baker, Princess  Princess">Avon Baker, Princess  Princes…</span>
                                                        </td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>13/11/2022 20:15</td>
                                                        <td>Personal care bed</td>
                                                        <td>Sheila Reynolds</td>
                                                        <td><span class="ellipsis"
                                                                  title="Sabrina  Haslam, RAKIYA Jenna Jervis">Sabrina  Haslam, RAKIYA Jenna…</span>
                                                        </td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>13/11/2022 20:00</td>
                                                        <td>Personal care</td>
                                                        <td>Sharon Redford</td>
                                                        <td>Traceyann lemon</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>13/11/2022 19:45</td>
                                                        <td>Personal care</td>
                                                        <td>Mansour Safary</td>
                                                        <td><span class="ellipsis"
                                                                  title="Kady Ann  Champagnie Jones , Jacqulin  Wilson ">Kady Ann  Champagnie Jones , …</span>
                                                        </td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>13/11/2022 19:00</td>
                                                        <td>Bed Call</td>
                                                        <td>Mary Mccrea</td>
                                                        <td>Katrina Ferguson, Sheena Hall</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-xmark mr-2"></i>Cancel Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-check mr-2"></i>Complete Job
                                                            </button>
                                                        </td>
                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row am-datatable-footer align-items-center">
                                            <div class="col-sm-5">
                                                <div class="dataTables_info" role="status" aria-live="polite">Showing 1 to 25 of 14,632 entries
                                                </div>
                                            </div>
                                            <div class="col-sm-7 blue-theme-pagination">
                                                <div class="dataTables_paginate paging_simple_numbers">
                                                    <ul class="pagination">
                                                        <li class="paginate_button previous disabled">
                                                            <a href="#">Previous</a>
                                                        </li>
                                                        <li class="paginate_button active">
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li class="paginate_button ">
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li class="paginate_button ">
                                                            <a href="#">3</a>
                                                        </li>

                                                        <li class="paginate_button next">
                                                            <a href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="dayJobs" class="tab-pane cont finance-scrn">
                                    <div class="row scheduleJobHousekeepingInputForm">

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Select Date  <span class="mandatory text-danger">*</span></label>
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

                                    <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <div class="row am-datatable-body">
                                            <div class="col-sm-12">
                                                <table class="table table-hover table-bordered table-striped dataTable no-footer">
                                                    <thead>
                                                    <tr role="row">
                                                        <th style="width: 5%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Job Id">Job Id
                                                        </th>
                                                        <th style="width: 3%" class="runType sorting_disabled" rowspan="1" colspan="1" aria-label="Run">Run
                                                        </th>
                                                        <th style="width: 10%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Run Name">Run Name
                                                        </th>
                                                        <th style="width: 9%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Scheduled Time">Scheduled Time
                                                        </th>
                                                        <th style="width: 8%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actual Time">Actual Time
                                                        </th>
                                                        <th style="width: 11%" class="sorting_disabled" rowspan="1" colspan="1" aria-label=" Service User">
                                                                    <span class="thHeader">
                                                                        Service User
                                                                        <i class="fa fa-filter pull-right"></i>
                                                                    </span>
                                                        </th>
                                                        <th style="width: 13%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action Name">Action Name
                                                        </th>
                                                        <th style="width: 3%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="No.">No.
                                                        </th>
                                                        <th width="" style="width: 15%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Employees ">
                                                                <span class="thHeader">Employees
                                                                    <i class="fa fa-filter pull-right"></i>
                                                                </span>
                                                        </th>
                                                        <th style="width: 6%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Status">Status
                                                        </th>
                                                        <th width="15%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>424571</td>
                                                        <td class=" runType">
                                                            <img class="run-type-css morningShiftSchedulingScreenFilterIconCSS" src="img/YellowSun.png"
                                                                 alt="" title="Apply morning shift Filter">
                                                        </td>
                                                        <td>CR0 0</td>
                                                        <td>09:00 - 09:45</td>
                                                        <td>06:48 - 07:54</td>
                                                        <td>Kathleen Mcmenamin</td>
                                                        <td>Personal care am</td>
                                                        <td>2</td>
                                                        <td>Sheena Hall - 0, 0<br>Rosheen Tirvasen - 0, 60</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-eye mr-2"></i>View Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-pen-alt mr-2"></i>Edit Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>424571</td>
                                                        <td class=" runType">
                                                            <img class="run-type-css morningShiftSchedulingScreenFilterIconCSS" src="img/BlueMoon.png" alt="" title="Apply morning shift Filter">
                                                        </td>
                                                        <td>CR0 0</td>
                                                        <td>09:00 - 09:45</td>
                                                        <td>06:48 - 07:54</td>
                                                        <td>Kathleen Mcmenamin</td>
                                                        <td>Personal care am</td>
                                                        <td>2</td>
                                                        <td>Sheena Hall - 0, 0<br>Rosheen Tirvasen - 0, 60</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-eye mr-2"></i>View Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-pen-alt mr-2"></i>Edit Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>424571</td>
                                                        <td class=" runType">
                                                            <img class="run-type-css morningShiftSchedulingScreenFilterIconCSS" src="img/YellowSun.png"
                                                                 alt="" title="Apply morning shift Filter">
                                                        </td>
                                                        <td>CR0 0</td>
                                                        <td>09:00 - 09:45</td>
                                                        <td>06:48 - 07:54</td>
                                                        <td>Kathleen Mcmenamin</td>
                                                        <td>Personal care am</td>
                                                        <td>2</td>
                                                        <td>Sheena Hall - 0, 0<br>Rosheen Tirvasen - 0, 60</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-eye mr-2"></i>View Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-pen-alt mr-2"></i>Edit Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>424571</td>
                                                        <td class=" runType">
                                                            <img class="run-type-css morningShiftSchedulingScreenFilterIconCSS" src="img/BlueMoon.png" alt="" title="Apply morning shift Filter">
                                                        </td>
                                                        <td>CR0 0</td>
                                                        <td>09:00 - 09:45</td>
                                                        <td>06:48 - 07:54</td>
                                                        <td>Kathleen Mcmenamin</td>
                                                        <td>Personal care am</td>
                                                        <td>2</td>
                                                        <td>Sheena Hall - 0, 0<br>Rosheen Tirvasen - 0, 60</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-eye mr-2"></i>View Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-pen-alt mr-2"></i>Edit Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>424571</td>
                                                        <td class=" runType">
                                                            <img class="run-type-css morningShiftSchedulingScreenFilterIconCSS" src="img/YellowSun.png"
                                                                 alt="" title="Apply morning shift Filter">
                                                        </td>
                                                        <td>CR0 0</td>
                                                        <td>09:00 - 09:45</td>
                                                        <td>06:48 - 07:54</td>
                                                        <td>Kathleen Mcmenamin</td>
                                                        <td>Personal care am</td>
                                                        <td>2</td>
                                                        <td>Sheena Hall - 0, 0<br>Rosheen Tirvasen - 0, 60</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-eye mr-2"></i>View Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-pen-alt mr-2"></i>Edit Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>424571</td>
                                                        <td class=" runType">
                                                            <img class="run-type-css morningShiftSchedulingScreenFilterIconCSS" src="img/BlueMoon.png" alt="" title="Apply morning shift Filter">
                                                        </td>
                                                        <td>CR0 0</td>
                                                        <td>09:00 - 09:45</td>
                                                        <td>06:48 - 07:54</td>
                                                        <td>Kathleen Mcmenamin</td>
                                                        <td>Personal care am</td>
                                                        <td>2</td>
                                                        <td>Sheena Hall - 0, 0<br>Rosheen Tirvasen - 0, 60</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-eye mr-2"></i>View Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-pen-alt mr-2"></i>Edit Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>424571</td>
                                                        <td class=" runType">
                                                            <img class="run-type-css morningShiftSchedulingScreenFilterIconCSS" src="img/YellowSun.png"
                                                                 alt="" title="Apply morning shift Filter">
                                                        </td>
                                                        <td>CR0 0</td>
                                                        <td>09:00 - 09:45</td>
                                                        <td>06:48 - 07:54</td>
                                                        <td>Kathleen Mcmenamin</td>
                                                        <td>Personal care am</td>
                                                        <td>2</td>
                                                        <td>Sheena Hall - 0, 0<br>Rosheen Tirvasen - 0, 60</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-eye mr-2"></i>View Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-pen-alt mr-2"></i>Edit Job
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>424571</td>
                                                        <td class=" runType">
                                                            <img class="run-type-css morningShiftSchedulingScreenFilterIconCSS" src="img/BlueMoon.png" alt="" title="Apply morning shift Filter">
                                                        </td>
                                                        <td>CR0 0</td>
                                                        <td>09:00 - 09:45</td>
                                                        <td>06:48 - 07:54</td>
                                                        <td>Kathleen Mcmenamin</td>
                                                        <td>Personal care am</td>
                                                        <td>2</td>
                                                        <td>Sheena Hall - 0, 0<br>Rosheen Tirvasen - 0, 60</td>
                                                        <td>Partially Completed</td>
                                                        <td>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme btn-sm">
                                                                <i class="fa-light fa-eye mr-2"></i>View Job
                                                            </button>
                                                            <button type="button" class="btn btn-space btn-primary btn-rounded btn-xsmall blue-theme">
                                                                <i class="fa-light fa-pen-alt mr-2"></i>Edit Job
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row am-datatable-footer align-items-center">
                                            <div class="col-sm-5">
                                                <div class="dataTables_info" role="status" aria-live="polite">Showing 1 to 25 of 14,632 entries
                                                </div>
                                            </div>
                                            <div class="col-sm-7 blue-theme-pagination">
                                                <div class="dataTables_paginate paging_simple_numbers">
                                                    <ul class="pagination">
                                                        <li class="paginate_button previous disabled">
                                                            <a href="#">Previous</a>
                                                        </li>
                                                        <li class="paginate_button active">
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li class="paginate_button ">
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li class="paginate_button ">
                                                            <a href="#">3</a>
                                                        </li>

                                                        <li class="paginate_button next">
                                                            <a href="#">Next</a>
                                                        </li>
                                                    </ul>
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


    </div>
@endsection
