<?php
include 'header.php';

if (isset($_POST['submit'])) {
    $s = $_POST['search'];
    $q1 = "SELECT * FROM `users` WHERE `role`='User' AND `cnic`='$s'";
    $row1 = mysqli_query($db, $q1);
} else {

    $q1 = "SELECT * FROM `users` WHERE `role`='User'";
    $row1 = mysqli_query($db, $q1);
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
            <table class="table table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>patient ID</th>
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
                            <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2"><a href="patients-d.php?id=<?php echo $data1['id']; ?>" style="color: #000;"><?php echo $data1['first_name'] . " " . $data1['last_name']; ?></a></span></td>
                            <td><?php echo $data1['dob']; ?></td>
                            <td><?php echo $data1['gender']; ?></td>
                            <td><?php echo $data1['city']; ?></td>
                            <td><?php echo $data1['cnic']; ?></td>
                            <!-- <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td> -->
                            <td><label class="
                        <?php
                        if ($data1['covid_test_status'] == 'Positive') {
                            echo "label-pink";
                        } elseif ($data1['vaccine_status'] == 'Not Vaccinated' || $data1['vaccine_status'] == 'Pending') {
                            echo "label-orange";
                        } elseif ($data1['vaccine_status'] == 'Scheduled') {
                            echo "label-blue";
                        } elseif ($data1['vaccine_status'] == 'Vaccinated') {
                            echo "label-green";
                        }
                        ?>
                        "><?php
                            if ($data1['covid_test_status'] == 'Positive') {
                                echo $data1['covid_test_status'];
                            } elseif ($data1['vaccine_status'] == 'Not Vaccinated' || $data1['vaccine_status'] == 'Pending' || $data1['vaccine_status'] == 'Scheduled') {
                                echo $data1['vaccine_status'];
                            } elseif ($data1['vaccine_status'] == 'Vaccinated') {
                                echo $data1['vaccine_status'] . "(" . $data1['vaccine doses'] . ")";
                            } ?></label></td>
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