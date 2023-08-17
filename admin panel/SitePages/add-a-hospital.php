<?php

include 'header.php';

?>
<link rel="stylesheet" href="../SiteAssets/css/pages/settings.css" />

<div class="main-content">
    <div class="container-fluid">
        <div class="section">
            <h5 class="page-title">Add A Specialist</h5>
        </div>
        <div class="section profile-section">
            <div class="card container">
                <div class="card-header">
                    <h5>enter details</h5>
                    <p>Enter details of Hospital to add.</p>
                </div>
                <div class="card-body">
                    <div class="sub-section col-md-12 col-lg-8">
                        <!-- <div class="sub-section-title">
                            <h6>profile details</h6>
                        </div> -->
                        <div class="sub-section-body">
                            <div class="user-details-form">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <form method="POST">
                                            <label>name</label>
                                            <input class="form-control" type="text" name="name" placeholder="Name" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>email address</label>
                                        <input class="form-control" type="email" name="email" placeholder="Email" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>hospital code</label>
                                        <input class="form-control" type="text" name="hospitalcode" placeholder="Hospital Code" required />
                                    </div>
                                    <!-- col-md-8 col-md-12 col-lg-8 -->
                                    <div class="form-group col-sm-6">
                                        <label>telephone number</label>
                                        <input class="form-control" pattern="(?=.*\d).{11,11}" name="phone" placeholder="Phone no." type="tel" maxlength="11" minlength="11" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>City</label>
                                        <select class="form-control" name="city" placeholder="City" required>
                                            <option>Select your city</option>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Lahore">Lahore</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>address</label>
                                        <input class="form-control" name="address" placeholder="Address" type="text" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Password</label>
                                        <input class="form-control" pattern="(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="pass" onchange="Validate()" name="pwd" placeholder="Password" type="password" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Re-type password</label>
                                        <input class="form-control" pattern="(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="c-pass" onchange="Validate()" name="c-pwd" placeholder="Re-type password" type="password" required />
                                    </div>
                                </div>
                                <?php

                                if (isset($_POST['save'])) {

                                    $name = $_POST['name'];
                                    $e = $_POST['email'];
                                    $city = $_POST['city'];
                                    $hc = $_POST['hospitalcode'];
                                    $address = $_POST['address'];
                                    $p = $_POST['pwd'];
                                    $cp = $_POST['c-pwd'];
                                    $phone = $_POST['phone'];

                                    if ($p == $cp) {


                                        // $role= "user";

                                        $q1 = "SELECT * FROM `hospitals` WHERE `email` LIKE '$e';";
                                        $run = mysqli_query($db, $q1);
                                        $count = mysqli_num_rows($run);

                                        if ($count == 1) {
                                            echo "
                                            <div class='alert alert-danger'>
                                        <strong>Already registered!</strong> go to login!
                                        </div>
                                            ";
                                        } else {


                                            $q2 = "INSERT INTO `hospitals`(`name`,`email`,`city`,`hospital_code`,`pwd`,`phone`,`address`) VALUES('$name','$e','$city','$hc','$p','$phone','$address') ";
                                            // $q3 = "INSERT INTO `specialists`(`first_name`,`last_name`,`email`,`role`,`gender`,`dob`,`dp`,`city`,`cnic`,`pwd`,`phone`,`hsptl_code`,`hsptl`,`spltid`,`splty`) VALUES('$fname','$lname','$e','$role','$g','$dob','$dp','$city','$cnic','$p','$phone','$hsptl_code','$hsptl','$spltid','$splty') ";
                                            // print_r($q3);
                                            // exit();
                                            mysqli_query($db, $q2);
                                            // mysqli_query($db,$q3);
                                            echo "<script>window.open('hospitals.php','_self');</script>";
                                        }
                                    } else {
                                        echo "<div class='alert alert-danger'><strong>Error!</strong> Password doesn't match.</div>";
                                    }
                                }
                                ?>
                                <script type="text/javascript">
                                    function Validate() {
                                        var password = document.getElementById("pass").value;
                                        var confirmPassword = document.getElementById("c-pass").value;
                                        if (password != confirmPassword) {
                                            document.getElementById("demo").innerHTML = "<div class='alert alert-danger'><strong>Error!</strong> Password doesn't match.</div>";
                                            // write("");
                                            return true;
                                        } else {
                                            document.getElementById("demo").innerHTML = "";
                                            return false;
                                        }
                                    }
                                </script>
                                <span id="demo"></span>
                                <button class="btn btn-dark-red-f-gr mt-4" name="save" onclick="refreshMyPage()">
                                    <i class="las la-save"></i>save to list
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>