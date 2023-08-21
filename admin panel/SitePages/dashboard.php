<?php

// include 'db.php';
include 'header.php';

$q1 = "SELECT * FROM `users`";
$row = mysqli_query($db, $q1);
$count = mysqli_num_rows($row);

$q2 = "SELECT * FROM `users` WHERE `role`='User'";
$row2 = mysqli_query($db, $q2);
$count2 = mysqli_num_rows($row2);

$q3 = "SELECT * FROM `specialists`";
$row3 = mysqli_query($db, $q3);
$count3 = mysqli_num_rows($row3);

$q4 = "SELECT * FROM `hospitals`";
$row4 = mysqli_query($db, $q4);
$count4 = mysqli_num_rows($row4);

$q5 = "SELECT * FROM `specialists`";
$row5 = mysqli_query($db, $q5);
$count5 = mysqli_num_rows($row5);

$q6 = "SELECT * FROM `vaccines`";
$row6 = mysqli_query($db, $q6);
$count6 = mysqli_num_rows($row6);

$q7 = "SELECT * FROM `covid_test_report` WHERE `covid_test_status`='Pending'";
$row7 = mysqli_query($db, $q7);
$count7 = mysqli_num_rows($row7);

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
                  <h5>hello, dr. <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></h5>
                  <p>Welcome to your dashboard</p>
                </div>
                <div class="col-md-6 welcome-img-wrapper"><img src="../SiteAssets/images/hello.svg" /></div>
              </div>
            </div>
          </div>
          <div class="card app-stats-card">
            <div class="card-body">
              <div class="row text-center">
                <div class="col-md-4"><i class="las la-user-injured la-3x align-self-center"></i>
                  <p>total patients</p>
                  <h4><a href="patients.php"><?php echo $count2; ?></a></h4>
                </div>
                <div class="col-md-4"><i class="las la-user-md la-3x align-self-center"></i>
                  <p>total doctors</p>
                  <h4><a href="specialists.php"><?php echo $count3; ?></a></h4>
                </div>
                <div class="col-md-4"><i class="las la-clinic-medical la-3x align-self-center"></i>
                  <p>total hospitals</p>
                  <h4><a href="hospitals.php"><?php echo $count4; ?></a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section functionality-section">
      <div class="section-content">
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
                  <!-- <li>scaling</li>
                <li>root canal</li>
                <li>bleaching</li>
                <li>transplants</li>
                <li>cesarean</li>
                <li>x-rays</li> -->
                <?php } ?>
              </ol>
            </div>
            <div class="card-footer"><a class="view-more" href="procurement.php">more<i class="las la-angle-right"></i></a></div>
          </div>
          <div class="card total-counts-summary">
            <div class="card-header">
              <h5>total counts</h5>
            </div>
            <div class="card-body">
              <div class="row text-center text-capitalize">
                <div class="col-md-6"><i class="las la-users la-2x mb-1"></i>
                  <h4 class="mb-1"><?php echo $count; ?></h4>
                  <p>total users</p>
                </div>
                <div class="col-md-6"><i class="las la-user-md la-2x mb-1"></i>
                  <h4 class="mb-1"><?php echo $count3; ?></h4>
                  <p>total doctors</p>
                </div>
                <div class="col-md-6"><i class="las la-user-injured la-2x mb-1"></i>
                  <h4 class="mb-1"><?php echo $count2; ?></h4>
                  <p>total patients</p>
                </div>
                <div class="col-md-6"><i class="las la-hospital la-2x mb-1"></i>
                  <h4 class="mb-1"><?php echo $count4; ?></h4>
                  <p>total hospitals</p>
                </div>
              </div>
            </div>
            <div class="card-footer"><a class="view-more" href="">more<i class="las la-angle-right"></i></a></div>
          </div>
          <div class="card">
            <div class="card-header">
              <h5>recent patients</h5>
            </div>
            <div class="card-body">
              <table class="table table-hover table-responsive-md table-borderless">
                <tbody>
                  <?php while ($data2 = mysqli_fetch_assoc($row2)) { ?>
                    <tr>
                      <td><img class="rounded-circle" src="<?php echo $data2['dp']; ?>" loading="lazy" /></td>
                      <td>
                        <p><?php echo $data2['first_name']; ?></p><small class="text-muted">dentist</small>
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
            <div class="card-footer"><a class="view-more" href="patients.php">more<i class="las la-angle-right"></i></a></div>
          </div>
        </div>
        <div class="card-deck">
          <div class="card">
            <div class="card-header">
              <h5>doctors lists</h5>
            </div>
            <div class="card-body">
              <table class="table table-borderless table-hover table-responsive-md">
                <tbody>
                  <?php while ($data5 = mysqli_fetch_assoc($row5)) { ?>
                    <tr>
                      <td><img class="rounded-circle" src="<?php echo $data5['dp']; ?>" loading="lazy" /></td>
                      <td>
                        <p>Dr. <?php echo $data5['first_name'] . " " . $data5['last_name']; ?></p><small class="text-muted">dentist</small>
                      </td>
                      <td>
                        <p class="text-muted"><?php echo $data5['gender']; ?></p>
                      </td>
                      <td class="text-right">
                        <p>+<?php echo $data5['phone']; ?></p>
                      </td>
                      <!-- <td class="text-right"><button class="btn btn-dark-red-f btn-sm">appointment</button></td> -->
                      <!-- <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td> -->
                    </tr>
                  <?php } ?>
                  <!-- <tr>
                    <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                    <td>
                      <p>john doe</p><small class="text-muted">dentist</small>
                    </td>
                    <td>
                      <p class="text-muted">male</p>
                    </td>
                    <td class="text-right">
                      <p>+271289178</p>
                    </td>
                    <td class="text-right"><button class="btn btn-dark-red-f btn-sm">appointment</button></td>
                    <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                  </tr>
                  <tr>
                    <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                    <td>
                      <p>john doe</p><small class="text-muted">dentist</small>
                    </td>
                    <td>
                      <p class="text-muted">male</p>
                    </td>
                    <td class="text-right">
                      <p>+271289178</p>
                    </td>
                    <td class="text-right"><button class="btn btn-dark-red-f btn-sm">appointment</button></td>
                    <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                  </tr>
                  <tr>
                    <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                    <td>
                      <p>john doe</p><small class="text-muted">dentist</small>
                    </td>
                    <td>
                      <p class="text-muted">male</p>
                    </td>
                    <td class="text-right">
                      <p>+271289178</p>
                    </td>
                    <td class="text-right"><button class="btn btn-dark-red-f btn-sm">appointment</button></td>
                    <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                  </tr> -->
                </tbody>
              </table>
            </div>
            <div class="card-footer"><a class="view-more" href="specialists.php">more<i class="las la-angle-right"></i></a></div>
          </div>
          <div class="card">
            <div class="card-header">
              <h5>upcoming appointments</h5>
            </div>
            <div class="card-body">
              <table class="table table-borderless table-hover table-responsive-md">
                <tbody>
                  <?php while ($data7 = mysqli_fetch_assoc($row7)) { ?>
                    <tr>
                      <!-- <td><img class="rounded-circle" src="" loading="lazy" /></td> -->
                      <td>
                        <p>Dr. <?php echo $data7['patient_name'];?></p><small class="text-muted"><?php echo $data7['covid_test_status'];?></small>
                      </td>
                      <td>
                        <p class="text-muted"><?php echo $data7['gender']; ?></p>
                      </td>
                      <td class="text-right">
                        <p><?php echo $data7['cnic']; ?></p>
                      </td>
                      <td class="text-right">
                        <p><?php echo $data7['hospital_name']; ?></p>
                      </td>
                      <!-- <td class="text-right"><button class="btn btn-dark-red-f btn-sm">appointment</button></td> -->
                      <!-- <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td> -->
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer"><a class="view-more" href="bookings.php">more<i class="las la-angle-right"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="modal onboarding-modal" tabindex="=1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Welcome</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="las la-times-circle"></i></button>
          </div>
          <div class="modal-body">
            <div class="carousel slide" id="carouselExampleCaptions" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active"><img class="d-block" src="../SiteAssets/images/undraw_dashboard_nklg.svg" alt="..." />
                  <div class="carousel-caption d-md-block">
                    <p>intuitive<a href="" data-dismiss="modal">dashboard<i class="las la-external-link-alt"></i></a></p>
                  </div>
                </div>
                <div class="carousel-item"><img class="d-block" src="../SiteAssets/images/undraw_medicine_b1ol.svg" alt="..." />
                  <div class="carousel-caption d-md-block">
                    <p>access to<a href="specialists.html">specialists<i class="las la-external-link-alt"></i></a></p>
                  </div>
                </div>
                <div class="carousel-item"><img class="d-block" src="../SiteAssets/images/undraw_receipt_ecdd.svg" alt="..." />
                  <div class="carousel-caption d-md-block">
                    <p>simple<a href="procurement.html">procurement<i class="las la-external-link-alt"></i></a>process</p>
                  </div>
                </div>
                <div class="carousel-item"><img class="d-block" src="../SiteAssets/images/undraw_new_notifications_fhvw.svg" alt="..." />
                  <div class="carousel-caption d-md-block">
                    <p>comprehensive<a href="notifications.html">notification<i class="las la-external-link-alt"></i></a>center</p>
                  </div>
                </div>
                <div class="carousel-item"><img class="d-block" src="../SiteAssets/images/undraw_Preferences_re_49in.svg" alt="..." />
                  <div class="carousel-caption d-md-block">
                    <p>minimalist<a href="settings.html">settings<i class="las la-external-link-alt"></i></a>center</p>
                  </div>
                </div>
              </div><a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"><i class="las la-chevron-circle-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"><i class="las la-chevron-circle-right"></i><span class="sr-only">Next</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
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