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
            <!-- <div class="col-md-4"><a href="h-specialists-e.php"><button class="btn btn-dark-red-f-gr"><i class="las la-edit"></i>edit Specialist</button></a></div> -->
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
                                                            <div class="form-group"><label>Id</label><input class="form-control" readonly="readonly" value="<?php echo $data1['id']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>First Name</label><input class="form-control" name="fname" value="<?php echo $data1['first_name']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>Last Name</label><input class="form-control" name="lname" value="<?php echo $data1['last_name']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>CNIC</label><input class="form-control" name="cnic" value="<?php echo $data1['cnic']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>email</label><input class="form-control" name="email" value="<?php echo $data1['email']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>Password</label><input class="form-control" name="pwd" value="<?php echo $data1['pwd']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>gender</label><input class="form-control" name="gender" value="<?php echo $data1['gender']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>date of birth</label><input type="date" class="form-control" name="dob" value="<?php echo $data1['dob']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>phone number</label><input type="text" class="form-control" name="phone" value="<?php echo $data1['phone']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>city</label><input class="form-control" name="city" value="<?php echo $data1['city']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>hospital</label><input class="form-control" name="hsptl" value="<?php echo $data1['hsptl']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>hospital code</label><input class="form-control" name="hsptlcode" value="<?php echo $data1['hsptl_code']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>Specialist Id</label><input class="form-control" name="spltid" value="<?php echo $data1['spltid']; ?>" required></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label>Role</label><input class="form-control" name="role" value="<?php echo $data1['role']; ?>" required></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4"><button class="btn btn-dark-red-f-gr" name="save"><i class="las la-save"></i>save</button></div>
                                                </form>
                                                <?php
                                                if(isset($_POST['save'])){
                                                
                                                $fn = $_POST['fname'];
                                                $ln = $_POST['lname'];
                                                $email = $_POST['email'];
                                                $cnic = $_POST['cnic'];
                                                $pwd = $_POST['pwd'];
                                                $gender = $_POST['gender'];
                                                $dob = $_POST['dob'];
                                                $phone = $_POST['phone'];
                                                $city = $_POST['city'];
                                                $hsptl = $_POST['hsptl'];
                                                $hsptlcode = $_POST['hsptlcode'];
                                                $spltid = $_POST['spltid'];
                                                $role = $_POST['role'];

                                                $qsave = "UPDATE `specialists` SET `first_name`='$fn',`last_name`='$ln',`email`='$email',`pwd`='$pwd',`city`='$city',`cnic`='$cnic',`dob`='$dob',`role`='$role',`phone`='$phone',`gender`='$gender',`spltid`='$spltid',`hsptl`='$hsptl',`hsptl_code`='$hsptlcode' WHERE `id`='$id'";
                                                mysqli_query($db,$qsave);
                                                echo "<script>window.open('h-specialists.php','_self');</script>";
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