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
                                        <label>Manufacturer</label>
                                        <input class="form-control" type="text" name="manufacturer" placeholder="Manufacturer" required />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>batch code</label>
                                        <input class="form-control" type="text" name="batchcode" placeholder="Batch Code" required />
                                    </div>
                                    <!-- col-md-8 col-md-12 col-lg-8 -->
                                    <div class="form-group col-sm-6">
                                        <label>available stock</label>
                                        <input class="form-control" name="availablestock" placeholder="Avaialable stock" type="number"  required />
                                    </div>
                                </div>
                                <?php

                                if (isset($_POST['save'])) {

                                    $n = $_POST['name'];
                                    $m = $_POST['manufacturer'];
                                    $btcd = $_POST['batchcode'];
                                    $as = $_POST['availablestock'];

                                    $q1 = "INSERT INTO `vaccines`(`name`,`manufacturer`,`batch_code`,`available_stock`) VALUES('$n','$m','$btcd','$as')";
                                    mysqli_query($db,$q1);
                                    echo "<script>window.open('procurement.php','_self');</script>";
                
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