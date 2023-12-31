<?php

include 'db.php';

if (isset($_SESSION['admin'])) {

  $admin = $_SESSION['admin'];
  $q = "SELECT * FROM `users` WHERE `email` = '$admin' OR `phone`='$admin'";
  $run = mysqli_query($db, $q);
  $data = mysqli_fetch_assoc($run);

  $_SESSION['id'] = $data['id'];
  $_SESSION['email'] = $data['email'];
  $_SESSION['first_name'] = $data['first_name'];
  $_SESSION['last_name'] = $data['last_name'];
  $_SESSION['cnic'] = $data['cnic'];
  $_SESSION['dp'] = $data['dp'];
  $_SESSION['pwd'] = $data['pwd'];
  $_SESSION['city'] = $data['city'];
  $_SESSION['role'] = $data['role'];
  $_SESSION['phone'] = $data['phone'];
  $_SESSION['dob'] = $data['dob'];
  $_SESSION['age'] = $data['age'];

?>
  <html>

  <head>
    <title>Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../SiteAssets/css/vendors/bootstrap.min.css" />
    <link rel="stylesheet" href="../SiteAssets/css/vendors/line-awesome.min.css" />
    <link rel="stylesheet" href="../SiteAssets/css/pages/layout.css" />
    <link rel="icon" href="../SiteAssets/images/covid-19.ico" />
    <script src="../SiteAssets/js/vendors/jquery.min.js"></script>
    <script src="../SiteAssets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="../SiteAssets/js/global.js"></script>
    <link rel="stylesheet" href="../SiteAssets/css/pages/dashboard.css" />
    <link rel="stylesheet" href="../SiteAssets/css/vendors/Chart.min.css" />
    <script src="../SiteAssets/js/vendors/Chart.bundle.min.js"></script>
    <script src="../SiteAssets/js/dashboard.js"></script>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg shadow-sm fixed-top"><a class="navbar-brand" href="dashboard.php" title="Covid Test and Vaccination System"><span>CTVS</span></a>
        <div class="navbar-collapse">
          <ul class="navbar-nav">
            
            <li class="nav-item"><a class="nav-link profile-dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="rounded-circle" src="<?php echo $_SESSION['dp']; ?>" /><span class="d"><?php echo $_SESSION['first_name']; ?></span></a>
              <div class="dropdown">
                <div class="dropdown-menu shadow-lg profile-dropdown-menu" aria-labelledby="profile-dropdown"><a class="dropdown-item" href="settings.php"><i class="las la-cog mr-2"></i>setting</a><a class="dropdown-item" href="../../logout.php"><i class="las la-user mr-2"></i>logout</a></div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <div class="side-nav">
        <ul class="list-group list-group-flush"><a class="list-group-item" href="dashboard.php" data-toggle="tooltip" data-placement="bottom" title="Dashboard"><i class="las la-shapes la-lw"></i><span>dashboard</span></a><a class="list-group-item" href="patients.php" data-toggle="tooltip" data-placement="bottom" title="Patients"><i class="las la-user-injured la-lw"></i><span>patients</span></a><a class="list-group-item" href="hospitals.php" data-toggle="tooltip" data-placement="bottom" title="Hospitals"><i class="las la-clinic-medical"></i><span>hospitals</span></a><a class="list-group-item" href="specialists.php" data-toggle="tooltip" data-placement="bottom" title="Specialists"><i class="la-lw las la-user-md"></i><span>specialists</span></a><a class="list-group-item" href="procurement.php" data-toggle="tooltip" data-placement="bottom" title="Procurement"><i class="las la-shopping-cart la-lw"></i><span>procurement</span></a><a class="list-group-item" href="bookings.php" data-toggle="tooltip" data-placement="bottom" title="Bookings"><i class="las la-book la-lw"></i><span>Bookings</span></a><a class="list-group-item" href="vaccination.php" data-toggle="tooltip" data-placement="bottom" title="Vaccination"><i class="las la-syringe la-lw"></i><span>Vaccination</span></a><a class="list-group-item" href="settings.php" data-toggle="tooltip" data-placement="bottom" title="Settings"><i class="las la-cogs la-lw"></i><span>settings</span></a>
          <hr class="divider" />
        </ul>
      </div>

    <?php

  } else {
    echo "<script>window.open('../../login.php','_self')</script>";
  }

    ?>