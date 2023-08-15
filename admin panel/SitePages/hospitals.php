<?php
include 'header.php';

if (isset($_POST['submit'])) {
    $s = $_POST['search'];
    $q1 = "SELECT * FROM `hospitals` WHERE `hospital_code`='$s'";
    $row1 = mysqli_query($db, $q1);
} else {
    $q1 = "SELECT * FROM `hospitals`";
    $row1 = mysqli_query($db, $q1);
}
// $data = mysqli_fetch_assoc($run);

?>
<link rel="stylesheet" href="../SiteAssets/css/pages/specialists.css" />
<script src="../SiteAssets/js/spaecialists.js"></script>


<div class="main-content">
    <div class="container-fluid">
        <div class="section title-section">
            <h5 class="page-title"></h5>
        </div>
        <div class="section filters-section justify-content-between">
            <div class="row">
                <!-- <div class="col-lg-6 col-md-6"><button class="btn btn-dark-red-o mr-2"><i class="las la-filter"></i>filter</button><button class="btn btn-dark-red-o"><i class="las la-sort"></i>sort</button></div> -->
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form method="POST">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search here..." name="search"><button class="btn btn-dark-red-f-gr" name="submit"><i class="las la-search"></i>search</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="col-md-6"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>add a vaccine</button></div> -->
                    </div>
                </div>
            </div>
            <a href="add-a-hospital.php">
                <div class="buttons-wrapper"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>add a new hospital</button></div>
            </a>
        </div>
        <div class="section specialists-table-view">
            <table class="table table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>City</th>
                        <th>phone no.</th>
                        <th>hospital code</th>
                        <th>No. of specialists</th>
                        <th></th>
                        <!-- <th></th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data1 = mysqli_fetch_assoc($row1)) { ?>
                        <tr>
                            <td><span class="ml-2"><?php echo $data1['name']; ?></span></td>
                            <td class="text-lowercase text-muted"><a href=""><?php echo $data1['email']; ?></a></td>
                            <td class="text-muted"><?php echo $data1['city']; ?></td>
                            <td><?php echo $data1['phone']; ?></td>
                            <td class="text-muted"><a href=""><?php echo $data1['hospital_code']; ?></a></td>
                            <td><?php echo $data1['no_of_specialists']; ?></td>
                            <td><button class="btn btn-sm btn-dark-red-f">appointment</button></td>
                            <!-- <td><a href=""><i class="las la-ellipsis-h"></i></a></td> -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
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