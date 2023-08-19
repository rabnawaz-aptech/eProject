<?php
include 'header.php';
$id = $_GET['id'];
$q1 = "SELECT * FROM `covid_test_report` WHERE `id`='$id'";
$row1 = mysqli_query($db, $q1);
$data1 = mysqli_fetch_assoc($row1);
?>
<link rel="stylesheet" href="../SiteAssets/css/pages/details.css" />
<link rel="stylesheet" href="../SiteAssets/css/pages/patients.css" />

<div class="main-content">
    <div class="container-fluid">
        <div class="section row title-section">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="patients.html">patients</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $data1['patient_name']; ?></li>
                    </ol>
                </nav>
            </div>
            <!-- <div class="col-md-4"><button class="btn btn-dark-red-f-gr"><i class="las la-edit"></i>edit patient</button></div> -->
        </div>
        <div class="section patient-details-section">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 patients-details-card-wrapper">
                                        <div class="mini-card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Test Id</label><input class="form-control" readonly="readonly" value="<?php echo $data1['id']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Patient Name</label><input class="form-control" readonly="readonly" value="<?php echo $data1['patient_name']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>CNIC</label><input class="form-control" readonly="readonly" value="<?php echo $data1['cnic']; ?>" /></div>
                                                    </div>
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
                                                        <div class="form-group"><label>Doctor Name</label><input class="form-control" readonly="readonly" value="<?php echo $data1['doctor_name']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Doctor Id</label><input class="form-control" readonly="readonly" value="<?php echo $data1['doctor_id']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>city</label><input class="form-control" readonly="readonly" value="<?php echo $data1['city']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>hospital</label><input class="form-control" readonly="readonly" value="<?php echo $data1['hospital_name']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>hospital code</label><input class="form-control" readonly="readonly" value="<?php echo $data1['hospital_code']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Test Name</label><input class="form-control" readonly="readonly" value="<?php echo $data1['test_name']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Test Date</label><input class="form-control" readonly="readonly" value="<?php echo $data1['covid_test_date']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>appointment time</label><input class="form-control" readonly="readonly" value="<?php echo $data1['time_of_appointment']; ?>" /></div>
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

                        <footer>
                            <div class="page-footer text-center">
                                <div class="fixed-bottom shadow-sm"><a href="https://covid19.who.int" target="_blank"><img src="../SiteAssets/images/covid-19.svg" /><span>view COVID-19 info</span></a></div>
                            </div>
                        </footer>
                    </div>
                    </main>
                    </body>

                    </html>