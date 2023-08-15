<?php
include 'header.php';
if (isset($_POST['submit'])) {
    $s = $_POST['search'];
    $q1 = "SELECT * FROM `vaccines` WHERE `name` LIKE '%$s%'";
    $row1 = mysqli_query($db, $q1);
} else {
    $q1 = "SELECT * FROM `vaccines`";
    $row1 = mysqli_query($db, $q1);
}

?>
<link rel="stylesheet" href="../SiteAssets/css/pages/procurement.css" />

<div class="main-content">
    <div class="container-fluid">
        <div class="section title-section">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="page-title"></h5>
                </div>
            </div>
        </div>
        <div class="section filters-section">
            <div class="row">
                <!-- <div class="col-lg-6 col-md-6"><button class="btn btn-dark-red-o mr-2"><i class="las la-filter"></i>filter</button><button class="btn btn-dark-red-o"><i class="las la-sort"></i>sort</button></div> -->
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <form method="POST">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search here..." name="search"><button class="btn btn-dark-red-f-gr" name="submit"><i class="las la-search"></i>search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>add a vaccine</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section content-section">
            <table class="table table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>manufacturer</th>
                        <th>batch code</th>
                        <th>available stock</th>
                        <th>status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data1 = mysqli_fetch_assoc($row1)) { ?>
                        <tr>
                            <td>
                                <p><?php echo $data1['name']; ?></p><small class="text-muted">POR/2901/21</small>
                            </td>
                            <td><?php echo $data1['manufacturer']; ?></td>
                            <td><?php echo $data1['batch_code']; ?></td>
                            <td><?php echo $data1['available_stock']; ?></td>
                            <td><label class="label-green label-md">avaialable</label></td>
                            <td><button class="btn"><i class="las la-ellipsis-h"></i></button></td>
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