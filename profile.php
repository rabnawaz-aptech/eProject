<?php
include 'db.php';
// echo $_SESSION['profile'];

  if(isset($_SESSION['profile'])){

    // include 'header.php';
    // echo 'i am here';
    

?>
<br><br>

<a href="logout.php"><button>logout</button></a>

<?php

}else{
    // echo 'i am here';
  echo "<script>window.open('login.php','_self')</script>";
}


?>