<?php
include 'header.php';

$q1 = "SELECT * FROM `hospitals`";
$row1 = mysqli_query($db,$q1);
// $data1 = mysqli_fetch_assoc($run1);


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>







<br><br>
<!-- <section class="section-padding" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="mb-lg-3 mb-3">Hashmanis Hospital </h2>

                <h3>Dr. M. Mansoor</h3>

                <p>Urologist, General Surgeon <br>MBBS, FCPS (Surgery), FCPS (Urology)</p>

                <p>You can feel free to use this CSS template for your medical profession or health care related websites. You can <a rel="nofollow" href="http://paypal.me/templatemo" target="_blank">support us a little</a> via PayPal if this template is good and useful for your work.</p>
            </div>

            <div class="col-lg-4 col-md-5 col-12 mx-auto">
                <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                    <p class="featured-text"><span class="featured-number">12</span> Years<br> of Experiences</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<div class="container mt-3">
        <h2>Hospitals</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Hospital Code</th>
              <th>Phone</th>
              <th>City</th>
              <th>Address</th>
              <th>No. of Doctors</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($data1 = mysqli_fetch_assoc($row1)) {
            ?>
              <tr>
                <td><?php echo $data1['name']; ?></td>
                <td><?php echo $data1['email']; ?></td>
                <td><?php echo $data1['hospital_code']; ?></td>
                <td><?php echo $data1['phone']; ?></td>
                <td><?php echo $data1['city']; ?></td>
                <td><?php echo $data1['address']; ?></td>
                <td><?php echo $data1['no_of_specialists']; ?></td>
              </tr>

            <?php } ?>

          </tbody>
        </table>
        <br><br>

      </div>
</main>

<?php
include 'footer.php';
?>