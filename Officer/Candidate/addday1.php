<?php include "connection.php"; ?>
<?php session_start(); ?>

<?php
if ( isset( $_POST[ "submit" ] ) ) {

    mysqli_query( $conn,"")or die( mysqli_error( $conn ) );


    $_SESSION['cad_regist_id'] = $_POST['cad_regist_id'];

    ?>
    <script type="text/javascript">
        alert( "Registered successfully!" );
        window.location = "secondform.php";
    </script>
    <?php

}
?>

