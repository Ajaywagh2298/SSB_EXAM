<?php include "connection.php"; ?>

<?php
if ( isset( $_POST[ "submit" ] ) ) {
    /* $count = 0;
     $res = mysqli_query( $conn, "select * from candidate_t where cad_regist_id='$_POST[cad_regist_id]'" )or die( mysqli_error( $conn ) );
     $count = mysqli_num_rows( $res );

     if ( $count > 0 ) {
         ?>
         <script type="text/javascript">
             alert( "Registration Number already Exist!" );
             window.location.href = window.location.href;
         </script>
         <?php
     } else  {*/
    mysqli_query( $conn,"UPDATE `candidate_t1` SET `center_1`='$_POST[center1]',`center_2`='$_POST[center2]',`center_3`='$_POST[center3]' WHERE `cad_regist_id`='$_POST[cad_re_id]'")or die( mysqli_error( $conn ) );



    ?>
    <script type="text/javascript">
        alert( "Registered successfully!" );
        window.location = "payment.php";
    </script>
    <?php

}
?>
