<?php
include 'h-header.php';

if (isset($_POST['submit'])) {
    $s = $_POST['search'];
    $hc = $_SESSION['hospital_code'];
    $q1 = "SELECT * FROM `vaccination_bookings` WHERE `hospital_code`='$hc' AND `vaccine_status`='Scheduled' AND `cnic`='$s'";
    $row1 = mysqli_query($db, $q1);

    $q2 = "SELECT * FROM `vaccination_bookings` WHERE `hospital_code`='$hc' AND `vaccine_status`='Pending' AND `cnic`='$s'";
    $row2 = mysqli_query($db, $q2);

    $q3 = "SELECT * FROM `vaccination_bookings` WHERE `hospital_code`='$hc' AND `vaccine_status`='Vaccinated' AND `cnic`='$s'";
    $row3 = mysqli_query($db, $q3);
} else {

    $hc = $_SESSION['hospital_code'];
    $q1 = "SELECT * FROM `vaccination_bookings` WHERE `hospital_code`='$hc' AND `vaccine_status`='Scheduled'";
    $row1 = mysqli_query($db, $q1);

    $q2 = "SELECT * FROM `vaccination_bookings` WHERE `hospital_code`='$hc' AND `vaccine_status`='Pending'";
    $row2 = mysqli_query($db, $q2);

    $q3 = "SELECT * FROM `vaccination_bookings` WHERE `hospital_code`='$hc' AND `vaccine_status`='Vaccinated'";
    $row3 = mysqli_query($db, $q3);
}


?>
<link rel="stylesheet" href="../SiteAssets/css/pages/patients.css" />
<script src="../SiteAssets/js/patients.js"></script>


<div class="main-content">
    <div class="container-fluid">
        <div class="section title-section">
            <h5 class="page-title"></h5>
        </div>
        <div class="section filters-section">
            <div class="row">
                <!-- <div class="col-lg-6 col-md-6"><button class="btn btn-dark-red-o mr-2"><i class="las la-filter"></i>filter</button><button class="btn btn-dark-red-o"><i class="las la-sort"></i>sort</button></div> -->
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form method="POST">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search here..." name="search" maxlength="13" minlength="13"><button class="btn btn-dark-red-f-gr" name="submit"><i class="las la-search"></i>search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="buttons-wrapper ml-auto"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>add a new patient</button></div> -->
        </div>
        <div class="section patients-table-view">
            <h5>Scheduled Bookings</h5>
            <table class="table table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>patient ID</th>
                        <th>vaccine name</th>
                        <th>patient name</th>
                        <th>date of birth</th>
                        <th>gender</th>
                        <th>city</th>
                        <th>CNIC</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data1 = mysqli_fetch_assoc($row1)) { ?>
                        <tr>
                            <td><?php echo $data1['id']; ?></td>
                            <td><?php echo $data1['vaccine']; ?></td>
                            <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2"><a href="h-vaccination-d.php?id=<?php echo $data1['id']; ?>" style="color: #000;"><?php echo $data1['first_name']; ?></a></span></td>
                            <td><?php echo $data1['dob']; ?></td>
                            <td><?php echo $data1['gender']; ?></td>
                            <td><?php echo $data1['city']; ?></td>
                            <td><?php echo $data1['cnic']; ?></td>
                            <!-- <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td> -->
                            <td><?php echo $data1['vaccine_status'] . "(" . $data1['vaccine_dose'] . ")"; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="section patients-table-view">
            <h5>Pending Bookings</h5>
            <table class="table table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>patient ID</th>
                        <th>vaccine name</th>
                        <th>patient name</th>
                        <th>date of birth</th>
                        <th>gender</th>
                        <th>city</th>
                        <th>CNIC</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data2 = mysqli_fetch_assoc($row2)) { ?>
                        <tr>
                            <td><?php echo $data2['id']; ?></td>
                            <td><?php echo $data2['vaccine']; ?></td>
                            <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2"><a href="h-vaccination-d.php?id=<?php echo $data2['id']; ?>" style="color: #000;"><?php echo $data2['first_name']; ?></a></span></td>
                            <td><?php echo $data2['dob']; ?></td>
                            <td><?php echo $data2['gender']; ?></td>
                            <td><?php echo $data2['city']; ?></td>
                            <td><?php echo $data2['cnic']; ?></td>
                            <!-- <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td> -->
                            <td><?php echo $data2['vaccine_status'] . "(" . $data2['vaccine_dose'] . ")"; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="section patients-table-view">
            <h5>Previous Bookings</h5>
            <table class="table table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>patient ID</th>
                        <th>vaccine name</th>
                        <th>patient name</th>
                        <th>date of birth</th>
                        <th>gender</th>
                        <th>city</th>
                        <th>CNIC</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data3 = mysqli_fetch_assoc($row3)) { ?>
                        <tr>
                            <td><?php echo $data3['id']; ?></td>
                            <td><?php echo $data3['vaccine']; ?></td>
                            <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2"><a href="h-vaccination-d.php?id=<?php echo $data3['id']; ?>" style="color: #000;"><?php echo $data3['first_name']; ?></a></span></td>
                            <td><?php echo $data3['dob']; ?></td>
                            <td><?php echo $data3['gender']; ?></td>
                            <td><?php echo $data3['city']; ?></td>
                            <td><?php echo $data3['cnic']; ?></td>
                            <!-- <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td> -->
                            <td><?php echo $data3['vaccine_status'] . "(" . $data3['vaccine_dose'] . ")"; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <footer>
            <div class="page-footer text-center">
                <div class="fixed-bottom shadow-sm"><a href="https://covid19.who.int" target="_blank"><img src="../SiteAssets/images/covid-19.svg" /><span>view COVID-19 info</span></a></div>
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