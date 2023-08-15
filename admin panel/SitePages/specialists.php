<?php
include 'header.php';

if (isset($_POST['submit'])) {
    $s = $_POST['search'];
    $q1 = "SELECT * FROM `specialists` WHERE `cnic`='$s'";
    $row1 = mysqli_query($db, $q1);
} else {

    $q1 = "SELECT * FROM `specialists`";
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
                                    <input class="form-control" placeholder="Search here..." name="search" maxlength="13" minlength="13"><button class="btn btn-dark-red-f-gr" name="submit"><i class="las la-search"></i>search</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="col-md-6"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>add a vaccine</button></div> -->
                    </div>
                </div>
            </div>
            <a href="add-a-specialist.php">
                <div class="buttons-wrapper"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>add a new specialist</button></div>
            </a>
        </div>
        <div class="section specialists-table-view">
            <table class="table table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>gender</th>
                        <th>specialization</th>
                        <th>CNIC</th>
                        <th>phone no.</th>
                        <th>City</th>
                        <th></th>
                        <!-- <th></th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data1 = mysqli_fetch_assoc($row1)) { ?>
                        <tr>
                            <td><img class="rounded-circle mr-1" src="<?php echo $data1['dp']; ?>" loading="lazy" /><span class="ml-2"><?php echo $data1['first_name']; ?> <?php echo $data1['last_name']; ?></span></td>
                            <td class="text-muted"><?php echo $data1['gender']; ?></td>
                            <td><?php echo $data1['role']; ?></td>
                            <td class="text-lowercase text-muted"><a href=""><?php echo $data1['cnic']; ?></a></td>
                            <td><?php echo $data1['phone']; ?></td>
                            <td class="text-muted"><a href=""><?php echo $data1['city']; ?></a></td>
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