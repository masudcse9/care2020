@extends('backend.layouts.master')
@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>My Action Page</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">My Action Page</a>
                        </li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="row">
            <!-- Message, Care Plan Read Div Starts -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="h5 text-primary font-weight-bold pb-3 mb-0 ">
                            My Actions
                        </h4>
                        <p class="welcome-page-message d-flex align-items-center">
                                            <span class="welcome-page-message-icon">
                                                <i class="fa-solid fa-message text-primary"></i>
                                            </span> You have
                            <strong>0</strong> new message  <strong>
                                <a class="ml-1" href="#"> Read Message(s)</a>
                            </strong>
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="showFilter-heading h6 font-weight-bold">
                                Handover Report
                            </div>
                            <div class="showFilter-btn">
                                <button type="button" class="btn btn-primary showFilter" onclick="filterFunction()">
                                    Show Filter
                                </button>
                            </div>
                        </div>
                        <div class="show-filer" id="show-filer">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Select Date</label>
                                <div class="col-sm-8">
                                    <div class="input-group date">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text input-group-append input-group-addon">
                                                    <i class="simple-icon-calendar"></i>
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Service User Name</label>
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

                        <div class="mt-4 mb-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Sort report by</label>
                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Service User Name </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Time</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="user-profile mt-4 mb-4">
                            <div id="dashboardHandoverReportContainer"
                                 class="info-block dashboardHandoverReportContainer welcomescreen-handover-panel">
                                <span class="description no-bottom-border"></span>
                                <span class="notesDate blue-theme-color font-weight-bold d-block">Afagh  (DiDi) Khaknegar - Moghaddam</span>
                                <span class="light-grey"><span class="font-weight-600 grey">18:00 (08/11/2022) - Personal care - PM</span> - RichelleLawrence</span>
                                <span class="new-color-added">client had her dinner and medication and leave fine</span>
                                <span class="description"></span>
                                <span class="notesDate blue-theme-color font-weight-600">Afzal Abidi</span>
                                <span class="light-grey"><span class="font-weight-600 grey">17:51 (08/11/2022) - Personal care</span> - EricaDaley</span>
                                <span class="new-color-added">Arrive at service user gave medication prepare dinner tidy work area, eyedrops in eyes, leave client comfortable </span>
                                <span class="description"></span>
                                <span class="notesDate blue-theme-color font-weight-600">Alan  Campbell</span>
                                <span class="light-grey"><span class="font-weight-600 grey">19:44 (08/11/2022) - Personal care bed</span> - AngelenaThompson</span>
                                <span class="new-color-added">Medication and a light wash leaving </span>
                                <span class="description"></span>
                                <span class="notesDate blue-theme-color font-weight-600">Alayne Churchill</span>
                                <span class="light-grey"><span class="font-weight-600 grey">21:45 (08/11/2022) - Personal care</span> - EricaDaley</span>
                                <span class="new-color-added">Arrive at service user gave medication prepare dinner tidy work area leave client comfortable </span>
                                <span class="description"></span>
                                <span class="notesDate blue-theme-color font-weight-600">Algena John</span>
                                <span class="light-grey"><span class="font-weight-600 grey">17:50 (08/11/2022) - Personal Care tea call </span> - IngridBailey</span>
                                <span class="new-color-added"><b>Ingrid  Bailey: </b>Met client in bed she was good check and change pad apply cream make hot drink and sandwich prumpt medication tidy up left okay. In bed comfortable </span>
                                <span class="description"></span>
                                <span class="notesDate blue-theme-color font-weight-600">Algena John</span>
                                <span class="light-grey"><span class="font-weight-600 grey">20:39 (08/11/2022)</span> - TediciaWalker</span>
                                <span class="new-color-added"><b>Tedicia  Walker: </b>Arrived met client she was doing fine greeted changed pad ointment on bottom make hot drink tidy work area left client comfortable </span>
                                <span class="description"></span>
                                <span class="notesDate blue-theme-color font-weight-600">Algena John</span>
                                <span class="light-grey"><span class="font-weight-600 grey">20:46 (08/11/2022) - Personal care bed call </span> - IngridBailey</span>
                                <span class="new-color-added"><b>Tedicia  Walker: </b>Arrived met client she was doing fine greeted changed pad ointment on bottom make hot drink tidy work area left client comfortable <br><b>Ingrid  Bailey: </b>Met client in bed she was OK check and change pad apply cream make hot drink left okay </span>
                                <span class="description"></span>
                                <span class="notesDate blue-theme-color font-weight-600">Aminata Sylla</span>
                                <span class="light-grey"><span class="font-weight-600 grey">19:50 (08/11/2022) - welfare check/ Medication</span> - TediciaWalker</span>
                                <span class="new-color-added">Arrived client went shopping she taken medication and already had something to eat </span>


                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link active" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="card bg-danger mb-3">
                    <div class="card-body">
                        <ul class="birthdays-ul welcom-page-carer-visit-info-list">
                            <li class="list-header">
                                <p class="birthdays-li">
                                    <span class="fa-light fa-birthday-cake"></span>&nbsp;
                                    <label class="control-label">James Mcdowall - 80</label>
                                </p>
                            </li>
                            <li class="list-header">
                                <p class="birthdays-li">
                                    <span class="fa-light fa-birthday-cake"></span>&nbsp;
                                    <label class="control-label">James Mcdowall - 80</label>
                                </p>
                            </li>
                            <li class="list-header">
                                <p class="birthdays-li">
                                    <span class="fa-light fa-birthday-cake"></span>&nbsp;
                                    <label class="control-label">James Mcdowall - 80</label>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- System upgrades starts -->
                <div class="accordion" id="featuresParentDiv">
                    <div class="card bg-white mbt-15 featuresParent">
                        <div class="bg-danger text-white p-3" id="featuresHeaderDiv">
                            <div data-toggle="collapse" data-target="#featuresDiv" aria-expanded="false" aria-controls="featuresDiv" id="collapsableSpan" class="light-blue-lbl">
                                <strong>System Upgrades 27/09/2022</strong>
                            </div>
                        </div>
                        <div id="featuresDiv" class="collapse in pl-3 pr-3" aria-labelledby="headingOne" data-parent="#featuresParentDiv">
                            <div class="panel-body no-padding-top">
                                <ul class="ul-heading">
                                    <li class="li-heading">
                                        E-mar
                                        <ul class="system-updates ul-a">
                                            <li>
                                                <p class="description" title="We have developed an e-mar system which we will be trialling. If you would be interested in using this premium functionality, please get in touch.">We have developed an e-mar system which we will be trialling. If you would be interested in using this premium functionality, please get in touch.</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="ul-heading">
                                    <li class="li-heading">
                                        Restrict Carer Access
                                        <ul class="system-updates ul-a">
                                            <li>
                                                <p class="description" title="We have deployed extra functionality to further lock down on the web what level 1 and 2 carers on shift have access to. This can be switched on in settings - Restrict care home carers (level 1 &amp; 2) to only see service user on their shift. Please contact the support team if you need further details.">We have deployed extra functionality to further lock down on the web what level 1 and 2 carers on shift have access to. This can be switched on in settings - Restrict care home carers (level 1 &amp; 2) to only see service user on their shift. Please contact the support team if you need further details.</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="ul-heading">
                                    <li class="li-heading">
                                        Other UI and enhancements
                                        <ul class="system-updates ul-a">
                                            <li>
                                                <p class="description" title="A few UI enhancements have been made - the most obvious is the new format of the regular actions on the carer dashboard. The green ticks highlight the last action date/time and the red writing highlights the next due time.">A few UI enhancements have been made - the most obvious is the new format of the regular actions on the carer dashboard. The green ticks highlight the last action date/time and the red writing highlights the next due time.</p>
                                            </li>
                                            <li>
                                                <p class="description" title="There are a number of other minor improvements and small enhancements..">There are a number of other minor improvements and small enhancements.</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
