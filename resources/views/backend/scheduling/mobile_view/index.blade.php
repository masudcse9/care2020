@extends('backend.layouts.master')
@section('title','Mobile View')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Mobile View of Schedule</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">Mobile View of Schedule</a>
                        </li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-sm-3 col-xs-12 mb-10">
                <div class="input-group date">
                    <input type="text" class="form-control">
                    <span class="input-group-text input-group-append input-group-addon">
                             <i class="simple-icon-calendar"></i>
                        </span>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12 mb-10">
                <select class="form-control searchValues text-indent-6 placeholder-color" style="width: 100%">
                    <option value="">Select Area</option>
                    <option value="16">Croydon - Croydon 6</option>
                    <option value="11">Croydon - Croydon 1</option>
                    <option value="12">Croydon - Croydon 2</option>
                    <option value="13">Croydon - Croydon 3</option>
                    <option value="14">Croydon - Croydon 4</option>
                    <option value="15">Croydon - Croydon 5</option>
                </select>
            </div>

            <div class="col-sm-3 col-xs-12 mb-10">
                <div class="input-group" style="width: 100%;">
                    <select class="form-control searchValues run ">
                        <option value="13">CR0 0</option>
                        <option value="27">CR0 9</option>
                        <option value="28">CR0 7</option>
                        <option value="29">CR0 8</option>
                        <option value="60">CR0 6</option>
                        <option value="14">CR0 0</option>
                        <option value="30">CR0 9</option>
                        <option value="31">CR0 7</option>
                        <option value="32">CR0 8</option>
                        <option value="61">CR0 6</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="row my-3">
            <div class="col-xs-12 col-sm-3 d-flex justify-content-between mb-10">
                <input type="text" class="form-control nameSearch text-indent-10 placeholder-color" placeholder="Service User" id="residentName">
            </div>
            <div class="col-xs-12 col-sm-3 mb-10">
                <input type="text" placeholder="Carer" class="form-control nameSearch text-indent-10 placeholder-color" id="carerName">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 no-padding-left domTaskDetailsParentDiv no-padding-right viewable">
                <div class="content-cards row" style="padding-top: 5px">

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#fbff4a;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#59ff7e;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#fbff4a;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                        <span class="ml-2 fa fa-circle font-size-15" style="color: red;"></span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu4">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#59ff7e;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                        <span class="ml-2 fa-light fa-users font-size-15 text-white"></span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu5">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#ffd1b0;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu6">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#66ccff;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/BlueMoon.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu7">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-cancelled-absent card" style="--background-color:#bdbdbd;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#59ff7e;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu18" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#fbff4a;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#59ff7e;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#fbff4a;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#59ff7e;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#fbff4a;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#59ff7e;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#fbff4a;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 jobContentCard" >
                        <div class="mobile-card job-card dom-task-regular run-allcated-job card" style="--background-color:#59ff7e;">
                            <div class="card-body taskCardContent p-3" >
                                <h5 class="card-title taskCardName-Title font-weight-bold mb-0">07:30-08:30 |
                                    Daisy Waters | Personal care AM</h5>
                                <div class="runType-and-action-div d-flex justify-content-between align-items-center">
                                    <div class="img-tl">
                                        <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                        <span class="ml-2 font-weight-bold">CR5</span>
                                    </div>
                                    <div class="dropdown-menu-div pr-0">
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenu19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; ">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="height: 35px; width: 27px;" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <button class="dropdown-item amendDetails" >View Job Details</button>
                                                <button class="dropdown-item amendDetails" >Change Employee</button>
                                                <button class="dropdown-item amendDetails" type="button">Change Time</button>
                                                <button class="dropdown-item amendDetails" type="button">Complete Job</button>
                                                <button class="dropdown-item amendDetails" type="button">Cancel</button>
                                                <button class="dropdown-item amendDetails" type="button">Add Note</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between carer-allocation-div" >
                                    <div>
                                        <span class="card-text font-weight-bold">Princess  Princess <br></span>
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
