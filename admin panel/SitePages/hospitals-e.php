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
                        <li class="breadcrumb-item"><a href="#" style="color: #247cff;">hospitals</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $data1['name']; ?></li>
                    </ol>
                </nav>
            </div>
            <!-- <div class="col-md-4"><button class="btn btn-dark-red-f-gr" name="save"><i class="las la-save"></i>Save</button></div> -->
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
                                                        <form method="POST">
                                                            <div class="form-group"><label>Id</label><input class="form-control" name="id" readonly="readonly" value="<?php echo $data1['id']; ?>"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Name</label><input class="form-control" name="name" value="<?php echo $data1['name']; ?>" required ></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>hospital code</label><input class="form-control" name="hospitalcode" value="<?php echo $data1['hospital_code']; ?>" required ></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>email</label><input class="form-control" name="email" value="<?php echo $data1['email']; ?>" required ></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Password</label><input class="form-control" name="pwd" value="<?php echo $data1['pwd']; ?>" required ></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>Phone</label><input class="form-control" name="phone" value="<?php echo $data1['phone']; ?>" required ></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>city</label><input class="form-control" name="city" value="<?php echo $data1['city']; ?>" required ></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>address</label><input class="form-control" name="address" value="<?php echo $data1['address']; ?>" required ></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label>no. of specialists</label><input class="form-control" name="nos" value="<?php echo $data1['no_of_specialists']; ?>" required ></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4"><button class="btn btn-dark-red-f-gr" name="save"><i class="las la-save"></i>Save</button></div>
                                                </form>
                                                <?php 
                                                if(isset($_POST['save'])){

                                                    $id = $_POST['id'];
                                                    $name = $_POST['name'];
                                                    $hsptlcode = $_POST['hospitalcode'];
                                                    $email = $_POST['email'];
                                                    $pwd = $_POST['pwd'];
                                                    $phone = $_POST['phone'];
                                                    $city = $_POST['city'];
                                                    $address = $_POST['address'];
                                                    $nos = $_POST['nos'];

                                                    $qsave = "UPDATE `hospitals` SET `name`='$name',`hospital_code`='$hsptlcode',`email`='$email',`pwd`='$pwd',`phone`='$phone',`city`='$city',`address`='$address',`no_of_specialists`='$nos' WHERE `id`='$id'";
                                                    mysqli_query($db,$qsave);
                                                    echo "<script>window.open('hospitals.php','_self');</script>";
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