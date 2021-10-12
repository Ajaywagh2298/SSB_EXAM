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
    $photo = rand(1000,10000)."=".$_FILES["photo"]["name"];
    $sign = rand(1000,10000)."=".$_FILES["sign"]["name"];

    $tname = $_FILES["photo"]["tmp_name"];
    $tname2 = $_FILES["sign"]["tmp_name"];

    $upload_file ='../Candidate_file/Candidate_photo';
    $upload_file1 ='../Candidate_file/Candidate_sign';

    move_uploaded_file($tname,$upload_file.'/'.$photo);
    move_uploaded_file($tname2,$upload_file1.'/'.$sign);

    mysqli_query( $conn,"INSERT INTO `candidate_t1`VALUES (NULL,'$_POST[cad_reg_id]','$_POST[proof]','$_POST[proof_id]','$photo','$sign','$_POST[military_school_student]','$_POST[son_military_staff]','$_POST[ncc_cad]','','','')")or die( mysqli_error( $conn ) );

    ?>
    <script type="text/javascript">
        alert( "Form Uploaded successfully!" );
        window.location = "../../index.php";
    </script>
    <?php

}

?>
