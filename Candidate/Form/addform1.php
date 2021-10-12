<?php include "connection.php"; ?>
<?php session_start(); ?>

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
        mysqli_query( $conn,"insert into candidate_t values ('$_POST[cad_regist_id]','$_POST[name]','$_POST[sex]','$_POST[birth_date]','$_POST[f_name]','$_POST[m_name]','$_POST[aadhar_num]','$_POST[nationality]','$_POST[marital]','$_POST[community]','$_POST[minority_status]','$_POST[religion]','$_POST[creamy_code]','$_POST[certificate_num]','$_POST[certificate_issue]','$_POST[certificate_date]','$_POST[qualcode]','$_POST[addres1]','$_POST[addres2]','$_POST[addres2]','$_POST[state]','$_POST[district]','$_POST[pincode]','$_POST[phone]','$_POST[mobile]','$_POST[email]','$_POST[a_email]')")or die( mysqli_error( $conn ) );


    $_SESSION['cad_regist_id'] = $_POST['cad_regist_id'];

        ?>
        <script type="text/javascript">
            alert( "Registered successfully!" );
            window.location = "secondform.php";
        </script>

        <?php

}
?>
