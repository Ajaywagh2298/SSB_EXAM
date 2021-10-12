<?php
$conn = mysqli_connect("localhost","root","","nda_db");

// Check connection
if (mysqli_connect_errno()) {
    ?>
    <script type="text/javascript">console.log("Database Server Not Connected Successfully :<?echo mysqli_connect_error(); ?> ");</script>
    <?php
}else{
    ?>
    <script type="text/javascript">console.log("Database Server  Connected Successfully ");</script>
    <?php
}
?>