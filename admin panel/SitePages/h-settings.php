<?php
include 'h-header.php';
?>
<link rel="stylesheet" href="../SiteAssets/css/pages/settings.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<div class="main-content">
    <div class="container-fluid">
        <div class="section">
            <h5 class="page-title">settings</h5>
        </div>
        <div class="section profile-section">
            <div class="card container">
                <div class="card-header">
                    <h5>Edit details</h5>
                    <p>This section contains your basic profile information like name, email etc</p>
                </div>
                <div class="card-body">
                    <div class="sub-section col-md-12 col-lg-8">
                        <div class="sub-section-title">
                            <h6>hospital details</h6>
                        </div>
                        <div class="sub-section-body">
                            <div class="user-details-form">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <form method="POST">
                                            <label>name</label>
                                            <input class="form-control" name="name" value="<?php echo $_SESSION['name'] ?>" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>hospital code</label>
                                        <input class="form-control" name="hospitalcode" value="<?php echo $_SESSION['hospital_code'] ?>" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>no. of specialists</label>
                                        <input class="form-control" name="nos" value="<?php echo $_SESSION['no_of_specialists'] ?>" type="tel" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>email address</label>
                                        <input class="form-control" name="email" value="<?php echo $_SESSION['email'] ?>" required />
                                    </div>
                                    <!-- col-md-8 col-md-12 col-lg-8 -->
                                    <div class="form-group col-sm-6">
                                        <label>telephone number</label>
                                        <input class="form-control" name="phone" value="<?php echo $_SESSION['phone'] ?>" type="tel" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>city</label>
                                        <input class="form-control" name="city" value="<?php echo $_SESSION['city'] ?>" type="tel" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>address</label>
                                        <input class="form-control" name="address" value="<?php echo $_SESSION['address'] ?>" type="tel" required />
                                    </div>
                                </div>
                                <button class="btn btn-dark-red-f-gr mt-4" name="submit" onclick="refreshMyPage()">
                                    <i class="las la-save"></i>save changes
                                </button>
                                </form>
                                <?php

                                if (isset($_POST['submit'])) {

                                    $id = $_SESSION['id'];
                                    $name = $_POST['name'];
                                    $hsptlcode = $_POST['hospitalcode'];
                                    $nos = $_POST['nos'];
                                    $email = $_POST['email'];
                                    $city = $_POST['city'];
                                    $address = $_POST['address'];
                                    $phone = $_POST['phone'];

                                    $q1 = "UPDATE `hospitals` SET `name`='$name', `hospital_code`='$hsptlcode', `email`='$email', `phone`='$phone', `city`='$city', `address`='$address', `no_of_specialists`='$nos' WHERE `id`='$id'";
                                    mysqli_query($db, $q1);

                                    echo "<script>window.open('h-settings.php','_self');</script>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card container">
                <div class="card-header">
                    <h5>password</h5>
                    <p>A secure password and updated recovery info help protect your account.</p>
                </div>
                <div class="card-body">
                    <div class="sub-section col-sm-8 col-md-12 col-lg-8">
                        <div class="sub-section-body">
                            <div class="user-password-form">
                                <div class="form-row">
                                    <div class="form-group col-sm-8">
                                        <form method="POST">
                                            <label>current password</label>
                                            <input class="form-control" id="o-pass" onchange="Validate2()" name="pwd" placeholder="Current password" type="password" required />
                                    </div>
                                    <div class="form-group col-sm-8">
                                        <label>new password</label>
                                        <input class="form-control" id="pass" onchange="Validate();Validate2()" name="n-pwd" placeholder="New password" type="password" pattern="(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
                                    </div>
                                    <div class="form-group col-sm-8">
                                        <label>re-type new password</label>
                                        <input class="form-control" id="c-pass" onchange="Validate()" name="c-pwd" placeholder="Re-type new password" type="password" pattern="(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
                                    </div>
                                    <span id="demo"></span>
                                </div>
                                <!-- <br> -->
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

                                    function Validate2() {
                                        var oldPassword = document.getElementById("o-pass").value;
                                        var password = document.getElementById("pass").value;
                                        if (password === oldPassword) {
                                            document.getElementById("demo").innerHTML = "<div class='alert alert-warning'><strong>Error!</strong> Use a new password.</div>";
                                            // write("");
                                            return true;
                                        } else {
                                            document.getElementById("demo").innerHTML = "";
                                            return false;
                                        }
                                    }
                                </script>
                                <button class="btn btn-dark-red-f-gr mt-4" name="u-pwd">
                                    <i class="las la-sync"></i>change my password
                                </button>
                                </form>
                                <?php

                                if (isset($_POST['u-pwd'])) {

                                    $id = $_SESSION['id'];
                                    $pwd = $_POST['pwd'];
                                    $npwd = $_POST['n-pwd'];
                                    // $c_pwd = $_POST['c_pwd'];
                                    // $phone = $_POST['phone'];
                                    $opwd = $_SESSION['pwd'];

                                    if ($pwd == $opwd) {

                                        $q2 = "UPDATE `hospitals` SET `pwd`='$npwd' WHERE `id`='$id'";
                                        mysqli_query($db, $q2);

                                        // echo "<script>window.location.href = 'settings.php';</script>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card container">
                <div class="card-header">
                    <h5>Logout</h5>
                    <p>If you Logout you'll have to login again with email and password.</p>
                </div>
                <div class="card-body">
                    <div class="sub-section col-sm-8 col-md-12 col-lg-6">
                        <div class="sub-section-body">
                            <a href="../../logout.php">
                                <button class="btn btn-dark-red-f-gr mt-4">
                                    Logout
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="page-footer text-center">
                <div class="fixed-bottom shadow-sm">
                    <a href="https://covid19.who.int" target="_blank">
                        <img src="../SiteAssets/images/covid-19.svg" />
                        <span>view COVID-19 info</span>
                    </a>
                </div>
            </div>
        </footer>
    </div>
    </main>

    <script>
        $(document).ready(function() {
            $("#togglePassword").click(function() {
                // $("#pass").attr("type","text");
                var passInput = $("#pass");
                var togglepass = $('#togglePassword');
                if (passInput.attr('type') === 'password') {
                    passInput.attr('type', 'text');
                } else {
                    passInput.attr('type', 'password');
                }
                if (togglepass.attr('title') === 'Show password') {
                    togglepass.attr('title', 'Hide password');
                } else {
                    togglepass.attr('title', 'Show password');
                }
                $("#togglePassword").toggleClass("fa-eye-slash");
            });
            $("#togglePasswordc").click(function() {
                // $("#pass").attr("type","text");
                var passInput = $("#cpass");
                var togglepassc = $('#togglePasswordc');
                if (passInput.attr('type') === 'password') {
                    passInput.attr('type', 'text');
                } else {
                    passInput.attr('type', 'password');
                }
                if (togglepassc.attr('title') === 'Show password') {
                    togglepassc.attr('title', 'Hide password');
                } else {
                    togglepassc.attr('title', 'Show password');
                }
                $("#togglePasswordc").toggleClass("fa-eye-slash");
            });
        });
    </script>


    </body>

    </html>