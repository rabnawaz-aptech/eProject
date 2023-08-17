<?php

include 'header.php';

if (isset($_SESSION['profile'])) {
  $e = $_SESSION['profile'];
  $q1 = "SELECT * FROM `users` WHERE `email`='$e' ";
  $run1 = mysqli_query($db, $q1);
  $data1 = mysqli_fetch_assoc($run1);



  $_SESSION['id'] = $data1['id'];
  $_SESSION['first_name'] = $data1['first_name'];
  $_SESSION['last_name'] = $data1['last_name'];
  $_SESSION['cnic'] = $data1['cnic'];
  $_SESSION['email'] = $data1['email'];
  $_SESSION['bio'] = $data1['bio'];
  $_SESSION['phone'] = $data1['phone'];
  $_SESSION['dob'] = $data1['dob'];
  $_SESSION['gender'] = $data1['gender'];
  $_SESSION['age'] = $data1['age'];
  $_SESSION['city'] = $data1['city'];
  $_SESSION['covid_test_status'] = $data1['covid_test_status'];
  $_SESSION['blood group'] = $data1['blood group'];
  $_SESSION['vaccine doses'] = $data1['vaccine doses'];
  $_SESSION['vaccine_status'] = $data1['vaccine_status'];

  $city = $data1['city'];
  $q2 = "SELECT * FROM `hospitals` WHERE `city`='$city'";
  $row2 = mysqli_query($db, $q2);

//   $city = $data1['city'];
  $q3 = "SELECT * FROM `vaccines`";
  $row3 = mysqli_query($db, $q3);

?>


                <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                                  <hr>
                                <form role="form" action="#booking" method="post">
                                	<h5>Patient Information</h5>
                                    <p>If you want to change your personal info go to profile.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">First Name:</label>
                                            <input type="text" name="fname" id="name" class="form-control" value="<?php echo$_SESSION['first_name']; ?>" placeholder="Full name" required disabled>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Last Name:</label>
                                            <input type="text" name="lname" id="name" class="form-control" value="<?php echo$_SESSION['last_name']; ?>" placeholder="Full name" required disabled>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">E-mail:</label>
                                            <input type="email" name="email" id="email" value="<?php echo$_SESSION['email']; ?>" class="form-control" placeholder="Email address" required disabled>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Phone:</label>
                                            <input type="telephone" name="phone" id="phone" value="<?php echo$_SESSION['phone']; ?>" class="form-control" placeholder="Phone: 123-456-7890" required disabled>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Date of Birth:</label>
                                            <input type="date" name="date" id="date" value="<?php echo$_SESSION['dob']; ?>"  class="form-control" placeholder="Date Of Birth:" required disabled>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Date of Appointment:</label>
                                            <input type="date" name="date" id="date"  class="form-control">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Time of Appointment:</label>
                                            <input type="datetime" name="time" id="time"  class="form-control" placeholder="E.g. 7 PM">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Gender:</label>
                                            <select class="form-select" name="gender" required disabled>
                                                <!-- <option>Select an option</option> -->
                                             <option <?php if ($data1['gender'] == 'Male') {
                                                                        echo 'selected';
                                                                    } ?>>Male</option>
                                             <option <?php if ($data1['gender'] == 'Female') {
                                                                        echo 'selected';
                                                                    } ?>>Female</option>                                          
                                            </select>
                                        </div>

                                           <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">City Of Residence:</label>
                                            <select class="form-select" name="city" required disabled>
                                             <option <?php if ($data1['city'] == 'Karachi') {
                                                                        echo 'selected';
                                                                    } ?>>Karachi</option>
                                             <option <?php if ($data1['city'] == 'Lahore') {
                                                                        echo 'selected';
                                                                    } ?>>Lahore</option>
                                             <option <?php if ($data1['city'] == 'Islamabad') {
                                                                        echo 'selected';
                                                                    } ?>>Islamabad</option>
                                             <option <?php if ($data1['city'] == 'Peshawar') {
                                                                        echo 'selected';
                                                                    } ?>>Peshawar</option>                                          
                                            </select>
                                        </div>

                                          


                                          <section class="section-padding pb-0" id="timeline">
                                          	<h5>Appointment Information</h5>
                                          	<hr>
                                          	<div class="row">
                                          	 <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Covid Vaccination:</label>
                                            <select class="form-select">
                                            <?php while($data3 = mysqli_fetch_assoc($row3)){ ?>
                                             <option value="<?php echo $data3['name']; ?>"><?php echo $data3['name']; ?></option>
                                             <!-- <option>Sinovac</option> -->
                                             <!-- <option>Pfizer</option> -->
                                             <!-- <option>Moderna</option>   -->
                                             <?php } ?>                                        
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Vaccination Hospital:</label>
                                            <select class="form-select" name="hospital">
                                                <?php while($data2 = mysqli_fetch_assoc($row2)){ ?>
                                             <option value="<?php echo $data2['name']; ?>"><?php echo $data2['name']; ?></option>
                                             <?php } ?>                                          
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Covid Test:</label>
                                            <select class="form-select">
                                             <option>Antigen</option>
                                             <option>Antibody Test (Serology Test or BloodTest)</option>
                                             <option>PCR</option>                                          
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Reason for Appointment:</label>
                                            <input class="form-control" id="message" name="message">
                                        </div>
                                             </div>
                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button">Book Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
          </main>
          
<?php
include 'footer.php';
}else{
    echo "<script>window.open('login.php','_self');</script>";
}
?>