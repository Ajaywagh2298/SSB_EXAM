<?php include "../connection.php"; ?>
<?php session_start();
$email = $_SESSION['email']; ?>
<?php
$res=mysqli_query($conn,"select * from admin where email ='$email'");
$rows =mysqli_fetch_all($res,MYSQLI_ASSOC);
foreach($rows as $row );
?>