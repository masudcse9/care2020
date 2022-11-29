@extends('backend.layouts.master')
@section('title', 'Operations')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Scheduling Page</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">Scheduling</a>
                        </li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 widget no-padding-right padding-8" style="display: block;">
                <div class="header-div col-md-12 col-sm-12 col-lg-12 no-padding-left no-padding-right row align-items-center">
                    <div class="col-md-8 col-sm-8 col-lg-8 no-padding-left no-padding-right row align-items-center">
                        <div class="col-md-3 col-sm-3 col-lg-3 no-padding-left domCareTemplateZoneAreaSelectWidth">
                            <select class="form-control" id="zoneAreaFilter" required="">
                                <option value="11" data-name="Croydon 1" selected="">Croydon- Croydon 1</option>
                                <option value="12" data-name="Croydon 2">Croydon- Croydon 2</option>
                                <option value="13" data-name="Croydon 3">Croydon- Croydon 3</option>
                                <option value="14" data-name="Croydon 4">Croydon- Croydon 4</option>
                                <option value="15" data-name="Croydon 5">Croydon- Croydon 5</option>
                                <option value="16" data-name="Croydon 6">Croydon- Croydon 6</option>
                            </select>
                        </div>
                        <label class="roster-status col-md-2 col-sm-2 col-lg-2 no-padding-right no-padding-bottom control-label common-label-content white-space padding-left-mobile center">
                            <strong>Template</strong>
                        </label>
                        <div class="col-md-4 col-sm-4 col-lg-4 no-padding-right" id="templateList">
                            <select id="template" name="template" class="form-control"
                                    data-placeholder="Choose Template">
                                <option value="">Choose Template</option>
                                <option value="4">Croydon 1 Daily</option>
                                <option value="38">suzette test</option>
                                <option value="34">test siyachetal</option>
                            </select>
                        </div>

                        <div id="saveTemplateTrigger"
                             class="saveTemplateTriggerCSS col-md-3 col-sm-3 col-lg-3 no-padding-bottom">
			                    <span class="col-md-3 col-sm-3 col-lg-3 no-margin-bottom md-trigger no-padding-right">
                                    <em class="fa-light fa-plus btn-primary-add-icon add-new-run-icon blue-format"
                                        title="Create New Template"></em>
			                    </span>
                            <span class="fa-light fa-trash dom-template-trash-icon col-md-3 col-sm-3 col-lg-3 no-padding-left"></span>
                        </div>
                    </div>
                    <div class="header-button-div col-md-4 col-sm-4 col-lg-4 no-padding-right">
                        <button type="button" id="dom-setting-template"
                                class="btn btn-success header-button margin-bottom margin-right" data-container="body"
                                data-html="true" data-toggle="popover-focus">
                            Settings
                        </button>
                        <a href="#">
                            <button type="button" id="dom-report" class="btn btn-success header-button margin-bottom"
                                    data-container="body" data-html="true" data-toggle="popover-focus">
                                Reports
                            </button>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-between row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 no-padding-right no-padding-left">
                        <button type="button" id="job-filters"
                                class="btn btn-success filter-button margin-bottom job-filter-button"
                                data-container="body" data-html="true" data-toggle="popover-focus"
                                data-original-title="" title="">
                            Filter Jobs
                        </button>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 content-right no-padding-right margin-bottom-18">
                        <div class="dropdown col-md-3 col-sm-3 col-lg-3 no-padding-right no-padding-left dropdown-dom-template-view-button"
                             data-container="body" data-html="true" data-toggle="popover-focus">
                            <button id="domCareTemplateViewBtn"
                                    class="btn btn-primary col-md-12 col-sm-12 col-lg-12 dropdown-toggle select-button-css dom-background-css button-dom-view"
                                    type="button" data-toggle="dropdown" aria-expanded="false">Action/Runs<span
                                    class="caret caretSpacing"></span></button>
                            <ul class="dropdown-menu col-md-12 col-sm-12 col-lg-12" id="viewDropdown">
                                <li>
                                    <a class="dom-view-padding-10 dom-view-dropdown" data-value="">
                                        <span class="am-radio blue-theme-color">
                                            <label class="font-black">Action/Runs</label>
                                            <input type="radio" name="domTemplateView" class="rd" id="jobs-runs"
                                                   checked="" autocomplete="off" data-status="Jobs/sequence_tab"
                                                   value="Jobs/sequence_tab">
					                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dom-view-padding-10 dom-view-dropdown" data-value="">
                                        <span class="am-radio blue-theme-color">
                                            <label class="font-black">Employee/Timeline</label>
                                            <input type="radio" name="domTemplateView" class="rd" id="carer-timeline"
                                                   autocomplete="off" data-status="Carer/timeday_tab"
                                                   value="Carer/timeday_tab">
					                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dom-view-padding-10 dom-view-dropdown" data-value="">
                                            <span class="am-radio blue-theme-color">
                                                <label class="font-black">Service User/Timeline</label>
                                                <input type="radio" name="domTemplateView" class="rd"
                                                       id="customer-timeline" autocomplete="off"
                                                       data-status="Customer/timeday_tab" value="Customer/timeday_tab">
                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 no-padding-left no-padding-right domTasksCardParentDiv job-parent-div">
                <div class="domCard full-width">
                    <ul class="droppableArea droppable droppable-card-area scheduling ui-sortable">

                        <li style="list-style-type: none;"
                            class="dom-draggable care-task-item ui-sortable-handle ui-sortable">
                            <div class="domActionCardParentDiv custom-dom-task-parent-div scheduling no-padding-left no-padding-right ui-sortable-handle">
                                <input type="hidden" class="taskId" value="174">
                                <div class="dom-task-card custom-dom-task-card scheduling"
                                     style="background-color: #fbff4a;">
                                    <p class="line-height-15">
                                        <strong>John Haggarty-Personal care, Morning call visit</strong>
                                    </p>
                                    <p class="line-height-15">
                                        <strong>6:00 am/0:45/6:45 am</strong>
                                        <img src="{{ asset('assets/backend') }}/img/multiple_people_icon.png" alt="" class="job-card-img">
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li style="list-style-type: none;"
                            class="dom-draggable care-task-item ui-sortable-handle ui-sortable">
                            <div class="domActionCardParentDiv custom-dom-task-parent-div scheduling no-padding-left no-padding-right ui-sortable-handle">
                                <input type="hidden" class="taskId" value="174">
                                <div class="dom-task-card custom-dom-task-card scheduling"
                                     style="background-color: #fbff4a;">
                                    <p class="line-height-15">
                                        <strong>John Haggarty-Personal care, Morning call visit</strong>
                                    </p>
                                    <p class="line-height-15">
                                        <strong>6:00 am/0:45/6:45 am</strong>
                                        <span class="fa fa-circle font-size-15" style="color: red;"></span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="list-style-type: none;"
                            class="dom-draggable care-task-item ui-sortable-handle ui-sortable">
                            <div class="domActionCardParentDiv custom-dom-task-parent-div scheduling no-padding-left no-padding-right ui-sortable-handle">
                                <input type="hidden" class="taskId" value="174">
                                <div class="dom-task-card custom-dom-task-card scheduling"
                                     style="background-color: #fbff4a;">
                                    <p class="line-height-15">
                                        <strong>John Haggarty-Personal care, Morning call visit</strong>
                                    </p>
                                    <p class="line-height-15">
                                        <strong>6:00 am/0:45/6:45 am</strong>
                                        <span class="fa fa-circle font-size-15" style="color: red;"></span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="list-style-type: none;"
                            class="dom-draggable care-task-item ui-sortable-handle ui-sortable">
                            <div class="domActionCardParentDiv custom-dom-task-parent-div scheduling no-padding-left no-padding-right ui-sortable-handle">
                                <input type="hidden" class="taskId" value="174">
                                <div class="dom-task-card custom-dom-task-card scheduling"
                                     style="background-color: #fbff4a;">
                                    <p class="line-height-15">
                                        <strong>John Haggarty-Personal care, Morning call visit</strong>
                                    </p>
                                    <p class="line-height-15">
                                        <strong>6:00 am/0:45/6:45 am</strong>
                                    </p>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="col-md-9">
                <div class="form-group no-padding-left no-margin-bottom addRunButtonParent droppableRunArea">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3 text-center runs-header font-size-15">
                            Runs
                        </div>
                        <label id="addNewRun" class="col-sm-1 col-md-1 col-lg-1 addRun no-margin-bottom al">
                            <em class="fa-solid fa-plus btn-primary-add-icon add-new-run-icon blue-format"
                                title="Add New Run"></em>
                        </label>
                        <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 no-padding-right align-items-center"
                             id="schedulingScreenShiftFilterDiv2">
                            <em class="fa-light fa-xmark-circle clearSchedulingScreenFilterCSS"
                                id="clearSchedulingScreenFilter" title="Clear all filters"></em>
                            <div class="shift-run-filters">
                                <img class="run-type-css morningShiftSchedulingScreenFilterIconCSS"
                                     id="morningShiftSchedulingScreenFilterIcon" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt=""
                                     title="Apply morning shift Filter">
                                <img class="run-type-css eveningShiftSchedulingScreenFilterIconCSS"
                                     id="eveningShiftSchedulingScreenFilterIcon" src="{{ asset('assets/backend') }}/img/BlueMoon.png" alt=""
                                     title="Apply evening shift filter">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="no-padding-left no-padding-right domRunTaskDetailsParentDiv droppableRunArea viewable">
                    <div class="dom-scheduler-run-div ROW">
                        <div class="d-flex-center-items domRunDetails">
                            <div class="col-md-3 col-sm-3 col-lg-3 run-name no-padding-left  not-draggable">
                                <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                <span>CR5</span>
                                <span class="run-icon-wrapper">
                                        <em class="manageIcons fa-light fa-pen cursor-pointer"></em>
                                    </span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-lg-9 dom-card-run-area runparentdiv-21 pl-0">
                                <ul class="droppable droppableArea runs-expandable-content run-css ui-sortable" id="21"
                                    style="border-left: 0px">

                                </ul>
                            </div>
                        </div>

                        <div class="d-flex-center-items domRunDetails">
                            <div class="col-md-3 col-sm-3 col-lg-3 run-name no-padding-left  not-draggable">
                                <img class="run-type-css" src="{{ asset('assets/backend') }}/img/YellowSun.png" alt="">
                                <span>CR5</span>
                                <span class="run-icon-wrapper">
                                        <em class="manageIcons fa-light fa-pen cursor-pointer"></em>
                                    </span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-lg-9 dom-card-run-area runparentdiv-21 pl-0">
                                <ul class="droppable droppableArea runs-expandable-content run-css ui-sortable" id="21"
                                    style="border-left: 0px">

                                </ul>
                            </div>
                        </div>

                        <div class="d-flex-center-items domRunDetails">
                            <div class="col-md-3 col-sm-3 col-lg-3 run-name no-padding-left  not-draggable">
                                <img class="run-type-css" src="{{ asset('assets/backend') }}/img/BlueMoon.png" alt="">
                                <span>CR5</span>
                                <span class="run-icon-wrapper">
                                        <em class="manageIcons fa-light fa-pen cursor-pointer"></em>
                                    </span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-lg-9 dom-card-run-area runparentdiv-21 pl-0">
                                <ul class="droppable droppableArea runs-expandable-content run-css ui-sortable" id="21"
                                    style="border-left: 0px">

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
