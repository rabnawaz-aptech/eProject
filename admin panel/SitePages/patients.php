<?php
include 'header.php';

if (isset($_POST['submit'])) {
    $c = $_POST['cnic'];
    $q1 = "SELECT * FROM `users` WHERE `role`='User' AND `cnic`='$c'";
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
            <div class="form-group col-sm-3">
                <!-- <label>telephone number</label> -->
                <form method="POST">
                    <input class="form-control" name="cnic" placeholder="Search here..." required />
                    <!-- <button class="btn btn-dark-red-f-gr mt-4" name="submit" onclick="refreshMyPage()">
                    <i class="las la-save"></i>save changes
                </button> -->
            </div>
            <div class="form-group col-sm-3">
                <!-- <label>telephone number</label> -->
                <!-- <input class="form-control" name="phone" placeholder="Search here..." required /> -->
                <button class="btn btn-dark-red-f-gr" name="submit" onclick="refreshMyPage()">
                    <i class="las la-search"></i>search
                </button>
                </form>
            </div>

            <!-- <div class="dropdowns-wrapper">
                <div class="dropdown"><a class="btn btn-dark-red-o dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">filter</a>
                    <div class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">age</a><a class="dropdown-item" href="#">diagnosis</a><a class="dropdown-item" href="#">triage</a></div>
                </div>
                <div class="dropdown"><a class="btn btn-dark-red-o dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">sort by</a>
                    <div class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">patient id</a><a class="dropdown-item" href="#">patient name</a><a class="dropdown-item" href="#">age</a><a class="dropdown-item" href="#">date of birth</a><a class="dropdown-item" href="#">diagnosis</a><a class="dropdown-item" href="#">triage</a></div>
                </div>
            </div> -->
            <!-- <div class="switch-view-btns"> -->
            <!-- <div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-darker-grey-o active"><input id="card-view-btn" type="radio" name="options" checked="" /><i class="las la-th-large"></i></label><label class="btn btn-darker-grey-o"><input id="table-view-btn" type="radio" name="options" /><i class="las la-list-ul"></i></label></div> -->
            <!-- </div> -->
            <div class="buttons-wrapper ml-auto"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>add a new patient</button></div>
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
                            <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2"><a href="details.php?id=<?php echo $data1['id']; ?>" style="color: #000;"><?php echo $data1['first_name'] . " " . $data1['last_name']; ?></a></span></td>
                            <td><?php echo $data1['dob']; ?></td>
                            <td><?php echo $data1['gender']; ?></td>
                            <td><?php echo $data1['city']; ?></td>
                            <td><?php echo $data1['cnic']; ?></td>
                            <!-- <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td> -->
                            <td><label class="
                        <?php
                        if ($data1['covid_test_status'] == 'Covid Positive') {
                            echo "label-pink";
                        } elseif ($data1['vaccine_status'] == 'Not Vaccinated') {
                            echo "label-orange";
                        } elseif ($data1['vaccine_status'] == 'Pending') {
                            echo "label-blue";
                        } elseif ($data1['vaccine_status'] == 'Vaccinated') {
                            echo "label-green";
                        }
                        ?>
                        "><?php
                            if ($data1['covid_test_status'] == 'Covid Positive') {
                                echo $data1['covid_test_status'];
                            } elseif ($data1['vaccine_status'] == 'Not Vaccinated' || $data1['vaccine_status'] == 'Pending') {
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