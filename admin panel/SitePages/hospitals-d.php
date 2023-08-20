<?php
include 'header.php';
$id = $_GET['id'];
$q1 = "SELECT * FROM `hospitals` WHERE `id`='$id'";
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
                        <li class="breadcrumb-item"><a href="hospitals.php" style="color: #247cff;">hospitals</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $data1['name']; ?></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-4"><a href="hospitals-e.php?id=<?php echo $data1['id']; ?>"><button class="btn btn-dark-red-f-gr"><i class="las la-edit"></i>edit hospital</button></a></div>
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
                                                        <div class="form-group"><label>Id</label><input class="form-control" readonly="readonly" value="<?php echo $data1['id']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Name</label><input class="form-control" readonly="readonly" value="<?php echo $data1['name']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>hospital code</label><input class="form-control" readonly="readonly" value="<?php echo $data1['hospital_code']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>email</label><input class="form-control" readonly="readonly" value="<?php echo $data1['email']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Password</label><input class="form-control" readonly="readonly" value="<?php echo $data1['pwd']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Phone</label><input class="form-control" readonly="readonly" value="<?php echo $data1['phone']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>city</label><input class="form-control" readonly="readonly" value="<?php echo $data1['city']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>address</label><input class="form-control" readonly="readonly" value="<?php echo $data1['address']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>no. of specialists</label><input class="form-control" readonly="readonly" value="<?php echo $data1['no_of_specialists']; ?>" /></div>
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