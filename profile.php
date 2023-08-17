<?php

include 'header.php';

if (isset($_SESSION['profile'])) {
  $e = $_SESSION['profile'];
  $q1 = "SELECT * FROM `users` WHERE `email`='$e' ";
  $run = mysqli_query($db, $q1);
  $data = mysqli_fetch_assoc($run);
  //  print_r($q1);
  //  exit();



  $_SESSION['id'] = $data['id'];
  $_SESSION['first_name'] = $data['first_name'];
  $_SESSION['last_name'] = $data['last_name'];
  $_SESSION['cnic'] = $data['cnic'];
  $_SESSION['email'] = $data['email'];
  $_SESSION['bio'] = $data['bio'];
  $_SESSION['phone'] = $data['phone'];
  $_SESSION['dob'] = $data['dob'];
  $_SESSION['gender'] = $data['gender'];
  $_SESSION['age'] = $data['age'];
  $_SESSION['city'] = $data['city'];
  $_SESSION['covid_test_status'] = $data['covid_test_status'];
  $_SESSION['blood group'] = $data['blood group'];
  $_SESSION['vaccine doses'] = $data['vaccine doses'];
  $_SESSION['vaccine_status'] = $data['vaccine_status'];
  // $_SESSION['hospital_name'] = $data['hospital_name'];
  // $_SESSION['doctor_name'] = $data['doctor_name'];



?>









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



  <!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
  </head>

  <body>
    <main>

      <section class="section-padding" id="booking">
        <div class="container">
          <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
              <div class="booking-form">

                <h2 class="text-center mb-lg-3 mb-2">PATIENT PROFILE</h2>
                <hr>
                <h5>Personal Information</h5>
                <div class="row">
                  <div class="col-lg-6 col-6 mb-3 mt-3">
                    <label class="form-label">First Name:</label>
                    <p><?php echo $_SESSION['first_name']; ?></p>
                  </div>
                  <div class="col-lg-6 col-6 mb-3 mt-3">
                    <label class="form-label">Last Name:</label>
                    <p><?php echo $_SESSION['last_name']; ?></p>
                  </div>

                  <div class="col-lg-6 col-6 mb-3 mt-3">
                    <label class="form-label">CNIC:</label>
                    <p><?php echo $_SESSION['cnic']; ?></p>
                  </div>

                  <div class="col-lg-6 col-6 mb-3 mt-3">
                    <label class="form-label">E-mail:</label>
                    <p><?php echo $_SESSION['email']; ?></p>
                  </div>

                  <div class="col-lg-6 col-6 mb-3 mt-3">
                    <label class="form-label">City Of Residence:</label>
                    <p><?php echo $_SESSION['city']; ?></p>
                  </div>

                  <div class="col-lg-6 col-6 mb-3 mt-3">
                    <label class="form-label">Gender:</label>
                    <p><?php echo $_SESSION['gender']; ?></p>
                  </div>

                  <div class="col-lg-6 col-6 mb-3 mt-3">
                    <label class="form-label">Phone:</label>
                    <p><?php echo $_SESSION['phone']; ?></p>
                  </div>

                  <div class="col-lg-6 col-6 mb-3 mt-3">
                    <label class="form-label">Date of Birth:</label>
                    <p><?php echo $_SESSION['dob']; ?></p>
                  </div>

                  <div class="col-lg-6 col-6 mb-3 mt-3">
                    <label class="form-label">Age:</label>
                    <p><?php echo $_SESSION['age']; ?></p>
                  </div>

                  <div class="col-lg-6 col-6 mb-3 mt-3">
                    <label class="form-label">Bio:</label>
                    <p><?php echo $_SESSION['bio']; ?></p>
                  </div>

                  <div class="col-lg-3 col-sm-3 mb-3 mt-3">
                    <a href="setting.php?id=<?php echo $_SESSION['id']; ?>"><button class="form-control profile-button" id="submit-button">Setting</button></a>
                  </div>

                  <div class="col-lg-3 col-sm-3 mb-3 mt-3">
                    <a href="logout.php"><button type="submit" class="form-control profile-button" id="submit-button">logout</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  <h2>Report Information</h2> -->
      <div class="container mt-3">
        <h2>Report Information</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Patient Name</th>
              <th>Date of Report</th>
              <th>Hospital Name</th>
              <th>Doctor Name</th>
              <th>Covid Test Status</th>
              <th>Vaccination status</th>
              <th>Vaccination Doses</th>
              <th>Blood Group</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php while ($data = mysqli_fetch_assoc($row)) {
            ?>
              <tr>
                <td><?php echo $_SESSION['first_name']; ?></td>
                <td><?php echo $_SESSION['dob']; ?></td>
                <td><?php echo $_SESSION['hospital_name']; ?></td>
                <td><?php echo $_SESSION['doctor_name']; ?></td>
                <td><?php echo $_SESSION['covid_test_status']; ?></td>
                <td><?php echo $_SESSION['vaccine_status']; ?></td>
                <td><?php echo $_SESSION['vaccine doses']; ?></td>
                <td><?php echo $_SESSION['blood group']; ?></td>
                <td><button class="btn btn-primary form-control" name="go">View Report</button></td>
              </tr>

            <?php } ?>

          </tbody>
        </table>

      </div>
      </div>

      </div>
      </div>


    </main>



<?php

} else {
  echo "<script>window.open('login.php','_self');</script>";
}

?>