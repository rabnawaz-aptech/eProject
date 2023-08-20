<?php

include 'h-header.php';

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
                    <h5>personal details</h5>
                    <p>This section contains your basic profile information like name, email etc</p>
                </div>
                <div class="card-body">
                    <div class="sub-section col-md-12 col-lg-8">
                        <div class="sub-section-title">
                            <h6>profile details</h6>
                        </div>
                        <div class="sub-section-body">
                            <div class="user-details-form">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <form method="POST">
                                            <label>first name</label>
                                            <input class="form-control" name="fname" placeholder="First name" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>last name</label>
                                        <input class="form-control" name="lname" placeholder="Last name" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>email address</label>
                                        <input class="form-control" name="email" placeholder="Email" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Gender</label>
                                        <select class="form-control" name="gender" placeholder="Gender" required>
                                            <option>Select gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <!-- col-md-8 col-md-12 col-lg-8 -->
                                    <div class="form-group col-sm-6">
                                        <label>telephone number</label>
                                        <input class="form-control" pattern="(?=.*\d).{11,11}" name="phone" placeholder="Phone no." type="tel" maxlength="11" minlength="11"  required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>CNIC</label>
                                        <input class="form-control" pattern="(?=.*\d).{13,13}" name="cnic" placeholder="CNIC No." type="text" maxlength="13" minlength="13"  required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Date Of Birth</label>
                                        <input class="form-control" name="dob" placeholder="Date Of Birth" type="date" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>City</label>
                                        <select class="form-control" name="city" placeholder="City" required>
                                            <option>Select city</option>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Lahore">Lahore</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Specialist ID</label>
                                        <input class="form-control" name="specialistid" placeholder="Specialist ID" type="tel" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Hospital</label>
                                        <input class="form-control" name="hospital" placeholder="Hospital" type="tel" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Hospital Code</label>
                                        <input class="form-control" name="hospitalcode" placeholder="Hospital ID" type="text" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Role</label>
                                        <select class="form-control" name="role" placeholder="Select role" required>
                                            <option>Select role</option>
                                            <option value="Specialist">Specialist</option>
                                            <option value="Moderator">Moderator</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Speciality</label>
                                        <select class="form-control" name="speciality" placeholder="Select speciality" required>
                                            <option>Select speciality</option>
                                            <option value="Dentist">Dentist</option>
                                            <option value="Doctor">Doctor</option>
                                        </select>
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

                                    $fname = $_POST['fname'];
                                    $lname = $_POST['lname'];
                                    $e = $_POST['email'];
                                    $phone = $_POST['phone'];
                                    $g = $_POST['gender'];
                                    $city = $_POST['city'];
                                    $cnic = $_POST['cnic'];
                                    $dob = $_POST['dob'];
                                    $role = $_POST['role'];
                                    $spltid = $_POST['specialistid'];
                                    $splty = $_POST['speciality'];
                                    $hsptl = $_POST['hospital'];
                                    $hsptl_code = $_POST['hospitalcode'];
                                    $p = $_POST['pwd'];
                                    $cp = $_POST['c-pwd'];

                                    if($p==$cp){

                                        if($g == "Male"){
                                            $dp = "../SiteAssets/images/doctor.svg";
                                        }else{
                                            $dp= "../SiteAssets/images/doctor.svg";
                                        }
                
                                        // $role= "user";
                
                                        $q1 = "SELECT * FROM `specialists` WHERE `email` LIKE '$e';";
                                        $run = mysqli_query($db , $q1);
                                        $count = mysqli_num_rows($run);
                
                                        if($count== 1){
                                            echo "
                                            <div class='alert alert-danger'>
                                        <strong>Already registered!</strong> go to login!
                                        </div>
                                            ";
                                        }else{


                                    $q2 = "INSERT INTO `users`(`first_name`,`last_name`,`email`,`role`,`gender`,`dob`,`city`,`dp`,`cnic`,`pwd`,`phone`) VALUES('$fname','$lname','$e','$role','$g','$dob','$city','$dp','$cnic','$p','$phone') ";
                                    $q3 = "INSERT INTO `specialists`(`first_name`,`last_name`,`email`,`role`,`gender`,`dob`,`dp`,`city`,`cnic`,`pwd`,`phone`,`hsptl_code`,`hsptl`,`spltid`,`splty`) VALUES('$fname','$lname','$e','$role','$g','$dob','$dp','$city','$cnic','$p','$phone','$hsptl_code','$hsptl','$spltid','$splty') ";
                                    // print_r($q3);
                                    // exit();
                                    mysqli_query($db,$q2);
                                    mysqli_query($db,$q3);
                                    echo "<script>window.location.href = 'h-specialists.php';</script>";
                                }
                            }else{echo "<div class='alert alert-danger'><strong>Error!</strong> Password doesn't match.</div>";
                            }
                        }
                                ?>
                                <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("pass").value;
        var confirmPassword = document.getElementById("c-pass").value;
        if (password != confirmPassword) {
            document.getElementById("demo").innerHTML ="<div class='alert alert-danger'><strong>Error!</strong> Password doesn't match.</div>";
            // write("");
            return true;
        }else{
            document.getElementById("demo").innerHTML ="";
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