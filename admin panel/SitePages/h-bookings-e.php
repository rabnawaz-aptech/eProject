<?php
include 'h-header.php';
$id = $_GET['id'];
$hc = $_SESSION['hospital_code'];
$q1 = "SELECT * FROM `covid_test_report` WHERE `hospital_code`='$hc' AND `id`='$id'";
$row1 = mysqli_query($db, $q1);
$data1 = mysqli_fetch_assoc($row1);
if ($data1['covid_test_status'] == 'Positive' || $data1['covid_test_status'] == 'Negative') {
    echo "<style>.hb{display:none;}</style>";
}
?>
<link rel="stylesheet" href="../SiteAssets/css/pages/details.css" />
<link rel="stylesheet" href="../SiteAssets/css/pages/patients.css" />

<div class="main-content">
    <div class="container-fluid">
        <div class="section row title-section">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="h-bookings.php" style="color: #247cff;">bookings</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $data1['patient_name']; ?></li>
                    </ol>
                </nav>
            </div>
            <!-- <div class="col-md-4"><a href="h-vaccination-e.php?"><button class="btn btn-dark-red-f-gr hb"><i class="las la-edit"></i>edit patient</button></a></div> -->
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
                                                <form method="POST">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>Id</label><input class="form-control" name="id" readonly="readonly" value="<?php echo $data1['id']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>Patient Name</label><input class="form-control" name="fname" readonly="readonly" value="<?php echo $data1['patient_name']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>CNIC</label><input class="form-control" name="cnic" readonly="readonly" value="<?php echo $data1['cnic']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>gender</label><input class="form-control" name="gender" readonly="readonly" value="<?php echo $data1['gender']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>date of birth</label><input class="form-control" name="dob" readonly="readonly" value="<?php echo $data1['dob']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>phone number</label><input class="form-control" name="phone" readonly="readonly" value="<?php echo $data1['phone']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>Doctor Name</label>
                                                                <select class="form-control" name="vs" required>
                                                                    <?php
                                                                    $q2 = "SELECT * FROM `specialists` WHERE `hsptl_code`='$hc'";
                                                                    $row2 = mysqli_query($db, $q2);
                                                                    while ($data2 = mysqli_fetch_assoc($row2)) {
                                                                    ?>
                                                                        <option value="<?php echo $data2['first_name'] . " " . $data2['last_name']; ?>"><?php echo $data2['first_name'] . " " . $data2['last_name']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>city</label><input class="form-control" name="city" readonly="readonly" value="<?php echo $data1['city']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>hospital name</label><input class="form-control" name="hospitalname" readonly="readonly" value="<?php echo $data1['hospital_name']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>hospital code</label><input class="form-control" name="hospitalcode" readonly="readonly" value="<?php echo $data1['hospital_code']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>test Name</label><input class="form-control" name="test" readonly="readonly" value="<?php echo $data1['test_name']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>appointment Date</label><input type="date" class="form-control" name="doa" value="<?php echo $data1['covid_test_date']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>appointment time</label><input class="form-control" name="toa" value="<?php echo $data1['time_of_appointment']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>test status</label>
                                                                <!-- <input class="form-control" value="" /> -->
                                                                <select class="form-control" name="teststatus" required>
                                                                    <option value="<?php echo $data1['covid_test_status']; ?>"><?php echo $data1['covid_test_status']; ?></option>
                                                                    <option value="<?php
                                                                                    if ($data1['covid_test_status'] == 'Pending') {
                                                                                        echo 'Scheduled';
                                                                                    } elseif ($data1['covid_test_status'] == 'Scheduled') {
                                                                                        echo 'Test Done';
                                                                                    }
                                                                                    ?>"><?php
                                                                                    if ($data1['covid_test_status'] == 'Pending') {
                                                                                        echo 'Scheduled';
                                                                                    } elseif ($data1['covid_test_status'] == 'Scheduled') {
                                                                                        echo 'Test Done';
                                                                                    }
                                                                                    ?></option>
                                                                    <?php if ($data1['covid_test_status'] == 'Test Done') {
                                                                                        echo "<option value='Negative'>Negative</option>
                                                                                        <option value='Positive'>Positive</option>";
                                                                                    } elseif ($data1['covid_test_status'] == 'Scheduled') {
                                                                                        echo 'Test Done';
                                                                                    } ?>
                                                                    <!-- <option value="Vaccinated">Vaccinated</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>detailed report</label>
                                                                <input class="form-control" name="vaccinedose" readonly="readonly" value="<?php echo $data1['detailed_report']; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4"><button class="btn btn-dark-red-f-gr" name="save"><i class="las la-save"></i>Save</button></div>
                                                    </div>
                                                </form>
                                                <?php
                                                if (isset($_POST['save'])) {

                                                    $id = $_POST['id'];
                                                    $fname = $_POST['fname'];
                                                    $cnic = $_POST['cnic'];
                                                    $dob = $_POST['dob'];
                                                    $city = $_POST['city'];
                                                    $gender = $_POST['gender'];
                                                    $phone = $_POST['phone'];
                                                    $vs = $_POST['vs'];
                                                    $hn = $_POST['hospitalname'];
                                                    $hscode = $_POST['hospitalcode'];
                                                    $test = $_POST['test'];
                                                    $doa = $_POST['doa'];
                                                    $toa = $_POST['toa'];
                                                    $teststatus = $_POST['teststatus'];
                                                    // $vaccinedose = $_POST['vaccinedose'];

                                                    if ($data1['covid_test_status'] == 'Pending') {

                                                        $qs = "UPDATE `covid_test_report` SET `doctor_name`='$vs',`covid_test_date`='$doa',`time_of_appointment`='$toa',`covid_test_status`='$teststatus'  WHERE `id`='$id'";
                                                        mysqli_query($db, $qs);
                                                        echo "<script>window.open('h-bookings.php','_self');</script>";
                                                    } elseif ($data1['covid_test_status'] == 'Scheduled') {

                                                        $qs = "UPDATE `covid_test_report` SET `doctor_name`='$vs',`covid_test_date`='$doa',`time_of_appointment`='$toa',`covid_test_status`='$teststatus'  WHERE `id`='$id'";
                                                        mysqli_query($db, $qs);
                                                        echo "<script>window.open('h-bookings.php','_self');</script>";
                                                    } elseif ($data1['covid_test_status'] == 'Test Done') {

                                                        $qs = "UPDATE `covid_test_report` SET `doctor_name`='$vs',`covid_test_date`='$doa',`time_of_appointment`='$toa',`covid_test_status`='$teststatus'  WHERE `id`='$id'";
                                                        $qu = "UPDATE `users` SET `covid_test_status`='$teststatus' WHERE `cnic`='$cnic'";
                                                        mysqli_query($db, $qs);
                                                        mysqli_query($db,$qu);
                                                        echo "<script>window.open('h-bookings.php','_self');</script>";
                                                        // $qs = "UPDATE `vaccination_bookings` SET `vaccination_specialist`='$vs',`date_of_appointment`='$doa',`time_of_appointment`='$toa',`vaccine_status`='$vaccinestatus'  WHERE `id`='$id'";
                                                    }
                                                }
                                                ?>
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