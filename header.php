<?php
include 'db.php';


if (isset($_SESSION['profile'])) {


    $_SESSION['Email'] = $_COOKIE['profile'];
    $p = $_SESSION['Email'];


    echo "<style>.login1{display: none !important;} .login2{display: block !important;}</style>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medic Care Bootstrap 5 CSS Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/owl.carousel.min.css" rel="stylesheet">

    <link href="css/owl.theme.default.min.css" rel="stylesheet">

    <link href="css/templatemo-medic-care.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>





    <!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                    Medic Care
                    <strong class="d-block">Health Specialist</strong>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="hospitals.php">Hospitals</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#timeline">Timeline</a>
                            </li>

                            <a class="navbar-brand d-none d-lg-block" href="index.html">
                                Medic Care
                                <strong class="d-block">Health Specialist</strong>
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="booking.php">Bookings</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item sm_screen">
                                <a class="nav-link " href="login.php">Login</a>
                            </li>
                            <li class="nav-item sm_screen">
                                <a class="nav-link " href="signup.php">Signin</a>
                            </li>

                        </ul>
                    </div>

                </div>
                <a href="login.php"><button type="button" class="btn btn-primary login_btn lg_screen">login</button></a>&nbsp;
                <a href="signup.php"><button type="button" class="btn btn-primary sign_btn lg_screen">Signup</button></a>
        </nav>
        </div>