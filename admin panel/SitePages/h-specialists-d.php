<?php
include 'h-header.php';
$id = $_GET['id'];
$h = $_SESSION['hospital_code'];
$q1 = "SELECT * FROM `specialists` WHERE `hsptl_code`='$h' AND `id`='$id'";
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
                        <li class="breadcrumb-item"><a href="h-specialists.php" style="color: #247cff;">specialists</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $data1['first_name'] . " " . $data1['last_name']; ?></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-4"><a href="h-specialists-e.php?id=<?php echo $data1['id']; ?>"><button class="btn btn-dark-red-f-gr"><i class="las la-edit"></i>edit Specialist</button></a></div>
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
                                                        <div class="form-group"><label>First Name</label><input class="form-control" readonly="readonly" value="<?php echo $data1['first_name']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Last Name</label><input class="form-control" readonly="readonly" value="<?php echo $data1['last_name']; ?>" /></div>
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
                                                        <div class="form-group"><label>city</label><input class="form-control" readonly="readonly" value="<?php echo $data1['city']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>hospital</label><input class="form-control" readonly="readonly" value="<?php echo $data1['hsptl']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>hospital code</label><input class="form-control" readonly="readonly" value="<?php echo $data1['hsptl_code']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Specialist Id</label><input class="form-control" readonly="readonly" value="<?php echo $data1['spltid']; ?>" /></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Role</label><input class="form-control" readonly="readonly" value="<?php echo $data1['role']; ?>" /></div>
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