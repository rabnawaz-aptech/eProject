<?php
include 'header.php';

$q1 = "SELECT * FROM `users` WHERE `role`='Specialist'";
$row = mysqli_query($db,$q1);
// $data = mysqli_fetch_assoc($run);

?>
<link rel="stylesheet" href="../SiteAssets/css/pages/specialists.css" />
<script src="../SiteAssets/js/spaecialists.js"></script>


<div class="main-content">
    <div class="container-fluid">
        <div class="section title-section">
            <h5 class="page-title"></h5>
        </div>
        <div class="section filters-section justify-content-between">
            <div class="dropdowns-wrapper">
                <div class="dropdown"><a class="btn btn-dark-red-o dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">filter</a>
                    <div class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">name</a><a class="dropdown-item" href="#">gender</a><a class="dropdown-item" href="#">specialization</a><a class="dropdown-item" href="#">email</a><a class="dropdown-item" href="#">phone no.</a><a class="dropdown-item" href="#">address</a></div>
                </div>
                <div class="dropdown"><a class="btn btn-dark-red-o dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">sort by</a>
                    <div class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">name</a><a class="dropdown-item" href="#">gender</a><a class="dropdown-item" href="#">specialization</a><a class="dropdown-item" href="#">email</a><a class="dropdown-item" href="#">phone no.</a><a class="dropdown-item" href="#">address</a></div>
                </div>
            </div>
            <a href="add-a-specialist.php"><div class="buttons-wrapper"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>add a new specialist</button></div></a>
        </div>
        <div class="section specialists-table-view">
            <table class="table table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>gender</th>
                        <th>specialization</th>
                        <th>email</th>
                        <th>phone no.</th>
                        <th>City</th>
                        <th></th>
                        <!-- <th></th> -->
                    </tr>
                </thead>
                <tbody>
                <?php while($data=mysqli_fetch_assoc($row)){ ?>
                    <tr>
                        <td><img class="rounded-circle mr-1" src="<?php echo $data['dp']; ?>" loading="lazy" /><span class="ml-2"><?php echo $data['first_name']; ?> <?php echo $data['last_name']; ?></span></td>
                        <td class="text-muted"><?php echo $data['gender']; ?></td>
                        <td><?php echo $data['role']; ?></td>
                        <td class="text-lowercase text-muted"><a href=""><?php echo $data['email']; ?></a></td>
                        <td><?php echo $data['phone']; ?></td>
                        <td class="text-muted"><a href=""><?php echo $data['city']; ?></a></td>
                        <td><button class="btn btn-sm btn-dark-red-f">appointment</button></td>
                        <!-- <td><a href=""><i class="las la-ellipsis-h"></i></a></td> -->
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
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