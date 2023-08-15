<?php
include 'header.php';
$id = $_GET['id'];
$q1 = "SELECT * FROM `users` WHERE `id`='$id'";
$row1 = mysqli_query($db,$q1);
$data1 = mysqli_fetch_assoc($row1);
?>
<link rel="stylesheet" href="../SiteAssets/css/pages/details.css" />

<div class="main-content">
    <div class="container-fluid">
        <div class="section row title-section">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="patients.html">patients</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $data1['first_name'] . " " . $data1['last_name']; ?></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-4"><button class="btn btn-dark-red-f-gr"><i class="las la-edit"></i>edit patient</button></div>
        </div>
        <div class="section patient-details-section">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mini-card text-center">
                                            <div class="card-header"><img class="rounded-circle" src="<?php echo $data1['dp']; ?>"></div>
                                            <div class="card-body">
                                                <h4><?php echo $data1['first_name'] . " " . $data1['last_name']; ?></h4><small class="text-muted"><?php echo $data1['email'];?></small>
                                                <h5>age</h5>
                                                <p><?php echo $data1['age']; ?></p>
                                            </div>
                                            <div class="card-footer"><button class="btn btn-dark-red-f"><i class="las la-sms"></i>send message</button></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 patients-details-card-wrapper">
                                        <div class="mini-card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>gender</label><input class="form-control" readonly="readonly" value="<?php echo $data1['gender']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>date of birth</label><input class="form-control" readonly="readonly" value="<?php echo $data1['dob']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>phone number</label><input class="form-control" readonly="readonly" value="<?php echo $data1['phone']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>address</label><input class="form-control" readonly="readonly" value="75th, xy avenue" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>city</label><input class="form-control" readonly="readonly" value="<?php echo $data1['city']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>blood group</label><input class="form-control" readonly="readonly" value="<?php echo $data1['blood group']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>vaccine status</label><input class="form-control" readonly="readonly" value="<?php echo $data1['vaccine_status']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>covid status</label><input class="form-control" readonly="readonly" value="<?php echo $data1['covid_test_status']; ?>" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation"><a class="nav-link active" id="upcoming-appointments-tab" data-toggle="tab" href="#upcoming-appointments" role="tab" aria-controls="upcoming-appointments" aria-selected="true">upcoming appointments</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" id="past-appointments-tab" data-toggle="tab" href="#past-appointments" role="tab" aria-controls="past-appointments" aria-selected="false">past appointments</a></li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" id="medical-records-tab" data-toggle="tab" href="#medical-records" role="tab" aria-controls="medical-records" aria-selected="false">medical records</a></li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="upcoming-appointments" role="tabpanel" aria-labelledby="upcoming-appointments-tab">
                                            <div class="section-title"><button class="btn btn-dark-red-f btn-sm"><i class="las la-calendar-plus"></i>create an appointment</button></div>
                                            <div class="media">
                                                <div class="align-self-center">
                                                    <p>tue</p>
                                                    <h3>05</h3>
                                                    <p>2020</p>
                                                </div>
                                                <div class="media-body">
                                                    <div class="row"><label class="label-green-bl">consultation</label>
                                                        <p>with Dr. Jekyll</p>
                                                        <p><i class="las la-tv"></i>on zoom</p>
                                                        <p><i class="las la-clock"></i>10.30 - 11.00</p><label class="label-cream label-sm"><i class="las la-hourglass-half"></i>30 min</label><a href=""><i class="las la-ellipsis-v"></i></a>
                                                    </div>
                                                    <div class="row"><label class="label-blue-bl">root canal</label>
                                                        <p>with Dr. Jekyll</p>
                                                        <p><i class="las la-tv"></i>on zoom</p>
                                                        <p><i class="las la-clock"></i>13.30 - 14.15</p><label class="label-cream label-sm"><i class="las la-hourglass-half"></i>45 min</label><a href=""><i class="las la-ellipsis-v"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="align-self-center mr-3">
                                                    <p>wed</p>
                                                    <h3>06</h3>
                                                    <p>2020</p>
                                                </div>
                                                <div class="media-body">
                                                    <div class="row"><label class="label-orange-bl">consultation</label>
                                                        <p>with Dr. Jekyll</p>
                                                        <p><i class="las la-tv"></i>on zoom</p>
                                                        <p><i class="las la-clock"></i>10.30 - 11.00</p><label class="label-cream label-sm"><i class="las la-hourglass-half"></i>30 min</label><a href=""><i class="las la-ellipsis-v"></i></a>
                                                    </div>
                                                    <div class="row"><label class="label-pink-bl">root canal</label>
                                                        <p>with Dr. Jekyll</p>
                                                        <p><i class="las la-tv"></i>on zoom</p>
                                                        <p><i class="las la-clock"></i>13.30 - 14.15</p><label class="label-cream label-sm"><i class="las la-hourglass-half"></i>45 min</label><a href=""><i class="las la-ellipsis-v"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="past-appointments" role="tabpanel" aria-labelledby="past-appointments-tab">...</div>
                                        <div class="tab-pane fade" id="medical-records" role="tabpanel" aria-labelledby="medical-records-tab">...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card notes-card">
                        <div class="card-header">
                            <h5>notes<button class="btn btn-dark-red-f btn-sm">see all</button></h5>
                        </div>
                        <div class="card-body"><textarea class="form-control" placeholder="you can write patient notes over here" rows="6"></textarea><button class="btn btn-dark-red-f float-right btn-sm"><i class="las la-save"></i>save note</button></div>
                        <div class="card-footer">
                            <div class="float-left">
                                <p><i class="las la-user"></i>dr. jekyll</p>
                            </div>
                            <div class="float-right">
                                <p>04, may, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="card files-card">
                        <div class="card-header">
                            <h5>files<button class="btn btn-dark-red-f btn-sm"><i class="las la-file-medical"></i>add file</button></h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush"><a class="list-group-item" href="#"><i class="las la-file-excel"></i>check up results.csv<div class="float-right"><small class="text-muted">123kb</small>
                                        <div class="action-buttons no-display"><button class="btn btn-sm btn-dark-red-f"><i class="las la-trash"></i></button><button class="btn btn-sm btn-dark-red-f"><i class="las la-download"></i></button></div>
                                    </div></a><a class="list-group-item" href="#"><i class="las la-file-excel"></i>dental prescriptions.csv<div class="float-right"><small class="text-muted">3.5mb</small>
                                        <div class="action-buttons no-display"><button class="btn btn-sm btn-dark-red-f"><i class="las la-trash"></i></button><button class="btn btn-sm btn-dark-red-f"><i class="las la-download"></i></button></div>
                                    </div></a><a class="list-group-item" href="#"><i class="las la-file-pdf"></i>x-ray.pdf<div class="float-right"><small class="text-muted">2.1mb</small>
                                        <div class="action-buttons no-display"><button class="btn btn-sm btn-dark-red-f"><i class="las la-trash"></i></button><button class="btn btn-sm btn-dark-red-f"><i class="las la-download"></i></button></div>
                                    </div></a><a class="list-group-item" href="#"><i class="las la-file-word"></i>consultancy-report.word<div class="float-right"><small class="text-muted">2mb</small>
                                        <div class="action-buttons no-display"><button class="btn btn-sm btn-dark-red-f"><i class="las la-trash"></i></button><button class="btn btn-sm btn-dark-red-f"><i class="las la-download"></i></button></div>
                                    </div></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="page-footer text-center">
                <div class="fixed-bottom shadow-sm"><a href="https://covid19.who.int" target="_blank"><img src="../SiteAssets/images/covid-19.svg" /><span>view COVID-19 info</span></a></div>
            </div>
        </footer>
    </div>
    </main>
    </body>

    </html>