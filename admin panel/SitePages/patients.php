<?php
include 'header.php';

$q1 = "SELECT * FROM `users` WHERE `role`='User'";
$row = mysqli_query($db,$q1);
$row2 = mysqli_query($db,$q1);


?>
<link rel="stylesheet" href="../SiteAssets/css/pages/patients.css" />
<script src="../SiteAssets/js/patients.js"></script>


<div class="main-content">
    <div class="container-fluid">
        <div class="section title-section">
            <h5 class="page-title"></h5>
        </div>
        <div class="section filters-section">
            <div class="dropdowns-wrapper">
                <div class="dropdown"><a class="btn btn-dark-red-o dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">filter</a>
                    <div class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">age</a><a class="dropdown-item" href="#">diagnosis</a><a class="dropdown-item" href="#">triage</a></div>
                </div>
                <div class="dropdown"><a class="btn btn-dark-red-o dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">sort by</a>
                    <div class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">patient id</a><a class="dropdown-item" href="#">patient name</a><a class="dropdown-item" href="#">age</a><a class="dropdown-item" href="#">date of birth</a><a class="dropdown-item" href="#">diagnosis</a><a class="dropdown-item" href="#">triage</a></div>
                </div>
            </div>
            <div class="switch-view-btns">
                <div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-darker-grey-o active"><input id="card-view-btn" type="radio" name="options" checked="" /><i class="las la-th-large"></i></label><label class="btn btn-darker-grey-o"><input id="table-view-btn" type="radio" name="options" /><i class="las la-list-ul"></i></label></div>
            </div>
            <div class="buttons-wrapper ml-auto"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>add a new patient</button></div>
        </div>
        <div class="section patients-card-view">
            <div class="row">
            <?php while($data=mysqli_fetch_assoc($row)){ ?>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-img-top"><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                        </div>
                        <div class="card-body">
                            <div class="card-subsection-title">
                                <h5><?php echo $data['first_name']. " " .$data['last_name']; ?></h5>
                                <p class="text-muted">patient-id: <?php echo $data['id']; ?></p>
                            </div>
                            <div class="card-subsection-body"><label class="text-muted">age</label>
                                <p><?php echo $data['age']; ?></p><label class="text-muted">date of birth</label>
                                <p><?php echo $data['dob']; ?></p><label class="text-muted">Vaccination Status</label>
                                <p><?php echo $data['vaccine_status']; ?></p>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <?php } ?>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-img-top"><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                        </div>
                        <div class="card-body">
                            <div class="card-subsection-title">
                                <h5>john doe</h5>
                                <p class="text-muted">patient-id: 2189178</p>
                            </div>
                            <div class="card-subsection-body"><label class="text-muted">age</label>
                                <p>29</p><label class="text-muted">date of birth</label>
                                <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                                <p>non urgent</p>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-img-top"><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                        </div>
                        <div class="card-body">
                            <div class="card-subsection-title">
                                <h5>john doe</h5>
                                <p class="text-muted">patient-id: 2189178</p>
                            </div>
                            <div class="card-subsection-body"><label class="text-muted">age</label>
                                <p>29</p><label class="text-muted">date of birth</label>
                                <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                                <p>resuscitation</p>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-img-top"><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                        </div>
                        <div class="card-body">
                            <div class="card-subsection-title">
                                <h5>john doe</h5>
                                <p class="text-muted">patient-id: 2189178</p>
                            </div>
                            <div class="card-subsection-body"><label class="text-muted">age</label>
                                <p>29</p><label class="text-muted">date of birth</label>
                                <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                                <p>emergency</p>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-img-top"><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                        </div>
                        <div class="card-body">
                            <div class="card-subsection-title">
                                <h5>john doe</h5>
                                <p class="text-muted">patient-id: 2189178</p>
                            </div>
                            <div class="card-subsection-body"><label class="text-muted">age</label>
                                <p>29</p><label class="text-muted">date of birth</label>
                                <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                                <p>urgent</p>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-img-top"><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                        </div>
                        <div class="card-body">
                            <div class="card-subsection-title">
                                <h5>john doe</h5>
                                <p class="text-muted">patient-id: 2189178</p>
                            </div>
                            <div class="card-subsection-body"><label class="text-muted">age</label>
                                <p>29</p><label class="text-muted">date of birth</label>
                                <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                                <p>non urgent</p>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-img-top"><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                        </div>
                        <div class="card-body">
                            <div class="card-subsection-title">
                                <h5>john doe</h5>
                                <p class="text-muted">patient-id: 2189178</p>
                            </div>
                            <div class="card-subsection-body"><label class="text-muted">age</label>
                                <p>29</p><label class="text-muted">date of birth</label>
                                <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                                <p>resuscitation</p>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-img-top"><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                        </div>
                        <div class="card-body">
                            <div class="card-subsection-title">
                                <h5>john doe</h5>
                                <p class="text-muted">patient-id: 2189178</p>
                            </div>
                            <div class="card-subsection-body"><label class="text-muted">age</label>
                                <p>29</p><label class="text-muted">date of birth</label>
                                <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                                <p>emergency</p>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section patients-table-view no-display">
            <table class="table table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>patient ID</th>
                        <th>patient name</th>
                        <th>date of birth</th>
                        <th>gender</th>
                        <th>city</th>
                        <th>CNIC</th>
                        <th>triage</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($data2=mysqli_fetch_assoc($row2)){ ?>
                    <tr>
                        <td><?php echo $data2['id']; ?></td>
                        <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2"><?php echo $data2['first_name']." ".$data2['last_name']; ?></span></td>
                        <td><?php echo $data2['dob']; ?></td>
                        <td><?php echo $data2['gender']; ?></td>
                        <td><?php echo $data2['city']; ?></td>
                        <td><?php echo $data2['cnic']; ?></td>
                        <!-- <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td> -->
                        <td><label class="
                        <?php 
                        if($data2['covid_test_status'] == 'Covid Positive'){
                            echo "label-pink";
                        }elseif($data2['vaccine_status'] == 'Not Vaccinated'){
                            echo "label-orange";
                        }elseif($data2['vaccine_status'] == 'Pending'){
                            echo "label-blue";
                        }elseif($data2['vaccine_status'] == 'Vaccinated'){
                            echo "label-green";
                        }
                        ?>
                        "><?php
                        if($data2['covid_test_status'] == 'Covid Positive'){
                            echo $data2['covid_test_status'];
                        }elseif($data2['vaccine_status'] == 'Not Vaccinated' || $data2['vaccine_status'] == 'Pending'){
                            echo $data2['vaccine_status'];
                        }elseif($data2['vaccine_status'] == 'Vaccinated'){
                            echo $data2['vaccine_status'] ."(" .$data2['vaccine doses'] . ")";
                        } ?></label></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td>2189178</td>
                        <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                        <td>29 yo</td>
                        <td>21/03/1992</td>
                        <td>cancer</td>
                        <td><label class="label-green">non urgent</label></td>
                        <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
                    </tr>
                    <tr>
                        <td>2189178</td>
                        <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                        <td>29 yo</td>
                        <td>21/03/1992</td>
                        <td>cancer</td>
                        <td><label class="label-blue">resuscitation</label></td>
                        <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
                    </tr>
                    <tr>
                        <td>2189178</td>
                        <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                        <td>29 yo</td>
                        <td>21/03/1992</td>
                        <td>cancer</td>
                        <td><label class="label-pink">emergency</label></td>
                        <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
                    </tr>
                    <tr>
                        <td>2189178</td>
                        <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                        <td>29 yo</td>
                        <td>21/03/1992</td>
                        <td>cancer</td>
                        <td><label class="label-orange">urgent</label></td>
                        <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
                    </tr>
                    <tr>
                        <td>2189178</td>
                        <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                        <td>29 yo</td>
                        <td>21/03/1992</td>
                        <td>cancer</td>
                        <td><label class="label-green">non urgent</label></td>
                        <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
                    </tr>
                    <tr>
                        <td>2189178</td>
                        <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                        <td>29 yo</td>
                        <td>21/03/1992</td>
                        <td>cancer</td>
                        <td><label class="label-blue">resuscitation</label></td>
                        <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
                    </tr>
                    <tr>
                        <td>2189178</td>
                        <td><img class="rounded-circle" src="../SiteAssets/images/people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                        <td>29 yo</td>
                        <td>21/03/1992</td>
                        <td>cancer</td>
                        <td><label class="label-pink">emergency</label></td>
                        <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <footer>
            <div class="page-footer text-center">
                <div class="fixed-bottom shadow-sm"><a href="https://covid19.who.int" target="_blank"><img src="../SiteAssets/images/covid-19.svg" /><span>view COVID-19 info</span></a></div>
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