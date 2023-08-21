<?php

// include 'db.php';
include 'h-header.php';
$hc = $_SESSION['hospital_code'];

$q2 = "SELECT * FROM `vaccination_bookings` WHERE `hospital_code`='$hc'";
$row2 = mysqli_query($db, $q2);
$count2 = mysqli_num_rows($row2);

$q3 = "SELECT * FROM `specialists` WHERE `hsptl_code`='$hc'";
$row3 = mysqli_query($db, $q3);
$count3 = mysqli_num_rows($row3);

$q4 = "SELECT * FROM `covid_test_report` WHERE `hospital_code`='$hc' AND `covid_test_status`='Scheduled'";
$row4 = mysqli_query($db, $q4);
$count4 = mysqli_num_rows($row4);

$q5 = "SELECT * FROM `covid_test_report` WHERE `hospital_code`='$hc' AND `covid_test_status`='Pending'";
$row5 = mysqli_query($db, $q5);
$count5 = mysqli_num_rows($row5);

$q8 = "SELECT * FROM `covid_test_report` WHERE `hospital_code`='$hc'";
$row8 = mysqli_query($db, $q8);
$count8 = mysqli_num_rows($row8);


$q6 = "SELECT * FROM `vaccines`";
$row6 = mysqli_query($db, $q6);
$count6 = mysqli_num_rows($row6);



?>

<div class="main-content">
  <div class="container-fluid">
    <div class="section">
      <div class="row">
        <div class="col-md-6">
          <h5 class="page-title"></h5>
        </div>
      </div>
    </div>
    <div class="section welcome-section">
      <div class="section-content">
        <div class="card-deck">
          <div class="card welcome-content-card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 welcome-text-wrapper align-self-center">
                  <h5><?php echo $_SESSION['name']; ?></h5>
                  <p>Welcome to your dashboard</p>
                </div>
                <div class="col-md-6 welcome-img-wrapper"><img src="../SiteAssets/images/hello.svg" /></div>
              </div>
            </div>
          </div>
          <div class="card app-stats-card">
            <div class="card-body">
              <div class="row text-center">
                <div class="col-md-4"><i class="las la-user-md la-3x align-self-center"></i>
                  <p>total doctors</p>
                  <h4><a href="specialists.php"><?php echo $count3; ?></a></h4>
                </div>
                <div class="col-md-4"><i class="las la-syringe la-3x align-self-center"></i>
                  <p>total vaccinations</p>
                  <h4><a href="patients.php"><?php echo $count2; ?></a></h4>
                </div>
                <div class="col-md-4"><i class="las la-book la-3x align-self-center"></i>
                  <p>test bookings</p>
                  <h4><a href="hospitals.php"><?php echo $count4; ?></a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="section card-summaries">
      <div class="section-content">
        <div class="card-deck">
          <div class="card">
            <div class="card-header">
              <h5>Vaccines</h5>
            </div>
            <div class="card-body">
              <ol type="1">
                <?php while ($data6 = mysqli_fetch_assoc($row6)) { ?>
                  <li><?php echo $data6['name']; ?></li>
                <?php } ?>
              </ol>
            </div>
            <!-- <div class="card-footer"><a class="view-more" href="procurement.php">more<i class="las la-angle-right"></i></a></div> -->
          </div>
          <div class="card total-counts-summary">
            <div class="card-header">
              <h5>total counts</h5>
            </div>
            <div class="card-body">
              <div class="row text-center text-capitalize">
                <div class="col-md-6"><i class="las la-user-md la-2x mb-1"></i>
                  <h4 class="mb-1"><?php echo $count3; ?></h4>
                  <p>total doctors</p>
                </div>
                <div class="col-md-6"><i class="las la-user-injured la-2x mb-1"></i>
                  <h4 class="mb-1"><?php echo $count2; ?></h4>
                  <p>total vaccinations</p>
                </div>
                <div class="col-md-6"><i class="las la-users la-2x mb-1"></i>
                  <h4 class="mb-1"><?php echo $count5; ?></h4>
                  <p>Pending tests</p>
                </div>
                <div class="col-md-6"><i class="las la-book la-2x mb-1"></i>
                  <h4 class="mb-1"><?php echo $count8; ?></h4>
                  <p>total Tests</p>
                </div>
              </div>
            </div>
            <!-- <div class="card-footer"><a class="view-more" href="">more<i class="las la-angle-right"></i></a></div> -->
          </div>
          <div class="card">
            <div class="card-header">
              <h5>recent vaccinations</h5>
            </div>
            <div class="card-body">
              <table class="table table-hover table-responsive-md table-borderless">
                <tbody>
                  <?php while ($data2 = mysqli_fetch_assoc($row2)) { ?>
                    <tr>
                      <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /></td>
                      <td>
                        <p><?php echo $data2['first_name']; ?></p><small class="text-muted"><?php echo $data2['vaccine_status']; ?></small>
                      </td>
                      <td>
                        <p class="text-muted"><?php echo $data2['gender']; ?></p>
                      </td>
                      <td><?php echo $data2['city']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer"><a class="view-more" href="h-vaccination.php">more<i class="las la-angle-right"></i></a></div>
          </div>
        </div>
        <div class="card-deck">
          <div class="card">
            <div class="card-header">
              <h5>doctors list</h5>
            </div>
            <div class="card-body">
              <table class="table table-borderless table-hover table-responsive-md">
                <tbody>
                  <?php while ($data3 = mysqli_fetch_assoc($row3)) { ?>
                    <tr>
                      <td><img class="rounded-circle" src="<?php echo $data3['dp']; ?>" loading="lazy" /></td>
                      <td>
                        <p>Dr. <?php echo $data3['first_name'] . " " . $data3['last_name']; ?></p><small class="text-muted">dentist</small>
                      </td>
                      <td>
                        <p class="text-muted"><?php echo $data3['gender']; ?></p>
                      </td>
                      <td class="text-right">
                        <p>+<?php echo $data3['phone']; ?></p>
                      </td>
                      <!-- <td class="text-right"><button class="btn btn-dark-red-f btn-sm">appointment</button></td> -->
                      <!-- <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td> -->
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer"><a class="view-more" href="h-specialists.php">more<i class="las la-angle-right"></i></a></div>
          </div>
          <div class="card">
            <div class="card-header">
              <h5>upcoming appointments</h5>
            </div>
            <div class="card-body">
              <table class="table table-borderless table-hover table-responsive-md">
                <tbody>
                <?php while ($data4 = mysqli_fetch_assoc($row4)) { ?>
                    <tr>
                      <!-- <td><img class="rounded-circle" src="" loading="lazy" /></td> -->
                      <td>
                        <p><?php echo $data4['patient_name'];?></p><small class="text-muted"><?php echo $data4['covid_test_status'];?></small>
                      </td>
                      <td>
                        <p class="text-muted"><?php echo $data4['gender']; ?></p>
                      </td>
                      <td class="text-right">
                        <p><?php echo $data4['cnic']; ?></p>
                      </td>
                      <td class="text-right">
                        <p><?php echo $data4['hospital_name']; ?></p>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer"><a class="view-more" href="h-bookings.php">more<i class="las la-angle-right"></i></a></div>
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

  <?php

  // }
  // else{
  // echo 'i am here';
  // echo $_SESSION['admin'];
  // echo "<script>window.open('../../Covid Vaccination/login.php','_self')</script>";
  // }

  ?>