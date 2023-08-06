
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="pic">
    <button name="changepic">submit</button>
</form>

<?php
include 'db.php';

if (isset($_POST['changepic'])) {


    $id = $_SESSION['id'];
    $f = $_FILES['pic']['name'];
    $src = $_FILES['pic']['tmp_name'];
    $des = "../SiteAssets/images/" . $f;
    move_uploaded_file($src, $des);

    $q3 = "UPDATE `users` SET `dp`='$des' WHERE `id`='$id'";
    // print_r($q3);
    // exit();

    mysqli_query($db, $q3);
}
?>