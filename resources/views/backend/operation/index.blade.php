@extends('backend.layouts.master')
@section('title', 'Operations')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Operations Dashboard</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">Operations Dashboard</a>
                        </li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4 no-padding-right">
                <div class="col-sm-12 widget managerAlertPaddingWidget card">
                    <div class="padding-top-10 widget-head">
                        <p>
                            <span class="title"><strong>Latest alerts</strong></span>
                        </p>
                    </div>
                    <div class="parentManagerAlertDiv">
                        <div class="total-content">
                            <div class="managerAlertDiv cal-container" >
                                <div class="row no-padding-right" >
                                    <div class="col-sm-12 col-xs-12 col-lg-12 no-padding-right">
                                        <div class="alert alert-warning alert-icon alert-dismissible" role="alert">
                                            <div class="icon icon-width"><span class="fa fa-flag red-flag"></span>
                                            </div>
                                            <div class="message alertMessgae operation-dashboard-latest-alert">
                                                <strong>Job Flagged by Mayurbhai Parekh</strong><br>
                                                <p>Appleton Geoffrey - Absence Recorded</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-padding-right" >
                                    <div class="col-sm-12 col-xs-12 col-lg-12 no-padding-right">
                                        <div class="alert alert-warning alert-icon alert-dismissible" role="alert">
                                            <div class="icon icon-width"><span class="fa fa-flag red-flag"></span>
                                            </div>
                                            <div class="message alertMessgae operation-dashboard-latest-alert">
                                                <strong>Job Flagged by Judith Williams</strong><br>
                                                <p>Raymond Baker - Absence Recorded</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-padding-right" >
                                    <div class="col-sm-12 col-xs-12 col-lg-12 no-padding-right">
                                        <div class="alert alert-missed-medication alert-icon alert-dismissible"
                                             role="alert">
                                            <div class="icon icon-width"><span class="fa fa-medkit"></span></div>
                                            <div class="message alertMessgae operation-dashboard-latest-alert"
                                            ><strong>Medication Not Given by Sandra
                                                    Lloyd</strong><br>
                                                <p>Lalithamma Chandrakala - Medication Prompt, 14/11/2022 17:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-padding-right" >
                                    <div class="col-sm-12 col-xs-12 col-lg-12 no-padding-right">
                                        <div class="alert alert-warning alert-icon alert-dismissible" role="alert">
                                            <div class="icon icon-width"><span class="fa fa-flag red-flag"></span>
                                            </div>
                                            <div class="message alertMessgae operation-dashboard-latest-alert" ><strong>Job Flagged by Mayurbhai
                                                    Parekh</strong><br>
                                                <p>Jaya Gajjar - Communication Note Mayur Parekh, allocation office</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-padding-right">
                                    <div class="col-sm-12 col-xs-12 col-lg-12 no-padding-right">
                                        <div class="alert alert-warning alert-icon alert-dismissible" role="alert">
                                            <div class="icon icon-width"><span class="fa fa-flag red-flag"></span>
                                            </div>
                                            <div class="message alertMessgae operation-dashboard-latest-alert"
                                                 data-id="282871"><strong>Job Flagged by Mayurbhai
                                                    Parekh</strong><br>
                                                <p>Jean Brooker - Communication Note Mayur Parekh, allocation
                                                    office</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-padding-right" >
                                    <div class="col-sm-12 col-xs-12 col-lg-12 no-padding-right">
                                        <div class="alert alert-warning alert-icon alert-dismissible" role="alert">
                                            <div class="icon icon-width"><span class="fa fa-flag red-flag"></span>
                                            </div>
                                            <div class="message alertMessgae operation-dashboard-latest-alert"
                                                 data-id="282870"><strong>Job Flagged by Mayurbhai
                                                    Parekh</strong><br>
                                                <p>Wayne Hill - Absence Recorded</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-padding-right">
                                    <div class="col-sm-12 col-xs-12 col-lg-12 no-padding-right">
                                        <div class="alert alert-missed-medication alert-icon alert-dismissible"
                                             role="alert">
                                            <div class="icon icon-width"><span class="fa fa-medkit"></span></div>
                                            <div class="message alertMessgae operation-dashboard-latest-alert"
                                                 data-id="282869"><strong>Medication Not Given by Rosheen
                                                    Tirvasen</strong><br>
                                                <p>Phyllis Wood - Personal Care - Lunch , 14/11/2022 13:00</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-sm-12 widget widget-fullwidth swapUsers operationDashboard shift-operational-dashboard card" style="display: block">
                    <div class="padding-top-10 widget-head">
                        <p>
                            <span class="title"><strong>Latest alerts</strong></span>
                        </p>
                    </div>
                    <div class="parentShiftDiv todayteamOverflow">
                        <div class="total-content">
                            <div class="col-sm-12">
                                <div class="child todayTeam-child-margin ">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Debbie Hitall Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Debbie Hitall">Debbie Hitall</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin ">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Janet Powell Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Janet Powell">Janet Powell</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin ">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Karline Wallington SUPERVISOR  " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Karline Wallington">Karline Wallington</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="SUPERVISOR ">SUPERVISOR </p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin ">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Tawia Woolery Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Tawia Woolery">Tawia Woolery</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin ">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Elaine Forbes Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Elaine Forbes">Elaine Forbes</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin todayTeamDivMargin">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Shonnika aleyonde Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Shonnika aleyonde">Shonnika aleyonde</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin todayTeamDivMargin">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Cassandra mitchell Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Cassandra mitchell">Cassandra mitchell</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin todayTeamDivMargin">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Sharon  Cole Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Sharon  Cole">Sharon  Cole</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin todayTeamDivMargin">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Karen Williams Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Karen Williams">Karen Williams</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin ">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Debbie Hitall Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Debbie Hitall">Debbie Hitall</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin ">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Janet Powell Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Janet Powell">Janet Powell</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin ">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Karline Wallington SUPERVISOR  " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Karline Wallington">Karline Wallington</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="SUPERVISOR ">SUPERVISOR </p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin ">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Tawia Woolery Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Tawia Woolery">Tawia Woolery</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin ">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Elaine Forbes Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Elaine Forbes">Elaine Forbes</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin todayTeamDivMargin">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Shonnika aleyonde Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Shonnika aleyonde">Shonnika aleyonde</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin todayTeamDivMargin">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Cassandra mitchell Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Cassandra mitchell">Cassandra mitchell</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin todayTeamDivMargin">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Sharon  Cole Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Sharon  Cole">Sharon  Cole</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                                <div class="child todayTeam-child-margin todayTeamDivMargin">
                                    <div class="body-content">
                                        <img class="carerPhoto" data-toggle="tooltip" data-placement="auto" data-original-title=" Karen Williams Carer " src="{{ asset('assets/backend') }}/{{ asset('assets/backend') }}/img/no_image.png">
                                    </div>
                                    <div class="todayTeam-footer-content logout">
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Karen Williams">Karen Williams</p>
                                        <p data-toggle="tooltip" data-placement="bottom" data-original-title="Carer">Carer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item ">
                            <div class="card chart user-profile col-md-12">
                                <div class="padding-top-10 widget-head">
                                    <p>
                                        <span class="title"><strong>Absences</strong></span>
                                    </p>
                                </div>
                                <div class="chart-container total-content">
                                    <div class="info-block panel panel-default">
                                        <div class="panel-body">
                                            <table class="table">
                                                <tbody class="">
                                                <tr>
                                                    <td class="item"> Azariah Davies</td>
                                                    <td class="item">Hospital Visit</td>
                                                    <td class="absenceDateItem">15-11-2022 17:15</td>
                                                </tr>
                                                </tbody>
                                                <tbody class="no-border-x no-border-y">
                                                <tr>
                                                    <td class="item">Sheila Reynolds</td>
                                                    <td class="item">Other</td>
                                                    <td class="absenceDateItem">21-11-2022 12:30</td>
                                                </tr>
                                                <tr>
                                                    <td class="item">Sheila Reynolds</td>
                                                    <td class="item">Other</td>
                                                    <td class="absenceDateItem">21-11-2022 12:30</td>
                                                </tr>
                                                <tr>
                                                    <td class="item">Sheila Reynolds</td>
                                                    <td class="item">Other</td>
                                                    <td class="absenceDateItem">21-11-2022 12:30</td>
                                                </tr>
                                                <tr>
                                                    <td class="item">Sheila Reynolds</td>
                                                    <td class="item">Other</td>
                                                    <td class="absenceDateItem">21-11-2022 12:30</td>
                                                </tr>
                                                <tr>
                                                    <td class="item">Sheila Reynolds</td>
                                                    <td class="item">Other</td>
                                                    <td class="absenceDateItem">21-11-2022 12:30</td>
                                                </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="card chart user-profile col-md-12">
                                <div class="padding-top-10 widget-head">
                                    <p>
                                        <span class="title"><strong>Birthday</strong></span>
                                    </p>
                                </div>
                                <div class="chart-container total-content">
                                    <div class="info-block panel panel-default">
                                        <div class="panel-body">
                                            <table class="table">
                                                <tbody class="no-border-x no-border-y">

                                                <tr>
                                                    <td class="item"><span class="fa-light fa-gift mr-2 text-danger"></span>Stanley Nembhard</td>
                                                    <td class="item"><span>Age : </span>91</td>
                                                </tr>

                                                <tr>
                                                    <td class="item"><span class="fa-light fa-gift mr-2 text-danger"></span> Azariah Davies</td>
                                                    <td class="item"><span>Age : </span>89</td>
                                                </tr>

                                                <tr>
                                                    <td class="item"><span class="fa-light fa-gift mr-2 text-danger"></span>Ahmed Abi</td>
                                                    <td class="item"><span>Age : </span>17</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="progress-item-content">

                                        <div class="progress-item pb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>Outstanding Actions</h6>
                                                <span>13312/1033</span>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-item pb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>Alerts</h6>
                                                <span>6573/2</span>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>

                                            </div>
                                        </div>
                                        <div class="progress-item pb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>Care Plans</h6>
                                                <span>6/63</span>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-item pb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>DoLs0</h6>
                                                <span>0/0</span>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="progress-item pb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>Incidents(Today)</h6>
                                                <span>0</span>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body ">
                        <div class="progress-item pb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Today's Action Progress Details:</span>
                            </div>
                            <div class="progress" style="height: 25px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">759 Completed</div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">235 Outstanding</div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">25 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="tab-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#alertedActionTab" data-toggle="tab" aria-expanded="false">Alerts</a></li>
                            <li class=""><a href="#actionTab" data-toggle="tab" aria-expanded="false">Actions</a></li>
                            <li class=""><a href="#actionIssueTab" data-toggle="tab"  aria-expanded="false">Action Issues</a></li>
                            <li class=""><a href="#carePlanTab" data-toggle="tab" aria-expanded="false">Care Plans</a></li>
                            <li class=""><a href="#handoverTab" data-toggle="tab" aria-expanded="false">Handover</a></li>
                            <li class=""><a href="#dolsTab" data-toggle="tab" aria-expanded="true">DoLS</a></li>
                            <li><a href="#accidentTab" data-toggle="tab" >Incidents</a></li>
                            <li><a href="#familyTab" data-toggle="tab" >Family Share</a></li>
                            <li><a href="#obsWeightChartTab" data-toggle="tab">  Weight Chart</a></li>
                            <li><a href="#obsFluidChartTab" data-toggle="tab">  Fluid Chart</a></li>
                            <li><a href="#obsTempChartTab" data-toggle="tab">Temp Chart</a></li>
                            <li><a href="#obsBowelChartTab" data-toggle="tab">Bowel Chart</a></li>
                        </ul>
                        <div class="tab-content remove-tab-top-padding">
                            <div id="alertedActionTab" class="tab-pane cont dashboardPanel">
                                <table class="table table-striped table-hover table-fw-widget dataTable no-footer">
                                    <thead>
                                    <tr role="row">
                                        <th style="width: 20%;" class="sorting_disabled" ><span id="dataPickerheader" class="thHeader dataPickerheader"> Date<em class="fa fa-filter pull-right"></em></span>
                                            <div id="dataRangePickerParentDiv" class="input-group datetimepickers thInput dataRangePickerParentDiv" style="display: none;">
                                                <input type="hidden" id="id-start-date" value="">
                                                <input type="hidden" id="id-end-date" value=""> <input class="form-control date-picker thInput" placeholder="Select Date" name="id-date" id="id-date" type="text"> <span class="input-group-addon btn btn-primary"><em class="icon-th s7-date"></em></span>
                                            </div></th>

                                        <th class="sorting_disabled" >Time</th>
                                        <th style="width: 15%" class="sorting_disabled" >
                                                <span class="thHeader"> Alert Reason<em class="fa fa-filter pull-right"></em>
			</span> <select multiple="" id="alertReasons" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">

                                                <option value="1">Flagged by Carer</option>

                                                <option value="2">Medication Alert</option>

                                                <option value="3">Checks Missed</option>

                                                <option value="5">Weight Change Issue</option>

                                                <option value="6">Breached Tolerance Time</option>

                                                <option value="9">Not Given Medication</option>

                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%; display: none;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></th><th id="7" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				Service User


				">
				<span class="thHeader">Service User
					<em class="fa fa-filter pull-right"></em>
				</span>
                                            <input type="text" class="input-md margin0 width100 thInput" style="display: none;" placeholder="Service User" name="serviceUser" id="serviceUser" value=""></th><th id="8" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				Employee



			">
				<span class="thHeader">Employee
					<em class="fa fa-filter pull-right"></em>
				</span>
                                            <input type="text" class="input-md margin0 width100 thInput" style="display: none;" placeholder="Employee" name="carer" id="carer" value="">
                                        </th><th id="9" class="width-14-perc sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th><th style="width: 16%" id="10" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				View Archived
			"><button class="btn btn-danger manager-arch" data-toggle="tab" id="btn-manager-review-archive" onclick="fetchTabDetails(managerReviewArchived);" aria-expanded="true">
                                                <strong>View Archived</strong>
                                            </button></th></tr>
                                    </thead>
                                    <tbody>

                                    <tr role="row" class="odd"><td>15/11/2022</td><td>19:17</td><td>Flagged by Carer</td><td>Mead Powell</td><td>Mayurbhai Parekh</td><td>Communication Note Mayur Parekh, allocation  office</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(427113);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282897);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282897);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282897" onclick="deleteManagerReviewAjaxCall(282897)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>18:54</td><td>Medication Alert</td><td>Margaret Webb</td><td>Rhotecia Monroe Carvalho</td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(427033);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282896);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282896);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282896" onclick="deleteManagerReviewAjaxCall(282896)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>18:48</td><td>Medication Alert</td><td>Patrick Smith</td><td>Keisha Whyte</td><td>Personal care, Lunchtime call visit</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(427077);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282895);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282895);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282895" onclick="deleteManagerReviewAjaxCall(282895)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>18:47</td><td>Flagged by Carer</td><td>SUHAIL AZIZ</td><td>Keisha Whyte</td><td>Lunchtime preferences</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(427079);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282894);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282894);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282894" onclick="deleteManagerReviewAjaxCall(282894)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>18:04</td><td>Flagged by Carer</td><td> Azariah Davies</td><td>Mayurbhai Parekh</td><td>Communication Note Mayur Parekh, allocation  office</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426994);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282893);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282893);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282893" onclick="deleteManagerReviewAjaxCall(282893)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>18:02</td><td>Flagged by Carer</td><td>Mead Powell</td><td>Mayurbhai Parekh</td><td>Communication Note Mayur Parekh, allocation  office</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426988);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282892);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282892);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282892" onclick="deleteManagerReviewAjaxCall(282892)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>17:38</td><td>Medication Alert</td><td>Janet  Seymour </td><td>yvette  clarke</td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426880);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282891);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282891);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282891" onclick="deleteManagerReviewAjaxCall(282891)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>17:18</td><td>Flagged by Carer</td><td> Azariah Davies</td><td>Mayurbhai Parekh</td><td>Absence Recorded</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426913);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282890);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282890);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282890" onclick="deleteManagerReviewAjaxCall(282890)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>16:19</td><td>Flagged by Carer</td><td>Sheila Reynolds</td><td>Reekikumar Patel</td><td>Absence Recorded</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426828);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282889);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282889);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282889" onclick="deleteManagerReviewAjaxCall(282889)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>15:57</td><td>Flagged by Carer</td><td>Christopher Slater</td><td>Suzette Thomas</td><td>Communication Note suzette, Admin</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426808);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282888);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282888);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282888" onclick="deleteManagerReviewAjaxCall(282888)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>14:49</td><td>Breached Tolerance Time</td><td>Sheila   Samuel</td><td>Geraldine Foster</td><td>Personal care Lunch</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426469);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282887);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282887);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282887" onclick="deleteManagerReviewAjaxCall(282887)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>14:33</td><td>Checks Missed</td><td>Robin  Robinson </td><td>Kady Ann  Champagnie Jones </td><td>Personal Care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426696);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282886);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282886);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282886" onclick="deleteManagerReviewAjaxCall(282886)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>13:19</td><td>Medication Alert</td><td>Janet  Seymour </td><td>yvette  clarke</td><td>Personal Care </td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426601);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282885);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282885);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282885" onclick="deleteManagerReviewAjaxCall(282885)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>12:39</td><td>Flagged by Carer</td><td>Robert Williams</td><td>Suzette Thomas</td><td>Communication Note suzette , Admin</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426555);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282884);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282884);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282884" onclick="deleteManagerReviewAjaxCall(282884)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>11:21</td><td>Flagged by Carer</td><td>Jennifer Takah Murombe-Chivero</td><td>Ogbuokiri  David</td><td>Absence Recorded</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426305);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282883);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282883);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282883" onclick="deleteManagerReviewAjaxCall(282883)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>11:04</td><td>Flagged by Carer</td><td>David  Newbold</td><td>Renee  Powell</td><td>Absence Recorded</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426232);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282882);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282882);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282882" onclick="deleteManagerReviewAjaxCall(282882)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>10:42</td><td>Medication Alert</td><td>Janet  Seymour </td><td>yvette  clarke</td><td>Personal Care </td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426075);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282881);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282881);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282881" onclick="deleteManagerReviewAjaxCall(282881)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>10:09</td><td>Medication Alert</td><td>Harold Letts</td><td>Bolakale Oshinowo</td><td>Personal care am</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426076);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282880);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282880);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282880" onclick="deleteManagerReviewAjaxCall(282880)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>09:47</td><td>Medication Alert</td><td>Maurice Wiggins </td><td>Sandria Brown</td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(425910);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282879);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282879);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282879" onclick="deleteManagerReviewAjaxCall(282879)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>08:52</td><td>Medication Alert</td><td>Maria Kane</td><td>Rosheen  Tirvasen</td><td>Personal care, Morning call visit</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(426022);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282878);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282878);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282878" onclick="deleteManagerReviewAjaxCall(282878)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>14/11/2022</td><td>21:48</td><td>Medication Alert</td><td>Jacqueline Butcher</td><td>Celine  Brown</td><td>Personal care, Lunchtime call visit</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(425881);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282877);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282877);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282877" onclick="deleteManagerReviewAjaxCall(282877)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>14/11/2022</td><td>21:09</td><td>Medication Alert</td><td>Margaret Webb</td><td>Rhotecia Monroe Carvalho</td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(425693);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282876);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282876);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282876" onclick="deleteManagerReviewAjaxCall(282876)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>14/11/2022</td><td>19:47</td><td>Flagged by Carer</td><td>Appleton Geoffrey</td><td>Mayurbhai Parekh</td><td>Absence Recorded</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(425814);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282875);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282875);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282875" onclick="deleteManagerReviewAjaxCall(282875)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>14/11/2022</td><td>19:26</td><td>Flagged by Carer</td><td>Raymond Baker</td><td>Judith Williams</td><td>Absence Recorded</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(425783);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282874);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282874);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282874" onclick="deleteManagerReviewAjaxCall(282874)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>14/11/2022</td><td>17:49</td><td>Medication Alert</td><td>Lalithamma Chandrakala</td><td>Sandra  Lloyd</td><td>Medication Prompt</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewTaskDetails(425690);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-flag-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Flag this record" onclick="setManagerReviewFlag(282873);"></span>&nbsp;&nbsp;<span class="manageIcons2 fa fa-commenting-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add review notes" onclick="viewManagerReviewNotes(282873);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId282873" onclick="deleteManagerReviewAjaxCall(282873)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr></tbody>
                                </table>
                            </div>





                            <!-- action Issue : Start -->
                            <div id="actionIssueTab" class="tab-pane cont dashboardPanel active">
                                <div class="">
                                    <div id="actionIssuesSuccess" class="col-xs-12" style="display: none;">
                                        <div class="alert alert-success">
                                            <strong> <i class="ace-icon fa fa-thumbs-up"></i>
                                            </strong>
                                            Action issue deleted successfully.
                                            <br>
                                        </div>
                                    </div>
                                    <div id="actionIssuesFailure" class="col-xs-12" style="display: none;">
                                        <div class="alert alert-danger">
                                            <strong> <i class="ace-icon fa fa-thumbs-down"></i>
                                            </strong><span></span>
                                        </div>
                                    </div>
                                    <div class="dashboardDataTableContainer">




                                        <div id="actionIssueTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row am-datatable-body"><div class="col-sm-12"><table id="actionIssueTable" class="table table-striped table-hover table-fw-widget dataTable no-footer" role="grid" aria-describedby="actionIssueTable_info">
                                                        <caption></caption>
                                                        <thead>
                                                        <tr role="row"><th style="width: 20%;" id="1" class="sorting_disabled" rowspan="1" colspan="1" aria-label=" Date



				"><span id="dataPickerheader" class="thHeader dataPickerheader"> Date<em class="fa fa-filter pull-right"></em></span>
                                                                <div id="dataRangePickerParentDiv" class="input-group datetimepickers thInput dataRangePickerParentDiv" style="display: none;">
                                                                    <input type="hidden" id="action-issue-start-date" value="">
                                                                    <input type="hidden" id="action-issue-end-date" value=""> <input class="form-control date-picker thInput" placeholder="Select Date" name="action-issue-date" id="action-issue-date" type="text"> <span class="input-group-addon btn btn-primary"><em class="icon-th s7-date"></em></span>
                                                                </div></th><th id="2" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Time">Time</th><th id="3" style="width: 15%" class="sorting_disabled" rowspan="1" colspan="1" aria-label=" Alert Reason


						Missed/Late Action

			"><span class="thHeader"> Alert Reason<em class="fa fa-filter pull-right"></em>
			</span> <select multiple="" id="actionIssueReasons" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">

                                                                    <option value="4">Missed/Late Action</option>

                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%; display: none;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></th><th id="4" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				Service User


				">
				<span class="thHeader">Service User
					<em class="fa fa-filter pull-right"></em>
				</span>
                                                                <input type="text" class="input-md margin0 width100 thInput" style="display: none;" placeholder="Service User" name="actionIssueServiceUser" id="actionIssueServiceUser" value=""></th><th id="5" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				Employee
			">
                                                                Employee
                                                            </th><th id="6" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th><th style="width: 8%" id="10" class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th></tr>
                                                        </thead>
                                                        <tbody>

                                                        <tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Felecia  Amoye</td><td>Kelish Hamlet</td><td>Personal care PM</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489198);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116480" onclick="deleteActionIssueAjaxCall(116480)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Magdalene Thomas</td><td>Sabrina  Haslam</td><td>Personal care PM</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489315);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116481" onclick="deleteActionIssueAjaxCall(116481)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Omana Gurudasan</td><td>Estelle Smith</td><td>Personal care PM</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489605);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116482" onclick="deleteActionIssueAjaxCall(116482)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Brenda King</td><td>Lolalyn Headley</td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489528);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116483" onclick="deleteActionIssueAjaxCall(116483)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Carol Wilson</td><td>Estelle Smith</td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489515);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116484" onclick="deleteActionIssueAjaxCall(116484)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Adam Davies</td><td>Rohan Gordon</td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489465);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116485" onclick="deleteActionIssueAjaxCall(116485)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Omah  Jolly</td><td>Traceyann lemon </td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489486);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116486" onclick="deleteActionIssueAjaxCall(116486)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Eileen Mckenzie</td><td>Noriko Henry</td><td>Personal care bed</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489551);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116487" onclick="deleteActionIssueAjaxCall(116487)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>David Easley</td><td>Noriko Henry</td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489507);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116488" onclick="deleteActionIssueAjaxCall(116488)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Farizah Fakira</td><td>Gloria Davis</td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489740);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116489" onclick="deleteActionIssueAjaxCall(116489)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Magaret Foster</td><td>Nadine Grant</td><td>Personal care Bed call </td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489774);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116490" onclick="deleteActionIssueAjaxCall(116490)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Michael  Mauri</td><td>Nadine Grant</td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489656);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116491" onclick="deleteActionIssueAjaxCall(116491)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Richard  Paynter </td><td>Nichelle Lammie</td><td>Personal Care - PM </td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489685);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116492" onclick="deleteActionIssueAjaxCall(116492)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Samuel  Gyarteng </td><td>Mark Franklin</td><td>Personal care - Bed</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489778);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116493" onclick="deleteActionIssueAjaxCall(116493)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Vivian  Adams</td><td>Tedicia  Walker</td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489719);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116494" onclick="deleteActionIssueAjaxCall(116494)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Olayinka Yemi-Tijanee</td><td>Ingrid  Bailey</td><td>Personal care Bed call</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489733);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116495" onclick="deleteActionIssueAjaxCall(116495)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Zofia  Glowacka</td><td>Stacy Ann Archibald</td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489697);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116496" onclick="deleteActionIssueAjaxCall(116496)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Algena John</td><td>Ingrid  Bailey</td><td>Personal care bed call </td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489808);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116497" onclick="deleteActionIssueAjaxCall(116497)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Martha Judycka</td><td>Delores  Thompson</td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489956);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116498" onclick="deleteActionIssueAjaxCall(116498)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Carol Shaw </td><td>Nadine Grant</td><td>Personal Care Bed call</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489837);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116499" onclick="deleteActionIssueAjaxCall(116499)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Adetokunbo Adeleye</td><td>Edward Mensah</td><td>Personal care Pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489829);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116500" onclick="deleteActionIssueAjaxCall(116500)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Kamila  Babasiak </td><td>Stacy Ann Archibald</td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489811);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116501" onclick="deleteActionIssueAjaxCall(116501)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Jennifer Esmine Bennett</td><td>Alicia  Anderson </td><td>Personal Care Bed</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489962);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116502" onclick="deleteActionIssueAjaxCall(116502)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Anthony Morris</td><td>Nichelle Lammie</td><td>Personal care PM</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489501);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116503" onclick="deleteActionIssueAjaxCall(116503)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td>Missed/Late Action</td><td>Vida Worrell </td><td>Stacy Ann Archibald</td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewDomTaskDetails(489682);"></span>&nbsp;&nbsp;<span class="manageIcons2 s7-trash md-trigger deleteManagerAlert" id="deleteId116504" onclick="deleteActionIssueAjaxCall(116504)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove this record"></span></td></tr></tbody>
                                                    </table></div></div><div class="row am-datatable-footer"><div class="col-sm-5"><div class="dataTables_info" id="actionIssueTable_info" role="status" aria-live="polite">Showing 1 to 25 of 9,106 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="actionIssueTable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="actionIssueTable_previous"><a href="#" aria-controls="actionIssueTable" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="actionIssueTable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="actionIssueTable" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="actionIssueTable" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="actionIssueTable" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="actionIssueTable" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button disabled" id="actionIssueTable_ellipsis"><a href="#" aria-controls="actionIssueTable" data-dt-idx="6" tabindex="0">…</a></li><li class="paginate_button "><a href="#" aria-controls="actionIssueTable" data-dt-idx="7" tabindex="0">365</a></li><li class="paginate_button next" id="actionIssueTable_next"><a href="#" aria-controls="actionIssueTable" data-dt-idx="8" tabindex="0">Next</a></li></ul></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- action Issue : End -->

                            <div id="actionTab" class="tab-pane cont dashboardPanel">
                                <div class="">
                                    <div id="taskSuccess" class="col-xs-12" style="display: none;">
                                        <div class="alert alert-success">
                                            <strong> <i class="ace-icon fa fa-thumbs-up"></i>
                                            </strong><span></span>
                                        </div>
                                    </div>
                                    <div id="carePlanActionSuccess" class="col-xs-12 hide">
                                        <div class="alert alert-success">
                                            <strong> Success:&nbsp;
                                            </strong>
                                            Care plan action successfully updated.
                                            <br>
                                        </div>
                                    </div>
                                    <div id="carePlanFailure" class="alert alert-danger" style="display: none;">
                                        <strong> <i class="ace-icon fa fa-thumbs-down"></i>
                                        </strong><span></span>
                                    </div>
                                    <div class="dashboardDataTableContainer">




                                        <div id="overdueTaskTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row am-datatable-body"><div class="col-sm-12"><table id="overdueTaskTable" class="table table-striped table-hover table-fw-widget dataTable no-footer" role="grid" aria-describedby="overdueTaskTable_info">
                                                        <thead>
                                                        <tr role="row"><th style="width: 20%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
					Date




				"><span id="dataPickerheader" class="thHeader dataPickerheader">
					Date<i class="fa fa-filter pull-right"></i>
			</span>
                                                                <div id="dataRangePickerParentDiv" class="input-group datetimepickers thInput dataRangePickerParentDiv" style="display: none;">
                                                                    <input type="hidden" id="task-start-date" value="">
                                                                    <input type="hidden" id="task-end-date" value=""> <input class="form-control date-picker thInput" placeholder="Select Date" name="task-date" id="task-date" type="text"> <span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                                                                </div></th><th style="width: 5%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Time">Time</th><th style="width: 10%" class="sorting_disabled" rowspan="1" colspan="1" aria-label=" Status


						Completed
						Critical Alert
						Outstanding
						Pending

							Cancelled
							Started

					×Critical Alert×Outstanding
			"><span class="thHeader" id="statusHeader"> Status<i class="fa fa-filter pull-right"></i>
			</span>
                                                                <select multiple="" id="status" class="form-control tags select2-hidden-accessible" style="display: none;" tabindex="-1" aria-hidden="true">
                                                                    <option value="Completed">Completed</option>
                                                                    <option value="Critical Alert" selected="selected">Critical Alert</option>
                                                                    <option value="Outstanding" selected="selected">Outstanding</option>
                                                                    <option value="Pending">Pending</option>

                                                                    <option value="Cancelled">Cancelled</option>
                                                                    <option value="Started">Started</option>

                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%; display: none;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Critical Alert"><span class="select2-selection__choice__remove" role="presentation">×</span>Critical Alert</li><li class="select2-selection__choice" title="Outstanding"><span class="select2-selection__choice__remove" role="presentation">×</span>Outstanding</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </th><th style="width: 15%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				Service User

			">
                                                                <span class="thHeader">Service User<i class="fa fa-filter pull-right"></i></span>
                                                                <input type="text" class="input-md margin0 width100 thInput" style="display:none;" placeholder="Service User name" name="id-name" id="id-name" value="">
                                                            </th><th style="width: 15%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				Employee Name

			">
                                                                <span class="thHeader">Employee Name<i class="fa fa-filter pull-right"></i></span>
                                                                <input type="text" class="input-md margin0 width100 thInput" style="display:none;" placeholder="Employee Name" name="carer-name" id="carer-name" value="">
                                                            </th><th style="width: 20%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				Action Name
			">
                                                                Action Name
                                                            </th><th style="width: 10%" class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th></tr>
                                                        </thead>
                                                        <tbody>

                                                        <tr role="row" class="odd"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Mansour Safary</td><td></td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489963, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Purshottam Patel</td><td></td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489810, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Aurora Ogendengbe</td><td></td><td>Personal care bed</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489609, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Audrey Miles</td><td></td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(492012, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Maureen Wright</td><td></td><td>Personal Care </td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489585, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Adam Davies</td><td></td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489465, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Malcolm Hawker</td><td></td><td>Personal care bed</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489453, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Linda Child</td><td></td><td>Personal care PM</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489362, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Sheila Reynolds</td><td></td><td>Personal care bed</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489319, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>William Smith</td><td></td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489297, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Alice Barclay</td><td></td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489218, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:30</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Jean Branganza</td><td></td><td>Personal care PM</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489130, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:16</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>David MacSweeney</td><td></td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489891, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Richard  Paynter </td><td></td><td>Personal Care - PM </td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489685, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Vida Worrell </td><td></td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489682, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Michael  Mauri</td><td></td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489656, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Francis Ruscillo</td><td></td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489623, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Omana Gurudasan</td><td></td><td>Personal care PM</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489605, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Eileen Mckenzie</td><td></td><td>Personal care bed</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489551, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Penny Doyle</td><td></td><td>Bed Run PM</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(473121, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Brenda King</td><td></td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489528, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Carol Wilson</td><td></td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489515, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>David Easley</td><td></td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489507, null, null);"></span></td></tr><tr role="row" class="even"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>Sharon Redford</td><td></td><td>Personal care</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(489506, null, null);"></span></td></tr><tr role="row" class="odd"><td>15/11/2022</td><td>19:00</td><td><label style="background:#ffc870;color:white;border-radius: 44px; padding-left: 10px; padding-right: 10px;width: 120px;text-align: center;">Outstanding</label></td><td>John  Kabuuza</td><td></td><td>Personal care pm</td><td>&nbsp;&nbsp;<span class="manageIcons2 s7-look md-trigger" data-modal="md-task" data-toggle="tooltip" data-placement="bottom" title="View this Care Action" data-original-title="View this Care Action" onclick="getResidentTaskDetails(492026, null, null);"></span></td></tr></tbody>
                                                    </table></div></div><div class="row am-datatable-footer"><div class="col-sm-5"><div class="dataTables_info" id="overdueTaskTable_info" role="status" aria-live="polite">Showing 1 to 25 of 14,342 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="overdueTaskTable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="overdueTaskTable_previous"><a href="#" aria-controls="overdueTaskTable" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="overdueTaskTable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="overdueTaskTable" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="overdueTaskTable" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="overdueTaskTable" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="overdueTaskTable" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button disabled" id="overdueTaskTable_ellipsis"><a href="#" aria-controls="overdueTaskTable" data-dt-idx="6" tabindex="0">…</a></li><li class="paginate_button "><a href="#" aria-controls="overdueTaskTable" data-dt-idx="7" tabindex="0">574</a></li><li class="paginate_button next" id="overdueTaskTable_next"><a href="#" aria-controls="overdueTaskTable" data-dt-idx="8" tabindex="0">Next</a></li></ul></div></div></div></div>
                                    </div>
                                </div>
                            </div>

                            <div id="carePlanTab" class="tab-pane cont dashboardPanel">
                                <div class="dashboardAlertContainer">




                                    <div id="carePlanTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row am-datatable-body"><div class="col-sm-12"><table id="carePlanTable" class="table table-striped table-hover table-fw-widget dataTable no-footer" role="grid" aria-describedby="carePlanTable_info">
                                                    <thead>
                                                    <tr role="row"><th style="width: 25%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
					Date




				"><span id="dataPickerheader" class="thHeader dataPickerheader">
					Date<i class="fa fa-filter pull-right"></i>
			</span>
                                                            <div id="dataRangePickerParentDiv" class="input-group datetimepickers thInput dataRangePickerParentDiv" style="display: none;">
                                                                <input type="hidden" id="start-date" value="16/05/2022">
                                                                <input type="hidden" id="end-date" value="16/11/2022"> <input class="form-control date-picker thInput" placeholder="Select Date" name="date" id="date" type="text"> <span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                                                            </div></th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				Service User
			">
                                                            Service User
                                                        </th><th width="" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				Care Plan
			">
                                                            Care Plan
                                                        </th><th width="" class="sorting_disabled" rowspan="1" colspan="1" aria-label="
				Action
			">
                                                            Action
                                                        </th></tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr class="highlight odd" role="row"><td>11/06/2022</td><td>Danuta Rydlewska</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(17850);"></span></td></tr><tr class="highlight even" role="row"><td>11/06/2022</td><td>Eileen Darch</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(17871);"></span></td></tr><tr class="highlight odd" role="row"><td>09/07/2022</td><td>Kathleen  Fox</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(18312);"></span></td></tr><tr class="highlight even" role="row"><td>11/07/2022</td><td>Diana Durban</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(18333);"></span></td></tr><tr class="highlight odd" role="row"><td>16/07/2022</td><td>Nazir  begum</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(18501);"></span></td></tr><tr class="highlight even" role="row"><td>24/07/2022</td><td>Martin Wale</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(18795);"></span></td></tr><tr class="highlight odd" role="row"><td>25/07/2022</td><td>Maureen Murphy</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(15957);"></span></td></tr><tr class="highlight even" role="row"><td>30/07/2022</td><td>Phyllis Paul</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(18144);"></span></td></tr><tr class="highlight odd" role="row"><td>02/08/2022</td><td>Florence Mclean</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(1935);"></span></td></tr><tr class="highlight even" role="row"><td>02/08/2022</td><td>IRENE ELSEY</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(9986);"></span></td></tr><tr class="highlight odd" role="row"><td>10/08/2022</td><td>Trevor Rebello</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(7503);"></span></td></tr><tr class="highlight even" role="row"><td>11/08/2022</td><td>Jennifer Hull</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(3470);"></span></td></tr><tr class="highlight odd" role="row"><td>11/08/2022</td><td> Elizabeth White</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(10070);"></span></td></tr><tr class="highlight even" role="row"><td>11/08/2022</td><td>Stanley Nembhard</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(10469);"></span></td></tr><tr class="highlight odd" role="row"><td>12/08/2022</td><td>Maria  Fitzpatrick</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(15978);"></span></td></tr><tr class="highlight even" role="row"><td>13/08/2022</td><td>Norma Mundy</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(13792);"></span></td></tr><tr class="highlight odd" role="row"><td>31/08/2022</td><td>Antonia Conteh</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(16104);"></span></td></tr><tr class="highlight even" role="row"><td>03/09/2022</td><td>Jah  Tummings</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(2672);"></span></td></tr><tr class="highlight odd" role="row"><td>04/09/2022</td><td>Vishnusundaram  Krishnamenon</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(21168);"></span></td></tr><tr class="highlight even" role="row"><td>07/09/2022</td><td>Jacob  Lee</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(20433);"></span></td></tr><tr class="highlight odd" role="row"><td>19/09/2022</td><td>Eveline  Gibbings</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(19572);"></span></td></tr><tr class="highlight even" role="row"><td>22/09/2022</td><td>Janet  Seymour </td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(19089);"></span></td></tr><tr class="highlight odd" role="row"><td>28/09/2022</td><td>Jonathan Picton Leiper</td><td>Eating and Drinking</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(20279);"></span></td></tr><tr class="highlight even" role="row"><td>01/10/2022</td><td>Moises  Magalhaes</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(21063);"></span></td></tr><tr class="highlight odd" role="row"><td>08/10/2022</td><td>Celia Coleman</td><td>Home Care Plan</td><td><span class="manageIcons2 s7-look md-trigger" data-modal="md-extraContact" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View archived action" onclick="viewCarePlanDetails(7650);"></span></td></tr></tbody>
                                                </table></div></div><div class="row am-datatable-footer"><div class="col-sm-5"><div class="dataTables_info" id="carePlanTable_info" role="status" aria-live="polite">Showing 1 to 25 of 58 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="carePlanTable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="carePlanTable_previous"><a href="#" aria-controls="carePlanTable" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="carePlanTable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="carePlanTable" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="carePlanTable" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button next" id="carePlanTable_next"><a href="#" aria-controls="carePlanTable" data-dt-idx="4" tabindex="0">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>

                            <div id="handoverTab" class="tab-pane cont dashboardPanel">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span class="showFilter md-trigger linkText col-xs-12 form-group">Show Filter</span>
                                        <span class="hideFilter md-trigger linkText col-xs-12 form-group" style="display:none;">Hide Filter</span>
                                    </div>
                                </div>
                                <div class="row filterParentDiv" style="display:none;">
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 handoverDiv form-group">
                                        <label class="col-sm-4 control-label">Select Date</label>
                                        <div class="col-sm-8 mb20">
                                            <div id="hrDataRangePickerParentDiv" class="input-group datetimepickers thInput hrDataRangePickerParentDiv">
                                                <input type="hidden" id="id-hr-start-date" value="">
                                                <input type="hidden" id="id-hr-end-date" value="">
                                                <input class="form-control " placeholder="Select Date" name="id-hr-date" id="id-hr-date" type="text">
                                                <span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 handoverDiv form-group">
                                        <label class="col-sm-4 control-label">Service User Name</label>
                                        <div class="col-sm-8 mb20">
                                            <div id="hrResidentNameSearchParentDiv" class="input-group">
                                                <input size="16" value="" class="form-control hrResidentNameSearch searchField" type="text" placeholder="Service User Name">
                                                <input type="hidden" class="hrResidentId" value="">
                                                <input type="hidden" class="hrResidentGuid" value="">
                                                <span class="input-group-addon btn btn-primary">
					<i class="icon-th s7-search"></i>
				</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 handoverDiv form-group userNameParentSearchDiv">
                                        <label class="col-sm-4 control-label ">User Name</label>
                                        <div class="col-sm-8 mb20">
                                            <div id="userNameSearchParentDiv" class="input-group">
                                                <input size="16" value="" type="text" class="form-control hrUserNameSearch searchField" placeholder="User Name">
                                                <input type="hidden" class="hrUserId" value="">
                                                <span class="input-group-addon btn btn-primary">
					<i class="icon-th s7-search"></i>
				</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 pull-right text-right">
                                        <button type="button" class="btn btn-space btn-default" onclick="clearFilter()">
                                            <i class="icon icon-left s7-close"></i>
                                            Clear Filter
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 handoverSortBtn handoverOrderSwitch">
                                        <label class="col-sm-4 control-label"> Sort report by
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="am-radio inline">
                                                <input type="radio" checked="" name="handoverDefaultSortBy" id="sortByResidentName" value="1">
                                                <label for="sortByResidentName">Service User Name</label>
                                            </div>
                                            <div class="am-radio inline">
                                                <input type="radio" name="handoverDefaultSortBy" id="sortByTime" value="0">
                                                <label for="sortByTime">Time</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="user-profile">
                                    <div id="dashboardHandoverReportContainer" class="info-block dashboardHandoverReportContainer" style="padding: 0px 24px 20px 24px;margin-bottom: 20px;">






                                        <span class="description no-bottom-border"></span>



                                        <span class="notesDate blue-theme-color font-weight-600"> Azariah Davies

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">18:04 - Comms Notes</span> - Mayurbhai
				Parekh</span>

                                        <span class="new-color-added">allocation  office - Daughter Jennifer contacted office and inform her father admitted hospital from last night.</span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600"> Azariah Davies

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">17:18</span> - Mayurbhai
				Parekh</span>

                                        <span class="new-color-added">Absence recorded -Hospital Visit</span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Adam Davies

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">09:26 - Personal care</span> - Gracia
				Evans</span>

                                        <span class="new-color-added"><b>Gracia Evans: </b>We entered client home and greet him and his wife we use the Sarah steady to take him to the toilet to do toileting we waited until he was finished then gave him a wash dry him cream him and got him dressed and left him comfortable in his chair </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Adetokunbo Adeleye

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">13:35 - Personal care AM</span> - Edward
				Mensah</span>

                                        <span class="new-color-added">Met client and he was okay open door for me clean kitchen bathroom wash up dishes mop floor make some thing to eat tidy up area leave him okay </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Afagh  (DiDi) Khaknegar - Moghaddam

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">11:59 - Personal care - AM</span> - Richelle
				Lawrence</span>

                                        <span class="new-color-added">client had presonal care and leave ok.</span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Afagh  (DiDi) Khaknegar - Moghaddam

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">18:04 - Personal care - PM</span> - Richelle
				Lawrence</span>

                                        <span class="new-color-added">client had dinner and medication ans i tidy up after.</span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Afzal Abidi

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">17:43 - Personal care</span> - Erica
				Daley</span>

                                        <span class="new-color-added">Arrive at service user prepare dinner gave work leave client comfortable .</span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Afzal Abidi

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">09:05 - Personal care</span> - Erica
				Daley</span>

                                        <span class="new-color-added">Arrive at service user personal care given, prepare breakfast tidy work area, gave medication leave client comfortable </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Afzal Abidi

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">12:32 - Personal care</span> - Erica
				Daley</span>

                                        <span class="new-color-added">Arrive at service user prepare lunch tidy work area leave client comfortable </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Alan Baker

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">13:10 - Personal care AM</span> - Mark
				Franklin</span>

                                        <span class="new-color-added">done </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Alayne Churchill

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">17:01 - Personal care</span> - Erica
				Daley</span>

                                        <span class="new-color-added">Arrive at service user prepare dinner tidy work area leave client comfortable </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Alayne Churchill

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">19:07 - Personal care</span> - Erica
				Daley</span>

                                        <span class="new-color-added">Arrive at service user client doing okay,sit chat leave client comfortable </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Alayne Churchill

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">13:01 - Personal care</span> - Erica
				Daley</span>

                                        <span class="new-color-added">Arrive at service user prepare lunch tidy work area leave client comfortable </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Alayne Churchill

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">07:45 - Personal care</span> - Erica
				Daley</span>

                                        <span class="new-color-added">Task done </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Algena John

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">13:37</span> - Tedicia
				Walker</span>

                                        <span class="new-color-added"><b>Tedicia  Walker: </b>Arrived met client she was doing fine greeted changed pad ointment on bottom changed bed linen made hot drink tidy work area client son prepared lunch left client comfortable </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Algena John

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">18:36 - Personal care lunch visit </span> - Ingrid
				Bailey</span>

                                        <span class="new-color-added"><b>Tedicia  Walker: </b>Arrived met client she was doing fine greeted changed pad ointment on bottom changed bed linen made hot drink tidy work area client son prepared lunch left client comfortable <br><b>Ingrid  Bailey: </b>Met client in bed she was good. Chack and change pad also apply cream give hot drink and left comfortable. Bed </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Algena John

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">15:35 - Personal Care tea call </span> - Tedicia
				Walker</span>

                                        <span class="new-color-added"><b>Tedicia  Walker: </b>Arrived met client she was doing fine greeted changed pad bowel open ointment on bottom client son prepared meal tidy work area left client comfortable gave medication </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Algena John

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">10:34 - Personal Care am visit </span> - Ingrid
				Bailey</span>

                                        <span class="new-color-added"><b>Tedicia  Walker: </b>Arrived met client she was doing fine greeted assisted with personal care full body wipe brush teeth and denture dry cream ointment on bottom clean pad dressed spread bed gave medication prepared cereal and hot drink for breakfast left water on client table left client comfortable in bed <br><b>Ingrid  Bailey: </b>Met client in bed she was good. Give strip wash clothes change also pad apply body cream mouth care make breakfast and tidy up empty bin prumpt medication glass of water left ok with hot drink comfortable. </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Andrew Duncan

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">12:28 - Personal care</span> - Ingrid
				Bailey</span>

                                        <span class="new-color-added">Met client in bed room. I support her with microwave lunch and hot drink left okay in chair. </span>




                                        <span class="description"></span>



                                        <span class="notesDate blue-theme-color font-weight-600">Andrew Duncan

				</span>
                                        <span class="light-grey"><span class="font-weight-600 grey">10:34 - Personal Care </span> - Ingrid
				Bailey</span>

                                        <span class="new-color-added">Met client in bed room. I support him with shower Change clothes also pad make breakfast prumpt medication glass of water left comfortable in chair .</span>




                                        <span class="description"></span>



                                        <div class="actions actiononend">
                                            <button type="button" class="btn btn-xs btn-prev btn-default" disabled=""><em class="icon s7-angle-left"></em>Previous</button>
                                            <button type="button" class="btn btn-xs btn-next btn-default">Next<em class="icon s7-angle-right"></em></button>
                                        </div></div>
                                </div>
                            </div>

                            <div id="dolsTab" class="tab-pane cont dashboardPanel ">
                                <div class="dashboardAlertContainer">




                                    <div id="dolsRequireRenewTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row am-datatable-body"><div class="col-sm-12"><table id="dolsRequireRenewTable" class="table table-striped table-hover table-fw-widget dataTable no-footer" role="grid" aria-describedby="dolsRequireRenewTable_info">
                                                    <thead>
                                                    <tr role="row"><th style="width: 25%" class="sorting_disabled" rowspan="1" colspan="1" aria-label=" Expiry Date






				"><span id="dataPickerheader" class="thHeader dataPickerheader"> Expiry Date <i class="fa fa-filter pull-right"></i>
			</span>
                                                            <div id="dolsDataRangePickerParentDiv" class="input-group datetimepickers thInput dataRangePickerParentDiv" style="display: none;">
                                                                <input type="hidden" id="dols-start-date" value="16/05/2022">
                                                                <input type="hidden" id="dols-end-date" value="16/11/2022">
                                                                <input class="form-control date-picker thInput" placeholder="Select Date" name="dols-date" id="dols-date" type="text"> <span class="input-group-addon btn btn-primary"> <i class="icon-th s7-date"></i>
					</span>
                                                            </div></th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Service User">Service User</th><th width="" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Comments">Comments</th><th width="" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action
			">Action
                                                        </th></tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">No record found.</td></tr></tbody>
                                                </table></div></div><div class="row am-datatable-footer"><div class="col-sm-5"><div class="dataTables_info" id="dolsRequireRenewTable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="dolsRequireRenewTable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="dolsRequireRenewTable_previous"><a href="#" aria-controls="dolsRequireRenewTable" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next disabled" id="dolsRequireRenewTable_next"><a href="#" aria-controls="dolsRequireRenewTable" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>


                            <div id="accidentTab" class="tab-pane cont dashboardPanel">
                                <div class="">
                                    <div id="accidentFailure" class="alert alert-danger" style="display: none;">
                                        <strong> <em class="ace-icon fa fa-thumbs-down"></em>
                                        </strong><span></span>
                                    </div>
                                    <div id="accidentSuccess" class="alert alert-success" style="display: none;">
                                        <strong> <em class="ace-icon fa fa-thumbs-up"></em> Success:&nbsp;
                                        </strong><span></span>
                                    </div>





                                    <div class="row left deleted-filter-row">
                                        <div class="col-sm-9 col-md-9 col-lg-9"></div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label class="col-sm-8 col-md-8 col-lg-8 col-xs-4 control-label show-delete-accident-lbl">Show Deleted </label>
                                                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4 show-delete-accident-switch">
                                                    <div class="switch-button switch-button-yesno" style="width: 60px !important;">
                                                        <input name="showDeleted" id="showDeleted" type="checkbox"> <span>
						<label for="showDeleted"></label>
					</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboardDataTableContainer">



                                        <table id="accidentTable" class="table table-striped table-hover table-fw-widget">
                                            <thead>
                                            <tr>
                                                <th style="width: 8%"><span class="thHeader"> Ref. No.<em class="fa fa-filter pull-right"></em>
			</span> <input type="text" class="input-md margin0 width100 thInput" style="display: none; width: 100%" placeholder="Ref. No." name="ar-ref-number" id="ar-ref-number" value="">
                                                </th>

                                                <th class="hide">Status Date</th>
                                                <th class="hide">Status</th>
                                                <th style="width: 8%"><span class="thHeader dataPickerheader">
					Date<em class="fa fa-filter pull-right"></em>
			</span>
                                                    <div class="input-group datetimepickers thInput dataRangePickerParentDiv" style="display: none; width: 250px;">
                                                        <input type="hidden" id="ar-start-date" value="15/10/2022"> <input type="hidden" id="ar-end-date" value="15/11/2022"> <input class="form-control date-picker thInput" placeholder="Select Date" name="ar-date" id="ar-date" type="text"> <span class="input-group-addon btn btn-primary"><em class="icon-th s7-date"></em></span>
                                                    </div></th>

                                                <th style="width: 4%">Time</th>


                                                <th style="width: 10%"><span class="thHeader"> Incident type<em class="fa fa-filter pull-right"></em>
			</span> <select class="input-md margin0 width100 thInput jobStatusSelect" style="display: none;" name="ar-status" id="ar-incidentType">
                                                        <option value="">Select incident type</option>

                                                        <option value="1">Incident</option>

                                                        <option value="2">Accident</option>

                                                        <option value="3">Fall</option>

                                                        <option value="4">Near Miss</option>

                                                        <option value="5">Behaviour</option>

                                                        <option value="6">Medication</option>

                                                        <option value="7">Concerns</option>

                                                        <option value="8">Safeguarding</option>

                                                    </select></th>


                                                <th style="width: 13%"><span class="thHeader"> Who involved<em class="fa fa-filter pull-right"></em>
			</span> <input type="text" class="input-md margin0 width100 thInput" style="display: none;" placeholder="Who involved" name="ar-resident-name" id="ar-resident-name" value=""></th>
                                                <th style="width: 12%"><span class="thHeader"> Status<em class="fa fa-filter pull-right"></em>
			</span> <select class="input-md margin0 width100 thInput jobStatusSelect" style="display: none;" name="ar-status" id="ar-status">
                                                        <option value="">Please Select Status</option>
                                                        <option value="all">All</option>

                                                        <option value="Reported">Reported</option>

                                                        <option value="Under Investigation">Under Investigation</option>

                                                        <option value="Review required">Review required</option>

                                                        <option value="Closed">Closed</option>

                                                    </select></th>
                                                <th style="width: 10%">Date of Review</th>
                                                <th style="width: 18%">Incident Summary</th>
                                                <th class="hide">Picture Flag</th>
                                                <th style="width: 5%">Pending Actions</th>
                                                <th style="width: 12%"></th>
                                            </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



                            <div id="familyTab" class="tab-pane cont dashboardPanel">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="tab-container sub-tab-panel">
                                            <ul class="nav nav-tabs sub-navigation-tab">
                                                <li class="active"><a href="#familyShareTab" data-toggle="tab" onclick="fetchTabDetails(familyShareTab);">Family Share</a>
                                                </li>
                                                <li class="border-left-tab"><a href="#inwardTab" data-toggle="tab" onclick="fetchTabDetails(inwardTab);">Inward</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="familyShareTab" class="tab-pane cont dashboardPanel active">
                                                    <div>
                                                        <div id="familyShareSuccess" class="col-sm-12" style="display: none;">
                                                            <div class="alert alert-success">
                                                                <strong> <em class="fa fa-thumbs-up"></em> Success:
                                                                </strong><span></span>
                                                            </div>
                                                        </div>
                                                        <div id="familyShareFailure" class="col-sm-12" style="display: none;">
                                                            <div class="alert alert-danger">
                                                                <strong> <em class="fa fa-thumbs-down"></em>
                                                                </strong><span></span>
                                                            </div>
                                                        </div>
                                                        <div class="dashboardDataTableContainer">
                                                            <div class="row mb20">
                                                                <small> <span class="fauxLink md-trigger" id="addSharingNote" data-modal="md-consent"> Add a Sharing Note
														</span>
                                                                </small>
                                                            </div>




                                                            <table id="familyShareTable" class="table table-striped table-hover table-fw-widget" aria-describedby="familyShare">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col" class="hide">ID</th>
                                                                    <th scope="col" style="width: 12%">
				<span class="thHeader dataPickerheader">
					Date<em class="fa fa-filter pull-right"></em>
				</span>
                                                                        <div class="input-group datetimepickers thInput dataRangePickerParentDiv" style="display: none;width: 250px;">
                                                                            <input type="hidden" id="fs-start-date">
                                                                            <input type="hidden" id="fs-end-date">
                                                                            <input class="form-control date-picker thInput" placeholder="Select Date" name="fs-date" id="fs-date" type="text"> <span class="input-group-addon btn btn-primary"><em class="icon-th s7-date"></em></span>
                                                                        </div>
                                                                    </th>
                                                                    <th scope="col" style="width: 5%">Time</th>
                                                                    <th scope="col" style="width: 18%">
				<span class="thHeader">
					Service User<em class="fa fa-filter pull-right"></em>
				</span>
                                                                        <input type="text" class="input-md margin0 width100 thInput" style="display: none;" placeholder="Service User" name="fs-resident-name" id="fs-resident-name">
                                                                    </th>
                                                                    <th scope="col" style="width: 18%">Shared By (carer)</th>
                                                                    <th scope="col" style="width: 10%">
				<span class="thHeader">
					Status<em class="fa fa-filter pull-right"></em>
				</span>
                                                                        <select name="fs-status" id="fs-status" class="form-control input-sm thInput" style="display: none;">
                                                                            <option value="">All</option>

                                                                            <option value="Pending" selected="">Pending</option>

                                                                            <option value="Approve">Approve</option>

                                                                            <option value="Reject">Reject</option>

                                                                        </select>
                                                                    </th>
                                                                    <th scope="col" style="width: 25%">Summary</th>
                                                                    <th scope="col" class="hide">ID</th>
                                                                    <th scope="col" style="width: 15%">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody></tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="inwardTab" class="tab-pane cont dashboardPanel">
                                                    <div class="row">
                                                        <div id="residentPictureSuccess" class="col-sm-12" style="display: none;">
                                                            <div class="alert alert-success">
                                                                <strong> <em class="fa fa-thumbs-up"></em> Success:
                                                                </strong><span></span>
                                                            </div>
                                                        </div>
                                                        <div id="residentPictureFailure" class="col-sm-12" style="display: none;">
                                                            <div class="alert alert-danger">
                                                                <strong> <em class="fa fa-thumbs-down"></em>
                                                                </strong><span></span>
                                                            </div>
                                                        </div>




                                                        <table id="inwardTable" class="table table-striped table-hover table-fw-widget">
                                                            <thead>
                                                            <tr>
                                                                <th class="hide">ID</th>
                                                                <th style="width: 10%">
				<span class="thHeader dataPickerheader">
					Date<em class="fa fa-filter pull-right"></em>
				</span>
                                                                    <div class="input-group datetimepickers thInput dataRangePickerParentDiv" style="display: none;width: 250px;">
                                                                        <input type="hidden" id="inward-start-date">
                                                                        <input type="hidden" id="inward-end-date">
                                                                        <input class="form-control date-picker thInput" placeholder="Select Date" name="fs-date" id="inward-date" type="text"> <span class="input-group-addon btn btn-primary"><em class="icon-th s7-date"></em></span>
                                                                    </div>
                                                                </th>
                                                                <th style="width: 5%">Time</th>
                                                                <th style="width: 15%">
				<span class="thHeader">
					Service User<em class="fa fa-filter pull-right"></em>
				</span>
                                                                    <input type="text" class="input-md margin0 width100 thInput" style="display: none;" placeholder="Service User" name="inward-resident-name" id="inward-resident-name">
                                                                </th>
                                                                <th style="width: 15%">Shared By (family)</th>
                                                                <th style="width: 8%">
				<span class="thHeader">
					Status<i class="fa fa-filter pull-right"></i>
				</span>
                                                                    <select name="inward-status" id="inward-status" class="form-control input-sm thInput" style="display: none;">
                                                                        <option value="">All</option>

                                                                        <option value="Pending" selected="">Pending</option>

                                                                        <option value="Approve">Approve</option>

                                                                        <option value="Reject">Reject</option>

                                                                    </select>
                                                                </th>
                                                                <th style="width: 15%">Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="obsWeightChartTab" class="tab-pane cont dashboardPanel">
                                <div class="col-md-12">
                                    <span class="residentCpSummary botCharticon icons s7-print" onclick="obsChartPrint('obsWeightChartTab');"></span>
                                </div>
                                <div class="row">
                                    <label class="col-md-12"> Service User Weight Chart <span class="bot-chart-date">15/11/2022</span>
                                    </label>
                                </div>
                                <div id="weightChartParentDiv" class="row"></div>
                            </div>
                            <div id="obsFluidChartTab" class="tab-pane cont dashboardPanel">
                                <div class="col-md-12">
                                    <span class="residentCpSummary botCharticon icons s7-print" onclick="obsChartPrint('obsFluidChartTab');"></span>
                                </div>
                                <div class="row">
                                    <label class="col-md-12"> Service User Fluid Chart <span class="bot-chart-date">15/11/2022</span>
                                    </label>
                                </div>
                                <div id="fluidChartParentDiv" class="row"></div>
                            </div>
                            <div id="obsTempChartTab" class="tab-pane cont dashboardPanel">
                                <div class="col-md-12">
                                    <span class="residentCpSummary botCharticon icons s7-print" onclick="obsChartPrint('obsTempChartTab');"></span>
                                </div>
                                <div class="row">
                                    <label class="col-md-12"> Service User Temp &amp; SATS Chart  <span class="bot-chart-date">15/11/2022 19:34</span>
                                    </label>
                                </div>
                                <div id="tempChartParentDiv" class="row"></div>
                            </div>

                            <div id="obsBowelChartTab" class="tab-pane cont dashboardPanel">
                                <div class="col-md-12">
                                    <span class="residentCpSummary botCharticon icons s7-print" onclick="obsChartPrint('obsBowelChartTab');"></span>
                                </div>
                                <div class="row">
                                    <label class="col-md-12"> Bowel Chart <span class="bot-chart-date">15/11/2022</span>
                                    </label>
                                </div>
                                <div id="bowelChartParentDiv" class="row"></div>
                            </div>
                            <div id="physicalInterventionChartTab" class="tab-pane cont dashboardPanel">
                                <div class="col-md-12">
                                    <label> Physical Interventions <span class="bot-chart-date">15/11/2022</span>
                                    </label>
                                    <span class="residentCpSummary botCharticon icons s7-print" onclick="obsPhysicalInterventionPrint('printInterventionChart');"></span>
                                </div>
                                <div class="dashboardAlertContainer">





                                    <table id="physicalInterventionDataTable" class="table table-striped table-hover table-fw-widget" aria-describedby="physicalInterventionTable">
                                        <thead>
                                        <tr>
                                            <th class="hide" scope="col">ID</th>
                                            <!-- resident Name -->
                                            <th class="col-md-2" scope="col"><span id="residentName" class="thHeader "> Service User Name <em class="fa fa-filter pull-right"></em>
			</span> <input type="text" class="form-control input-sm margin0 width100 thInput" style="display: none;" placeholder="Service User" name="serviceUserPhysicalIntervation" id="serviceUserPhysicalIntervation" value=""></th>
                                            <!-- Date time -->
                                            <th scope="col" class="col-md-2">Date/Time <span class="thHeader dataPickerheader"> <em class="fa fa-filter pull-right"></em>
			</span>
                                                <div class="input-group filterdatetimepickers thInput dataRangePickerParentDiv" style="display: none; width: 250px;">
                                                    <input type="hidden" id="interv-event-start-date" value=""> <input type="hidden" id="interv-event-end-date" value=""> <input class="form-control date-picker thInput input-sm" placeholder="Select Date" name="interv-event-date" id="interv-event-date" type="text">
                                                    <span class="input-group-addon btn btn-primary"><em class="icon-th s7-date"></em></span>
                                                </div></th>
                                            <!-- Intervention -->
                                            <th class="col-md-3" scope="col"><span id="interventionType" class="thHeader "> Physical Interventions Type <em class="fa fa-filter pull-right"></em>
			</span> <select class="form-control input-sm margin0 width100 thInput jobStatusSelect" style="display: none;" name="physicalInterventionType" id="physicalInterventionType">
                                                    <option value="">All</option>

                                                    <option value="1">Tier 1 Physical interventions
                                                        - One person low hold</option>

                                                    <option value="2">Tier 1 Physical interventions
                                                        - Two person low hold</option>

                                                    <option value="3">Tier 1 Physical interventions
                                                        - One person front forearm support</option>

                                                    <option value="4">Tier 2 Physical interventions
                                                        - Single person rear forearm support</option>

                                                    <option value="5">Tier 2 Physical interventions
                                                        - Two person Upsurge</option>

                                                    <option value="6">Tier 2 Physical interventions
                                                        - Two person Side forearm support</option>

                                                    <option value="7">Tier 3 Interventions
                                                        - Two person rear forearm support</option>

                                                    <option value="8">Tier 3 Interventions
                                                        - Two person up-surge to seated</option>

                                                    <option value="9">Tier 3 Interventions
                                                        - Two person side forearm support</option>

                                                    <option value="10">Breakaways Tier 1
                                                        - Block from punch or kick</option>

                                                    <option value="11">Breakaways Tier 1
                                                        - Breakaway from grab to arm</option>

                                                    <option value="12">Breakaways Tier 1
                                                        - Breakaway from a bite</option>

                                                    <option value="13">Breakaways Tier 1
                                                        - Stabilise from hair pull</option>

                                                    <option value="14">Breakaways Tier 2
                                                        - Head lock release</option>

                                                    <option value="15">Breakaways Tier 2
                                                        - Two handed arm grab release</option>

                                                    <option value="16">Breakaways Tier 2
                                                        - Two handed clothing grab release</option>

                                                    <option value="17">Breakaways Tier 3
                                                        - Strangles from front or rear release</option>

                                                </select></th>
                                            <!-- description -->
                                            <th class="col-md-5" scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                </div>
                                <div id="printInterventionChart" class="hide">
                                    <label> Physical Interventions <span class="bot-chart-date">15/11/2022</span>
                                    </label>
                                    <div id="physicalInterventionChartParentDiv" class="row"></div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
